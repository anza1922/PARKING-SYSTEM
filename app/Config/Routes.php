<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/reservasi', 'Home::reservasi');
$routes->get('/kendaraan-masuk', 'Home::kendaraanMasuk');
$routes->get('/keluar', 'Home::keluar');
$routes->get('/riwayat', 'Home::riwayat');
$routes->get('/pengaturan', 'Home::pengaturan');
$routes->get('/login', 'Home::login');
