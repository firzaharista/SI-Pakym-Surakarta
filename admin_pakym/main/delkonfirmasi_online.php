<?php

$del = $_GET['del'];
$sql = "DELETE FROM konfirmasi_online WHERE id_konfirmasionline = '$del'";
$query = mysqli_query($conn, $sql);

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Data Konfirmasi telah dihapus");
        document.location = "?page=konfirmasi";
    </script>
    <?php

}
?> 