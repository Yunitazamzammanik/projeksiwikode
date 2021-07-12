<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

    function __construct()
  {
    parent::__construct();
    $this->load->model('testimoni_model');
    $this->load->model('wisata_model');
    $this->load->model('jenis_model');
    $this->load->model('kuliner_model');
    $this->load->model('profesi_model');
  }

    public function index(){
        $this->load->view('admin/index');
    }

    // Testimoni Section

	public function testimoni()
	{
    $data['testimoni'] = $this->testimoni_model->getAll();
    $this->load->view('admin/testimoni/index', $data);
	}

  function add_new_testimoni()
  {
    $data['wisata'] = $this->wisata_model->getAll();
    $data['profesi'] = $this->profesi_model->getAll();
    $this->load->view('admin/testimoni/add_testimoni_view', $data);
  }

  function save_testimoni(){
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $wisata_id = $this->input->post('wisata_id');
    $profesi_id = $this->input->post('profesi_id');
    $rating = $this->input->post('rating');
    $komentar = $this->input->post('komentar');
    $this->testimoni_model->save($nama,$email,$wisata_id,$profesi_id,$rating,$komentar);
    redirect('admin/testimoni');
  }

  function delete_testimoni()
  {
    $testimoni_id = $this->uri->segment('3');
    $this->testimoni_model->delete($testimoni_id);
    redirect('admin/testimoni');
  }

  function get_edit_testimoni()
  {
    $testimoni_id = $this->uri->segment('3');
    $wisata = $this->wisata_model->getAll();
    $profesi = $this->profesi_model->getAll();
    $result = $this->testimoni_model->get_testimoni($testimoni_id);
    
    if($result->num_rows() > 0)
    {
      $i = $result->row_array();
      $data = array
      (
        'id' => $i['id'],
        'nama' => $i['nama'],
        'email' => $i['email'],
        'wisata_id' => $i['wisata_id'],
        'profesi_id' => $i['profesi_id'],
        'rating' => $i['rating'],
        'komentar' => $i['komentar'],
        'wisata' => $wisata,
        'profesi' => $profesi
      );
      $this->load->view('admin/testimoni/edit_testimoni_view', $data);
    }
    else
    {
      echo "Data Was Not Found";
    }
  }

  function update_testimoni()
  {
    $id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $wisata_id = $this->input->post('wisata_id');
    $profesi_id = $this->input->post('profesi_id');
    $rating = $this->input->post('rating');
    $komentar = $this->input->post('komentar');
    $this->testimoni_model->update($id,$nama,$email,$wisata_id,$profesi_id,$rating,$komentar);
    redirect('admin/testimoni');
  }

  function detail_testimoni()
  {
    $testimoni_id = $this->uri->segment('3');
    $result = $this->testimoni_model->get_testimoni($testimoni_id);
    if($result->num_rows() > 0)
    {
      $i = $result->row_array();
      $data = array
      (
        'id' => $i['id'],
        'nama' => $i['nama'],
        'email' => $i['email'],
        'wisata_id' => $i['wisata_id'],
        'profesi_id' => $i['profesi_id'],
        'rating' => $i['rating'],
        'komentar' => $i['komentar']
      );
      $this->load->view('admin/testimoni/detail_testimoni_view', $data);
    }
    else
    {
      echo "Data Was Not Found";
    }
  }

//   End of Testimoni Section

//   Wisata Section
  public function wisata()
	{
    $data['wisata'] = $this->wisata_model->getAll();
    $this->load->view('admin/wisata/index', $data);  
	}

    function detail_wisata()
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
      $this->load->view('admin/wisata/detail_wisata_view', $data);
    }
    else
    {
      echo "Data Was Not Found";
    }
  }

  function add_new_wisata()
  {
    $data['jenis_wisata'] = $this->jenis_model->getAll();
    $data['jenis_kuliner'] = $this->kuliner_model->getAll();
    $this->load->view('admin/wisata/add_wisata_view', $data);
  }

  function save_wisata(){
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
    redirect('admin/wisata');
  }

  function delete_wisata()
  {
    $wisata_id = $this->uri->segment('3');
    $this->wisata_model->delete($wisata_id);
    redirect('admin/wisata');
  }

  function get_edit_wisata()
  {
    $wisata_id = $this->uri->segment('3');
    $result = $this->wisata_model->get_wisata($wisata_id);
    $jenis_wisata = $this->jenis_model->getAll();
    $jenis_kuliner = $this->kuliner_model->getAll();
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
        'jenis_kuliner_id' => $i['jenis_kuliner_id'],
        'jenis_wisata' => $jenis_wisata,
        'jenis_kuliner' => $jenis_kuliner
      );
      $this->load->view('admin/wisata/edit_wisata_view', $data);
    }
    else
    {
      echo "Data Was Not Found";
    }
  }

  function update_wisata()
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
    redirect('admin/wisata');
  }

}
// End of Wisata Section
?>