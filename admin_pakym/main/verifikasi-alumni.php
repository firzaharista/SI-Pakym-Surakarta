<?php
    $verifikasi = mysqli_real_escape_string($conn, $_GET['verifikasi']);
    $dons = "UPDATE alumni SET status_alumni='Sudah Diverifikasi' WHERE id_alumni_en = '$verifikasi'";
    $query = mysqli_query($conn,$dons);
    
    if ($query) {
        ?>  
            <script type="text/javascript">
                alert('Alumni Berhasil Diverifikasi');
                document.location='?page=alumni-belum-diverifikasi';
            </script>
        <?php
    }

?>