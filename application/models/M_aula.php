<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 01/10/2017
 * Time: 13:42
 */

class M_aula extends CI_Model
{
    private $tabel = 'aula';

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
    
    public function getTurmaByDisciplina($disciplina){
        
        $this->db->select('turma.id,turma.nome,serie.nome as serie,serie.id as idSerie');
        $this->db->from($this->tabel);
        $this->db->join('turma', 'turma.id = aula.id_turma');
        $this->db->join('serie', 'turma.serie_id = serie.id');
        $this->db->where('aula.id_disciplina', $disciplina);
        $this->db->order_by("turma.id", 'desc');
        //        var_dump($this->db->last_query());exit();
        return $this->db->get();
    }


}
