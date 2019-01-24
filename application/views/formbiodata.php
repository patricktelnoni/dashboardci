<form action="<?=base_url()?>index.php/Blog/cekkirim" method="POST">
  <?php echo form_open('Blog/cekkirim');?>
    <table>
        <tr>
            <td>Angka 1</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Angka 2</td>
            <td>:</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>Angka 2</td>
            <td>:</td>
            <td><input type="text" name="tanggal"></td>
        </tr>
        <tr>
            <td><input type="submit" name="Kirim data"></td>
        </tr>
    </table>
</form>
