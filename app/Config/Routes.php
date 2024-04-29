<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->setAutoRoute(true);
$routes->get('products', 'ProductController::read');
$routes->post('products/create', 'ProductController::create');
$routes->post('products/update', 'ProductController::update');
$routes->get('products/delete/(:segment)', 'ProductController::delete/$1');

?>