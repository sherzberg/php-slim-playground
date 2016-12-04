<?php

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());

    $handler = new Monolog\Handler\ErrorLogHandler();
    $handler->setFormatter(new Monolog\Formatter\LogstashFormatter('slim'));

    $logger->pushHandler($handler);
    return $logger;
};
