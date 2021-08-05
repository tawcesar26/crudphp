<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1 extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Exemplo1_model');
	}

	public function index(){

		$dados['titulo']= "Essa é minha primeira view";
		$dados['conteudo'] = "The page you are looking at is being generated dynamically by CodeIgniter.";

		$this->load->view('exemplo1',$dados);
	}

	public function cadastrar(){

		$this->Exemplo1_model->cadastrar();
	}

}
