<?php
namespace App\Model;

use App\Model\Model;
use App\Model\Container;
use App\Model\user;

class AdministracaoModel extends Model
{
    private $id_Adm;
    private $fname;
    private $lname;
    private $email;

    public function __get($attribute) {
        return $this->$attribute;
    }

    public function __set($attribute, $valor) {
        $this->$attribute = $valor;
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

    }

    public function criarProfessor()
    {

    }

    public function criarAdm(){

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

}