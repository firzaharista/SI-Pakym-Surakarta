<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>Data Pengguna Admin</span>
    </li>
    <!-- <li class="breadcrumb-item">
              <span>Laptop with retina screen</span>
            </li> -->
</ul>
<!--------------------
          END - Breadcrumbs
          -------------------->

<!-- DELETE ALERT -->
<script language="JavaScript" type="text/javascript">
    function confirmDelete() {
        if (confirm("Hapus Data User Admin ?")) {
            return true;
        } else {
            return false;
        }
    }
</script>
<div class="content-panel-toggler">
    <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
</div>
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper">
                    <h6 class="element-header">
                        Data Pengguna Admin
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA PENGGUNA ADMIN</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Data Pengguna Admin Website Panti Asuhan Keluarga Yatim Muhammadiyah Surakarta</p>
                                </div>
                                <div class="form-group" align='center'>
                                    <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="button">Tambah Data Pengguna Admin</button>
                                    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="onboardingWideFormModal" role="dialog" tabindex="-1">
                                        <div class="modal-dialog modal-lg modal-centered" role="document">
                                            <div class="modal-content text-center">
                                                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Exit</span><span class="os-icon os-icon-close"></span></button>
                                                <div class="onboarding-side-by-side">
                                                    <div class="onboarding-media">
                                                        <img alt="" src="img/logo_pakym.png" width="180px">
                                                    </div>
                                                    <div class="onboarding-content with-gradient">
                                                        <h4 class="onboarding-title">
                                                            Tambah Data Pengguna Admin
                                                        </h4>
                                                        <div class="onboarding-text">
                                                            Data Pengguna Admin Website Panti Asuhan Keluarga Yatim Muhammadiyah Surakarta
                                                        </div>
                                                        <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Username</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" name="username" placeholder="Username" type="text" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Password</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" name="password" placeholder="Password" type="password" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Konfirmasi Password</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" name="password2" placeholder="Password" type="password" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Nama Pengguna</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" name="nama" placeholder="Nama Pengguna" type="text" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group" align='left'>
                                                                        <input class="btn btn-primary" type="submit" name="submit" value="Tambah Data">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>

                                                        <!-- TAMBAH ADMIN -->
                                                        <?php
                                                        // $username = $_POST['username'];
                                                        // $pass     = $_POST['password'];
                                                        // $pass2    = $_POST['password2'];
                                                        // $nama     = $_POST['nama'];
                                                        // $password1 = MD5($pass);
                                                        // $password2 = MD5($pass2);
                                                        $username = trim(mysqli_real_escape_string($conn, $_POST['username']));
                                                        $pass     = trim(mysqli_real_escape_string($conn, $_POST['password']));
                                                        $pass2    = trim(mysqli_real_escape_string($conn, $_POST['password2']));
                                                        $nama     = trim(mysqli_real_escape_string($conn, $_POST['nama']));
                                                        $username_en = md5(md5('smp') . $username);
                                                        $password1 = md5(md5('smp') . $pass);
                                                        $password2 = md5(md5('smp') . $pass2);

                                                        if (isset($_POST['submit'])) {
                                                            $data    = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
                                                            $cek     = mysqli_fetch_row($data);
                                                            $sql     = "INSERT INTO user(username,username_en,password,nama,status) VALUES('$username','$username_en','$password1','$nama','Admin')";
                                                            if ($cek[0] == "") {
                                                                if ($pass == $pass2) {
                                                                    mysqli_query($conn, $sql);
                                                                    ?>
                                                                    <script type="text/javascript">
                                                                        alert("Data pengguna admin berhasil ditambahkan");
                                                                        document.location = "?page=user_admin";
                                                                    </script>
                                                                <?php

                                                            } else {
                                                                ?>
                                                                    <script type="text/javascript">
                                                                        alert("Password tidak sama, silahkan ulangi lagi");
                                                                        document.location = "?page=user_admin";
                                                                    </script>
                                                                <?php

                                                            }
                                                        } else {
                                                            ?>
                                                                <script type="text/javascript">
                                                                    alert("Username sudah ada, silahkan ganti username");
                                                                    document.location = "?page=user_admin";
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
                                <div class="table-responsive">
                                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                        <thead>
                                            <tr align="center">
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Username</th>
                                                <th>Nama</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no  = 1;
                                            // $lastlogin = $_SESSION['lastlogin'];
                                            $ql = "SELECT * FROM user";
                                            $run = mysqli_query($conn, $sql);
                                            while ($data = mysqli_fetch_array($run)) {
                                                echo  "
                                                    <tr align='center'>
                                                        <td>$no</td>
                                                        <td>$data[username]</td>
                                                        <td>$data[nama]</td>
                                                        <td>$data[status]</td>
                                                        <td>
											                <a href='?page=deluser_admin&del=$data[username]' onClick='return confirmDelete()'><button class='btn btn-outline-danger' >Hapus</button></a>
                                                        </td>

                                                    </tr>";
                                                $no++;
                                            }
                                            ?>

                                        </tbody>
                                        </ table>
                                </div>