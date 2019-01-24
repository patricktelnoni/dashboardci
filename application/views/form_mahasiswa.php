<?php
echo validation_errors();
echo form_open('c_mahasiswa/save');
$data = array(
          array(form_label('Nama'), ':', form_input('nama')),
          array(form_label('Nim'), ':', form_input('nim'))
        );
echo $this->table->generate($data);
echo form_submit('kirim', 'kirim');
echo form_close();
?>
