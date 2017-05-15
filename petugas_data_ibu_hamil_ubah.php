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
					include("petugas_data_ibu_hamil_validasi.php");
				?>
			</div>
		</div>
	</div>
	
	<?php
		require ("config/config.php");
	
		$ubah = $_GET['ubah'];
		$query = mysql_query("select * from header where kd_header = '$ubah'");
		
		while ($data = mysql_fetch_array($query)) {
			$no_kk=$data['no_kk'];
			$nama_kk=$data['nama_kk'];
			$nama=$data['nama'];
			$tgl_lahir=$data['tgl_lahir'];
		}
	?>
	
	<div class="banner-bottom">
		<div class="container2">
			<div class="banner-bottom-grid-right-grid2">
				<h3>Form Data Ibu Hamil</h3>
				<span style="color:#FF0000">&nbsp;*</span> <span style="color:#FFFFFF; font-size:8pt; font-style:italic;">Required</span>
				</br>
				</br>
				
				<form action="petugas_data_ibu_hamil_input_ubah.php" method="post">
				
					<span style="color:#FFFFFF">Nama Kepala Keluarga<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="hidden" name="kd_header" value="<?php echo $ubah; ?>" required >
					<select name="nama_kk" id="nama_kk">
						<option value="none">Pilih Kepala Keluarga.....</option>
						<?php
							include("config/config.php");
							$query = "SELECT nama_kk FROM mst_kk";
							$result = mysql_query($query);
						?>
						<?php
							while ($data = mysql_fetch_assoc($result)) {
						?>
							<option value="<?php echo $data['nama_kk'];?>" 
						<?php
							if ($nama_kk == $data['nama_kk']) {
								echo ' selected="selected"';
							} 
						?>
							>
						<?php
								echo $data['nama_kk'];
						?>
							</option>
						<?php
							}
						?>
					</select>
					<script>
						$('#nama_kk').on('change', function() {
							var nama_kk = this.value;
							
							if (nama_kk != "") {
								$.post('ajax_get_kode_kk.php', {nama_kk:nama_kk},
								function(data) {
									$('#no_kk').val(data);
								});
							}
							else {
								$('#no_kk').val("");
							}
						});
					</script>
					
					<span style="color:#FFFFFF">No KK<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="no_kk" id="no_kk" placeholder="No KK" value="<?php echo $no_kk; ?>" required style="background:#FFFFFF; color:#6ECDCF" class="readonly" >
					
					<span style="color:#FFFFFF">Nama Ibu Hamil<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="nama" placeholder="Nama" value="<?php echo $nama; ?>" required >
					
					<div id="datetimepicker4" class="input-append">
						<button class="add-on date"><img src="images/calendar.png" width="50" height="50" ></button>
						<span style="color:#FFFFFF">Tanggal Lahir<span style="color:#FF0000">&nbsp;*</span></span>
						<input data-format="yyyy-MM-dd" type="text" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $tgl_lahir; ?>" style="background:#FFFFFF; color:#6ECDCF" class="readonly" required >
					</div>
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