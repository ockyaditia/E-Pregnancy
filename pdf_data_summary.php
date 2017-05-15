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



<h3 style="background:#FFFFFF; font-size: 16pt; color:#6ECDCF; font-weight:bold; margin:0px; margin-left:200px;">Kesimpulan Akhir Pasien<br></h3>

<hr>


	
<div style="font-size:12pt; line-height: 100%;">
	<?php
		require ("config/config.php");
	
		$lihat = $_GET['pdf'];
		$query = mysql_query("select * from summary where kd_summary = '$lihat'");
		
		while ($data = mysql_fetch_array($query)) {
			$kd_summary=$data['kd_summary'];
			$kd_persalinan=$data['kd_persalinan'];
			$nama_ibu=$data['nama_ibu'];
			$tanggal=$data['tanggal'];
			$keadaan_ibu=$data['keadaan_ibu'];
			$komplikasi_nifas=$data['komplikasi_nifas'];
			$keadaan_bayi=$data['keadaan_bayi'];
		}
	?>
		
	<div class="banner-bottom">
		<div class="container3">
			<br>
			
			<center>
				
					Nama Pasien:<span style="color:#FF0000"></span></td>
					<input class="form" type="text" name="nama_ibu" id="nama" placeholder="Nama Pasien" required style="background:#6ECDCF; color:#FFFFFF" value="<?php echo $nama_ibu; ?>" readonly >
					
					<input class="form" type="text" name="kd_persalinan" id="kd_persalinan" placeholder="Kode Persalinan" required style="background:#6ECDCF; color:#FFFFFF" value="<?php echo $kd_persalinan; ?>" readonly >
					
					<br>
					<br>
					
					Tanggal Persalinan:<span style="color:#FF0000"></span></td>
					<input class="form" type="text" name="nama_ibu" id="nama" placeholder="Nama Pasien" required style="background:#6ECDCF; color:#FFFFFF" value="<?php echo $tanggal; ?>" readonly >
					
					<br><br>
					<br>
					
					<b>Kesimpulan Akhir Nifas<span style="color:#FF0000"></span></b><br>
					<br>
					Keadaan Ibu: 
					<br>
					<table>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_ibu" value="Sehat" required <?php if($keadaan_ibu=="Sehat") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Sehat
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_ibu" value="Sakit" required <?php if($keadaan_ibu=="Sakit") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Sakit
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_ibu" value="Menangis" required <?php if($keadaan_ibu=="Menangis") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Menangis
							</td>
						</tr>
					</table>
					
					<br>
					
					<b>Komplikasi Nifas: <span style="color:#FF0000"></span></b>
					<br>
					<table>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="komplikasi_nifas" value="Perdarahan" required <?php if($komplikasi_nifas=="Perdarahan") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Perdarahan
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="komplikasi_nifas" value="Infeksi" required <?php if($komplikasi_nifas=="Infeksi") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Infeksi
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="komplikasi_nifas" value="Hipertensi" required <?php if($komplikasi_nifas=="Hipertensi") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Hipertensi
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="komplikasi_nifas" value="Lain-lain: Depresi post partum" required <?php if($komplikasi_nifas=="Lain-lain: Depresi post partum") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Lain-lain: <br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Depresi <br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Post <br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Partum
							</td>
						</tr>
					</table>
					
					<br>
					
					<b>Keadaan Bayi: <span style="color:#FF0000"></span></b>
					<br>
					<table>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_bayi" value="Sehat" required <?php if($keadaan_bayi=="Sehat") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Sehat
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_bayi" value="Sakit" required <?php if($keadaan_bayi=="Sakit") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Sakit
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_bayi" value="Kelainan Bawaan" required <?php if($keadaan_bayi=="Kelainan Bawaan") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Kelainan Bawaan
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_bayi" value="Meninggal" required <?php if($keadaan_bayi=="Meninggal") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Meninggal
							</td>
						</tr>
					</table>
		
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