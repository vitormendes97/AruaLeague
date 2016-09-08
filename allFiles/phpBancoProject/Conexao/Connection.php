<?php

ini_set('display_errors', TRUE);
error_reporting(E_ALL);



class Connection {
   
    private $servidor = 'localhost';
    private $banco = 'empresa';
    private $usuario = 'root';
    private $senha = 'mendes';
    private static $conexao;
    
    public function __contruct(){   
    }
    
    
    public function getConnection(){
        
    try{    
        $con = new PDO("mysql:host=$this->servidor;dbname=$this->banco",$this->usuario,$this->senha);
        
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conectou";
         return $con;
        }
        catch(PDOException $e){
            
            echo "Falhou".$e->getMessage();
        }
    }
    
    
    
}
