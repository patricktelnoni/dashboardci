<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Penghuni extends CI_Model {
	public function __construct(){
    parent::__construct();
  }
	public function list_penghuni($id=""){
    if($id=="")
		  return $this->db->get('penghuni');
    else
      return $this->db->get_where('penghuni', array('idpenghuni' => $id));
	}
	public function save($id=""){
		$hasil 	= $this->upload->data();
		$foto		= 'uploads/'.$hasil['file_name'];

		$this->db->set('nama',  $this->input->post('nama'));
		$this->db->set('unit',  $this->input->post('unit'));
		$this->db->set('noktp', $this->input->post('ktp'));
		$this->db->set('foto', $foto);

		// $this->db->query("INSERT INTO PENGHUNI(nama, unit, noktp) 
		// 									VALUES($this->input->post('nama'), $this->input->post('unit'),
		// 												$this->input->post('ktp'))");
    if($id=="")
		  $this->db->insert('penghuni');
    else{
			$this->db->where('idpenghuni', $id);
		  $this->db->update('penghuni');
		}

	}
}
