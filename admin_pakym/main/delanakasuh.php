<?php

    $del = $_GET['del'];
    $sql = "DELETE FROM anak_asuh WHERE id_anakasuh_en = '$del'";
    $query = mysqli_query($conn,$sql);
    
    if ($query) {
        ?>
            <script type="text/javascript">
                alert("Data anak asuh telah dihapus");
                document.location = "?page=anakasuh";
            </script>
        <?php
    }
?>