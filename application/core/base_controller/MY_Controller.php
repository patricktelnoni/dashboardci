<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
  public function __construct(){
    parent::__construct();
      echo "Jalankan 2";
    //di dalam sini bisa load header, cek login dkk
//    $this->load->view('header');
    //echo "hallo dari base controller <br>";

  }
}
