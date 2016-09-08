<?php

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
    
    public function getNome_Cargo(){
        
         return $this->nome;
        
    }
    
    public function getCodigo_Cargo(){
        return $this->codigo;
        
    }
    public function setNome_Cargo($nome){
        
       $this->nome = $nome; 
    }
    public function setCodigo_Cargo($codigo){
        
        $this->codigo = $codigo;
    }
    
    
    
    
    function toStringCargo(){
        
      echo "Código : {$this->codigo} - Cargo : {$this->nome} "."<br>";  
        
    }
    
    
}
