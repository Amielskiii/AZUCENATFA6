<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');
$routes->get('/logout', 'Auth::logout');
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/view_records/(:any)', 'Admin::view_records/$1');
$routes->get('/tasks', 'Tasks::index');
$routes->get('/profile', 'Profile::index');
$routes->get('/about', 'About::index');