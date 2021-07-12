<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      $this->load->model('wisata_model');
    }

	public function index()
	{
    $data['wisata'] = $this->wisata_model->getAll();
    $this->load->view('admin/wisata/index', $data);  
	}

  function add_new()
  {
    $this->load->view('admin/wisata/add_wisata_view');
  }

  function save(){
    $nama = $this->input->post('nama');
    $deskripsi = $this->input->post('deskripsi');
    $jenis_wisata_id = $this->input->post('jenis_wisata_id');
    $fasilitas = $this->input->post('fasilitas');
    $bintang = $this->input->post('bintang');
    $kontak = $this->input->post('kontak');
    $alamat = $this->input->post('alamat');
    $latlong = $this->input->post('latlong');
    $email = $this->input->post('email');
    $web = $this->input->post('web');
    $jenis_kuliner_id = $this->input->post('jenis_kuliner_id');
    $this->wisata_model->save($nama,$deskripsi,$jenis_wisata_id,$fasilitas,$bintang,$kontak,$alamat,$latlong,$email,$web,$jenis_kuliner_id);
    redirect('wisata');
  }

  function delete()
  {
    $wisata_id = $this->uri->segment('3');
    $this->wisata_model->delete($wisata_id);
    redirect('wisata');
  }

  function get_edit()
  {
    $wisata_id = $this->uri->segment('3');
    $result = $this->wisata_model->get_wisata($wisata_id);
    if($result->num_rows() > 0)
    {
      $i = $result->row_array();
      $data = array
      (
        'id' => $i['id'],
        'nama' => $i['nama'],
        'deskripsi' => $i['deskripsi'],
        'jenis_wisata_id' => $i['jenis_wisata_id'],
        'fasilitas' => $i['fasilitas'],
        'bintang' => $i['bintang'],
        'kontak' => $i['kontak'],
        'alamat' => $i['alamat'],
        'latlong' => $i['latlong'],
        'email' => $i['email'],
        'web' => $i['web'],
        'jenis_kuliner_id' => $i['jenis_kuliner_id']
      );
      $this->load->view('wisata/edit_wisata_view', $data);
    }
    else
    {
      echo "Data Was Not Found";
    }
  }

  function update()
  {
    $id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $deskripsi = $this->input->post('deskripsi');
    $jenis_wisata_id = $this->input->post('jenis_wisata_id');
    $fasilitas = $this->input->post('fasilitas');
    $bintang = $this->input->post('bintang');
    $kontak = $this->input->post('kontak');
    $alamat = $this->input->post('alamat');
    $latlong = $this->input->post('latlong');
    $email = $this->input->post('email');
    $web = $this->input->post('web');
    $jenis_kuliner_id = $this->input->post('jenis_kuliner_id');
    $this->wisata_model->update($id,$nama,$deskripsi,$jenis_wisata_id,$fasilitas,$bintang,$kontak,$alamat,$latlong,$email,$web,$jenis_kuliner_id);
    redirect('wisata');
  }

}
