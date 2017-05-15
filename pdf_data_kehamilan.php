<?php 
	include("pdf/mpdf.php");
	session_start();
	include("config/config.php");
	include("_session_login.php");

	$mpdf=new mPDF('win-1252','A4','','',15,10,16,10,10,10);//A4 page in portrait for landscape add -L.
	$mpdf->SetHeader('||');
	$mpdf->setFooter('{PAGENO}');// Giving page number to your footer.
	$mpdf->useOnlyCoreFonts = true;    // false is default
	$mpdf->SetDisplayMode('fullpage');
	// Buffer the following html with PHP so we can store it to a variable later
	ob_start();
	
	include("pdf_header.php");
?>



<h3 style="background:#FFFFFF; font-size: 16pt; color:#6ECDCF; font-weight:bold; margin:0px; margin-left:180px;">Catatan Kesehatan Ibu Hamil</h3>

<hr>


	
<div style="font-size:12pt; line-height: 200%;">
	<?php
		require ("config/config.php");
	
		$lihat = $_GET['pdf'];
		$query = mysql_query("select * from data_kehamilan where kd_data_kehamilan = '$lihat'");
		
		while ($data = mysql_fetch_array($query)) {
			$kd_data_kehamilan=$data['kd_data_kehamilan'];
			$kd_header=$data['kd_header'];
			$nama=$data['nama'];
			$tgl_hpht=$data['tgl_hpht'];
			$tgl_htp=$data['tgl_htp'];
			$lingkar_lengan_atas=$data['lingkar_lengan_atas'];
			$kek=$data['kek'];
			$tinggi_badan=$data['tinggi_badan'];
			$gol_darah=$data['gol_darah'];
			$kontrasepsi=$data['kontrasepsi'];
			$riwayat_penyakit=$data['riwayat_penyakit'];
			$riwayat_alergi=$data['riwayat_alergi'];
			
			$hamil_ke=$data['hamil_ke'];
			$jml_persalinan=$data['jml_persalinan'];
			$jml_keguguran=$data['jml_keguguran'];
			$lingkar_lengan_atas=$data['lingkar_lengan_atas'];
			$G=$data['G'];
			$P=$data['P'];
			$A=$data['A'];
			$jml_anak_hidup=$data['jml_anak_hidup'];
			$jml_lahir_mati=$data['jml_lahir_mati'];
			$jml_anak_lahir_kurang_bulan=$data['jml_anak_lahir_kurang_bulan'];
			$jarak_kehamilan=$data['jarak_kehamilan'];
			$jarak_kehamilan_waktu=$data['jarak_kehamilan_waktu'];
			$status_imunisasi=$data['status_imunisasi'];
			$penolong_persalinan_terakhir=$data['penolong_persalinan_terakhir'];
			$cara_persalinan_terakhir=$data['cara_persalinan_terakhir'];
			$tindakan=$data['tindakan'];
		}
	?>
		
	<div class="banner-bottom">
		<div class="container3">
			<br>
			
			<center>
				
				Nama Pasien: 
				<input class="form2" type="text" name="nama" placeholder="Nama" required value="<?php echo $nama; ?>" readonly >
				
				<input class="form2" type="text" name="kd_header" placeholder="Kode Pasien" required style="background:#FFFFFF; color:#6ECDCF" value="<?php echo $kd_header; ?>" readonly >
					
				<br>
				
				Hari Pertama Haid Terakhir (HPHT), tanggal: 
				<input class="form2" type="date" name="tgl_hpht" placeholder="....................................................." value="<?php echo $tgl_hpht; ?>" required readonly />
					
				<br>

				Hari Taksiran Persalinan (HPT), tanggal: 
				<input class="form2" type="date" name="tgl_htp" placeholder="....................................................." value="<?php echo $tgl_htp; ?>" required readonly />
					
				<br>

				Lingkar Lengan Atas: 
				<input style="width:10%;" class="form2" type="text" name="lingkar_lengan_atas" placeholder=".............." value="<?php echo $lingkar_lengan_atas; ?>" readonly /> cm; 	
				
				<br>
					
				KEK 
				( <input type="radio" name="kek" value="Yes" required <?php if($kek=="Yes") echo 'checked'; ?> readonly disabled > ), 
				Non KEK 
				( <input type="radio" name="kek" value="No" required <?php if($kek=="No") echo 'checked'; ?> readonly disabled > )	
				
				<br>
				
				Tinggi Badan: 
				<input style="width:10%;" class="form2" type="text" name="tinggi_badan" placeholder=".............." value="<?php echo $tinggi_badan; ?>" readonly /> cm
					
				<br>

				Golongan Darah: 
				<input class="form2" type="text" name="gol_darah" placeholder=".............." value="<?php echo $gol_darah; ?>" readonly />
					
				<br>

				Penggunaan kontrasepsi sebelum kehamilan ini: 
				<input class="form2" type="text" name="kontrasepsi" placeholder="....................................................." value="<?php echo $kontrasepsi; ?>" readonly />
					
				<br>

				Riwayat Penyakit yang diderita ibu: <br> 
				<textarea style="width:500px; height:100px;" class="form2" name="riwayat_penyakit" placeholder=".........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." readonly ><?php echo $riwayat_penyakit; ?>&nbsp;</textarea>

				<br>

				Riwayat Alergi: <br> 
				<textarea style="width:500px; height:100px;" class="form2" name="riwayat_alergi" placeholder=".........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." readonly ><?php echo $riwayat_alergi; ?>&nbsp;</textarea>
		
				</br></br>
			</center>
		</div>
	</div>
</div>

<?php 
	$html = ob_get_contents();
	ob_end_clean();
	// send the captured HTML from the output buffer to the mPDF class for processing
	$mpdf->WriteHTML($html);
	//$mpdf->SetProtection(array(), 'user', 'password'); uncomment to protect your pdf page with password.
	$mpdf->Output($file_name, 'I');  
	rename("Data Cab Meeting", $file_name);
	exit;
?>