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
					include("petugas_data_user_akses_bagian.php");
				?>
					
				<?php
					include("petugas_data_user_akses_validasi.php");
				?>
			</div>
		</div>
	</div>
	
	<?php
		require ("config/config.php");
	
		$ubah = $_GET['ubah'];
		$query = mysql_query("select * from user_akses where kd_user = '$ubah'");
		
		while ($data = mysql_fetch_array($query)) {
			$kd_user=$data['kd_user'];
			$nama=$data['nama'];
			$bagian=$data['bagian'];
			$username=$data['username'];
		}
	?>
	
	<div class="banner-bottom">
		<div class="container2">
			<div class="banner-bottom-grid-right-grid2">
				<h3>Form Data <?php echo $bagian; ?></h3>
				<span style="color:#FF0000">&nbsp;*</span> <span style="color:#FFFFFF; font-size:8pt; font-style:italic;">Required</span>
				</br>
				</br>
				
				<form action="petugas_data_user_akses_input_ubah.php" method="post">
					<input type="hidden" name="kd_user" value="<?php echo $ubah; ?>" required >
					
					<span style="color:#FFFFFF">Kode Pengguna<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" placeholder="Kode Pengguna" value="<?php echo $ubah; ?>" readonly disabled style="background:#FEDC00;" required >
					
					<span style="color:#FFFFFF">Bagian<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="nama" placeholder="Nama Pengguna" value="<?php echo $nama; ?>" required >
					
					<span style="color:#FFFFFF">Bagian<span style="color:#FF0000">&nbsp;*</span></span>
					<select name="bagian" style="background:#FFFFFF; color:#6ECDCF">
						<option value="none">Pilih Bagian.....</option>
						<?php
							$query = "SELECT bagian FROM hak_akses";
							$result = mysql_query($query);
						?>
						<?php
							while ($data = mysql_fetch_assoc($result)) { 
						?>
							<option value="<?php echo $data['bagian']; ?>"
						<?php
							if ($bagian == $data['bagian']) {
								echo ' selected="selected"';
							} 
						?>
							>
						<?php 
							echo $data['bagian']; 
						?>
							</option>
						<?php
							}
						?>
					</select>
					
					<span style="color:#FFFFFF">Username<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" required >
					
					<span style="color:#FFFFFF">Password<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="password" name="password" placeholder="Password" required >
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