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
        $this->load->model('M_professor');
    }

	public function index()
	{
		$this->listar();
	}

    public function listar ()
    {
        $data['professores'] = $this->M_professor->get()->result();
        $data['tipo'] = $_SESSION['tipo_login'];
//         var_dump($data);exit();
        $this->load->view('professor/listProfessor',$data);

    }
    public function editar()
    {
              
        $id = $this->input->post('id');
        $dados = $this->M_professor->get($id)->result_array()[0];
 $this->session->userdata('tipo_login');
//                 var_dump($dados);exit();
        $this->load->view('professor/cadProfessor', $dados);
    }
    
    public function apagar()
    {
        $id = $this->input->post('id');
        
        if ($this->M_professor->delete($id)) {
            $variaveis['mensagem'] = "Dados gravados com sucesso!";
            // $this->load->view('v_sucesso', $variaveis);
            var_dump('succes');
            exit();
        } else {
            $variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente.";
            // $this->load->view('errors/html/v_erro', $variaveis);
        }
    }

   public function cadastrar () {
       $data['tipo'] = $_SESSION['tipo_login'];
       $this->load->view('professor/cadProfessor',$data);
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
            $this->load->view('professor/cadProfessor', $variaveis);
        } else {
            $id = $this->input->post('id'); 
            $dados = array(
                "matricula" => $this->input->post('matricula'),
                "nome" => $this->input->post('nome'),
                "cpf_professor" => (integer) $this->input->post('cpf'),
                "email" => $this->input->post('email')

            );
            if ($this->M_professor->store($dados, $id)) {
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
