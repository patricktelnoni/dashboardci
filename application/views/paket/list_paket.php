<?php
$template = array(
        'table_open'  => '<table
                            class="table table-striped table-bordered">'
);
$this->table->set_template($template);
$this->table->set_heading('tanggal datang', 'sasaran', 'penerima', 'isi paket', 'tanggal ambil', 'aksi');


foreach ($paket->result_array() as $pkt) {
  $this->table->add_row(
                      $pkt['tanggal_datang'],
                      $pkt['nama'],
                      $pkt['penerima'],
                      $pkt['isi_paket'],
                      $pkt['tanggal_ambil'],
                      anchor('c_paket/edit_paket/'.$pkt['idpaket'], 'Edit')
                    );
}


echo $this->table->generate();
echo anchor('c_paket/tambah_paket', 'Tambah paket');
echo "<br>";
echo anchor('c_penghuni', 'List penghuni');
 ?>
