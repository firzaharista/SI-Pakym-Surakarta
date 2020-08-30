<?php
if ($_SESSION['status']!="Donatur")
{session_destroy();
    ?>
	<!-- <script language script="JavaScript">alert('Anda Tidak Berhak Mengakses Halaman Ini');</script> -->
	<script language script="JavaScript">document.location='../?page=auth-login';</script>
	<?php
}
?>
