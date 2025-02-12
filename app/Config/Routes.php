<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'UjiKom::index');
$routes->get('/algoritma', 'UjiKom::Algoritma');
$routes->get('/tambah', 'UjiKom::tambah');
$routes->add('/tambah_pro', 'UjiKom::tambah_pro');
$routes->add('/crud', 'UjiKom::CRUD');
$routes->add('/crud/edit/(:num)', 'UjiKom::edit/$1');
$routes->add('/crud/delete/(:num)', 'UjiKom::delete/$1');
$routes->add('/enkripsi', 'UjiKom::Enkripsi');



