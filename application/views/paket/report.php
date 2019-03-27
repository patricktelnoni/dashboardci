<body>
<h1><?php echo $this->uri->segment(1);?></h1>
<h1> Ini Contoh Struk </h1>
<?php
$template = array(
        'table_open'  => '<table
                            class="table table-striped table-bordered">'
);
$this->table->set_template($template);
$this->table->set_heading('Bulan', 'Jumlah Paket');


foreach ($report as $rpt) {
  $this->table->add_row(
                      $rpt['bulan'],
                      $rpt['jumlah_paket']                     
                    );
}


echo $this->table->generate();
echo anchor('c_paket/tambah_paket', 'Tambah paket');
echo "<br>";
echo anchor('c_penghuni', 'List penghuni');
 ?>
</body>