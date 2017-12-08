<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 07/12/2017
 * Time: 12:21
 */

class Usuarios_model extends CI_Model{
    public function buscaPorEmailSenha($email, $senha){
        $this->db->where("login", $email);
        $this->db->where("senha", $senha);
        $usuario = $this->db->get("login")->row_array();
        return $usuario;
    }
}