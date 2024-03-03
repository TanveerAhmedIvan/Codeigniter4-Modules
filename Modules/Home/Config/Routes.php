<?php

$routes->group('Home', ['namespace' => 'Modules\Home\Controllers'], function($routes)
{
    $routes->get('/', 'Home::index');
});