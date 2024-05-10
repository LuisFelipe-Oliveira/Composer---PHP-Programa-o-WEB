<?php

namespace Php\Projetop1\Controllers;

use Php\Projetop1\Models\DAO\ProfessorDAO;
use Php\Projetop1\Models\Domain\Professor;



class ProfessorController
{
    public function index($params)
    {
        $professorDAO = new ProfessorDAO();
        $resultado = $professorDAO->consultar();
        $acao = $params[1] ?? "";
        $status = $params[2] ?? "";
        if ($acao == "inserir" && $status == "true")
            $mensagem = "Registro inserido com sucesso!";
        elseif ($acao == "inserir" && $status == "false")
            $mensagem = "Erro ao inserir!";
        elseif ($acao == "alterar" && $status == "true")
            $mensagem = "Registro alterado com sucesso!";
        elseif ($acao == "alterar" && $status == "false")
            $mensagem = "Erro ao alterar!";
        elseif ($acao == "excluir" && $status == "true")
            $mensagem = "Registro excluido com sucesso!";
        elseif ($acao == "excluir" && $status == "false")
            $mensagem = "Erro ao excluir!";
        else
            $mensagem = "";
        require_once ("../src/views/professor/professor.php");
    }

    public function inserir($params)
    {
        require_once ("../src/views/professor/professorInsert.php");
    }

    public function novo($params)
    {
        $professor = new Professor(0, $_POST['nome'], $_POST['telefone'], $_POST['email'], $_POST['idTurma'], );
        $professorDAO = new ProfessorDAO();
        if ($professorDAO->inserir($professor)) {
            header("location: /professor/inserir/true");
        } else {
            header("location: /professor/inserir/false");
        }
    }

    public function alterar($params)
    {
        $professorDAO = new ProfessorDAO();
        $resultado = $professorDAO->consultarID($params[1]);
        require_once ("../src/views/professor/professorAlter.php");
    }

    public function excluir($params)
    {
        $professorDAO = new ProfessorDAO();
        $resultado = $professorDAO->consultarID($params[1]);
        require_once ("../src/views/professor/professorExcluir.php");
    }

    public function editar($params)
    {
        $professor = new Professor($_POST['idProfessor'], $_POST['nome'], $_POST['telefone'], $_POST['email'], $_POST['idTurma']);
        $professorDAO = new ProfessorDAO();
        if ($professorDAO->alterar($professor)) {
            header('location: /professor/alterar/true');
        } else {
            header('location: /professor/alterar/false');
        }
    }

    public function deletar($params){
        $professorDAO = new ProfessorDAO(); 
        if ($professorDAO->excluir($_POST['idProfessor'])){
            header('location: /professor/excluir/true');
        } else {
            header('location: /professor/excluir/false');
        }
    }
}