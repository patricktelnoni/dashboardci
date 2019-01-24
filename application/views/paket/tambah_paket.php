<?php
echo validation_errors();
echo form_open('C_Paket/save_paket');

$option = array();
$i=0;
foreach ($penghuni->result_array() as $p) {
  $option[$p['idpenghuni']] = $p['nama'];
  $i++;
}
$data = array(
          array(form_label('Komoditi'), ':', form_dropdown('penghuni', $option, 'large')),
          array(form_label('Isi'), ':', form_input('isi'))
        );
echo $this->table->generate($data);
echo form_submit('kirim', 'kirim');
echo form_close();
?>
