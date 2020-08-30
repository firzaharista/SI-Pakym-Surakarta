		<section class="bg-case-h9">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">

						<div class="title-block title-contact">
							<h3>Data Diri</h3>
							<span class="bottom-title"></span>
						</div>
						<div class="col-md-11">
							<div class="table-warp">
								<div class="table-responsive">
									<?php
									$user = $_SESSION["username_donatur_en"];
									$sql = "SELECT * FROM user_donatur WHERE username_donatur_en='$user'";
									$run = mysqli_query($conn, $sql);
									$dataxx = mysqli_fetch_array($run);
									?>
									<?php
									$nama = trim(mysqli_real_escape_string($conn, $_POST['nama']));
									$email = trim(mysqli_real_escape_string($conn, $_POST['email']));
									$telepon = trim(mysqli_real_escape_string($conn, $_POST['telepon']));
									$alamat = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
									if (isset($_POST['upd-profil'])) {
										$sql   = "UPDATE user_donatur set nama='$nama',email='$email',telepon='$telepon',alamat='$alamat' where username_donatur_en='$user'";
										$query = mysqli_query($conn, $sql);
										if ($query) { ?>
											<div class="alert alert-success alert-dismissible fade in" role="alert">
												<button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true"> &times;</span></button><strong>Update data berhasil !</strong> Silahkan lihat profil baru anda
											</div>
										<?php } else { ?>
											<div class="alert alert-danger alert-dismissible fade in" role="alert">
												<button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true"> &times;</span></button><strong>Update data gagal !</strong> Silahkan ulangi lagi
											</div>
										<?php } ?>
									<?php } ?>

									<form class="form-contact-warp form-calc-ship cb-form" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
										<div>
											<input class="form-control" value="<?php echo $dataxx['nama']; ?>" required="required" title="" placeholder="Nama Lengkap" type="text" name="nama">
										</div>
										<div>
											<input class="form-control" value="<?php echo $dataxx['email']; ?>" required="required" title="" placeholder="Email" type="text" name="email">
										</div>
										<div>
											<input class="form-control" value="<?php echo $dataxx['telepon']; ?>" required="required" title="" placeholder="Telepon" type="text" name="telepon">
										</div>
										<div>
											<textarea class="form-control" name="alamat" required="required" placeholder="Alamat Lengkap" id="" cols="10" rows="4" name="alamat"><?php echo $dataxx['alamat']; ?></textarea>
										</div>
										<div>
											<div class="group-btn pull-left">

												<a href="?page=profil-donatur">
													<p class="fa fa-caret-left"> </p> Kembali ke profil akun
												</a>
												<!-- <a href="?page=profil-donatur" class="ot-btn btn-main-color">Kembali</a> -->
											</div>
											<div class="group-btn pull-right">
												<button type="submit" value="" name="upd-profil" class="ot-btn btn-sub-color">Update Data</a></button>
											</div>
											<!-- <input type="submit" class="btn btn" name="upd-profil" value="Update Data">
											<input type="submit" class="btn btn" name="kembali" value="Kembali"> -->
										</div>
										<?php
										if (isset($_POST['kembali'])) {
											?>
											<script type="text/javascript">
												document.location = "?page=profil-donatur";
											</script>
										<?php
									}
									?>

									</form>

								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 col-sm-12">

					</div>

				</div>
			</div>
			<!-- </div> -->
		</section>