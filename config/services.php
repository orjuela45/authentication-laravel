<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'microsoft' => [
        'client_id' => env('MICROSOFT_KEY_ID'),
        'client_secret' => env('MICROSOFT_ACCESS_KEY'),
        'redirect' => 'http://127.0.0.1:8000/auth/microsoft/callback',
    ],

    'google' => [
        'client_id' => env('GOOGLE_KEY_ID'),
        'client_secret' => env('GOOGLE_ACCESS_KEY'),
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],

    'orcid' => [
        'client_id' => env('ORCID_KEY_ID'),
        'client_secret' => env('ORCID_ACCESS_KEY'),
        'redirect' => 'http://127.0.0.1:8000/auth/orcid/callback',
    ],

];
