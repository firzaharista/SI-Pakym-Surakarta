<?php

$del = $_GET['del'];
$sql = "DELETE FROM user WHERE username = '$del'";
$query = mysqli_query($conn, $sql);

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Data user admin telah dihapus");
        document.location = "?page=user_admin";
    </script>
    <?php

    }
?> 