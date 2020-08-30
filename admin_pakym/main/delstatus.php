<?php
    $del = $_GET['del'];
    $sql = "delete from status where id_status = '$del'";
    $query = mysqli_query($conn,$sql);
    
    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Data status telah dihapus");
            document.location = "?page=status";
        </script>
        <?php
    }
?>