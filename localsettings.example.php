<?php
/**
 * This is our localsettings.php file
 * Copy and rename localsettings.example.php to localsettings.php
 */
$settings['debug']          = true;
$settings['base']           = 'http://localhost/examples-api/';

/**
 * System Log settings.
 */
use \Phramework\SystemLog\SystemLog;
$settings['system-log'] = [
  'log' => '\\Phramework\\SystemLog\\Log\\DatabaseLog',
  'matrix' => [
    'Phramework\\Examples\\API\\Controllers\\BookController::GET' => SystemLog::LOG_REQUEST_HEADER_AGENT
      | SystemLog::LOG_REQUEST_PARAMS
      | SystemLog::LOG_RESPONSE_BODY
      | SystemLog::LOG_REQUEST_HEADERS,
    'Phramework\\Examples\\API\\Controllers\\BookController::GETSingle' => SystemLog::LOG_REQUEST_PARAMS
      | SystemLog::LOG_RESPONSE_BODY,
  ],
  'matrix-exception' => [
    'Exception' => SystemLog::LOG_STANDARD,
    'Phramework\\Exceptions\\ServerException' => SystemLog::LOG_REQUEST_HEADER_AGENT |
      SystemLog::LOG_REQUEST_PARAMS |
      SystemLog::LOG_RESPONSE_BODY |
      SystemLog::LOG_REQUEST_HEADERS,
    'Phramework\\Exceptions\\NotFoundException' => SystemLog::LOG_STANDARD |
      SystemLog::LOG_USER_ID,
    ],
  'database-log' => [
    'adapter' => 'postgresql',
    'host' => '127.0.0.1',
    'name' => 'dbname',
    'password' => 'dbpass',
    'username' => 'dbuser',
    'port' => 5432,
  ],
];
