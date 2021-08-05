<?php 

defined('BASEPATH') OR exit ('No direct script acess allowed');

class Pagina extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->helper('url');


	}

	public function index(){

		
		$dados['titulo'] = 'CRUD CODEIGNITER'; 
		$this->load->view('home',$dados);



	}

	public function cadastro(){

		$this->load->helper('form');
		$dados['titulo'] = 'CRUD CODEIGNITER'; 
		$this->load->view('cadastro',$dados);


	}

	public function clientes(){

		$dados['titulo'] = 'CRUD CODEIGNITER'; 
		$this->load->view('clientes',$dados);


	}


}



 ?>