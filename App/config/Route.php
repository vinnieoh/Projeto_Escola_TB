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

        $routes['authenticateProfessor'] = array(
            'route' => '/authenticateProfessor',
            'controller' => 'AuthController',
            'action' => 'authenticateProfessor'
        );

        $routes['authenticateAdministracao'] = array(
            'route' => '/authenticateAdministracao',
            'controller' => 'AuthController',
            'action' => 'authenticateAdministracao'
        );

        $routes['alunoHome'] = array(
            'route' => '/alunoHome',
            'controller' => 'AppController',
            'action' => 'alunohome'
        );

        $routes['professorHome'] = array(
            'route' => '/professorHome',
            'controller' => 'AppController',
            'action' => 'professorHome'
        );

        $routes['administracaoHome'] = array(
            'route' => '/administracaoHome',
            'controller' => 'AppController',
            'action' => 'administracaoHome'
        );

        $routes['consultaAluno'] = array(
            'route' => '/consultaAluno',
            'controller' => 'AppController',
            'action' => 'consultaAluno'
        );

        $routes['consultaProfessor'] = array(
            'route' => '/consultaProfessor',
            'controller' => 'AppController',
            'action' => 'consultaProfessor'
        );

        $routes['consultaAdm'] = array(
            'route' => '/consultaAdm',
            'controller' => 'AppController',
            'action' => 'consultaAdm'
        );

        $routes['criarAluno'] = array(
            'route' => '/criarAluno',
            'controller' => 'AppController',
            'action' => 'criarAluno'
        );

        $routes['criarProfessor'] = array(
            'route' => '/criarProfessor',
            'controller' => 'AppController',
            'action' => 'criarProfessor'
        );

        $routes['criarAdm'] = array(
            'route' => '/criarAdm',
            'controller' => 'AppController',
            'action' => 'criarAdm'
        );

        $routes['updateAluno'] = array(
            'route' => '/updateAluno',
            'controller' => 'AppController',
            'action' => 'updateAluno'
        );

        $routes['updateProfessor'] = array(
            'route' => '/updateProfessor',
            'controller' => 'AppController',
            'action' => 'updateProfessor'
        );

        $routes['updateAdm'] = array(
            'route' => '/updateAdm',
            'controller' => 'AppController',
            'action' => 'updateAdm'
        );

        $routes['sair'] = array(
            'route' => '/sair',
            'controller' => 'AuthController',
            'action' => 'sair'
        );

        $this->setRoutes($routes);
    }

}