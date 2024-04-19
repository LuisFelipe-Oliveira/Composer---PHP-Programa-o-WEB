<?php

namespace Php\Projetop1\Models\Domain;

class Turma{

    private $id;
    private $id_curso;

    public function __construct($id, $id_curso){
        $this->setId($id);
        $this->setId_curso($id_curso);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId_curso(){
        return $this->id_curso;
    }

    public function setId_curso($id_curso){
        $this->id_curso = $id_curso;
    }
}   