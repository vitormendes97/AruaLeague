<?php

class Rodada {
   private $id_rodada;
   private $player;
   private $manager;
   private $points;
   private $goal;
   private $assist;
   private $chute_trave;
   private $chute_on_goal;
   private $red_card;
   private $yellow_card;
   private $desarme;
   private $offside;
   private $falta_cometida;
   
   public function __construct() {
  }
   
  
    function getAttribute($attributeName)
    {
       return $this->$attributeName;
    }
    
    function setAttribute($attributeName, $value)
    {
        $this->$attributeName = $value;
    }
  
}
