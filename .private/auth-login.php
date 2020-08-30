<?php
include "koneksi.php";
if ($_SESSION['status'] == "Donatur") {
    ?>
    <script languange script="javascript">
        document.location = "donatur/index.php";
    </script>
<?php
}
?>

<section class="no-padding sh-company-history">
    <div class="sub-header ">
        <!-- <span>LOGIN</span> -->
        <h3>LOGIN</h3>
        <ol class="breadcrumb">
            <li>
                <a><i class="fa fa-home"></i>Login</a>
            </li>
            <!-- <li class="active">MY ACCOUNT</li> -->
        </ol>
    </div>
</section>
<!-- /Sub HEader -->


<section class="bg-acc">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="tab-warp-acc desk-pdt-30">
                    <!-- Nav tabs -->
                    <ul class="nav tab-style-1 tab-style-2 tab-acc" role="tablist">
                        <li role="presentation" class="active"><a href="#Login" aria-controls="Login" role="tab" data-toggle="tab">Login</a></li>
                        <li role="presentation"><a href="#Register" aria-controls="Register" role="tab" data-toggle="tab">Register</a></li>

                    </ul>
                    <div class="tab-content tab-content-style-1 tab-content-style-2">
                        <div role="tabpanel" class="tab-pane fade in active" id="Login">
                            <div class="login-warp">
                                <?php
                                $username = trim(mysqli_real_escape_string($conn, $_POST['username']));
                                // $email = trim(mysqli_real_escape_string($conn, $_POST['username'])); //agar login bisa pake email
                                $password = trim(mysqli_real_escape_string($conn, $_POST['password']));
                                $pass = md5(md5('smp') . $password);
                                $user = md5(md5('smp') . $username);
                                $login = $_POST['login'];
                                if ($login) {
                                    $sql = "SELECT * FROM user_donatur WHERE username_donatur_en='$user' AND password='$pass'";
                                    $data = mysqli_fetch_array(mysqli_query($conn, $sql));
                                    if ($data['status'] == 'Donatur') {
                                        // Berhasil Login ke website donatur
                                        $_SESSION['username_donatur'] = $data['username_donatur'];
                                        $_SESSION['username_donatur_en'] = $data['username_donatur_en'];
                                        $_SESSION['email'] = $data['email'];
                                        $_SESSION['password'] = $data['password'];
                                        $_SESSION['nama'] = $data['nama'];
                                        $_SESSION['telepon'] = $data['telepon'];
                                        $_SESSION['alamat'] = $data['alamat'];
                                        $_SESSION['status'] = $data['status'];
                                        $_SESSION['waktu_add'] = $data['waktu_add'];
                                        ?>
                                        <script type="text/javascript">
                                            document.location = 'donatur/index.php';
                                        </script>
                                    <?php
                                } else { ?>
                                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                            <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true"> &times;</span></button><strong>Login gagal !</strong> Silahkan ulangi lagi . . .
                                        </div>

                                    <?php
                                }
                            }
                            ?>
                                <form class="form-contact-warp form-calc-ship cb-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input class="form-control" value="" required="required" title="" placeholder="Username" type="text" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input class="form-control" value="" required="required" title="" placeholder="Password" type="password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-block" name="login" value="Login">
                                    </div>
                                </form>


                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Register">
                            <div class="login-warp">
                                <form class="form-contact-warp form-calc-ship cb-form" id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input class="form-control" value="" required="required" title="" placeholder="Username" type="text" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input class="form-control" value="" required="required" title="" placeholder="Email" type="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input class="form-control" value="" required="required" title="" placeholder="Password" type="password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Konfirmasi Password</label>
                                        <input class="form-control" value="" required="required" title="" placeholder="Konfirmasi Password" type="password" name="password2">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Pengguna</label>
                                        <input class="form-control" value="" required="required" title="" placeholder="Nama Pengguna" type="text" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Telepon</label>
                                        <input class="form-control" value="" required="required" title="" placeholder="Telepon" type="text" name="telepon">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <textarea name="alamat" class="form-control" required="required" title="" cols="10" placeholder="Alamat" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Daftar">
                                    </div>
                                </form>
                                <?php
                                $username = trim(mysqli_real_escape_string($conn, $_POST['username']));
                                $email    = trim(mysqli_real_escape_string($conn, $_POST['email']));
                                $pass     = trim(mysqli_real_escape_string($conn, $_POST['password']));
                                $pass2    = trim(mysqli_real_escape_string($conn, $_POST['password2']));
                                $nama     = trim(mysqli_real_escape_string($conn, $_POST['nama']));
                                $telepon  = trim(mysqli_real_escape_string($conn, $_POST['telepon']));
                                $alamat   = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
                                // $password1 = MD5($pass);
                                // $password2 = MD5($pass2);
                                $username_en = md5(md5('smp') . $username);
                                $password1 = md5(md5('smp') . $pass);
                                // $password2 = MD5($pass2);
                                $password2 = md5(md5('smp') . $pass2);

                                if (isset($_POST['submit'])) {
                                    $data    = mysqli_query($conn, "SELECT username FROM user_donatur WHERE username = '$username'");
                                    $cek = mysqli_fetch_row($data);
                                    $sql = "INSERT INTO user_donatur(username_donatur,username_donatur_en,email,password,nama,telepon,alamat,status) VALUES('$username','$username_en','$email','$password1','$nama','$telepon','$alamat','Donatur')";
                                    if ($cek[0] == "") {
                                        if ($pass == $pass2) {
                                            mysqli_query($conn, $sql);
                                            ?>
                                            <script type="text/javascript">
                                                alert('Data Pengguna Donatur Berhasil Ditambahkan');
                                                document.location = "?page=auth-login";
                                            </script>
                                        <?php
                                    } else {
                                        ?>
                                            <script type="text/javascript">
                                                alert("Password tidak sama, silahkan ulangi lagi");
                                                document.location = "?page=auth-login";
                                            </script>
                                        <?php
                                    }
                                } else {
                                    ?>
                                        <script type="text/javascript">
                                            alert('Username sudah ada, silahkan ganti username');
                                            document.location = "?page=auth-login";
                                        </script>
                                    <?php
                                }
                            }

                            ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>