<?php
$nama_kelurahan = $_POST['kelurahan'];
$tahun = $_POST['tahun'];

$jan = mysql_query("select count(s.kd_summary) as 'jan' from summary s join mst_kel m on SUBSTRING_INDEX(SUBSTRING(s.nama_ibu FROM IF(locate('-atg',s.nama_ibu)=0,1,1+LOCATE('-atg',s.nama_ibu))),'-',1) = m.kd_kel where m.nama_kel = '$nama_kelurahan' AND YEAR(s.tanggal) = '$tahun' AND MONTH(s.tanggal) = 1 AND s.keadaan_bayi = 'Meninggal'");
$sql1 = mysql_fetch_assoc($jan);

$feb = mysql_query("select count(s.kd_summary) as 'feb' from summary s join mst_kel m on SUBSTRING_INDEX(SUBSTRING(s.nama_ibu FROM IF(locate('-atg',s.nama_ibu)=0,1,1+LOCATE('-atg',s.nama_ibu))),'-',1) = m.kd_kel where m.nama_kel = '$nama_kelurahan' AND YEAR(s.tanggal) = '$tahun' AND MONTH(s.tanggal) = 2 AND s.keadaan_bayi = 'Meninggal'");
$sql2 = mysql_fetch_assoc($feb);

$mar = mysql_query("select count(s.kd_summary) as 'mar' from summary s join mst_kel m on SUBSTRING_INDEX(SUBSTRING(s.nama_ibu FROM IF(locate('-atg',s.nama_ibu)=0,1,1+LOCATE('-atg',s.nama_ibu))),'-',1) = m.kd_kel where m.nama_kel = '$nama_kelurahan' AND YEAR(s.tanggal) = '$tahun' AND MONTH(s.tanggal) = 3 AND s.keadaan_bayi = 'Meninggal'");
$sql3 = mysql_fetch_assoc($mar);

$apr = mysql_query("select count(s.kd_summary) as 'apr' from summary s join mst_kel m on SUBSTRING_INDEX(SUBSTRING(s.nama_ibu FROM IF(locate('-atg',s.nama_ibu)=0,1,1+LOCATE('-atg',s.nama_ibu))),'-',1) = m.kd_kel where m.nama_kel = '$nama_kelurahan' AND YEAR(s.tanggal) = '$tahun' AND MONTH(s.tanggal) = 4 AND s.keadaan_bayi = 'Meninggal'");
$sql4 = mysql_fetch_assoc($apr);

$may = mysql_query("select count(s.kd_summary) as 'may' from summary s join mst_kel m on SUBSTRING_INDEX(SUBSTRING(s.nama_ibu FROM IF(locate('-atg',s.nama_ibu)=0,1,1+LOCATE('-atg',s.nama_ibu))),'-',1) = m.kd_kel where m.nama_kel = '$nama_kelurahan' AND YEAR(s.tanggal) = '$tahun' AND MONTH(s.tanggal) = 5 AND s.keadaan_bayi = 'Meninggal'");
$sql5 = mysql_fetch_assoc($may);

$jun = mysql_query("select count(s.kd_summary) as 'jun' from summary s join mst_kel m on SUBSTRING_INDEX(SUBSTRING(s.nama_ibu FROM IF(locate('-atg',s.nama_ibu)=0,1,1+LOCATE('-atg',s.nama_ibu))),'-',1) = m.kd_kel where m.nama_kel = '$nama_kelurahan' AND YEAR(s.tanggal) = '$tahun' AND MONTH(s.tanggal) = 6 AND s.keadaan_bayi = 'Meninggal'");
$sql6 = mysql_fetch_assoc($jun);

$jul = mysql_query("select count(s.kd_summary) as 'jul' from summary s join mst_kel m on SUBSTRING_INDEX(SUBSTRING(s.nama_ibu FROM IF(locate('-atg',s.nama_ibu)=0,1,1+LOCATE('-atg',s.nama_ibu))),'-',1) = m.kd_kel where m.nama_kel = '$nama_kelurahan' AND YEAR(s.tanggal) = '$tahun' AND MONTH(s.tanggal) = 7 AND s.keadaan_bayi = 'Meninggal'");
$sql7 = mysql_fetch_assoc($jul);

