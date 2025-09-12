<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::accueil');
$routes->get('crud', 'Home::crudFanampiny');
$routes->get('evenements', 'Home::eveneme');
$routes->post('crud', 'Home::evenements');
