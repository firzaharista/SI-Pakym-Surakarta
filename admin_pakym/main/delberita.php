<?php
	// include "../../../.private/koneksi.php";
	$del = $_GET['del'];
	$sql = "delete from berita where id_berita_en='$del' ";
	$sql2 = "ALTER TABLE berita AUTO_INCREMENT = 1";
	$query = mysqli_query($conn, $sql);
	$query2 = mysqli_query($conn, $sql2);
	if ($query and $query2) {
		?>
		<script language="JavaScript" type="text/javascript">
			alert('Data Berita telah dihapus');
			document.location = '?page=berita';
		</script>
		<?php

}
?>
