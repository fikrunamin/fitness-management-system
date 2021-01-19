<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->group('workouts', ['filter' => 'auth'], function ($routes) {
	$routes->get('', 'Workout::index');
	$routes->match(['post', 'get'], 'search', 'Workout::search');
	$routes->match(['post', 'get'], 'add', 'Workout::add');
	$routes->match(['post', 'get'], 'edit/(:segment)', 'Workout::edit/$1');
	$routes->match(['post'], 'delete_workout', 'Workout::delete_workout');
	$routes->get('(:segment)', 'Workout::index/$1');
	$routes->get('(:segment)/start', 'Workout::start/$1');
	$routes->get('(:segment)/finish', 'Workout::finish/$1');
});


$routes->group('healthy-foods', ['filter' => 'auth'], function ($routes) {
	$routes->get('', 'HealthyFood::index');
	$routes->match(['post', 'get'], 'add', 'HealthyFood::add');
	$routes->get('(:segment)', 'HealthyFood::detail/$1');
	$routes->match(['post', 'get'], 'edit/(:segment)', 'HealthyFood::edit/$1');
	$routes->match(['post'], 'delete_food', 'HealthyFood::delete_food');
	$routes->get('(:segment)', 'Workout::index/$1');
	$routes->get('(:segment)', 'HealthyFood::detail/$1');
	$routes->get('(:segment)/finish', 'Workout::finish/$1');
});

$routes->group('auth', ['filter' => 'guest'], function ($routes) {
	$routes->match(['get', 'post'], 'register', 'Auth::register', ['as' => 'register']);
	$routes->match(['get', 'post'], 'login', 'Auth::login', ['as' => 'login']);
	$routes->match(['get', 'post'], 'guest', 'Auth::guest', ['as' => 'guest']);
});

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
