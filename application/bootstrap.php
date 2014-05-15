<?php
require __DIR__ . '/../vendor/autoload.php';

use Drakojn\Io\Mapper\Map;
use PHPSP\ToDo\Service\Render;

$application = new Silex\Application;
$application['settings'] = new Pimple(require 'settings.php');
session_start();
session_regenerate_id();
$application['settings']['page'] = function () use ($application) {
    Render::setBasePath($application['settings']['templates']);
    $page = new Render('defaults/html');
    $page['head'] = new Render('defaults/head');
    $page['body'] = new Render('defaults/body');
    $page['body']['header'] = new Render('defaults/body/header');
    $page['body']['footer'] = new Render('defaults/body/footer');
    $page['title'] = $application['settings']['title'];
    return $page;
};

$application['driver'] = function () use ($application) {
    return new Drakojn\Io\Driver\GCS($application['settings']['datastore']);
};

$application['mapper'] = new Pimple;

$application['mapper']['task'] = function ($container) use ($application) {
    $map = new Map(
        'PHPSP\\ToDo\\Entity\\Task',
        'task',
        'id',
        [
            'id' => 'id',
            'title' => 'title',
            'description' => 'description',
            'done' => 'done'
        ]
    );
    return new Drakojn\Io\Mapper($application['driver'], $map);
};

$application['debug'] = true;

$application->get('/', 'PHPSP\\ToDo\\Controller\\Index::start');
$application->get('/new', 'PHPSP\\ToDo\\Controller\\Index::newTask');
$application->post('/task','PHPSP\\ToDo\\Controller\\Task::add');
$application->post('/task/done','PHPSP\\ToDo\\Controller\\Task::done');
$application->post('/task/undone','PHPSP\\ToDo\\Controller\\Task::undone');

$application->run();