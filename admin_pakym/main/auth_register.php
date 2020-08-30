<!DOCTYPE html>
<html>

<head>
    <?php
    include "../../.private/koneksi.php";

    $fname    = $_POST['fname'];
    $username = $_POST['username'];
    $pass1    = $_POST['pass1'];
    $pass2    = $_POST['pass2'];
    // $password1 = MD5($pass1);
    // $password2 = MD5($pass2);
    $username_en = md5(md5('smp') . $username);
    $password1 = md5(md5('smp') . $pass1);
    $password2 = md5(md5('smp') . $pass2);
    $submit   = $_POST['submit'];
    ?>
    <title>Admin Dashboard HTML Template</title>
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

<body>
    <div class="all-wrapper menu-side with-pattern">
        <div class="auth-box-w wider">
            <!-- <div class="logo-w"> -->
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="auth_register.php"><img alt="" src="img/logo_pakym.png" width="140"></a>
            <!-- </div> -->
            <h4 class="auth-header">
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create new account
            </h4>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" name="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for=""> Full Name</label>
                    <input class="form-control" data-error="Data harus diisi" placeholder="Enter Full Name" type="text" name="fname">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                    <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                </div>
                <div class="form-group">
                    <label for=""> Username</label>
                    <input class="form-control" data-error="Data harus diisi" placeholder="Enter Username" type="text" name="username">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                    <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Password</label>
                            <input class="form-control" data-error="Data harus diisi" placeholder="Password" type="password" name="pass1">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                            <div class="pre-icon os-icon os-icon-fingerprint"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input class="form-control" data-error="Data harus diisi" placeholder="Password" type="password" name="pass2">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                    </div>
                </div>
                <?php
                if ($submit) {
                  if ($username != "") {
                    if ($fname != "") {
                      if ($pass1 and $pass2 != "") {
                        $data = mysqli_query($conn, "select username from user where username = '" . $username . "'");
                        $cek = mysqli_fetch_row($data);
                        $input = ("insert into user(username, username_en, password, nama, status) values ('" . $username . "', '".$username_en."' ,'" . $password1 . "','" . $fname . "','Guest');");
                        if ($cek[0] == "") {
                          if ($password1 == $password2) {
                            mysqli_query($conn, $input);
                            ?>
                <script type="text/javascript">
                    alert("Data berhasil ditambahkan");
                    document.location = "auth_login.php";
                </script>
                <?php

              } else {
                echo "password tidak sama";
              }
            } else {
              echo "username sudah ada";
            }
          } else {
            echo "password kosong";
          }
        } else {
          echo "nama lengkap kosong";
        }
      } else {
        echo "Username Kosong";
      }
    }
    ?>
                <div class="buttons-w">
                    <input class="btn btn-outline-primary" type='submit' name="submit" value="Register Now">
                </div>
                <div class="text">
                    <br>
                    <p class="mt-15 mb-0">Already have an account ?<a href="auth_login.php" class="text-info ml-1">Sign In</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html> 