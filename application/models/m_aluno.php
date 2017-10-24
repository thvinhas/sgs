<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 01/10/2017
 * Time: 13:42
 */

class m_aluno extends CI_Model
{
    private $tabel = 'aluno';

    public function __construct()
    {
        $this->load->database();
    }

    public function store($dados = null, $id = null)
    {
//var_dump('hue');exit();
        if ($dados) {
            if ($id) {
                $this->db->where('id', $id);
                if ($this->db->update($this->tabel, $dados)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                if ($this->db->insert($this->tabel, $dados)) {
                    return true;
                } else {
                    return false;
                }
            }
        }
    }

    public function get($id = null){

        if ($id) {
            $this->db->where('matricula', $id);
        }
        $this->db->order_by("matricula", 'desc');
        return $this->db->get($this->tabel);
    }

    public function delete($id = null){
        if ($id) {
            return $this->db->where('id', $id)->delete($this->tabel);
        }
    }


}
