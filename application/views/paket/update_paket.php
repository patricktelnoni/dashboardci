<?php
$pkt = $paket->row_array();
echo form_open('C_Paket/save_paket/'.$pkt['idpaket'].'');

$option = array();
$i=0;
foreach ($penghuni->result_array() as $p) {
  $option[$p['idpenghuni']] = $p['nama'];
  $i++;
}

$data = array(
          array(form_label('Tujuan'), ':', form_dropdown('penghuni', $option, $pkt['sasaran'])),
          array(form_label('Isi'), ':', form_input('isi', $pkt['isi_paket'])),
          array(form_label('Tanggal ambil'), ':', form_input(array('type'=>'date', 'name'=>'tanggal_ambil'), $pkt['tanggal_ambil']))
        );
echo $this->table->generate($data);
echo form_submit('kirim', 'kirim');
echo form_close();
?>
