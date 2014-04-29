<?php
namespace PHPSP\ToDo\Controller;

use PHPSP\ToDo\Service\Render;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class Index
{
    public function start(Request $request, Application $application)
    {
        $page = $application['settings']['page'];
        $content = new Render('index');
        $mapper = $application['mapper']['task'];
        $tasks = $mapper->findAll();
        $content['tasks'] = $tasks;
        $page['content'] = $content;
        return $page();
    }

    public function newTask(Request $request, Application $application)
    {
        $page = $application['settings']['page'];
        $content = new Render('new-task');
        $page['content'] = $content;
        return $page();
    }
}