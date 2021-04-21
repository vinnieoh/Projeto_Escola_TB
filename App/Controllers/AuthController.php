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

        /* Teste
        echo '<pre>';
        print_r($user);
        echo '</pre>';*/

        $user->authenticate();

        $this->validaAuthnticate($user);

        $_SESSION['id'] = $user->__get('id');
        $_SESSION['fname'] = $user->__get('fname');
        $_SESSION['lnome'] = $user->__get('lnome');

        header('location: /alunoHome');

    }


    public function authenticateProfessor()
    {

        $user = Container::getModel('User');

        $user->__set('email', $_POST['email']);
        $user->__set('senha', $_POST['senha']);


        $user->authenticateProfessor();

        $this->validaAuthnticate($user);

        $_SESSION['id'] = $user->__get('id');
        $_SESSION['fnome'] = $user->__get('fnome');
        $_SESSION['lnome'] = $user->__get('lnome');

        header('location: /professorHome');

    }

    public function authenticateAdministracao()
    {

        $user = Container::getModel('User');

        $user->__set('email', $_POST['email']);
        $user->__set('senha', $_POST['senha']);


        $user->authenticateAdministracao();

        $this->validaAuthnticate($user);

        $_SESSION['id'] = $user->__get('id');
        $_SESSION['fnome'] = $user->__get('fnome');
        $_SESSION['lnome'] = $user->__get('lnome');

        header('location: /administracaoHome');


    }

    public function validaAuthnticate($model)
    {
        session_start();
        if ($model->__get('id') == '' || $model->__get('fname') == '' || $model->__get('lnome') == ''){
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