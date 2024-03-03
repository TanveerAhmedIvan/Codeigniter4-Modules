<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('dashboard', ['namespace' => 'Modules\Dashboard\Controllers'], function($routes)
{
    $routes->get('/', 'Dashboard::index');
});
// $routes->get('/dashboard', 'Dashboard::index');
// $routes->get('/dashboard', 'Modules\Dashboard\Controllers\Dashboard::index');
// $routes->get('/dashboard', '\Modules\Dashboard\Controllers\Dashboard::index');