<?php
echo validation_errors();
echo form_open('Welcome/daftar');
echo form_label('Nama');
echo form_input('nama');
echo "<br>";
echo form_label('nim');
echo form_input('nim');
echo "<br>";
echo form_label('Hobby');

echo form_checkbox('hobby[]', 'nonton', FALSE);
echo form_label('nonton');
echo "<br>";
echo form_checkbox('hobby[]', 'makan', FALSE);
echo form_label('Makan');
echo "<br>";
echo form_checkbox('hobby[]', 'travel', FALSE);
echo form_label('travel');
echo "<br>";
echo form_label('Jenis kelamin');
$options = array('pria' => 'Pria', 'perempuan' =>'perempuan');
echo form_dropdown('jenis_kelamin', $options);
echo "<br>";
echo form_label('Fakultas');
$fakultas = array(
        'FIT'         => 'FIT',
        'FIF'         => 'FIF',
        'FIK'         => 'FIK',
        'FKB'         => 'FKB',
        'FEB'         => 'FEB',
        'FTE'         => 'FTE',
);
echo form_dropdown('fakultas', $fakultas, 'large');
echo "<br>";

echo form_submit('kirim', 'kirim');
echo form_close();

?>
