<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Penghuni extends MY_Controller {
	public function __construct(){
    parent::__construct();
    $this->load->model('m_penghuni');
		$this->load->helper(array('form', 'security'));
		$this->load->library('form_validation');
		// if(!isset($this->session->nama))
    // {
    //   $this->session->set_flashdata('message', "Harus login dulu ya");
    //   redirect('C_Front/form');
    // }
  }
	public function index(){
    $data['penghuni'] = $this->m_penghuni->list_penghuni();
		$this->load->view('penghuni/list_penghuni', $data);
	}
	public function edit_penghuni($id){
    $data['penghuni'] = $this->m_penghuni->list_penghuni($id);
		$this->load->view('penghuni/update_penghuni', $data);
	}
	public function tambah_penghuni(){
		$this->load->view('penghuni/tambah_penghuni');
	}
	public function save_penghuni($id=""){
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;

		$this->load->library('upload', $config);
		if($this->upload->do_upload('foto')){
			$this->m_penghuni->save($id);
			redirect('C_Penghuni');
		}
		else{
			echo "gagal upload";
		}

	}

}
