<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesi extends CI_Controller {


	
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}
	public function index()
	{	
		//untuk menampilkan data
		$this->load->model('profesi_model');//load model
		$data['profesi'] = $this->profesi_model->getAll(); //query select all data
		$this->load->view('admin/profesi/index',$data);
	}

	public function view($id){
		
		$this->load->model('profesi_model');
		$data['profesi'] = $this->profesi_model->findById($id);
		$this->load->view('profesi/view',$data);
	}

    public function delete($id){
        
		//untuk menghapus data
        $this->load->model('profesi_model');//load model
		$where = array('id' => $id);
		$this->profesi_model->delete($where,'profesi');// query delete(delete from profesi where id = $id)
		redirect('profesi/index');
	}

	

	//add data
	public function add(){
		$this->load->library('form_validation');
		$this->load->view('admin/profesi/tambah_profesi');
	}

	public function tambah(){
	
		$this->load->model('profesi_model');

		$str = rand(); 
		$result = md5($str);
		$data['nama'] =$this->input->post('nama');
		

		
		//ambil fungsi upload foto dari model
		$this->profesi_model->save($data);
		redirect('profesi/index');
	}

	//edit data

	public function edit($id){
		$this->load->model('profesi_model');
		$data['profesi'] = $this->profesi_model->get_profesi($id);
		$this->load->view('admin/profesi/edit',$data);
	}

	public function update(){
	
		
		$this->load->model('profesi_model');
		$id = $this->input->post('id');
		$str = rand();
		$result = md5($str);
		
		$data['nama'] =$this->input->post('nama');
		$data['foto'] = $this->profesi_model->upload_foto();
		
		
		//upload file
		
		$this->profesi_model->update($data,$id);
		redirect('profesi/index');
	}


	

}