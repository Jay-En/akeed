<?php

// To help the built-in PHP dev server, check if the request was actually for
// something which should probably be served as a static file
if (PHP_SAPI === 'cli-server' && $_SERVER['SCRIPT_FILENAME'] !== __FILE__) {
    return false;
}

	require_once "vendor/autoload.php";


session_start();

// Instantiate the app
$settings = require __DIR__ . '/config/settings.php';
$app = new \Slim\App($settings);

require __DIR__ . '/config/container.php';
// Set up dependencies
require __DIR__ . '/config/dependencies.php';

// Register middleware
require __DIR__ . '/config/middleware.php';

// Register routes
require __DIR__ . '/config/routes.php';

// Run!
$app->run();
