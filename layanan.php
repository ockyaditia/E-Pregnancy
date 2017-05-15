<?php
	include("head.php");
?>
</head>
	
<body>
<!-- header -->
	<?php
		include("header.php");
	?>
<!-- //header -->
<!-- banner1 -->
	<div class="banner1">
		<div class="container">
			<div class="banner-nav">
					<?php
						include("nav-top.php");
					?>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						 <ul class="nav navbar-nav">
							<li><a href="index.php">Beranda</a></li>
							<?php
								include("menu.php");
							?>
							<li class="dropdown active">
								<a href="#">Informasi</a>
								<div class="dropdown-content">
									<ul class="nav navbar-nav">
										<li><a href="tentang.php">Tentang&nbsp;Kami</a></li>
										<li class="active"><a href="layanan.php">Layanan&nbsp;Kami</a></li>
										<li><a href="galeri.php">Galeri&nbsp;Kami</a></li>
										
										
										<li><a href="kontak.php">Kontak&nbsp;Kami</a></li>
									</ul>
								</div>
							</li>
						  </ul>
						  
					<?php
						include("nav-bottom.php");
					?>
			</div>
		</div>
	</div>
<!-- //banner1 -->
<!-- services -->
	<div class="services">
		<div class="container">
			<div class="services-grid">
				<h3>Kami Melayani</h3>
				<div class="services-grd">
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left2">
							<span></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>Kesehatan Kehamilan Anda</h4>
							<p></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left1">
							<span></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>Rekam Media Kehamilan Anda</h4>
							<p></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left2">
							<span></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>Persalinan Anda</h4>
							<p></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="services-grd">
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left2">
							<span></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>Pelayanan Nifas Anda</h4>
							<p></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left2">
							<span></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>Rujukan Anda</h4>
							<p></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left2">
							<span></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>Kesehatan Bayi Anda</h4>
							<p></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			<script type="text/javascript">
				jQuery(function($) {
					$(".swipebox").swipebox();
				});
			</script>
		</div>
	</div>
<!-- //services -->
<!-- footer -->
<?php
	include("footer.php");
?>