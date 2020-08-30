<?php
	$del = $_GET['del'];
	$sql = "DELETE FROM kelas WHERE id_kelas = '$del'";
	$query = mysqli_query($conn,$sql);
	if ($query) {
	    ?>
	        <script type="text/javascript">
	        	alert('Data Kelas telah dihapus');
	        	document.location = '?page=kelas';
	        </script>
	    <?php
 	}
?>