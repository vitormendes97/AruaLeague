<?php

class Liga_model extends CI_Model {
    
    public $id_liga;
    public $nome_liga;
    
    public function __construct(){
        parent::__construct();
    }
    
    public function read(){
        
        $this->load->database();
        $sucesso = true;
        $erro = 'liga_001';
        $query = $this->db->get('liga');
        if(count($query->result() == 0)){
            $sucesso = false;
        }
        return array($sucesso,$erro,$query->result());
           
    }
}