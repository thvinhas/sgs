<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turma extends CI_Controller {

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
//	public function index()
//	{
//		$this->load->view('cadTurma');
//	}

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_turma');
    }
    public function index()
    {
        $this->cadastrar();
    }

    public function listar ()
    {
        $data['dados'] = $this->turma->get();

    }

    public function cadastrar () {
        $this->load->model('m_serie');
        $data['resultado'] = $this->m_serie->get()->result_array();
        $this->load->view('cadTurma', $data);
    }

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
            $this->load->view('cadTurma', $variaveis);
        } else {

            $id = $this->input->post('id');

            $dados = array(
                "nome" => $this->input->post('nome'),
                "serie_id" => (integer) $this->input->post('id_serie')

            );
            if ($this->m_turma->store($dados, $id)) {
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
