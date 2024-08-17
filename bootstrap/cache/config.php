<?php return array (
  'app' => 
  array (
    'status' => '',
    'name' => 'Magicai',
    'env' => 'production',
    'debug_hash' => '$2a$12$tg2XA6fFcLeOZH.cHM2cSuAp7227WqHCN7vwcTj4HzpeUOghBgb2W',
    'debug' => true,
    'url' => 'https://iatify.com/',
    'asset_url' => '/',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:Ze1LNR9/m4i0ThP+GfMA9csB3T4TG2Ned4YCP5vobE8=',
    'cipher' => 'AES-256-CBC',
    'maintenance' => 
    array (
      'driver' => 'file',
    ),
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
      22 => 'pcinaglia\\laraupdater\\LaraUpdaterServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\AuthServiceProvider',
      25 => 'App\\Providers\\BroadcastServiceProvider',
      26 => 'App\\Providers\\EventServiceProvider',
      27 => 'App\\Providers\\RouteServiceProvider',
      28 => 'App\\Providers\\ViewServiceProvider',
      29 => 'App\\Providers\\MacrosServiceProvider',
      30 => 'App\\Providers\\MiddlewareServiceProvider',
      31 => 'Elseyyid\\LaravelJsonLocationsManager\\Providers\\LaravelJsonLocationsManagerServiceProvider',
      32 => 'Barryvdh\\DomPDF\\ServiceProvider',
      33 => 'Igaster\\LaravelTheme\\themeServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Js' => 'Illuminate\\Support\\Js',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Number' => 'Illuminate\\Support\\Number',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Process' => 'Illuminate\\Support\\Facades\\Process',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Vite' => 'Illuminate\\Support\\Facades\\Vite',
      'PDF' => 'Barryvdh\\DomPDF\\Facade',
      'Theme' => 'Igaster\\LaravelTheme\\Facades\\Theme',
    ),
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
      'api' => 
      array (
        'driver' => 'passport',
        'provider' => 'users',
        'hash' => false,
      ),
      'sanctum' => 
      array (
        'driver' => 'sanctum',
        'provider' => NULL,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_reset_tokens',
        'expire' => 60,
        'throttle' => 60,
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
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'host' => 'api-mt1.pusher.com',
          'port' => 443,
          'scheme' => 'https',
          'encrypted' => true,
          'useTLS' => true,
        ),
        'client_options' => 
        array (
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
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
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/var/www/html/storage/framework/cache/data',
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
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => NULL,
        'secret' => NULL,
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
    ),
    'prefix' => 'magicai_cache_',
  ),
  'cashier' => 
  array (
    'key' => NULL,
    'secret' => NULL,
    'path' => 'stripe',
    'webhook' => 
    array (
      'secret' => NULL,
      'tolerance' => 300,
      'events' => 
      array (
        0 => 'customer.subscription.created',
        1 => 'customer.subscription.updated',
        2 => 'customer.subscription.deleted',
        3 => 'customer.updated',
        4 => 'customer.deleted',
        5 => 'payment_method.automatically_updated',
        6 => 'invoice.payment_action_required',
        7 => 'invoice.payment_succeeded',
      ),
    ),
    'currency' => 'usd',
    'currency_locale' => 'en',
    'payment_notification' => NULL,
    'invoices' => 
    array (
      'renderer' => 'Laravel\\Cashier\\Invoices\\DompdfInvoiceRenderer',
      'options' => 
      array (
        'paper' => 'letter',
      ),
    ),
    'logger' => NULL,
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'oauth/*',
      2 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'currency' => 
  array (
    'currencies_with_right_symbols' => 
    array (
      0 => '﷼',
      1 => '₨',
      2 => '₪',
      3 => '₨',
      4 => 'Ft',
      5 => 'TL',
      6 => 'ман',
      7 => 'лв',
      8 => '₮',
      9 => 'lei',
      10 => 'zł',
      11 => 'руб',
    ),
    'needs_code_with_symbol' => 
    array (
      0 => 'AUD',
    ),
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
        'database' => 'magicai-openai',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'magicai-openai',
        'username' => 'root',
        'password' => 'z8dInIh1RNd2i',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'magicai-openai',
        'username' => 'root',
        'password' => 'z8dInIh1RNd2i',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'search_path' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'magicai-openai',
        'username' => 'root',
        'password' => 'z8dInIh1RNd2i',
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
        'prefix' => 'magicai_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'debugbar' => 
  array (
    'enabled' => false,
    'except' => 
    array (
      0 => 'telescope*',
      1 => 'horizon*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'open' => false,
      'driver' => 'file',
      'path' => '/var/www/html/storage/debugbar',
      'connection' => NULL,
      'provider' => '',
      'hostname' => '127.0.0.1',
      'port' => 2304,
    ),
    'editor' => 'phpstorm',
    'remote_sites_path' => '',
    'local_sites_path' => '',
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
        'duration_background' => true,
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
        'slow_threshold' => false,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'timeline' => false,
        'data' => false,
        'exclude_paths' => 
        array (
        ),
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
    'debug_backtrace_limit' => 50,
  ),
  'dompdf' => 
  array (
    'show_warnings' => false,
    'public_path' => NULL,
    'convert_entities' => true,
    'options' => 
    array (
      'font_dir' => '/var/www/html/storage/fonts',
      'font_cache' => '/var/www/html/storage/fonts',
      'temp_dir' => '/tmp',
      'chroot' => '/var/www/html',
      'allowed_protocols' => 
      array (
        'file://' => 
        array (
          'rules' => 
          array (
          ),
        ),
        'http://' => 
        array (
          'rules' => 
          array (
          ),
        ),
        'https://' => 
        array (
          'rules' => 
          array (
          ),
        ),
      ),
      'log_output_file' => NULL,
      'enable_font_subsetting' => false,
      'pdf_backend' => 'CPDF',
      'default_media_type' => 'screen',
      'default_paper_size' => 'a4',
      'default_paper_orientation' => 'portrait',
      'default_font' => 'serif',
      'dpi' => 96,
      'enable_php' => false,
      'enable_javascript' => true,
      'enable_remote' => true,
      'font_height_ratio' => 1.1,
      'enable_html5_parser' => true,
    ),
  ),
  'elseyyid-location' => 
  array (
    'name' => 'Localization Manager',
    'layout' => 'langs::layouts.app',
    'content_section' => 'content_translation',
    'scripts_section' => 'scripts',
    'message_success_variable' => 'flash_success',
    'prefix' => '/dashboard/admin/translations',
    'middlewares' => 
    array (
      0 => 'web',
      1 => 'admin',
    ),
    'message_flash_variable' => 'flash_info',
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/app',
        'throw' => false,
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/public/uploads',
        'url' => 'https://iatify.com//public',
        'visibility' => 'public',
      ),
      'views' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/resources/views',
        'throw' => false,
      ),
      'thumbs' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/public/uploads/thumbnail/default',
        'url' => 'https://iatify.com//uploads/thumbnail/default',
        'throw' => false,
      ),
      'themes' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/public/themes',
        'throw' => false,
      ),
      'build' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/public/build',
        'throw' => false,
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'throw' => true,
      ),
      'r2' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => 'us-east-1',
        'bucket' => NULL,
        'url' => NULL,
        'visibility' => 'private',
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'throw' => false,
      ),
    ),
    'links' => 
    array (
      '/var/www/html/public/storage' => '/var/www/html/storage/app/public',
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 65536,
      'threads' => 1,
      'time' => 4,
    ),
  ),
  'health' => 
  array (
    'result_stores' => 
    array (
      'Spatie\\Health\\ResultStores\\EloquentHealthResultStore' => 
      array (
        'model' => 'Spatie\\Health\\Models\\HealthCheckResultHistoryItem',
        'keep_history_for_days' => 1,
      ),
    ),
    'notifications' => 
    array (
      'enabled' => false,
      'notifications' => 
      array (
        'Spatie\\Health\\Notifications\\CheckFailedNotification' => 
        array (
          0 => 'mail',
        ),
      ),
      'notifiable' => 'Spatie\\Health\\Notifications\\Notifiable',
      'throttle_notifications_for_minutes' => 60,
      'throttle_notifications_key' => 'health:latestNotificationSentAt:',
      'mail' => 
      array (
        'to' => 'your@example.com',
        'from' => 
        array (
          'address' => 'hello@example.com',
          'name' => 'Example',
        ),
      ),
      'slack' => 
      array (
        'webhook_url' => '',
        'channel' => NULL,
        'username' => NULL,
        'icon' => NULL,
      ),
    ),
    'oh_dear_endpoint' => 
    array (
      'enabled' => false,
      'always_send_fresh_results' => true,
      'secret' => NULL,
      'url' => '/oh-dear-health-check-results',
    ),
    'theme' => 'light',
    'silence_health_queue_job' => true,
  ),
  'installer' => 
  array (
    'core' => 
    array (
      'minPhpVersion' => '8.1.0',
    ),
    'final' => 
    array (
      'key' => true,
      'publish' => false,
    ),
    'requirements' => 
    array (
      'php' => 
      array (
        0 => 'Ctype',
        1 => 'cURL',
        2 => 'DOM',
        3 => 'Fileinfo',
        4 => 'Filter',
        5 => 'Hash',
        6 => 'Mbstring',
        7 => 'OpenSSL',
        8 => 'PCRE',
        9 => 'PDO',
        10 => 'Session',
        11 => 'Tokenizer',
        12 => 'XML',
        13 => 'zip',
      ),
      'apache' => 
      array (
        0 => 'mod_rewrite',
      ),
    ),
    'permissions' => 
    array (
      'storage/framework/' => '666',
      'storage/logs/' => '666',
      'bootstrap/cache/' => '666',
    ),
    'environment' => 
    array (
      'form' => 
      array (
        'rules' => 
        array (
          'app_name' => 'required|string|max:50',
          'environment' => 'required|string|max:50',
          'environment_custom' => 'required_if:environment,other|max:50',
          'app_debug' => 'required|string',
          'app_log_level' => 'required|string|max:50',
          'app_url' => 'required|url',
          'database_connection' => 'required|string|max:50',
          'database_hostname' => 'required|string|max:50',
          'database_port' => 'required|numeric',
          'database_name' => 'required|string|max:50',
          'database_username' => 'required|string|max:50',
          'database_password' => 'nullable|string|max:50',
        ),
      ),
    ),
    'installed' => 
    array (
      'redirectOptions' => 
      array (
        'route' => 
        array (
          'name' => '/',
          'data' => 
          array (
          ),
        ),
        'abort' => 
        array (
          'type' => '404',
        ),
        'dump' => 
        array (
          'data' => 'Dumping a not found message.',
        ),
      ),
    ),
    'installedAlreadyAction' => '',
    'updaterEnabled' => 'false',
  ),
  'l5-swagger' => 
  array (
    'default' => 'default',
    'documentations' => 
    array (
      'default' => 
      array (
        'api' => 
        array (
          'title' => 'L5 Swagger UI',
        ),
        'routes' => 
        array (
          'api' => 'api/documentation',
        ),
        'paths' => 
        array (
          'use_absolute_path' => true,
          'docs_json' => 'api-docs.json',
          'docs_yaml' => 'api-docs.yaml',
          'format_to_use_for_docs' => 'json',
          'annotations' => 
          array (
            0 => '/var/www/html/app',
          ),
        ),
      ),
    ),
    'defaults' => 
    array (
      'routes' => 
      array (
        'docs' => 'docs',
        'oauth2_callback' => 'api/oauth2-callback',
        'middleware' => 
        array (
          'api' => 
          array (
          ),
          'asset' => 
          array (
          ),
          'docs' => 
          array (
          ),
          'oauth2_callback' => 
          array (
          ),
        ),
        'group_options' => 
        array (
        ),
      ),
      'paths' => 
      array (
        'docs' => '/var/www/html/storage/api-docs',
        'views' => '/var/www/html/resources/views/vendor/l5-swagger',
        'base' => NULL,
        'swagger_ui_assets_path' => 'vendor/swagger-api/swagger-ui/dist/',
        'excludes' => 
        array (
        ),
      ),
      'scanOptions' => 
      array (
        'analyser' => NULL,
        'analysis' => NULL,
        'processors' => 
        array (
        ),
        'pattern' => NULL,
        'exclude' => 
        array (
        ),
        'open_api_spec_version' => '3.0.0',
      ),
      'securityDefinitions' => 
      array (
        'securitySchemes' => 
        array (
          'passport' => 
          array (
            'type' => 'oauth2',
            'description' => 'Laravel passport oauth2 security.',
            'in' => 'header',
            'scheme' => 'https',
            'flows' => 
            array (
              'password' => 
              array (
                'authorizationUrl' => 'https://iatify.com//oauth/authorize',
                'tokenUrl' => 'https://iatify.com//oauth/token',
                'refreshUrl' => 'https://iatify.com//token/refresh',
                'scopes' => 
                array (
                ),
              ),
            ),
          ),
        ),
        'security' => 
        array (
          0 => 
          array (
          ),
        ),
      ),
      'generate_always' => false,
      'generate_yaml_copy' => false,
      'proxy' => false,
      'additional_config_url' => NULL,
      'operations_sort' => NULL,
      'validator_url' => NULL,
      'ui' => 
      array (
        'display' => 
        array (
          'doc_expansion' => 'none',
          'filter' => true,
        ),
        'authorization' => 
        array (
          'persist_authorization' => false,
          'oauth2' => 
          array (
            'use_pkce_with_authorization_code_grant' => false,
          ),
        ),
      ),
      'constants' => 
      array (
        'L5_SWAGGER_CONST_HOST' => 'http://my-default-host.com',
      ),
    ),
  ),
  'laraupdater' => 
  array (
    'tmp_folder_name' => 'tmp',
    'script_filename' => 'upgrade.php',
    'update_baseurl' => 'https://api.liquid-themes.com/magicai/update-temporary',
    'middleware' => 
    array (
      0 => 'web',
      1 => 'auth',
    ),
    'allow_users_id' => 
    array (
      0 => 1,
    ),
  ),
  'laravellocalization' => 
  array (
    'supportedLocales' => 
    array (
      'ace' => 
      array (
        'name' => 'Achinese',
        'script' => 'Latn',
        'native' => 'Aceh',
        'regional' => '',
      ),
      'af' => 
      array (
        'name' => 'Afrikaans',
        'script' => 'Latn',
        'native' => 'Afrikaans',
        'regional' => 'af_ZA',
      ),
      'agq' => 
      array (
        'name' => 'Aghem',
        'script' => 'Latn',
        'native' => 'Aghem',
        'regional' => '',
      ),
      'ak' => 
      array (
        'name' => 'Akan',
        'script' => 'Latn',
        'native' => 'Akan',
        'regional' => 'ak_GH',
      ),
      'an' => 
      array (
        'name' => 'Aragonese',
        'script' => 'Latn',
        'native' => 'aragonés',
        'regional' => 'an_ES',
      ),
      'cch' => 
      array (
        'name' => 'Atsam',
        'script' => 'Latn',
        'native' => 'Atsam',
        'regional' => '',
      ),
      'gn' => 
      array (
        'name' => 'Guaraní',
        'script' => 'Latn',
        'native' => 'Avañe’ẽ',
        'regional' => '',
      ),
      'ae' => 
      array (
        'name' => 'Avestan',
        'script' => 'Latn',
        'native' => 'avesta',
        'regional' => '',
      ),
      'ay' => 
      array (
        'name' => 'Aymara',
        'script' => 'Latn',
        'native' => 'aymar aru',
        'regional' => 'ay_PE',
      ),
      'az' => 
      array (
        'name' => 'Azerbaijani (Latin)',
        'script' => 'Latn',
        'native' => 'azərbaycanca',
        'regional' => 'az_AZ',
      ),
      'id' => 
      array (
        'name' => 'Indonesian',
        'script' => 'Latn',
        'native' => 'Bahasa Indonesia',
        'regional' => 'id_ID',
      ),
      'ms' => 
      array (
        'name' => 'Malay',
        'script' => 'Latn',
        'native' => 'Bahasa Melayu',
        'regional' => 'ms_MY',
      ),
      'bm' => 
      array (
        'name' => 'Bambara',
        'script' => 'Latn',
        'native' => 'bamanakan',
        'regional' => '',
      ),
      'jv' => 
      array (
        'name' => 'Javanese (Latin)',
        'script' => 'Latn',
        'native' => 'Basa Jawa',
        'regional' => '',
      ),
      'su' => 
      array (
        'name' => 'Sundanese',
        'script' => 'Latn',
        'native' => 'Basa Sunda',
        'regional' => '',
      ),
      'bh' => 
      array (
        'name' => 'Bihari',
        'script' => 'Latn',
        'native' => 'Bihari',
        'regional' => '',
      ),
      'bi' => 
      array (
        'name' => 'Bislama',
        'script' => 'Latn',
        'native' => 'Bislama',
        'regional' => '',
      ),
      'nb' => 
      array (
        'name' => 'Norwegian Bokmål',
        'script' => 'Latn',
        'native' => 'Bokmål',
        'regional' => 'nb_NO',
      ),
      'bs' => 
      array (
        'name' => 'Bosnian',
        'script' => 'Latn',
        'native' => 'bosanski',
        'regional' => 'bs_BA',
      ),
      'br' => 
      array (
        'name' => 'Breton',
        'script' => 'Latn',
        'native' => 'brezhoneg',
        'regional' => 'br_FR',
      ),
      'ca' => 
      array (
        'name' => 'Catalan',
        'script' => 'Latn',
        'native' => 'català',
        'regional' => 'ca_ES',
      ),
      'ch' => 
      array (
        'name' => 'Chamorro',
        'script' => 'Latn',
        'native' => 'Chamoru',
        'regional' => '',
      ),
      'ny' => 
      array (
        'name' => 'Chewa',
        'script' => 'Latn',
        'native' => 'chiCheŵa',
        'regional' => '',
      ),
      'kde' => 
      array (
        'name' => 'Makonde',
        'script' => 'Latn',
        'native' => 'Chimakonde',
        'regional' => '',
      ),
      'sn' => 
      array (
        'name' => 'Shona',
        'script' => 'Latn',
        'native' => 'chiShona',
        'regional' => '',
      ),
      'co' => 
      array (
        'name' => 'Corsican',
        'script' => 'Latn',
        'native' => 'corsu',
        'regional' => '',
      ),
      'cy' => 
      array (
        'name' => 'Welsh',
        'script' => 'Latn',
        'native' => 'Cymraeg',
        'regional' => 'cy_GB',
      ),
      'da' => 
      array (
        'name' => 'Danish',
        'script' => 'Latn',
        'native' => 'dansk',
        'regional' => 'da_DK',
      ),
      'se' => 
      array (
        'name' => 'Northern Sami',
        'script' => 'Latn',
        'native' => 'davvisámegiella',
        'regional' => 'se_NO',
      ),
      'de' => 
      array (
        'name' => 'German',
        'script' => 'Latn',
        'native' => 'Deutsch',
        'regional' => 'de_DE',
      ),
      'luo' => 
      array (
        'name' => 'Luo',
        'script' => 'Latn',
        'native' => 'Dholuo',
        'regional' => '',
      ),
      'nv' => 
      array (
        'name' => 'Navajo',
        'script' => 'Latn',
        'native' => 'Diné bizaad',
        'regional' => '',
      ),
      'dua' => 
      array (
        'name' => 'Duala',
        'script' => 'Latn',
        'native' => 'duálá',
        'regional' => '',
      ),
      'et' => 
      array (
        'name' => 'Estonian',
        'script' => 'Latn',
        'native' => 'eesti',
        'regional' => 'et_EE',
      ),
      'na' => 
      array (
        'name' => 'Nauru',
        'script' => 'Latn',
        'native' => 'Ekakairũ Naoero',
        'regional' => '',
      ),
      'guz' => 
      array (
        'name' => 'Ekegusii',
        'script' => 'Latn',
        'native' => 'Ekegusii',
        'regional' => '',
      ),
      'en' => 
      array (
        'name' => 'English',
        'script' => 'Latn',
        'native' => 'English',
        'regional' => 'en_US',
      ),
      'en-AU' => 
      array (
        'name' => 'Australian English',
        'script' => 'Latn',
        'native' => 'Australian English',
        'regional' => 'en_AU',
      ),
      'en-GB' => 
      array (
        'name' => 'British English',
        'script' => 'Latn',
        'native' => 'British English',
        'regional' => 'en_GB',
      ),
      'en-CA' => 
      array (
        'name' => 'Canadian English',
        'script' => 'Latn',
        'native' => 'Canadian English',
        'regional' => 'en_CA',
      ),
      'en-US' => 
      array (
        'name' => 'U.S. English',
        'script' => 'Latn',
        'native' => 'U.S. English',
        'regional' => 'en_US',
      ),
      'es' => 
      array (
        'name' => 'Spanish',
        'script' => 'Latn',
        'native' => 'español',
        'regional' => 'es_ES',
      ),
      'eo' => 
      array (
        'name' => 'Esperanto',
        'script' => 'Latn',
        'native' => 'esperanto',
        'regional' => '',
      ),
      'eu' => 
      array (
        'name' => 'Basque',
        'script' => 'Latn',
        'native' => 'euskara',
        'regional' => 'eu_ES',
      ),
      'ewo' => 
      array (
        'name' => 'Ewondo',
        'script' => 'Latn',
        'native' => 'ewondo',
        'regional' => '',
      ),
      'ee' => 
      array (
        'name' => 'Ewe',
        'script' => 'Latn',
        'native' => 'eʋegbe',
        'regional' => '',
      ),
      'fil' => 
      array (
        'name' => 'Filipino',
        'script' => 'Latn',
        'native' => 'Filipino',
        'regional' => 'fil_PH',
      ),
      'fr' => 
      array (
        'name' => 'French',
        'script' => 'Latn',
        'native' => 'français',
        'regional' => 'fr_FR',
      ),
      'fr-CA' => 
      array (
        'name' => 'Canadian French',
        'script' => 'Latn',
        'native' => 'français canadien',
        'regional' => 'fr_CA',
      ),
      'fy' => 
      array (
        'name' => 'Western Frisian',
        'script' => 'Latn',
        'native' => 'frysk',
        'regional' => 'fy_DE',
      ),
      'fur' => 
      array (
        'name' => 'Friulian',
        'script' => 'Latn',
        'native' => 'furlan',
        'regional' => 'fur_IT',
      ),
      'fo' => 
      array (
        'name' => 'Faroese',
        'script' => 'Latn',
        'native' => 'føroyskt',
        'regional' => 'fo_FO',
      ),
      'gaa' => 
      array (
        'name' => 'Ga',
        'script' => 'Latn',
        'native' => 'Ga',
        'regional' => '',
      ),
      'ga' => 
      array (
        'name' => 'Irish',
        'script' => 'Latn',
        'native' => 'Gaeilge',
        'regional' => 'ga_IE',
      ),
      'gv' => 
      array (
        'name' => 'Manx',
        'script' => 'Latn',
        'native' => 'Gaelg',
        'regional' => 'gv_GB',
      ),
      'sm' => 
      array (
        'name' => 'Samoan',
        'script' => 'Latn',
        'native' => 'Gagana fa’a Sāmoa',
        'regional' => '',
      ),
      'gl' => 
      array (
        'name' => 'Galician',
        'script' => 'Latn',
        'native' => 'galego',
        'regional' => 'gl_ES',
      ),
      'ki' => 
      array (
        'name' => 'Kikuyu',
        'script' => 'Latn',
        'native' => 'Gikuyu',
        'regional' => '',
      ),
      'gd' => 
      array (
        'name' => 'Scottish Gaelic',
        'script' => 'Latn',
        'native' => 'Gàidhlig',
        'regional' => 'gd_GB',
      ),
      'ha' => 
      array (
        'name' => 'Hausa',
        'script' => 'Latn',
        'native' => 'Hausa',
        'regional' => 'ha_NG',
      ),
      'bez' => 
      array (
        'name' => 'Bena',
        'script' => 'Latn',
        'native' => 'Hibena',
        'regional' => '',
      ),
      'ho' => 
      array (
        'name' => 'Hiri Motu',
        'script' => 'Latn',
        'native' => 'Hiri Motu',
        'regional' => '',
      ),
      'hr' => 
      array (
        'name' => 'Croatian',
        'script' => 'Latn',
        'native' => 'hrvatski',
        'regional' => 'hr_HR',
      ),
      'bem' => 
      array (
        'name' => 'Bemba',
        'script' => 'Latn',
        'native' => 'Ichibemba',
        'regional' => 'bem_ZM',
      ),
      'io' => 
      array (
        'name' => 'Ido',
        'script' => 'Latn',
        'native' => 'Ido',
        'regional' => '',
      ),
      'ig' => 
      array (
        'name' => 'Igbo',
        'script' => 'Latn',
        'native' => 'Igbo',
        'regional' => 'ig_NG',
      ),
      'rn' => 
      array (
        'name' => 'Rundi',
        'script' => 'Latn',
        'native' => 'Ikirundi',
        'regional' => '',
      ),
      'ia' => 
      array (
        'name' => 'Interlingua',
        'script' => 'Latn',
        'native' => 'interlingua',
        'regional' => 'ia_FR',
      ),
      'iu-Latn' => 
      array (
        'name' => 'Inuktitut (Latin)',
        'script' => 'Latn',
        'native' => 'Inuktitut',
        'regional' => 'iu_CA',
      ),
      'sbp' => 
      array (
        'name' => 'Sileibi',
        'script' => 'Latn',
        'native' => 'Ishisangu',
        'regional' => '',
      ),
      'nd' => 
      array (
        'name' => 'North Ndebele',
        'script' => 'Latn',
        'native' => 'isiNdebele',
        'regional' => '',
      ),
      'nr' => 
      array (
        'name' => 'South Ndebele',
        'script' => 'Latn',
        'native' => 'isiNdebele',
        'regional' => 'nr_ZA',
      ),
      'xh' => 
      array (
        'name' => 'Xhosa',
        'script' => 'Latn',
        'native' => 'isiXhosa',
        'regional' => 'xh_ZA',
      ),
      'zu' => 
      array (
        'name' => 'Zulu',
        'script' => 'Latn',
        'native' => 'isiZulu',
        'regional' => 'zu_ZA',
      ),
      'it' => 
      array (
        'name' => 'Italian',
        'script' => 'Latn',
        'native' => 'italiano',
        'regional' => 'it_IT',
      ),
      'ik' => 
      array (
        'name' => 'Inupiaq',
        'script' => 'Latn',
        'native' => 'Iñupiaq',
        'regional' => 'ik_CA',
      ),
      'dyo' => 
      array (
        'name' => 'Jola-Fonyi',
        'script' => 'Latn',
        'native' => 'joola',
        'regional' => '',
      ),
      'kea' => 
      array (
        'name' => 'Kabuverdianu',
        'script' => 'Latn',
        'native' => 'kabuverdianu',
        'regional' => '',
      ),
      'kaj' => 
      array (
        'name' => 'Jju',
        'script' => 'Latn',
        'native' => 'Kaje',
        'regional' => '',
      ),
      'mh' => 
      array (
        'name' => 'Marshallese',
        'script' => 'Latn',
        'native' => 'Kajin M̧ajeļ',
        'regional' => 'mh_MH',
      ),
      'kl' => 
      array (
        'name' => 'Kalaallisut',
        'script' => 'Latn',
        'native' => 'kalaallisut',
        'regional' => 'kl_GL',
      ),
      'kln' => 
      array (
        'name' => 'Kalenjin',
        'script' => 'Latn',
        'native' => 'Kalenjin',
        'regional' => '',
      ),
      'kr' => 
      array (
        'name' => 'Kanuri',
        'script' => 'Latn',
        'native' => 'Kanuri',
        'regional' => '',
      ),
      'kcg' => 
      array (
        'name' => 'Tyap',
        'script' => 'Latn',
        'native' => 'Katab',
        'regional' => '',
      ),
      'kw' => 
      array (
        'name' => 'Cornish',
        'script' => 'Latn',
        'native' => 'kernewek',
        'regional' => 'kw_GB',
      ),
      'naq' => 
      array (
        'name' => 'Nama',
        'script' => 'Latn',
        'native' => 'Khoekhoegowab',
        'regional' => '',
      ),
      'rof' => 
      array (
        'name' => 'Rombo',
        'script' => 'Latn',
        'native' => 'Kihorombo',
        'regional' => '',
      ),
      'kam' => 
      array (
        'name' => 'Kamba',
        'script' => 'Latn',
        'native' => 'Kikamba',
        'regional' => '',
      ),
      'kg' => 
      array (
        'name' => 'Kongo',
        'script' => 'Latn',
        'native' => 'Kikongo',
        'regional' => '',
      ),
      'jmc' => 
      array (
        'name' => 'Machame',
        'script' => 'Latn',
        'native' => 'Kimachame',
        'regional' => '',
      ),
      'rw' => 
      array (
        'name' => 'Kinyarwanda',
        'script' => 'Latn',
        'native' => 'Kinyarwanda',
        'regional' => 'rw_RW',
      ),
      'asa' => 
      array (
        'name' => 'Kipare',
        'script' => 'Latn',
        'native' => 'Kipare',
        'regional' => '',
      ),
      'rwk' => 
      array (
        'name' => 'Rwa',
        'script' => 'Latn',
        'native' => 'Kiruwa',
        'regional' => '',
      ),
      'saq' => 
      array (
        'name' => 'Samburu',
        'script' => 'Latn',
        'native' => 'Kisampur',
        'regional' => '',
      ),
      'ksb' => 
      array (
        'name' => 'Shambala',
        'script' => 'Latn',
        'native' => 'Kishambaa',
        'regional' => '',
      ),
      'swc' => 
      array (
        'name' => 'Congo Swahili',
        'script' => 'Latn',
        'native' => 'Kiswahili ya Kongo',
        'regional' => '',
      ),
      'sw' => 
      array (
        'name' => 'Swahili',
        'script' => 'Latn',
        'native' => 'Kiswahili',
        'regional' => 'sw_KE',
      ),
      'dav' => 
      array (
        'name' => 'Dawida',
        'script' => 'Latn',
        'native' => 'Kitaita',
        'regional' => '',
      ),
      'teo' => 
      array (
        'name' => 'Teso',
        'script' => 'Latn',
        'native' => 'Kiteso',
        'regional' => '',
      ),
      'khq' => 
      array (
        'name' => 'Koyra Chiini',
        'script' => 'Latn',
        'native' => 'Koyra ciini',
        'regional' => '',
      ),
      'ses' => 
      array (
        'name' => 'Songhay',
        'script' => 'Latn',
        'native' => 'Koyraboro senni',
        'regional' => '',
      ),
      'mfe' => 
      array (
        'name' => 'Morisyen',
        'script' => 'Latn',
        'native' => 'kreol morisien',
        'regional' => '',
      ),
      'ht' => 
      array (
        'name' => 'Haitian',
        'script' => 'Latn',
        'native' => 'Kreyòl ayisyen',
        'regional' => 'ht_HT',
      ),
      'kj' => 
      array (
        'name' => 'Kuanyama',
        'script' => 'Latn',
        'native' => 'Kwanyama',
        'regional' => '',
      ),
      'ksh' => 
      array (
        'name' => 'Kölsch',
        'script' => 'Latn',
        'native' => 'Kölsch',
        'regional' => '',
      ),
      'ebu' => 
      array (
        'name' => 'Kiembu',
        'script' => 'Latn',
        'native' => 'Kĩembu',
        'regional' => '',
      ),
      'mer' => 
      array (
        'name' => 'Kimîîru',
        'script' => 'Latn',
        'native' => 'Kĩmĩrũ',
        'regional' => '',
      ),
      'lag' => 
      array (
        'name' => 'Langi',
        'script' => 'Latn',
        'native' => 'Kɨlaangi',
        'regional' => '',
      ),
      'lah' => 
      array (
        'name' => 'Lahnda',
        'script' => 'Latn',
        'native' => 'Lahnda',
        'regional' => '',
      ),
      'la' => 
      array (
        'name' => 'Latin',
        'script' => 'Latn',
        'native' => 'latine',
        'regional' => '',
      ),
      'lv' => 
      array (
        'name' => 'Latvian',
        'script' => 'Latn',
        'native' => 'latviešu',
        'regional' => 'lv_LV',
      ),
      'to' => 
      array (
        'name' => 'Tongan',
        'script' => 'Latn',
        'native' => 'lea fakatonga',
        'regional' => '',
      ),
      'lt' => 
      array (
        'name' => 'Lithuanian',
        'script' => 'Latn',
        'native' => 'lietuvių',
        'regional' => 'lt_LT',
      ),
      'li' => 
      array (
        'name' => 'Limburgish',
        'script' => 'Latn',
        'native' => 'Limburgs',
        'regional' => 'li_BE',
      ),
      'ln' => 
      array (
        'name' => 'Lingala',
        'script' => 'Latn',
        'native' => 'lingála',
        'regional' => '',
      ),
      'lg' => 
      array (
        'name' => 'Ganda',
        'script' => 'Latn',
        'native' => 'Luganda',
        'regional' => 'lg_UG',
      ),
      'luy' => 
      array (
        'name' => 'Oluluyia',
        'script' => 'Latn',
        'native' => 'Luluhia',
        'regional' => '',
      ),
      'lb' => 
      array (
        'name' => 'Luxembourgish',
        'script' => 'Latn',
        'native' => 'Lëtzebuergesch',
        'regional' => 'lb_LU',
      ),
      'hu' => 
      array (
        'name' => 'Hungarian',
        'script' => 'Latn',
        'native' => 'magyar',
        'regional' => 'hu_HU',
      ),
      'mgh' => 
      array (
        'name' => 'Makhuwa-Meetto',
        'script' => 'Latn',
        'native' => 'Makua',
        'regional' => '',
      ),
      'mg' => 
      array (
        'name' => 'Malagasy',
        'script' => 'Latn',
        'native' => 'Malagasy',
        'regional' => 'mg_MG',
      ),
      'mt' => 
      array (
        'name' => 'Maltese',
        'script' => 'Latn',
        'native' => 'Malti',
        'regional' => 'mt_MT',
      ),
      'mtr' => 
      array (
        'name' => 'Mewari',
        'script' => 'Latn',
        'native' => 'Mewari',
        'regional' => '',
      ),
      'mua' => 
      array (
        'name' => 'Mundang',
        'script' => 'Latn',
        'native' => 'Mundang',
        'regional' => '',
      ),
      'mi' => 
      array (
        'name' => 'Māori',
        'script' => 'Latn',
        'native' => 'Māori',
        'regional' => 'mi_NZ',
      ),
      'nl' => 
      array (
        'name' => 'Dutch',
        'script' => 'Latn',
        'native' => 'Nederlands',
        'regional' => 'nl_NL',
      ),
      'nmg' => 
      array (
        'name' => 'Kwasio',
        'script' => 'Latn',
        'native' => 'ngumba',
        'regional' => '',
      ),
      'yav' => 
      array (
        'name' => 'Yangben',
        'script' => 'Latn',
        'native' => 'nuasue',
        'regional' => '',
      ),
      'nn' => 
      array (
        'name' => 'Norwegian Nynorsk',
        'script' => 'Latn',
        'native' => 'nynorsk',
        'regional' => 'nn_NO',
      ),
      'oc' => 
      array (
        'name' => 'Occitan',
        'script' => 'Latn',
        'native' => 'occitan',
        'regional' => 'oc_FR',
      ),
      'ang' => 
      array (
        'name' => 'Old English',
        'script' => 'Runr',
        'native' => 'Old English',
        'regional' => '',
      ),
      'xog' => 
      array (
        'name' => 'Soga',
        'script' => 'Latn',
        'native' => 'Olusoga',
        'regional' => '',
      ),
      'om' => 
      array (
        'name' => 'Oromo',
        'script' => 'Latn',
        'native' => 'Oromoo',
        'regional' => 'om_ET',
      ),
      'ng' => 
      array (
        'name' => 'Ndonga',
        'script' => 'Latn',
        'native' => 'OshiNdonga',
        'regional' => '',
      ),
      'hz' => 
      array (
        'name' => 'Herero',
        'script' => 'Latn',
        'native' => 'Otjiherero',
        'regional' => '',
      ),
      'uz-Latn' => 
      array (
        'name' => 'Uzbek (Latin)',
        'script' => 'Latn',
        'native' => 'oʼzbekcha',
        'regional' => 'uz_UZ',
      ),
      'nds' => 
      array (
        'name' => 'Low German',
        'script' => 'Latn',
        'native' => 'Plattdüütsch',
        'regional' => 'nds_DE',
      ),
      'pl' => 
      array (
        'name' => 'Polish',
        'script' => 'Latn',
        'native' => 'polski',
        'regional' => 'pl_PL',
      ),
      'pt' => 
      array (
        'name' => 'Portuguese',
        'script' => 'Latn',
        'native' => 'português',
        'regional' => 'pt_PT',
      ),
      'pt-BR' => 
      array (
        'name' => 'Brazilian Portuguese',
        'script' => 'Latn',
        'native' => 'português do Brasil',
        'regional' => 'pt_BR',
      ),
      'ff' => 
      array (
        'name' => 'Fulah',
        'script' => 'Latn',
        'native' => 'Pulaar',
        'regional' => 'ff_SN',
      ),
      'pi' => 
      array (
        'name' => 'Pahari-Potwari',
        'script' => 'Latn',
        'native' => 'Pāli',
        'regional' => '',
      ),
      'aa' => 
      array (
        'name' => 'Afar',
        'script' => 'Latn',
        'native' => 'Qafar',
        'regional' => 'aa_ER',
      ),
      'ty' => 
      array (
        'name' => 'Tahitian',
        'script' => 'Latn',
        'native' => 'Reo Māohi',
        'regional' => '',
      ),
      'ksf' => 
      array (
        'name' => 'Bafia',
        'script' => 'Latn',
        'native' => 'rikpa',
        'regional' => '',
      ),
      'ro' => 
      array (
        'name' => 'Romanian',
        'script' => 'Latn',
        'native' => 'română',
        'regional' => 'ro_RO',
      ),
      'cgg' => 
      array (
        'name' => 'Chiga',
        'script' => 'Latn',
        'native' => 'Rukiga',
        'regional' => '',
      ),
      'rm' => 
      array (
        'name' => 'Romansh',
        'script' => 'Latn',
        'native' => 'rumantsch',
        'regional' => '',
      ),
      'qu' => 
      array (
        'name' => 'Quechua',
        'script' => 'Latn',
        'native' => 'Runa Simi',
        'regional' => '',
      ),
      'nyn' => 
      array (
        'name' => 'Nyankole',
        'script' => 'Latn',
        'native' => 'Runyankore',
        'regional' => '',
      ),
      'ssy' => 
      array (
        'name' => 'Saho',
        'script' => 'Latn',
        'native' => 'Saho',
        'regional' => '',
      ),
      'sc' => 
      array (
        'name' => 'Sardinian',
        'script' => 'Latn',
        'native' => 'sardu',
        'regional' => 'sc_IT',
      ),
      'de-CH' => 
      array (
        'name' => 'Swiss High German',
        'script' => 'Latn',
        'native' => 'Schweizer Hochdeutsch',
        'regional' => 'de_CH',
      ),
      'gsw' => 
      array (
        'name' => 'Swiss German',
        'script' => 'Latn',
        'native' => 'Schwiizertüütsch',
        'regional' => '',
      ),
      'trv' => 
      array (
        'name' => 'Taroko',
        'script' => 'Latn',
        'native' => 'Seediq',
        'regional' => '',
      ),
      'seh' => 
      array (
        'name' => 'Sena',
        'script' => 'Latn',
        'native' => 'sena',
        'regional' => '',
      ),
      'nso' => 
      array (
        'name' => 'Northern Sotho',
        'script' => 'Latn',
        'native' => 'Sesotho sa Leboa',
        'regional' => 'nso_ZA',
      ),
      'st' => 
      array (
        'name' => 'Southern Sotho',
        'script' => 'Latn',
        'native' => 'Sesotho',
        'regional' => 'st_ZA',
      ),
      'tn' => 
      array (
        'name' => 'Tswana',
        'script' => 'Latn',
        'native' => 'Setswana',
        'regional' => 'tn_ZA',
      ),
      'sq' => 
      array (
        'name' => 'Albanian',
        'script' => 'Latn',
        'native' => 'shqip',
        'regional' => 'sq_AL',
      ),
      'sid' => 
      array (
        'name' => 'Sidamo',
        'script' => 'Latn',
        'native' => 'Sidaamu Afo',
        'regional' => 'sid_ET',
      ),
      'ss' => 
      array (
        'name' => 'Swati',
        'script' => 'Latn',
        'native' => 'Siswati',
        'regional' => 'ss_ZA',
      ),
      'sk' => 
      array (
        'name' => 'Slovak',
        'script' => 'Latn',
        'native' => 'slovenčina',
        'regional' => 'sk_SK',
      ),
      'sl' => 
      array (
        'name' => 'Slovene',
        'script' => 'Latn',
        'native' => 'slovenščina',
        'regional' => 'sl_SI',
      ),
      'so' => 
      array (
        'name' => 'Somali',
        'script' => 'Latn',
        'native' => 'Soomaali',
        'regional' => 'so_SO',
      ),
      'sr-Latn' => 
      array (
        'name' => 'Serbian (Latin)',
        'script' => 'Latn',
        'native' => 'Srpski',
        'regional' => 'sr_RS',
      ),
      'sh' => 
      array (
        'name' => 'Serbo-Croatian',
        'script' => 'Latn',
        'native' => 'srpskohrvatski',
        'regional' => '',
      ),
      'fi' => 
      array (
        'name' => 'Finnish',
        'script' => 'Latn',
        'native' => 'suomi',
        'regional' => 'fi_FI',
      ),
      'sv' => 
      array (
        'name' => 'Swedish',
        'script' => 'Latn',
        'native' => 'svenska',
        'regional' => 'sv_SE',
      ),
      'sg' => 
      array (
        'name' => 'Sango',
        'script' => 'Latn',
        'native' => 'Sängö',
        'regional' => '',
      ),
      'tl' => 
      array (
        'name' => 'Tagalog',
        'script' => 'Latn',
        'native' => 'Tagalog',
        'regional' => 'tl_PH',
      ),
      'tzm-Latn' => 
      array (
        'name' => 'Central Atlas Tamazight (Latin)',
        'script' => 'Latn',
        'native' => 'Tamazight',
        'regional' => '',
      ),
      'kab' => 
      array (
        'name' => 'Kabyle',
        'script' => 'Latn',
        'native' => 'Taqbaylit',
        'regional' => 'kab_DZ',
      ),
      'twq' => 
      array (
        'name' => 'Tasawaq',
        'script' => 'Latn',
        'native' => 'Tasawaq senni',
        'regional' => '',
      ),
      'shi' => 
      array (
        'name' => 'Tachelhit (Latin)',
        'script' => 'Latn',
        'native' => 'Tashelhit',
        'regional' => '',
      ),
      'nus' => 
      array (
        'name' => 'Nuer',
        'script' => 'Latn',
        'native' => 'Thok Nath',
        'regional' => '',
      ),
      'vi' => 
      array (
        'name' => 'Vietnamese',
        'script' => 'Latn',
        'native' => 'Tiếng Việt',
        'regional' => 'vi_VN',
      ),
      'tg-Latn' => 
      array (
        'name' => 'Tajik (Latin)',
        'script' => 'Latn',
        'native' => 'tojikī',
        'regional' => 'tg_TJ',
      ),
      'lu' => 
      array (
        'name' => 'Luba-Katanga',
        'script' => 'Latn',
        'native' => 'Tshiluba',
        'regional' => 've_ZA',
      ),
      've' => 
      array (
        'name' => 'Venda',
        'script' => 'Latn',
        'native' => 'Tshivenḓa',
        'regional' => '',
      ),
      'tw' => 
      array (
        'name' => 'Twi',
        'script' => 'Latn',
        'native' => 'Twi',
        'regional' => '',
      ),
      'tr' => 
      array (
        'name' => 'Turkish',
        'script' => 'Latn',
        'native' => 'Türkçe',
        'regional' => 'tr_TR',
      ),
      'ale' => 
      array (
        'name' => 'Aleut',
        'script' => 'Latn',
        'native' => 'Unangax tunuu',
        'regional' => '',
      ),
      'ca-valencia' => 
      array (
        'name' => 'Valencian',
        'script' => 'Latn',
        'native' => 'valencià',
        'regional' => '',
      ),
      'vai-Latn' => 
      array (
        'name' => 'Vai (Latin)',
        'script' => 'Latn',
        'native' => 'Viyamíĩ',
        'regional' => '',
      ),
      'vo' => 
      array (
        'name' => 'Volapük',
        'script' => 'Latn',
        'native' => 'Volapük',
        'regional' => '',
      ),
      'fj' => 
      array (
        'name' => 'Fijian',
        'script' => 'Latn',
        'native' => 'vosa Vakaviti',
        'regional' => '',
      ),
      'wa' => 
      array (
        'name' => 'Walloon',
        'script' => 'Latn',
        'native' => 'Walon',
        'regional' => 'wa_BE',
      ),
      'wae' => 
      array (
        'name' => 'Walser',
        'script' => 'Latn',
        'native' => 'Walser',
        'regional' => 'wae_CH',
      ),
      'wen' => 
      array (
        'name' => 'Sorbian',
        'script' => 'Latn',
        'native' => 'Wendic',
        'regional' => '',
      ),
      'wo' => 
      array (
        'name' => 'Wolof',
        'script' => 'Latn',
        'native' => 'Wolof',
        'regional' => 'wo_SN',
      ),
      'ts' => 
      array (
        'name' => 'Tsonga',
        'script' => 'Latn',
        'native' => 'Xitsonga',
        'regional' => 'ts_ZA',
      ),
      'dje' => 
      array (
        'name' => 'Zarma',
        'script' => 'Latn',
        'native' => 'Zarmaciine',
        'regional' => '',
      ),
      'yo' => 
      array (
        'name' => 'Yoruba',
        'script' => 'Latn',
        'native' => 'Èdè Yorùbá',
        'regional' => 'yo_NG',
      ),
      'de-AT' => 
      array (
        'name' => 'Austrian German',
        'script' => 'Latn',
        'native' => 'Österreichisches Deutsch',
        'regional' => 'de_AT',
      ),
      'is' => 
      array (
        'name' => 'Icelandic',
        'script' => 'Latn',
        'native' => 'íslenska',
        'regional' => 'is_IS',
      ),
      'cs' => 
      array (
        'name' => 'Czech',
        'script' => 'Latn',
        'native' => 'čeština',
        'regional' => 'cs_CZ',
      ),
      'bas' => 
      array (
        'name' => 'Basa',
        'script' => 'Latn',
        'native' => 'Ɓàsàa',
        'regional' => '',
      ),
      'mas' => 
      array (
        'name' => 'Masai',
        'script' => 'Latn',
        'native' => 'ɔl-Maa',
        'regional' => '',
      ),
      'haw' => 
      array (
        'name' => 'Hawaiian',
        'script' => 'Latn',
        'native' => 'ʻŌlelo Hawaiʻi',
        'regional' => '',
      ),
      'el' => 
      array (
        'name' => 'Greek',
        'script' => 'Grek',
        'native' => 'Ελληνικά',
        'regional' => 'el_GR',
      ),
      'uz' => 
      array (
        'name' => 'Uzbek (Cyrillic)',
        'script' => 'Cyrl',
        'native' => 'Ўзбек',
        'regional' => 'uz_UZ',
      ),
      'az-Cyrl' => 
      array (
        'name' => 'Azerbaijani (Cyrillic)',
        'script' => 'Cyrl',
        'native' => 'Азәрбајҹан',
        'regional' => 'uz_UZ',
      ),
      'ab' => 
      array (
        'name' => 'Abkhazian',
        'script' => 'Cyrl',
        'native' => 'Аҧсуа',
        'regional' => '',
      ),
      'os' => 
      array (
        'name' => 'Ossetic',
        'script' => 'Cyrl',
        'native' => 'Ирон',
        'regional' => 'os_RU',
      ),
      'ky' => 
      array (
        'name' => 'Kyrgyz',
        'script' => 'Cyrl',
        'native' => 'Кыргыз',
        'regional' => 'ky_KG',
      ),
      'sr' => 
      array (
        'name' => 'Serbian (Cyrillic)',
        'script' => 'Cyrl',
        'native' => 'Српски',
        'regional' => 'sr_RS',
      ),
      'av' => 
      array (
        'name' => 'Avaric',
        'script' => 'Cyrl',
        'native' => 'авар мацӀ',
        'regional' => '',
      ),
      'ady' => 
      array (
        'name' => 'Adyghe',
        'script' => 'Cyrl',
        'native' => 'адыгэбзэ',
        'regional' => '',
      ),
      'ba' => 
      array (
        'name' => 'Bashkir',
        'script' => 'Cyrl',
        'native' => 'башҡорт теле',
        'regional' => '',
      ),
      'be' => 
      array (
        'name' => 'Belarusian',
        'script' => 'Cyrl',
        'native' => 'беларуская',
        'regional' => 'be_BY',
      ),
      'bg' => 
      array (
        'name' => 'Bulgarian',
        'script' => 'Cyrl',
        'native' => 'български',
        'regional' => 'bg_BG',
      ),
      'kv' => 
      array (
        'name' => 'Komi',
        'script' => 'Cyrl',
        'native' => 'коми кыв',
        'regional' => '',
      ),
      'mk' => 
      array (
        'name' => 'Macedonian',
        'script' => 'Cyrl',
        'native' => 'македонски',
        'regional' => 'mk_MK',
      ),
      'mn' => 
      array (
        'name' => 'Mongolian (Cyrillic)',
        'script' => 'Cyrl',
        'native' => 'монгол',
        'regional' => 'mn_MN',
      ),
      'ce' => 
      array (
        'name' => 'Chechen',
        'script' => 'Cyrl',
        'native' => 'нохчийн мотт',
        'regional' => 'ce_RU',
      ),
      'ru' => 
      array (
        'name' => 'Russian',
        'script' => 'Cyrl',
        'native' => 'русский',
        'regional' => 'ru_RU',
      ),
      'sah' => 
      array (
        'name' => 'Yakut',
        'script' => 'Cyrl',
        'native' => 'саха тыла',
        'regional' => '',
      ),
      'tt' => 
      array (
        'name' => 'Tatar',
        'script' => 'Cyrl',
        'native' => 'татар теле',
        'regional' => 'tt_RU',
      ),
      'tg' => 
      array (
        'name' => 'Tajik (Cyrillic)',
        'script' => 'Cyrl',
        'native' => 'тоҷикӣ',
        'regional' => 'tg_TJ',
      ),
      'tk' => 
      array (
        'name' => 'Turkmen',
        'script' => 'Cyrl',
        'native' => 'түркменче',
        'regional' => 'tk_TM',
      ),
      'uk' => 
      array (
        'name' => 'Ukrainian',
        'script' => 'Cyrl',
        'native' => 'українська',
        'regional' => 'uk_UA',
      ),
      'cv' => 
      array (
        'name' => 'Chuvash',
        'script' => 'Cyrl',
        'native' => 'чӑваш чӗлхи',
        'regional' => 'cv_RU',
      ),
      'cu' => 
      array (
        'name' => 'Church Slavic',
        'script' => 'Cyrl',
        'native' => 'ѩзыкъ словѣньскъ',
        'regional' => '',
      ),
      'kk' => 
      array (
        'name' => 'Kazakh',
        'script' => 'Cyrl',
        'native' => 'қазақ тілі',
        'regional' => 'kk_KZ',
      ),
      'hy' => 
      array (
        'name' => 'Armenian',
        'script' => 'Armn',
        'native' => 'Հայերեն',
        'regional' => 'hy_AM',
      ),
      'yi' => 
      array (
        'name' => 'Yiddish',
        'script' => 'Hebr',
        'native' => 'ייִדיש',
        'regional' => 'yi_US',
      ),
      'he' => 
      array (
        'name' => 'Hebrew',
        'script' => 'Hebr',
        'native' => 'עברית',
        'regional' => 'he_IL',
      ),
      'ug' => 
      array (
        'name' => 'Uyghur',
        'script' => 'Arab',
        'native' => 'ئۇيغۇرچە',
        'regional' => 'ug_CN',
      ),
      'ur' => 
      array (
        'name' => 'Urdu',
        'script' => 'Arab',
        'native' => 'اردو',
        'regional' => 'ur_PK',
      ),
      'ar' => 
      array (
        'name' => 'Arabic',
        'script' => 'Arab',
        'native' => 'العربية',
        'regional' => 'ar_AE',
      ),
      'uz-Arab' => 
      array (
        'name' => 'Uzbek (Arabic)',
        'script' => 'Arab',
        'native' => 'اۉزبېک',
        'regional' => '',
      ),
      'tg-Arab' => 
      array (
        'name' => 'Tajik (Arabic)',
        'script' => 'Arab',
        'native' => 'تاجیکی',
        'regional' => 'tg_TJ',
      ),
      'sd' => 
      array (
        'name' => 'Sindhi',
        'script' => 'Arab',
        'native' => 'سنڌي',
        'regional' => 'sd_IN',
      ),
      'fa' => 
      array (
        'name' => 'Persian',
        'script' => 'Arab',
        'native' => 'فارسی',
        'regional' => 'fa_IR',
      ),
      'pa-Arab' => 
      array (
        'name' => 'Punjabi (Arabic)',
        'script' => 'Arab',
        'native' => 'پنجاب',
        'regional' => 'pa_IN',
      ),
      'ps' => 
      array (
        'name' => 'Pashto',
        'script' => 'Arab',
        'native' => 'پښتو',
        'regional' => 'ps_AF',
      ),
      'ks' => 
      array (
        'name' => 'Kashmiri (Arabic)',
        'script' => 'Arab',
        'native' => 'کأشُر',
        'regional' => 'ks_IN',
      ),
      'ku' => 
      array (
        'name' => 'Kurdish',
        'script' => 'Arab',
        'native' => 'کوردی',
        'regional' => 'ku_TR',
      ),
      'dv' => 
      array (
        'name' => 'Divehi',
        'script' => 'Thaa',
        'native' => 'ދިވެހިބަސް',
        'regional' => 'dv_MV',
      ),
      'ks-Deva' => 
      array (
        'name' => 'Kashmiri (Devaganari)',
        'script' => 'Deva',
        'native' => 'कॉशुर',
        'regional' => 'ks_IN',
      ),
      'kok' => 
      array (
        'name' => 'Konkani',
        'script' => 'Deva',
        'native' => 'कोंकणी',
        'regional' => 'kok_IN',
      ),
      'doi' => 
      array (
        'name' => 'Dogri',
        'script' => 'Deva',
        'native' => 'डोगरी',
        'regional' => 'doi_IN',
      ),
      'ne' => 
      array (
        'name' => 'Nepali',
        'script' => 'Deva',
        'native' => 'नेपाली',
        'regional' => '',
      ),
      'pra' => 
      array (
        'name' => 'Prakrit',
        'script' => 'Deva',
        'native' => 'प्राकृत',
        'regional' => '',
      ),
      'brx' => 
      array (
        'name' => 'Bodo',
        'script' => 'Deva',
        'native' => 'बड़ो',
        'regional' => 'brx_IN',
      ),
      'bra' => 
      array (
        'name' => 'Braj',
        'script' => 'Deva',
        'native' => 'ब्रज भाषा',
        'regional' => '',
      ),
      'mr' => 
      array (
        'name' => 'Marathi',
        'script' => 'Deva',
        'native' => 'मराठी',
        'regional' => 'mr_IN',
      ),
      'mai' => 
      array (
        'name' => 'Maithili',
        'script' => 'Tirh',
        'native' => 'मैथिली',
        'regional' => 'mai_IN',
      ),
      'raj' => 
      array (
        'name' => 'Rajasthani',
        'script' => 'Deva',
        'native' => 'राजस्थानी',
        'regional' => '',
      ),
      'sa' => 
      array (
        'name' => 'Sanskrit',
        'script' => 'Deva',
        'native' => 'संस्कृतम्',
        'regional' => 'sa_IN',
      ),
      'hi' => 
      array (
        'name' => 'Hindi',
        'script' => 'Deva',
        'native' => 'हिन्दी',
        'regional' => 'hi_IN',
      ),
      'as' => 
      array (
        'name' => 'Assamese',
        'script' => 'Beng',
        'native' => 'অসমীয়া',
        'regional' => 'as_IN',
      ),
      'bn' => 
      array (
        'name' => 'Bengali',
        'script' => 'Beng',
        'native' => 'বাংলা',
        'regional' => 'bn_BD',
      ),
      'mni' => 
      array (
        'name' => 'Manipuri',
        'script' => 'Beng',
        'native' => 'মৈতৈ',
        'regional' => 'mni_IN',
      ),
      'pa' => 
      array (
        'name' => 'Punjabi (Gurmukhi)',
        'script' => 'Guru',
        'native' => 'ਪੰਜਾਬੀ',
        'regional' => 'pa_IN',
      ),
      'gu' => 
      array (
        'name' => 'Gujarati',
        'script' => 'Gujr',
        'native' => 'ગુજરાતી',
        'regional' => 'gu_IN',
      ),
      'or' => 
      array (
        'name' => 'Oriya',
        'script' => 'Orya',
        'native' => 'ଓଡ଼ିଆ',
        'regional' => 'or_IN',
      ),
      'ta' => 
      array (
        'name' => 'Tamil',
        'script' => 'Taml',
        'native' => 'தமிழ்',
        'regional' => 'ta_IN',
      ),
      'te' => 
      array (
        'name' => 'Telugu',
        'script' => 'Telu',
        'native' => 'తెలుగు',
        'regional' => 'te_IN',
      ),
      'kn' => 
      array (
        'name' => 'Kannada',
        'script' => 'Knda',
        'native' => 'ಕನ್ನಡ',
        'regional' => 'kn_IN',
      ),
      'ml' => 
      array (
        'name' => 'Malayalam',
        'script' => 'Mlym',
        'native' => 'മലയാളം',
        'regional' => 'ml_IN',
      ),
      'si' => 
      array (
        'name' => 'Sinhala',
        'script' => 'Sinh',
        'native' => 'සිංහල',
        'regional' => 'si_LK',
      ),
      'th' => 
      array (
        'name' => 'Thai',
        'script' => 'Thai',
        'native' => 'ไทย',
        'regional' => 'th_TH',
      ),
      'lo' => 
      array (
        'name' => 'Lao',
        'script' => 'Laoo',
        'native' => 'ລາວ',
        'regional' => 'lo_LA',
      ),
      'bo' => 
      array (
        'name' => 'Tibetan',
        'script' => 'Tibt',
        'native' => 'པོད་སྐད་',
        'regional' => 'bo_IN',
      ),
      'dz' => 
      array (
        'name' => 'Dzongkha',
        'script' => 'Tibt',
        'native' => 'རྫོང་ཁ',
        'regional' => 'dz_BT',
      ),
      'my' => 
      array (
        'name' => 'Burmese',
        'script' => 'Mymr',
        'native' => 'မြန်မာဘာသာ',
        'regional' => 'my_MM',
      ),
      'ka' => 
      array (
        'name' => 'Georgian',
        'script' => 'Geor',
        'native' => 'ქართული',
        'regional' => 'ka_GE',
      ),
      'byn' => 
      array (
        'name' => 'Blin',
        'script' => 'Ethi',
        'native' => 'ብሊን',
        'regional' => 'byn_ER',
      ),
      'tig' => 
      array (
        'name' => 'Tigre',
        'script' => 'Ethi',
        'native' => 'ትግረ',
        'regional' => 'tig_ER',
      ),
      'ti' => 
      array (
        'name' => 'Tigrinya',
        'script' => 'Ethi',
        'native' => 'ትግርኛ',
        'regional' => 'ti_ET',
      ),
      'am' => 
      array (
        'name' => 'Amharic',
        'script' => 'Ethi',
        'native' => 'አማርኛ',
        'regional' => 'am_ET',
      ),
      'wal' => 
      array (
        'name' => 'Wolaytta',
        'script' => 'Ethi',
        'native' => 'ወላይታቱ',
        'regional' => 'wal_ET',
      ),
      'chr' => 
      array (
        'name' => 'Cherokee',
        'script' => 'Cher',
        'native' => 'ᏣᎳᎩ',
        'regional' => '',
      ),
      'iu' => 
      array (
        'name' => 'Inuktitut (Canadian Aboriginal Syllabics)',
        'script' => 'Cans',
        'native' => 'ᐃᓄᒃᑎᑐᑦ',
        'regional' => 'iu_CA',
      ),
      'oj' => 
      array (
        'name' => 'Ojibwa',
        'script' => 'Cans',
        'native' => 'ᐊᓂᔑᓈᐯᒧᐎᓐ',
        'regional' => '',
      ),
      'cr' => 
      array (
        'name' => 'Cree',
        'script' => 'Cans',
        'native' => 'ᓀᐦᐃᔭᐍᐏᐣ',
        'regional' => '',
      ),
      'km' => 
      array (
        'name' => 'Khmer',
        'script' => 'Khmr',
        'native' => 'ភាសាខ្មែរ',
        'regional' => 'km_KH',
      ),
      'mn-Mong' => 
      array (
        'name' => 'Mongolian (Mongolian)',
        'script' => 'Mong',
        'native' => 'ᠮᠣᠨᠭᠭᠣᠯ ᠬᠡᠯᠡ',
        'regional' => 'mn_MN',
      ),
      'shi-Tfng' => 
      array (
        'name' => 'Tachelhit (Tifinagh)',
        'script' => 'Tfng',
        'native' => 'ⵜⴰⵎⴰⵣⵉⵖⵜ',
        'regional' => '',
      ),
      'tzm' => 
      array (
        'name' => 'Central Atlas Tamazight (Tifinagh)',
        'script' => 'Tfng',
        'native' => 'ⵜⴰⵎⴰⵣⵉⵖⵜ',
        'regional' => '',
      ),
      'yue' => 
      array (
        'name' => 'Yue',
        'script' => 'Hant',
        'native' => '廣州話',
        'regional' => 'yue_HK',
      ),
      'ja' => 
      array (
        'name' => 'Japanese',
        'script' => 'Jpan',
        'native' => '日本語',
        'regional' => 'ja_JP',
      ),
      'zh' => 
      array (
        'name' => 'Chinese (Simplified)',
        'script' => 'Hans',
        'native' => '简体中文',
        'regional' => 'zh_CN',
      ),
      'zh-Hant' => 
      array (
        'name' => 'Chinese (Traditional)',
        'script' => 'Hant',
        'native' => '繁體中文',
        'regional' => 'zh_CN',
      ),
      'ii' => 
      array (
        'name' => 'Sichuan Yi',
        'script' => 'Yiii',
        'native' => 'ꆈꌠꉙ',
        'regional' => '',
      ),
      'vai' => 
      array (
        'name' => 'Vai (Vai)',
        'script' => 'Vaii',
        'native' => 'ꕙꔤ',
        'regional' => '',
      ),
      'jv-Java' => 
      array (
        'name' => 'Javanese (Javanese)',
        'script' => 'Java',
        'native' => 'ꦧꦱꦗꦮ',
        'regional' => '',
      ),
      'ko' => 
      array (
        'name' => 'Korean',
        'script' => 'Hang',
        'native' => '한국어',
        'regional' => 'ko_KR',
      ),
    ),
    'useAcceptLanguageHeader' => false,
    'hideDefaultLocaleInURL' => true,
    'localesOrder' => 
    array (
    ),
    'localesMapping' => 
    array (
    ),
    'utf8suffix' => '.UTF-8',
    'urlsIgnored' => 
    array (
      0 => '/skipped',
    ),
    'httpMethodsIgnored' => 
    array (
      0 => 'POST',
      1 => 'PUT',
      2 => 'PATCH',
      3 => 'DELETE',
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'deprecations' => 
    array (
      'channel' => 'null',
      'trace' => false,
    ),
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/var/www/html/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/var/www/html/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
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
          'connectionString' => 'tls://:',
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
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
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '/var/www/html/storage/logs/laravel.log',
      ),
    ),
  ),
  'magicaiupdater' => 
  array (
    'tmp_folder_name' => 'tmp',
    'script_filename' => 'upgrade.php',
    'update_baseurl' => 'https://api.liquid-themes.com/magicai/updater-v2',
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'smtp.mailtrap.io',
        'port' => 0,
        'encryption' => 'TLS',
        'username' => NULL,
        'password' => NULL,
      ),
      'timeout' => NULL,
      'local_domain' => NULL,
      'auth_mode' => NULL,
      'verify_peer' => false,
      'verify_peer_name' => false,
    ),
    'from' => 
    array (
      'address' => NULL,
      'name' => NULL,
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/var/www/html/resources/views/vendor/mail',
      ),
    ),
    'stream' => 
    array (
      'ssl' => 
      array (
        'allow_self_signed' => true,
        'verify_peer' => false,
        'verify_peer_name' => false,
      ),
    ),
  ),
  'openai' => 
  array (
    'api_key' => NULL,
    'request_timeout' => 120,
    'organization' => NULL,
  ),
  'paypal' => 
  array (
    'mode' => 'sandbox',
    'sandbox' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'app_id' => 'APP-80W284485P519543T',
    ),
    'live' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'app_id' => '',
    ),
    'payment_action' => 'Sale',
    'currency' => 'USD',
    'notify_url' => '',
    'locale' => 'en_US',
    'validate_ssl' => true,
  ),
  'purifier' => 
  array (
    'encoding' => 'UTF-8',
    'finalize' => true,
    'ignoreNonStrings' => false,
    'cachePath' => '/var/www/html/storage/app/purifier',
    'cacheFileMode' => 493,
    'settings' => 
    array (
      'default' => 
      array (
        'HTML.Doctype' => 'HTML 4.01 Transitional',
        'HTML.Allowed' => 'div[class],b,strong,i,em,u,a[href|title|class],ul[class],ol[class],li[class],p[style|class],br[class],span[style|class],img[width|height|alt|src|class]',
        'CSS.AllowedProperties' => 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align',
        'AutoFormat.AutoParagraph' => false,
        'AutoFormat.RemoveEmpty' => true,
      ),
      'test' => 
      array (
        'Attr.EnableID' => 'true',
      ),
      'youtube' => 
      array (
        'HTML.SafeIframe' => 'true',
        'URI.SafeIframeRegexp' => '%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/)%',
      ),
      'custom_definition' => 
      array (
        'id' => 'html5-definitions',
        'rev' => 1,
        'debug' => false,
        'elements' => 
        array (
          0 => 
          array (
            0 => 'section',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          1 => 
          array (
            0 => 'nav',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          2 => 
          array (
            0 => 'article',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          3 => 
          array (
            0 => 'aside',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          4 => 
          array (
            0 => 'header',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          5 => 
          array (
            0 => 'footer',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          6 => 
          array (
            0 => 'address',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          7 => 
          array (
            0 => 'hgroup',
            1 => 'Block',
            2 => 'Required: h1 | h2 | h3 | h4 | h5 | h6',
            3 => 'Common',
          ),
          8 => 
          array (
            0 => 'figure',
            1 => 'Block',
            2 => 'Optional: (figcaption, Flow) | (Flow, figcaption) | Flow',
            3 => 'Common',
          ),
          9 => 
          array (
            0 => 'figcaption',
            1 => 'Inline',
            2 => 'Flow',
            3 => 'Common',
          ),
          10 => 
          array (
            0 => 'video',
            1 => 'Block',
            2 => 'Optional: (source, Flow) | (Flow, source) | Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
              'width' => 'Length',
              'height' => 'Length',
              'poster' => 'URI',
              'preload' => 'Enum#auto,metadata,none',
              'controls' => 'Bool',
            ),
          ),
          11 => 
          array (
            0 => 'source',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
            ),
          ),
          12 => 
          array (
            0 => 's',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          13 => 
          array (
            0 => 'var',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          14 => 
          array (
            0 => 'sub',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          15 => 
          array (
            0 => 'sup',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          16 => 
          array (
            0 => 'mark',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          17 => 
          array (
            0 => 'wbr',
            1 => 'Inline',
            2 => 'Empty',
            3 => 'Core',
          ),
          18 => 
          array (
            0 => 'ins',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
          19 => 
          array (
            0 => 'del',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            0 => 'iframe',
            1 => 'allowfullscreen',
            2 => 'Bool',
          ),
          1 => 
          array (
            0 => 'table',
            1 => 'height',
            2 => 'Text',
          ),
          2 => 
          array (
            0 => 'td',
            1 => 'border',
            2 => 'Text',
          ),
          3 => 
          array (
            0 => 'th',
            1 => 'border',
            2 => 'Text',
          ),
          4 => 
          array (
            0 => 'tr',
            1 => 'width',
            2 => 'Text',
          ),
          5 => 
          array (
            0 => 'tr',
            1 => 'height',
            2 => 'Text',
          ),
          6 => 
          array (
            0 => 'tr',
            1 => 'border',
            2 => 'Text',
          ),
        ),
      ),
      'custom_attributes' => 
      array (
        0 => 
        array (
          0 => 'a',
          1 => 'target',
          2 => 'Enum#_blank,_self,_target,_top',
        ),
      ),
      'custom_elements' => 
      array (
        0 => 
        array (
          0 => 'u',
          1 => 'Inline',
          2 => 'Inline',
          3 => 'Common',
        ),
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'database',
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
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => NULL,
        'secret' => NULL,
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => 'iatify.com',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'token_prefix' => '',
    'middleware' => 
    array (
      'verify_csrf_token' => 'App\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'App\\Http\\Middleware\\EncryptCookies',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
      'scheme' => 'https',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'github' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => '/github/callback',
    ),
    'google' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => '/google/callback',
    ),
    'facebook' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => '/facebook/callback',
    ),
    'apple' => 
    array (
      'client_id' => NULL,
    ),
    'stripe' => 
    array (
      'class' => 'App\\Services\\PaymentGateways\\StripeService',
    ),
    'paypal' => 
    array (
      'class' => 'App\\Services\\PaymentGateways\\PayPalService',
    ),
    'paystack' => 
    array (
      'class' => 'App\\Services\\PaymentGateways\\PaystackService',
    ),
    'yokassa' => 
    array (
      'class' => 'App\\Services\\PaymentGateways\\YokassaService',
    ),
    'iyzico' => 
    array (
      'class' => 'App\\Services\\PaymentGateways\\IyzicoService',
    ),
    'razorpay' => 
    array (
      'class' => 'App\\Services\\PaymentGateways\\RazorpayService',
    ),
    'banktransfer' => 
    array (
      'class' => 'App\\Services\\PaymentGateways\\TransferService',
    ),
    'freeservice' => 
    array (
      'class' => 'App\\Services\\PaymentGateways\\FreeService',
    ),
    'revenuecat' => 
    array (
      'class' => 'App\\Services\\PaymentGateways\\RevenueCatService',
    ),
    'coinbase' => 
    array (
      'class' => 'App\\Services\\PaymentGateways\\CoinbaseService',
    ),
    'coingate' => 
    array (
      'class' => 'App\\Services\\PaymentGateways\\CoingateService',
    ),
    'paddle' => 
    array (
      'class' => 'App\\Services\\PaymentGateways\\PaddleService',
    ),
    'cryptomus' => 
    array (
      'class' => 'App\\Services\\PaymentGateways\\CryptomusService',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/var/www/html/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'magicai_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => true,
    'http_only' => true,
    'same_site' => 'none',
  ),
  'setting' => 
  array (
    'auto_save' => false,
    'cache' => 
    array (
      'enabled' => false,
      'key' => 'app_setting',
      'ttl' => 3600,
      'auto_clear' => true,
    ),
    'driver' => 'database',
    'database' => 
    array (
      'connection' => NULL,
      'table' => 'app_settings',
      'key' => 'key',
      'value' => 'value',
    ),
    'json' => 
    array (
      'path' => '/var/www/html/storage/app_settings.json',
    ),
    'override' => 
    array (
    ),
    'fallback' => 
    array (
    ),
    'required_extra_columns' => 
    array (
    ),
    'encrypted_keys' => 
    array (
    ),
  ),
  'tailwind-merge' => 
  array (
    'prefix' => NULL,
    'classGroups' => 
    array (
    ),
    'blade_directive' => 'twMerge',
  ),
  'themes' => 
  array (
    'themes_path' => NULL,
    'asset_not_found' => 'LOG_ERROR',
    'default' => 'default',
    'cache' => false,
    'themes' => 
    array (
    ),
  ),
  'thumbnail' => 
  array (
    'signing_key' => '8f4ecf63e63663724b53fccc1e3e25da7f338434',
    'memory_limit' => '1024M',
    'allowedSources' => 
    array (
      'a' => '/var/www/html/app',
      'r' => '/var/www/html/resources',
      'p' => '/var/www/html/public',
      's' => '/var/www/html/storage',
      'http' => 'http://',
      'https' => 'https://',
      'ld' => 
      array (
        'disk' => 'local',
        'path' => '',
      ),
      'pd' => 
      array (
        'disk' => 'public',
        'path' => '',
      ),
    ),
    'presets' => 
    array (
      'default' => 
      array (
        'destination' => 
        array (
          'disk' => 'public',
          'path' => 'thumbnails/default/',
        ),
      ),
      'avatar' => 
      array (
        'destination' => 
        array (
          'disk' => 'public',
          'path' => 'thumbnails/avatar/',
        ),
        'smartcrop' => '64x64',
      ),
    ),
    'filters' => 
    array (
      0 => 'Rolandstarke\\Thumbnail\\Filter\\Resize',
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/var/www/html/resources/views/default',
      1 => '/var/www/html/resources/views',
    ),
    'compiled' => '/var/www/html/storage/framework/views',
  ),
  'blade-icons' => 
  array (
    'sets' => 
    array (
    ),
    'class' => '',
    'attributes' => 
    array (
    ),
    'fallback' => '',
    'components' => 
    array (
      'disabled' => false,
      'default' => 'icon',
    ),
  ),
  'passport' => 
  array (
    'guard' => 'web',
    'private_key' => NULL,
    'public_key' => NULL,
    'client_uuids' => false,
    'personal_access_client' => 
    array (
      'id' => NULL,
      'secret' => NULL,
    ),
  ),
  'apple_sign_in' => 
  array (
    'cache' => 
    array (
      'store' => NULL,
      'prefix' => 'apple_public_key_',
      'ttl' => 604800,
    ),
  ),
  'sitemap' => 
  array (
    'guzzle_options' => 
    array (
      'cookies' => true,
      'connect_timeout' => 10,
      'timeout' => 10,
      'allow_redirects' => false,
    ),
    'execute_javascript' => false,
    'chrome_binary_path' => NULL,
    'crawl_profile' => 'Spatie\\Sitemap\\Crawler\\Profile',
  ),
  'datatables' => 
  array (
    'search' => 
    array (
      'smart' => true,
      'multi_term' => true,
      'case_insensitive' => true,
      'use_wildcards' => false,
      'starts_with' => false,
    ),
    'index_column' => 'DT_RowIndex',
    'engines' => 
    array (
      'eloquent' => 'Yajra\\DataTables\\EloquentDataTable',
      'query' => 'Yajra\\DataTables\\QueryDataTable',
      'collection' => 'Yajra\\DataTables\\CollectionDataTable',
      'resource' => 'Yajra\\DataTables\\ApiResourceDataTable',
    ),
    'builders' => 
    array (
    ),
    'nulls_last_sql' => ':column :direction NULLS LAST',
    'error' => NULL,
    'columns' => 
    array (
      'excess' => 
      array (
        0 => 'rn',
        1 => 'row_num',
      ),
      'escape' => '*',
      'raw' => 
      array (
        0 => 'action',
      ),
      'blacklist' => 
      array (
        0 => 'password',
        1 => 'remember_token',
      ),
      'whitelist' => '*',
    ),
    'json' => 
    array (
      'header' => 
      array (
      ),
      'options' => 0,
    ),
    'callback' => 
    array (
      0 => '$',
      1 => '$.',
      2 => 'function',
    ),
  ),
  'lang-manager' => 
  array (
    'connections' => 
    array (
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'magicai-openai',
        'username' => 'root',
        'password' => 'z8dInIh1RNd2i',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
    ),
  ),
  'horizon' => 
  array (
    'silenced' => 
    array (
      0 => 'Spatie\\Health\\Jobs\\HealthQueueJob',
    ),
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
