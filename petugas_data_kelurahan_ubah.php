<?php
	include("head.php");
	include("_session_petugas.php");
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
					include("petugas_data_kelurahan_validasi.php");
				?>
			</div>
		</div>
	</div>
	
	<?php
		require ("config/config.php");
	
		$ubah = $_GET['ubah'];
		$query = mysql_query("select * from mst_kel where kd_kel = '$ubah'");
		
		while ($data = mysql_fetch_array($query)) {
			$nama_kel = $data['nama_kel'];
			$alamat = $data['alamat'];
			$telp = $data['telp'];
			$fax = $data['fax'];
			$email = $data['email'];
			$jumlah_rw = $data['jumlah_rw'];
			$jumlah_rt = $data['jumlah_rt'];
			$ordinat_x = $data['ordinat_x'];
			$ordinat_y = $data['ordinat_y'];
		}
	?>
	
	<div class="banner-bottom">
		<div class="container2">
			<div class="banner-bottom-grid-right-grid2">
				<h3>Form Data Kelurahan</h3>
				<span style="color:#FF0000">&nbsp;*</span> <span style="color:#FFFFFF; font-size:8pt; font-style:italic;">Required</span>
				</br>
				</br>
				
				<form action="petugas_data_kelurahan_input_ubah.php" method="post">
					<input type="hidden" name="kd_kel" value="<?php echo $ubah; ?>" required >
					
					<span style="color:#FFFFFF">Kode Kelurahan<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" placeholder="Kode Kelurahan" value="<?php echo $ubah; ?>" readonly disabled style="background:#FFFFFF; color:#6ECDCF" required >
					
					<span style="color:#FFFFFF">Nama Kelurahan<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="nama_kel" placeholder="Nama Kelurahan" value="<?php echo $nama_kel; ?>" required >
					
					<span style="color:#FFFFFF">Alamat<span style="color:#FF0000">&nbsp;*</span></span>
					<textarea name="alamat" placeholder="Alamat" required ><?php echo $alamat; ?></textarea>
					
					<span style="color:#FFFFFF">Telepon<span style="color:#FF0000">&nbsp;</span></span>
					<input type="text" name="telp" placeholder="Telepon" value="<?php echo $telp; ?>" >
					
					<span style="color:#FFFFFF">Fax<span style="color:#FF0000">&nbsp;</span></span>
					<input type="text" name="fax" placeholder="Fax" value="<?php echo $fax; ?>"  >
					
					<span style="color:#FFFFFF">Email<span style="color:#FF0000">&nbsp;</span></span>
					<input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" >
					
					<span style="color:#FFFFFF">Jumlah RW<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="number" name="jumlah_rw" placeholder="Jumlah RW" value="<?php echo $jumlah_rw; ?>" required >
					
					<span style="color:#FFFFFF">Jumlah RT<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="number" name="jumlah_rt" placeholder="Jumlah RT" value="<?php echo $jumlah_rt; ?>" required >
					
					<span style="color:#FFFFFF">Ordinat X<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="ordinat_x" placeholder="Ordinat X" value="<?php echo $ordinat_x; ?>" required >
					
					<span style="color:#FFFFFF">Ordinat Y<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="ordinat_y" placeholder="Ordinat Y" value="<?php echo $ordinat_y; ?>" required >
					<input type="submit" value="Ubah" >
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