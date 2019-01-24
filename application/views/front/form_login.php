<?php
echo $this->session->flashdata('message')."<br>";
echo form_open('C_Front/login');
echo form_label('Nama', 'Nama');
echo form_input('nama');
echo "<br>";
echo form_label('Nim', 'Nim');
echo form_password('password');
echo "<br>";
echo form_submit('Kirim', 'Kirim');
echo form_close();

 ?>
