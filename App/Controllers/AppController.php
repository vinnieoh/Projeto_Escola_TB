<?php
/** Responsavel por gerencia as views da pasta app */
namespace App\Controllers;

use App\Controllers\Action;
use App\Model\Container;

class AppController extends Action
{

    public function alunoHome()
    {
        $this->validaAutenticacao();

        $aluno = Container::getModel('AlunoModel');

        $aluno->__set('id_Aluno', $_SESSION['id']);
        $aluno->__set('fname', $_SESSION['fnome']);
        $aluno->__set('lname', $_SESSION['lnome']);

       $this->render('alunoHome');

    }

    public function professorHome()
    {
        $this->validaAutenticacao();

        $professor = Container::getModel('ProfessorModel');

        $professor->__set('id_Professor', $_SESSION['id']);
        $professor->__set('fname', $_SESSION['fnome']);
        $professor->__set('lname', $_SESSION['lnome']);

        $this->render('professorHome');
    }

    public function administracaoHome()
    {
        $this->validaAutenticacao();

        $adm = Container::getModel('AdministracaoModel');

        $adm->__set('id_Adm', $_SESSION['id']);
        $adm->__set('fname', $_SESSION['fnome']);
        $adm->__set('lname', $_SESSION['lnome']);

        $this->render('administracaoHome');
    }

    public function consultaAluno()
    {

    }

    public function consultaProfessor()
    {

    }

    public function consultaAdm()
    {

    }

    public function criarAluno()
    {
        $this->render('criarAluno');

       $user = Container::getModel('AdministrcaoModel');



    }


    public function criarProfessor()
    {


        $this->render('criarProfessor');
    }

    public function criarAdm(){


        $this->render('criarAdm');
    }

    public function updateAluno()
    {

    }

    public function updateProfessor()
    {

    }

    public function updateAdm()
    {

    }

    public function validaAutenticacao()
    {
        session_start();
        /*
        if(!isset($_SESSION['id']) || $_SESSION['id'] == '' || !isset($_SESSION['fname']) || $_SESSION['fname'] == '' || !isset($_SESSION['lname']) || $_SESSION['lname'] == '') {
            header('Location: /?login=error');
        }*/

    }

}