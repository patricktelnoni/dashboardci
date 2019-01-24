<?php
$template = array(
        'table_open'  => '<table
                            class="table table-striped table-bordered">'
);
$this->table->set_template($template);
$this->table->set_heading('Nama', 'Unit', 'No KTP', 'Foto', 'Aksi');
foreach ($penghuni->result_array() as $phn) {
  $this->table->add_row(
                      $phn['nama'],
                      $phn['unit'],
                      $phn['noktp'],
                      '<img src="'.base_url().$phn['foto'].'" width="120" height="90">',
                      anchor('c_penghuni/edit_penghuni/'.$phn['idpenghuni'], 'Edit')
                    );
}
echo $this->table->generate();
echo anchor('c_penghuni/tambah_penghuni', 'Tambah penghuni');
echo "<br>";
echo anchor('c_paket', 'List Paket');
 ?>
