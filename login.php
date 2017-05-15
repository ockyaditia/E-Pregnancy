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
<!-- banner -->
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
							<li class="dropdown">
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
	
	<div class="contact">
		<div class="container">
			<div class="contact-form">
				<?php
					if (isset($_GET['error'])) {
				?>
					<h3 style="margin-bottom:0px;">Halaman Login</h3>
				<?php
						if ($_GET['error'] == 3) {
				?>
					<div class="alerts">
						<div class="alert alert-danger" role="alert">
							<center><strong>Bagian Tidak Terisi!</strong> Pilih bagian Anda menjabat.</center>
						</div>
					</div>
				<?php
						} else if ($_GET['error'] == 4) {
				?>
					<div class="alerts">
						<div class="alert alert-danger" role="alert">
							<center><strong>Gagal Login!</strong> Check username atau password atau bagian Anda menjabat.</center>
						</div>
					</div>
				<?php
						}
					} else {
				?>
					<h3>Halaman Login</h3>
				<?php
					}
				?>
			</div>
		</div>
	</div>
	
	<div class="banner-bottom">
		<div class="container2">
			<div class="banner-bottom-grid-right-grid">
				<h3>Login</h3>
				<form action="config/otentikasi.php" method="post">
					<input type="text" name="username" placeholder="Username" required >
					<input type="password" name="password" placeholder="Password" required >
					<select name="bagian">
						<option value="none">Pilih Bagian.....</option>
						<?php
							include("config/config.php");
							$query = "SELECT bagian FROM hak_akses";
							$result = mysql_query($query);
						?>
						<?php
							while ($data = mysql_fetch_assoc($result)) { 
						?>
							<option value="<?php echo $data['bagian']; ?>">
						<?php 
							echo $data['bagian']; 
						?>
							</option>
						<?php
							}
						?>
					</select>
					<input type="submit" value="Submit" >
				</form>
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
	
<!-- //view -->
<!-- footer -->
<?php
	include("footer.php");
?>