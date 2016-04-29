<?php

// To help the built-in PHP dev server, check if the request was actually for
// something which should probably be served as a static file
if (PHP_SAPI === 'cli-server' && $_SERVER['SCRIPT_FILENAME'] !== __FILE__) {
    return false;
}

	require_once "vendor/autoload.php";


session_start();

// Instantiate the app
$settings = require __DIR__ . '/Config/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/Config/dependencies.php';

// Register middleware
require __DIR__ . '/Config/middleware.php';

// Register routes
require __DIR__ . '/Config/routes.php';

// Run!
$app->run();
