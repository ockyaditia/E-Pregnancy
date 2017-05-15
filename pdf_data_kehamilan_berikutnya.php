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
				
				Hamil ke
				<input style="width:10%;" class="form2" type="text" name="hamil_ke" placeholder=".............." value="<?php echo $hamil_ke; ?>" readonly />
				<br>
				Jumlah persalinan
				<input style="width:10%;" class="form2" type="text" name="jml_persalinan" placeholder=".............." value="<?php echo $jml_persalinan; ?>" readonly />
				<br>
				Jumlah keguguran
				<input style="width:10%;" class="form2" type="text" name="jml_keguguran" placeholder=".............." value="<?php echo $jml_keguguran; ?>" readonly />
				<br>
				G
				<input style="width:10%;" class="form2" type="text" name="G" placeholder=".............." value="<?php echo $G; ?>" readonly />
				
				P
				<input style="width:10%;" class="form2" type="text" name="P" placeholder=".............." value="<?php echo $P; ?>" readonly />
				
				A
				<input style="width:10%;" class="form2" type="text" name="A" placeholder=".............." value="<?php echo $A; ?>" readonly />
				
				<br>
				
				Jumlah anak hidup
				<input style="width:10%;" class="form2" type="text" name="jml_anak_hidup" placeholder=".............." value="<?php echo $jml_anak_hidup; ?>" readonly />
				
				Jumlah lahir mati
				<input style="width:10%;" class="form2" type="text" name="jml_lahir_mati" placeholder=".............." value="<?php echo $jml_lahir_mati; ?>" readonly />
				
				<br>
				
				Jumlah anak lahir kurang bulan
				<input style="width:10%;" class="form2" type="text" name="jml_anak_lahir_kurang_bulan" placeholder=".............." value="<?php echo $jml_anak_lahir_kurang_bulan; ?>" readonly /> anak
				
				<br>
				
				Jarak kehamilan ini dengan persalinan terakhir
				<input class="form2" type="text" name="status_imunisasi" placeholder="........................................................" value="<?php echo $status_imunisasi; ?>" readonly />
				
				<br>
				
				Status imunisasi Imunisasi TT terakhir
				<input style="width:10%;" class="form2" type="text" name="jarak_kehamilan" placeholder=".............." value="<?php echo $jarak_kehamilan; ?>" readonly />
				
				<input style="width:15%;" class="form2" type="text" name="jarak_kehamilan_waktu" placeholder=".............." value="<?php echo $jarak_kehamilan_waktu; ?>" readonly />
				
				<br>
				
				Penolong persalinan terakhir
				<input class="form2" type="text" name="penolong_persalinan_terakhir" placeholder="........................................................" value="<?php echo $penolong_persalinan_terakhir; ?>" readonly />
				
				<br>
				
				Cara persalinan terakhir
				<input class="form2" type="text" name="cara_persalinan_terakhir" placeholder=".............." value="<?php echo $cara_persalinan_terakhir; ?>" readonly />

				<br>

				Tindakan: <br> 
				<textarea style="width:500px; height:100px;" class="form2" name="tindakan" placeholder=".........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." readonly ><?php echo $tindakan; ?>&nbsp;</textarea>
		
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