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
										<li class="active"><a href="tentang.php">Tentang&nbsp;Kami</a></li>
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
<!-- //banner1 -->
<!-- about -->
	<div class="about" id="about">
	<div class="container">
		<h3>Tentang Kami</h3>
		<div class="about-grids-bottom">
			<div class="col-md-4 about-us">
				<h4>Tentang Kami</h4>
				<p>Kami Merawat Kesehatan Kehamilan Anda.</br>Kami Merawat Persalinan Anda.</br>Kami Memantau Masa Nifas Anda.</br>Kami Merawat Bayi Anda</p>
			</div>
			<div class="col-md-4 about-us">
				<h4>Siapa Kita?</h4>
				<p>Kami membantu, melayani, dan merawat Anda selama masa kehamilan. Menjaga kesehatan ibu hamil sangat penting, karena apabila ibu sehat maka anak dalam kandungan pun akan ikut sehat pula.</p>
			</div>
			<div class="col-md-4 about-us">
				<h4>Kenapa Kita Melakukan ini?</h4>
				<p>Kami melakukan ini semua semata-mata untuk menjaga kelangsung kehamilan Anda sampai melahirkan, bahkan nifas Anda pun tetap kami pantau.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
	<div class="subscribe">
	<div class="container">
		<div class="sub-new">
			<h4>Berlangganan Surat Dari Kami</h4>
			<form>
				<input type="text" placeholder="Email Address" required>
				<input type="submit" value="SUBSCRIBE">
				<div class="clearfix"> </div>
			</form>
		</div>
	</div>
	</div>
<!-- //about -->
<!-- footer -->
<?php
	include("footer.php");
?>