<section class="no-padding sh-company-history">
	<div class="sub-header ">
		<h3>KONTAK KAMI</h3>
		<ol class="breadcrumb">
			<li>
				<a href="#"><i class="fa fa-home"></i>Tentang Kami</a>
			</li>

			<li class="active">Kontak Kami</li>
		</ol>
	</div>
</section>
<!-- /subheader -->

<section class="bg-case-h9">
	<div class="container">
		<div class="row">
			<?php
			$se = mysqli_query($conn, "SELECT * FROM informasi");
			$da = mysqli_fetch_array($se);
			?>
			<div class="col-md-3">
				<div class="iconbox-inline">
					<span class="icon icon-location2"></span>
					<h4>Lokasi</h4>
					<p><?php echo $da['alamat']; ?></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="iconbox-inline">
					<span class="icon icon-phone"></span>
					<h4>Telepon</h4>
					<p><?php echo $da['telepon']; ?></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="iconbox-inline">
					<span class="icon icon-envelop"></span>
					<h4>E-mail</h4>
					<p><?php echo $da['email']; ?></p>
				</div>
			</div>
			<div class="col-md-3">
				<a href="<?php echo $da['fb']; ?>">
					<div class="iconbox-inline">
						<span class="icon icon-facebook"></span>
						<h4>Facebook</h4>
						<p>Pakym Surakarta</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- /Iconbxo -->
<div id="maps" class="map-warp" style="height: 500x;" align="center">
	<!-- <iframe src="Pakym Surakarta"></iframe> -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1233656658437!2d110.79017121477678!3d-7.561525994546881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1681b52e4107%3A0xb83203918ef7f8e2!2sPAKYM+Panti+Asuhan+Keluarga+Yatim+Muhammadiyah!5e0!3m2!1sid!2sid!4v1553680878950" width="1263" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- /Map -->
<section class="bg-case-h9">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-block title-contact">
					<h3>Kirim Pesan</h3>
					<span class="bottom-title"></span>
				</div>
			</div>
		</div>
	</div>
</section> 
<section class="no-padding bg-case-h9">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="warp-full-width offer-h3-warp section-fix-position-h3">
					<?php
					$nama = trim(mysqli_real_escape_string($conn, $_POST['nama']));
					$email = trim(mysqli_real_escape_string($conn, $_POST['email']));
					$telepon = trim(mysqli_real_escape_string($conn, $_POST['telepon']));
					$subjek = trim(mysqli_real_escape_string($conn, $_POST['subjek']));
					$isi_pesan = trim(mysqli_real_escape_string($conn, $_POST['isi_pesan']));
					$submit   = $_POST['submit'];

					if (isset($_POST['submit'])) {
						$run = mysqli_query($conn, "INSERT INTO pesan_kontak(nama,email,telepon,subjek,isi_pesan) VALUES('$nama','$email','$telepon','$subjek','$isi_pesan')");
						if ($run) {
							?>
							<div class="alert alert-success alert-dismissible fade in" role="alert">
								<button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true"> &times;</span></button><strong>Pesan Berhasil dikirim !</strong> Terima kasih atas pesan anda . . .
							</div>
						<?php } else { ?>
							<div class="alert alert-danger alert-dismissible fade in" role="alert">
								<button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true"> &times;</span></button><strong>Pesan Gagal dikirim !</strong> Silahkan lakukan kembali . . .
							</div>
						<?php } ?>
					<?php } ?>
				<div class="form-contact-warp">
					<form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
						<div class="col-md-3">
							<input type="text" class="form-control" value="" required="required" title="" placeholder="Nama Lengkap" name="nama">
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" value="" required="required" title="" placeholder="Alamat Email" name="email">
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" value="" required="required" title="" placeholder="No Telepon" name="telepon">
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" value="" required="required" title="" placeholder="Subjek" name="subjek">
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea id="textarea" class="form-control" rows="5" required="required" placeholder="Isi Pesan" name="isi_pesan"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<button type="submit" class="btn-main-color" name="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Kirim
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- /Form Contact -->