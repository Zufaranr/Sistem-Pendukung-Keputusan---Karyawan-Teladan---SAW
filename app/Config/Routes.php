<?php

use App\Controllers\Dashboard;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
// $routes->get('/', 'Dashboard::index');
// $routes->get('controller/method/(:any)', 'Controller::method/$1');
$routes->resource('Dashboard');