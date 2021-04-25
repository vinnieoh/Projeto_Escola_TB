<?php
namespace App\Model;

use App\Model\Model;
use App\Model\Container;

class User extends Model
{
    private $id;
    private $lname;
    private $fname;
    private $email;
    private $senha;

    public function __get($attribute) {
        return $this->$attribute;
    }

    public function __set($attribute, $valor) {
        $this->$attribute = $valor;
    }


    //Sera usado na  classe authcontroller -> Aluno
    public  function authenticate(): User
    {
        $query = "SELECT idaluno, fname, lname, email FROM aluno WHERE email =:email AND senha =:senha";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->execute();

        $user = $stmt->fetch(\PDO::FETCH_ASSOC);

        if($user['idaluno'] != '' && $user['fname'] != '' && $user['lname'] != '') {
            $this->__set('id', $user['idaluno']);
            $this->__set('fname', $user['fname']);
            $this->__set('lname', $user['lname']);
        }

        return $this;
    }


    public  function authenticateAdministracao(): User
    {
        $query = "SELECT idadmin, fname, lname, email FROM administracao WHERE email =:email AND senha =:senha";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->execute();

        $user = $stmt->fetch(\PDO::FETCH_ASSOC);

        if($user['idadmin'] != '' && $user['fname'] != '' && $user['lname'] != '') {
            $this->__set('id', $user['idadmin']);
            $this->__set('fname', $user['fname']);
            $this->__set('lname', $user['lname']);
        }

        return $this;
    }

    public  function authenticateProfessor(): User
    {
        $query = "SELECT idprofessor, fname, lname, email FROM professor WHERE email =:email AND senha =:senha";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->execute();

        $user = $stmt->fetch(\PDO::FETCH_ASSOC);


        if($user['idprofessor'] != '' && $user['fname'] != '' && $user['lname'] != '') {
            $this->__set('id', $user['idprofessor']);
            $this->__set('fname', $user['fname']);
            $this->__set('lname', $user['lname']);
        }

        return $this;
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

    public function salvarUsuario()
    {



    }


}