<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Flashdata extends CI_Model {
	public function __construct(){
        parent::__construct();
	}

	public function login(){
        $nama   = $this->input->post('Nama');
        $nim    = $this->input->post('Nim');
            return $this->db->get_where('mahasiswa', array('nama' => $nama,
                                                    'nim' => $nim));
	}

}
