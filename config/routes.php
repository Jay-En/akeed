<?php
// Routes

$app->group('/', function () use ($app) {
	
	$app->get("", 		"Module\Controllers\HomeController:home");


});


$app->group('/test', function () use ($app) {
	
	$app->get("", 	"Module\Controllers\TestController:get");
	$app->post("", 	"Module\Controllers\TestController:post");


});