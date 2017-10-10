<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 01/10/2017
 * Time: 13:42
 */

class m_curso extends CI_Model
{
    private $tabel = 'crs_curso';

    public function __construct()
    {
        $this->load->database();
    }

    public function store($dados = null, $id = null)
    {

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
            $this->db->where('id', $id);
        }
        $this->db->order_by("id", 'desc');
        return $this->db->get($this->tabel);
    }

    public function delete($id = null){
        if ($id) {
            return $this->db->where('id', $id)->delete($this->tabel);
        }
    }


}
