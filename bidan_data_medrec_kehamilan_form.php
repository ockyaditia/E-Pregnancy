<?php
	include("head.php");
	include("_session_dokter-bidan.php");
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
					if (isset($_GET['success'])) {
				?>
					<h3 style="margin-bottom:0px;">Halaman Data Medical Record</h3>
					<div class="alerts">
						<div class="alert alert-success" role="alert">
							<center><strong>Sukses Tambah Data!</strong> .</center>
						</div>
					</div>
				<?php
					} else if (isset($_GET['success_ubah'])) {
				?>
					<h3 style="margin-bottom:0px;">Halaman Data Medical Record</h3>
					<div class="alerts">
						<div class="alert alert-success" role="alert">
							<center><strong>Sukses Ubah Data!</strong> .</center>
						</div>
					</div>
				<?php
					} else if (isset($_GET['success_hapus'])) {
				?>
					<h3 style="margin-bottom:0px;">Halaman Data Medical Record</h3>
					<div class="alerts">
						<div class="alert alert-success" role="alert">
							<center><strong>Sukses Hapus Data!</strong> .</center>
						</div>
					</div>
				<?php
					} else {
				?>
					<h3>Halaman Data Medical Record</h3>
				<?php
					}
				?>
			</div>
		</div>
	</div>
	
	<div class="container" style="margin-top:-75px;">
		<div class="panel panel-default">
			<?php
				if (isset($_GET['kd'])) {
					$kd = $_GET['kd'];
				} else {
					echo "<script>window.location = 'bidan_data_kehamilan_form.php'</script>";
				}
			?>
			
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="dataTable_wrapper">
					<?php 
						require ("config/config.php");
						$query = mysql_query("select * from med_rec_kehamilan where kd_data_kehamilan = '$kd'");
					?>
					<table style="font-size:12px;" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th><center>Tanggal</center></th>
								<th><center>Keluhan</center></th>
								<th><center>Tekanan Darah</center></th>
								<th><center>Berat Badan</center></th>
								<th><center>Umur Kehamilan</center></th>
								<th><center>Tinggi Fundus</center></th>
								<th><center>Letak Janin</center></th>
								<th><center>Denyut Jantung Janin</center></th>
								<th><center>Kaki Bengkak</center></th>
								<th><center>Hasil Pemeriksaan Lab</center></th>
								<th><center>Tanggal Harus Kembali</center></th>
							</tr>
						</thead>
						<tbody>
							<?php
								$no = 1;																
								while ($data = mysql_fetch_array($query)) {
							?>
								<tr>
									<td><center><?php echo $data['tgl']; ?></center></td>
									<td><center><?php echo $data['keluhan']; ?></center></td>
									<td><center><?php echo $data['tekanan_darah']; ?></center></td>
									<td><center><?php echo $data['berat_badan']; ?></center></td>
									<td><center><?php echo $data['umur_kehamilan']; ?></center></td>
									<td><center><?php echo $data['tinggi_fundus']; ?></center></td>
									<td><center><?php echo $data['letak_janin']; ?></center></td>
									<td><center><?php echo $data['denyut_jantung_janin']; ?></center></td>
									<td><center><?php echo $data['kaki_bengkak']; ?></center></td>
									<td><center><?php echo $data['hasil_pemeriksaan_lab']; ?></center></td>
									<td><center><?php echo $data['kapan_harus_kembali']; ?></center></td>
									
								</tr>
							<?php
								}
							?>  
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
<!-- //view -->
<!-- footer -->
<?php
	include("footer.php");
?>