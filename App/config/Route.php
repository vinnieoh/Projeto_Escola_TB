<?php
namespace App\config;

use App\config\Bootstrap;

class Route extends Bootstrap
{
    
    protected function initRoutes()
    {

        $routes['home'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );

        $routes['authenticate'] = array(
            'route' => '/authenticate',
            'controller' => 'AuthController',
            'action' => 'authenticate'
        );

        $routes['indexAluno'] = array(
            'route' => '/indexAluno',
            'controller' => 'AppController',
            'action' => 'indexAluno'
        );


        $this->setRoutes($routes);
    }

}