<?php

$settings = [
    'debug' => true,
    'api_base' => 'http://localhost:8000/'
];

if (file_exists(__DIR__ .'/localsettings.php')) {
    include __DIR__ . '/localsettings.php';
}
return $settings;
