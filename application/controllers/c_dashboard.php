<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 3/26/2019
 * Time: 1:50 PM
 */

class c_dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dashboard');
    }


    public function index(){
        $data['perbulan'] = $this->m_dashboard->getJumlahPaketPerBulan()->result_array();
        $data['pertahun'] = $this->m_dashboard->getJumlahPaketPerTahun()->result_array();
        $this->load->view('dashboard/dashboard', $data);
    }

    public function getDataPerBulanJson(){
        $perbulan   = $this->m_dashboard->getJumlahPaketPerBulan()->result_array();
        $result     = [];
        $i          = 0;
        foreach ($perbulan as $data){
            $result[$i]['bulan']        = $data['bulan'];
            $result[$i]['jumlah_paket'] = $data['jumlah_paket'];
            $i++;
        }
        echo json_encode($result);
    }

}