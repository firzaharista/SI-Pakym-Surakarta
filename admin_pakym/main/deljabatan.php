<?php

    $del = $_GET['del'];
    $sql = "DELETE FROM jabatan WHERE id_jabatan = '$del'";
    $query = mysqli_query($conn,$sql);
    
    if ($query) {
        ?>
            <script type="text/javascript">
                alert("Data jabatan telah dihapus");
                document.location = "?page=jabatan";
            </script>
        <?php
    }
?>