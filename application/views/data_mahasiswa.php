<?php
$template = array(
        'table_open'  => '
<table class="table table-striped table-bordered">'
);
$this->table->set_template($template);
$this->table->set_heading('Nama Lengkap', 'Asal', 'Tgl lahir', 'Foto', 'Action');
//generate hasil query
echo $this->table->generate($mhs);
echo anchor('c_mahasiswa/form_mahasiswa', 'Tambah data');
?>
