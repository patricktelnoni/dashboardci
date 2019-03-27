<?php
use Restserver\Libraries\REST_Controller;

class MahasiswaRest extends REST_Controller
{
  public function index_get()
  {
    $id = $this->uri->segment(3);
    if($id == "")
      $mahasiswa = $this->db->get('mahasiswa')->result_array();
    else
      $mahasiswa = $this->db->get_where('mahasiswa', array('id' => $id))->result();
    $this->response($mahasiswa, 200);
  }

  public function index_post()
  {
    $id = $this->uri->segment(3);
    $this->db->set('nama',  $this->input->post('nama'));
    $this->db->set('asal',  $this->input->post('asal'));
    if($id == "")
      $this->db->insert('mahasiswa');
    else
      $this->db->update('mahasiswa', array("id" =>  $id));
    $this->response('Success', 200);
  }
}
