<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuliner extends CI_Controller {

	//check user sudah login atau belum
	public function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}
	public function index()
	{	
		$this->load->model('kuliner_model');
		$data['jenis_kuliner'] = $this->kuliner_model->getAllData();
		$this->load->view('kuliner/index',$data);
	}

	public function delete($id){
		//delete * from pasien where id = id
		$this->load->model('kuliner_model');//load model
		$where = array('id' => $id);
		$this->kuliner_model->delete(array('id'=>$id),'jenis_kuliner');// query delete(delete from pasien where id = $id)
		redirect('kuliner/index');


	}

	public function save(){
		
		$this->load->view('kuliner/tambah_kuliner');
	}
	
	public function tambah(){
		
		//panggil model
		$this->load->model('kuliner_model');
		
		//tambah data
		$data['nama_jenis_kuliner'] = $this->input->post('nama');
		//method save data
		$this->kuliner_model->save($data);

		//redirect	
		return redirect('kuliner/index');


	}
	public function view($id){
		$this->load->model('kuliner_model');
		$data['jenis_kuliner'] = $this->kuliner_model->findById($id);
		$this->load->view('kuliner/view',$data);
	}

	public function edit($id){
		$this->load->model('kuliner_model');
		$data['jenis_kuliner'] = $this->kuliner_model->findById($id);
		$this->load->view('kuliner/edit',$data);
	}

	public function update(){
		//panggil model
		$this->load->model('kuliner_model');
		

		//inputan id
		$id = $this->input->post('id');
		
		//tambah data
		$data['nama'] = $this->input->post('nama');

		//method update data
		$this->kuliner_model->update($data,$id);

		//redirect	
		return redirect('kuliner/index');


	}
	

}