<?php

$del = $_GET['del'];
$sql = "DELETE FROM user_donatur WHERE username = '$del'";
$query = mysqli_query($conn, $sql);

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Data user donatur telah dihapus");
        document.location = "?page=user_donatur";
    </script>
    <?php

    }
?> 