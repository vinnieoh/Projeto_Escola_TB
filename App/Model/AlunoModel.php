<?php
namespace App\Model;

use App\Model\Model;
use App\Model\Container;

class AlunoModel extends Model
{
    private $id_Aluno;
    private $fname;
    private $lname;
    private $email;

    public function __get($attribute) {
        return $this->$attribute;
    }

    public function __set($attribute, $valor) {
        $this->$attribute = $valor;
    }


    public function consultaNota()
    {

    }

    public function tabalho()
    {

    }


}