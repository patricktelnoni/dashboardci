<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flashdata extends MY_Controller {
	public function __construct(){
    parent::__construct();
		$this->load->model('M_Flashdata');
  }
	public function login_form(){
		$this->load->view('form_login');
	}
	public function logout(){
		$this->session->unset_userdata('nama');
		redirect('Flashdata/login_form');
	}
	public function login(){
			$data 									= $this->M_Flashdata->login();
			if($data->num_rows() > 0){
				$res 									= $data->row_array();
				$this->session->nama 	= $res['nama'];
				$this->session->set_flashdata('message', "Berhasil login");
			}
			else
				$this->session->set_flashdata('message', "Gagal login");
			redirect('Flashdata/after_login');
	}
	public function after_login(){
		$this->load->view('hasil_login');
	}

	public function kirim(){
		$string = $this->input->post('Nama');
    $this->session->set_flashdata('pesan', $string);
		redirect('Flashdata/hasil');
	}
	public function hasil(){
		$this->load->view('hasil_flash');
	}
	public function form(){
		$this->load->view('form_flash');
	}
}
