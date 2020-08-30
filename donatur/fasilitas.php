			<section class="no-padding sh-company-history">
				<div class="sub-header ">
					<h3>TENTANG KAMI</h3>
					<ol class="breadcrumb">
						<li>
							<a href="#"><i class="fa fa-home"></i>Tentang Kami</a>
						</li>
						<li class="active">Fasilitas</li>
					</ol>
				</div>
			</section>
			<!-- /Sub HEader -->

			<section class="bg-case-h9">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="demo-offer-h2">
								<div class="title-block">
									<span class="top-title"></span>
									<h2>Fasilitas</h2>
									<p class="sub-title">Fasilitas yang terdapat di PAKYM Surakarta</p>
									<span class="bottom-title"></span>
								</div>

								<div class="warp-full-width offer-h2-warp">

									<div id="offer-h2" class="owl-offer-h2">
										<?php
										$getInfo = mysqli_query($conn, "SELECT * FROM fasilitas");
										while ($b = mysqli_fetch_array($getInfo)) {
											?>
											<div class="item-offer">
												<div class="iconbox-type-xs iconbox-overlay-bg text-center bg-light-grey">
													<span class="lnr lnr-layers"></span>
													<h4><?php echo $b['namafasilitas']; ?></h4>
												</div>
											</div>
										<?php } ?>
									</div>

									<div class="customNavigation">
										<a class="btn-1 prev-offer-h2"><i class="fa fa-angle-left"></i></a>
										<a class="btn-1 next-offer-h2"><i class="fa fa-angle-right"></i></a>
									</div><!-- End owl button -->
								</div>

							</div>
						</div>
						<?php
						include 'sidebar-right.php';
						?>
					</div>
			</section>