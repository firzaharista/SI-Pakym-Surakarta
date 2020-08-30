<section class="no-padding sh-company-history">
	<div class="sub-header ">
		<!-- <span>WHAT WE DO</span> -->
		<h3>PANDUAN DONASI ONLINE</h3>
		<ol class="breadcrumb">
			<li>
				<a><i class="fa fa-home"></i>Panduan Donasi</a>
			</li>
			<li class="active">Donasi Online</li>
		</ol>
	</div>
</section>
<!-- /Sub HEader -->

<section class="bg-case-h9">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php include "sidebar-left-panduan.php"; ?>
			</div>
			<div class="col-md-9">
				<div class="services-2-detail-warp">
					<div class="row">
						<div class="col-md-12">
							<?php
							$getInfo = mysqli_query($conn, "SELECT * FROM panduan_donasi");
							$pdo       = mysqli_fetch_array($getInfo);
							?>
							<div class="title-block title-contact">
								<h3>Panduan Donasi Online</h3>
								<span class="bottom-title"></span> <br>
								<p><?php echo $pdo['donasionline']; ?></p>
							</div>

						</div>
						<div class="col-md-4">
							<!-- <img src="images/icon/icon-atm.jpg" class="img-responsive" alt="Image"> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>