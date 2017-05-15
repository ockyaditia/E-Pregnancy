<?php
	include("head.php");
	include("_session_dinkes-puskesmas.php");
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
					<h3 style="margin-bottom:0px;">Halaman Data Detail Pelayanan Ibu Nifas</h3>
					<div class="alerts">
						<div class="alert alert-success" role="alert">
							<center><strong>Sukses Tambah Data!</strong> .</center>
						</div>
					</div>
				<?php
					} else if (isset($_GET['success_ubah'])) {
				?>
					<h3 style="margin-bottom:0px;">Halaman Data Detail Pelayanan Ibu Nifas</h3>
					<div class="alerts">
						<div class="alert alert-success" role="alert">
							<center><strong>Sukses Ubah Data!</strong> .</center>
						</div>
					</div>
				<?php
					} else if (isset($_GET['success_hapus'])) {
				?>
					<h3 style="margin-bottom:0px;">Halaman Data Detail Pelayanan Ibu Nifas</h3>
					<div class="alerts">
						<div class="alert alert-success" role="alert">
							<center><strong>Sukses Hapus Data!</strong> .</center>
						</div>
					</div>
				<?php
					} else {
				?>
					<h3>Halaman Data Detail Pelayanan Ibu Nifas</h3>
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
					echo "<script>window.location = 'petugas_data_ibu_nifas_form.php'</script>";
				}
			?>
			
			<?php 
				require ("config/config.php");
				$query = mysql_query("select * from det_ibu_nifas where kd_pelayanan = '$kd'");
				
				$kd_det_ibu_nifas="";
				$kd_pelayanan="";

				$item1_kunjungan1="";
				$item1_kunjungan2="";
				$item1_kunjungan3="";
				
				$item2_kunjungan1="";
				$item2_kunjungan2="";
				$item2_kunjungan3="";
				
				$item3_kunjungan1="";
				$item3_kunjungan2="";
				$item3_kunjungan3="";
				
				$item4_kunjungan1="";
				$item4_kunjungan2="";
				$item4_kunjungan3="";
				
				$item5_kunjungan1="";
				$item5_kunjungan2="";
				$item5_kunjungan3="";
				
				$item6_kunjungan1="";
				$item6_kunjungan2="";
				$item6_kunjungan3="";
				
				$item7_kunjungan1="";
				$item7_kunjungan2="";
				$item7_kunjungan3="";
				
				$item8_kunjungan1="";
				$item8_kunjungan2="";
				$item8_kunjungan3="";
				
				$item9_kunjungan1="";
				$item9_kunjungan2="";
				$item9_kunjungan3="";
				
				$item10_kunjungan1="";
				$item10_kunjungan2="";
				$item10_kunjungan3="";
				
				$item11_kunjungan1="";
				$item11_kunjungan2="";
				$item11_kunjungan3="";
				
				$item12_kunjungan1="";
				$item12_kunjungan2="";
				$item12_kunjungan3="";
				
				$item13_kunjungan1="";
				$item13_kunjungan2="";
				$item13_kunjungan3="";
				
				$item14_kunjungan1="";
				$item14_kunjungan2="";
				$item14_kunjungan3="";
				
				$item15_kunjungan1="";
				$item15_kunjungan2="";
				$item15_kunjungan3="";
				
				$item16_kunjungan1="";
				$item16_kunjungan2="";
				$item16_kunjungan3="";
				
				$item17_kunjungan1="";
				$item17_kunjungan2="";
				$item17_kunjungan3="";
				
				$item18_kunjungan1="";
				$item18_kunjungan2="";
				$item18_kunjungan3="";
				
				$buang_air_besar="";
				$buang_air_kecil="";
				$produksi_asi="";
				$catatan="";
				
				while ($data = mysql_fetch_array($query)) {
					$kd_pelayanan=$data['kd_pelayanan'];
					$kd_det_ibu_nifas=$data['kd_det_ibu_nifas'];
	
					$item1_kunjungan1=$data['item1_kunjungan1'];
					$item1_kunjungan2=$data['item1_kunjungan2'];
					$item1_kunjungan3=$data['item1_kunjungan3'];
					
					$item2_kunjungan1=$data['item2_kunjungan1'];
					$item2_kunjungan2=$data['item2_kunjungan2'];
					$item2_kunjungan3=$data['item2_kunjungan3'];
					
					$item3_kunjungan1=$data['item3_kunjungan1'];
					$item3_kunjungan2=$data['item3_kunjungan2'];
					$item3_kunjungan3=$data['item3_kunjungan3'];
					
					$item4_kunjungan1=$data['item4_kunjungan1'];
					$item4_kunjungan2=$data['item4_kunjungan2'];
					$item4_kunjungan3=$data['item4_kunjungan3'];
					
					$item5_kunjungan1=$data['item5_kunjungan1'];
					$item5_kunjungan2=$data['item5_kunjungan2'];
					$item5_kunjungan3=$data['item5_kunjungan3'];
					
					$item6_kunjungan1=$data['item6_kunjungan1'];
					$item6_kunjungan2=$data['item6_kunjungan2'];
					$item6_kunjungan3=$data['item6_kunjungan3'];
					
					$item7_kunjungan1=$data['item7_kunjungan1'];
					$item7_kunjungan2=$data['item7_kunjungan2'];
					$item7_kunjungan3=$data['item7_kunjungan3'];
					
					$item8_kunjungan1=$data['item8_kunjungan1'];
					$item8_kunjungan2=$data['item8_kunjungan2'];
					$item8_kunjungan3=$data['item8_kunjungan3'];
					
					$item9_kunjungan1=$data['item9_kunjungan1'];
					$item9_kunjungan2=$data['item9_kunjungan2'];
					$item9_kunjungan3=$data['item9_kunjungan3'];
					
					$item10_kunjungan1=$data['item10_kunjungan1'];
					$item10_kunjungan2=$data['item10_kunjungan2'];
					$item10_kunjungan3=$data['item10_kunjungan3'];
					
					$item11_kunjungan1=$data['item11_kunjungan1'];
					$item11_kunjungan2=$data['item11_kunjungan2'];
					$item11_kunjungan3=$data['item11_kunjungan3'];
					
					$item12_kunjungan1=$data['item12_kunjungan1'];
					$item12_kunjungan2=$data['item12_kunjungan2'];
					$item12_kunjungan3=$data['item12_kunjungan3'];
					
					$item13_kunjungan1=$data['item13_kunjungan1'];
					$item13_kunjungan2=$data['item13_kunjungan2'];
					$item13_kunjungan3=$data['item13_kunjungan3'];
					
					$item14_kunjungan1=$data['item14_kunjungan1'];
					$item14_kunjungan2=$data['item14_kunjungan2'];
					$item14_kunjungan3=$data['item14_kunjungan3'];
					
					$item15_kunjungan1=$data['item15_kunjungan1'];
					$item15_kunjungan2=$data['item15_kunjungan2'];
					$item15_kunjungan3=$data['item15_kunjungan3'];
					
					$item16_kunjungan1=$data['item16_kunjungan1'];
					$item16_kunjungan2=$data['item16_kunjungan2'];
					$item16_kunjungan3=$data['item16_kunjungan3'];
					
					$item17_kunjungan1=$data['item17_kunjungan1'];
					$item17_kunjungan2=$data['item17_kunjungan2'];
					$item17_kunjungan3=$data['item17_kunjungan3'];
					
					$item18_kunjungan1=$data['item18_kunjungan1'];
					$item18_kunjungan2=$data['item18_kunjungan2'];
					$item18_kunjungan3=$data['item18_kunjungan3'];
					
					$buang_air_besar=$data['buang_air_besar'];
					$buang_air_kecil=$data['buang_air_kecil'];
					$produksi_asi=$data['produksi_asi'];
					$catatan=$data['catatan'];
				}
			?>
			
			<div class="panel-body">
				<div class="dataTable_wrapper">
					
					<table style="font-size:16px;" class="table table-striped table-bordered table-hover" >
						<thead>
							<tr>
								<th><center>Buang Air Besar</center></th>
								<th><center>Buang Air Kecil</center></th>
								<th><center>Produksi ASI</center></th>
								<th><center>Catatan Dokter / Bidan</center></th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td><center><input type="text" value="<?php echo $buang_air_besar; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $buang_air_kecil; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $produksi_asi; ?>" readonly disabled /></center></td>
									<td><center>
										<textarea style="height:150px;" name="catatan" readonly disabled ><?php echo $catatan; ?></textarea>
									</center></td>
								</tr>
						</tbody>
					</table>
					
					<table style="font-size:16px;" class="table table-striped table-bordered table-hover" >
						<thead>
							<tr>
								<th><center>NO.</center></th>
								<th><center>JENIS PELAYANAN</center></th>
								<th><center>KUNJUNGAN I</br>(6 jam - 3 hari)</center></th>
								<th><center>KUNJUNGAN II</br>(4 - 28 hari)</center></th>
								<th><center>KUNJUNGAN III</br>(29 - 42 hari)</center></th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td><center></center></td>
									<td><center><b>Kondisi ibu nifas secara umum: </b></center></td>
									<td><center></center></td>
									<td><center></center></td>
									<td><center></center></td>
								</tr>
								<tr>
									<td><center>1.</center></td>
									<td><center>Tekanan darah, suhu tubuh, respirasi, dan nadi</center></td>
									<td><center><input type="text" value="<?php echo $item1_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item1_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item1_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
								<tr>
									<td><center>2.</center></td>
									<td><center>Perdarahan pervaginam, kondisi perineum, </br>tanda infeksi, kontraksi rahim, tinggi fundus </br>uteri, dan memeriksa payudara</center></td>
									<td><center><input type="text" value="<?php echo $item2_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item2_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item2_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
								<tr>
									<td><center>3.</center></td>
									<td><center>Lokhia dan perdarahan</center></td>
									<td><center><input type="text" value="<?php echo $item3_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item3_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item3_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
								<tr>
									<td><center>4.</center></td>
									<td><center>Pemeriksaan jalan lahir</center></td>
									<td><center><input type="text" value="<?php echo $item4_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item4_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item4_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
								<tr>
									<td><center>5.</center></td>
									<td><center>Pemeriksaan payudara dan anjuran </br>pemberian ASI Eksklusif</center></td>
									<td><center><input type="text" value="<?php echo $item5_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item5_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item5_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
								<tr>
									<td><center>6.</center></td>
									<td><center>Pemberian Kapsul Vit. A</center></td>
									<td><center><input type="text" value="<?php echo $item6_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item6_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item6_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
								<tr>
									<td><center>7.</center></td>
									<td><center>Pelayanan kontrasepsi pascapersalinan</center></td>
									<td><center><input type="text" value="<?php echo $item7_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item7_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item7_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
								<tr>
									<td><center>8.</center></td>
									<td><center>Penanganan risiko tinggi dan komplikasi pada </br>nifas</center></td>
									<td><center><input type="text" value="<?php echo $item8_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item8_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item8_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
								<tr>
									<td><center></center></td>
									<td><center></center></td>
									<td><center></center></td>
									<td><center></center></td>
									<td><center></center></td>
								</tr>
								<tr>
									<td><center></center></td>
									<td><center><b>Memberi nasehat yaitu: </b></center></td>
									<td><center></center></td>
									<td><center></center></td>
									<td><center></center></td>
								</tr>
								<tr>
									<td><center>9.</center></td>
									<td><center>Makan makanan yang beraneka ragam yang </br>mengandung karbohidrat, protein hewani, </br>protein nabati, sayur, dan buah-buahan</center></td>
									<td><center><input type="text" value="<?php echo $item9_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item9_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item9_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
								<tr>
									<td><center>10.</center></td>
									<td><center>Kebutuhan air minum pada ibu menyusui pada </br>6 bulan pertama adalah 14 gelas sehari dan </br>pada 6 bulan adalah 12 gelas sehari</center></td>
									<td><center><input type="text" value="<?php echo $item10_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item10_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item10_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
								<tr>
									<td><center>11.</center></td>
									<td><center>Menjaga kebersihan diri, termasuk kebersihan </br>daerah kemaluan, ganti pembalut sesering </br>mungkin</center></td>
									<td><center><input type="text" value="<?php echo $item11_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item11_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item11_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
								<tr>
									<td><center>12.</center></td>
									<td><center>Istirahat cukup, saat bayi tidur ibu istirahat</center></td>
									<td><center><input type="text" value="<?php echo $item12_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item12_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item12_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
								<tr>
									<td><center>13.</center></td>
									<td><center>Bagi ibu yang melahirkan dengan cara operasi </br>caesar maka harus menjaga kebersihan luka </br>bekas operasi</center></td>
									<td><center><input type="text" value="<?php echo $item13_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item13_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item13_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
								<tr>
									<td><center>14.</center></td>
									<td><center>Cara menyusui yang benar dan hanya memberi </br>ASI saja selama 6 bulan</center></td>
									<td><center><input type="text" value="<?php echo $item14_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item14_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item14_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
								<tr>
									<td><center>15.</center></td>
									<td><center>Perawatan bayi yang benar</center></td>
									<td><center><input type="text" value="<?php echo $item15_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item15_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item15_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
								<tr>
									<td><center>16.</center></td>
									<td><center>Jangan membiarkan bayi menangis terlalu </br>lama, karena akan menbuat bayi stress</center></td>
									<td><center><input type="text" value="<?php echo $item16_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item16_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item16_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
								<tr>
									<td><center>17.</center></td>
									<td><center>Lakukan stimulasi komunikasi dengan bayi </br>sedini mungkin bersama suami dan kelurga</center></td>
									<td><center><input type="text" value="<?php echo $item17_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item17_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item17_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
								<tr>
									<td><center>18.</center></td>
									<td><center>Untuk berkonsultasi kepada tenaga kesehatan </br>untuk pelayanan KB setelah persalinan</center></td>
									<td><center><input type="text" value="<?php echo $item18_kunjungan1; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item18_kunjungan2; ?>" readonly disabled /></center></td>
									<td><center><input type="text" value="<?php echo $item18_kunjungan3; ?>" readonly disabled /></center></td>
								</tr>
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