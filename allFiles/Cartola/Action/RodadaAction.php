<?php

require_once 'C:/xampp/htdocs/Cartola/Entidades/Rodada.php';
require_once 'C:/xampp/htdocs/Cartola/DAO/RodadaDAO.php';

session_start();
$reflection = null;

class RodadaAction {

   static function invoke_method() {

        if (method_exists(new RodadaAction(), $_SESSION["action"])) {
            $reflection = new ReflectionClass('RodadaAction');
            $reflection->getMethod($_SESSION["action"])->invoke(new RodadaAction());
        }
        else{
            echo "Method ".$_SESSION["action"] ." doesn't exists";
        }
    }

    function pontuacao() {

        $dao = new RodadaDAO();
        $_SESSION["pontuacao"] = $dao->player_pontuacao($_SESSION["rodada"]);
        $redirect = "../Pages/pontuacao.php";
        header("Location:$redirect");
    }

}

RodadaAction::invoke_method();

