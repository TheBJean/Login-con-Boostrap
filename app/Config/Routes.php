<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/formulario', 'CFormulario::formulario');
$routes->get('/formulario2', 'CFormulario::formulario2');