<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {


    protected function initRoutes() {

        $routes['show'] = array(
            'route' => '/produto',
            'controller' => 'IndexController',
            'method' => 'get'
        );

        $routes['register'] = array(
            'route' => '/produto',
            'controller' => 'IndexController',
            'method' => 'post'
        );

        $routes['delete'] = array(
            'route' => '/produto',
            'controller' => 'IndexController',
            'method' => 'delete'
        );

        $this->setRoutes($routes);
    }




}

?>