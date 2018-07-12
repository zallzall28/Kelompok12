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
            <li class="active"><a href="index.html">Welcome,  <?php echo $user['nama_pegawai'] ?></a></li>
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

<legend><h1 class="text-center">Update Pasien</h1></legend>
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
    
  <?php echo form_open_multipart('pegawai/updatePasien/'.$this->uri->segment(3)); ?>
  <?php echo validation_errors(); ?>
<div class="table-responsive">
  <table class="table table-hover">
    <tbody>
  <div class="form-group">
        <label for="">Username : </label> 
        <input type="text" class="form-control" id="username" name="username" readonly value="<?php echo $pasien[0]->username ?>">
      </div>

  <div class="form-group">
        <label for="">Nama Pasien</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $pasien[0]->nama_pasien ?>">
      </div>
      
      <div class="form-group">
        <label for="">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $pasien[0]->alamat ?>">
      </div>
      
      <div class="form-group">
        <label for="">No Hp</label>
        <input type="text" class="form-control" id="no" name="no" value="<?php echo $pasien[0]->no_hp ?>">
      </div>

       <div class="form-group">
        <label for="">Foto</label>
        <input type="file" class="form-control" name="foto" size="20" value="<?php echo $pasien[0]->foto ?>">
      </div>
      </tbody>
      <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>  Submit</button>
      <?php echo form_close(); ?>
      <a href="javascript:history.go(-1)" class="btn btn-primary">Back</a>
  </div>

 </table>
 </div>
 </div>
 </div>
</section>
  
  </body>
</html>