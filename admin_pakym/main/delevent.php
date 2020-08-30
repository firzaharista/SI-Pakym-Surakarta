<?php
	$del = $_GET['del'];
	$sql = "DELETE FROM event WHERE id_event_en = '$del'";
	$query = mysqli_query($conn,$sql);
	if ($query){
		?>
			<script type="text/javascript">
				alert('Data Event telah dihapus');
				document.location='?page=event';
			</script>
		<?php
	}
?>
