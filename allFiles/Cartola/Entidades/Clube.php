<?php

class Clube {
    private $id_team;
    private $name_team;
    private $points;
    private $goal_sofrido;
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
    
    function toStringClube(){
        return "ID Clube  :$this->id_team ".", Nome Clube :$this->name_team ".", Pontos :$this->points ".",Gols Sofrindos :$this->goal_sofrido"."<br>";
    }
    
    
}
