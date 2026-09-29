<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

// When Apache rewrites /sunfitgc/* to /sunfitgc/public/*, keep links on /sunfitgc.
$scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
if (str_ends_with($scriptName, '/public/index.php')) {
    $base = substr($scriptName, 0, -strlen('/public/index.php'));
    $_SERVER['SCRIPT_NAME'] = $base.'/index.php';
    $_SERVER['PHP_SELF'] = $base.'/index.php';
}

$app->handleRequest(Request::capture());
