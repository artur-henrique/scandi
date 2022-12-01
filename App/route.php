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

        $this->setRoutes($routes);
    }




}

?>