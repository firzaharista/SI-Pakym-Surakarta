		<section class="no-padding sh-company-history">
			<div class="sub-header ">
				<h3>DATA ALUMNI</h3>
				<ol class="breadcrumb">
					<li>
						<a href="#"><i class="fa fa-user"></i>Anak Asuh</a>
					</li>
					<li class="active">Data Alumni</li>
				</ol>
			</div>
		</section>

		<section class="no-padding bg-case-h9">
			<div class="container">
				<div class="row">
					<div class="col-md-12 desk-pdt-100 desk-pdb-60">
						<div class="title-block title-contact">
							<h3>Detail Alumni PAKYM Surakarta</h3>
							<span class="bottom-title"></span>
						</div>
						<?php
						$detail      = mysqli_real_escape_string($conn, $_GET['detail']);
						$getAlumni   = mysqli_query($conn, "SELECT * FROM alumni WHERE id_alumni_en = '$detail'");
						$w           = mysqli_fetch_assoc($getAlumni);

						// $tgl = date("d-m-Y", strtotime($w['tanggal_lahir']));
						if ($w['id_alumni_en'] != $detail) {
							echo '<script type="text/javascript">window.location.href="./";</script>';
							die();
						} else {
							if ($w == []) {
								echo '<script type="text/javascript">window.location.href="./";</script>';
								die();
							}
						}
						?>

						<div class="table-warp">
							<div class="table-responsive">
								<table class="table table-reset table-detail-job table-striped table-bordered">
									<tbody>
										<tr>
											<td class="title">Nama</td>
											<td class="detail"><?php echo $w['nama']; ?></td>
											<td class="title">TTL</td>
											<?php
											$sqlw = mysqli_query($conn, "SELECT * FROM alumni WHERE id_alumni_en='$detail'");
											while ($ak = mysqli_fetch_array($sqlw)) {
												$tgl = date("d-m-Y", strtotime($ak['tanggal_lahir'])); ?>
												<td class="detail"><?php echo $w['tempat_lahir']; ?>, <?php echo $tgl; ?></td>
											<?php } ?>
										</tr>
										<tr>
											<td class="title">Tahun Masuk</td>
											<td class="detail"><?php echo $w['tahun_masuk']; ?></td>
											<td class="title">Tahun Keluar</td>
											<td class="detail"><?php echo $w['tahun_keluar']; ?></td>

										</tr>
										<tr>
											<td class="title">Alamat</td>
											<td class="detail" colspan="3"><?php echo $w['alamat']; ?></td>
										</tr>
										<tr>
											<td class="title">Pesan dan Kesan</td>
											<td class="detail" colspan="3">
												<?php echo $w['pesan_kesan']; ?>
											</td>
										</tr>

									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- /Why Us -->