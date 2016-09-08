<?php

class PlayerStatistics {
  private $id;
  private $player;
  private $manager;
  private $current_price;
  private $current_matches;
  
  
    function getAttribute($attributeName)
    {
       return $this->$attributeName;
    }
    
    function setAttribute($attributeName, $value)
    {
        $this->$attributeName = $value;
    }
  
  
  public function __construct() {}
}
