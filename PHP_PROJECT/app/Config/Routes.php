<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Default home route
$routes->get('posts', 'Posts::index'); // New route for Posts controller
$routes->get('home', 'Home::index');
$routes->get('/home1', 'Home1::index');
$routes->get('/kech', 'Kech::index');
$routes->get('/casa', 'casa::index');
$routes->get('/dakhla', 'dakhla::index');
$routes->get('/fez', 'fez::index');
$routes->get('/marzouga', 'marzouga::index');
$routes->get('/chefn', 'chefn::index');
$routes->get('/reservation', 'reservation::index');
$routes->post('reservation/create', 'reservation::create');
$routes->get('home1/kech', 'Kech::index');
$routes->get('home1/chefn', 'chefn::index');
$routes->get('home1/dakhla', 'dakhla::index');
$routes->get('home1/casa', 'casa::index');
$routes->get('home1/marzouga', 'marzouga::index');
$routes->get('home1/fez', 'fez::index');

//home
$routes->get('/home1', 'Home1::view_login');
$routes->get('/home1', 'Home1::view_sing');

$routes->get('/', 'Home::index');
//dashboard
$routes->get('dashboard', 'Dashboard::index');
$routes->get('dashboard', 'AnalyticsController::index');

//login
$routes->get('sign', 'Sign::view_sign');
$routes->post('sign/register', 'Sign::register'); // Traite les données du formulaire
$routes->get('login', 'Login::view_login');
$routes->get('forgot_password', 'Login::view_forgotpwd');


// afficher touriste
$routes->get('/touristes', 'Touriste::index');
$routes->get('/touriste', 'Touriste::index');
$routes->get('/touriste/delete/(:num)', 'Touriste::deleteTouriste/$1');
$routes->get('/edit_touriste', 'Edit_controller::view_touriste');
$routes->post('/update_touriste', 'Edit_controller::update_touriste');



// guide
$routes->get('guide', 'Guide::index');
$routes->get('/guide/delete/(:num)', 'Guide::deleteGuide/$1');
$routes->get('/edit_guide', 'Edit_controller::view_guide');
$routes->post('/update_guide', 'Edit_controller::update_guide');

// event
$routes->get('event', 'EvenementsController::index');
$routes->get('events', 'EvenementsController::index');
$routes->get('/event/delete/(:num)', 'EvenementsController::deleteEvent/$1');
$routes->get('/edit_event', 'Edit_controller::view_event');
$routes->post('/update_event', 'Edit_controller::update_event');

// reservation
$routes->get('/reservations', 'ReservationsController::index');
$routes->get('/reservation/delete/(:num)', 'ReservationsController::deleteReservation/$1');
$routes->get('/edit_reservation', 'Edit_controller::view_reservation');
$routes->post('/update_reservation', 'Edit_controller::update_reservation');

















