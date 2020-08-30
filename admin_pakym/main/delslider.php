<?php
    $del = $_GET['del'];
    $sql = "DELETE FROM slider WHERE id_slider = '$del'";
    $run = mysqli_query($conn,$sql);
    if ($run) {
        ?>
            <script type="text/javascript">
                alert("Data slider telah dihapus");
                document.location="?page=slider";
            </script>
        <?php
    }
?>