	    <?php
			if (isset($_SESSION['username']) || !empty($_SESSION['username'])) {
				$username = $_SESSION['username'];
		?>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Ketik pencarian disini...">
				</div>
				<button type="submit" class="btn btn-default searc" aria-label="Left Align">
					<span> </span>
				</button>
			</form>
		<?php
			} else {
		?>
			
		<?php
			}
		?>
	</div><!-- /.navbar-collapse -->
</nav>