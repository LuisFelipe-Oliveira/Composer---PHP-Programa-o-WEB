<?php

namespace Php\Projetop1\Models\Domain;

class Turma{

    private $id;
    private $idCurso;
    private $numeroTurma;
    private $dataInicio;
    private $dataFim;

    public function __construct($id, $idCurso, $numeroTurma, $dataInicio, $dataFim){
        $this->setId($id);
        $this->setId_curso($idCurso);
        $this->setNumeroTurma($numeroTurma);
        $this->setDataInicio($dataInicio);
        $this->setDataFim($dataFim);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId_curso(){
        return $this->idCurso;
    }

    public function setId_curso($idCurso){
        $this->idCurso = $idCurso;
    }

    public function getNumeroTurma(){
        return $this->numeroTurma;
    }

    public function setNumeroTurma($numeroTurma){
        $this->numeroTurma = $numeroTurma;
    }

    public function getDataInicio(){
        return $this->dataInicio;
    }

    public function setDataInicio($dataInicio){
        $this->dataInicio = $dataInicio;
    }

    public function getDataFim(){
        return $this->dataFim;
    }

    public function setDataFim($dataFim){
        $this->dataFim = $dataFim;
    }
}   