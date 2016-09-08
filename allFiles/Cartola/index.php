 <?php
        require_once "C:/xampp/htdocs/Cartola/Pages/menu.php";
        session_start();
        
        function player_gol(){
            
           foreach($_SESSION["pontuacao"] as $value){
               
               $picture = $value->getAttribute("player")->getAttribute("picture");
        $player_name = $value->getAttribute("player")->getAttribute("name_player");
        $pontos = $value->getAttribute("goal");
        $clube = $value->getAttribute("player")->getAttribute("team")->getAttribute("name_team");
        $id_player = $value->getAttribute("player")->getAttribute("id_player");
        $position = $value->getAttribute("player")->getAttribute("position");
        $team_picture = $value->getAttribute("player")->getAttribute("team")->getAttribute("picture");
        
        
           echo  $str = <<<EX
   
         <div class="each" >
              <img class="picture" src=$picture />
              <img class="picutre" style="margin-left:-20%; margin-top:1%;" src=$team_picture />
          <div class="content">
                <p> $pontos</p> 
                <h1 class="playername">$player_name</h1>
              <h1 class="playerposition"> $position  </h1>
              
          </div>    
            
              
              
              </div> 
        
        
EX;
               
           } 
           
        }
        
      ?>
<!DOCYTYPE html>

<html>
    <head>
      
        <title></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/menu.css"> 
        <link rel="stylesheet" type="text/css" href="css/rodada.css"> 
 
    </head>
    <body>
        <h1>Top Goleadores </h1>
        <div class="each" style="height: 45px;">
            
            <h2 style="font-size: 20px; position: relative; float: left;margin-left: 3%;margin-top: 1%;">Time</h2>
            <h2 style="font-size: 20px; position: relative; float: left; margin-left: 16%; margin-top: 1%;">Jogador</h2>
            <h2 style="font-size: 20px; position: relative; float: left; margin-left:44%; margin-top: 1%;">Total de Gols</h2>
            
        </div>
        
        <?php
              player_gol();
        ?>
        
        
    </body>
</html>
