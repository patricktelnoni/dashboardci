<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 3/26/2019
 * Time: 6:23 PM
 */

class m_dashboard extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getJumlahPaketPerBulan(){
        return $this->db->query("
                select count(*) as jumlah_paket, monthname(tanggal_datang) as bulan
                from paket
                GROUP by monthname(tanggal_datang)
                ");

    }

    public function getJumlahPaketPerTahun(){
        return $this->db->query("
                select count(*) as jumlah_paket, year(tanggal_datang) as tahun
                from paket
                GROUP by year(tanggal_datang)
                ");

    }
}