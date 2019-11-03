<?php

class Jawaban_Model extends CI_Model{

    public function get($id){
        if($id != null){
            $this->db->where('id_jawaban', $id['id_Jawaban']);
            $result = $this->db->get('jawaban');
            return $result->result_array();
        }
        else {
            $result = $this->db->get('jawaban');
            return $result->result_array();
        }
    }
    public function insert($data){
        $result = $this->db->insert('jawaban', $data);
        return $result;
    }
    public function update($data){
        $this->db->where("id_jawaban", $data->id_Jawaban);
        $result =  $this->db->update("jawaban", $data);
        return $result;
    }
    public function delete($id){
        $result = $this->db->where('id_jawaban', $id['id_Jawaban']);
        $result = $this->db->delete('jawaban');
        return $result;
    }
}