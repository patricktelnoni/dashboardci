<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Mahasiswa extends MY_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->library('table');
        $this->load->model('m_mahasiswa');
	}

    public function data_mahasiswa(){
        $data['mhs'] = $this->m_mahasiswa->getMhs();
        $this->load->view('data_mahasiswa', $data);
    }



    public function index(){
		$this->load->view('getApi');
	}
	public function detail_mahasiswa(){
		$data['mhs'] = $this->m_mahasiswa->getMhs();
		$this->load->view('detail_mahasiswa', $data);
	}


	public function save(){
		$this->m_mahasiswa->save();
		redirect('c_mahasiswa/data_mahasiswa');
	}

	public function form_mahasiswa(){
		$this->load->view('form_mahasiswa');
	}
	public function tabel_mahasiswa(){
		$this->load->view('vuetable');
	}
	public function cek_mahasiswa(){
    $mahasiswa = array(
                    array('andi',	'1234',	'21-02-1997', 'Bandung',	'3,5'),
                    array('budi',	'4321',	'21-04-1998',	'Cimahi',	'3,1'),
                    array('Citra', '7890',	'14-02-1996',	'Padalarang',	'2,81')
                );
		$nim    = $this->input->post('nim');
		$nama 	= $this->input->post('nama');

		$this->form_validation->set_rules('nim',
                                  'NIM', 'required|numeric');
		$this->form_validation->set_rules('nama',
                                  'NAMA', 'required|alpha');
		if ($this->form_validation->run()){
      for($i=0;$i<count($mahasiswa);$i++){
        if($mahasiswa[$i][0]  == $nama
            AND $mahasiswa[$i][1] == $nim)
        {
            array_push($data['kirim'], $mahasiswa[$i]);
            break;
        }
        else{
          $data['kirim'] = array();
        }
      }
			$this->load->view('hasil_mahasiswa', $data);
		}
		else{
			$this->load->view('form_mahasiswa');
		}

	}
}
