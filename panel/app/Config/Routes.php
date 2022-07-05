<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
#Index routes
$routes->get('/', 'Home::index', ['filter' => 'authGuard']);
$routes->get('/index', 'Home::dashboard', ['filter' => 'authGuard']);
#Signup & signin routes
$routes->get('signin', 'Home::index');
$routes->get('signin/(:any)', 'Signin::login'); //login method route
$routes->get('signup', 'Signup::index');
$routes->post('signup/(:any)', 'Signup::register');
$routes->get('/logout', 'Signin::logout');
#Profile routes
$routes->get('/profile', 'Profile::index',['filter' => 'authGuard']);
$routes->get('/password-reset', 'Signin::updatepassword',['filter' => 'authGuard']);
$routes->post('signin/(:any)', 'Signin::changepassword',['filter' => 'authGuard']); //password reset route
#News routes
$routes->get('/news-update', 'News::display',['filter' => 'authGuard']);
$routes->match(['get', 'post'], 'news/create', 'News::create',['filter' => 'authGuard']);
$routes->get('news/(:segment)', 'News::view/$1', ['filter' => 'authGuard']);
$routes->get('edit-view/(:num)', 'News::singleNews/$1',['filter' => 'authGuard']);
$routes->post('update', 'News::update',['filter' => 'authGuard']);
$routes->get('news/delete/(:num)', 'News::delete/$1',['filter' => 'authGuard']);
#Ranking routes
$routes->get('/ladder_rank', 'Urank::display',['filter' => 'authGuard']);
$routes->get('/clan_rank', 'Crank::display',['filter' => 'authGuard']);

/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
