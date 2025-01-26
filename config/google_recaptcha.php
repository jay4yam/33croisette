<?php

    return [
        'site_key' => env('GOOGLE_RECAPTCHA_SITE_KEY'),

        'use_credentials' => 'default',

        'project_id' => env('RECAPTCHA_ENTERPRISE_PROJECT_ID'),

        'credentials' => [
            'default' => [
                'type' => 'service_account',
                'project_id' => env('RECAPTCHA_ENTERPRISE_PROJECT_ID'),
                'private_key_id' => env('RECAPTCHA_ENTERPRISE_PRIVATE_KEY_ID'),
                'private_key' => env('RECAPTCHA_ENTERPRISE_PRIVATE_KEY'),
                'client_email' => $email = env('RECAPTCHA_ENTERPRISE_CLIENT_EMAIL'),
                'client_id' => env('RECAPTCHA_ENTERPRISE_CLIENT_ID'),
                'client_secret' => env('RECAPTCHA_ENTERPRISE_CLIENT_SECRET'),
                'auth_uri' => "https://accounts.google.com/o/oauth2/auth",
                'token_uri' => "https://oauth2.googleapis.com/token",
                'auth_provider_x509_cert_url' => "https://www.googleapis.com/oauth2/v1/certs",
                'client_x509_cert_url' => "https://www.googleapis.com/robot/v1/metadata/x509/recaptcha-enterprise-agent%40croisette-1737788944077.iam.gserviceaccount.com",
                'universe_domain' => "googleapis.com"
                ],
        ],
    ];
