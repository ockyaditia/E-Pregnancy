<div class="header">
	<div class="container">
		<div class="logo">
			<a href="index.php">Sistem Perawatan Kesehatan Kehamilan</a>
		</div>
		<div class="header-icons">
			<ul>
				<li><a href="#" class="facebook"> </a></li>
				<li><a href="#" class="twitter"> </a></li>
				<li><a href="#" class="in"> </a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="header-bottom">
	<div class="container">
		<div class="header-bottom-right">
			<ul class="nav navbar-nav">
			<?php
				if (isset($_SESSION['username']) || !empty($_SESSION['username'])) {
					$username = $_SESSION['username'];
					$nama = $_SESSION['nama'];
					$bagian = $_SESSION['bagian'];
			?>
				<li class="login-logout" style="font-size:11.5pt; font-weight:bold; font-style: italic; color:#000000; background:#FFFFFF">
					<table>
						<tr>
							<td>Nama</td>
							<td>&nbsp;:&nbsp;</td>
							<td><?php echo $nama; ?></td>
						</tr>
						<tr>
							<td>Bagian</td>
							<td>&nbsp;:&nbsp;</td>
							<td><?php echo $bagian; ?></td>
						</tr>
					</table>
				</li>
				<a href="logout.php"><li class="login-logout">Keluar</li></a>
			<?php
				} else {
			?>
				<a href="login.php"><li class="login-logout">Masuk</li></a>
			<?php
				}
			?>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li class="phone"><span> </span></li>
				<li class="num">021 44X XXXX</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>