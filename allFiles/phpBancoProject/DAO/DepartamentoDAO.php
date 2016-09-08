<?php

require_once "C:/xampp/htdocs/phpBancoProject/Conexao/MysqlConnection.php";
require_once "C:/xampp/htdocs/phpBancoProject/JavaBean/Departamento.php";
class DepartamentoDAO {
    
    private $con;
    
    public function __construct(){
        $this->con = MysqlConnection::getInstance()->getConnection();
        }
        
        public function Read(){
            
            $departamentos = array();
            $sql = "SELECT * FROM EMPRESA.DEPARTAMENTO";
            $result =$this->con->query($sql);
            
            if($result->num_rows > 0){
                
                while($row = $result->fetch_assoc()){
                    $departamento = new Departamento();
                    $departamento->setCodigo_Departamento($row["id_departamento"]);
                    $departamento->setNome_Departamento($row["nome"]);
                    
                    array_push($departamentos, $departamento);
                    
                }
            }
            return $departamentos;
        }
    
        public function Insert($departamento){
            $nome = $departamento->getNome_Departamento();
            $sql="INSERT INTO EMPRESA.DEPARTAMENTO(NOME) VALUES(?)";
            $pst = $this->con->prepare($sql);
            $pst->bind_param("s",$nome);
            $pst->execute();
            
            echo "Deparamento inserido com sucesso";
            $pst->close();
            
        }
        
        public function Update($departamento) {
             $id_departamento = $departamento->getCodigo_Departamento();
            $nome = $departamento->getNome_Departamento();
            $sql="UPDATE EMPRESA.DEPARTAMENTO SET NOME =? WHERE ID_DEPARTAMENTO = ?";
            $pst=$this->con->prepare($sql);
            $pst->bind_param("ss",$nome,$id_departamento);
            $pst->execute();
            
            echo "Departamento alterado com sucesso";
            $pst->close();
        }
        
        public function Delete($departamento) {
            
              $id_departamento = $departamento->getCodigo_Departamento();
              $sql = "DELETE FROM EMPRESA.DEPARTAMENTO WHERE ID_DEPARTAMENTO = ?";
              $pst = $this->con->prepare($sql);
              $pst->bind_param("s",$id_departamento);
              $pst->execute();
              
              echo "Departamento deletado com sucesso";
              
              $pst->close();
             
            }
            
            public function readByID($id) {
                $dep = new Departamento();
                $sql= "SELECT * FROM EMPRESA.DEPARTAMENTO WHERE ID_DEPARTAMENTO = ?";
                $pst = $this->con->prepare($sql);
                $pst->bind_param("s",$id);
                $pst->execute();
                
                $result = $pst->get_Result();
                
                if($result->num_rows>0){
                    
                    while($row = $result->fetch_assoc()){
                        $dep->setCodigo_Departamento($row["id_departamento"]);
                        $dep->setNome_Departamento($row["nome"]);
                    }
                }
                return $dep;
            }
        
        
}
