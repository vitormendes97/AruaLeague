<?php
include_once 'C:/xampp/htdocs/Cartola/DAO/RodadaDAO.php';
include_once 'menu.php';
session_start();

function players_pontuacao() {
$i=0;
    foreach ($_SESSION["pontuacao"] as $value) {

        $picture = $value->getAttribute("player")->getAttribute("picture");
        $player_name = $value->getAttribute("player")->getAttribute("name_player");
        $pontos = $value->getAttribute("points");
        $clube = $value->getAttribute("player")->getAttribute("team")->getAttribute("name_team");
        $id_player = $value->getAttribute("player")->getAttribute("id_player");
        $position = $value->getAttribute("player")->getAttribute("position");
        $team_picture = $value->getAttribute("player")->getAttribute("team")->getAttribute("picture");
        $i++;
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
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/rodada.css" rel="stylesheet" type="text/css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->

        <link href="../css/materialize.min.css" rel="stylesheet" type="text/css"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
         <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />

    </head>

    <body>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="../css/js/materialize.min.js" type="text/javascript"></script>

        <h1 style="font-size: 40px; color: black;">Pontuação da Rodada <?= $_SESSION["rodada"]?></h1>
<!--        <img style="width:240px; margin-top: -4%; margin-left: -25px;position: relative; "src="../img/logocartola.png" alt=""/>-->
           
        <div class="each" style="height: 45px;">
            
            <h2 style="font-size: 20px; position: relative; float: left;margin-left: 3%;margin-top: 1%;">Time</h2>
            <h2 style="font-size: 20px; position: relative; float: left; margin-left: 16%; margin-top: 1%;">Jogador</h2>
            <h2 style="font-size: 20px; position: relative; float: left; margin-left:44%; margin-top: 1%;">Pontuação Parcial</h2>
            
        </div>

            <?php
           players_pontuacao();
           ?><br> 
        
       
        


    </body>
</html>