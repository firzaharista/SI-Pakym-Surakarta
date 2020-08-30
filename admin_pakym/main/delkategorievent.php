<?php
	$del = $_GET['del'];
	$sql = "DELETE FROM kategori_event WHERE id_kategorievent_en = '$del'";
	$query = mysqli_query($conn,$sql);
	if ($query){
		?>
			<script type="text/javascript">
				alert('Data Kategori Berita telah dihapus');
				document.location='?page=kategorievent';
			</script>
		<?php
	}
?>
