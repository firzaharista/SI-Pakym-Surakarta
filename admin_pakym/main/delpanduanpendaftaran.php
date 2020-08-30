<?php

    $del = $_GET['del'];
    $sql = "DELETE FROM panduan_pendaftaran WHERE id_panduanpendaftaran = '$del'";
    $query = mysqli_query($conn,$sql);
    
    if ($query) {
        ?>
            <script type="text/javascript">
                alert("Data Panduan Pendaftaran telah dihapus");
                document.location = "?page=panduan_pendaftaran";
            </script>
        <?php
    }
?>