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
	
	<div class="banner-bottom">
		<div class="container2">
			<div class="banner-bottom-grid-right-grid2">
				<h3>Form Data <?php echo $bagian; ?></h3>
				<span style="color:#FF0000">&nbsp;*</span> <span style="color:#FFFFFF; font-size:8pt; font-style:italic;">Required</span>
				</br>
				</br>
				
				<form action="petugas_data_user_akses_input.php" method="post">
					
					<?php
						if (isset($_GET['bagian']) && $_GET['bagian'] == "Pimpinan Dinkes") {
					?>
						<script>
							function checkAvailability() {
								$("#loaderIcon").show();
								jQuery.ajax({
									url		: "check_availability_user_dinkes.php",
									data	: 'kd_user='+$("#kd_user").val(),
									type	: "POST",
									success	: function(data){
										$("#user-availability-status").html(data);
										$("#loaderIcon").hide();
									},
									error	: function (){
									
									}
								});
							}
						</script>
						<span style="color:#FFFFFF">Kode Pengguna<span style="color:#FF0000">&nbsp;*</span></span>
						<input type="number" name="kd_user" id="kd_user" placeholder="Kode Pengguna" onBlur="checkAvailability()" required >
						<span id="user-availability-status"></span>
						<p><img src="images/LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>
					<?php
						} else if (isset($_GET['bagian']) && $_GET['bagian'] == "Pimpinan Puskesmas") {
					?>
						<script>
							function checkAvailability() {
								$("#loaderIcon").show();
								jQuery.ajax({
									url		: "check_availability_user_puskes.php",
									data	: 'kd_user='+$("#kd_user").val(),
									type	: "POST",
									success	: function(data){
										$("#user-availability-status").html(data);
										$("#loaderIcon").hide();
									},
									error	: function (){
									
									}
								});
							}
						</script>
						<span style="color:#FFFFFF">Kode Pengguna<span style="color:#FF0000">&nbsp;*</span></span>
						<input type="number" name="kd_user" id="kd_user" placeholder="Kode Pengguna" onBlur="checkAvailability()" required >
						<span id="user-availability-status"></span>
						<p><img src="images/LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>
					<?php
						} else if (isset($_GET['bagian']) && $_GET['bagian'] == "Dokter / Bidan") {
					?>
						<script>
							function checkAvailability() {
								$("#loaderIcon").show();
								jQuery.ajax({
									url		: "check_availability_user_bidan.php",
									data	: 'kd_user='+$("#kd_user").val(),
									type	: "POST",
									success	: function(data){
										$("#user-availability-status").html(data);
										$("#loaderIcon").hide();
									},
									error	: function (){
									
									}
								});
							}
						</script>
						<span style="color:#FFFFFF">Kode Pengguna<span style="color:#FF0000">&nbsp;*</span></span>
						<input type="number" name="kd_user" id="kd_user" placeholder="Kode Pengguna" onBlur="checkAvailability()" required >
						<span id="user-availability-status"></span>
						<p><img src="images/LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>
					<?php
						} else if (isset($_GET['bagian']) && $_GET['bagian'] == "Admin / Petugas") {
					?>
						<script>
							function checkAvailability() {
								$("#loaderIcon").show();
								jQuery.ajax({
									url		: "check_availability_user_admin.php",
									data	: 'kd_user='+$("#kd_user").val(),
									type	: "POST",
									success	: function(data){
										$("#user-availability-status").html(data);
										$("#loaderIcon").hide();
									},
									error	: function (){
									
									}
								});
							}
						</script>
						<span style="color:#FFFFFF">Kode Pengguna<span style="color:#FF0000">&nbsp;*</span></span>
						<input type="number" name="kd_user" id="kd_user" placeholder="Kode Pengguna" onBlur="checkAvailability()" required >
						<span id="user-availability-status"></span>
						<p><img src="images/LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>
					<?php
						} 
					?>
					
					<span style="color:#FFFFFF">Nama Pengguna<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="nama" placeholder="Nama Pengguna" required >
					
					<span style="color:#FFFFFF">Bagian<span style="color:#FF0000">&nbsp;*</span></span>
					<select name="bagian" style="background:#FFFFFF; color:#6ECDCF">
						<?php
							include("config/config.php");
							$query = "SELECT bagian FROM hak_akses";
							$result = mysql_query($query);
						?>
						<?php
							while ($data = mysql_fetch_assoc($result)) {
								if ($bagian == $data['bagian']) {
						?>
							<option value="<?php echo $data['bagian'];?>" selected >
						<?php
								echo $data['bagian'];
						?>
							</option>
						<?php
								}
							}
						?>
					</select>
					
					<span style="color:#FFFFFF">Username<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="username" placeholder="Username" required >
					
					<span style="color:#FFFFFF">Password<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="password" name="password" placeholder="Password" required >
					<input type="submit" value="Tambah" >
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