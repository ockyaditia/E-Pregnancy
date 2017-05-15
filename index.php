<?php
	include("head.php");
?>
</head>
	
<body>
<!-- header -->
	<?php
		include("header.php");
	?>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner-nav">
			
					<?php
						include("nav-top.php");
					?>
						
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						 <ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Beranda</a></li>
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
<!-- Slider-starts-Here -->
				<script src="js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: true,
				        nav: false,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info">
							<h1>Kami Merawat Kesehatan Kehamilan Anda</h1>
							<p>Kami jaga kesehatan Anda selama masa hamil.</p>
							<a href="single.php" class="hvr-shutter-out-horizontal">Selengkapnya</a>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<h1>Kami Merawat Persalinan Anda</h1>
							<p>Kami rawat dan kontrol kenyamanan persalinan Anda</p>
							<a href="single.php" class="hvr-shutter-out-horizontal">Selengkapnya</a>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<h1>Kami Memantau Masa Nifas Anda</h1>
							<p>Kami tetap mamantau masa nifas Anda setelah melahirkan</p>
							<a href="single.php" class="hvr-shutter-out-horizontal">Selengkapnya</a>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<h1>Kami Merawat Bayi Anda</h1>
							<p>Kami tetap jaga kesehatan bayi Anda setelah melahirkan sampai telah tiba waktunya untuk dirawat oleh Ibunya.</p>
							<a href="single.php" class="hvr-shutter-out-horizontal">Selengkapnya</a>
						</div>
					</li>
				</ul>
			</div>	
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom-video -->
	<div class="banner-bottom-video">
		<div class="container">
			<div class="banner-bottom-video-grids">
				<div class="banner-bottom-video-grid-left">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
						  <h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							  Menstimulasi dengan Sentuhan
							</a>
						  </h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						  <div class="panel-body">
							Di usia kehamilan 8 minggu, bayi mulai sensitif dengan sentuhan di bagian perut. Ketika sudah cukup besar untuk menggerakkan kaki atau tangannya, Anda bisa menyentuh balik untuk menciptakan bonding dan menstimulasi bayi. Bayi pun sering merespons stimulasi ini dengan menendang balik. Stimulasi seperti ini juga membuat rileks, menenteramkan, menurunkan detak jantung, dan membatasi gerakan-gerakannya.
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							  Musik
							</a>
						  </h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						   <div class="panel-body">
							Musik menjadi salah satu cara untuk membuat badan serta pikiran Anda menjadi lebih santai. Pilihlah musik yang dapat membuat perasaan menjadi tenang dan bahagia. Data mutakhir juga menunjukkan bahwa musik yang didengarkan ibu selama masa kehamilannya berhubungan positif dengan kemampuan berbahasa bayi.
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							  Berpikir Positif
							</a>
						  </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						   <div class="panel-body">
							Beberapa penelitian telah menunjukkan bahwa apa yang Anda pikirkan dan lakukan dapat menjadi pengetahuan bagi janin. Jika lingkungan Anda dipenuhi hal-hal yang negatif, maka pertumbuhan otak janin mengarah negatif. So, jauhkan pikiran-pikiran tersebut saat hamil ya.
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							  Mendapatkan Sinar Matahari
							</a>
						  </h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
						   <div class="panel-body">
							Cobalah untuk berjalan-jalan selama 20 menit di pagi hari untuk meningkatkan perkembangan otak janin. Vitamin D yang terkandung di dalam cahaya matahari  dapat meningkatkan kekebalan tubuh dan pertumbuhan tulangnya.
						  </div>
						</div>
					  </div>
					   <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFive">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							  Membaca Buku
							</a>
						  </h4>
						</div>
						<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
						   <div class="panel-body">
							Meski sebagian orang menilai membaca buku di malam hari dapat merusak mata, nyatanya malam hari justru menjadi waktu yang ideal bagi Anda untuk membaca buku. Membaca buku di malam hari dapat meningkatkan kekuatan otak. Selain itu, membaca di malam hari juga dapat membantu Mama mengeluarkan hormon baik yang dapat meningkatkan kerja otak janin.
						  </div>
						</div>
					  </div>
					</div>
				</div>
				<div class="banner-bottom-video-grid-right">
					<h4>Menawarkan berbagai layanan kesehatan kehamilan</h4>
					<div class="banner-bottom-video-grid-rgt">
						<img src="images/7.jpg" alt=" " class="img-responsive" />
						<div class="caption">
							<h5>"Be healthy! Eat well. Live well."</h5>
							<h5>“Makanan sehat, membuat tubuh menjadi sehat.”</h5>
							<h5>“Mencegah lebih baik daripada mengobati.”</h5>
							<h5>“Sehat itu emas, sehat itu mutiara, sehat itu segalanya.”</h5>
							<h5>“Tubuh sehat, awal kesuksesanmu!”</h5>
							<h5>“Kekayaan itu penting, tapi kesehatan jauh lebih penting.”</h5>
							<h5>“Di dalam tubuh yang sehat, terdapat jiwa yang kuat.”</h5>
						</div>
					</div>
					<div class="banner-bottom-video-grid-rgt">
						<ul>
							<li><a href="blog.php?info=1&det=Manfaat Yoga Bagi Ibu Hamil">Manfaat Yoga Bagi Ibu Hamil</a></li>
							<li><a href="blog.php?info=2&det=Pengentalan Darah Pada Ibu Hamil">Pengentalan Darah Pada Ibu Hamil</a></li>
							<li><a href="blog.php?info=3&det=Endema Pada Ibu Hamil">Endema Pada Ibu Hamil</a></li>
							<li><a href="blog.php?info=4&det=Stretch Mark Pada Ibu Hamil">Stretch Mark Pada Ibu Hamil</a></li>
							<li><a href="blog.php?info=5&det=Macam Tanaman Obat dan Manfaatnya">Macam Tanaman Obat dan Manfaatnya</a></li>
							<li><a href="blog.php?info=6&det=Manfaat Lendir Serviks">Manfaat Lendir Serviks</a></li>
							<li><a href="blog.php?info=7&det=Gejala, Penyebab Dan Pengobatan Menopouse Dini">Gejala, Penyebab Dan Pengobatan Menopouse Dini</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom-video -->
<!-- footer -->
<?php
	include("footer.php");
?>