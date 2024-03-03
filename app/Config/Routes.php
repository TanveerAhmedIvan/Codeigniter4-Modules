<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Modules\Dashboard\Controllers\Home::index');
$routes->group('dashboard', ['namespace' => 'Modules\Dashboard\Controllers'], function($routes)
{
    $routes->get('/', 'Dashboard::index');
});
