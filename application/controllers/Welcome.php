<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
    private $user = array(
        array("username" => "andi", "password" => 1234),
        array("username" => "budi", "password" => 4321),
        array("username" => "charlie", "password" => 3821),
    );

	public function __construct(){
		parent::__construct();
	}
    public function dologin(){
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[8]');
        $this->form_validation->set_rules('password', 'Password', 'required|numeric');

	    if($this->form_validation->run()){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if($username == "abcdefghi" AND $password == "12345678"){
                redirect('Welcome/data');
            }
            else{
                echo "tak sesuai";
            }
	    }
	    else{
            $this->load->view('form_login');
        }

    }
    public function data(){

            $this->load->library('table');
            $data['user'] = $this->user;
	        $this->load->view('data', $data);

    }
    public function logout(){
	    session_destroy();
	    redirect("Welcome/formlogin");
    }

    public function formlogin(){
	    $this->load->view('form_login');
    }
	public function index(){
		// echo "ini di method index";
		$this->load->view('welcome_message');
	}

	public function secondMethod(){
		echo "Second method";
	}

	public function vue(){
        $this->load->view('vuetable');
	}
	public function login(){
		$this->form_validation->set_rules('username', '<b>Nama user</b>', 'required|min_length[4]');
		$this->form_validation->set_rules('sandi', '<b>Kata sandi</b>', 'required|min_length[4]');

		if ($this->form_validation->run() == FALSE)
			 $this->load->view('form');
		else{
			if($this->input->post('username') == 'abcde' AND
				$this->input->post('sandi') == '1234')
				$this->load->view('sukses');
			else
				redirect('baru/form');
		}
	}
	public function registrasi(){
		$this->load->view('registrasi');
	}
	public function daftar(){
		$this->form_validation->set_rules('nama', '<b>Nama</b>', 'required|min_length[4]');
		$this->form_validation->set_rules('nim', '<b>Nim</b>', 'required|min_length[4]');
		$this->form_validation->set_rules('jenis_kelamin', '<b>Jenis Kelasmin</b>', 'required');
		$this->form_validation->set_rules('fakultas', '<b>Fakultas</b>', 'required');
		if ($this->form_validation->run()){
	
			$data['nama'] 					= $this->input->post('nama');
			$data['nim'] 						= $this->input->post('nim');
			$data['jenis_kelamin'] 	= $this->input->post('jenis_kelamin');
			$data['fakultas'] 			= $this->input->post('fakultas');
			$data['hobby'] 					= array();

			for($i=0;$i<count($this->input->post('hobby'));$i++){
				array_push($data['hobby'], $this->input->post('hobby')[$i]);
			}

			$this->load->view('hasil_registrasi', $data);
		}
		else{
			$this->load->view('registrasi');
		}

	}
}
