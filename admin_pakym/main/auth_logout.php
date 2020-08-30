<?php
  session_start();
  session_destroy();
  ?>
    <script type="text/javascript">
        alert('Anda telah log out');
        document.location='auth_login.php';
    </script>
    <?php
 ?>
