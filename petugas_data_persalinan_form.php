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
					if (isset($_GET['success'])) {
				?>
					<h3 style="margin-bottom:0px;">Halaman Data Persalinan</h3>
					<div class="alerts">
						<div class="alert alert-success" role="alert">
							<center><strong>Sukses Tambah Data!</strong> .</center>
						</div>
					</div>
				<?php
					} else if (isset($_GET['success_ubah'])) {
				?>
					<h3 style="margin-bottom:0px;">Halaman Data Persalinan</h3>
					<div class="alerts">
						<div class="alert alert-success" role="alert">
							<center><strong>Sukses Ubah Data!</strong> .</center>
						</div>
					</div>
				<?php
					} else if (isset($_GET['success_hapus'])) {
				?>
					<h3 style="margin-bottom:0px;">Halaman Data Persalinan</h3>
					<div class="alerts">
						<div class="alert alert-success" role="alert">
							<center><strong>Sukses Hapus Data!</strong> .</center>
						</div>
					</div>
				<?php
					} else {
				?>
					<h3>Halaman Data Persalinan</h3>
				<?php
					}
				?>
			</div>
		</div>
	</div>
	
	<div class="container" style="margin-top:-75px;">
		<div class="panel panel-default">
			
			<center>
				<a href ="petugas_data_persalinan_tambah.php">
					<img src = "images/add-list-xxl.png" width="80px" height="80px">
				</a>
			</center>
			
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="dataTable_wrapper">
					<?php 
						require ("config/config.php");
						$query = mysql_query("select * from persalinan");
					?>
					<table style="font-size:12px;" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th><center>No</center></th>
								<th><center>Nama</center></th>
								<th><center>Tanggal Persalinan</center></th>
								<th><center>Pukul</center></th>
								<th><center>Umur Kehamilan</center></th>
								<th><center>Penolong</center></th>
								<th><center>Cara Persalinan</center></th>
								<th><center>Keadaan Ibu</center></th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$no = 1;																
								while ($data = mysql_fetch_array($query)) {
							?>
								<tr>
									<td><center><?php echo $no ?></center></td>
									<td><center><?php echo $data['nama']; ?></center></td>
									<td><center><?php echo $data['tgl_persalinan']; ?></center></td>
									<td><center><?php echo $data['pukul']; ?></center></td>
									<td><center><?php echo $data['umur_kehamilan']; ?> bulan</center></td>
									<td><center><?php echo $data['penolong_lain_lain']; ?></center></td>
									<td><center><?php echo $data['cara_persalinan']; ?></center></td>
									<td><center><?php echo $data['keadaan_ibu']; ?></center></td>
									<td>
										<center>
											<a href="petugas_data_detail_persalinan_form.php?kd=<?php echo $data['kd_persalinan']; ?>">
												<img src="images/med-record.png" style="margin-left:10px; margin-bottom:5px;" width="30" height="30"/>
											</a>
											
											<a href="petugas_data_persalinan_lihat.php?lihat=<?php echo $data['kd_persalinan']; ?>">
												<img src="images/view-details-xxl.png" style="margin-left:10px; margin-bottom:5px;" width="30" height="30"/>
											</a>
											
											<a href="petugas_data_persalinan_ubah.php?ubah=<?php echo $data['kd_persalinan']; ?>">
												<img src="images/edit-property-xxl.png" style="margin-left:10px;" width="30" height="30"/>
											</a>
										
											<a href="petugas_data_persalinan_hapus.php?hapus=<?php echo $data['kd_persalinan']; ?>" onclick="return doconfirm()">
												<img src="images/delete-xxl.png" style="margin-left:10px;" width="30" height="30"/>
											</a>
										</center>
									</td>
									
									<script>
										function doconfirm()
										{
											job = confirm("Anda yakin akan menghapus data?");
											if (job !== true){
												return false;
											}
										}
									</script>
									
								</tr>
							<?php
									$no++;
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