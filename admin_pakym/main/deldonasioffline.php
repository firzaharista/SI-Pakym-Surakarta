<?php
    $del = $_GET['del'];
    $sql = "DELETE FROM donasi_offline WHERE id_donasioffline = '$del'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        ?>
    <script type="text/javascript">
        alert('Data Donasi Offline telah dihapus');
        document.location = '?page=donasioffline';
    </script>
    <?php

    }
?> 