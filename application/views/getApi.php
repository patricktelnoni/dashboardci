 <!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>TITLE</title>
     <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" href="PATH">
      <script src="<?=base_url()?>vue/jquery-1.12.4.js"></script>
      <script type="text/javascript">
      $(document).ready(function(){
        $.ajax({
          url     : 'http://localhost/CI3/index.php/jsoncontroller/getData',
          success : function(result){
            $.each(result, function(i, field){
                $("#hasil").append("<tr><td>"+field.nama + "</td><td>"+
                                            field.asal+"</td><td>"
                                            +field.tanggal_lahir +"</td></tr>");
            });
          }
        });
      });
      </script>

 </head>
<h2>Tabel 1</h2>
 <body>
   <table id="hasil" class="table table-striped table-bordered">

   </table>
   <br>
  <h2>Tabel 2</h2>
    <?php
    $mahasiswa = json_decode(
                    file_get_contents(base_url().'index.php/jsoncontroller/getData')
                  );
    foreach ($mahasiswa as $mhs) {
      $this->table->add_row($mhs->nama, $mhs->asal, $mhs->tanggal_lahir);
    }
    $template = array(
            'table_open'  => '<table class="table table-striped table-bordered">'
    );
    $this->table->set_template($template);
    echo $this->table->generate();
    ?>


 </body>

 </html>
