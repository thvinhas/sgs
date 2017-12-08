<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
public static $tipo;
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
		$this->load->view('login');
	}

    public function autenticar()
    {

        $this->load->model("usuarios_model");// chama o modelo usuarios_model
        $email = $this->input->post("email");// pega via post o email que venho do formulario
        $senha = $this->input->post("password"); // pega via post a senha que venho do formulario
        $usuario = $this->usuarios_model->buscaPorEmailSenha($email,$senha); // acessa a função buscaPorEmailSenha do modelo

        if($usuario){
//var_dump($usuario);exit();
            $this->session->set_userdata("tipo_login", $usuario['tipo']);
            $dados = array("mensagem" => "Logado com sucesso!",'tipo' => $usuario['tipo']);
            $this->load->view("welcome_message", $dados);
        }else{
            $dados = array("mensagem" => "Não foi possível fazer o Login!");
            $this->load->view("login", $dados);
        }


    }


}
