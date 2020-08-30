<?php

    $del = $_GET['del'];
    $sql = "DELETE FROM daftar_masuk WHERE id_daftarmasuk = '$del'";
    $query = mysqli_query($conn,$sql);
    
    if ($query) {
        ?>
            <script type="text/javascript">
                alert("Data Pendaftar telah dihapus");
                document.location = "?page=daftarmasuk";
            </script>
        <?php
    }
?>