			<section class="bg-quote-h3">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="callback-warp cbw-h6">
								<div class="title-block title-on-dark text-center title-pd">
									<span class="top-title "></span>
									<h2>Donasi Online</h2>
									<p class="sub-title">Silahkan lakukan donasi onlinemu</p>
									<span class="bottom-title"></span>
								</div>
								<div class="form-cb-warp">
									<form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
										<div class="widget widget-footer">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label" for="">Nama Donatur</label>
												<div class="col-sm-8">
													<input class="form-control" required="required" placeholder="Nama" name="nama" type="text">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label" for="">Email</label>
												<div class="col-sm-8">
													<input class="form-control" data-error="Data harus diisi" required="required" placeholder="Email" name="email" type="text">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label" for="">Telepon</label>
												<div class="col-sm-8">
													<input class="form-control" data-error="Data harus diisi" required="required" name="telepon" placeholder="Telepon" type="text">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-form-label col-sm-4" for="">Bank Tujuan</label>
												<div class="col-sm-8">
													<select class="form-control" data-error="Data harus diisi" required="required" name="bank_tujuan">
														<?php
														echo "<option>-- Pilihan Bank --</option>";
														$query = mysqli_query($conn, "SELECT * FROM bank_tujuan order by id_banktujuan ASC");
														while ($d = mysqli_fetch_array($query)) {
															echo "<option value='$d[id_banktujuan]'> $d[nama_bank] </option>";
														}
														?>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Jumlah Donasi</label>
												<div class="col-sm-8">
													<input class="form-control" data-error="Data harus diisi" required="required" type="text" id="jumlah" name="jumlah" placeholder="Jumlah Donasi">
												</div>
											</div>
											&nbsp;
											<div class="cb-form cb-form-on-dark">
												<button type="submit" name="donas" class="btn-white-color"><i class="fa fa-paper-plane" aria-hidden="true"></i> Donasi</button>
											</div>
										</div>
									</form>

									<?php
									// $s = "select max(id_donasionline) 'max' from donasi_online";
									// $q = mysqli_query($conn, $s);
									// $r = mysqli_fetch_array($q);
									// $id_donasi = $r['max'];
									// $id_donasi = $id_donasi + 1;
									// $id_kategori_md = md5(md5('smp') . $id_kategori);

									$nama    = trim(mysqli_real_escape_string($conn, $_POST['nama']));
									$email   = trim(mysqli_real_escape_string($conn, $_POST['email']));
									$telepon = trim(mysqli_real_escape_string($conn, $_POST['telepon']));
									$banktujuan  = trim(mysqli_real_escape_string($conn, $_POST['bank_tujuan']));
									$jumlah  = trim(mysqli_real_escape_string($conn, $_POST['jumlah']));


									if (isset($_POST['donas'])) {
										$query = mysqli_query($conn, 'SELECT MAX(id_donasionline) as id  FROM  donasi_online'); // mengambil nilai kode_barang terbesar
										$data = mysqli_fetch_row($query);
										if (empty($data[0])) {
											$kode_baru = "DNS00001";
										} else {
											$kode = $data[0]; // kode_barang dengan angka terbesar
											$nourut = substr($kode, 3, 5); // contoh DNS0004, angka 3 adalah awal pengambilan angka, dan 5 jumlah angka yang diambil
											$nourut++;
											$kode_baru = "DNS" . sprintf("%05s", $nourut);
										}
										// $jumlah = str_replace("Rp. ", "", $jumlah);
										// $jumlah = str_replace(".", "", $jumlah);
										$kode_baru_en = MD5(MD5('smp') . $kode_baru);
										$don = $_SESSION['username_donatur_en'];
										// $donatur = MD5(MD5('smp') . $don);

										$sq = "INSERT INTO donasi_online(id_donasionline,id_donasionline_en,nama_donatur,email,telepon,id_banktujuan,jumlah_donasi,status_donasi,username_donatur_en) 
										VALUES('$kode_baru','$kode_baru_en','$nama','$email','$telepon','$banktujuan','$jumlah','Donasi Belum Dibayar','$don')";
										$sq2 = "INSERT INTO waktu_donasionline(no_invoice,id_donasionline_en) VALUES('$kode_baru','$kode_baru_en')";

										$quer = mysqli_query($conn, $sq);
										$quer2 = mysqli_query($conn, $sq2);
										// $kode_baru_m =
										// echo $donatur;
										if ($quer) {
											$rw = "SELECT * FROM donasi_online order by id_donasionline DESC limit 0,3";
											$ru = mysqli_query($conn, $rw);
											while ($rxcc = mysqli_fetch_array($ru)) {
												$kode_baru_en = $rxcc['id_donasionline_en'];
												?>
												<script type="text/javascript">
													document.location = '?page=donasi-sukses&donasi=<?php echo $kode_baru_en; ?>';
												</script>
											<?php } ?>
										<?php } ?>
									<?php } ?>
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
						<!-- </div> -->
			</section>