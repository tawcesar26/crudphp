<?php 

defined('BASEPATH') OR exit ('No direct script acess allowed');

class Pagina extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->model('Cliente_model');


	}

	public function index(){

		
		$dados['titulo'] = 'CRUD CODEIGNITER'; 
		$this->load->view('home',$dados);




	}

	public function cadastro(){

		$this->load->helper('form');
		$this->load->library('form_validation');
		//Regras de Validação do formulário
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('senha', 'Senha', 'trim|required');

		if($this->form_validation->run() == FALSE):
			$dados['formerror'] = validation_errors();
		else:
			

		$nome= $this->input->post("nome");
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");

		$data = array(

			"nome" => $nome,
			"email" => $email,
			"senha" => $senha

			);

		$resultado = $this->Cliente_model->insert($data);

		if($resultado){
			$dados['formerror'] = 'Cadastro Realizado!';
		}



		endif;



		$dados['titulo'] = 'CRUD CODEIGNITER'; 
		$this->load->view('cadastro',$dados);


	}

	public function clientes(){

		$dados['titulo'] = 'CRUD CODEIGNITER'; 
		$this->load->view('clientes',$dados);


	}


}



 ?>