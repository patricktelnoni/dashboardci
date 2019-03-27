<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Front extends MY_Controller {
	public function __construct(){
    parent::__construct();
    $this->load->model('m_front');
		$this->load->helper('form');
		$this->load->library('form_validation');
  }
	public function form(){
		$this->load->view('front/form_login');
	}
  public function login (){
    $login = $this->m_front->login();
    if ($login->num_rows() >0)
    {
				$data 							 = $login->row_array();
				$this->session->nama = $data['nama'];
				$this->session->tipe_user = 'donatur';
				redirect('c_paket/');
		}
    else{
      $this->session->set_flashdata('message', "Gagal login");
      redirect('C_Front/form');
    }
  }

	public function logout(){
		$this->session->unset_userdata('nama');
		redirect('C_Front/form');
	}

}
