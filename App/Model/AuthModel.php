<?php

use App\Model\Model;
use App\Model\Container;

class AuthModel extends Model
{
    private $id;
    private $email;

    public function __get($attribute) {
        return $this->$attribute;
    }

    public function __set($attribute, $valor) {
        $this->$attribute = $valor;
    }


    public function validarCadastro(): bool
    {
        $valid = true;

        if(strlen($this->__get('nome')) < 3) {
            $valid = false;
        }

        if(strlen($this->__get('email')) < 3) {
            $valid = false;
        }

        if(strlen($this->__get('senha')) < 3) {
            $valid = false;
        }

        return $valid;
    }

    public function validarId()
    {
        $query = "SELECT idaluno FROM ALUNO WHERE idaluno = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':idaluno', $this->__get('id'));
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }

    public function validarEmail()
    {
        $query = "SELECT email FROM ALUNO WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }

}