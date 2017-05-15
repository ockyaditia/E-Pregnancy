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
	
	<script>
		function checkAvailability() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url		: "check_availability_kd_kel.php",
				data	: 'kd_kel='+$("#kd_kel").val(),
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
				<h3>Form Data Kelurahan</h3>
				<span style="color:#FF0000">&nbsp;*</span> <span style="color:#FFFFFF; font-size:8pt; font-style:italic;">Required</span>
				</br>
				</br>
				
				<form action="petugas_data_kelurahan_input.php" method="post">
					
					<span style="color:#FFFFFF">Kode Kelurahan<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="number" name="kd_kel" id="kd_kel" placeholder="Kode Kelurahan" onBlur="checkAvailability()" required >
					<span id="user-availability-status"></span>
					<p><img src="images/LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>
					
					<span style="color:#FFFFFF">Nama Kelurahan<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="nama_kel" placeholder="Nama Kelurahan" required >
					
					<span style="color:#FFFFFF">Alamat<span style="color:#FF0000">&nbsp;*</span></span>
					<textarea name="alamat" placeholder="Alamat" required ></textarea>
					
					<span style="color:#FFFFFF">Telepon<span style="color:#FF0000">&nbsp;</span></span>
					<input type="text" name="telp" placeholder="Telepon"  >
					
					<span style="color:#FFFFFF">Fax<span style="color:#FF0000">&nbsp;</span></span>
					<input type="text" name="fax" placeholder="Fax"  >
					
					<span style="color:#FFFFFF">Email<span style="color:#FF0000">&nbsp;</span></span>
					<input type="email" name="email" placeholder="Email"  >
					
					<span style="color:#FFFFFF">Jumlah RW<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="number" name="jumlah_rw" placeholder="Jumlah RW" required >
					
					<span style="color:#FFFFFF">Jumlah RT<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="number" name="jumlah_rt" placeholder="Jumlah RT" required >
					
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