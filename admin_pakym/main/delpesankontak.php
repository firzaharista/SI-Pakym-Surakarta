<?php
include "../../.private/koneksi.php";
$del = $_GET['del'];
$sql = "delete from pesan_kontak where id_pesan='$del' ";
$query = mysqli_query($conn, $sql);
if ($query) {
    ?>
    <script language="JavaScript" type="text/javascript">
        alert('Data Pesan Telah Terhapus');
        document.location = '?page=pesankontak';
    </script>
<?php
}
