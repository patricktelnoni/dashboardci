<?php
echo validation_errors();
echo form_open('Welcome/dologin');
echo form_label('Username', 'Username');
echo form_input('username');
echo "<br>";
echo form_label('Password', 'Password');
echo form_password('password');
echo "<br>";
echo form_submit('Kirim', 'Kirim');
echo form_close();

 ?>
