<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/*$routes->get('/', 'Home::index');
$routes->setAutoRoute(true);
$routes->get('products', 'ProductController::read');
$routes->post('products/create', 'ProductController::create');
$routes->post('products/update', 'ProductController::update');
$routes->get('products/delete/(:segment)', 'ProductController::delete/$1');
$routes->post('register', 'UserController::register');
$routes->add('login', 'UserController::login');
$routes->add('logout', 'UserController::logout');
$routes->add('home/home', 'Home::home');
$routes->add('test-session', 'UserController::testSession');*/

$routes->get('/', 'Home::index');
$routes->setAutoRoute(true);
$routes->get('products', 'ProductController::read');
$routes->post('products/create', 'ProductController::create');
$routes->post('products/update', 'ProductController::update');
$routes->get('products/delete/(:segment)', 'ProductController::delete/$1');
$routes->post('register', 'UserController::register');
$routes->get('login', 'UserController::displayLoginForm'); // Display login form
$routes->post('login', 'UserController::login'); // Handle login form submission
$routes->get('logout', 'UserController::logout');
$routes->get('home/home', 'Home::home');
$routes->get('test-session', 'UserController::testSession');
$routes->post('customization/process', 'CustomizationController::process');
$routes->get('customization/table', 'CustomizationController::read');
$routes->post('/customization/update', 'CustomizationController::update');
$routes->get('/customization/edit/(:num)', 'CustomizationController::edit/$1');
$routes->get('/customization/delete/(:num)', 'CustomizationController::delete/$1');
