<section class="no-padding sh-company-history">
	<div class="sub-header ">
		<!-- <span>COMPANY UPDATES</span> -->
		<h3>BERITA PAKYM</h3>
		<ol class="breadcrumb">
			<li>
				<a href="#"><i class="fa fa-home"></i>Media</a>
			</li>

			<li class="active">Berita</li>
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
		$query = mysqli_query($conn, "select * from berita,kategori_berita WHERE berita.id_kategoriberita_en = kategori_berita.id_kategoriberita_en LIMIT $mulai, $halaman");
		$sql = mysqli_query($conn, "select * from berita");
	} else {
		$query = mysqli_query($conn, "select * from berita,kategori_berita WHERE berita.id_kategoriberita_en = kategori_berita.id_kategoriberita_en AND judul_berita LIKE '%" . $_GET['search'] . "%' LIMIT $mulai, $halaman");
		$sql = mysqli_query($conn, "select * from berita");
	}
} else {
	$query = mysqli_query($conn, "select * from berita,kategori_berita WHERE berita.id_kategoriberita_en = kategori_berita.id_kategoriberita_en LIMIT $mulai, $halaman");
	$sql = mysqli_query($conn, "select * from berita");
}
$total = mysqli_num_rows($sql);
$pagess = ceil($total / $halaman);
?>
<section class="bg-case-h9">
	<div class="container">
		<div class="row">
			<?php
			include "sidebar-left-media.php";
			?>
			<?php
			while ($cx = mysqli_fetch_assoc($query)) {
				$tgl_skg = date("d-m-Y", strtotime($cx['waktu_berita']));
				?>
				<div class="col-md-1"></div>
				<div class="col-md-4">
					<div class="item-new-list grid-new">
						<div class="feature-new-warp">
							<div id="feature-gallery-post" class="owl-feature-gallery-post">
								<div class="item-feature-img">
									<a href="?page=lihat-berita&lihat=<?php echo $cx['id_berita_en']; ?>"><img src="../images/berita/<?php echo $cx['foto_berita'] ?>" height="250"  alt="Image"></a>
								</div>
							</div>
						</div>
						<div class="box-new-info">
							<div class="new-info">
								<h4>
									<a href="?page=lihat-berita&lihat=<?php echo $cx['id_berita_en']; ?>"><?php echo $cx['judul_berita']; ?></a>
								</h4>
								<p><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $tgl_skg; ?> </p>
								<p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $cx['penulis']; ?></p>
								<p><i class="" aria-hidden="true"></i>Kategori:</p>
								<p><i class="" aria-hidden="true"></i><?php echo $cx['nama_kategoriberita']; ?></p>
							</div>
							<div class="tapo">
								<p><?php echo $cx['ringkasan_berita']; ?></p>
							</div>
							<a href="?page=lihat-berita&lihat=<?php echo $cx['id_berita_en']; ?>" class="ot-btn btn-sub-color">Selengkapnya</a>
						</div>
					</div>
				</div>
			<?php } ?>

			<div class="col-md-12" align="">
				<ul class="pagination">
					<li>
						<a href="?page=berita&pages=1">AWAL</a>
					</li>
					<?php

					for ($i = 1; $i <= $pagess; $i++) {
						$link_active = ($pages == $i) ? ' class="active"' : '';
						if (isset($_GET['search'])) {
							$url = "?page=berita&search=" . $_GET['search'] . "&pages=$i";
						} else {
							$url = "?page=berita&pages=$i";
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