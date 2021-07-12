<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {


	
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}
	public function testimoni(){
        //ambil data join
        $this->load->model('testimoni_model');
        $data['join_testimoni_wisata'] = $this->testimoni_model->jointestimoniwisata(); 
        $this->load->view('testimoni/index',$data);
     } 	

	public function view($id){
		
		$this->load->model('Testimoni_model');
		$data['Testimoni'] = $this->Testimoni_model->findById($id);
		$this->load->view('Testimoni/view',$data);
	}

    public function delete($id){
        
		//untuk menghapus data
        $this->load->model('Testimoni_model');//load model
		$where = array('id' => $id);
		$this->Testimoni_model->delete($where,'Testimoni');// query delete(delete from Testimoni where id = $id)
		redirect('testimoni');
	}

	

	//add data
	public function add(){
		$this->load->library('form_validation');
		$this->load->view('Testimoni/tambah_Testimoni');
	}

	public function save(){
	
		$this->load->model('Testimoni_model');

		$str = rand();- 
		$result = md5($str);
		$data['id'] = $id;
		$data['nama'] =$this->input->post('nama');
        $data['email'] =$this->input->post('email');
        $data['wisata_id'] =$this->input->post('wisata_id');
        $data['profesi_id'] =$this->input->post('profesi_id');
        $data['rating'] =$this->input->post('rating');
        $data['komentar'] =$this->input->post('komentar');
		
		//ambil fungsi upload foto dari model
		$this->Testimoni_model->save($data);
		redirect('Testimoni/index');
	}

	//edit data

	public function edit($id){
		$this->load->model('Testimoni_model');
		$data['join_testimoni_wisata'] = $this->Testimoni_model->jointestimoniwisata(); 
		$this->load->view('Testimoni/edit',$data);
	}

	public function update(){
	
		
		$this->load->model('Testimoni_model');
		$id = $this->input->post('id');
		$str = rand();
		$result = md5($str);
		
		$data['nama'] =$this->input->post('nama');
		$data['nama'] =$this->input->post('nama');
        $data['email'] =$this->input->post('email');
        $data['wisata_id'] =$this->input->post('wisata_id');
        $data['profesi_id'] =$this->input->post('profesi_id');
        $data['rating'] =$this->input->post('rating');
        $data['komentar'] =$this->input->post('komentar');
		
		
		//upload file
		
		$this->Testimoni_model->update($data,$id);
		redirect('Testimoni/index');
	}


	

}