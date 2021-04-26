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

    private $idAluno;
    private $fnameAluno;
    private $lnameAluno;
    private $emailAluno;
    private $senhaAluno;
    private $cpf;
    private $sexo;
    private $dataAluno;
    private $idTelefoneAluno;
    private $ddAluno;
    private $numeroAluno;
    private $tipoAluno;
    private $idEnderecoAluno;
    private $ruaAluno;
    private $bairroAluno;
    private $cidadeAluno;
    private $estadoAluno;

    private $idProfessor;
    private $fnameProfessor;
    private $lnameProfessor;
    private $formacaoProfessor;
    private $emailProfessor;
    private $senhaProfessor;
    private $idTelefoneProfessor;
    private $ddProfessor;
    private $numeroProfessor;
    private $tipoProfessor;

    private $idAdm;
    private $fnameAdm;
    private $lnameAdm;
    private $emailAdm;
    private $senhaAdm;
    private $nivelAdm;


    public function __get($attribute) {
        return $this->$attribute;
    }

    public function __set($attribute, $valor) {
        $this->$attribute = $valor;
    }

    public function deleteAluno()
    {
        $query = "delete from idaluno where idaluno = :idAluno";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':idaluno', $this->__get('idAluno'));
        $stmt->execute();

        return true;
    }

    public function deleteProfessor()
    {
        $query = "delete from idprofessor where idprofessor = :idProfessor";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':idprofessor', $this->__get('idProfessor'));
        $stmt->execute();

        return true;
    }

    public function deleteAdm()
    {
        $query = "delete from idadmin where idadmin = :idAdm ";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':idadmin', $this->__get('idAdm'));
        $stmt->execute();

        return true;
    }

    public function criarAluno()
    {
        $queryAluno = "insert into aluno(idaluno, fname, lname, cpf, email, senha, sexo, data_nascimento)
                        values(:idAluno, :fnameAluno, :lnameAluno, :cpf, :emailAluno, :senhaAluno, :sexo, :dataAluno)";
        $stmt = $this->db->prepare($queryAluno);
        $stmt->bindValue(':idaluno', $this->__get('idAluno'));
        $stmt->bindValue(':fname', $this->__get('fnameAluno'));
        $stmt->bindValue(':lname', $this->__get('lnameAluno'));
        $stmt->bindValue(':cpf', $this->__get('cpf'));
        $stmt->bindValue(':email', $this->__get('emailAluno'));
        $stmt->bindValue(':senha', $this->__get('senhaAluno'));
        $stmt->bindValue(':sexo', $this->__get('sexo'));
        $stmt->bindValue(':data_nascimento', $this->__get('dataAluno'));
        $stmt->execute();

        $queryEndereco = "insert into endereco(idendereco, rua, bairro, cidade, estado, id_aluno)
                            values(:idEnderecoAluno, :ruaAluno, :bairroAluno, :cidadeAluno, :estadoAluno, :idAluno)";
        $stmt = $this->db->prepare($queryEndereco);
        $stmt->bindValue(':idendereco', $this->__get('idEnderecoAluno'));
        $stmt->bindValue(':rua', $this->__get('ruaAluno'));
        $stmt->bindValue(':bairro', $this->__get('bairroAluno'));
        $stmt->bindValue(':cidade', $this->__get('cidadeAluno'));
        $stmt->bindValue(':estado', $this->__get('estadoAluno'));
        $stmt->bindValue(':id_aluno', $this->__get('idAluno'));
        $stmt->execute();

        $queryTelefoneAluno = "insert into telefone_aluno(idtelefonealuno, dd, numero, tipo_telefone, id_aluno)
                            values( :idTelefoneAluno, :ddAluno, :numeroAluno, :tipoAluno, :idAluno)";
        $stmt = $this->db->prepare($queryEndereco);
        $stmt->bindValue(':idtelefonealuno', $this->__get('idTelefoneAluno'));
        $stmt->bindValue(':dd', $this->__get('ddAluno'));
        $stmt->bindValue(':numero', $this->__get('numeroAluno'));
        $stmt->bindValue(':tipo_telefone', $this->__get('tipoAluno'));
        $stmt->bindValue(':id_aluno', $this->__get('idAluno'));
        $stmt->execute();

        return $this;
    }

    public function criarProfessor()
    {
        $queryProfessor = "insert into professor(idprofessor, fname, lname, formacao, email, senha)
                            values(:idProfessor, :fnameProfessor, :lnameProfessor, :formacaoProfessor,:emailProfessor, :senhaProfessor)";
        $stmt = $this->db->prepare($queryProfessor);
        $stmt->bindValue(':nome', $this->__get('nome'));
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->execute();

        $queryTelefoneProfessor = "insert into telefone_aluno(idtelefoneprofessor, dd, numero, tipo_telefone, id_professor)
                            values()";
        $stmt = $this->db->prepare($queryTelefoneProfessor);
        $stmt->bindValue(':idtelefoneProfessor', $this->__get('idTelefoneProfessor'));
        $stmt->bindValue(':dd', $this->__get('ddProfessor'));
        $stmt->bindValue(':numero', $this->__get('numeroProfessor'));
        $stmt->bindValue(':tipo_telefone', $this->__get('tipoProfessor'));
        $stmt->bindValue(':id_aluno', $this->__get('idAluno'));
        $stmt->execute();

        return $this;

    }

    public function criarAdm()
    {
        $queryAdm = "insert into administracao( idadmin,fname, lname, email, senha, nivel)
                values( :idAdmAdm,:fnameAdm, lnameAdm, :emailAdm, :senhaAdm, :nivelAdm)";
        $stmt = $this->db->prepare($queryAdm);
        $stmt->bindValue(':idAdm', $this->__get('idAdm'));
        $stmt->bindValue(':fnameAdm', $this->__get('fnameAdm'));
        $stmt->bindValue(':lname', $this->__get('lnameAdm'));
        $stmt->bindValue(':email', $this->__get('emailAdm'));
        $stmt->bindValue(':senha', $this->__get('senhaAdm'));
        $stmt->bindValue(':nivel', $this->__get('nivelAdm'));
        $stmt->execute();

        return $this;
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


}