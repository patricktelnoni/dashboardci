<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('m_menu');
    }
    public function tampilmenu(){
        $data['menu'] = $this->m_menu->getAllMenu();
        $this->load->view('menu', $data);
    }

    public function tambahkeranjang($id){
        $detailmenu = $this->m_menu->getMenuDetail($id)->row_array();

        $data = array(
            'id'      => $id,
            'qty'     => 1,
            'price'   => $detailmenu['harga'],
            'name'    => $detailmenu['nama'],
        );

        $this->cart->insert($data);
        redirect('Menu/tampilmenu');
    }
    public function checkout(){
        $this->load->view('checkout');
    }

}
