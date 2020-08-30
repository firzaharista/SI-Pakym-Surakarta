<!DOCTYPE html>
<html>

<head>
  <?php
  include "../../.private/koneksi.php";
  if ($_SESSION['status'] == "Admin") {
    ?>
    <script languange script="javascript">
      document.location = "adm.php";
    </script>
  <?php
}
?>
  <title>Admin Dashboard PAKYM Surakarta</title>
  <meta charset="utf-8">
  <meta content="ie=edge" http-equiv="x-ua-compatible">
  <meta content="template language" name="keywords">
  <meta content="Tamerlan Soziev" name="author">
  <meta content="Admin dashboard html template" name="description">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="favicon.png" rel="shortcut icon">
  <link href="apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
  <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
  <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
  <link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
  <link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
  <link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="css/main.css?version=4.4.0" rel="stylesheet">
</head>

<body class="auth-wrapper">
  <div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w">
      <br><br>
      <!-- <div class="logo-w"> -->
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="auth_login.php"><img alt="" src="img/logo_pakym.png" width='140'></a>
      <!-- </div> -->
      <h4 class="auth-header">
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GET STARTED <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WITH US
      </h4>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="">Username</label><input class="form-control" placeholder="Enter your username" type="text" name='username'>
          <div class="pre-icon os-icon os-icon-user-male-circle"></div>
        </div>
        <div class="form-group">
          <label for="">Password</label><input class="form-control" placeholder="Enter your password" type="password" name='password'>
          <div class="pre-icon os-icon os-icon-fingerprint"></div>
        </div>
        <div class="buttons-w">
          <input type="submit" name="submit" value="SIGN IN" class="btn btn-primary">
          <br><br>
          <div class="text">
            <p class="mt-15 mb-0">Don't have an account ?<a href="auth_register.php" class="text-info ml-2">Sign Up</a></p>
          </div>
        </div>
      </form>
      <?php
      // $username = $_POST['username'];
      // $pass = $_POST['password'];
      // $password = MD5($pass);
      $username = trim(mysqli_real_escape_string($conn, $_POST['username']));
      $pass     = trim(mysqli_real_escape_string($conn, $_POST['password']));
      $password = md5(md5('smp') . $pass);
      $submit = $_POST['submit'];
      if ($submit) {
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $data = mysqli_fetch_array(mysqli_query($conn, $sql));
        if ($data['status'] == 'Admin') {
          // Berhasil Login ke admin
          $_SESSION['username'] = $data['username'];
          $_SESSION['username_en'] = $data['username_en'];
          $_SESSION['password'] = $data['password'];
          $_SESSION['nama'] = $data['nama'];
          $_SESSION['status'] = $data['status'];
          $_SESSION['waktu_add'] = $data['waktu_add'];
          ?>
          <script type="text/javascript">
            alert('Selamat Datang <?php echo $data['nama']; ?> Sebagai Administrator');
            document.location = 'adm.php';
          </script>
        <?php
      } else {
        ?>
          <script type="text/javascript">
            alert('Maaf, Username dan Password anda salah. Silahkan ulangi lagi');
            document.location = 'auth_login.php';
          </script>
        <?php
      }
    }
    ?>
    </div>
  </div>
</body>

</html>