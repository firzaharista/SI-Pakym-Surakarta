<?php
    $del = $_GET['del'];
    $sql = "DELETE FROM waktu WHERE id_kategoriwaktu = '$del'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        ?>
    <script type="text/javascript">
        alert('Data waktu telah dihapus');
        document.location = '?page=waktu';
    </script>
    <?php

    }
?> 