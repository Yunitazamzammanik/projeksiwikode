<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

	//check user sudah login atau belum
	public function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}
	public function index()
	{	
		$this->load->model('Jenis_model');
		$data['jenis_wisata'] = $this->Jenis_model->getAllData();
		$this->load->view('Jenis/index',$data);
	}

	public function delete($id){
		//delete * from pasien where id = id
		$this->load->model('Jenis_model');//load model
		$where = array('id' => $id);
		$this->Jenis_model->delete(array('id'=>$id),'jenis_wisata');// query delete(delete from pasien where id = $id)
		redirect('Jenis/index');


	}

	public function save(){
		
		$this->load->view('Jenis/tambah_Jenis');
	}
	
	public function tambah(){
		
		//panggil model
		$this->load->model('Jenis_model');
		
		//tambah data
		$data['nama_Jenis_wisata'] = $this->input->post('nama');
		//method save data
		$this->Jenis_model->save($data);

		//redirect	
		return redirect('Jenis/index');


	}
	public function view($id){
		$this->load->model('Jenis_model');
		$data['Jenis_wisata'] = $this->Jenis_model->findById($id);
		$this->load->view('Jenis/view',$data);
	}

	public function edit($id){
		$this->load->model('Jenis_model');
		$data['Jenis_wisata'] = $this->jenis_model->findById($id);
		$this->load->view('Jenis/edit',$data);
	}

	public function update(){
		//panggil model
		$this->load->model('Jenis_model');
		

		//inputan id
		$id = $this->input->post('id');
		
		//tambah data
		$data['nama'] = $this->input->post('nama');

		//method update data
		$this->Jenis_model->update($data,$id);

		//redirect	
		return redirect('Jenis/index');


	}
	

}