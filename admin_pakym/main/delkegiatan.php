<?php

    $del = $_GET['del'];
    $sql1 = "DELETE FROM kegiatan WHERE id_kegiatan='$del'";
    $sql2 = "DELETE FROM kegiatan_has_waktu WHERE id_kegiatan='$del'";
    // $sql3 = "ALTER TABLE kegiatan AUTO_INCREMENT = 1";
    // $sql4 = "ALTER TABLE kegiatan_has_waktu AUTO_INCREMENT = 1";
    $query1 = mysqli_query($conn, $sql1);
    $query2 = mysqli_query($conn, $sql2);
    // $query3 = mysqli_query($conn, $sql3);
    // $query4 = mysqli_query($conn, $sql4);
    if ($query1 and $query2) {
        ?>
    <script language="JavaScript" type="text/javascript">
        alert('Data kegiatan telah dihapus');
        document.location = '?page=kegiatan';
    </script>
    <?php

    }

?> 