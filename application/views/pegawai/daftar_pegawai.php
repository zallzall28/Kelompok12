<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Pasien</title>

      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" /> 
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tampilan/tampilan.css" /> 
      <link rel="stylesheet" href="<?php echo base_url(); ?> assets/datatables/dataTables.min.css" /> 

      <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script> 
      <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url()?>assets/datatables/dataTables.min.js"></script>

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

<legend><h1 class="text-center">Pendaftaran Pegawai</h1></legend>
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
    
  <?php echo form_open_multipart('pegawai/tambahPegawai'); ?>
  <?php echo validation_errors(); ?>
<div class="table-responsive">
    <table class="table table-hover" id="kamar_active">
      <tbody>
      <div class="form-group ">
        <label for="">Username : </label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
      </div>
      
      <div class="form-group ">
        <label for="">Password</label>
        <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password">
      </div>

      <div class="form-group">
        <label for="">Nama Pegawai</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Pasien">
      </div>
      
      <div class="form-group">
        <label for="">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
      </div>

      <div class="form-group ">
        <label for="">Foto</label>
        <input type="file" class="form-control" name="foto" size="20">
      </div>
      <div class="form-group ">
        <input type="hidden" class="form-control" name="akses" size="20" value="admin">
      </div>
      
      
      <button type="submit" class="btn btn-primary" ><i class="glyphicon glyphicon-plus"></i>  Submit</button>
      <?php echo form_close(); ?>
      </tbody>
</table>
</div>
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