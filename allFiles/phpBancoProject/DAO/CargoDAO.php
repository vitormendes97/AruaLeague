<?php

require_once "C:/xampp/htdocs/phpBancoProject/Conexao/MysqlConnection.php";
require_once "C:/xampp/htdocs/phpBancoProject/JavaBean/Cargo.php";

class CargoDAO {

    private $con;

    public function __construct() {
        $this->con = MysqlConnection::getInstance()->getConnection();
    }

    public function __destruct() {
        
    }

    public function Read() {
        $cargos = array();
        $sql = "SELECT * FROM EMPRESA.CARGO";
        
        $result = $this->con->query($sql);
         
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $cargo = new Cargo();
                $cargo->setCodigo_Cargo($row["id_cargo"]);
                $cargo->setNome_Cargo($row["nome"]);

                array_push($cargos, $cargo);
            }
        }
        return $cargos;
    }

    public function Insert($cargo) {
        $nome = $cargo->getNome_Cargo();
        $sql = "INSERT INTO EMPRESA.CARGO(NOME) VALUES(?)";
        $pst = $this->con->prepare($sql);


        $pst->bind_param("s", $nome);
        $pst->execute();
        echo "Usuário inserido com sucesso";
        $pst->close();
    }

    public function Update($cargo) {

        $nome = $cargo->getNome_Cargo();
        $id = $cargo->getCodigo_Cargo();
        $sql = "UPDATE EMPRESA.CARGO SET NOME=? WHERE ID_CARGO =?";

        $pst = $this->con->prepare($sql);
        $pst->bind_param("ss", $nome, $id);
        $pst->execute();

        echo("Usuário alterado com sucesso");
        $pst->close();
    }

    public function Delete($cargo) {

        $id = $cargo->getCodigo_Cargo();
        $sql = "DELETE FROM EMPRESA.CARGO WHERE ID_CARGO =?";
        $pst = $this->con->prepare($sql);
        $pst->bind_param("s", $id);
        $pst->execute();

        echo "Usuário deletado com sucesso";
    }

    public function readByID($id) {
        $cargo = new Cargo();
        $sql = "SELECT * FROM EMPRESA.CARGO WHERE ID_CARGO=?";
        $pst = $this->con->prepare($sql);
        $pst->bind_param("s", $id);
        $pst->execute();


        $result = $pst->get_Result();

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
               
                $cargo->setCodigo_Cargo($row["id_cargo"]);
                $cargo->setNome_Cargo($row["nome"]);
                
            }
        }

        return $cargo;
    }

    public function endConnection() {

        $this->con->end();
    }

}
