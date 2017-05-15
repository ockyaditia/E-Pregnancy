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
		$query = mysql_query("select * from mst_kk where no_kk = '$ubah'");
		
		while ($data = mysql_fetch_array($query)) {
			$no_kk=$data['no_kk'];
			$nama_kk=$data['nama_kk'];
			$kd_kel=$data['kd_kel'];
			$nama_kel=$data['nama_kel'];
			$nama_anggota=$data['nama_anggota'];
			$ordinat_x=$data['ordinat_x'];
			$ordinat_y=$data['ordinat_y'];
		}
	?>
	
	<div class="banner-bottom">
		<div class="container2">
			<div class="banner-bottom-grid-right-grid2">
				<h3>Form Data Keluarga</h3>
				<span style="color:#FF0000">&nbsp;*</span> <span style="color:#FFFFFF; font-size:8pt; font-style:italic;">Required</span>
				</br>
				</br>
				
				<form action="petugas_data_keluarga_input_ubah.php" method="post">
					<input type="hidden" name="no_kk" value="<?php echo $ubah; ?>" required >
				
					<span style="color:#FFFFFF">No KK<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" placeholder="No KK" value="<?php echo $ubah; ?>" readonly disabled style="background:#FFFFFF; color:#6ECDCF" required >
				
					<span style="color:#FFFFFF">Nama Kepala Keluarga<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="nama_kk" placeholder="Nama Kepala Keluarga" value="<?php echo $nama_kk; ?>" required >
				
					<span style="color:#FFFFFF">Nama Kelurahan<span style="color:#FF0000">&nbsp;*</span></span>
					<select name="nama_kel" id="nama_kel">
						<option value="none">Pilih Kelurahan.....</option>
						<?php
							include("config/config.php");
							$query = "SELECT nama_kel FROM mst_kel";
							$result = mysql_query($query);
						?>
						<?php
							while ($data = mysql_fetch_assoc($result)) {
						?>
							<option value="<?php echo $data['nama_kel'];?>" 
						<?php
							if ($nama_kel == $data['nama_kel']) {
								echo ' selected="selected"';
							} 
						?>
							>
						<?php
								echo $data['nama_kel'];
						?>
							</option>
						<?php
							}
						?>
					</select>
					<script>
						$('#nama_kel').on('change', function() {
							var nama_kel = this.value;
							
							if (nama_kel != "") {
								$.post('ajax_get_kode_kelurahan.php', {nama_kel:nama_kel},
								function(data) {
									$('#kd_kel').val(data);
								});
							}
							else {
								$('#kd_kel').val("");
							}
						});
					</script>
				
					<span style="color:#FFFFFF">Kode Kelurahan<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="kd_kel" id="kd_kel" placeholder="Kode Kelurahan" value="<?php echo $kd_kel; ?>" required style="background:#FFFFFF; color:#6ECDCF" class="readonly" >
				
					<span style="color:#FFFFFF">Jumlah Anggota<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="number" name="jumlah_anggota" placeholder="Jumlah Anggota" value="<?php echo $jumlah_anggota; ?>" required >
				
					<span style="color:#FFFFFF">Nama Anggota<span style="color:#FF0000">&nbsp;</span></span>
					<input type="text" name="nama_anggota" placeholder="Nama Anggota" value="<?php echo $nama_anggota; ?>"  >
				
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