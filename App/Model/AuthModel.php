<?php
/** Essa classe verifica se pode fazer uma criacao de um usuario*/

use App\Model\Model;
use App\Model\Container;

class AuthModel extends Model
{
    private $id;
    private $email;
    private $senhar;
    private $tabela;

    public function __get($attribute) {
        return $this->$attribute;
    }

    public function __set($attribute, $valor) {
        $this->$attribute = $valor;
    }

    public function validarCadastro(): bool
    {
        $valid = true;

        if(strlen($this->__get('fname')) < 3) {
            $valid = false;
        }
        if(strlen($this->__get('lname')) < 3) {
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

    public function validarId($id, $tabela)
    {
        $query = "SELECT $id FROM $tabela WHERE $id = :$id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':idaluno', $this->__get('id'));
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }

    public function validarEmail($email, $tabela)
    {
        $query = "SELECT $email FROM $tabela WHERE $email = :$email";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }

}