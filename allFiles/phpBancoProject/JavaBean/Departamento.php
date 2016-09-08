<?php

class Departamento {
    
    private $codigo;
    private $nome;
    
    public function __contructor(){}
    
function getCodigo_Departamento(){
    return $this->codigo;
}

function setCodigo_Departamento($codigo){
    
    $this->codigo = $codigo;
}

function getNome_Departamento(){
    return $this->nome;
}

function setNome_Departamento($nome){
    
    $this->nome =$nome;
}

function toStringDepartamento(){
    
    echo "Código : {$this->codigo} - Departamento : {$this->nome}"."<br>";
}

}
