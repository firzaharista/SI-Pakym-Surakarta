<section class="no-padding sh-company-history">
	<div class="sub-header ">

		<h3>PENDAFTARAN PAKYM</h3>
		<ol class="breadcrumb">
			<li>
				<a><i class="fa fa-home"></i>Panduan Pendaftaran Anak Asuh</a>
			</li>
			<!-- <li class="active">Ketentuan</li> -->
		</ol>
	</div>
</section>
<!-- /Sub HEader -->

<section class="bg-case-h9">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="sideabar">
					<?php include "sidebar-left.php"; ?>
				</div>
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="callback-warp cbw-h5">
						<div class="col-md-12">
							<div class="group-title-btn">
								<div class="title-block">
									<span class="top-title"></span>
									<h3>PANDUAN PENDAFTARAN</h3>
									<!-- <p class="sub-title"></p> -->
									<span class="bottom-title"></span>
								</div>
								<div class="customNavigation">
									<a class="btn-3 btn-3-prev prev-step"><i class="fa fa-angle-left"></i></a>
									<a class="btn-3 btn-3-next next-step"><i class="fa fa-angle-right"></i></a>
								</div><!-- End owl button -->
							</div>

							<div class="plan-warp-h5">
								<div id="plan-h5" class="owl-plan-h5">
									<?php
									$no = 1;
									$sql = "SELECT * FROM panduan_pendaftaran";
									$run = mysqli_query($conn, $sql);
									while ($pen = mysqli_Fetch_array($run)) {
										?>
										<div class="item-plan-step">
											<div class="step"><img src='../images/icon/sign-out.png' width='30' height='30'></div>
											<h4><?php echo $pen['judul']; ?></h4>
											<p><?php echo $pen['keterangan']; ?></p>
										</div>
									<?php }
								$no++;
								?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="services-2-detail-warp">
					<div class="col-md-6">
						<div class="title-block title-contact">
							<br>
							<h3>Syarat - syarat Diterima</h3>
							<span class="bottom-title"></span> <br>
							<p>Setiap anak asuh PAKYM Surakarta harus memiliki persyaratan yang sudah ditentukan</p>

							<?php
							$w = "SELECT * FROM ketentuan";
							$wx = mysqli_query($conn, $w);
							$wxa = mysqli_fetch_array($wx);
							?>
							<p><b>Syarat :</b></p>
							<?php echo $wxa['syarat_diterima']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>