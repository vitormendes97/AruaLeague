<?php

$command = $_POST["command"];
$option = $_POST["slct"];
session_start();

$action = explode(".", $command);

if ($action[0] == "clube") {


    $_SESSION["action"] = $action[1];
    $_SESSION["rodada"] = $option;


    $redirect = "../Action/ClubeAction.php";
    header("Location:$redirect");
} else if ($action[0] == "rodada") {



    $_SESSION["action"] = $action[1];
      $_SESSION["rodada"] = $option;

    $redirect = "../Action/RodadaAction.php";
    header("Location:$redirect");
} elseif ($action[0] == "jogador") {

    $_SESSION["action"] = $action[1];
      $_SESSION["rodada"] = $option;

    $redirect = "../Action/JogadorAction.php";
    header("Location:$redirect");
}
else if($action[0]=="tecnico"){
    $_SESSION["action"] = $action[1];
      $_SESSION["rodada"] = $option;

    $redirect = "../Action/TecnicoAction.php";
    header("Location:$redirect");
}
else if($action[0]=="statistics"){
    $_SESSION["action"] = $action[1];
      $_SESSION["rodada"] = $option;

    $redirect = "../Action/StatisticAction.php";
    header("Location:$redirect");
}