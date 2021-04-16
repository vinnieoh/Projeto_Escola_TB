<?php
namespace App\Model;

use App\Model\Model;
use App\Model\Container;

class User extends Model
{
    private $id;
    private $nome;
    private $email;
    private $senha;

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

    //Sera usado na  classe authcontroller
    public  function authenticate(): User
    {
        $query = "SELECT id, nome, email FROM aluno where email = :email and senha = :senha";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->execute();

        $user = $stmt->fetch(\PDO::FETCH_ASSOC);

        if($user['id'] != '' && $user['nome'] != '') {
            $this->__set('id', $user['id']);
            $this->__set('nome', $user['nome']);
        }

        return $this;
    }

}