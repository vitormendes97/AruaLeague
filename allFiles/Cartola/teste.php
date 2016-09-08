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
        $i++;
      echo  $str = <<<EX
   <div class=teste>
        <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="player_img" src="$picture" alt=""/>
                    </div>
                
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        <p style="font-size:18px;font-family: Impact;">$player_name</p>
                        
                        <i class="material-icons right">more_vert</i></span>
              <form action="estatistica_individual.php" method="POST">
              <input type="hidden" value=$id_player name="id_player">
                    
              <input class="button_href" type="submit" value="Ver estatísticas">
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Infos<i class="material-icons right">close</i></span>
    <p style="padding 0px ;color:black;font-size:14px; margin-left : 0px; margin-top: 20px;">Posição : $i º Lugar</p>                 
    <p style="color:black;font-size:14px; margin-left : 0px; margin-top: 20px;">Nome : $player_name</p>                 
    <p style="color:black;font-size:14px; margin-left : 0px; margin-top: 20px;">Clube : $clube</p>                 
   <p style="color:greenyellow;text-align: center;font-size: 25px;margin-top: 70px;">$pontos</p>
                   
                </div>
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

    </head>

    <body>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="../css/js/materialize.min.js" type="text/javascript"></script>

        <h1 style="font-size: 40px;">Pontuação da Rodada <?= $_SESSION["rodada"]?></h1>
<!--        <img style="width:240px; margin-top: -4%; margin-left: -25px;position: relative; "src="../img/logocartola.png" alt=""/>-->
            <?php
           players_pontuacao();
            ?> 





    </body>
</html>