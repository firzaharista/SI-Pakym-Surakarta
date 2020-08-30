<?php

    $del = $_GET['del'];
    $sql = "DELETE FROM jenis_panduan WHERE id_jenispanduan = '$del'";
    $query = mysqli_query($conn,$sql);
    
    if ($query) {
        ?>
            <script type="text/javascript">
                alert("Data jenis Panduan telah dihapus");
                document.location = "?page=jenispanduan";
            </script>
        <?php
    }
?>