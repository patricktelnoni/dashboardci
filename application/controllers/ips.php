<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ips extends MY_Controller {
	public function __construct(){
    parent::__construct();
  }
	public function form_ips(){
		$this->load->view('nilai_ips');
	}
	public function hitung_ips(){
		$nilaimk1 = $this->input->post('nilaimk1');
		$namamk1 	= $this->input->post('namamk1');
		$jumlahsks1	 		= $this->input->post('jumlahsks1');

    $nilaimk2 = $this->input->post('nilaimk2');
		$namamk2 	= $this->input->post('namamk2');
		$jumlahsks2	 		= $this->input->post('jumlahsks2');

    $nilaimk3 = $this->input->post('nilaimk3');
		$namamk3 	= $this->input->post('namamk3');
		$jumlahsks3	 		= $this->input->post('jumlahsks3');

    $nilaimk4 = $this->input->post('nilaimk4');
		$namamk4 	= $this->input->post('namamk4');
		$jumlahsks4	 		= $this->input->post('jumlahsks4');

    $nilaimk5 = $this->input->post('nilaimk5');
		$namamk5 	= $this->input->post('namamk5');
		$jumlahsks5	 		= $this->input->post('jumlahsks5');

    $nilaimk6 = $this->input->post('nilaimk6');
		$namamk6 	= $this->input->post('namamk6');
		$jumlahsks6	 		= $this->input->post('jumlahsks6');


		$this->form_validation->set_rules('nilaimk1',
                                  'Nilai mata kuliah 1', 'required|numeric');
		$this->form_validation->set_rules('namamk1',
                                  'Nama mata kuliah 1', 'required');
		$this->form_validation->set_rules('jumlahsks1',
                                  'Jumlah SKS mata kuliah 1', 'required|numeric');

    $this->form_validation->set_rules('nilaimk2',
                                              'Nilai mata kuliah 1', 'required|numeric');
    $this->form_validation->set_rules('namamk2',
                                            'Nama mata kuliah 1', 'required');
    $this->form_validation->set_rules('jumlahsks2',
                                            'Jumlah SKS mata kuliah 1', 'required|numeric');

    $this->form_validation->set_rules('nilaimk3',
                                                                'Nilai mata kuliah 1', 'required|numeric');
    $this->form_validation->set_rules('namamk3',
                                                          'Nama mata kuliah 1', 'required');
    $this->form_validation->set_rules('jumlahsks3',
                                                    'Jumlah SKS mata kuliah 1', 'required|numeric');

    $this->form_validation->set_rules('nilaimk4',
                                                  'Nilai mata kuliah 1', 'required|numeric');
    $this->form_validation->set_rules('namamk4',
                                            'Nama mata kuliah 1', 'required');
    $this->form_validation->set_rules('jumlahsks4',
                                                'Jumlah SKS mata kuliah 1', 'required|numeric');

    $this->form_validation->set_rules('nilaimk5',
                                        'Nilai mata kuliah 1', 'required|numeric');
		$this->form_validation->set_rules('namamk5',
                          'Nama mata kuliah 1', 'required');
	 $this->form_validation->set_rules('jumlahsks5',
                                  'Jumlah SKS mata kuliah 1', 'required|numeric');

    $this->form_validation->set_rules('nilaimk6',
                                    'Nilai mata kuliah 1', 'required|numeric');
  	$this->form_validation->set_rules('namamk6',
                                            'Nama mata kuliah 1', 'required');
   $this->form_validation->set_rules('jumlahsks6',
                                    'Jumlah SKS mata kuliah 1', 'required|numeric');
		if ($this->form_validation->run()){
				$indeksmk1 = $this->hitungRangeNilai($nilaimk1);
				$indeksmk2 = $this->hitungRangeNilai($nilaimk2);
				$indeksmk3 = $this->hitungRangeNilai($nilaimk3);
				$indeksmk4 = $this->hitungRangeNilai($nilaimk4);
				$indeksmk5 = $this->hitungRangeNilai($nilaimk5);
				$indeksmk6 = $this->hitungRangeNilai($nilaimk6);

        $totalsks = $jumlahsks1 + $jumlahsks2 + $jumlahsks3 + $jumlahsks4 + $jumlahsks5 + $jumlahsks6;
        $bobotmk1 = $indeksmk1*$jumlahsks1;
        $bobotmk2 = $indeksmk2*$jumlahsks2;
        $bobotmk3 = $indeksmk3*$jumlahsks3;
        $bobotmk4 = $indeksmk4*$jumlahsks4;
        $bobotmk5 = $indeksmk5*$jumlahsks5;
        $bobotmk6 = $indeksmk6*$jumlahsks6;
        $totalbobot = $bobotmk1 + $bobotmk2 + $bobotmk3 + $bobotmk4 +$bobotmk5 + $bobotmk6;
        $ips = $totalbobot/$totalsks;

        switch ($ips) {
          case $ips ==4:
            $predikat = "Magna cumlaude";
            break;
          case $ips >=3.75 and $ips <=3.99:
            $predikat = "Summa cumlaude";
            break;
          case $ips >=3.5 and $ips <= 3.74:
            $predikat = "cumlaude";
            break;
          default:
            $predikat = "biasa";
            break;
        }

			$data['ips'] 			= $ips;
			$data['predikat'] = $predikat;

			$this->load->view('hasil_ips', $data);
		}
		else{
			$this->load->view('nilai_ips');
		}

	}
  public function hitungRangeNilai($nilai){
    $indeks = 0;
    switch ($nilai) {
      case $nilai >=80 :
        $indeks = 4;
        break;
      case $nilai >80 and $nilai <=70 :
        $indeks = 3.5;
        break;
      case $nilai >70 and $nilai <=60 :
        $indeks = 3;
        break;
      case $nilai >60 and $nilai <=55 :
        $indeks = 2.5;
        break;
      case $nilai >50 and $nilai <=55 :
        $indeks = 2;
        break;
      case $nilai >40 and $nilai <=50 :
        $indeks = 1;
        break;
      default:
        $indeks = 0;
        break;
    }
    return $indeks;
  }
}
