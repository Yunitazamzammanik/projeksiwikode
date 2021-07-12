<?php

class Jenis_model extends CI_Model{

    // Model Jenis Wisata

    public function getAll()
    {
        $result = $this->db->get('jenis_wisata');
        return $result;
    }

    function get_jenis_wisata($id)
    {
        $query = $this->db->get_where('jenis_wisata', array('id' => $id));
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
        $this->db->delete('wisata');
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