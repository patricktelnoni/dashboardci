<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baru extends MY_Controller{
	public function __construct(){
        parent::__construct();
    }
	public function index(){
        $this->load->view('welcome_message');
	}
	//localhost/CI3/index.php/baru/form
	public function form(){
		$this->load->view('form');
	}

	public function laporan(){
		$this->load->model("m_mahasiswa");
		$data['report'] = $this->m_mahasiswa->getreport();
		$this->load->view('paket/report', $data);
	}



	
  public function methodBaru(){
    $data['kiriman'] = array(1,2,3,4,5);
    $this->load->view('baru', $data);
	}
	//localhost/CI3/index.php/baru/sampelkonten
  public function sampelkonten(){
	    $data['isivariabel'] = "Contoh kiriman dari controller";
        $this->load->view('konten', $data);
  }
	public function testParam($testParam=""){
		echo $testParam;
	}
	public function jumbotron(){
		$this->load->view('jumbotron');
	}
	public function carousel(){
		$this->load->view('carousel');
	}
}
