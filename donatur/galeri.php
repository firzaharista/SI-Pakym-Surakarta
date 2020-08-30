<section class="no-padding sh-company-history">
	<div class="sub-header ">
		<!-- <span>LATEST PROJECTS</span> -->
		<h3>GALERI PAKYM</h3>
		<ol class="breadcrumb">
			<li>
				<a href="#"><i class="fa fa-home"></i>Media</a>
			</li>
			<li class="active">Galeri</li>
		</ol>
	</div>
</section>
<!-- /Sub HEader -->

<section class="bg-case-h9">
	<?php
	$getKategori = "SELECT * FROM kategori_galeri";
	?>
	<div class="container">
		<div class="row">

			<div class="category-case-warp category-case-warp-h5 category-case-warp-page">
				<div class="casesFilter">
					<a href="#" data-filter="*" class="current ">Semua Kategori</a>
					<?php
					$sql = mysqli_query($conn, "SELECT nama_kategorigaleri from kategori_galeri");
					while ($kategori = mysqli_fetch_assoc($sql)) {
						$nama_kategoriberita = preg_replace('/\s+/', '_', strtolower($kategori['nama_kategorigaleri']));
						?>
						<a href="#" data-filter=".<?php echo $nama_kategoriberita; ?>" class="current "><?php echo $kategori['nama_kategorigaleri']; ?></a>
					<?php } ?>
				</div> <!-- End Project Fillter -->
			</div>
			<br>
			<div class="row">
				<div class="cases-warp cases-warp-h5">
					<?php
					$getGaleri = mysqli_query($conn, "SELECT * FROM galeri, kategori_galeri WHERE galeri.id_kategorigaleri_en = kategori_galeri.id_kategorigaleri_en");
					while ($k = mysqli_fetch_assoc($getGaleri)) {
						$nama_kategorigaleri = preg_replace('/\s+/', '_', strtolower($k['nama_kategorigaleri']));
						?>
						<div class="element-item <?php echo $nama_kategorigaleri; ?>">
							<div class="item-case-h5">
								<img src="../images/galeri/<?php echo $k['foto_galeri']; ?>" height="230" alt="Image">
								<div class="case-info">
									<h4><a><?php echo $k['judul']; ?></a></h4>
									<a class="case-cate"><?php echo $k['nama_kategorigaleri']; ?></a>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>

				<br>
				<br>

				<br><br><br><br>
			</div>
		</div>

</section>
<!-- /Cases -->