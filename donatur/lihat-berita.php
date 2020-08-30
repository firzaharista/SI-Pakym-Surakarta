<section class="no-padding sh-company-history">
	<div class="sub-header ">
		<!-- <span>COMPANY UPDATES</span> -->
		<h3>BERITA</h3>
		<ol class="breadcrumb">
			<li>
				<a><i class="fa fa-home"></i>Media</a>
			</li>
			<li class="active">Berita</li>
		</ol>
	</div>
</section>
<!-- /subheader -->

<section class="bg-case-h9">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="new-detail-warp">
					<?php
					$lihat      = mysqli_real_escape_string($conn, $_GET['lihat']);
					$getBerita = mysqli_query($conn, "SELECT * FROM berita,kategori_berita WHERE berita.id_kategoriberita_en = kategori_berita.id_kategoriberita_en AND id_berita_en = '$lihat'");
					$ax           = mysqli_fetch_assoc($getBerita);

					// $tgl = date("d-m-Y", strtotime($w['tanggal_lahir']));
					if ($ax['id_berita_en'] != $lihat) {
						echo '<script type="text/javascript">window.location.href="./";</script>';
						die();
					} else {
						if ($ax == []) {
							echo '<script type="text/javascript">window.location.href="./";</script>';
							die();
						}
					}
					?>
					<?php
					$tgl = date("d-m-Y", strtotime($ax['waktu_berita']));
					?>
					<div class="feature-img-deital" align="center">
						<img src="../images/berita/<?php echo $ax["foto_berita"]; ?>" height="400" width="800" alt="Image">
					</div>
					<div class="new-info new-info-detail">
						<h4>
							<a href="?page=lihat-berita&lihat=<?php echo $ax['id_berita_en']; ?>"><?php echo $ax["judul_berita"]; ?></a>
						</h4>
						<p><i class="fa fa-calendar" aria-hidden="true"></i> Diposting pada :<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $tgl; ?></p>
						<p><i class="fa fa-user" aria-hidden="true"></i> Ditulis oleh : <br> &nbsp;&nbsp; <?php echo $ax["penulis"]; ?></p>
						<p><i class="fa fa-tag" aria-hidden="true"></i> Kategori : <br> <?php echo $ax['nama_kategoriberita']; ?>&nbsp;</p>
						<!-- <p>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
						</p> -->
					</div>
					<div class="content-detail content-new-detail">
						<p>
							<?php echo $ax["isi_berita"]; ?>
						</p>
					</div>
				</div>
				<div class="footer-post">
					<p class="tags-post">
						<i class="fa fa-tags" aria-hidden="true"></i>
						<a href="#"><?php echo $ax['nama_kategoriberita']; ?></a>
					</p>
					<ul class="widget-footer-social-1 footer-post-share social-hover-defaul">
						<?php
						$sd = mysqli_query($conn, "SELECT * FROM informasi");
						$rt = mysqli_fetch_array($sd);
						?>
						<li><a class="facebook" href="<?php echo $rt['fb']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a class="email" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=<?php echo $rt['email']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Main New Detail -->