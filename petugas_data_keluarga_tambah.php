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
	
	<script>
		function checkAvailability() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url		: "check_availability_no_kk.php",
				data	: 'no_kk='+$("#no_kk").val(),
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
	
	<div class="banner-bottom">
		<div class="container2">
			<div class="banner-bottom-grid-right-grid2">
				<h3>Form Data Keluarga</h3>
				<span style="color:#FF0000">&nbsp;*</span> <span style="color:#FFFFFF; font-size:8pt; font-style:italic;">Required</span>
				</br>
				</br>
				
				<form action="petugas_data_keluarga_input.php" method="post">
				
					<span style="color:#FFFFFF">No KK<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="no_kk" id="no_kk" placeholder="No KK" onBlur="checkAvailability()" required >
					<span id="user-availability-status"></span>
					<p><img src="images/LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>
				
					<span style="color:#FFFFFF">Nama Kepala Keluarga<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="nama_kk" placeholder="Nama Kepala Keluarga" required >
				
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
							<option value="<?php echo $data['nama_kel'];?>" >
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
					<input type="text" name="kd_kel" id="kd_kel" placeholder="Kode Kelurahan" required style="background:#FFFFFF; color:#6ECDCF" class="readonly" >
				
					<span style="color:#FFFFFF">Jumlah Anggota<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="number" name="jumlah_anggota" placeholder="Jumlah Anggota" required >
				
					<span style="color:#FFFFFF">Nama Anggota<span style="color:#FF0000">&nbsp;</span></span>
					<input type="text" name="nama_anggota" placeholder="Nama Anggota" >
				
					<span style="color:#FFFFFF">Ordinat X<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="ordinat_x" placeholder="Ordinat X" required >
				
					<span style="color:#FFFFFF">Ordinat Y<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="ordinat_y" placeholder="Ordinat Y" required >
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