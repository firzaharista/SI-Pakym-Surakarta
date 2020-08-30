<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>PENDAFTARAN ANAK ASUH</span>
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
        if (confirm("Hapus Data Pendaftaran ?")) {
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
                        Pendaftaran Anak Asuh Panti Asuhan
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>PENDAFTARAN ANAK ASUH PANTI ASUHAN</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Data Pendaftaran Anak Asuh Panti Asuhan PAKYM Surakarta</p>
                                </div>
                                <div class="form-group" align='center'>
                                    <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="button">Tambah Data Pendaftar</button>
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
                                                            Tambah Data Pendaftar
                                                        </h4>
                                                        <div class="onboarding-text">
                                                            Pendafataran Anak Asuh Panti Asuhan PAKYM Surakarta
                                                        </div>
                                                        <form action="<?php $_SERVER['PHP_SELF']; ?>">
                                                            <div class="row">
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Nama Anak Asuh</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Nama Lengkap" name="namaanakasuh" type="text" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
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
                                                                        <label for="">Tempat Lahir</label>
                                                                        <input class="form-control" placeholder="Tempat Lahir" type="text" value="" name="tempat_lahir">
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
                                                                        <label for="">Telepon</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Telepon" name="telepon" type="text" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Alamat</label>
                                                                        <textarea class="form-control" data-error="Data harus diisi" placeholder="Alamat" required="required" rows="3" name="alamat"></textarea>
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Status</label>
                                                                        <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="status">
                                                                            <?php
                                                                            echo "<option>-- Pilihan Status--</option>";
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
                                                        $namaanakasuh   = trim(mysqli_real_escape_string($conn, $_POST['namaanakasuh']));
                                                        $namabapak      = trim(mysqli_real_escape_string($conn, $_POST['nama_bapak']));
                                                        $namaibu        = trim(mysqli_real_escape_string($conn, $_POST['nama_ibu']));
                                                        $tempat_lahir   = trim(mysqli_real_escape_string($conn, $_POST['tempat_lahir']));
                                                        $tanggal_lahir  = trim(mysqli_real_escape_string($conn, $_POST['tanggal_lahir']));
                                                        $telp           = trim(mysqli_real_escape_string($conn, $_POST['telepon']));
                                                        $alamat         = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
                                                        $status         = $_POST['status'];

                                                        if (isset($_POST['submit'])) {
                                                            $run = mysqli_query($conn, "INSERT INTO daftar_masuk(nama_anakasuh,nama_bapak_kandung,nama_ibu_kandung,tempat_lahir,tanggal_lahir,telepon,alamat,id_status) VALUES('$namaanakasuh','$namabapak,'$namaibu','$tempat_lahir','$tanggal_lahir','$telp','$alamat','$status')");
                                                            if ($run) {
                                                                ?>
                                                                <script type="text/javascript">
                                                                    alert("Pendaftaran Anak Asuh telah ditambahkan");
                                                                    document.location = "?page=daftarmasuk";
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
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Nama Anak Asuh</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $sql = "SELECT * FROM daftar_masuk,status WHERE daftar_masuk.id_status=status.id_status order by id_daftarmasuk DESC";
                                            $run = mysqli_query($conn, $sql);
                                            while ($e = mysqli_fetch_array($run)) {
                                                echo "
                                                    <tr align='center'>
                                                        <td>$no</td>
                                                        <td>$e[nama_anakasuh]</td>
                                                        <td>$e[nama_status]</td>
                                                        <td>
                                                            <a href='?page=detaildaftarmasuk&detail=$e[id_daftarmasuk]'><button class='btn btn-outline-success'>Detail</button></a>
                                                            <a href='?page=upddaftarmasuk&upd=$e[id_daftarmasuk]'><button class='btn btn-outline-primary'>Edit</button></a>
                                                            <a href='?page=deldaftarmasuk&del=$e[id_daftarmasuk]' onClick='return confirmDelete()'><button class='btn btn-outline-danger' >Hapus</button></a>
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