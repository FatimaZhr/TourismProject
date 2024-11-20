<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Default home route
$routes->get('posts', 'Posts::index'); // New route for Posts controller
$routes->get('home', 'Home::index');
