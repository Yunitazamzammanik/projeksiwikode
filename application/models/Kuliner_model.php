<?php

class Kuliner_model extends CI_Model{

    // Model Jenis Kuliner

    public function getAll()
    {
        $result = $this->db->get('jenis_kuliner');
        return $result;
    }

    function get_jenis_wisata($id)
    {
        $query = $this->db->get_where('testimoni', array('id' => $id));
        return $query;
    }

    function save($nama,$email,$wisata_id,$profesi_id,$rating,$komentar){
        $data = array(
          'nama' => $nama,
          'email' => $email,
          'wisata_id' => $wisata_id,
          'profesi_id' => $profesi_id,
          'rating' => $rating,
          'komentar' => $komentar,
        );
        $this->db->insert('testimoni',$data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('testimoni');
    }

    function update($id,$nama,$email,$wisata_id,$profesi_id,$rating,$komentar){
        $data = array(
          'nama' => $nama,
          'email' => $email,
          'wisata_id' => $wisata_id,
          'profesi_id' => $profesi_id,
          'rating' => $rating,
          'komentar' => $komentar,
        );
        $this->db->where('id', $id);
        $this->db->update('testimoni', $data);
    }
}


  
?> 