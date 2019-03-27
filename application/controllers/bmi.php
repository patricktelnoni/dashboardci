<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmi extends MY_Controller {
	public function __construct(){
    parent::__construct();
  }
    public function form_login(){
        $this->load->view('form_bmi');
    }
	public function form_bmi(){
		$this->load->view('form_bmi');
	}
	public function hitung_bmi(){

		$this->form_validation->set_rules('tinggi',
                                  'Tinggi', 'required|numeric|min_length[5]');
		$this->form_validation->set_rules('berat',
                                  'Berat Badan', 'required|numeric');

		if ($this->form_validation->run()){
			$tinggi = $this->input->post('tinggi')/100;
			$berat 	= $this->input->post('berat');
			$jk	 		= $this->input->post('jk');
			$bmi		= $berat/($tinggi*$tinggi);
			if($jk == 'perempuan'){
				if($bmi < 18)
					$data['kategori'] = 'underweight';
				elseif($bmi >= 18 and $bmi < 25)
					$data['kategori'] = 'Normal Weight/Normal ';
				elseif($bmi >= 25 and $bmi < 27)
					$data['kategori'] = 'Over Weight/Kegemukan  ';
				else
					$data['kategori'] = 'Obesitas ';
			}
			else{
				if($bmi < 17)
					$data['kategori'] = 'underweight';
				elseif($bmi >= 17 and $bmi < 23)
					$data['kategori'] = 'Normal Weight/Normal ';
				elseif($bmi >= 23 and $bmi < 27)
					$data['kategori'] = 'Over Weight/Kegemukan  ';
				else
					$data['kategori'] = 'Obesitas ';
			}
			$data['bmi'] 			= $bmi;
			$data['tinggi'] 	= $tinggi;
			$data['berat'] 		= $berat;
			$this->load->view('hasil_bmi', $data);
		}
		else{
			$this->load->view('form_bmi');
		}

	}
}
