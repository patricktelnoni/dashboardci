<?php
echo validation_errors();
echo form_open('bmi/hitung_bmi');
echo form_label('tinggi');
echo form_input('tinggi');
echo "<br>";
echo form_label('berat');
echo form_input('berat');
echo "<br>";
$options = array(
    "laki"      => "laki-laki",
    "perempuan" => "perempuan"
);
echo form_label('Jenis kelamin');
echo form_dropdown('jk', $options);
echo "<br>";
echo form_submit('kirim', 'kirim');
echo form_close();
?>