$aug = mysql_query("select count(s.kd_summary) as 'aug' from summary s join mst_kel m on SUBSTRING_INDEX(SUBSTRING(s.nama_ibu FROM IF(locate('-atg',s.nama_ibu)=0,1,1+LOCATE('-atg',s.nama_ibu))),'-',1) = m.kd_kel where m.nama_kel = '$nama_kelurahan' AND YEAR(s.tanggal) = '$tahun' AND MONTH(s.tanggal) = 8 AND s.keadaan_bayi = 'Meninggal'");
$sql8 = mysql_fetch_assoc($aug);

$sep = mysql_query("select count(s.kd_summary) as 'sep' from summary s join mst_kel m on SUBSTRING_INDEX(SUBSTRING(s.nama_ibu FROM IF(locate('-atg',s.nama_ibu)=0,1,1+LOCATE('-atg',s.nama_ibu))),'-',1) = m.kd_kel where m.nama_kel = '$nama_kelurahan' AND YEAR(s.tanggal) = '$tahun' AND MONTH(s.tanggal) = 9 AND s.keadaan_bayi = 'Meninggal'");
$sql9 = mysql_fetch_assoc($sep);

$oct = mysql_query("select count(s.kd_summary) as 'oct' from summary s join mst_kel m on SUBSTRING_INDEX(SUBSTRING(s.nama_ibu FROM IF(locate('-atg',s.nama_ibu)=0,1,1+LOCATE('-atg',s.nama_ibu))),'-',1) = m.kd_kel where m.nama_kel = '$nama_kelurahan' AND YEAR(s.tanggal) = '$tahun' AND MONTH(s.tanggal) = 10 AND s.keadaan_bayi = 'Meninggal'");
$sql10 = mysql_fetch_assoc($oct);

$nov = mysql_query("select count(s.kd_summary) as 'nov' from summary s join mst_kel m on SUBSTRING_INDEX(SUBSTRING(s.nama_ibu FROM IF(locate('-atg',s.nama_ibu)=0,1,1+LOCATE('-atg',s.nama_ibu))),'-',1) = m.kd_kel where m.nama_kel = '$nama_kelurahan' AND YEAR(s.tanggal) = '$tahun' AND MONTH(s.tanggal) = 11 AND s.keadaan_bayi = 'Meninggal'");
$sql11 = mysql_fetch_assoc($nov);

$dec = mysql_query("select count(s.kd_summary) as 'dec' from summary s join mst_kel m on SUBSTRING_INDEX(SUBSTRING(s.nama_ibu FROM IF(locate('-atg',s.nama_ibu)=0,1,1+LOCATE('-atg',s.nama_ibu))),'-',1) = m.kd_kel where m.nama_kel = '$nama_kelurahan' AND YEAR(s.tanggal) = '$tahun' AND MONTH(s.tanggal) = 12 AND s.keadaan_bayi = 'Meninggal'");
$sql12 = mysql_fetch_assoc($dec);
?>

<script type="text/javascript">
$(function () {
    $('#container').highcharts({
    title: {
    text: '<?php echo $nama_kelurahan . ' (' . $tahun . ')'; ?>',
		x: - 20 //center
    },
		subtitle: {
		text: '',
				x: - 20
		},
		xAxis: {
		categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
				'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
		},
		yAxis: {
		title: {
		text: 'Jumlah'
		},
				plotLines: [{
				value: 0,
						width: 1,
						color: '#808080'
				}]
		},
		tooltip: {
		valueSuffix: ' Orang'
		},
		series: [
		{
		name: '<?php echo $nama_kelurahan; ?>',
				data: [
						<?php echo $sql1['jan'] ?>,
						<?php echo $sql2['feb'] ?>,
						<?php echo $sql3['mar'] ?>,
						<?php echo $sql4['apr'] ?>,
						<?php echo $sql5['may'] ?>,
						<?php echo $sql6['jun'] ?>,
						<?php echo $sql7['jul'] ?>,
						<?php echo $sql8['aug'] ?>,
						<?php echo $sql9['sep'] ?>,
						<?php echo $sql10['oct'] ?>,
						<?php echo $sql11['nov'] ?>,
						<?php echo $sql12['dec'] ?>
					]
		}, ]
    });
});
</script>
	
