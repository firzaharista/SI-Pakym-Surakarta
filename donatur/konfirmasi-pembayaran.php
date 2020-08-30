<section class="no-padding sh-company-history">
	<div class="sub-header ">
		<h3>Konfirmasi</h3>
		<ol class="breadcrumb">
			<li>
				<a><i class="fa fa-home"></i>Konfirmasi Pembayaran</a>
			</li>
			<!-- <li class="active">PROFIL DONATUR</li> -->
		</ol>
	</div>
</section>
<!-- /Sub HEader -->
<section class="bg-case-h9">
	<div class="container">
		<div class="row">
			<?php
			$user_en = $_SESSION["username_donatur_en"];
			$sql = mysqli_query($conn, "SELECT * FROM donasi_online WHERE status_donasi='Donasi Belum Dibayar' AND username_donatur_en = '$user_en'");
			$re  = mysqli_fetch_array($sql);
			if ($re['status_donasi'] == 'Donasi Belum Dibayar') { ?>
				<div class="shop-cart-warp">
					<div class="col-md-10 col-sm-offset-1">
						<div class="table-responsive table-reset">
							<div class="text-left">
								<div class="title-block title-contact">
									<h3>Data Konfirmasi</h3>
									<span class="bottom-title"></span>
								</div>
							</div>
							<table class="table table-reset  table-cart">
								<thead>
									<tr>
										<th class="product-thumbnail">No.</th>
										<th class="product-name">No. Invoice</th>
										<th class="product-name">Nama Donatur</th>
										<th class="product-price">Status</th>
										<th class="product-remove">Donasi</th>
										<th class="product-quantity">Konfirmasi Donasi</th>

									</tr>
								</thead>
								<tbody>
									<!-- <tr> -->
									<?php
									$username_a = $_SESSION['username_donatur_en'];
									// $username = md5(md5('smp') . $username_a);
									$no = 1;
									$sql = mysqli_query($conn, "SELECT * FROM donasi_online WHERE status_donasi='Donasi Belum Dibayar' AND username_donatur_en='$username_a'");
									while ($do = mysqli_fetch_array($sql)) {
										echo "
												<tr>
													<td class='product-thumbnail'>$no</td>
													<td class='product-name'>
														<b>$do[id_donasionline]</b>
													</td>
													<td class='product-name'>$do[nama_donatur]</td>
													<td class='product-price'>$do[status_donasi]</td>
													<td class='product-subtotal'>$do[jumlah_donasi]</td>
													<td class='product-subtotal'>
														<a href='?page=konfirmasi&donasi=$do[id_donasionline_en]'><button class='btn btn-primary'>Konfirmasi</button></a>
													</td>
												</tr>";
										$no++;
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			<?php } else { ?>
				<div class="title-block text-center">
					<span class="top-title"></span>
					<h3>Maaf, tidak terdapat konfirmasi pembayaran donasi</h3>
					<p class="sub-title">Silahkan lakukan donasi anda</p>
					<span class="bottom-title"></span>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- /Table Cart -->