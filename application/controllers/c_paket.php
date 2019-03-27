<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Paket extends MY_Controller {
	public function __construct(){
    parent::__construct();
		$this->load->helper('form');
		$this->load->library(array('form_validation'), 'table');
    $this->load->model(array('m_paket', 'm_penghuni'));
    if(!isset($this->session->nama))
    {
    	$this->session->set_flashdata('message', "Harus login dulu ya");
      redirect('C_Front/form');
    }
  }
	public function index(){
        $this->load->library('pagination');
        //sesuaikan base_url di config dengan nama controller dan method anda
        $config['base_url']     = base_url().'index.php/c_paket/index/';
        //total data yang akan ditampilkan, sesuaikan dengan model anda
        $config['total_rows']   = $this->m_paket->getTotalPaket()->num_rows();
        //jumlah data per halaman
        $config['per_page']     = 10;
        //inisialisasi pagination
        $this->pagination->initialize($config);

        if($this->uri->segment(3) != NULL)
            $halaman = $this->uri->segment(3);
        else
            $halaman = 0;
        $data['paket']  = $this->m_paket->getPaketLimit($halaman, $config['per_page']);
		$this->load->view('paket/list_paket', $data);
	}
	public function edit_paket($id){
    $data['penghuni'] = $this->m_penghuni->list_penghuni();
    $data['paket']    = $this->m_paket->list_paket($id);
		$this->load->view('paket/update_paket', $data);
	}
	public function tambah_paket(){
    $data['penghuni'] = $this->m_penghuni->list_penghuni();
		$this->load->view('paket/tambah_paket', $data);
	}
	public function save_paket($id=""){
		$this->m_paket->save($id);
    redirect('C_Paket');
	}

}
