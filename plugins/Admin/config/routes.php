<?php
// use Cake\Routing\RouteBuilder;
// use Cake\Routing\Router;
// use Cake\Routing\Route\DashedRoute;

// Router::plugin(
//     'Admin',
//     ['path' => '/admin'],
//     function (RouteBuilder $routes) {
//         $routes->fallbacks(DashedRoute::class);
//     }
// );

use Cake\Routing\Router;

Router::plugin('Admin', function ($routes) {

   $routes->connect('/', ['controller' => 'AdminMangas', 'action' => 'index']);
  $routes->fallbacks('InflectedRoute');
});
