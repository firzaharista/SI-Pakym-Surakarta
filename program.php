			<section class="no-padding sh-company-history">
				<div class="sub-header ">
					<h3>PROGRAM PAKYM</h3>
					<ol class="breadcrumb">
						<li>
							<a href="#"><i class="fa fa-home"></i> Tentang Kami </a>
						</li>
						<li class="active">Program</li>
					</ol>
				</div>
			</section>
			<!-- /Sub HEader -->

			<section class="bg-case-h9">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="services-2-detail-warp">
								<div class="row">
									<div class="col-md-12">
										<div class="title-block title-contact">
											<h3>Program PAKYM</h3>
											<span class="bottom-title"></span> <br>
											<p>PAKYM Surakarta mempunyai beberapa program diantaranya : </p>

											<div class="tab-warp-services-3 desk-pdt-30">

												<!-- Nav tabs -->
												<ul class="nav tab-style-1" role="tablist">
													<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">PENDIDIKAN</a></li>
													<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">EKONOMI</a></li>
													<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">KESEHATAN</a></li>
													<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">PEMBANGUNAN</a></li>
												</ul>
												<?php
												$getInfo = mysqli_query($conn, "SELECT * FROM program");
												$b       = mysqli_fetch_assoc($getInfo);
												?>
												<div class="tab-content tab-content-style-1">
													<div role="tabpanel" class="tab-pane fade in active" id="home">
														<p><?php echo $b['progpendidikan']; ?> </p>
													</div>
													<div role="tabpanel" class="tab-pane fade" id="profile">
														<p><?php echo $b['progekonomi']; ?> </p>
													</div>
													<div role="tabpanel" class="tab-pane fade" id="messages">
														<p><?php echo $b['progkesehatan']; ?> </p>
													</div>
													<div role="tabpanel" class="tab-pane fade" id="settings">
														<p><?php echo $b['progpembangunan']; ?> </p>
													</div>
												</div>
											</div>
										</div>



									</div>

								</div>
							</div>

						</div>
						<?php
						include 'sidebar-right.php';
						?>
			</section>