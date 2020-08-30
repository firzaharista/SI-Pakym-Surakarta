			<section class="no-padding sh-company-history">
				<div class="sub-header ">
					<!-- <span>WHAT WE DO</span> -->
					<h3>DONASI OFFLINE</h3>
					<ol class="breadcrumb">
						<li>
							<a><i class="fa fa-home"></i>Donasi Offline</a>
						</li>
					</ol>
				</div>
			</section>
			<!-- /Sub HEader -->

			<section class="bg-case-h9">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<?php include "sidebar-left.php"; ?>
						</div>
						<div class="col-md-9">
							<div class="services-2-detail-warp">
								<div class="row">
									<div class="col-md-12">
										<?php
										$w = "SELECT * FROM keterangan_donasi";
										$wx = mysqli_query($conn, $w);
										$wxa = mysqli_fetch_array($wx);
										?>
										<div class="group-title-btn">
											<div class="title-block">
												<span class="top-title"></span>
												<h3>DONASI OFFLINE</h3>
												<p class="sub-title">Donasi Offline merupakan donasi yang dilakukan secara langsung tanpa media online</p>
												<span class="bottom-title"></span> <br>
												<p><?php echo $wxa['ket_offline']; ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>