<?php return array (
  'app' => 
  array (
    'name' => 'Demo SCart : Free Laravel eCommerce',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://localhost/sachmoi/',
    'asset_url' => NULL,
    'timezone' => 'Asia/Ho_Chi_Minh',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => 'base64:kjkXdIonU5Rxi/y0b9ZyfTIShJHu8gUZOVW4OIMp43s=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Barryvdh\\Debugbar\\ServiceProvider',
      23 => 'Intervention\\Image\\ImageServiceProvider',
      24 => 'Spatie\\JsonApiPaginate\\JsonApiPaginateServiceProvider',
      25 => 'App\\Providers\\AppServiceProvider',
      26 => 'App\\Providers\\AuthServiceProvider',
      27 => 'App\\Providers\\EventServiceProvider',
      28 => 'App\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'PDF' => 'Barryvdh\\DomPDF\\Facade',
      'Image' => 'Intervention\\Image\\Facades\\Image',
    ),
    'debug_blacklist' => 
    array (
      '_COOKIE' => 
      array (
      ),
      '_SERVER' => 
      array (
        0 => 'ACLOCAL_PATH',
        1 => 'ALLUSERSPROFILE',
        2 => 'APPDATA',
        3 => 'COMMONPROGRAMFILES',
        4 => 'CommonProgramFiles(x86)',
        5 => 'CommonProgramW6432',
        6 => 'COMPUTERNAME',
        7 => 'COMSPEC',
        8 => 'configsetroot',
        9 => 'CONFIG_SITE',
        10 => 'DISPLAY',
        11 => 'DriverData',
        12 => 'EXEPATH',
        13 => 'HOME',
        14 => 'HOMEDRIVE',
        15 => 'HOMEPATH',
        16 => 'HOSTNAME',
        17 => 'INFOPATH',
        18 => 'LC_CTYPE',
        19 => 'LOCALAPPDATA',
        20 => 'LOGONSERVER',
        21 => 'MANPATH',
        22 => 'MINGW_CHOST',
        23 => 'MINGW_PACKAGE_PREFIX',
        24 => 'MINGW_PREFIX',
        25 => 'MSYSTEM',
        26 => 'MSYSTEM_CARCH',
        27 => 'MSYSTEM_CHOST',
        28 => 'MSYSTEM_PREFIX',
        29 => 'NUMBER_OF_PROCESSORS',
        30 => 'OneDrive',
        31 => 'OneDriveConsumer',
        32 => 'ORIGINAL_PATH',
        33 => 'ORIGINAL_TEMP',
        34 => 'ORIGINAL_TMP',
        35 => 'OS',
        36 => 'PATH',
        37 => 'PATHEXT',
        38 => 'PKG_CONFIG_PATH',
        39 => 'PLINK_PROTOCOL',
        40 => 'PROCESSOR_ARCHITECTURE',
        41 => 'PROCESSOR_IDENTIFIER',
        42 => 'PROCESSOR_LEVEL',
        43 => 'PROCESSOR_REVISION',
        44 => 'ProgramData',
        45 => 'PROGRAMFILES',
        46 => 'ProgramFiles(x86)',
        47 => 'ProgramW6432',
        48 => 'PS1',
        49 => 'PSModulePath',
        50 => 'PUBLIC',
        51 => 'PWD',
        52 => 'SESSIONNAME',
        53 => 'SHELL',
        54 => 'SHLVL',
        55 => 'SSH_ASKPASS',
        56 => 'SYSTEMDRIVE',
        57 => 'SYSTEMROOT',
        58 => 'TEMP',
        59 => 'TERM_PROGRAM',
        60 => 'TERM_PROGRAM_VERSION',
        61 => 'TMP',
        62 => 'TMPDIR',
        63 => 'USERDOMAIN',
        64 => 'USERDOMAIN_ROAMINGPROFILE',
        65 => 'USERNAME',
        66 => 'USERPROFILE',
        67 => 'WINDIR',
        68 => '_',
        69 => 'PHP_SELF',
        70 => 'SCRIPT_NAME',
        71 => 'SCRIPT_FILENAME',
        72 => 'PATH_TRANSLATED',
        73 => 'DOCUMENT_ROOT',
        74 => 'REQUEST_TIME_FLOAT',
        75 => 'REQUEST_TIME',
        76 => 'argv',
        77 => 'argc',
        78 => 'APP_NAME',
        79 => 'APP_ENV',
        80 => 'APP_KEY',
        81 => 'APP_DEBUG',
        82 => 'APP_URL',
        83 => 'LOG_CHANNEL',
        84 => 'DB_CONNECTION',
        85 => 'DB_HOST',
        86 => 'DB_PORT',
        87 => 'DB_DATABASE',
        88 => 'DB_USERNAME',
        89 => 'DB_PASSWORD',
        90 => 'BROADCAST_DRIVER',
        91 => 'CACHE_DRIVER',
        92 => 'QUEUE_CONNECTION',
        93 => 'SESSION_DRIVER',
        94 => 'SESSION_LIFETIME',
        95 => 'REDIS_HOST',
        96 => 'REDIS_PASSWORD',
        97 => 'REDIS_PORT',
        98 => 'AWS_ACCESS_KEY_ID',
        99 => 'AWS_SECRET_ACCESS_KEY',
        100 => 'AWS_DEFAULT_REGION',
        101 => 'AWS_BUCKET',
        102 => 'PUSHER_APP_ID',
        103 => 'PUSHER_APP_KEY',
        104 => 'PUSHER_APP_SECRET',
        105 => 'PUSHER_APP_CLUSTER',
        106 => 'MIX_PUSHER_APP_KEY',
        107 => 'MIX_PUSHER_APP_CLUSTER',
        108 => 'PAYPAL_CLIENT_ID',
        109 => 'PAYPAL_SECRET',
        110 => 'ADMIN_PREFIX',
        111 => 'FILESYSTEM_DRIVER',
        112 => 'MAIL_MAILER',
        113 => 'MAIL_HOST',
        114 => 'MAIL_PORT',
        115 => 'MAIL_USERNAME',
        116 => 'MAIL_PASSWORD',
        117 => 'MAIL_ENCRYPTION',
        118 => 'MAIL_FROM_ADDRESS',
        119 => 'MAIL_FROM_NAME',
        120 => 'LOG_SLACK_WEBHOOK_URL',
        121 => 'DB_PREFIX',
        122 => 'SC_API_LINK',
        123 => 'SHELL_VERBOSITY',
      ),
      '_ENV' => 
      array (
        0 => 'APP_NAME',
        1 => 'APP_ENV',
        2 => 'APP_KEY',
        3 => 'APP_DEBUG',
        4 => 'APP_URL',
        5 => 'LOG_CHANNEL',
        6 => 'DB_CONNECTION',
        7 => 'DB_HOST',
        8 => 'DB_PORT',
        9 => 'DB_DATABASE',
        10 => 'DB_USERNAME',
        11 => 'DB_PASSWORD',
        12 => 'BROADCAST_DRIVER',
        13 => 'CACHE_DRIVER',
        14 => 'QUEUE_CONNECTION',
        15 => 'SESSION_DRIVER',
        16 => 'SESSION_LIFETIME',
        17 => 'REDIS_HOST',
        18 => 'REDIS_PASSWORD',
        19 => 'REDIS_PORT',
        20 => 'AWS_ACCESS_KEY_ID',
        21 => 'AWS_SECRET_ACCESS_KEY',
        22 => 'AWS_DEFAULT_REGION',
        23 => 'AWS_BUCKET',
        24 => 'PUSHER_APP_ID',
        25 => 'PUSHER_APP_KEY',
        26 => 'PUSHER_APP_SECRET',
        27 => 'PUSHER_APP_CLUSTER',
        28 => 'MIX_PUSHER_APP_KEY',
        29 => 'MIX_PUSHER_APP_CLUSTER',
        30 => 'PAYPAL_CLIENT_ID',
        31 => 'PAYPAL_SECRET',
        32 => 'ADMIN_PREFIX',
        33 => 'FILESYSTEM_DRIVER',
        34 => 'MAIL_MAILER',
        35 => 'MAIL_HOST',
        36 => 'MAIL_PORT',
        37 => 'MAIL_USERNAME',
        38 => 'MAIL_PASSWORD',
        39 => 'MAIL_ENCRYPTION',
        40 => 'MAIL_FROM_ADDRESS',
        41 => 'MAIL_FROM_NAME',
        42 => 'LOG_SLACK_WEBHOOK_URL',
        43 => 'DB_PREFIX',
        44 => 'SC_API_LINK',
        45 => 'SHELL_VERBOSITY',
      ),
      '_POST' => 
      array (
        0 => 'password',
      ),
    ),
    'storeId' => 1,
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'admin' => 
      array (
        'driver' => 'session',
        'provider' => 'admins',
      ),
      'api' => 
      array (
        'driver' => 'passport',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'SCart\\Core\\Front\\Models\\ShopCustomer',
      ),
      'admins' => 
      array (
        'driver' => 'eloquent',
        'model' => 'SCart\\Core\\Admin\\Models\\AdminUser',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'sc_shop_password_resets',
        'expire' => 60,
      ),
      'admins' => 
      array (
        'provider' => 'admins',
        'table' => 'sc_admin_password_resets',
        'expire' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'encrypted' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'D:\\xampp\\htdocs\\sachmoi\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
    ),
    'prefix' => 'scart_cache',
  ),
  'const' => 
  array (
    'DB_PREFIX' => 'sc_',
    'ADMIN_PREFIX' => 'sc_admin',
    'LOG_SLACK_WEBHOOK_URL' => '',
    'MAIL_HOST' => '',
    'MAIL_PORT' => '',
    'MAIL_ENCRYPTION' => '',
    'MAIL_USERNAME' => '',
    'MAIL_PASSWORD' => '',
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'sachmoi_sachmoi',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'sachmoi_sachmoi',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'strict' => false,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'sachmoi_sachmoi',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'sachmoi_sachmoi',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'scart_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'public',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\xampp\\htdocs\\sachmoi\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\xampp\\htdocs\\sachmoi\\storage\\app/public',
        'url' => '/storage',
        'visibility' => 'public',
      ),
      'uploads' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\xampp\\htdocs\\sachmoi\\public\\data',
        'url' => '/data',
        'visibility' => 'public',
      ),
      'tmp' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\xampp\\htdocs\\sachmoi\\storage\\tmp',
        'url' => '',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
      ),
      'links' => 
      array (
        'D:\\xampp\\htdocs\\sachmoi\\public\\storage' => 'D:\\xampp\\htdocs\\sachmoi\\storage\\app/public',
      ),
    ),
  ),
  'json-api-paginate' => 
  array (
    'max_results' => 100,
    'default_size' => 20,
    'number_parameter' => 'number',
    'size_parameter' => 'size',
    'method_name' => 'jsonPaginate',
    'use_simple_pagination' => false,
    'base_url' => NULL,
    'pagination_parameter' => 'page',
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'daily',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'D:\\xampp\\htdocs\\sachmoi\\storage\\logs/laravel.log',
        'level' => 'debug',
        'permission' => 509,
      ),
      'handle' => 
      array (
        'driver' => 'daily',
        'path' => 'D:\\xampp\\htdocs\\sachmoi\\storage\\logs/handle/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'D:\\xampp\\htdocs\\sachmoi\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
        'permission' => 509,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => '',
        'username' => 'S-Cart Log',
        'emoji' => ':boom:',
        'level' => 'debug',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'NullHandler',
      ),
      'emergency' => 
      array (
        'path' => 'D:\\xampp\\htdocs\\sachmoi\\storage\\logs/laravel.log',
      ),
      'install' => 
      array (
        'driver' => 'single',
        'path' => 'D:\\xampp\\htdocs\\sachmoi\\storage\\logs/install.log',
        'level' => 'debug',
        'permission' => 509,
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => '',
        'port' => '',
        'encryption' => '',
        'username' => '',
        'password' => '',
        'timeout' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
    ),
    'from' => 
    array (
      'address' => 'dohung28599@gmail.com',
      'name' => 'Demo SCart : Free Laravel eCommerce',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'D:\\xampp\\htdocs\\sachmoi\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\Models\\ShopCustomer',
      'key' => NULL,
      'secret' => NULL,
    ),
    'github' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'facebook' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'google' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'D:\\xampp\\htdocs\\sachmoi\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sc_shop_sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'scart_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'D:\\xampp\\htdocs\\sachmoi\\resources\\views',
    ),
    'compiled' => 'D:\\xampp\\htdocs\\sachmoi\\storage\\framework\\views',
  ),
  'debugbar' => 
  array (
    'enabled' => NULL,
    'except' => 
    array (
      0 => 'telescope*',
      1 => 'horizon*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => 'D:\\xampp\\htdocs\\sachmoi\\storage\\debugbar',
      'connection' => NULL,
      'provider' => '',
    ),
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => false,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => true,
      'livewire' => true,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'backtrace_exclude_paths' => 
        array (
        ),
        'timeline' => false,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => false,
        'show_copy' => false,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
    'theme' => 'auto',
  ),
  'flare' => 
  array (
    'key' => NULL,
    'reporting' => 
    array (
      'anonymize_ips' => true,
      'collect_git_information' => false,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
    ),
    'send_logs_as_events' => true,
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'ignored_solution_providers' => 
    array (
      0 => 'Facade\\Ignition\\SolutionProviders\\MissingPackageSolutionProvider',
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'passport' => 
  array (
    'private_key' => NULL,
    'public_key' => NULL,
    'client_uuids' => false,
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'admin' => 
  array (
    'customize' => false,
    'theme' => 
    array (
      0 => 'lightblue',
      1 => 'dark',
      2 => 'blue',
      3 => 'white',
      4 => 'pink',
    ),
    'theme_default' => 'lightblue',
    'theme_define' => 
    array (
      'lightblue' => 
      array (
        'body' => 'accent-lightblue',
        'main-header' => 'navbar-dark navbar-lightblue',
        'sidebar' => 'sidebar-lightblue',
      ),
      'dark' => 
      array (
        'body' => 'accent-navy',
        'main-header' => 'navbar-dark navbar-gray-dark',
        'sidebar' => 'sidebar-gray-dark',
      ),
      'blue' => 
      array (
        'body' => 'accent-success',
        'main-header' => 'navbar-dark navbar-success',
        'sidebar' => 'sidebar-success',
      ),
      'white' => 
      array (
        'body' => 'accent-lightblue',
        'main-header' => 'navbar-light navbar-white',
        'sidebar' => 'sidebar-white',
      ),
      'pink' => 
      array (
        'body' => 'accent-fuchsia',
        'main-header' => 'navbar-dark navbar-pink',
        'sidebar' => 'sidebar-pink',
      ),
    ),
    'settings' => 
    array (
      'api_plugin' => 1,
      'api_template' => 1,
    ),
  ),
  'lfm' => 
  array (
    'use_package_routes' => false,
    'url_prefix' => 'uploads',
    'allow_private_folder' => true,
    'private_folder_name' => 'SCart\\Core\\Handlers\\LfmConfigHandler',
    'allow_shared_folder' => false,
    'shared_folder_name' => 'shares',
    'folder_categories' => 
    array (
      'product' => 
      array (
        'folder_name' => 'product',
        'startup_view' => 'grid',
        'max_size' => 30000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
        ),
      ),
      'category' => 
      array (
        'folder_name' => 'category',
        'startup_view' => 'grid',
        'max_size' => 30000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
        ),
      ),
      'category_store' => 
      array (
        'folder_name' => 'category_store',
        'startup_view' => 'grid',
        'max_size' => 30000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
        ),
      ),
      'brand' => 
      array (
        'folder_name' => 'brand',
        'startup_view' => 'grid',
        'max_size' => 30000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
        ),
      ),
      'supplier' => 
      array (
        'folder_name' => 'supplier',
        'startup_view' => 'grid',
        'max_size' => 30000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
        ),
      ),
      'language' => 
      array (
        'folder_name' => 'language',
        'startup_view' => 'grid',
        'max_size' => 30000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
        ),
      ),
      'currency' => 
      array (
        'folder_name' => 'currency',
        'startup_view' => 'grid',
        'max_size' => 30000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
        ),
      ),
      'logo' => 
      array (
        'folder_name' => 'logo',
        'startup_view' => 'grid',
        'max_size' => 50000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
        ),
      ),
      'content' => 
      array (
        'folder_name' => 'content',
        'startup_view' => 'grid',
        'max_size' => 30000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
        ),
      ),
      'page' => 
      array (
        'folder_name' => 'page',
        'startup_view' => 'grid',
        'max_size' => 30000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
        ),
      ),
      'avatar' => 
      array (
        'folder_name' => 'avatar',
        'startup_view' => 'grid',
        'max_size' => 30000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
        ),
      ),
      'other' => 
      array (
        'folder_name' => 'other',
        'startup_view' => 'grid',
        'max_size' => 30000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
        ),
      ),
      'banner' => 
      array (
        'folder_name' => 'banner',
        'startup_view' => 'grid',
        'max_size' => 50000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
        ),
      ),
      'cms-image' => 
      array (
        'folder_name' => 'cms-image',
        'startup_view' => 'grid',
        'max_size' => 50000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
        ),
      ),
      'file' => 
      array (
        'folder_name' => 'file',
        'startup_view' => 'list',
        'max_size' => 50000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
          5 => 'application/pdf',
          6 => 'text/plain',
        ),
      ),
      'manager' => 
      array (
        'folder_name' => '',
        'startup_view' => 'list',
        'max_size' => 50000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
          5 => 'application/pdf',
          6 => 'text/plain',
        ),
      ),
    ),
    'paginator' => 
    array (
      'perPage' => 20,
    ),
    'disk' => 'uploads',
    'rename_file' => false,
    'alphanumeric_filename' => false,
    'alphanumeric_directory' => false,
    'should_validate_size' => false,
    'should_validate_mime' => false,
    'over_write_on_duplicate' => false,
    'should_create_thumbnails' => false,
    'thumb_folder_name' => 'thumbs',
    'raster_mimetypes' => 
    array (
      0 => 'image/jpeg',
      1 => 'image/pjpeg',
      2 => 'image/png',
    ),
    'thumb_img_width' => 200,
    'thumb_img_height' => 200,
    'file_type_array' => 
    array (
      'pdf' => 'Adobe Acrobat',
      'doc' => 'Microsoft Word',
      'docx' => 'Microsoft Word',
      'xls' => 'Microsoft Excel',
      'xlsx' => 'Microsoft Excel',
      'zip' => 'Archive',
      'gif' => 'GIF Image',
      'jpg' => 'JPEG Image',
      'jpeg' => 'JPEG Image',
      'png' => 'PNG Image',
      'ppt' => 'Microsoft PowerPoint',
      'pptx' => 'Microsoft PowerPoint',
    ),
    'php_ini_overrides' => 
    array (
      'memory_limit' => '256M',
    ),
  ),
  's-cart' => 
  array (
    'version' => '4.3',
    'sub-version' => '4.3.0',
    'homepage' => 'https://s-cart.org',
    'name' => 'S-Cart',
    'title' => 'Free Open Source eCommerce for Business',
    'github' => 'https://github.com/s-cart/s-cart',
    'facebook' => 'https://www.facebook.com/SCart.Ecommerce',
    'auth' => 'Lanh Le',
    'email' => 'lanhktc@gmail.com',
    'api_link' => 'https://api.s-cart.org/v1',
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
