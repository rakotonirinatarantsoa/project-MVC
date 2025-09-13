<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::accueil');
// Chemin vers connexion
$routes->get('/login', 'Home::login');
// Chemin vers inscription
$routes->get('/inscription', 'Home::inscription');
$routes->get('crud', 'Home::crudFanampiny');
$routes->get('evenements', 'Home::eveneme');
$routes->post('crud', 'Home::evenements');

$routes->get('/', 'EvenementController::accueil');
$routes->post('create-evenement', 'EvenementController::createEvenement');
$routes->get('/backoffice', 'EvenementController::afficherListeEvenement');

$routes->get("evenements/modifierEvenement/(:num)", 'EvenementController::modifEv/$1');

$routes->get('modifierEvenement', 'EvenementController::modifEv');

$routes->get('evenements/modifier/(:num)', 'EvenementController::modifier/$1');

$routes->get('evenements/supprimer/(:num)', 'EvenementController::supprimer/$1');

// $routes->post('inscription', 'InscriptionController::FaireInscription');
