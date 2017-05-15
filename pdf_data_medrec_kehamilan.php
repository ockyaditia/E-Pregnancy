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



<h3 style="background:#FFFFFF; font-size: 16pt; color:#6ECDCF; font-weight:bold; margin:0px; margin-left:190px;">Data Medical Record Pasien<br></h3>

<hr>


	
<div style="font-size:12pt; line-height: 200%;">
	<?php
		require ("config/config.php");
	
		if (isset($_GET['kd'])) {
			$kd = $_GET['kd'];
		} else {
			echo "<script>window.location = 'petugas_data_kehamilan_form.php'</script>";
		}
	?>
		
	<div class="banner-bottom">
		<div class="container3">
			<br>
			
			<center>
				
			<div class="panel-body">
				<div class="dataTable_wrapper">
					<?php 
						require ("config/config.php");
						$query = mysql_query("select * from med_rec_kehamilan where kd_data_kehamilan = '$kd'");
					?>
					<table style="font-size:8px; border: 1px solid black;" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th style="border: 1px solid black;"><center>Tanggal</center></th>
								<th style="border: 1px solid black;"><center>Keluhan</center></th>
								<th style="border: 1px solid black;"><center>Tekanan Darah</center></th>
								<th style="border: 1px solid black;"><center>Berat Badan</center></th>
								<th style="border: 1px solid black;"><center>Umur Kehamilan</center></th>
								<th style="border: 1px solid black;"><center>Tinggi Fundus</center></th>
								<th style="border: 1px solid black;"><center>Letak Janin</center></th>
								<th style="border: 1px solid black;"><center>Denyut Jantung Janin</center></th>
								<th style="border: 1px solid black;"><center>Kaki Bengkak</center></th>
								<th style="border: 1px solid black;"><center>Hasil Pemeriksaan Lab</center></th>
								<th style="border: 1px solid black;"><center>Tindakan</center></th>
								<th style="border: 1px solid black;"><center>Nasihat</center></th>
								<th style="border: 1px solid black;"><center>Keterangan</center></th>
								<th style="border: 1px solid black;"><center>Tanggal Harus Kembali</center></th>
							</tr>
						</thead>
						<tbody>
							<?php														
								while ($data = mysql_fetch_array($query)) {
							?>
								<tr>
									<td style="border: 1px solid black;"><center><?php echo $data['tgl']; ?></center></td>
									<td style="border: 1px solid black;"><center><?php echo $data['keluhan']; ?></center></td>
									<td style="border: 1px solid black;"><center><?php echo $data['tekanan_darah']; ?></center></td>
									<td style="border: 1px solid black;"><center><?php echo $data['berat_badan']; ?></center></td>
									<td style="border: 1px solid black;"><center><?php echo $data['umur_kehamilan']; ?></center></td>
									<td style="border: 1px solid black;"><center><?php echo $data['tinggi_fundus']; ?></center></td>
									<td style="border: 1px solid black;"><center><?php echo $data['letak_janin']; ?></center></td>
									<td style="border: 1px solid black;"><center><?php echo $data['denyut_jantung_janin']; ?></center></td>
									<td style="border: 1px solid black;"><center><?php echo $data['kaki_bengkak']; ?></center></td>
									<td style="border: 1px solid black;"><center><?php echo $data['hasil_pemeriksaan_lab']; ?></center></td>
									<td style="border: 1px solid black;"><center><?php echo $data['tindakan']; ?></center></td>
									<td style="border: 1px solid black;"><center><?php echo $data['nasihat']; ?></center></td>
									<td style="border: 1px solid black;"><center><?php echo $data['ket']; ?></center></td>
									<td style="border: 1px solid black;"><center><?php echo $data['kapan_harus_kembali']; ?></center></td>
									
								</tr>
							<?php
								}
							?>  
						</tbody>
					</table>
				</div>
			</div>
		
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