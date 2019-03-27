<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Paket extends CI_Model {
	public function __construct(){
    parent::__construct();

  }
  public function getTotalPaket(){
	    return $this->db->get('paket');
  }

  public function getPaketLimit($halaman, $jumlah){
      return $this->db->query("
              SELECT * 
              from PAKET 
              LEFT join penghuni 
                ON penghuni.idpenghuni = paket.sasaran
                LIMIT $halaman,$jumlah");

  }
  public function list_paket($id=""){
        if($id==""){
      // $this->db->select('*');
      // $this->db->from('paket');
      // $this->db->join('penghuni', 'penghuni.idpenghuni = paket.sasaran', 'left');
      // return $this->db->get();

			return $this->db->query("
              SELECT * 
              from PAKET 
              LEFT join penghuni 
                ON penghuni.idpenghuni = paket.sasaran");
    }

    else
      return $this->db->get_where('paket', array('idpaket' => $id));
			//SELECT * FROM PAKET WHERE idpaket = $id
	}

  public function save($id=""){
    $tujuan 	 = $this->security->xss_clean($this->input->post('penghuni'));
    $isi 		   = $this->security->xss_clean($this->input->post('isi'));

		$this->db->set('isi_paket',  $isi);
		$this->db->set('penerima',  $this->session->nama);
		$this->db->set('sasaran',  $tujuan);
    if($id == ""){
      $this->db->set('tanggal_datang',  date("Y-m-d"));
		  $this->db->insert('paket');
    }
    else{
      $this->db->set('tanggal_ambil',  date("Y-m-d"));
      $this->db->where('idpaket', $id);
		  $this->db->update('paket');
    }
	}
}
