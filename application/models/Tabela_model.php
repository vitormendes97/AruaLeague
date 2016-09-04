<?php 

/**
* 
*/
class Tabela_model extends CI_Model
{

      public $id_tabela;
      public $liga;
      public $clube;
      public $pontos;
      public $vitoria;
      public $empate;
      public $derrota;
      public $gol_pro;
      public $gol_contra;
      public $saldo_gol;
     
	
	public function __construct()
	{
		parent::__construct();
	}

	public function readMasterTable(){
		$this->load->database();
		$sucesso = true;
		$erro = 'tabela_001';

		 $this->db->select('*');
         $this->db->from('tabela');
         $this->db->join('clube','clube.id_clube = tabela.clube');
         $this->db->join('liga','liga.id_liga = tabela.liga');
         $this->db->where('tabela.liga', 1);
         $this->db->order_by('pontos DESC , gol_pro DESC ');
         $query = $this->db->get();



		if(count($query->result() == 0)){
			$sucesso = false;	
		}
		return array($sucesso,$erro,$query->result());
	}
}