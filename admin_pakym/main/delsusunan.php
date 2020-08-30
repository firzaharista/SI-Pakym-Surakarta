<?php

$del = $_GET['del'];
$sql = "DELETE FROM susunan WHERE id_susunan = '$del'";
$query = mysqli_query($conn, $sql);

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Data Susunan Personalia telah dihapus");
        document.location = "?page=susunan";
    </script>
    <?php

}
?> 