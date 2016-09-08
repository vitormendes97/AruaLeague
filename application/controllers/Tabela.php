<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabela extends CI_Controller {

    public function __construct(){
         parent::__construct();
    }
    
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function main()
	{      
         $this->load->view('Head');
        $this->load->view('Menu');
        $this->load->view('Tabela');
        $this->load->view('Footer');
        
	}

	public function loadTabela($table_id)
	{
           intval($table_id);  
                      
           $this->load->model('Tabela_model');
           if($table_id != 1 && $table_id != 2){
              echo "Erro ao Encontrar Tabela";
           }
           else if($table_id == 1){
          list($sucesso,$erro,$tabela) = $this->Tabela_model->readMasterTable();
             $dados = array();
         $dados['sucesso'] = $sucesso;
         $dados['erro'] = $erro;
         $dados['tabela'] = $tabela;
          header('Content-Type: application/json');
          echo json_encode($dados);
          }
          else if($table_id == 2){
            list($sucesso,$erro,$tabela) = $this->Tabela_model->readSuperMasterTable();
            $dados = array();
         $dados['sucesso'] = $sucesso;
         $dados['erro'] = $erro;
         $dados['tabela'] = $tabela;
          header('Content-Type: application/json');
          echo json_encode($dados);
          }
          else{
            echo "Erro ao Encontrar Tabela";
          }
	}

    
    
    
}
