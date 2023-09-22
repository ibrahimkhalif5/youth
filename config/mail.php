<?php

return [

   

    'default' => env('MAIL_MAILER', 'smtp'),

   

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.elasticemail.com'), // Update the host
            'port' => env('MAIL_PORT', 2525), // Update the port
            'encryption' => env('MAIL_ENCRYPTION', 'tls'), // Update the encryption method
            'username' => env('MAIL_USERNAME'), // Your Elastic Email username
            'password' => env('MAIL_PASSWORD'), // Your Elastic Email API key
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN'),
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'postmark' => [
            'transport' => 'postmark',
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],
    ],



    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

 

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];