<script>
	$(function () {
	$('#container1').highcharts({
	chart: {
	type: 'column'
	},
			title: {
			text: '<?php echo $nama_kelurahan . ' (' . $tahun . ')'; ?>'
			},
			subtitle: {
			text: ''
			},
			xAxis: {
			categories: [
					'Jan',
					'Feb',
					'Mar',
					'Apr',
					'May',
					'Jun',
					'Jul',
					'Aug',
					'Sep',
					'Oct',
					'Nov',
					'Dec'
			],
					crosshair: true
			},
			yAxis: {
			min: 0,
					title: {
					text: 'Jumlah'
					}
			},
			tooltip: {
			headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
					pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
					'<td style="padding:0"><b>{point.y:.f} Orang</b></td></tr>',
					footerFormat: '</table>',
					shared: true,
					useHTML: true
			},
			plotOptions: {
			column: {
			pointPadding: 0.2,
					borderWidth: 0
			}
			},
			series: [
			{
			name: '<?php echo $nama_kelurahan; ?>',
					data: [
						<?php echo $sql1['jan'] ?>,
						<?php echo $sql2['feb'] ?>,
						<?php echo $sql3['mar'] ?>,
						<?php echo $sql4['apr'] ?>,
						<?php echo $sql5['may'] ?>,
						<?php echo $sql6['jun'] ?>,
						<?php echo $sql7['jul'] ?>,
						<?php echo $sql8['aug'] ?>,
						<?php echo $sql9['sep'] ?>,
						<?php echo $sql10['oct'] ?>,
						<?php echo $sql11['nov'] ?>,
						<?php echo $sql12['dec'] ?>
					]
			},
			]
	});
	});
</script>
</head>
<body>
    <script src="highcharts/highcharts.js"></script>
    <script src="highcharts/exporting.js"></script>

    <?php
    if ($nama_kelurahan == 1 || $tahun == 1) {
	?>
		<div class="alerts">
			<div class="alert alert-danger" role="alert">
				<center><strong>Gagal kirim data!</strong> Silahkan pilih Kelurahan dan Tahun!.</center>
			</div>
		</div>
	<?php
    } else {
        ?>
        <div id="container" class="col-md-6" style="min-width: 310px; height: 400px; margin: 0 auto; margin-top: 40px;"></div>

        <div id="container1" class="col-md-6" style="min-width: 310px; height: 400px; margin: 0 auto; margin-top: 40px;"></div>
		&nbsp;
	
		<div class="panel-body">
			<div class="dataTable_wrapper" style="margin-top: 50px">
				<?php
					require ("config/config.php");
					$query = mysql_query("select * from summary WHERE keadaan_bayi = 'Meninggal'");
				?>
				<table style="font-size:12px;" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th><center>No</center></th>
							<th><center>Nama Ibu</center></th>
							<th><center>Tanggal</center></th>
							<th><center>Keadaan Ibu</center></th>
							<th><center>Komplikasi Nifas</center></th>
							<th><center>Keadaan Bayi</center></th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							while ($data = mysql_fetch_array($query)) {
						?>
							<tr>
								<td><center><?php echo $no ?></center></td>
								<td><center><?php echo $data['nama_ibu']; ?></center></td>
								<td><center><?php echo $data['tanggal']; ?></center></td>
								<td><center><?php echo $data['keadaan_ibu']; ?></center></td>
								<td><center><?php echo $data['komplikasi_nifas']; ?></center></td>
								<td><center><?php echo $data['keadaan_bayi']; ?></center></td>
							</tr>
						<?php
								$no++;
							}
						?>  
					</tbody>
				</table>
			</div>
		</div>
    <?php 
		} 
	?>


