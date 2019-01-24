<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('upload/unggah');
echo form_input('nama', '' ,array('placeholder' => 'nama'));
echo "<br>";
echo form_input('nim', '' ,array('placeholder' => 'nim'));
echo "<br>";
?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>
