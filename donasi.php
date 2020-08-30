<section class="no-padding sh-company-history">
	<div class="sub-header ">
		<!-- <span>COMPANY UPDATES</span> -->
		<h3>DONASI</h3>
		<ol class="breadcrumb">
			<li>
				<a><i class="fa fa-home"></i>Donasi Sekarang</a>
			</li>
		</ol>
	</div>
</section>
<!-- /subheader -->

<section class="bg-case-h9">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="group-title-btn">
					<div class="title-block">
						<span class="top-title "></span>
						<h2>Donasi</h2>
						<p class="sub-title">Silahkan lakukan donasimu . . . </p>
						<span class="bottom-title"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br><br>
<section class="no-padding bg-iconbox-h3">
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<div class="warp-full-width offer-h3-warp section-fix-position-h3">
					<?php
					if (isset($_POST['d_online'])) { ?>
						<div class="alert alert-warning alert-dismissible fade in" role="alert">
							<button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true"> &times;</span></button><strong>Silahkan login dahulu !</strong> untuk melakukan donasi online . . .
						</div>
					<?php } elseif (isset($_POST['d_offline'])) {
					?>
						<script type="text/javascript">
							document.location = "?page=donasi-offline";
						</script>
					<?php

				} elseif (isset($_POST['d_barang'])) {
					?>
						<script type="text/javascript">
							document.location = "?page=donasi-barang";
						</script>
					<?php

				}
				?>
					<div id="offer-h2" class="owl-offer-h3">
						<div class="item-offer">
							<div class="iconbox-type-xs iconbox-overlay-bg text-center bg-light-grey">
								<span class="lnr lnr-laptop-phone"></span>
								<h4>Donasi Online</h4>
								<p>Donasi yang dilakukan secara online dengan transfer bank</p>
								<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
									<input type="submit" name="d_online" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" value="Klik disini">
								</form>
							</div>
						</div>
						<div class="item-offer">
							<div class="iconbox-type-xs iconbox-overlay-bg text-center bg-light-grey ">
								<span class="fa fa-handshake-o"></span>
								<h4>Donasi Offline</h4>
								<p>Donasi ditempat langsung dalam bentuk uang tunai</p>
								<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
									<input type="submit" name="d_offline" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" value="Klik disini">
								</form>
							</div>
						</div>
						<div class="item-offer">
							<div class="iconbox-type-xs iconbox-overlay-bg text-center bg-light-grey">
								<span class="fa fa-suitcase"></span>
								<h4>Donasi Barang</h4>
								<p>Donasi yang berupa barang-barang yang bermanfaat</p>
								<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
									<input type="submit" name="d_barang" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" value="Klik disini">
								</form>
							</div>
						</div>

						<div class="item-offer">
							<div class="iconbox-type-xs iconbox-overlay-bg text-center bg-light-grey">
								<span class="fa fa-money"></span>
								<h4>Rekening</h4>
								<p>Rekening bank dari PAKYM Surakarta</p>
								<a href="?page=rekening-bank"><button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Klik Disini</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Services -->