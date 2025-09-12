<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::accueil');
// Chemin vers connexion
$routes->get('/login', 'Home::login');
// Chemin vers inscription
$routes->get('/inscription', 'Home::inscription');
$routes->get('crud', 'Home::crudFanampiny');
$routes->get('evenements', 'Home::eveneme');
$routes->post('crud', 'Home::evenements');
