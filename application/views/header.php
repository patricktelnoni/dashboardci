 <!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>TITLE</title>
     <meta name="description" content="DESCRIPTION">
     <link rel="stylesheet" href="PATH">

	   <link href="<?=base_url()?>bootstrap/dist/css/bootstrap.css" rel="stylesheet">
 </head>

 <body>
  <script src="<?=base_url()?>vue/jquery-1.12.4.js"></script>
  <script src="<?=base_url()?>vue/vue.js"></script>
  <script src="<?=base_url()?>vue/axios.min.js"></script>
	<script src="<?=base_url()?>/bootstrap/dist/js/bootstrap.js"></script>





  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?=base_url()?>index.php/baru/methodBaru">method baru <span class="sr-only">(current)</span></a></li>
          <li><a href="<?=base_url()?>index.php/baru/sampelkonten">sampel konten</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?=base_url()?>index.php/baru/jumbotron">Jumbotron</a></li>
              <li><a href="<?=base_url()?>index.php/baru/carousel">Carousel</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?=base_url()?>index.php/sampelkonten">Link</a></li>
          <?php
          if(isset($this->session->nama)){
            ?>
            <li><a href="<?=base_url()?>index.php/c_front/logout">Logout</a></li>
            
            <?php
          }

           ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
 </body>

 </html>
