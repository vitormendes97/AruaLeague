<?php

class Jogador {

    private $id_player;
    private $name_player;
    private $age_player;
    private $team;
    private $position;
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
    
    
    
    function toStringPlayer(){
        
      return "ID=".$this->id_player.", "."Nome=".$this->name_player.", "."Idade=".$this->age_player.", ".
          "Position=".$this->position.", "."Clube=".$this->team->toStringClube()."<br>";    
    } 
    
}
