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
										
										
										<li class="active"><a href="kontak.php">Kontak&nbsp;Kami</a></li>
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
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="contact-form">
				<h3>Kontak Kami</h3>
				<div class="col-md-4 contact-form-left">
					<h4>Kontak Kami</h4>
					<p>Terima kasih atas kritik dan sarannya.</p>
					<h5>Alamat:</h5>
					<p>Jl. H. Suit No.12 Rt.003/006</p>
					<p>Semper Barat, Cilincing, Jakarta Utara</p>
					<p>Telephone: +6221 4401212</p>
					<p>Handphone: +628 1288104708</p>
					<a href="mailto:ocky.aditia@gmail.com">ocky.aditia@gmail.com</a>
				</div>
				<div class="col-md-8 contact-form-right">
					<h4>Halaman Kontak</h4>
					<form>
						<input type="text" placeholder="Nama" name="nama" required>
						<input type="email" placeholder="Email" name="email" required>
						<input type="text" placeholder="Telepon" name="telepon" required>
						<textarea type="text" placeholder="Pesan..." name="pesan" required></textarea>
						<input type="submit" value="Submit" >
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- //contact -->
<!-- footer -->
<?php
	include("footer.php");
?>