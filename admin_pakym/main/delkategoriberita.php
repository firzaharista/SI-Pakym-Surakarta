<?php
	$del = $_GET['del'];
	$sql = "DELETE FROM kategori_berita WHERE id_kategoriberita_en = '$del'";
	$query = mysqli_query($conn,$sql);
	if ($query){
		?>
			<script type="text/javascript">
				alert('Data Kategori Berita telah dihapus');
				document.location='?page=kategoriberita';
			</script>
		<?php
	}
?>
