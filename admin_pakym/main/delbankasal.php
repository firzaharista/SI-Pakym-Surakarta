<?php

$del = $_GET['del'];
$sql = "DELETE FROM bank_asal WHERE id_bankasal = '$del'";
$query = mysqli_query($conn, $sql);

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Data bank telah dihapus");
        document.location = "?page=bankasal";
    </script>
    <?php

    }
?> 