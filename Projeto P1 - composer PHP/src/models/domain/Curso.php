<?php

namespace Php\Projetop1\Models\Domain;

class Curso{

    private $idCurso;
    private $nome;
   private $descricao;

    public function __construct($idCurso, $nome, $descricao){
        $this->setIdCurso($idCurso);
        $this->setNome($nome);
        $this->setDescricao($descricao);
    }

    public function getIdCurso(){
        return $this->idCurso;
    }

    public function setIdCurso($idCurso){
        $this->idCurso = $idCurso;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
}   