<?php
// DIC configuration

$container = $app->getContainer();

// -----------------------------------------------------------------------------
// Service providers
// -----------------------------------------------------------------------------

// Twig
$container['view'] = function ($c) {
    $settings = $c->get('settings');
    $view = new \Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);

    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));
    $view->addExtension(new Twig_Extension_Debug());

    return $view;
};

// Flash messages
$container['flash'] = function ($c) {
    return new \Slim\Flash\Messages;
};

// -----------------------------------------------------------------------------
// Service factories
// -----------------------------------------------------------------------------

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings');
    $logger = new \Monolog\Logger($settings['logger']['name']);
    $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
    $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['logger']['path'], \Monolog\Logger::DEBUG));
    return $logger;
};

// -----------------------------------------------------------------------------
// Library
// -----------------------------------------------------------------------------
$container['curl'] = function ($c) {
    return new \Curl\Curl();
};


// -----------------------------------------------------------------------------
// Database Setting
// -----------------------------------------------------------------------------
$container['database'] = function ($c) {
    $settings = $c->get('settings');
    return new forrest($settings['database']);
};

$settings = $container->get('settings');
assent::init($settings['coder']['path'], $supported_languages = ['EN', 'AR'], $startcode = 1000, 'EN');


//remove if not needed
$template['Company']['Name'] = "Company Name";
$template['Result'] = [];

assent::setResultTemplate($template, "Result");

Container::set($container);

