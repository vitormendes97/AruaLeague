<?php
require_once 'C:/xampp/htdocs/Cartola/Entidades/Clube.php';
require_once 'C:/xampp/htdocs/Cartola/SingletonConnection/Connection.php';
class ClubeDAO {
   private $connection;
   
   public function __construct() {
      $this->connection = Connection::getInstance()->getConnection();
   }
   
   function Read(){
       $clubes = array();
       $sql = "SELECT * FROM CARTOLA.CLUBE";
       
       $result=$this->connection->query($sql);
       
       
       if($result->num_rows > 0){
       
           while($row = $result->fetch_assoc()){
               $clube = new Clube;
               $clube->setAttribute("id_team", $row["id_team"]);
               $clube->setAttribute("name_team", $row["name_team"]);
               $clube->setAttribute("points", $row["points_team"]);
               $clube->setAttribute("goal_sofrido", $row["goal_sofrido"]);
               array_push($clubes, $clube);
           }
       }
       
     return $clubes;   
   }
   
   
   
}
