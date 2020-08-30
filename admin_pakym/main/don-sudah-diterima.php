<?php
$terima = mysqli_real_escape_string($conn, $_GET['terima']);
$dons = "UPDATE donasi_online SET status_donasi='Pembayaran Sudah Diterima' WHERE id_donasionline_en = '$terima'";
$query = mysqli_query($conn, $dons);
if ($query) {
    $del = mysqli_query($conn, "DELETE FROM konfirmasi_online WHERE id_donasionline_en = '$terima'");
    if ($del) {
        ?>
        <script type="text/javascript">
            alert('Pembayaran Donasi Berhasil Diterima');
            document.location = '?page=donasionline-konfirmasi';
        </script>
    <?php
}
}

?>