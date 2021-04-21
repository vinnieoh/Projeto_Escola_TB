<?php
namespace App\Model;

use App\Model\Model;
use App\Model\Container;

class ProfessorModel extends Model
{
    private $id_Professor;
    private $fname;
    private $lname;
    private $email;

    public function __get($attribute) {
        return $this->$attribute;
    }

    public function __set($attribute, $valor) {
        $this->$attribute = $valor;
    }

}