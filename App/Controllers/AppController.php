<?php

namespace App\Controllers;

use App\Controllers\Action;
use App\Model\Container;


class AppController extends Action
{

    public function alunoHome()
    {
        session_start();

        if ($_SESSION['id'] != '' && $_SESSION['lname'] != '' && $_SESSION['fname']){

            $this->render('alunoHome');

        }else{
            header('location: /?login=error');
        }

    }

    public function professorHome()
    {
        session_start();
        if ($_SESSION['id'] != '' && $_SESSION['lname'] != '' && $_SESSION['fname']){

            $this->render('professorHome');

        }else{
            header('location: /?login=error');
        }
    }

    public function administracaoHome()
    {
        session_start();
        if ($_SESSION['id'] != '' && $_SESSION['lname'] != '' && $_SESSION['fname'] != ''){

            $this->render('administracaoHome');

        }else{
            header('location: /?login=error');
        }
    }

}