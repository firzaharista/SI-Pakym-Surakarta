<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>ANAK ASUH</span>
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
                        UPDATE ANAK ASUH
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <!-- SELECT DATA ANAK ASUH -->
                            <?php

                            $upd = $_GET['upd'];
                            $sql = "SELECT * FROM anak_asuh WHERE id_anakasuh_en='$upd'";
                            $run = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_array($run);

                            // $sw="select * from anak_asuh where id_anakasuh_en='$upd'";
                            // $wq=mysqli_query($conn,$sw);
                            // $data=mysqli_fetch_array($wq);
                            // $id_anakasuh = $data['id_anakasuh'];
                            // $id_anakasuh_en = $upd;
                            ?>
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>UPDATE DATA ANAK ASUH</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data anak asuh website PAKYM Surakarta</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Nama Anak Asuh</label>
                                            <input class="form-control" data-error="Data harus diisi" placeholder="Nama Anak Asuh" required="required" type="text" name="nama_anakasuh" value="<?php echo $data['nama_anakasuh']; ?>">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Pendidikan Saat Ini</label>
                                            <input class="form-control" data-error="Data harus diisi" placeholder="Pendidikan Saat ini" required="required" type="text" name="pendidikan" value="<?php echo $data['pendidikan']; ?>">
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
                                                <input class="single-daterange form-control" data-error="Data harus diisi" required="required" placeholder="Tanggal Lahir" type="text" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'];?>">
                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Nama Bapak Kandung</label>
                                            <input class="form-control" data-error="Data harus diisi" placeholder="Nama Bapak Kandung" required="required" type="text" name="nama_bapak" value="<?php echo $data['nama_bapak_kandung']; ?>">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Nama Ibu Kandung</label>
                                            <input class="form-control" data-error="Data harus diisi" placeholder="Nama Ibu Kandung" required="required" type="text" name="nama_ibu" value="<?php echo $data['nama_ibu_kandung']; ?>">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea class="form-control" data-error="Data harus diisi" placeholder="Alamat Lengkap" required="required" rows="3" name="alamat"><?php echo $data['alamat']; ?></textarea>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="status">
                                        <?php
                                        echo "<option>-- Pilihan Status --</option>";
                                        $query = mysqli_query($conn, "SELECT * FROM status");
                                        while ($hasil = mysqli_fetch_array($query)) {
                                            if ($hasil[id_status] == $data[id_status]) {
                                                echo "<option value='$hasil[id_status]' selected='selected'>$hasil[nama_status]</option>";
                                            } else {
                                                echo "<option value='$hasil[id_status]'>$hasil[nama_status]</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group" align=''>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Data">
                                </div>
                            </form>

                            <!-- UPDATE DATA ANAK ASUH -->
                            <?php
                            //  $q;

                            $nama_anakasuh = $_POST['nama_anakasuh'];
                            $tempat_lahir = $_POST['tempat_lahir'];
                            $tanggal_lahir = $_POST['tanggal_lahir'];
                            $nama_bapak = $_POST['nama_bapak'];
                            $nama_ibu = $_POST['nama_ibu'];
                            $pendidikan = $_POST['pendidikan'];
                            $alamat = $_POST['alamat'];
                            $status = $_POST['status'];
                            // $submit = $_POST['submit'];
                            // print error_reporting();

                            // echo $q = "UPDATE anak_asuh SET nama_anakasuh='$nama_anakasuh',nama_wali='$nama_wali','tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',telepon='$telepon','alamat='$alamat','id_status='$status' WHERE id_anakasuh='$upd'";
                            // "update daftar_masuk set nama_anakasuh='$namaanakasuh',nama_wali='$namawali',TTL='$TTL',telepon='$telp',alamat='$alamat',id_status='$status' where id_daftarmasuk='$upd'";

                            if (isset($_POST['submit'])) {
                                // echo $q = "update anak_asuh set nama_anakasuh='$nama_anakasuh',tempat_lahir='$tempat_lahir',
                                // tanggal_lahir='$tanggal_lahir',nama_bapak_kandung='$nama_bapak',nama_ibu='$nama_ibu',pendidikan='$pendidikan',alamat='$alamat',
                                // id_status='$status' WHERE id_anakasuh='$upd'";
                                $q = "UPDATE anak_asuh SET nama_anakasuh = '$nama_anakasuh', tempat_lahir = '$tempat_lahir', 
                                tanggal_lahir = '$tanggal_lahir',nama_bapak_kandung = '$nama_bapak', 
                                nama_ibu_kandung = '$nama_ibu', pendidikan = '$pendidikan', alamat = '$alamat', 
                                id_status = '$status' WHERE anak_asuh.id_anakasuh_en = '$upd'";
                                $r = mysqli_query($conn, $q);
                                if ($r) {
                                    ?>
                                    <script type="text/javascript">
                                        alert('Data Anak Asuh Berhasil Diubah');
                                        document.location = '?page=anakasuh';
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