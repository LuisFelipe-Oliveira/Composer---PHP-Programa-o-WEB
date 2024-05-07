<?php

namespace Php\Projetop1\Controllers;

use Php\Projetop1\Models\DAO\AlunoDAO;
use Php\Projetop1\Models\Domain\Aluno;

class AlunoController
{
    public function index($params)
    {
        $alunoDAO = new AlunoDAO();
        $resultado = $alunoDAO->consultar();
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
        require_once ("../src/views/aluno/aluno.php");
    }

    public function inserir($params)
    {
        require_once ("../src/views/aluno/alunoInsert.php");
    }

    public function novo($params)
    {
        $aluno = new Aluno(0, $_POST['nome'], $_POST['telefone'], $_POST['email'], $_POST['id_turma']);
        $alunoDAO = new AlunoDAO();
        if ($alunoDAO->inserir($aluno)) {
            header("location: /aluno/inserir/true");
        } else {
            header("location: /aluno/inserir/false");
        }
    }

    public function alterar($params)
    {
        $alunoDAO = new AlunoDAO();
        $resultado = $alunoDAO->consultarID($params[1]);
        require_once ("../src/views/aluno/alunoAlter.php");
    }

    public function excluir($params)
    {
        $alunoDAO = new AlunoDAO();
        $resultado = $alunoDAO->consultarID($params[1]);
        require_once ("../src/views/aluno/alunoExcluir.php");
    }

    public function editar($params)
    {
        $aluno = new Aluno($_POST['idAluno'], $_POST['nome'], $_POST['telefone'], $_POST['email'], $_POST['idTurma']);
        $alunoDAO = new AlunoDAO();
        if ($alunoDAO->alterar($aluno)) {
            header('location: /aluno/alterar/true');
        } else {
            header('location: /aluno/alterar/false');
        }
    }

    public function deletar($params){
        $alunoDAO = new AlunoDAO(); 
        if ($alunoDAO->excluir($_POST['id'])){
            header('location: /aluno/excluir/true');
        } else {
            header('location: /aluno/excluir/false');
        }
    }
}