<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->setDefaultController('Users');
$routes->get('register', 'Users::register');
$routes->post('register', 'Users::register');
$routes->get('login', 'Users::index');

