<?php
echo validation_errors();
echo form_open_multipart('C_Penghuni/save_penghuni');


$data = array(
          array(form_label('Nama'), ':', form_input('nama')),
          array(form_label('Unit'), ':', form_input('unit')),
          array(form_label('No KTP'), ':', form_input('ktp')),
          array(form_label('Foto'), ':', form_input(array(
                                                'type'=>'file',
                                                'name'=>'foto')))
        );
echo $this->table->generate($data);
echo form_submit('kirim', 'kirim');
echo form_close();
?>
