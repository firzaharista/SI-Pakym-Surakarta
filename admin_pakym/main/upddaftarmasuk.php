<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>UPDATE PENDAFTARAN</span>
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
                        Update Pendaftaran
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>UPDATE PENDAFTARAN</u>
                                </h4>
                                <div class="element-wrapper">
                                    <div class="element-box">
                                        <!-- SELECT DATA PENDAFTARAN -->
                                        <?php

                                        $upd = $_GET['upd'];
                                        $sql = "SELECT * FROM daftar_masuk WHERE id_daftarmasuk='$upd'";
                                        $run = mysqli_query($conn, $sql);
                                        $d = mysqli_fetch_array($run);
                                        ?>
                                        <div class="form-desc" align='center'>
                                            <p>Informasi mengenai data berita website PAKYM Surakarta</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Anak Asuh</label>
                                            <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Nama Lengkap" name="namaanakasuh" type="text" value="<?php echo $d['nama_anakasuh']; ?>">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Wali</label>
                                            <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Nama Wali" name="namawali" type="text" value="<?php echo $d['nama_wali']; ?>">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tempat Lahir</label>
                                            <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Tempat Lahir" name="tempat_lahir" type="text" value="<?php echo $d['tempat_lahir']; ?>">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                        <div align="left">
                                            <div class="form-group">
                                                <label for="">Tanggal Lahir</label>
                                                <div class="date-input">
                                                    <input class="single-daterange form-control" data-error="Data harus diisi" required="required" placeholder="Tanggal Lahir" type="text" name="tanggal_lahir">
                                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">No. Telepon</label>
                                            <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Telepon" name="telepon" type="text" value="<?php echo $d['telepon']; ?>">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat</label>
                                            <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Alamat" name="alamat" type="text" value="<?php echo $d['alamat']; ?>">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="status">
                                                <?php
                                                $query = mysqli_query($conn, "SELECT * FROM status");
                                                while ($hasil = mysqli_fetch_array($query)) {
                                                  if ($hasil[id_status] == $d[id_status]) {
                                                    echo "<option value='$hasil[id_status]' selected='selected'>$hasil[nama_status]</option>";
                                                  } else {
                                                    echo "<option value='$hasil[id_status]'>$hasil[nama_status]</option>";
                                                  }
                                                }
                                                ?>


                                            </select>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>

                                        <div class="form-group" align='left'>
                                            <input class="btn btn-primary" type="submit" name="submit" value="Update Data">
                                        </div>
                            </form>
                            <!-- UPDATE DATA DAFTAR MASUK -->
                            <?php
                            $namaanakasuh = $_POST['namaanakasuh'];
                            $namawali = $_POST['namawali'];
                            $tempat_lahir = $_POST['tempat_lahir'];
                            $tanggal_lahir = $_POST['tanggal_lahir'];
                            $telp = $_POST['telepon'];
                            $alamat = $_POST['alamat'];
                            $status = $_POST['status'];
                            $submit = $_POST['submit'];


                            if ($submit) {
                              $sql = "update daftar_masuk set nama_anakasuh='$namaanakasuh',nama_wali='$namawali',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',telepon='$telp',alamat='$alamat',id_status='$status' where id_daftarmasuk='$upd'";
                              $run = mysqli_query($conn, $sql);
                              if ($run) {
                                ?>
                            <script type="text/javascript">
                                alert('Data Pendaftaran Berhasil Diubah');
                                document.location = '?page=daftarmasuk';
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