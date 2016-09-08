<?php

class Tecnico {
   private $id_manager;
   private $name_manager;
   private $age_manager;
   private $team;
   private $picture;
   
   public function __construct() {}

   
    function getAttribute($attributeName)
    {
       return $this->$attributeName;
    }
    
    function setAttribute($attributeName, $value)
    {
        $this->$attributeName = $value;
    }
   
    function toStringManager(){
        return "ID=".$this->id_manager.", "."Nome=".$this->name_manager.", "."Idade=".$this->age_manager.", ".
           "Clube=".$this->team->toStringClube();     
    }
    
}

