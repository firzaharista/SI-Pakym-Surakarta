<section class="no-padding sh-company-history">
	<div class="sub-header ">
		<!-- <span>COMPANY UPDATES</span> -->
		<h3>EVENT</h3>
		<ol class="breadcrumb">
			<li>
				<a><i class="fa fa-home"></i>Media</a>
			</li>
			<li class="active">Event</li>
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
					$getEvent = mysqli_query($conn, "SELECT * FROM event,kategori_event WHERE event.id_kategorievent_en = kategori_event.id_kategorievent_en AND id_event_en = '$lihat'");
					$ae           = mysqli_fetch_assoc($getEvent);

					// $tgl = date("d-m-Y", strtotime($w['tanggal_lahir']));
					if ($ae['id_event_en'] != $lihat) {
						echo '<script type="text/javascript">window.location.href="./";</script>';
						die();
					} else {
						if ($ae == []) {
							echo '<script type="text/javascript">window.location.href="./";</script>';
							die();
						}
					}
					?>
					<?php
					$tgl_mulai = date("d/m/Y", strtotime($ae['waktu_mulai']));
					$tgl_akhir = date("d/m/Y", strtotime($ae['waktu_akhir']));
					?>
					<div class="feature-img-deital" align="center">
						<img src="images/event/<?php echo $ae["foto_event"]; ?>" height="450" width="800" class="img-responsive" alt="Image">
					</div>
					<div class="new-info new-info-detail">
						<h4>
							<a href="?page=lihat-event&lihat=<?php echo $ae['id_event']; ?>"><?php echo $ae["nama_event"]; ?></a>
						</h4>
						<p><i class="fa fa-calendar" aria-hidden="true"></i> Event pada tanggal :<br> &nbsp;&nbsp;<?php echo $tgl_mulai; ?> - <?php echo $tgl_akhir; ?></p>
						<p><i class="fa fa-tag" aria-hidden="true"></i> Kategori : <br> <?php echo $ae['nama_kategorievent']; ?>&nbsp;&nbsp;</p>
					</div>
					<div class="content-detail content-new-detail">
						<p>
							<?php echo $ae["isi_event"]; ?>
						</p>
					</div>
				</div>
				<div class="footer-post">
					<p class="tags-post">
						<i class="fa fa-tags" aria-hidden="true"></i>
						<a><?php echo $ae['nama_kategorievent']; ?></a>
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
<!-- /Form reviews -->