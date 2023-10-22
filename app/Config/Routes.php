<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('todo', 'Todos::index');
$routes->get('todo/detail/(:num)', 'Todos::view/$1');