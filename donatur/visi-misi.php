		<section class="no-padding sh-company-history">
			<div class="sub-header ">
				<h3>VISI MISI</h3>
				<ol class="breadcrumb">
					<li>
						<a href="#"><i class="fa fa-home"></i> Tentang Kami </a>
					</li>
					<li class="active">Visi Misi</li>
				</ol>
			</div>
		</section>
		<!-- /Sub HEader -->

		<section class="bg-case-h9">
			<?php
			$getInfo = mysqli_query($conn, "SELECT * FROM tentangkami");
			$xz       = mysqli_fetch_assoc($getInfo);
			?>
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="main-page">
							<div class="history-list-warp">
								<div class="item-history-post">
									<p class="title-history"><span>3</span>Visi Misi PAKYM Surakarta</p>
									<p><?php echo $xz['visimisi']; ?></p>
								</div>
							</div>
						</div>
					</div>
					<?php
					include "sidebar-right.php";
					?>
				</div>
			</div>
		</section>
		<!-- /Subcribe -->