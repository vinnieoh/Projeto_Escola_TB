<?php

namespace App\Controllers;

use App\Controllers\Action;
use App\Model\Container;

class AppController extends Action
{

    public function alunoHome()
    {
        $aluno = Container::getModel('AlunoModel');

        $this->validaAutenticacao();

        $aluno->__set('id_Aluno', $_SESSION['id']);
        $aluno->__set('fname', $_SESSION['fnome']);
        $aluno->__set('lname', $_SESSION['lnome']);


       $this->render('alunoHome');

    }

    public function professorHome()
    {
        $professor = Container::getModel('ProfessorModel');

        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
        /*
        $this->validaAutenticacao();

        $professor->__set('id_Professor', $_SESSION['id']);
        $professor->__set('fname', $_SESSION['fnome']);
        $professor->__set('lname', $_SESSION['lnome']);

        $this->render('professorHome');*/

    }

    public function administracaoHome()
    {
        $adm = Container::getModel('AdministracaoModel');

        $this->validaAutenticacao();

        $adm->__set('id_Adm', $_SESSION['id']);
        $adm->__set('fname', $_SESSION['fnome']);
        $adm->__set('lname', $_SESSION['lnome']);

        $this->render('administracaoHome');
    }

    public function validaAutenticacao()
    {

        session_start();

        if(!isset($_SESSION['id']) || $_SESSION['id'] == '' || !isset($_SESSION['fname']) || $_SESSION['fname'] == '' || !isset($_SESSION['fname']) || $_SESSION['fname'] == '') {
            header('Location: /?login=erro');
        }

    }

}