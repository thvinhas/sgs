<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serie extends CI_Controller {

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
        $this->load->model('M_serie');
    }
    public function index()
    {
        $this->listar();
    }

    public function listar ()
    {
        $data['series'] = $this->M_serie->get()->result();
//                 var_dump($data);exit();
        $this->load->view('serie/listSerie',$data);

    }

    public function cadastrar () {
        $this->load->model('M_curso');
        $data['resultado'] = $this->M_curso->get()->result_array();
        $this->load->view('serie/cadSerie', $data);
    }
    
    public function editar()
    {
        $this->load->model('M_curso');
        
        $id = $this->input->post('id');
        $dados = $this->M_serie->get($id)->result_array()[0];

        $dados['resultado'] = $this->M_curso->get()->result_array();
        
//                         var_dump($dados);exit();
        $this->load->view('serie/cadSerie', $dados);
    }
    
    
    
    public function apagar()
    {
        $id = $this->input->post('id');
        
        if ($this->M_serie->delete($id)) {
            $variaveis['mensagem'] = "Dados gravados com sucesso!";
            // $this->load->view('v_sucesso', $variaveis);
            var_dump('succes');
            exit();
        } else {
            $variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente.";
            // $this->load->view('errors/html/v_erro', $variaveis);
        }
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
            $this->load->view('serie/cadSerie', $variaveis);
        } else {

            $id = $this->input->post('id');

            $dados = array(
                "nome" => $this->input->post('nome'),
                "periodo_letivo" => $this->input->post('periodo'),
                "curso_id" => (integer) $this->input->post('id_curso')

            );
            if ($this->M_serie->store($dados, $id)) {
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
