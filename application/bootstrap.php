<?php
require __DIR__ . '/../vendor/autoload.php';

$container = new Pimple(require 'settings.php');
$app = new Silex\Application;
$app['debug'] = true;

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello ' . $app->escape($name);
});


$app->run();