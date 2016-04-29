<?php
// Routes

$app->group('/', function () use ($app) {
	
	$app->get("", 		"Module\Controller\HomeController:home");


});


$app->group('/test', function () use ($app) {
	
	$app->get("", 	"Module\Controller\TestController:get");
	$app->post("", 	"Module\Controller\TestController:post");


});