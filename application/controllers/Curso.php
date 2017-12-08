<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller {

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
	public function index()
	{
	   $this->listar();
	}

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_curso');
    }
//    public function index()
//    {
//
//    }

    public function listar ()
    {
        $data['cursos'] = $this->M_curso->get()->result();
        $data['tipo'] = $this->session->userdata('tipo_login');
//         var_dump($data);exit();
        $this->load->view('curso/listCurso',$data);

    }

   public function cadastrar () 
   {
       $data['tipo'] = $this->session->userdata('tipo_login');
       $this->load->view('curso/cadCurso', $data);
   }
   
   public function editar()
   {
       
       $id = $this->input->post('id');
//        var_dump($this->M_curso->get($id)->result_array());exit();
       $dados['tipo'] = $this->session->userdata('tipo_login');
       $dados = $this->M_curso->get($id)->result_array()[0];
       $this->load->view('curso/cadCurso', $dados);
   }
   
   public function apagar()
   {
       $id = $this->input->post('id');
       
       if ($this->M_curso->delete($id)) {
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
                'field' => 'nome_curso',
                'label' => 'Nome',
                'rules' => 'required'
            )
        );
//
        $this->form_validation->set_rules($regras);

        if ($this->form_validation->run() == FALSE) {
            $variaveis['titulo'] = 'Novo Registro';
            $this->load->view('curso/cadCurso', $variaveis);
        } else {

            $id = $this->input->post('id');

            $dados = array(
                "nome_curso" => $this->input->post('nome_curso'),
                "valor_curso" => (integer) $this->input->post('valor_curso')

            );
            if ($this->M_curso->store($dados, $id)) {
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
