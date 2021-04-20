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

        $routes['professor'] = array(
            'route' => '/professor',
            'controller' => 'indexController',
            'action' => 'indexProfessor'
        );

        $routes['administracao'] = array(
            'route' => '/administracao',
            'controller' => 'indexController',
            'action' => 'indexAdministracao'
        );


        $routes['authenticate'] = array(
            'route' => '/authenticate',
            'controller' => 'AuthController',
            'action' => 'authenticate'
        );

        $routes['alunoHome'] = array(
            'route' => '/alunoHome',
            'controller' => 'AppController',
            'action' => 'homeAluno'
        );

        $routes['professorHome'] = array(
            'route' => '/professor',
            'controller' => 'AppController',
            'action' => 'professorHome'
        );

        $routes['administracaoHome'] = array(
            'route' => '/administracaoHome',
            'controller' => 'AppController',
            'action' => 'administracaoHome'
        );

        $routes['sair'] = array(
            'route' => '/sair',
            'controller' => 'AuthController',
            'action' => 'sair'
        );


        $this->setRoutes($routes);
    }

}