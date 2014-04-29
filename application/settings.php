<?php
$bucket = str_replace(['dev~','s~'],'',$_SERVER['APPLICATION_ID']);
return [
    'apiHost' => 'localhost:33877',
    'title' => 'PHPSP + GDG :: ToDo',
    'templates' => __DIR__ . '/resources/templates',
    'datastore' => "gs://{$bucket}.appspot.com/"
];