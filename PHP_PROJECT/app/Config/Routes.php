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
$routes->get('/', 'Home::index');
$routes->get('home1', 'Home1::view');

$routes->get('/reservation', 'Reservation::index');  // Displays the reservation form
$routes->post('/reservation/create', 'Reservation::create');  // Handles the form submission



$routes->get('TouristeController', 'TouristeController::index');
$routes->post('TouristeController/store', 'TouristeController::store');

$routes->get('/login', 'TouristeController::index'); // Assuming index is your method to show the login page
$routes->post('/reservation/create', 'Reservation::create');

// // In app/Config/Routes.php
// $routes->post('reservation/submit', 'Reservation::create');



// Route for displaying the login page
// $routes->get('/login', 'TouristeController::index');

// Route for handling login form submission
$routes->post('/login/submit', 'TouristeController::submit');
$routes->post('reservation/submit', 'Reservation::create');

$routes->get('/login', 'Login::index'); // Display login form (GET request)
// $routes->post('/login/submite', 'Login::submite'); // Handle login form submission (POST request)


$routes->get('/reservation', 'Reservation::index');
$routes->post('/reservation/create', 'Reservation::create');

$routes->get('/logout', 'Login::logout'); // Logs the user out

$routes->get('/login', 'Login::index'); // Displays the login form

$routes->get('reservation/create', 'Reservation::create');

$routes->get('auth', 'Auth::index');           // Route to the login form
$routes->post('auth/login', 'Auth::login');    // Route to the login action
$routes->get('/reservation', 'Reservation::index');



$routes->get('signup', 'TouristeController::index'); // Sign-Up form
$routes->post('signup/store', 'TouristeController::store');


// Display login page
$routes->get('/login', 'Login::index');

// Handle login form submission
$routes->post('/login/submite', 'Login::submite');

// Display sign-up page
$routes->get('/signup', 'TouristeController::index');

// Handle sign-up form submission
// // Reservation routes
// $routes->get('/reservation', 'Reservation::index');
// $routes->post('/reservation/create', 'Reservation::create');




//dashboard
$routes->get('dashboard', 'Dashboard::index');
$routes->get('dashboard', 'AnalyticsController::index');
$routes->get('dashboard/reservations', 'Dashboard::reservations');

//login
$routes->get('sign', 'Sign::view_sign');
$routes->post('sign/register', 'Sign::register'); // Traite les données du formulaire
$routes->get('login', 'Login::view_login');
// afficher touriste
$routes->get('/touristes', 'Touriste::index');
$routes->get('/touriste', 'Touriste::index');
$routes->get('/touriste/delete/(:num)', 'Touriste::deleteTouriste/$1');
$routes->get('/edit_touriste/(:num)', 'Edit_controller::edit/$1');
$routes->get('/edit_touriste', 'Edit_controller::index');
// guide
$routes->get('guide', 'Guide::index');
$routes->get('/guide/delete/(:num)', 'Guide::deleteGuide/$1');
// event
$routes->get('event', 'EvenementsController::index');
$routes->get('events', 'EvenementsController::index');
$routes->get('/event/delete/(:num)', 'EvenementsController::deleteEvent/$1');
// reservation
$routes->get('/reservations', 'ReservationsController::index');
$routes->get('/reservation/delete/(:num)', 'ReservationsController::deleteReservation/$1');
$routes->get('message', 'Message::index');

















