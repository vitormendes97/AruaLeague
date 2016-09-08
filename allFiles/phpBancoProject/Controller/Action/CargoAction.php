<?php

require_once 'C:/xampp/htdocs/phpBancoProject/DAO/CargoDAO.php';

class CargoAction {

    public function __construct() {
        
    }

    function read() {

        $dao = new CargoDAO();
        $cargos = $dao->Read();
        session_start();
        $_SESSION["cargos"] = $cargos;
        $redirect = "../../index.php";
        header("Location:$redirect");
    }

    function create($cargoname){
        
        include_once 'C:/xampp/htdocs/phpBancoProject/Other Pages/Cargo/novoCargo.php';
        $cargo = new Cargo();
        $cargo->setNome_Cargo($cargoname);
        $dao = new CargoDAO();
        $dao->Insert($cargo);
       
    }
    
}
