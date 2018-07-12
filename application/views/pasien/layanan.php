<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>RUMAH SAKIT HANURA</title>
	<!--meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Medically Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!--//meta tags ends here-->
	<!--booststrap-->
	<link href="<?php echo base_url()?>assets/css/bootstrap1.css" rel="stylesheet" type="text/css" media="all">

	<!--//booststrap end-->

	<!-- font-awesome icons -->
	<link href="<?php echo base_url()?>assets/css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/chocolat.css" type="text/css" media="screen" />
	<!-- gallery-->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.css" type="text/css" media="all">
	<!-- clients-->

	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/flexslider.css" type="text/css" media="screen" />
	<!-- banner text slider-->
	<!--stylesheets-->
	<link href="<?php echo base_url()?>assets/css/style.css" rel='stylesheet' type='text/css' media="all">
	<!-- banner text slider-->

	<link href="//fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,600" rel="stylesheet">



	<!--//style sheet end here-->
</head>


<body>
	<div class="banner-w3" id="home">
		<div class="w3-agile-logo">
			<div class=" head-wl">
				<div class="agileinfo-social-grids">
					<ul>
						<li class="active"><font color="white" ><a href="<?php echo site_url()?>/pasien/profilePasien/<?php echo $user['username']?>"?>Selamat Datang, <?php echo $user['nama_pasien'] ?></font></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-w3layouts">

			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					<h1><a class="navbar-brand " href="home_pasien.php">Hanura</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
						<li class="hidden"><a class="page-scroll" href="#page-top"></a> </li>
						<li><a class="page-scroll" href="<?php echo site_url()?>/pasien/index">Home</a></li>
						<li><a class="page-scroll " href="<?php echo site_url()?>/pasien/layanan">Data Kamar</a></li>
						<li><a href="<?php echo site_url()?>/loginUser/logout">Logout</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>


		<div class="container">

			<!-- header -->
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<header>
<div class="col-md-40 col-sm-15">
    <h1 >Data Kamar Yang Masih Kosong :</h1>
   <div class="panel panel-default">
     <div class="panel-body form-horizontal payment-form">
		<div class="table-responsive">

  <div class="table-responsive">
      <table class="table table-hover" id="kamar_kosong">
        <thead>
          <tr>
            <th>Id Kamar</th>
            <th>Nama Kamar</th>
            <th>Harga</th>
            <th>Keterangan</th>
            <th>Foto</th>
          

  
          </tr>
        </thead>
        <tbody>
        <?php foreach ($kamar_kosong as $key) {
        ?>    
            <tr>
              <td><?php echo $key->id_kamar ?></td>
              <td><?php echo $key->nama_kamar ?></td>
              <td><?php echo $key->harga ?></td>
              <td><?php echo $key->ketersediaan ?></td>
              <td><img src="<?php echo base_url()?>/assets/uploads/kamar/<?php echo $key->foto?>" alt="" width=175 height="125"></td>

            </tr>
        <?php } ?>
    
        </tbody>
      </table>
    </div>
			</header>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div> -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/dataTables.min.css" /> 

      <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script> 
      <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url()?>assets/datatables/dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#pasien').DataTable();
	} );

	$(document).ready(function() {
    $('#kamar').DataTable();
	} );

	$(document).ready(function() {
    $('#kamar_kosong').DataTable();
	} );
</script>
</div>
</div>
</div>
</div>
	<!--contact-->
	<div class="contact" id="contact">
		<div class="container">
			<h3 class="title">KONTAK KAMI</h3>

			<div class=" col-md-7 contact-address">
				<h4>RS.HANURA</h4>
				<div class="para-left">
					<p>Sebagai rumah sakit pilihan pertama yang berkualitas prima, kami menyediakan berbagai fasilitas layanan sesuai kebutuhan masyarakat dengan akses yang mudah dan ramah. 
					</p>
				</div>
				<div class="contact-left">
					<div class="address-contact-left ">
						<h5>Address:</h5>
						<p><span class="fa fa-home"></span> Malang </p>
					</div>
					<div class="address-contact-left ">
						<h5>Phones:</h5>
						<p><span class="fa fa-phone"></span> +9900887766</p>
						<p><span class="fa fa-phone"></span> +11 222 333</p>
					</div>
					<div class="address-contact-left ">
						<h5>Email:</h5>
						<p><span class="fa fa-envelope"></span> <a href="mailto:info@example.com">hanura@gmail.com.co.id</a></p>
					</div>
				</div>
			</div>
			<div class=" col-md-3 col-sm-1 col-xs-1 contact-top">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63338.61717377296!2d112.61791773030875!3d-7.164834963047084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd800504acb3253%3A0x25d71798cd652fb9!2sGresik%2C+Kec.+Gresik%2C+Kabupaten+Gresik%2C+Jawa+Timur!5e0!3m2!1sid!2sid!4v1531216142750" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>	
		</div>

			<div class="clearfix"> </div>


		</div>
	</div>
	<!--//contact-->

	<!--footer-->

	<div class="footer">
		<div class="container">
		<div class="colr-row col-md-6  ">
			<div class="col-md-6 col-sm-6 col-xs-6  bottom-head bottm-grid">
				<h2><a href="index.html">HANURA</a></h2>
				<span class="cap"></span>
				<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //Copyright -->
			<div class="clearfix"> </div>
		</div>
		</div>
	</div>	<footer>
		<p>&copy;Rumah Sakit HANURA</a></p>
	</footer>
	<!--menu script-->
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery-2.2.3.min.js'></script>
	 
	<script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>

	<script defer src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<script type="text/javascript">
		$(function () {
			$('.w3_agile_gallery_grid a').Chocolat();
		});
	</script>
	<!-- //gallery -->
	<!--client carousel -->
	<script src="<?php echo base_url()?>assets/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 1,
				itemsDesktop: [768, 1],
				itemsDesktopSmall: [414, 1],
				lazyLoad: true,
				autoPlay: true,
				navigation: true,

				navigationText: false,
				pagination: true,

			});

		});
	</script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!-- //here ends scrolling icon -->
</body>

</html>