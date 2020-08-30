<?php
include "../../.private/koneksi.php";
$del = $_GET['del'];
$sql = "delete from user where username='$del' ";
// $sql2 = "ALTER TABLE user AUTO_INCREMENT = 1";
$query = mysqli_query($conn, $sql);
// $query2 = mysqli_query($conn, $sql2);
if ($query) {
    ?>
    <script language="JavaScript" type="text/javascript">
      alert('Data Pengguna Telah Terhapus');
      document.location='pengguna.php';
    </script>
    <?php
  }
