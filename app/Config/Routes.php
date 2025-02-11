<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Admin::index');
$routes->add('/upload', 'Admin::upload');

// $routes->get('/input', 'Siswa::index');
$routes->get('/load-csv', 'input::loadCSV');

// $routes->get('siswa', 'Siswa::index');
// $routes->post('siswa/upload', 'Siswa::upload');
$routes->get('/siswa', 'Siswa::index');
$routes->get('/siswa/form', 'Siswa::form');
$routes->post('/siswa/upload', 'Siswa::upload');