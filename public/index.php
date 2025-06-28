<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Maintenance mode handler
if (file_exists($maintenance = __DIR__.'/../system_manajemen_school/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader
require __DIR__.'/vendor/autoload.php';

// Bootstrap Laravel and handle the request
/** @var Application $app */
$app = require_once __DIR__.'/bootstrap/app.php';

$app->handleRequest(
    Request::capture()
);


