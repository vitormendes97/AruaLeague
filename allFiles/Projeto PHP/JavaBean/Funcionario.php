<?php
namespace javabean;


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


    function toString(){
       
        
        $cargo = new \javabean\Cargo();
        $cargo = $this->cargo;
        echo $cargo->toString();
        echo "<br>";
        $departamento = new \javabean\Departamento();
        $departamento = $this->departamento;
        
        echo $departamento->toString();
        
        echo "<br>";
        echo $this->codigo;
        echo $this->nome;
        
        
    }
    
    
}
