<?php
echo form_open('Flashdata/kirim');
echo form_label('Nama', 'Nama');
echo form_input('Nama','',  array('type' => 'date'));
echo form_submit('Kirim', 'Kirim');
echo form_close();

 ?>
