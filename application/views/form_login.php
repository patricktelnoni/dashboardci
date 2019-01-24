<?php
echo form_open('Flashdata/login');
echo form_label('Nama', 'Nama');
echo form_input('Nama');
echo "<br>";
echo form_label('Nim', 'Nim');
echo form_input('Nim');
echo "<br>";
echo form_submit('Kirim', 'Kirim');
echo form_close();

 ?>
