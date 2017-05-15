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
										<li><a href="layanan.php">Layanan&nbsp;Kami</a></li>
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
	
	<div class="single" style="margin-top:-100px;">
		<div class="container">
			<?php
				if (isset($_GET['info']) && isset($_GET['det'])) {
			?>
			<div class="col-md-6 single-left">
				<h3><?php echo $_GET['det']; ?></h3>
				<p>Published on <span>September 17,2016</span></p>
				<img src="images/7.jpg" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-6 single-right">
				<h3>............................................</h3>
				<p>............................................</p>
			</div>
			<div class="clearfix"> </div>
			<?php
				}
			?>
		</div>
	</div>
	
<?php
	include("footer.php");
?>