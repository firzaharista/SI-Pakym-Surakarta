<?php
	$del = $_GET['del'];
	$sql = "DELETE FROM kategori_galeri WHERE id_kategorigaleri_en = '$del'";
	$query = mysqli_query($conn,$sql);
	if ($query){
		?>
			<script type="text/javascript">
				alert('Data Kategori Galeri telah dihapus');
				document.location="?page=kategorigaleri";
			</script>
		<?php
	}
?>
