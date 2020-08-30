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

<!-- DELETE ALERT -->
<script language="JavaScript" type="text/javascript">
    function confirmDelete() {
        if (confirm("Hapus Data Anak Asuh ?")) {
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
                        Anak Asuh Panti Asuhan
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA ANAK ASUH PANTI ASUHAN</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Anak Asuh Panti Asuhan PAKYM Surakarta</p>
                                </div>
                                <div class="form-group" align='center'>
                                    <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="button">Tambah Data Anak Asuh</button>
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
                                                            Tambah Data Anak Asuh
                                                        </h4>
                                                        <div class="onboarding-text">
                                                            Anak Asuh Panti Asuhan PAKYM Surakarta
                                                        </div>
                                                        <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Nama Anak Asuh</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Nama Lengkap" name="nama_anakasuh" type="text" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Tempat Lahir</label></label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Tempat Lahir" type="text" name="tempat_lahir">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Tanggal Lahir</label>
                                                                        <div class="date-input">
                                                                            <input class="single-daterange form-control" data-error="Data harus diisi" required="required" placeholder="Tanggal Lahir" type="text" name="tanggal_lahir">
                                                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Nama Bapak Kandung</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Nama Bapak Kandung" name="nama_bapak" type="text" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Nama Ibu Kandung</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Nama Ibu Kandung" name="nama_ibu" type="text" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Pendidikan Saat ini</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Pendidikan Saat ini" name="pendidikan" type="text" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Alamat</label>
                                                                        <textarea class="form-control" data-error="Data harus diisi" placeholder="Alamat Lengkap" required="required" rows="3" name="alamat"></textarea>
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Status</label>
                                                                        <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="status">
                                                                            <?php
                                                                            echo "<option>-- Pilihan Status --</option>";
                                                                            $query = mysqli_query($conn, "SELECT * FROM status order by id_status DESC");
                                                                            while ($d = mysqli_fetch_array($query)) {
                                                                                echo "<option value='$d[id_status]'> $d[nama_status] </option>";
                                                                            }
                                                                            ?>
                                                                        </select>
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
                                                        <?php
                                                        $sk = "select max(id_anakasuh) 'max' from anak_asuh";
                                                        $q  = mysqli_query($conn, $sk);
                                                        $rk = mysqli_fetch_array($q);
                                                        $id_anakasuh    = $rk['max'];
                                                        $id_anakasuh    = $id_anakasuh + 1;
                                                        $id_anakasuh_en = md5(md5('smp') . $id_anakasuh);

                                                        $nama_anakasuh = trim(mysqli_real_escape_string($conn, $_POST['nama_anakasuh']));
                                                        $tempat_lahir  = trim(mysqli_real_escape_string($conn, $_POST['tempat_lahir']));
                                                        $tanggal_lahir = trim(mysqli_real_escape_string($conn, $_POST['tanggal_lahir']));
                                                        $nama_bapak    = trim(mysqli_real_escape_string($conn, $_POST['nama_bapak']));
                                                        $nama_ibu      = trim(mysqli_real_escape_string($conn, $_POST['nama_ibu']));
                                                        $pendidikan    = trim(mysqli_real_escape_string($conn, $_POST['pendidikan']));
                                                        $alamat        = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
                                                        $status        = trim(mysqli_real_escape_string($conn, $_POST['status']));
                                                        $submit        = $_POST['submit'];


                                                        if ($submit) {
                                                            $sql = "insert into anak_asuh(id_anakasuh,id_anakasuh_en,nama_anakasuh,tempat_lahir,tanggal_lahir,nama_bapak_kandung,nama_ibu_kandung,pendidikan,alamat,id_status) values('$id_anakasuh','$id_anakasuh_en','$nama_anakasuh','$tempat_lahir','$tanggal_lahir','$nama_bapak','$nama_ibu','$pendidikan','$alamat','$status')";
                                                            $run = mysqli_query($conn, $sql);
                                                            if ($run) {
                                                                ?>
                                                                <script type="text/javascript">
                                                                    alert('Data Anak Asuh Berhasil Ditambahkan');
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
                                </div>
                                <div class="table-responsive">
                                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                        <thead>
                                            <tr align="center">
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Anak Asuh</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pendidikan Saat ini</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Nama Anak Asuh</th>
                                                <th>Pendidikan Saat Ini</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $sql = "SELECT * FROM anak_asuh,status WHERE anak_asuh.id_status=status.id_status order by id_anakasuh DESC";
                                            $run = mysqli_query($conn, $sql);
                                            while ($e = mysqli_fetch_array($run)) {
                                                echo "
                                                    <tr align='center'>
                                                        <td>$no</td>
                                                        <td>$e[nama_anakasuh]</td>
                                                        <td>$e[pendidikan]</td>
                                                        <td>$e[nama_status]</td>
                                                        <td>
                                                            <a href='?page=detailanakasuh&detail=$e[id_anakasuh_en]'><button class='btn btn-outline-success'>Detail</button></a>
                                                            <a href='?page=updanakasuh&upd=$e[id_anakasuh_en]'><button class='btn btn-outline-primary'>Edit</button></a>
                                                            <a href='?page=delanakasuh&del=$e[id_anakasuh_en]' onClick='return confirmDelete()'><button class='btn btn-outline-danger' >Hapus</button></a>
                                                        </td>
                                                    </tr>";
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>