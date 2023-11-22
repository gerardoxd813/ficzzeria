<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->resource('clientes',['controller' => 'ControladorCliente']);
$routes->resource('pizzas',['controller' => 'ControladorPizza']);
$routes->resource('bebidas',['controller' => 'ControladorBebida']);
$routes->resource('extras',['controller' => 'ControladorExtra']);
$routes->resource('detalle_pedido',['controller' => 'ControladorDetallePedido']);
$routes->resource('pedidos',['controller' => 'ControladorPedido']);

//rutas CRUD clientes

$routes->get('clientes','ControladorCliente::indexCRUD'); //obtener los usuarios registrados
$routes->get('clientes/newCRUD','ControladorCliente::newCRUD'); //cargar las vistas para crear un nuevo usuario
$routes->post('clientes','ControladorCliente::createCRUD'); //crea un nuevo usuario
$routes->get('clientes/(:num)','ControladorCliente::showCRUD:/$1'); //mostrar los datos del usuario
$routes->get('clientes/editCRUD/(:num)','ControladorCliente::editCRUD'); //cargar la vista para modificar los datos del usuario
$routes->put('clientes/(:num)','ControladorCliente::updateCRUD/$1'); //modificar los datos del usuario
$routes->delete('clientes/(:num)','ControladorCliente::deleteCRUD/$1'); //eliminar al usuario