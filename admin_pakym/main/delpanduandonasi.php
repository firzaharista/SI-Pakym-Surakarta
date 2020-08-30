<?php

    $del = $_GET['del'];
    $sql = "DELETE FROM panduan_donasi WHERE id_panduan = '$del'";
    $query = mysqli_query($conn,$sql);
    
    if ($query) {
        ?>
            <script type="text/javascript">
                alert("Data Panduan Donasi telah dihapus");
                document.location = "?page=panduandonasi";
            </script>
        <?php
    }
?>