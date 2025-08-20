<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultController('Users');
$routes->setDefaultMethod('index');
$routes->get('/', 'Users::index');
$routes->get('register', 'Users::register');
$routes->post('register', 'Users::register');
$routes->get('login', 'Users::index');

