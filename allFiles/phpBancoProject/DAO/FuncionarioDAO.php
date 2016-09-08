<?php

require_once "C:/xampp/htdocs/phpBancoProject/Conexao/MysqlConnection.php";
require_once "C:/xampp/htdocs/phpBancoProject/JavaBean/Cargo.php";
require_once "C:/xampp/htdocs/phpBancoProject/JavaBean/Departamento.php";
require_once "C:/xampp/htdocs/phpBancoProject/JavaBean/Funcionario.php";

class FuncionarioDAO {

    private $con;

    public function __construct() {
        $this->con = MysqlConnection::getInstance()->getConnection();
    }

    public function Read() {

        $funcionarios = array();

        $sql = "SELECT * FROM empresa.readfuncionario";
        $result = $this->con->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                $cargo = new Cargo();
                $cargo->setNome_Cargo($row["CARGO"]);
                 
                $departamento = new Departamento();
                $departamento->setNome_Departamento($row["DEPARTAMENTO"]);
               
                $funcionario = new Funcionario();
                $funcionario->setCodigo($row["ID_FUNCIONARIO"]);
                $funcionario->setDataContratacao($row["dt_contratacao"]);
                $funcionario->setNome($row["FUNCIONARIO"]);
                $funcionario->setCargo($cargo);
                $funcionario->setDepartamento($departamento);
                
                array_push($funcionarios, $funcionario);
            }
        }
        return $funcionarios;
    }
    
    public function Insert(){
        
        $sql = "INSERT INTO EMPRESA.FUNCIONARIO(NOME,DT_CONTRATACAO,CARGO,DEPARTAMENTO) VALUES(?,?,?)";
        
    }
    
    

}
