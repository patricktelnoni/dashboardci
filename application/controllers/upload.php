<?php

class Upload extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url', 'security'));
    $this->load->model('M_Mahasiswa');
  }

  public function index()
  {
    $this->load->view('upload_form', array('error' => ' ' ));
  }
  public function listUpload()
  {
    $nama = $this->security->xss_clean($this->input->post('nama'));
    $data['hasilquery'] = $this->db->get('mahasiswa');
    $this->load->view('list_upload', $data);
  }

  public function unggah()
  {
    $filename                       = $this->security->sanitize_filename($this->input->post('userfile'));

    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'gif|jpg|png|pdf|pptx';
    $config['max_size']             = 10000;
    $config['file_name']            = $filename;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('userfile'))
    {
      $error = array('error' => $this->upload->display_errors());
      $this->load->view('upload_form', $error);
    }
    else
    {
      $this->M_Mahasiswa->save();
      $data = array('upload_data' => $this->upload->data());
      $this->load->view('upload_success', $data);
    }
  }
}
?>
