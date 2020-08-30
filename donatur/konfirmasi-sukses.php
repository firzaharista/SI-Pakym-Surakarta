			<?php
			$konfirmasi  = mysqli_real_escape_string($conn, $_GET['konfirmasi']);
			$e = mysqli_query($conn, "SELECT * FROM konfirmasi_online WHERE id_konfirmasionline_en = '$konfirmasi'");
			$ertx = mysqli_fetch_array($e);

			if ($ertx['id_konfirmasionline_en'] != $konfirmasi) {
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
									<h2>Konfirmasi Pembayaran Berhasil</h2>
									<p class="sub-title">
										Terima kasih <?php echo $_SESSION['nama']; ?> atas donasi yang telah anda berikan.
									</p>
									<span class="bottom-title"></span> <br>
									<a href="#">
										<p style="color: white; font-size: 12px;">
											No. Invoice Donasi : <br><strong style="font-size: 20px;"><?php echo $ertx['no_invoice_konfirmasi']; ?></strong>
										</p>
									</a>
									<p style="color: white;">
										Donasi anda sebesar <strong> <i><?php echo $ertx['jumlah_donasi_konfirmasi']; ?> ,-</i></strong>
									</p> <br>
									<p class="sub-title">
										Maksimal dalam waktu 2 x 24 jam. <br>Status donasi anda akan segera berubah menjadi donasi telah diterima.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>