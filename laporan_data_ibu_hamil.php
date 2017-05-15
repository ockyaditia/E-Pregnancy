<?php
include("head.php");
include("_session_login.php");
?>
</head>

<body>
    <script src="js/bootstrap.js"></script>
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
					<h3>Data Jumlah Ibu Hamil</h3>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top:-75px;">
            <div class="panel panel-default">

                <!-- /.panel-heading -->
                <div class="panel-body text-center">
                    <form action="laporan_data_ibu_hamil.php" method="post">
                    <?php
						include("graph-input.php");
					?>
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        $kelurahan = $_POST['kelurahan'];
                        include 'graph_laporan_data_ibu_hamil.php';
                    }
                    ?>

                </div>
            </div>
        </div>

        <!-- //view -->
        <!-- footer -->
        <?php
        include("footer.php");
        ?>
</body>