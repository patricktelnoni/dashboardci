<?php
$template = array(
        'table_open'  => '<table
                            class="table table-striped table-bordered">'
);
$this->table->set_template($template);

$this->table->set_heading('Nama Lengkap', 'Asal', 'Tgl lahir', 'Foto', 'Action');
foreach($mhs->result_array() as $row)
{
  $this->table->add_row(
    $row['nama'],
    $row['asal'],
    $row['tanggal_lahir'],
    $row['foto'],
    anchor("c_mahasiswa/edit/".$row['id'], "Edit")." | ".
    anchor("c_mahasiswa/delete/".$row['id'], "Hapus")
  );
}
echo $this->table->generate();
echo anchor('c_mahasiswa/form_mahasiswa', 'Tambah data');
?>
