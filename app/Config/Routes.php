<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('principal', 'Home::index');
// $routes->get('about_view', 'Home::about_view');
// $routes->get('quienes-somos_view', 'Home::quienes_somos');
// $routes->get('login_view', 'Home::login');
// $routes->get('registro_view', 'Home::registro');


// $routes->get('/registro','usuario_controller::create');
// $routes->post('/enviar-form','usuario_controller::formValidation');


// $routes->get('/login','login_controller');
// $routes->post('/enviarlogin','login_controller::auth');
// $routes->get('/panel','panel_controller::index',['filter' => 'auth']);
// $routes->get('/logout','login_controller::logout');


$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('about_view', 'Home::about_view');
$routes->get('quienes-somos_view', 'Home::quienes_somos');
$routes->get('login_view', 'Home::login');
$routes->get('registro_view', 'Home::registro');


$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation');


$routes->get('/login_controller', 'login_controller::index');
$routes->get('/login', 'login_controller::index');
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');
