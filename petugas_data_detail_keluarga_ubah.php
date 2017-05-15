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
					include("petugas_data_keluarga_validasi.php");
				?>
			</div>
		</div>
	</div>
	
	<?php
		require ("config/config.php");
	
		$ubah = $_GET['ubah'];
		$query = mysql_query("select * from det_kk where no_kk = '$ubah'");
		
		while ($data = mysql_fetch_array($query)) {
			$no_kk=$data['no_kk'];
			$nama_kk=$data['nama_kk'];
			$alamat=$data['alamat'];
			$no=$data['no'];
			$rt=$data['rt'];
			$rw=$data['rw'];
			$kota=$data['kota'];
			$kodepos=$data['kodepos'];
		}
	?>
	
	<div class="banner-bottom">
		<div class="container2">
			<div class="banner-bottom-grid-right-grid2">
				<h3>Form Data Detail Keluarga</h3>
				<span style="color:#FF0000">&nbsp;*</span> <span style="color:#FFFFFF; font-size:8pt; font-style:italic;">Required</span>
				</br>
				</br>
				
				<form action="petugas_data_detail_keluarga_input_ubah.php" method="post">
					<input type="hidden" name="no_kk" value="<?php echo $ubah; ?>" required >
					
					<span style="color:#FFFFFF">No KK<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="nama_kk" placeholder="Nama KK" value="<?php echo $nama_kk; ?>" readonly style="background:#FFFFFF; color:#6ECDCF" required >
					
					<span style="color:#FFFFFF">Nama Kepala Keluarga<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" placeholder="No KK" value="<?php echo $ubah; ?>" readonly disabled style="background:#FFFFFF; color:#6ECDCF" required >
					
					<span style="color:#FFFFFF">Alamat<span style="color:#FF0000">&nbsp;*</span></span>
					<textarea name="alamat" placeholder="Alamat" required ><?php echo $alamat; ?></textarea>
					
					<span style="color:#FFFFFF">No<span style="color:#FF0000">&nbsp;</span></span>
					<input type="text" name="no" placeholder="No" value="<?php echo $no; ?>"  >
					
					<span style="color:#FFFFFF">RT<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="number" name="rt" placeholder="RT" value="<?php echo $rt; ?>" required >
					
					<span style="color:#FFFFFF">RW<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="number" name="rw" placeholder="RW" value="<?php echo $rw; ?>" required >
					
					<span style="color:#FFFFFF">Kota<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="kota" placeholder="Kota" value="<?php echo $kota; ?>" required >
					
					<span style="color:#FFFFFF">Kode Pos<span style="color:#FF0000">&nbsp;</span></span>
					<input type="number" name="kodepos" placeholder="Kode Pos" value="<?php echo $kodepos; ?>"  >
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