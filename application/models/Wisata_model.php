<?php

class Wisata_model extends CI_Model{

    public function getAll()
    {
        $result = $this->db->get('wisata');
        return $result;
    }

    function get_wisata($id)
    {
        $query = $this->db->get_where('wisata', array('id' => $id));
        return $query;
    }

    function save($nama,$deskripsi,$jenis_wisata_id,$fasilitas,$bintang,$kontak,$alamat,$latlong,$email,$web,$jenis_kuliner_id){
        if ($jenis_kuliner_id == '') {
            $data = array(
                'nama' => $nama,
                'deskripsi' => $deskripsi,
                'jenis_wisata_id' => $jenis_wisata_id,
                'fasilitas' => $fasilitas,
                'bintang' => $bintang,
                'kontak' => $kontak,
                'alamat' => $alamat,
                'latlong' => $latlong,
                'email' => $email,
                'web' => $web
            );
        } else {
        $data = array(
          'nama' => $nama,
          'deskripsi' => $deskripsi,
          'jenis_wisata_id' => $jenis_wisata_id,
          'fasilitas' => $fasilitas,
          'bintang' => $bintang,
          'kontak' => $kontak,
          'alamat' => $alamat,
          'latlong' => $latlong,
          'email' => $email,
          'web' => $web,
          'jenis_kuliner_id' => $jenis_kuliner_id
        );
        }
        $this->db->insert('wisata',$data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('wisata');
    }

    function update($id,$nama,$deskripsi,$jenis_wisata_id,$fasilitas,$bintang,$kontak,$alamat,$latlong,$email,$web,$jenis_kuliner_id){
        if ($jenis_kuliner_id == '') {
            $data = array(
                'nama' => $nama,
                'deskripsi' => $deskripsi,
                'jenis_wisata_id' => $jenis_wisata_id,
                'fasilitas' => $fasilitas,
                'bintang' => $bintang,
                'kontak' => $kontak,
                'alamat' => $alamat,
                'latlong' => $latlong,
                'email' => $email,
                'web' => $web
            );
        } else {
        $data = array(
          'nama' => $nama,
          'deskripsi' => $deskripsi,
          'jenis_wisata_id' => $jenis_wisata_id,
          'fasilitas' => $fasilitas,
          'bintang' => $bintang,
          'kontak' => $kontak,
          'alamat' => $alamat,
          'latlong' => $latlong,
          'email' => $email,
          'web' => $web,
          'jenis_kuliner_id' => $jenis_kuliner_id
        );
        }
        $this->db->where('id', $id);
        $this->db->update('wisata', $data);
    }
}