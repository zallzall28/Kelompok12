<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Transaksi</title>

      
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" /> 
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tampilan/tampilan.css" />     
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/dataTables.min.css" /> 

      <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script> 
      <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url()?>assets/datatables/dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#transaksi').DataTable();
} );
</script>

     
<style>
  
body{
  background: #f4f4f4;
}

.navbar{
  min-height: 33px !important;
  margin-bottom: 0;
  border-radius: 0;

}
.navbar-nav> li>a, .navbar-brand{
  padding-top: 6px !important;
  padding-bottom: 0;
  height: 33px;

}

.main-color-bg{
  background-color: #095f59;
  color: #ffffff !important;
}


/*Header */

#header{
  background: #333333;
  color: #ffffff;
  padding-bottom: 10px;
  margin-bottom: : 15px;
}

#header .create{
  padding-top: 20px;
}

.dash-box{
  text-align: center;
}

#footer{
  background: #333333;
  color: #ffffff;
  text-align: center;
  padding: 30px;
  margin-top: 30px;

}



.navbar-default {
  background-color: #095f59;
  border-color: #689a9b;
}
.navbar-default .navbar-brand {
  color: #efee24;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #010800;
}
.navbar-default .navbar-text {
  color: #efee24;
}
.navbar-default .navbar-nav > li > a {
  color: #efee24;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #010800;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #010800;
  background-color: #689a9b;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #010800;
  background-color: #689a9b;
}
.navbar-default .navbar-toggle {
  border-color: #689a9b;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #689a9b;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #efee24;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #efee24;
}
.navbar-default .navbar-link {
  color: #efee24;
}
.navbar-default .navbar-link:hover {
  color: #010800;
}

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #efee24;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #010800;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #010800;
    background-color: #689a9b;
  }
}

/*Breadcrumb*/

.breadcrumb{
  background: #cccccc;
  color: #333333;
}
.breadcrumb a{
  color: #333333;
}
</style>

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
          <li class="active"><h1>Data Transaksi Pasien : </h1></li>
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

<div class="table-responsive">
      <table class="table table-hover" id="transaksi">
        <thead>
          <tr>
            <th>Id Transaksi</th>
            <th>Nama Pasien</th>
            <th>Jumlah</th>
            <th>Tanggal</th>

            
            <th></th>
            <th></th>

  
          </tr>
        </thead>
        <tbody>
        <?php foreach ($data_transaksi as $key) {
        ?>
            
            <tr>
              <td><?php echo $key->id_transaksi ?></td>
              <td><?php echo $key->fk_pasien ?></td>
              <td><?php echo $key->jumlah ?></td>
              <td><?php echo $key->tanggal ?></td>

              <td><a href="<?php echo site_url() ?>/transaksi/updateTransaksi/<?php echo $key->id_transaksi ?>" class="pull-right"><button type="button" class="btn btn-info" ><i class="glyphicon glyphicon-upload"></i> Update</button></td></a>
              <td><a href="<?php echo site_url() ?>/transaksi/hapusTransaksi/<?php echo $key->id_transaksi ?>" class="pull-right"><button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-remove"></i>  Delete</button></td></a>
            </tr>
        <?php } ?>
    
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