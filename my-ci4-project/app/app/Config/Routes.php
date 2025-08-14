<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->setDefaultController('Users');
$routes->match(['get', 'post'],'register', 'Users::index');

