<?php
/**
* Essa classe serve para para conectar o user e se e adm, aulo ou professor
*/

namespace App\Controllers;

use App\Controllers\Action;
use App\Model\Container;

class AuthController extends Action
{

    //authenticate -> Aluno
    public function authenticate()
    {

        $user = Container::getModel('User');

        $user->__set('email', $_POST['email']);
        $user->__set('senha', $_POST['senha']);

        echo '<pre>';
        print_r($user);
        echo '</pre>';


        $user->authenticate();

        echo '<pre>';
        print_r($user);
        echo '</pre>';


        if ($user->__get('id') != '' && $user->__get('fname') && $user->__get('lnome')){
            session_start();
            $_SESSION['id'] = $user->__get('id');
            $_SESSION['fname'] = $user->__get('fname');
            $_SESSION['lnome'] = $user->__get('lnome');

            header('location: /alunoHome');

        }else{
            header('location: /?login=error');
        }

    }

    public function authenticateProfessor()
    {

        $user = Container::getModel('User');

        $user->__set('email', $_POST['email']);
        $user->__set('senha', $_POST['senha']);

        $user->authenticateProfessor();

        if ($user->__get('id') != '' && $user->__get('fnome') && $user->__get('lnome')){
            session_start();
            $_SESSION['id'] = $user->__get('id');
            $_SESSION['fnome'] = $user->__get('fnome');
            $_SESSION['lnome'] = $user->__get('lnome');

            header('location: /professorHome');

        }else{
            header('location: /?login=error');
        }

    }

    public function authenticateAdministracao()
    {

        $user = Container::getModel('User');

        $user->__set('email', $_POST['email']);
        $user->__set('senha', $_POST['senha']);

        $user->authenticateAdministracao();

        if ($user->__get('id') != '' && $user->__get('fnome') && $user->__get('lnome')){
            session_start();
            $_SESSION['id'] = $user->__get('id');
            $_SESSION['fnome'] = $user->__get('fnome');
            $_SESSION['lnome'] = $user->__get('lnome');

            header('location: /administracaoHome');

        }else{
            header('location: /?login=error');
        }

    }

    public function sair()
    {
        session_start();
        session_destroy();
        header('location: /');
    }
}