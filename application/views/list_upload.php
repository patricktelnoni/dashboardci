<?php
foreach ($hasilquery->result_array() as $hasil) {
   $file = base_url().$hasil['foto'];
   echo anchor($file, 'link file')."<br>";
}
