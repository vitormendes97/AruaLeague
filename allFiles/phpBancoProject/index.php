<?php
require_once("./DAO/CargoDAO.php");
require_once("./DAO/DepartamentoDAO.php");
require_once("./DAO/FuncionarioDAO.php");
require_once ("./Configs/Methods.php");


$ent = Methods::teste('./JavaBean/');
unset($ent[0]);
unset($ent[1]);
session_start();
//var_dump($_SESSION["cargos"]);

?>

<!DOCTYPE html>
<html>

    <head>
        <title>
            Welcome
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="design.css">
    </head>
    <body>
      
        <h1 id="main">  Selecione uma Entidade  </h1>  
        <form method="POST" action="Controller/FrontController/controller.php">
            <section class="container">
                <div class="dropdown">
                    <select name="one" class="dropdown-select">
                        <option value="">Select…</option>
                        <option value="cargo">Cargo</option>
                        <option value="departamento">Departamento</option>
                        <option value="funcionario">Funcionario</option>
                    </select>
                </div>
                <div class="dropdown dropdown-dark">
                    <select name="acao" class="dropdown-select">
                        <option value="">Select…</option>
                        <option value = "create">New register</option>
                        <option value ="read" >Read All registers</option>
                        <option value= "update" >Update one register</option>
                        <option value = "delete">Delete one register</option>
                    </select>
                </div>
            </section>
            <input type="submit" value="Enviar" class="buttons">
        </form>  




    </body>
</html>

