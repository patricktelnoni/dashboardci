<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mahasiswa extends CI_Model {
	public function __construct(){
    parent::__construct();

  }
	public function getMhs($id=""){
    //sesuaikan dengan nama tabel
		if($id != "")
			return $this->db->get_where('mahasiswa', array('id' => $id));
		else
			return $this->db->get('mahasiswa');
	}

	public function save(){
		$hasil 	= $this->upload->data();
		$nama 	= $this->security->xss_clean($this->input->post('nama'));
    $nim 		= $this->security->xss_clean($this->input->post('nim'));
		$foto		= 'uploads/'.$hasil['file_name'];

		$this->db->set('nama',  $nama);
		$this->db->set('asal',  $nim);
		$this->db->set('foto',  $foto);
		$this->db->insert('mahasiswa');
	}
}
