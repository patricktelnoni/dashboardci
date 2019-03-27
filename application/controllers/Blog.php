<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {
	public function __construct(){
    parent::__construct();
  }
  public function halaman1(){
    $data['kiriman'] = array(1,2,3,4,5);
    $this->load->view('halaman1', $data);
  }
	public function cek_nik(){
		echo date("Y-m-d");
		$nik = "1234562109960014";
		$cekkota =  substr($nik, 0, 2);
		if($cekkota == "21")
			echo "urang bandung";
		else
			echo "orang luar";

	}
	public function cek_tanggal(){
		$tanggal = "03/04/2018";
		$pecah	 = explode("/",$tanggal);
		$data['hasil'] = $tanggal;
		$this->load->view('cek_tanggal', $data);
	}

  public function cetak(){
		$this->load->model('m_mahasiswa');
		$this->load->library('table');
		$data['mahasiswa'] = $this->m_mahasiswa->getMhs();
    $this->load->view('cetak', $data);
  }
  public function dua(){
    $data['tiga'] 		= array(1,2,3,4,5);
    $this->load->view('halaman2', $data);
  }
  public function kirim(){
    $nama = $this->input->post('nama');
    echo $nama;
  }
	public function kalkulator(){
	    $string['nama'] = "Isi string";
		$this->load->view('kalkulator/kalkulator', $string);
	}
	public function hitung(){
		$method = $this->input->post('operasi');
		$angka1 = $this->input->post('angka1');
		$angka2 = $this->input->post('angka2');
		switch ($method) {
			case '+':
				$hasil = $angka1+$angka2;
				break;
			case '-':
				$hasil = $angka1-$angka2;
				break;
			case '*':
				$hasil = $angka1*$angka2;
				break;
			default:
				$hasil = $angka1/$angka2;
				break;
		}
		$data['hasil']  	= $hasil;
		$data['angka1'] 	= $angka1;
		$data['angka2']		= $angka2;
		$data['method']		= $method;
		$this->load->view('kalkulator/hasil', $data);
	}
	public function formbiodata(){
		$this->load->view('formbiodata');
	}
	public function cekkirim(){
		$nama = $this->input->post('nama');
		$nim 	= $this->input->post('nim');
		$tgl 	= $this->input->post('tanggal');
		if(strlen($nama) 	== 0 ||
			strlen($nim) 		== 0 ||
			strlen($tgl) 	== 0)
			{
				redirect('Blog/formbiodata');
			}
			else{
				$data['nama'] = $nama;
				$data['nim'] 	= $nim;
				$data['tgl'] 	= $tgl;
				$this->load->view('hasil', $data);
			}
	}
}
