<?php

namespace App\Services;

use Google\ApiCore\ValidationException;
use Google\Cloud\RecaptchaEnterprise\V1\Assessment;
use Google\Cloud\RecaptchaEnterprise\V1\Client\RecaptchaEnterpriseServiceClient;
use Google\Cloud\RecaptchaEnterprise\V1\CreateAssessmentRequest;
use Google\Cloud\RecaptchaEnterprise\V1\Event;
use Google\Cloud\RecaptchaEnterprise\V1\TokenProperties\InvalidReason;
use Illuminate\Support\Facades\Log;

class RecaptchaService
{
    private string $recaptchaKey;
    private string $project_id;
    private string $action = "request";

    public function __construct()
    {
        $this->recaptchaKey = config('google_recaptcha.site_key');
    }

    protected static function credentials(): array
    {
        $useCredentials = file_get_contents( base_path('application_default_credentials.json') );

        return json_decode($useCredentials, true);
    }

    /**
     * Retourne le score du contrôle de captcha
     * @param string $token
     * @return array
     * @throws ValidationException
     */
    public function create_assessment(string $token): array
    {
        // Create the reCAPTCHA client.
        $client = new RecaptchaEnterpriseServiceClient([ 'credentials' => static::credentials()] );
        $projectName = $client->projectName( config('google_recaptcha.project_id') );

        // Set the properties of the event to be tracked.
        $event = (new Event())
            ->setSiteKey($this->recaptchaKey)
            ->setToken($token);

        // Build the assessment request.
        $assessment = (new Assessment())
            ->setEvent($event);

        try {
            $response = $client->createAssessment( CreateAssessmentRequest::build($projectName, $assessment) );

            // Check if the token is valid.
            if ($response->getTokenProperties()->getValid() == false) {
                Log::debug('The CreateAssessment() call failed because the token was invalid for the following reason: ');
                Log::debug(InvalidReason::name($response->getTokenProperties()->getInvalidReason()));
                return ['score' => 0, 'reason' => null];
            }

            // Check if the expected action was executed.
            if ($response->getTokenProperties()->getAction() == $this->action) {
                // Get the risk score and the reason(s).
                // For more information on interpreting the assessment, see:
                // https://cloud.google.com/recaptcha-enterprise/docs/interpret-assessment
                Log::debug('The score for the protection action is:');
                Log::debug($response->getRiskAnalysis()->getScore());

                return ['score' => $response->getRiskAnalysis()->getScore(), 'reason' => $response->getRiskAnalysis()->getReasons()];
            } else {
                Log::debug('The action attribute in your reCAPTCHA tag does not match the action you are expecting to score');
            }
        } catch (\Exception $e) {
            Log::error('CreateAssessment() call failed with the following error: ');
            Log::error($e);
        } finally {
            $client->close();
        }

        return ['score' => 0, 'reason' => null];
    }
}
