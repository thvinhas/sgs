<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notas extends CI_Controller {

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
        $this->load->model('M_notas');
    }

	public function index()
	{
		$this->cadastrar();
	}

    public function cadastrar () {
//         $this->load->model('M_turma');
        $this->load->model('M_disciplina');
        $data['tipo'] = $this->session->userdata('tipo_login');
//         $data['turmas'] = $this->M_turma->get()->result_array();
        $data['disciplinas'] = $this->M_disciplina->get()->result_array();
        $this->load->view('notas/cadNotas', $data);
    }


    public function store()
    {

        $this->load->library('form_validation');
//        $regras = array();
        $regras = array(
            array(
                'field' => 'id_disciplina',
                'label' => 'Disciplina',
                'rules' => 'required'
            )
        );
//
        $this->form_validation->set_rules($regras);

        if ($this->form_validation->run() == FALSE) {
            $variaveis['titulo'] = 'Novo Registro';
            $this->load->view('notas/cadAluno', $variaveis);
        } else {
//            var_dump('hue');exit();
            $id = $this->input->post('id');

            $dados = array(
                "id_disciplina" => $this->input->post('id_disciplina'),
                "id_turma" => $this->input->post('data_aula'),
                "unidade" => $this->input->post('id_turma'),
                "nota" => $this->input->post('id_turma'),
                "matricula_aluno" => $this->input->post('id_turma')


            );

            if ($this->M_aluno->store($dados, $id)) {
                $variaveis['mensagem'] = "Dados gravados com sucesso!";
//                $this->load->view('v_sucesso', $variaveis);
                var_dump('succes');exit;
            } else {
                $variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente.";
//                $this->load->view('errors/html/v_erro', $variaveis);
            }

        }
    }

    public function obterTurmasDaDisciplina() {
      $disciplina =  $this->input->post('id_disciplina');
      $this->load->model('M_aula');
      $data =  $this->M_aula->getTurmaByDisciplina($disciplina)->result_array();
//          var_dump($data);exit();
      echo json_encode($data);
    }
}
