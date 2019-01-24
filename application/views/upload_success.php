<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
<?php
// foreach ($hasilquery as $hasil) {
//   $file = base_url().hasil['alamatfile'];
//           //untuk menghasilkan url : http://localhost/ci/upload/file.pdf
// }
//upload/namafile.pdf
echo anchor(base_url().'uploads/'.$upload_data['file_name'], 'Link File');
 foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>

<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

</body>
</html>
