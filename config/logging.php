<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;
<<<<<<< HEAD
=======
use Monolog\Processor\PsrLogMessageProcessor;
>>>>>>> cfd92e515c7beca7785ce7f9f8ba2057ff6025a0

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
<<<<<<< HEAD
    | This option defines the default log channel that gets used when writing
    | messages to the logs. The name specified in this option should match
    | one of the channels defined in the "channels" configuration array.
=======
    | This option defines the default log channel that is utilized to write
    | messages to your logs. The value provided here should match one of
    | the channels present in the list of "channels" configured below.
>>>>>>> cfd92e515c7beca7785ce7f9f8ba2057ff6025a0
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Deprecations Log Channel
    |--------------------------------------------------------------------------
    |
    | This option controls the log channel that should be used to log warnings
    | regarding deprecated PHP and library features. This allows you to get
    | your application ready for upcoming major versions of dependencies.
    |
    */

<<<<<<< HEAD
    'deprecations' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
=======
    'deprecations' => [
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
        'trace' => env('LOG_DEPRECATIONS_TRACE', false),
    ],
>>>>>>> cfd92e515c7beca7785ce7f9f8ba2057ff6025a0

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
<<<<<<< HEAD
    | Here you may configure the log channels for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog",
    |                    "custom", "stack"
=======
    | Here you may configure the log channels for your application. Laravel
    | utilizes the Monolog PHP logging library, which includes a variety
    | of powerful log handlers and formatters that you're free to use.
    |
    | Available drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog", "custom", "stack"
>>>>>>> cfd92e515c7beca7785ce7f9f8ba2057ff6025a0
    |
    */

    'channels' => [
<<<<<<< HEAD
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single'],
=======

        'stack' => [
            'driver' => 'stack',
            'channels' => explode(',', env('LOG_STACK', 'single')),
>>>>>>> cfd92e515c7beca7785ce7f9f8ba2057ff6025a0
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
<<<<<<< HEAD
=======
            'replace_placeholders' => true,
>>>>>>> cfd92e515c7beca7785ce7f9f8ba2057ff6025a0
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
<<<<<<< HEAD
            'days' => 14,
=======
            'days' => env('LOG_DAILY_DAYS', 14),
            'replace_placeholders' => true,
>>>>>>> cfd92e515c7beca7785ce7f9f8ba2057ff6025a0
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
<<<<<<< HEAD
            'username' => 'Laravel Log',
            'emoji' => ':boom:',
            'level' => env('LOG_LEVEL', 'critical'),
=======
            'username' => env('LOG_SLACK_USERNAME', 'Laravel Log'),
            'emoji' => env('LOG_SLACK_EMOJI', ':boom:'),
            'level' => env('LOG_LEVEL', 'critical'),
            'replace_placeholders' => true,
>>>>>>> cfd92e515c7beca7785ce7f9f8ba2057ff6025a0
        ],

        'papertrail' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => env('LOG_PAPERTRAIL_HANDLER', SyslogUdpHandler::class),
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
                'connectionString' => 'tls://'.env('PAPERTRAIL_URL').':'.env('PAPERTRAIL_PORT'),
            ],
<<<<<<< HEAD
=======
            'processors' => [PsrLogMessageProcessor::class],
>>>>>>> cfd92e515c7beca7785ce7f9f8ba2057ff6025a0
        ],

        'stderr' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => StreamHandler::class,
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'with' => [
                'stream' => 'php://stderr',
            ],
<<<<<<< HEAD
=======
            'processors' => [PsrLogMessageProcessor::class],
>>>>>>> cfd92e515c7beca7785ce7f9f8ba2057ff6025a0
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'),
<<<<<<< HEAD
=======
            'facility' => env('LOG_SYSLOG_FACILITY', LOG_USER),
            'replace_placeholders' => true,
>>>>>>> cfd92e515c7beca7785ce7f9f8ba2057ff6025a0
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'),
<<<<<<< HEAD
=======
            'replace_placeholders' => true,
>>>>>>> cfd92e515c7beca7785ce7f9f8ba2057ff6025a0
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'emergency' => [
            'path' => storage_path('logs/laravel.log'),
        ],
<<<<<<< HEAD
=======

>>>>>>> cfd92e515c7beca7785ce7f9f8ba2057ff6025a0
    ],

];
