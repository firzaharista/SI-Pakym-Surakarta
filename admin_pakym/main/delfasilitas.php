<?php

$del = $_GET['del'];
$sql = "DELETE FROM fasilitas WHERE id_fasilitas = '$del'";
$query = mysqli_query($conn, $sql);

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Data fasilitas telah dihapus");
        document.location = "?page=fasilitas";
    </script>
    <?php

    }
?>