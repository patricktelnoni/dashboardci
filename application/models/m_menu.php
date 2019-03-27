<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 3/1/2019
 * Time: 10:46 AM
 */

class M_Menu extends CI_Model {
    public function __construct(){
        parent::__construct();

    }
    public function getAllMenu(){
        return $this->db->get('menu');
    }

    public function getMenuDetail($id){
        return $this->db->get_where('menu', array('id' => $id));
    }
}
