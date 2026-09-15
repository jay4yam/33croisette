<?php

return [
    'site_key' => env('GOOGLE_RECAPTCHA_SITE_KEY'),

    'minimum_score' => env('GOOGLE_RECAPTCHA_MINIMUM_SCORE', 0.5),

    'project_id' => env('RECAPTCHA_ENTERPRISE_PROJECT_ID'),
];
