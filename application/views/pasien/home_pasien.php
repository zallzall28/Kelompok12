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
					<h1><a class="navbar-brand" href="home_pasien.php">HANURA</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
						<li class="hidden"><a class="page-scroll" href="#page-top"></a> </li>
						<li><a class="page-scroll" href="#home">Home</a></li>
						<li><a class="page-scroll " href="<?php echo site_url()?>/pasien/layanan">Data Kamar</a></li>
						<li><a href="<?php echo site_url()?>/loginUser/logout">Logout</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>


		<div class="container">

			<!-- header -->
			<header>

				<div class="flexslider-info">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="w3l-info">
										<div class="col-md-8  info-right-side">
											<h4>Welcome To Hospital</h4>
											<p>Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
												egestas.Sed lorem enim, rutrum quis diam nec.</p>
										</div>
										<div class=" col-md-4 w3layouts_more-buttn">
											<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
										</div>
									</div>

								</li>
								<li>
									<div class=" w3l-info">
										<div class="col-md-8 info-lleft-side">
											<h4>Better Health Care</h4>
											<p>Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
												egestas.Sed lorem enim, rutrum quis diam nec.</p>
										</div>
										<div class=" col-md-1 w3layouts_more-buttn">
											<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
										</div>
									</div>
								</li>
								<li>
									<div class=" w3l-info">
										<div class="col-md-8 info-lleft-side">
											<h4>Get YourSelf Fixed</h4>
											<p>Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
												egestas.Sed lorem enim, rutrum quis diam nec.</p>
										</div>
										<div class=" col-md-4 w3layouts_more-buttn">
											<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</section>
				</div>
			</header>
		</div>
		<div class="clearfix"> </div>
	</div>

	<!-- //header -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Medically</h4>
				</div>
				<div class="modal-body">
					<div class="out-info">
						<img src="<?php echo base_url()?>assets/images/g1.jpg?>" alt="" />
						<p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
							eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellu</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="about" id="about">
		<div class="container">
			<div class="imgg-info-w3">
				<div class="col-md-6 right-about-img">

					<img src="<?php echo base_url()?>assets/images/a1.jpg" class="img-responsive s1" alt="s1">
				</div>
				<div class="col-md-6 welcome-left wel">
					<div class="welcome-left-top">
						<h4>Tentang Kami </h4>
						<p>Assalamualaikum Wr. Wb.
<br><br>
Puji syukur kami panjatkan kehadirat Allah SWT, atas Karunia dan Rahmat-Nya sehingga website RS.HANURA telah mendapat akreditsi tipe C untuk  pelayanan kesehatan kepada masyarakat.

Website ini memuat seluruh informasi dan potensi yang dimiliki oleh HANURA berupa sarana dan prasarana sebagai Rumah Sakit tipe C.
<br>
<br>
Wassalamualaikum Wr. Wb.

 </p>
						<div class="agileits_w3layouts_more">
							<a href="<?php echo site_url()?>/pasien/about" data-toggle="" data-target="">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//about -->
      <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pemesanan Kamar</h4>
        </div>
        <div class="modal-body">
          Seluruh Kamar Telah Terpakai
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="daftar" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pemesanan Kamar</h4>
        </div>

        <div class="modal-body">
          <?php echo form_open_multipart('pesanKamar/addKamar'); ?>
         <?php echo validation_errors(); ?>

        <div class="form-group">
          <label for="">Nama Kamar : </label>
          <select class="form-control" name="kamar_kosong">
            <?php foreach ($kamar as $key) { ?>
              <option value="<?php echo $key->nama_kamar?>"> <?php echo $key->id_kamar ?> <?php echo $key->nama_kamar?></option>
            <?php } ?>
          </select>
        </div>

      <div class="form-group">
        <label for="">Id Pasien</label>
          <select class="form-control" name="nama_pasien">
            <?php foreach ($pasien as $key) { ?>
              <option value="<?php echo $key->nama_pasien?>"> <?php echo $key->nama_pasien?></option>
            <?php } ?>
          </select>
      </div>

      <div class="form-group">
        <label for="">Tanggal Rawat</label>
        <input type="date" class="form-control" id="tgl" name="tgl" >
      </div>
	  <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>  Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      <?php echo form_close(); ?>

      
    </div>
  </div>
</div>
</div>
</a>
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
			<div class="clearfix"> </div>
			</div>
			<!-- //Copyright -->
			<div class="clearfix"> </div>
		</div>
		</div>
	</div>
	<footer>
		<p>&copy;Rumah Sakit HANURA</a></p>
	</footer>
	<!--menu script-->
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery-2.2.3.min.js'></script>
	 
	<script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
	<!--//menu script-->
	<!--FlexSlider banner-->

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