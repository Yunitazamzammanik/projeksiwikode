<?php

class Profesi_model extends CI_Model{

    // Model Profesi

    public function getAll()
    {
        $result = $this->db->get('profesi');
        return $result;
    }

    function get_profesi($id)
    {
        $query = $this->db->get_where('profesi', array('id' => $id));
        return $query;
    }

    function save($data){
        
        $this->db->insert('profesi',$data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('profesi');
    }

    public function update($data,$id){
       
        //$this->db->update('nama_tabel',data,array_id)

        $this->db->update('profesi',$data,array('id'=>$id));
    }
}