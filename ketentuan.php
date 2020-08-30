<section class="no-padding sh-company-history">
	<div class="sub-header ">

		<h3>KETENTUAN PAKYM</h3>
		<ol class="breadcrumb">
			<li>
				<a href="#"><i class="fa fa-home"></i> Anak Asuh</a>
			</li>
			<li class="active">Ketentuan</li>
		</ol>
	</div>
</section>
<!-- /Sub HEader -->

<section class="bg-case-h9">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="sideabar">
					<div class="widget widget-sidebar widget-list-link">
						<h4 class="title-widget-sidebar">
							Anak Asuh
						</h4>
						<ul class="wd-list-link">
							<li><a href="?page=anak-asuh">Data Anak Asuh</a></li>
							<li><a href="?page=ketentuan">Ketentuan</a></li>
							<li><a href="?page=alumni">Data Alumni</a></li>
							<li><a href="?page=daftar-alumni">Daftar Alumni</a></li>
						</ul>
					</div>
					<?php include "sidebar-left.php"; ?>
				</div>
			</div>


			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="services-2-detail-warp">
							<div class="row">
								<div class="col-md-12">
									<div class="title-block title-contact">
										<h3>Ketentuan PAKYM</h3>
										<span class="bottom-title"></span> <br>
										<p>PAKYM mempunyai beberapa ketentuan yang menjadi aturan di PAKYM Surakarta. Adapun ketentuan tersebut meliputi :</p>
										<?php
										$getInfo = mysqli_query($conn, "SELECT * FROM ketentuan");
										$b       = mysqli_fetch_assoc($getInfo);
										?>
										<div class="tab-warp-services-3 desk-pdt-30">
											<!-- Nav tabs -->
											<ul class="nav tab-style-1" role="tablist">
												<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">TATA TERTIB</a></li>
												<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">LARANGAN</a></li>
											</ul>

											<div class="tab-content tab-content-style-1">
												<div role="tabpanel" class="tab-pane fade in active" id="home">
													<p><?php echo $b['tata_tertib']; ?> </p>
												</div>
												<div role="tabpanel" class="tab-pane fade" id="profile">
													<p><?php echo $b['larangan']; ?> </p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>