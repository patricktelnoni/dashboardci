<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baru extends CI_Controller {
	public function __construct(){
    parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
  }
	public function index(){
		echo "Index";
	}
	//localhost/CI3/index.php/baru/form
	public function form(){
		$this->load->view('form');
	}
  public function methodBaru(){
    $this->load->view('baru');
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
