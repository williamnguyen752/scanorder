<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


//$routes->get('/', 'Home::index');

// Landing page and log in, log out
$routes->get('/', 'MenuController::index');
$routes->match(['get', 'post'], '/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

// Admin routes for CRUD
$routes->group('/admin', function($routes) {
    $routes->get('/', 'AdminController::admin');
    $routes->match(['get', 'post'], 'addedit', 'AdminController::addedit');
    $routes->match(['get', 'post'], 'addedit/(:num)', 'AdminController::addedit/$1');
    $routes->get('delete/(:num)', 'AdminController::delete/$1');
});

// user routes
$routes->group('/user', function($routes) {
    $routes->get('kitchenorder', 'StaffController::kitchenorder');
    $routes->get('tableqr', 'StaffController::tableqr');
    $routes->get('/', 'StaffController::user');
    $routes->match(['get', 'post'], 'addedit', 'StaffController::addedit');
});

$routes->get('/order', 'MenuController::order');
$routes->get('/menu', 'MenuController::menu');

