<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>ALUMNI</span>
    </li>
    <!-- <li class="breadcrumb-item">
              <span>Laptop with retina screen</span>
            </li> -->
</ul>
<!--------------------
          END - Breadcrumbs
          -------------------->
<div class="content-panel-toggler">
    <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
</div>
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper">
                    <h6 class="element-header">
                        UPDATE ALUMNI
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <!-- SELECT DATA ANAK ASUH -->
                            <?php

                            $upd = $_GET['upd'];
                            $sql = "SELECT * FROM alumni WHERE id_alumni_en='$upd'";
                            $run = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_array($run);
                            ?>
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>UPDATE DATA ALUMNI</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data alumni website PAKYM Surakarta</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Nama Alumni</label>
                                            <input class="form-control" data-error="Data harus diisi" placeholder="Nama Alumni" required="required" type="text" name="nama_alumni" value="<?php echo $data['nama']; ?>">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input class="form-control" data-error="Data harus diisi" placeholder="Email" required="required" type="text" name="email" value="<?php echo $data['email']; ?>">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Tempat Lahir</label></label>
                                            <input class="form-control" data-error="Data harus diisi" placeholder="Tempat Lahir" value="<?php echo $data['tempat_lahir']; ?>" type="text" name="tempat_lahir">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Tanggal Lahir</label>
                                                <div class="date-input">
                                                    <input class="single-daterange form-control" data-error="Data harus diisi" value='<?php echo $data['tanggal_lahir']; ?>' required="required" placeholder="Tanggal Lahir" type="text" name="tanggal_lahir">
                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">No. Telepon</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="No. Telepon" required="required" type="text" name="telepon" value="<?php echo $data['telepon']; ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea class="form-control" data-error="Data harus diisi" placeholder="Alamat" required="required" rows="3" name="alamat"><?php echo $data['alamat']; ?></textarea>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Tahun Masuk</label></label>
                                            <input class="form-control" data-error="Data harus diisi" placeholder="Tahun Masuk" value="<?php echo $data['tahun_masuk']; ?>" type="text" name="tahun_masuk">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Tahun Keluar</label></label>
                                            <input class="form-control" data-error="Data harus diisi" placeholder="Tahun Keluar" value="<?php echo $data['tahun_keluar']; ?>" type="text" name="tahun_keluar">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Pekerjaan Sekarang</label></label>
                                            <input class="form-control" data-error="Data harus diisi" placeholder="Pekerjaan Sekarang" value="<?php echo $data['pekerjaan']; ?>" type="text" name="pekerjaan">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Pesan dan Kesan</label>
                                    <textarea class="form-control" data-error="Data harus diisi" placeholder="Pesan dan Kedan" required="required" rows="3" name="pesan_kesan"><?php echo $data['pesan_kesan']; ?></textarea>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group" align=''>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Data">
                                </div>
                            </form>

                            <!-- UPDATE DATA ALUMNI -->
                            <?php

                            $nama_alumni = $_POST['nama_alumni'];
                            $email       = $_POST['email'];
                            $tempat_lahir = $_POST['tempat_lahir'];
                            $tanggal_lahir = $_POST['tanggal_lahir'];
                            $telp = $_POST['telepon'];
                            $alamat = $_POST['alamat'];
                            $tahun_masuk = $_POST['tahun_masuk'];
                            $tahun_keluar = $_POST['tahun_keluar'];
                            $pekerjaan = $_POST['pekerjaan'];
                            $pesankesan = $_POST['pesan_kesan'];

                            if (isset($_POST['submit'])) {
                                $q = "UPDATE alumni set nama='$nama_alumni',email='$email',
                                tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',telepon='$telp',
                                alamat='$alamat', tahun_masuk='$tahun_masuk', tahun_keluar='$tahun_keluar', pekerjaan = '$pekerjaan',
                                pesan_kesan='$pesankesan' WHERE id_alumni_en='$upd'";
                                $r = mysqli_query($conn, $q);
                                if ($r) {
                                    ?>
                                    <script type="text/javascript">
                                        alert('Data Alumni Berhasil Diubah');
                                        document.location = '?page=alumni-sudah-verifikasi';
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