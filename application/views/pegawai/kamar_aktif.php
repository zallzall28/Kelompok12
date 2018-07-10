<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kamar Aktif</title>
    

    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid.min.css" /> 
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid-theme.min.css" /> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tampilan/tampilan.css" /> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" /> 
    <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url()?>assets/jsgrid/jsgrid.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url()?>assets/custom/grid.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#kamar_active').DataTable();
} );
</script>

</head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Halaman Admin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo site_url()?>/pegawai/halamanPegawai">Dashboard</a></li>
           <!--  <li><a href="pages.html">Pages</a></li>
            <li><a href="posts.html">Posts</a></li>
            <li><a href="users.html">Users</a></li> -->
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="<?php echo site_url()?>/pegawai/profile/<?php echo $user['username']?>">Welcome,  <?php echo $user['nama_pegawai'] ?></a></li>
            <li><a href="<?php echo site_url()?>/loginUser/logout">Logout</a></li>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <header id="header">
      <marquee>
        SELAMAT DATANG DI HALAMAN ADMIN 
      </marquee>
    </header>
<br>

 <section id="breadcrumb">
      <ol class="breadcrumb">
        <div class="text-left">
          <li class="active"><h1>Data Kamar Aktif : </h1></li>
        </div>
      </ol>
    </div>
  </section>


<section id="main">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
       <a href="<?php echo site_url()?>/pegawai/halamanPegawai" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        Dashboard <span class="badge"><?php echo $level ?></span>
      </a>
      
      <a href="<?php echo site_url()?>/pegawai/profile/<?php echo $username ?>" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile<span class="badge"><?php echo $level ?></span></a>
      <a href="<?php echo site_url()?>/pegawai/halamanPasien/<?php echo $username ?>" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Data Pasien<span class="badge"><?php echo $jumlah ?></span></a>
     
      <a href="<?php echo site_url()?>/pegawai/viewTransaksi" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Data Transaksi<span class="badge"><?php echo $nTransaksi ?></span></a>
      
      <a href="<?php echo site_url()?>/pegawai/dataKamar/" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Data Kamar<span class="badge"><?php echo $nKamar ?></span></a>
    </div>
</div>

<!--Latest User-->
	<div class="container">
 <div class=" col-md-9 col-lg-9"> 
      <div id="jsGrid"></div>
  </div>
</div>



  <footer id="footer">
    <p>CodeIgniter 2018</p>
  </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
</section>
  
  </body>
</html>