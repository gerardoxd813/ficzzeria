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