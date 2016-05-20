<?php

require_once "vendor/autoload.php";

$swagger = \Swagger\scan(__DIR__."/module");
header('Content-Type: application/json');
echo $swagger;exit;
