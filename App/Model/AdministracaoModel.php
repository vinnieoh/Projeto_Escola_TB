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

    private $fnameUser;
    private $lnameUser;
    private $emailUser;
    private $senhaUser;
    private $cpf;
    private $sexo;
    private $data;
    private $ddd;
    private $numero;
    private $tipo;
    private $endereco;
    private $bairro;
    private $cidade;
    private $estado;

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