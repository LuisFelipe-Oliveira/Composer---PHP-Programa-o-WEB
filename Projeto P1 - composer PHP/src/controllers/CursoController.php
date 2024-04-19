<?php

namespace Php\Projetop1\Controllers;

use Php\Projetop1\Models\DAO\CursoDAO;
use Php\Projetop1\Models\Domain\Curso;



class CursoController
{
  public function inserir($params)
  {
    require_once ("../src/views/curso/cursoInsert.php");
  }

  public function novo($params)
  {
    $curso = new Curso(0, $_POST['nome'], $_POST['descricao']);
    $cursoDAO = new CursoDAO();
    if ($cursoDAO->inserir($curso)) {
      return "Inserido com sucesso!";
    } else {
      return "Erro ao inserir!";
    }
  }

}