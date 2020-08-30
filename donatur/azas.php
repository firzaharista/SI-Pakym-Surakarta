<section class="no-padding sh-company-history">
	<div class="sub-header ">
		<h3>AZAS - AZAS PAKYM </h3>
		<ol class="breadcrumb">
			<li>
				<a href="#"><i class="fa fa-home"></i>Tentang Kami</a>
			</li>
			<li class="active">Azas - Azas Pakym</li>
		</ol>
	</div>
</section>
<!-- /Sub HEader -->

<section class="bg-case-h9">
	<?php
	$sql = "SELECT * FROM tentangkami";
	$run = mysqli_query($conn, $sql);
	$xy   = mysqli_fetch_array($run);
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="main-page">
					<div class="history-list-warp">
						<div class="item-history-post">
							<p class="title-history"><span>2</span>Azas-Azas PAKYM</p>
							<p>
								<?php echo $xy['azas']; ?>
							</p>
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