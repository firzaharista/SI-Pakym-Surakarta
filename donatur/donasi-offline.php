<section class="no-padding sh-company-history">
	<div class="sub-header ">
		<!-- <span>PENDA</span> -->
		<h3>DONASI OFFLINE</h3>
		<ol class="breadcrumb">
			<li>
				<a href="#"><i class="fa fa-home"></i>Donasi Offline</a>
			</li>
			<!-- <li>
 							<a href="#"> SERVICES </a>
 						</li>
 						<li class="active">BONDS & COMMODITIES</li> -->
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
			<div class="container">
				<div class="row">
					<div class="callback-warp cbw-h5">
						<div class="col-md-8">
							<div class="group-title-btn">
								<div class="title-block">
									<span class="top-title"></span>
									<h3>DONASI OFFLINE</h3>
									<p class="sub-title">Donasi Offline merupakan donasi yang dilakukan secara langsung tanpa media online</p>
									<span class="bottom-title"></span>
								</div>
							</div>
							<div class="plan-warp-h5">
								<div class="container">
									<div class="row">
										<div class="col-md-9">
											<div class="services-2-detail-warp">
												<div class="row">
													<div class="col-md-10">
														<div class="title-block title-contact">
															<div class="list-check-icon"> <br>
																<?php
																$w = "SELECT * FROM keterangan_donasi";
																$wx = mysqli_query($conn, $w);
																$wxa = mysqli_fetch_array($wx);
																?>
																<?php echo $wxa['ket_offline']; ?>

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