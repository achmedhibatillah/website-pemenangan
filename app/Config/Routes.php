<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Profil
$routes->get('/zidane', 'Profil::zidane');
$routes->get('/rere', 'Profil::rere');

// Gagasan
$routes->get('/filosofi', 'Other::akasamimpi');

// Gagasan
$routes->get('/visi-misi', 'Gagasan::visi_misi');
$routes->get('/program-kerja', 'Gagasan::program_kerja');
$routes->get('/organigram', 'Gagasan::organigram');
$routes->get('/nilai', 'Gagasan::nilai');

// Aspirasi
$routes->get('/aspirasi', 'Aspirasi::index');
$routes->post('/submit-aspirasi', 'Aspirasi::kirim');

// Other
$routes->get('/music', 'Other::index');

