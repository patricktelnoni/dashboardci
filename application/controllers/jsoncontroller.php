<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jsoncontroller extends CI_Controller {
	public function __construct(){
    parent::__construct();
		$this->load->model('m_mahasiswa');
		header("Content-Type:application/json");
  }
  public function getData(){
      $query  = $this->m_mahasiswa->getMhs();
      $json   = array();
      $i      = 0;
      foreach ($query->result_array() as $res) {
        $json[$i]['id']           	= $res['id'];
        $json[$i]['foto']           = $res['foto'];
        $json[$i]['nama']           = $res['nama'];
        $json[$i]['asal']           = $res['asal'];
        $json[$i]['tanggal_lahir']  = $res['tanggal_lahir'];
        $i++;
      }
      echo json_encode($json);
  }

}
