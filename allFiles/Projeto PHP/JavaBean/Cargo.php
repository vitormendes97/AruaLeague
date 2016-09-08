<?php

namespace javabean;
class Cargo {
   
    private $nome;
    private $codigo;

//  EXEMPLO DE CONSTRUTOR PERSONALIZADO
//    public function __construct($nome,$codigo){
//        $this->nome=$nome;
//        $this->codigo=$codigo;
//    }
//  
    
    public function __contructor(){}
    
    public function getNome(){
        
         return $this->nome;
        
    }
    
    public function getCodigo(){
        return $this->codigo;
        
    }
    public function setNome($nome){
        
       $this->nome = $nome; 
    }
    public function setCodigo($codigo){
        
        $this->codigo = $codigo;
    }
    
    function toString(){
        
      echo "Código : {$this->codigo} - Cargo : {$this->nome} ";  
        
    }
    
    
}
