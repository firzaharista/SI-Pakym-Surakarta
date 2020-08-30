<?php
    
    $del = $_GET['del'];
    $sql = "delete from galeri where id_galeri_en='$del' ";
    $sql2 = "ALTER TABLE galeri AUTO_INCREMENT = 1";
    $query = mysqli_query($conn, $sql);
    $query2 = mysqli_query($conn, $sql2);
    if ($query and $query2) {
        ?>
        <script language="JavaScript" type="text/javascript">
            alert('Data galeri telah dihapus');
            document.location = '?page=galeri';
        </script>
        <?php

    }
?> 