<section class="no-padding sh-company-history">
	<div class="sub-header ">
		<!-- <span>COMPANY UPDATES</span> -->
		<h3>EVENT PAKYM</h3>
		<ol class="breadcrumb">
			<li>
				<a href="#"><i class="fa fa-home"></i>Media</a>
			</li>

			<li class="active">Event</li>
		</ol>
	</div>
</section>
<!-- /subheader -->
<?php
$halaman = 4;
$pages = isset($_GET['pages']) ? (int)$_GET["pages"] : 1;
$mulai = ($pages > 1) ? ($pages * $halaman) - $halaman : 0;
if (isset($_GET['search'])) {
	if (empty($_GET['search'])) {
		$query = mysqli_query($conn, "select * from event,kategori_event where event.id_kategorievent_en = kategori_event.id_kategorievent_en LIMIT $mulai, $halaman");
		$sql = mysqli_query($conn, "select * from event");
	} else {
		$query = mysqli_query($conn, "select * from event,kategori_event where event.id_kategorievent_en = kategori_event.id_kategorievent_en AND  nama_event LIKE '%" . $_GET['search'] . "%' LIMIT $mulai, $halaman");
		$sql = mysqli_query($conn, "select * from event");
	}
} else {
	$query = mysqli_query($conn, "select * from event,kategori_event where event.id_kategorievent_en = kategori_event.id_kategorievent_en LIMIT $mulai, $halaman");
	$sql = mysqli_query($conn, "select * from event");
}
$total = mysqli_num_rows($sql);
$pagess = ceil($total / $halaman);
?>
<section class="bg-case-h9">
	<div class="container">
		<div class="row">
			<?php include "sidebar-left-media.php"; ?>
			<div class="col-md-9">
				<?php
				while ($ev = mysqli_fetch_assoc($query)) {
					$tgl_mulai = date("d/m/Y", strtotime($ev['waktu_mulai']));
					$tgl_akhir = date("d/m/Y", strtotime($ev['waktu_akhir']));
					?>
					<div class="news-list-warp">
						<div class="item-new-list">
							<div class="feature-new-warp">
								<div id="feature-gallery-post" class="owl-feature-gallery-post">
									<div class="item-feature-img">
										<a href="?page=lihat-event&lihat=<?php echo $ev['id_event_en']; ?>">
											<img src="../images/event/<?php echo $ev['foto_event']; ?>" width='50' height='40' alt="Image">
										</a>
									</div>
								</div>
							</div>
							<div class="box-new-info">
								<div class="new-info">
									<h4>
										<a href="?page=lihat-event&lihat=<?php echo $ev['id_event_en']; ?>"><?php echo $ev['nama_event']; ?></a>
									</h4>
									<p><i class="fa fa-calendar" aria-hidden="true"></i>Pada :<br><?php echo $tgl_mulai; ?> - <?php echo $tgl_akhir; ?></p>
									<p><i class="" aria-hidden="true"></i>Kategori: <?php echo $ev['nama_kategorievent']; ?></p>
									<p>
										<i class="" aria-hidden="true"></i>
									</p>
								</div>
								<div class="tapo">
									<p><?php echo $ev['ringkasan_event']; ?></p>
								</div>
							</div>
						</div>

					</div>
				<?php } ?>
			</div>
			<div class="col-md-12">
				<ul class="pagination">
					<li>
						<a href="?page=event&pages=1">AWAL</a>
					</li>
					<?php

					for ($i = 1; $i <= $pagess; $i++) {
						$link_active = ($pages == $i) ? ' class="active"' : '';
						if (isset($_GET['search'])) {
							$url = "?page=event&search=" . $_GET['search'] . "&pages=$i";
						} else {
							$url = "?page=event&pages=$i";
						}
						?>

						<!-- <li class='active'><a href="#">1</a></li> -->
						<li <?php echo $link_active; ?>><a href="<?php echo $url; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					<li><a href="<?php echo $url; ?>">AKHIR</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>