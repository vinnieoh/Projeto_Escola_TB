<?php
/**
* Essa classe serve para para conectar o user e se e adm, aulo ou professor
*/
namespace App\Controllers;

use App\Controllers\Action;
use APP\Model\Container;

class AuthController extends Action
{

    public function authenticate()
    {
        $user = Container::getModel('User');

        $user->__set('email', $_POST['email']);
        $user->__set('password', $_POST['password']);

        $user->authenticate();

        if ($user->__get('id') != '' && $user->__get('name')){
            session_start();
            $_SESSION['id'] = $user->__get('id');
            $_SESSION['name'] = $user->__get('name');

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