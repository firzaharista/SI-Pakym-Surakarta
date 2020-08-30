<?php
    $dibatalkan = mysqli_real_escape_string($conn, $_GET['dibatalkan']);
    $dons = "UPDATE donasi_online SET status_donasi='Donasi Dibatalkan' WHERE id_donasionline_en = '$dibatalkan'";
    $query = mysqli_query($conn,$dons);
    
    if ($query) {
        ?>  
            <script type="text/javascript">
                alert('Donasi Berhasil Dibatalkan');
                document.location='?page=donasionline-belum-dibayar';
            </script>
        <?php
    }

?>