<section class="no-padding sh-company-history">
	<div class="sub-header ">
		<!-- <span>WHAT WE D</span> -->
		<h3>PANDUAN DONASI BARANG</h3>
		<ol class="breadcrumb">
			<li>
				<a><i class="fa fa-home"></i>Panduan Donasi</a>
			</li>
			<li class="active">Donasi Barang</li>
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
							$pdb       = mysqli_fetch_assoc($getInfo);
							?>
							<div class="title-block title-contact">
								<h3>Panduan Donasi Barang</h3>
								<span class="bottom-title"></span> <br>
								<p><?php echo $pdb['donasibarang'] ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>