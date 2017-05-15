<?php
	include("head.php");
?>

<!-- pop-up -->
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>
<!-- pop-up -->
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
										<li class="active"><a href="galeri.php">Galeri&nbsp;Kami</a></li>
										
										
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
<!-- gallery -->
	<div class="gallery">
	    <div class="container">
			<h3>Galeri</h3>
			<div class="gallery-grids">
				<div class="gallery-grid">
					 <a class="fancybox" href="images/3.jpg" data-fancybox-group="gallery"><img src="images/3.jpg" class="img-style row6 img-responsive" alt="" /><span> </span></a>					
				</div>
				<div class="gallery-grid">
					<a class="fancybox" href="images/9.jpg" data-fancybox-group="gallery"><img src="images/9.jpg" class="img-style row6 img-responsive" alt="" /><span> </span></a>
				</div>
				<div class="gallery-grid">
					<a class="fancybox" href="images/5.jpg" data-fancybox-group="gallery"><img src="images/5.jpg" class="img-style row6 img-responsive" alt="" /><span> </span></a>
				</div>
				<div class="gallery-grid">
					<a class="fancybox" href="images/10.jpg" data-fancybox-group="gallery"><img src="images/10.jpg" class="img-style row6 img-responsive" alt="" /><span> </span></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="gallery-grids">
				<div class="gallery-grid">
					 <a class="fancybox" href="images/11.jpg" data-fancybox-group="gallery"><img src="images/11.jpg" class="img-style row6 img-responsive" alt="" /><span> </span></a>					
				</div>
				<div class="gallery-grid">
					<a class="fancybox" href="images/8.jpg" data-fancybox-group="gallery"><img src="images/8.jpg" class="img-style row6 img-responsive" alt="" /><span> </span></a>
				</div>
				<div class="gallery-grid">
					<a class="fancybox" href="images/10.jpg" data-fancybox-group="gallery"><img src="images/10.jpg" class="img-style row6 img-responsive" alt="" /><span> </span></a>
				</div>
				<div class="gallery-grid">
					<a class="fancybox" href="images/6.jpg" data-fancybox-group="gallery"><img src="images/6.jpg" class="img-style row6 img-responsive" alt="" /><span> </span></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="gallery-grids">
				<div class="gallery-grid">
					 <a class="fancybox" href="images/2.jpg" data-fancybox-group="gallery"><img src="images/2.jpg" class="img-style row6 img-responsive" alt="" /><span> </span></a>					
				</div>
				<div class="gallery-grid">
					<a class="fancybox" href="images/4.jpg" data-fancybox-group="gallery"><img src="images/4.jpg" class="img-style row6 img-responsive" alt="" /><span> </span></a>
				</div>
				<div class="gallery-grid">
					<a class="fancybox" href="images/7.jpg" data-fancybox-group="gallery"><img src="images/7.jpg" class="img-style row6 img-responsive" alt="" /><span> </span></a>
				</div>
				<div class="gallery-grid">
					<a class="fancybox" href="images/12.jpg" data-fancybox-group="gallery"><img src="images/12.jpg" class="img-style row6 img-responsive" alt="" /><span> </span></a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //gallery -->
<!-- footer -->
<?php
	include("footer.php");
?>