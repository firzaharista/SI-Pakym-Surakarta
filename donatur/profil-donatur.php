		<section class="no-padding sh-company-history">
			<div class="sub-header ">
				<h3>PROFIL DONATUR</h3>
				<ol class="breadcrumb">
					<li>
						<a><i class="fa fa-home"></i>Profil Donatur</a>
					</li>
					<!-- <li class="active">PROFIL DONATUR</li> -->
				</ol>
			</div>
		</section>
		<!-- /Sub HEader -->


		<?php
		// $nama = $_SESSION['nama'];
		// $email = $_SESSION['email'];
		// $telepon = $_SESSION['telepon'];
		// $alamat = $_SESSION['alamat'];

		$user_en = $_SESSION["username_donatur_en"];
		$sql = "SELECT * FROM user_donatur WHERE username_donatur_en='$user_en'";
		$run = mysqli_query($conn, $sql);
		$datac = mysqli_fetch_array($run);
		?>
		<section class="bg-case-h9">
			<div class=" container ">
				<div class=" row ">
					<div class="col-md-5 col-sm-12">
						<div class="title-block title-contact">
							<h3>Data Diri</h3>
							<span class="bottom-title"></span>
						</div>
						<div class="table-warp">
							<div class="table-responsive">
								<table class="table table-reset table-detail-job table-striped table-bordered">
									<tbody>
										<tr>
											<td class="title">Nama</td>
											<td class="detail"><?php echo $datac['nama']; ?></td>
										</tr>
										<tr>
											<td class="title">Telepon</td>
											<td class="detail"><?php echo $datac['telepon']; ?></td>
										</tr>
										<tr>
											<td class="title">Email</td>
											<td class="detail"><?php echo $datac['email']; ?></td>
										</tr>
										<tr>
											<td class="title">Alamat</td>
											<td class="detail"><?php echo $datac['alamat']; ?></td>
										</tr>
									</tbody>
								</table>
								<div>
									<div class="group-btn pull-left">
										<a href="?page=upd-profil-donatur" class="ot-btn btn-sub-color">Update Data</a>
									</div>

									<!-- <a href="?page=upd-profil-donatur"><input type="submit" class="btn btn" name="updateprofil" value="Update Data"></a> -->
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-7 col-sm-12">
						<div class="shop-cart-warp">
							<div class="table-responsive">
								<div class="text">
									<div class="title-block title-contact">
										<h3>Donasi Online</h3>
										<!-- <p>Riwayat Donasi Online Anda</p> -->
										<span class="bottom-title"></span>
									</div>
								</div>
								<?php
									$user_en = $_SESSION["username_donatur_en"];
									$sql = mysqli_query($conn, "SELECT * FROM donasi_online WHERE  username_donatur_en = '$user_en'");
									$ry  = mysqli_fetch_array($sql);
									if( $ry['status_donasi'] == 'Donasi Belum Dibayar' OR $ry['status_donasi'] == 'Sudah Konfirmasi' OR $ry['status_donasi'] == 'Pembayaran Sudah Diterima' OR $ry['status_donasi'] == 'Donasi Dibatalkan'){ ?>
								<table class="table table-reset  table-cart">
									<thead>
										<tr>
											<th class="product-thumbnail">No.</th>
											<th class="product-name">No. Invoice</th>
											<th class="product-price">Waktu Donasi</th>
											<th class="product-price">Status</th>
											<th class="product-remove">Total Donasi</th>
											<!-- <th class="product-remove">Detail</th> -->
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										$user_b = $_SESSION["username_donatur_en"];
										$sql = mysqli_query($conn, "SELECT * FROM donasi_online,waktu_donasionline WHERE waktu_donasionline.no_invoice = donasi_online.id_donasionline AND username_donatur_en = '$user_b' GROUP BY id_donasionline");
										while ($re  = mysqli_fetch_array($sql)) {
											$waktu = date("d-m-Y, H:i:s", strtotime($re['waktu_online']));
											echo "
												<tr>
													<td class='product-thumbnail'>$no</td>
													<td class='product-name'>
														<a href='?page=invoice-donasi&donasi=$re[id_donasionline_en]'><b><u>$re[id_donasionline]</u></b></a> 
													</td>
													<td class='product-price'>$waktu WIB</td>
													<td class='product-price'>$re[status_donasi]</td>
													<td class='product-subtotal'>$re[jumlah_donasi]</td>
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
					<div class="title-block text-center" >
						<span class="top-title"></span>
						<h5>Maaf, tidak terdapat riwayat donasi online anda</h3>
						<p class="sub-title">Silahkan lakukan donasi online</p>
						<span class="bottom-title"></span>
					</div> <br>
				<?php }
				?>
			</div>
		</div>
	</section>