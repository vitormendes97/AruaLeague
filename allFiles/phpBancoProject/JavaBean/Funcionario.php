<?php

require_once("Cargo.php");
require_once("Departamento.php");
class Funcionario {
    
    
    
    
    private $codigo;
    private $nome;
    private $dataContratacao;
    private $cargo;
    private $departamento;
    
    
    
    public function __construct(){
 
    }
    
    
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
        $this->nome=$nome;
    }
    function getDataContratacao(){
        return $this->dataContratacao;
    }
    function setDataContratacao($data){
        $this->dataContratacao = $data;
    }
    function getCargo(){
        return $this->cargo;
    }
    function setCargo($cargo){
        $this->cargo=$cargo;
    }
    function getDepartamento() {
        return $this->departamento;
    }

    function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }


    function FuncionariotoString(){
       
        
    
   return  "ID : {$this->codigo} , Nome : {$this->nome}, Cargo : {$this->cargo->getNome_Cargo()} ,"
   . "Departamento : ".$this->departamento->getNome_Departamento()."<br>";
        
        
        
    }
    
    
}
