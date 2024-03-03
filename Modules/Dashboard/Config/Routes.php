<?php

$routes->group('dashboard', ['namespace' => 'Modules\Dashboard\Controllers'], function($routes)
{
    $routes->get('/', 'Dashboard::index');
});