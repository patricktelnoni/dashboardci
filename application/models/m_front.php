<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Front extends CI_Model {
	public function __construct(){
    parent::__construct();

  }
	public function login(){
    $username = $this->input->post('nama');
    $password = $this->input->post('password');
		return $this->db->get_where('karyawan', array('nama' => $username, 'password' => md5($password)));
	}
}
