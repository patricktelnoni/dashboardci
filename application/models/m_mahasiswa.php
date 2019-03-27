<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mahasiswa extends CI_Model {
	public function __construct(){
       parent::__construct();
	}
	public function getMhs(){
        //sesuaikan dengan nama tabel
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

	public function getreport(){
		$sql = $this->db->query("
				SELECT MONTHNAME(tanggal_datang) as bulan, 
						COUNT(*) as jumlah_paket
				FROM paket
				WHERE YEAR(tanggal_datang) = 2018
				GROUP BY MONTH(tanggal_datang)");
		return $sql->result_array();
	}
}
