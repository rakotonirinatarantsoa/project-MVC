<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'EvenementController::accueil');
$routes->get('/accueil', 'EvenementController::accueil');
$routes->get('accueilConnecte', 'Home::accueilConnected');
$routes->get('/login', 'Home::login');
$routes->get('/inscription', 'Home::inscription');
$routes->get('bienvenue', 'Home::bienvenue'); 
$routes->get('crud', 'Home::crudFanampiny');
$routes->get('evenements', 'Home::eveneme');
$routes->get('reservation', 'Home::reservation');
$routes->get('/', 'EvenementController::accueil');
$routes->post('create-evenement', 'EvenementController::createEvenement');
$routes->post('create-reservation', 'ReservationController::createReservation');
$routes->get('/backoffice', 'EvenementController::afficherListeEvenement');
$routes->get("evenements/modifierEvenement/(:num)", 'EvenementController::modifierEvenement/$1');

$routes->post('/edit-evenement/(:num)', 'EvenementController::modifier/$1');
$routes->get('delete-evenement/(:num)', 'EvenementController::supprimer/$1');
$routes->get('/reserver/(:num)', 'ReservationController::afficherFormulaireReservationEvenement/$1');
$routes->post('inscription', 'InscriptionController::inscription');
$routes->post('/connexion', 'ConnexionController::connexion');
$routes->get('/succesReservation/(:num)/(:num)/(:any)', 'ReservationController::succesReservation/$1/$2/$3');
$routes->get('evenement', 'User::barreRechercher/$1');

$routes->get('statistique', 'StatsController::index');
$routes->get('echecReservation', 'ReservationController::echecReservation');