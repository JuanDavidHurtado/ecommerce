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

    'google' => [
        'client_id' => '626700083421-36hnffcp6nlup430tog164qh28hc6qgg.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/api/callback',
    ],

    'facebook' => [
        'client_id' => '859212225955238',
        'client_secret' => '807d042c9581871e267ad8ba76490003',
        'redirect' => 'https://127.0.0.1:8000/api/callback-facebook',
    ],



];
