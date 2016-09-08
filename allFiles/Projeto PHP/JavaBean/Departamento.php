<?php
namespace javabean;
class Departamento {
    
    private $codigo;
    private $nome;
    
    public function __contructor(){}
    
function getCodigo(){
    return $this->codigo;
}

function setCodigo($codigo){
    
    $this->codigo = $codigo;
}

function getNome(){
    return $this->nome;
}

function setNome($nome){
    
    $this->nome =$nome;
}

function toString(){
    
    echo "Código : {$this->codigo} - Departamento : {$this->nome}";
}

}
