<?php
    $del = $_GET['del'];
    $sql = "DELETE FROM donasi_barang WHERE id_donasibarang = '$del'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        ?>
    <script type="text/javascript">
        alert('Data Donasi Barang telah dihapus');
        document.location = '?page=donasibarang';
    </script>
    <?php

    }
?> 