<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Professor extends CI_Controller {

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
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_professor');
    }

	public function index()
	{
		$this->load->view('cadProfessor');
	}

    public function listar ()
    {
        $data['dados'] = $this->professor->get();

    }

//    public function cadastrar () {
//        $this->load->model('m_curso');
//        $data['resultado'] = $this->m_curso->get()->result_array();
//        $this->load->view('cadSerie', $data);
//    }

    public function store()
    {

        $this->load->library('form_validation');
//        $regras = array();
        $regras = array(
            array(
                'field' => 'nome',
                'label' => 'Nome',
                'rules' => 'required'
            )
        );
//
        $this->form_validation->set_rules($regras);

        if ($this->form_validation->run() == FALSE) {
            $variaveis['titulo'] = 'Novo Registro';
            $this->load->view('cadProfessor', $variaveis);
        } else {

            $dados = array(
                "matricula" => $this->input->post('matricula'),
                "nome" => $this->input->post('nome'),
                "cpf_professor" => (integer) $this->input->post('cpf'),
                "email" => $this->input->post('email')

            );
            if ($this->m_professor->store($dados)) {
                $variaveis['mensagem'] = "Dados gravados com sucesso!";
//                $this->load->view('v_sucesso', $variaveis);
                var_dump('succes');exit;
            } else {
                $variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente.";
//                $this->load->view('errors/html/v_erro', $variaveis);
            }

        }
    }
}
