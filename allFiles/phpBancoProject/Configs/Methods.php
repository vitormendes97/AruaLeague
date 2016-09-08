<?php

class Methods {
 
    
   
    public static function getFileName($diretorio){
        
        list($pasta1,$pasta2,$arquivo) = explode("/", $diretorio);
       return $arquivo.".php";
        
    }
    
    
    public static function teste($path_name){
       $ent = array();   
       $diretorio = dir($path_name);
       
       
       while($arquivo = $diretorio -> read()){
           array_push($ent, $arquivo);
           
   }
   $diretorio -> close();
   return $ent;
   
    }
    
    
 
    
  
}
