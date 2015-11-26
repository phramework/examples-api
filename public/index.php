<?php
/**
 * Copyright 2015 Spafaridis Xenofon
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

//Show all errors
error_reporting(E_ALL);
ini_set('display_errors', '1');

//This autoload path is for loading current version of phramework
require __DIR__ . '/../vendor/autoload.php';

//define controller namespace, as shortcut
define('NS', '\\Phramework\\Examples\\API\\Controllers\\');

use \Phramework\Phramework;

/**
 * @package examples/post
 * Define APP as function
 */
$APP = function () {

    //Include settings
    $settings = include __DIR__ . '/../settings.php';

    $URIStrategy = new \Phramework\URIStrategy\URITemplate([
        ['book/', NS . 'BookController', 'GET', Phramework::METHOD_GET],
        ['book/{id}', NS . 'BookController', 'GETSingle', Phramework::METHOD_GET],
        ['book/', NS . 'BookController', 'POST', Phramework::METHOD_POST]
    ]);

    //Initialize API
    $phramework = new Phramework($settings, $URIStrategy);

    unset($settings);

    Phramework::setViewer(
        \Phramework\Viewers\JSON::class
    );

    //Execute API
    $phramework->invoke();
};

/**
 * Execute APP
 */
$APP();
