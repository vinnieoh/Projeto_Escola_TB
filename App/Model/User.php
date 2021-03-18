<?php
namespace App\Model;

use App\Model\Model;
use App\Model\Container;

class User extends Model
{
    private $id;
    private $name;
    private $email;
    private $password;


    public function validarCadastro(): bool
    {
        $valid = true;

        if(strlen($this->__get('name')) < 3) {
            $valid = false;
        }

        if(strlen($this->__get('email')) < 3) {
            $valid = false;
        }

        if(strlen($this->__get('password')) < 3) {
            $valid = false;
        }

        return $valid;
    }

    //Sera usado na  classe authcontroller
    public function authenticate(): User
    {
        //ADD uma query para verifica ser o usuario existe
        $query = "";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':password', $this->__get('password'));
        $stmt->execute();

        $user = $stmt->fetch(\PDO::FETCH_ASSOC);

        if($user['id'] != '' && $user['nome'] != '') {
            $this->__set('id', $user['id']);
            $this->__set('nome', $user['nome']);
        }

        return $this;

    }



}