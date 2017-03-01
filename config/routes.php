<?php

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {

	Router::prefix('admin', function($routes) {
		$routes->connect('/', ['controller' => 'Users', 'action' => 'index']);
		$routes->fallbacks(DashedRoute::class);
	});

	Router::prefix('profile', function($routes) {
		$routes->fallbacks(DashedRoute::class);
	});	
	
	
    $routes->connect('/', ['controller' => 'dashboard', 'action' => 'index']);
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);
    $routes->fallbacks(DashedRoute::class);
});

Plugin::routes();
