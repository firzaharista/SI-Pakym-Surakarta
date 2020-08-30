<?php
// $lihat      = mysqli_real_escape_string($conn, $_GET['lihat']);
// $getBerita = mysqli_query($conn, "SELECT * FROM berita,kategori_berita WHERE berita.id_kategoriberita_en = kategori_berita.id_kategoriberita_en AND id_berita_en = '$lihat'");
// $ax           = mysqli_fetch_assoc($getBerita);
$donasi  = mysqli_real_escape_string($conn, $_GET['donasi']);
$ert = mysqli_query($conn, "SELECT * FROM donasi_online WHERE id_donasionline_en = '$donasi'");
$konfir = mysqli_fetch_array($ert);

// $tgl = date("d-m-Y", strtotime($w['tanggal_lahir']));
if ($konfir['id_donasionline_en'] != $donasi) {
	echo '<script type="text/javascript">window.location.href="./";</script>';
	die();
} else {
	if ($konfir == []) {
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
						<h2>Konfirmasi Pembayaran</h2>
						<p class="sub-title">Konfirmasi Pemabayaran Donasi PAKYM Surakarta</p>
						<span class="bottom-title"></span>
					</div>
					<div class="form-cb-warp">
						<?php
						$target = "../admin_pakym/main/img/konfirmasi/" . basename($_FILES['bukti_pembayaran']['name']);

						$sk = "select max(id_konfirmasionline) 'max' from konfirmasi_online";
						$q  = mysqli_query($conn, $sk);
						$rk = mysqli_fetch_array($q);
						$id_konfirmasi    = $rk['max'];
						$id_konfirmasi    = $id_konfirmasi + 1;
						$id_konfirmasi_en = md5(md5('smp') . $id_konfirmasi);

						$bukti       = trim(mysqli_real_escape_string($conn, $_FILES['bukti_pembayaran']['name']));
						$invoice     = trim(mysqli_real_escape_string($conn, $_POST['invoice']));
						$namadonatur = trim(mysqli_real_escape_string($conn, $_POST['nama']));
						$email       = trim(mysqli_real_escape_string($conn, $_POST['email']));
						$telepon     = trim(mysqli_real_escape_string($conn, $_POST['telepon']));
						$nama_pengirim = trim(mysqli_real_escape_string($conn, $_POST['nama_pengirim']));
						$bankasal      = trim(mysqli_real_escape_string($conn, $_POST['bank_asal']));
						$banktujuan    = trim(mysqli_real_escape_string($conn, $_POST['bank_tujuan']));
						$rek_tujuan    = trim(mysqli_real_escape_string($conn, $_POST['rekening_tujuan']));
						$jumlah        = trim(mysqli_real_escape_string($conn, $_POST['jumlah_donasi']));

						$invoice_en    = md5(md5('smp') . $invoice);
						$user_b        = $_SESSION['username_donatur_en'];

						if (isset($_POST['konfirmasi'])) {
							if (move_uploaded_file($_FILES['bukti_pembayaran']['tmp_name'], $target)) {
								$ko = "INSERT INTO konfirmasi_online (id_konfirmasionline, id_konfirmasionline_en, no_invoice_konfirmasi, id_donasionline_en, nama_donatur_konfirmasi, email_konfirmasi, telepon_konfirmasi, nama_pengirim_konfirmasi, id_bankasal, id_banktujuan, rekening_tujuan_konfirmasi, jumlah_donasi_konfirmasi, bukti_pembayaran_konfirmasi,username_donatur_en) 
								VALUES ('$id_konfirmasi', '$id_konfirmasi_en', '$invoice', '$invoice_en', '$namadonatur', '$email', '$telepon', '$nama_pengirim', '$bankasal', '$banktujuan', '$rek_tujuan', '$jumlah', '$bukti','$user_b')";
								if (mysqli_query($conn, $ko)) {
									$tr = mysqli_query($conn, "SELECT * FROM donasi_online WHERE username_donatur_en='$user_b'");
									$td = mysqli_fetch_array($tr);
									if ($td['id_donasionline'] = isset($_POST['invoice'])) {
										// if($td['status_donasi'] == 'Donasi Belum Dibayar'){
										$up = "UPDATE donasi_online set status_donasi='Sudah Konfirmasi' WHERE username_donatur_en='$user_b' AND id_donasionline='$invoice'";
										if (mysqli_query($conn, $up)) {
											$rw = "SELECT * FROM konfirmasi_online order by id_konfirmasionline";
											$ru = mysqli_query($conn, $rw);
											while ($ryyu = mysqli_fetch_array($ru)) {
												?>
												<script type="text/javascript">
													document.location = "?page=konfirmasi-sukses&konfirmasi=<?php echo $id_konfirmasi_en; ?>";
												</script>
											<?php
										}
									}
								} else { ?>
										<div class="alert alert-danger" role="alert">
											<strong>Gagal Konfirmasi !</strong> Silahkan lakukan konfirmasi ulang . . .
										</div>
									<?php }
							} else { ?>
									<div class="alert alert-danger" role="alert">
										<strong>Gagal Konfirmasi !</strong> Silahkan lakukan konfirmasi ulang . . .
									</div>
								<?php }
						} else { ?>
								<div class="alert alert-danger" role="alert">
									<strong>Gagal Konfirmasi !</strong> Silahkan lakukan konfirmasi ulang . . .
								</div>
							<?php }
					}
					?>
						<form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
							<div class="widget widget-footer">
								<div class="form-group row">
									<label class="col-sm-4 col-form-label" for="">No. Invoice Donasi</label>
									<div class="col-sm-8">
										<input class="form-control" required="required" placeholder="No. Invoice Donasi" name="invoice" value="<?php echo $konfir['id_donasionline']; ?>" type="text" readonly>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label" for="">Nama Donatur</label>
									<div class="col-sm-8">
										<input class="form-control" required="required" placeholder="Nama" name="nama" type="text" value="<?php echo $konfir['nama_donatur']; ?>" readonly>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label" for="">Email</label>
									<div class="col-sm-8">
										<input class="form-control" data-error="Data harus diisi" required="required" placeholder="Email" name="email" type="text" value="<?php echo $konfir['email']; ?>" readonly>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label" for="">Telepon</label>
									<div class="col-sm-8">
										<input class="form-control" data-error="Data harus diisi" required="required" name="telepon" placeholder="Telepon" type="text" value="<?php echo $konfir['telepon']; ?>" readonly>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label" for="">Nama Pengirim</label>
									<div class="col-sm-8">
										<input class="form-control" data-error="Data harus diisi" required="required" name="nama_pengirim" placeholder="Atas nama pengirim rekening bank" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label col-sm-4" for="">Bank Asal Pengirim</label>
									<div class="col-sm-8">
										<select class="form-control" data-error="Data harus diisi" required="required" name="bank_asal">
											<?php
											echo "<option>-- Pilihan Bank --</option>";
											$query = mysqli_query($conn, "SELECT * FROM bank_asal order by id_bankasal ASC");
											while ($d = mysqli_fetch_array($query)) {
												echo "<option value='$d[id_bankasal]'>$d[nama_bankasal]</option>";
											}
											?>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label col-sm-4" for="">Bank Tujuan</label>
									<div class="col-sm-8">
										<select class="form-control" data-error="Data harus diisi" required="required" name="bank_tujuan">
											<?php
											echo "<option>-- Pilihan Bank --</option>";
											$query = mysqli_query($conn, "SELECT * FROM bank_tujuan");
											while ($hasil = mysqli_fetch_array($query)) {
												if ($hasil['id_banktujuan'] == $konfir['id_banktujuan']) {
													echo "<option value='$hasil[id_banktujuan]' selected='selected'>$hasil[nama_bank]</option>";
												} else {
													echo "<option value='$hasil[id_banktujuan]'>$hasil[nama_bank]</option>";
												}
											}
											?>

										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label col-sm-4" for="">Rekening Tujuan</label>
									<div class="col-sm-8">
										<select class="form-control" data-error="Data harus diisi" required="required" name="rekening_tujuan">
											<?php
											echo "<option>-- Pilihan No. Rekening --</option>";
											$query = mysqli_query($conn, "SELECT * FROM bank_tujuan order by id_banktujuan ASC");
											while ($d = mysqli_fetch_array($query)) {
												echo "<option value='$d[no_rek]'> $d[no_rek] </option>";
											}
											?>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label">Jumlah Donasi</label>
									<div class="col-sm-8">
										<input class="form-control" data-error="Data harus diisi" required="required" type="text" name="jumlah_donasi" placeholder="Jumlah Donasi" value="<?php echo $konfir['jumlah_donasi']; ?>" id="jumlah" readonly>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label">Bukti Pembayaran</label>
									<div class="col-sm-8">
										<input class="form-control" data-error="Data harus diisi" placeholder="" required="required" type="file" name="bukti_pembayaran">
									</div>
								</div>

								&nbsp;
								<div class="cb-form cb-form-on-dark">
									<button type="submit" class="btn-white-color" name="konfirmasi"><i class="fa fa-paper-plane" aria-hidden="true"></i> Konfirmasi</button>
								</div>
							</div>
						</form>

						<script type="text/javascript">
							var rupiah = document.getElementById("jumlah");
							rupiah.addEventListener("keyup", function(e) {
								// tambahkan 'Rp.' pada saat form di ketik
								// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
								rupiah.value = formatRupiah(this.value, "Rp. ");
							});

							/* Fungsi formatRupiah */
							function formatRupiah(angka, prefix) {
								var number_string = angka.replace(/[^,\d]/g, "").toString(),
									split = number_string.split(","),
									sisa = split[0].length % 3,
									rupiah = split[0].substr(0, sisa),
									ribuan = split[0].substr(sisa).match(/\d{3}/gi);

								// tambahkan titik jika yang di input sudah menjadi angka ribuan
								if (ribuan) {
									separator = sisa ? "." : "";
									rupiah += separator + ribuan.join(".");
								}

								rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
								return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
							}
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>