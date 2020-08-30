			<?php
			$donasi  = mysqli_real_escape_string($conn, $_GET['donasi']);
			$ert = mysqli_query($conn, "SELECT * FROM donasi_online,bank_tujuan WHERE donasi_online.id_banktujuan = bank_tujuan.id_banktujuan AND id_donasionline_en = '$donasi'");
			$ertx = mysqli_fetch_array($ert);

			if ($ertx['id_donasionline_en'] != $donasi) {
				echo '<script type="text/javascript">window.location.href="./";</script>';
				die();
			} else {
				if ($ertx == []) {
					echo '<script type="text/javascript">window.location.href="./";</script>';
					die();
				}
			}
			?>
			<section class="bg-quote-h3">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="callback-warp cbw-h6">
								<div class="title-block title-on-dark text-center title-pd">
									<span class="top-title "></span>
									<h2>Donasi Online</h2>
									<p class="sub-title">
										Terima kasih <?php echo $_SESSION['nama']; ?>
									</p>

									<span class="bottom-title"></span> <br>
									<h3 style="color: white;">Donasi anda telah terdaftar</h3>
									<a href="#">
										<p style="color: white; font-size: 12px;">
											No. Invoice Donasi : <br><strong style="font-size: 20px;"><?php echo $ertx['id_donasionline']; ?></strong>
										</p>
									</a>
									<p style="color: white;">
										Donasi anda sebesar <strong> <i><?php echo $ertx['jumlah_donasi']; ?> ,-</i></strong>
									</p> <br>
									<div class="text-center" style="color: white;">
										<p>Silahkan lakukan pembayaran sebesar <strong><?php echo $ertx['jumlah_donasi']; ?>,-</strong> <br>pada rekening <strong><?php echo $ertx['nama_bank']; ?></strong> <br>Maksimal dalam waktu 2 X 24 jam :</p> <br> <br>
										<p>-- Daftar Rekening Bank --</p>
										<?php
										$no = 1;
										$sql = "SELECT * FROM bank_tujuan";
										$run = mysqli_query($conn, $sql);
										while ($pen = mysqli_Fetch_array($run)) {
											?>
											<h4 style="color: white;"><?php echo $pen['nama_bank']; ?></h4>
											<p>No. Rekening : <?php echo $pen['no_rek']; ?></p>
											<p>Atas Nama Rekening : <?php echo $pen['atas_nama']; ?></p> <br>
										<?php }
									?>
										<br><br>
										<?php
										$ff = mysqli_query($conn, "SELECT * FROM donasi_online");
										$ww = mysqli_fetch_array($ff);
										?>

										<a href="?page=konfirmasi-pembayaran"><button class="btn btn-primary">Konfirmasi Pembayaran</button></a>

									</div>

								</div>
								<p style="color: white;">
									#Catatan : <br>
									- Setelah melakukan pembayaran, lakukan konfirmasi pembayaran <br>
									- Apabila tidak melakukan pembayaran dan konfirmasi pembayaran lebih dari 2 x 24 jam. Maka PAKYM Surakarta akan membatalkan donasi anda.


								</p>
							</div>
						</div>
					</div>
				</div>
			</section>