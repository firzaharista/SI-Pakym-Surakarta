<section class="no-padding sh-company-history">
	<div class="sub-header ">
		<h3>DATA ANAK ASUH</h3>
		<ol class="breadcrumb">
			<li>
				<a href="#"><i class="fa fa-user"></i>Anak Asuh</a>
			</li>
			<li class="active">Data Anak Asuh</li>
		</ol>
	</div>
</section>

<section class="no-padding bg-case-h9">
	<div class="container">
		<div class="row">
			<div class="col-md-12 desk-pdt-100 desk-pdb-60">
				<div class="title-block title-contact">
					<h3>Detail Anak Asuh PAKYM Surakarta</h3>
					<span class="bottom-title"></span>
				</div>
				<?php
				$detail      = mysqli_real_escape_string($conn, $_GET['detail']);
				$getAnakasuh = mysqli_query($conn, "SELECT * FROM anak_asuh,status WHERE anak_asuh.id_status = status.id_status AND id_anakasuh_en = '$detail'");
				$w           = mysqli_fetch_assoc($getAnakasuh);

				// $tgl = date("d-m-Y", strtotime($w['tanggal_lahir']));
				if ($w['id_anakasuh_en'] != $detail) {
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
									<td class="detail"><?php echo $w['nama_anakasuh']; ?></td>
									<td class="title">Pendidikan Saat ini</td>
									<td class="detail"><?php echo $w['pendidikan']; ?></td>
								</tr>
								<tr>
									<td class="title">Ayah Kandung</td>
									<td class="detail"><?php echo $w['nama_bapak_kandung']; ?></td>
									<td class="title">TTL</td>
									<?php
									$sqlw = mysqli_query($conn, "SELECT * FROM anak_asuh WHERE id_anakasuh_en='$detail'");
									while ($ak = mysqli_fetch_array($sqlw)) {
										$tgl = date("d-m-Y", strtotime($ak['tanggal_lahir'])); ?>

										<td class="detail"><?php echo $w['tempat_lahir']; ?>, <?php echo $tgl; ?></td>

									<?php } ?>
								</tr>
								<tr>
									<td class="title">Ibu Kandung</td>
									<td class="detail"><?php echo $w['nama_ibu_kandung']; ?></td>
									<td class="title">Status</td>
									<td class="detail"><?php echo $w['nama_status']; ?></td>
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