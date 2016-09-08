<?php

class Partida {
   private $id_match;
   private $date_match;
   private $team_one;
   private $team_two;
   
   public function __construct() {}
   
   
    function getAttribute($attributeName)
    {
       return $this->$attributeName;
    }
    
    function setAttribute($attributeName, $value)
    {
        $this->$attributeName = $value;
    }
   
   
   function toStringPartida(){
       return "ID=$this->id_match, Data=$this->date_match, Time 1=$this->team_one->toStringClube(),"
               . " Time 2=$this->team_two->toStringClube()";
   }
}
