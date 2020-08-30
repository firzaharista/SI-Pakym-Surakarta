<?php

    $del = $_GET['del'];
    $sql = "DELETE FROM alumni WHERE id_alumni_en = '$del'";
    $query = mysqli_query($conn,$sql);
    
    if ($query) {
        ?>
            <script type="text/javascript">
                alert("Data alumni telah dihapus");
                document.location = "?page=alumni-belum-diverifikasi";
            </script>
        <?php
    }
?>