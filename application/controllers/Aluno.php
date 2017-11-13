<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aluno extends CI_Controller
{//teste

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * http://example.com/index.php/welcome
     * - or -
     * http://example.com/index.php/welcome/index
     * - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * 
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        //hue
        parent::__construct();
        $this->load->model('M_aluno');
    }

    public function index()
    {
        $this->listar();
    }

    public function listar()
    {
        $data['alunos'] = $this->M_aluno->get()->result();
        $this->load->view('aluno/listAluno', $data);
    }
    
    public function editar()
    {
        $this->load->model('M_turma');
        
        $id = $this->input->post('id');
        $dados = $this->M_aluno->get($id)->result_array()[0];
        $dados['resultado'] = $this->M_turma->get()->result_array();
//         var_dump($dados);exit();
        $this->load->view('aluno/cadAluno', $dados);
    }
    
    public function apagar()
    {
        $id = $this->input->post('id');
        
        if ($this->M_aluno->delete($id)) {
            $variaveis['mensagem'] = "Dados gravados com sucesso!";
            // $this->load->view('v_sucesso', $variaveis);
            var_dump('succes');
            exit();
        } else {
            $variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente.";
            // $this->load->view('errors/html/v_erro', $variaveis);
        }
    }
    

    public function cadastrar()
    {
        $this->load->model('M_turma');
        
        // var_dump($this->M_turma->get()->result());exit();
        $data['resultado'] = $this->M_turma->get()->result_array();
        $this->load->view('aluno/cadAluno', $data);
    }

    public function store()
    {
        $this->load->library('form_validation');
        // $regras = array();
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
            $this->load->view('aluno/cadAluno', $variaveis);
        } else {
            // var_dump('hue');exit();
            $id = $this->input->post('id');
            
            $dados = array(
                "nome" => $this->input->post('nome'),
                "data_nascimento" => $this->input->post('data_nasc_aluno'),
                "rg_aluno" => $this->input->post('rg_aluno'),
                "nome_mae" => $this->input->post('mae_aluno'),
                "cpf_mae" => $this->input->post('CPF_mae_aluno'),
                "cpf_pai" => $this->input->post('CPF_pai_aluno'),
                "nome_pai" => $this->input->post('pai_aluno'),
                "serie_id" => (integer) $this->input->post('turma')
            
            );
            if ($this->M_aluno->store($dados, $id)) {
                $variaveis['mensagem'] = "Dados gravados com sucesso!";
                // $this->load->view('v_sucesso', $variaveis);
                var_dump('succes');
                exit();
            } else {
                $variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente.";
                // $this->load->view('errors/html/v_erro', $variaveis);
            }
        }
    }
}
