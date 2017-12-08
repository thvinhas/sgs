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
        $this->load->model('M_turma');
    }
    public function index()
    {
        $this->listar();
    }

    public function listar ()
    {
        $data['turmas'] = $this->M_turma->get()->result();
        $data['tipo'] = $_SESSION['tipo_login'];
//                         var_dump($data);exit();
        $this->load->view('turma/listTurma',$data);

    }
    
    public function apagar()
    {
        $id = $this->input->post('id');
        
        if ($this->M_turma->delete($id)) {
            $variaveis['mensagem'] = "Dados gravados com sucesso!";
            // $this->load->view('v_sucesso', $variaveis);
//            var_dump('succes');
            exit();
        } else {
            $variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente.";
            // $this->load->view('errors/html/v_erro', $variaveis);
        }
    }

    public function cadastrar () {
        $this->load->model('M_serie');
        $data['resultado'] = $this->M_serie->get()->result_array();
 $this->session->userdata('tipo_login');
        $this->load->view('turma/cadTurma', $data);
    }
    
    public function editar () {
        $this->load->model('M_serie');
        
        $id = $this->input->post('id');
        $data = $this->M_turma->get($id)->result_array()[0];
        $data['resultado'] = $this->M_serie->get()->result_array();
 $this->session->userdata('tipo_login');
//         var_dump($data);exit();
        $this->load->view('turma/cadTurma', $data);
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
            $this->load->view('turma/cadTurma', $variaveis);
        } else {

            $id = $this->input->post('id');

            $dados = array(
                "nome" => $this->input->post('nome'),
                "serie_id" => (integer) $this->input->post('id_serie')

            );
            if ($this->M_turma->store($dados, $id)) {
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
