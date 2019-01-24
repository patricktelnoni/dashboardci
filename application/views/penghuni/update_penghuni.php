<?php
echo validation_errors();
$phn = $penghuni->row_array();
echo form_open_multipart('C_Penghuni/save_penghuni/'.$phn['idpenghuni'].'');
$data = array(
          array(form_label('Nama'), ':', form_input('nama', $phn['nama'])),
          array(form_label('Unit'), ':', form_input('unit', $phn['unit'])),
          array(form_label('No KTP'), ':', form_input('ktp', $phn['noktp'])),
          array(form_label('File'), ':', form_input(array('type'=>'file', 'name'=>'foto')))
        );
echo $this->table->generate($data);
echo form_submit('kirim', 'kirim');
echo form_close();
?>
