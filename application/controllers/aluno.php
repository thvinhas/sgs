<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

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
        $this->load->model('m_aluno');
    }
	public function index()
	{
        $this->cadastrar();
	}

	public function listar ()
    {
	    $data['dados'] = $this->aluno->get();

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
            $this->load->view('cadAluno', $variaveis);
        } else {
//            var_dump('hue');exit();
            $id = $this->input->post('id');

            $dados = array(
                "alu_nm_aluno" => $this->input->post('nome'),
                "alu_dt_nascimento" => $this->input->post('data_nasc_aluno'),
                "alu_nm_mae" => $this->input->post('mae_aluno'),
                "alu_nu_cpf_mae" => $this->input->post('CPF_mae_aluno'),
                "alu_nu_cpf_pai" => $this->input->post('CPF_pai_aluno'),
                "alu_nm_pai" => $this->input->post('pai_aluno'),
                "ser_serie_ser_id_serie " => (integer) $this->input->post('turma')

            );
            if ($this->m_aluno->store($dados, $id)) {
                $variaveis['mensagem'] = "Dados gravados com sucesso!";
//                $this->load->view('v_sucesso', $variaveis);
                var_dump('succes');exit;
            } else {
                $variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente.";
//                $this->load->view('errors/html/v_erro', $variaveis);
            }

        }
    }

    public function cadastrar() {
        $this->load->model('m_serie');
        $data= array();
        $series = $this->m_serie->get();
        $data['series'] = $series->result();
//        var_dump($series->result());exit();

        $this->load->view('cadAluno',$data);
    }
}
