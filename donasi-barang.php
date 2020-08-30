			<section class="no-padding sh-company-history">
				<div class="sub-header ">
					<!-- <span>WHAT WE DO</span> -->
					<h3>DONASI BARANG</h3>
					<ol class="breadcrumb">
						<li>
							<a><i class="fa fa-home"></i>Donasi Barang</a>
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
												<h3>DONASI Barang</h3>
												<p class="sub-title">Donasi barang merupakan jenis donasi yang dilakukan dengan cara memberikan suatu barang ke Pakym Surakarta</p>
												<span class="bottom-title"></span> <br>
												<p><?php echo $wxa['ket_barang']; ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>