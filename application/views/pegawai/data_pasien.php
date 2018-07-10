<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Data Pasien</title>

      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" /> 
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tampilan/tampilan.css" /> 

      <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script> 
      <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>


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
            <li><a href="<?php echo site_url()?>/loginUser/logout">Logout</a></li>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Halaman Admin <small><font color="#33FF33">Rumah Sakit</font></small></h1>
          </div>
          <div class="col-md-2">
                   <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Create Content
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Add Pages</a></li>
    <li><a href="#">Add Posts</a></li>
    <li><a href="#">Add Users</a></li>
  </ul>
</div> 
          </div>
        </div>
      </div>
    </header>
<br>

  <section id="breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
      	<div class="text-left">
        	<li class="active"><h1>Data Pasien : </h1></li>
        </div>
      </ol>
    </div>
  </section>


<section id="main">
  <div class="container">
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

          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"> <?php echo $details_pasien['nama_pasien']?></h3>
            </div>
            <div class="panel-body">
              <div class="row col-md-9 col-lg-9">
                <div class="col-md-3 col-lg-3 " align="left">
                  <img alt="User Pic" src="<?php echo base_url()?>/assets/uploads/<?php echo $details_pasien['foto']?>" class="img-circle img-responsive">
                </div>
                <div class="col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Id Pasien</td>
                        <td>: <?php echo $details_pasien['id_pasien']?></td>
                      </tr>
                      <tr>
                        <td>Username </td>
                        <td>: <?php echo $details_pasien['username']?></td>
                      </tr>

                      <tr>
                        <td>Nama</td>
                        <td>: <?php echo $details_pasien['nama_pasien']?></td>
                      </tr>
                                
                      <tr>
                        <td>Alamat</td>
                        <td>: <?php echo $details_pasien['alamat']?></td>
                      </tr>
                      
                      <tr>
                        <td>Nomor Hp</td>
                        <td>: <?php echo $details_pasien['no_hp']?></td>
                      </tr>

                      <tr>
                        <td>Nama Kamar Dirawat</td>
                        <td>: <?php echo $details_pasien['fk_kamar']?></td>
                      </tr>

                      <tr>
                        <td>Jumlah Transaksi</td>
                        <td>: <?php echo $transaksi_pasien['jumlah']?></td>
                      </tr>

                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">Edit</a>
                  <a href="javascript:history.go(-1)" class="btn btn-primary">Back</a>
                </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                
              </div>
            </div>
                 
            
          </div>
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