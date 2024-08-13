<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder) {
        $builder->connect('/', ['controller' => 'Users', 'action' => 'login']);
        $builder->connect('/login', ['controller' => 'Home', 'action' => 'login']);
        $builder->connect('/logout', ['controller' => 'Home', 'action' => 'logout']);

        $builder->fallbacks();
    });
};
