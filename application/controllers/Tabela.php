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

          $this->load->model('Tabela_model');
          //Carrega a tabela de classificação do campeonato Master
          list($sucesso_master,$erro,$tabela_master) = $this->Tabela_model->readMasterTable();
          $dados = array();
          $dados['sucesso_master'] = $sucesso_master;
          $dados['tabela_master'] = $tabela_master;
          //Fim do carregamento da tabela Master

         $this->load->view('Head');
        $this->load->view('Menu');
        $this->load->view('Tabela',$dados);
        $this->load->view('Footer');
        
	}

    
    
    
}
