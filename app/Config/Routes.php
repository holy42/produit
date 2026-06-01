<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/api/produits', 'Api\ProduitController::index');
$routes->post('/api/produits', 'Api\ProduitController::create');
$routes->get('/api/produits/(:num)', 'Api\ProduitController::show/$1');
$routes->put('/api/produits/(:num)', 'Api\ProduitController::update/$1');
$routes->delete('/api/produits/(:num)', 'Api\ProduitController::delete/$1');