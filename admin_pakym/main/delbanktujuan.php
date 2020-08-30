<?php

$del = $_GET['del'];
$sql = "DELETE FROM bank_tujuan WHERE id_banktujuan = '$del'";
$query = mysqli_query($conn, $sql);

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Data bank telah dihapus");
        document.location = "?page=banktujuan";
    </script>
    <?php

    }
?> 