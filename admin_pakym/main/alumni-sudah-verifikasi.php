<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>ALUMNI PANTI ASUHAN</span>
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
        if (confirm("Hapus Data Alumni ?")) {
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
                        Alumni PAKYM Surakarta
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA ALUMNI PANTI ASUHAN</u>
                                    <p>SUDAH DIVERIFIKASI</p>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Alumni Panti Asuhan PAKYM Surakarta</p>
                                </div>

                                <div class="form-group" align='center'>
                                    <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="button">Tambah Data Alumni</button>
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
                                                            Tambah Data Alumni
                                                        </h4>
                                                        <div class="onboarding-text">
                                                            Alumni Panti Asuhan PAKYM Surakarta
                                                        </div>

                                                        <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Nama Alumni</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Nama Lengkap" name="nama_alumni" type="text" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Email</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Email" name="email" type="text" value="">
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
                                                                        <label for="">Tahun Masuk</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Tahun Masuk" name="tahun_masuk" type="text" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Tahun Keluar</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Tahun Keluar" name="tahun_keluar" type="text" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Pekerjaan Sekarang</label></label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Pekerjaan Sekarang" name="pekerjaan" type="text" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Pesan dan Kesan</label>
                                                                        <textarea class="form-control" data-error="Data harus diisi" placeholder="Pesan dan Kesan" required="required" rows="3" name="pesankesan"></textarea>
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
                                                        $se = "select max(id_alumni) 'max' from alumni";
                                                        $qs  = mysqli_query($conn, $se);
                                                        $rc = mysqli_fetch_array($qs);
                                                        $id_alumni    = $rc['max'];
                                                        $id_alumni    = $id_alumni + 1;
                                                        $id_alumni_en = md5(md5('smp') . $id_alumni);

                                                        $nama_alumni   = trim(mysqli_real_escape_string($conn, $_POST['nama_alumni']));
                                                        $email         = trim(mysqli_real_escape_string($conn, $_POST['email']));
                                                        $tempat_lahir  = trim(mysqli_real_escape_string($conn, $_POST['tempat_lahir']));
                                                        $tanggal_lahir = trim(mysqli_real_escape_string($conn, $_POST['tanggal_lahir']));
                                                        $telp          = trim(mysqli_real_escape_string($conn, $_POST['telepon']));
                                                        $alamat        = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
                                                        $tahun_masuk   = trim(mysqli_real_escape_string($conn, $_POST['tahun_masuk']));
                                                        $tahun_keluar  = trim(mysqli_real_escape_string($conn, $_POST['tahun_keluar']));
                                                        $pekerjaan     = trim(mysqli_real_escape_string($conn, $_POST['pekerjaan']));
                                                        $pesankesan    = trim(mysqli_real_escape_string($conn, $_POST['pesankesan']));
                                                        $submit        = $_POST['submit'];

                                                        if ($submit) {
                                                            $sql = "insert into alumni(id_alumni,id_alumni_en,nama,email,tempat_lahir,tanggal_lahir,telepon,alamat,tahun_masuk,tahun_keluar,pekerjaan,pesan_kesan,status_alumni) 
                                                            values('$id_alumni','$id_alumni_en','$nama_alumni','$email','$tempat_lahir','$tanggal_lahir','$telp','$alamat','$tahun_masuk','$tahun_keluar','$pekerjaan','$pesankesan','Sudah Diverifikasi')";
                                                            $run = mysqli_query($conn, $sql);
                                                            if ($run) {
                                                                ?>
                                                                <script type="text/javascript">
                                                                    alert('Data Alumni Berhasil Ditambahkan');
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
                                </div>
                                <div class="form-group" align='center'>
                                    <a href="?page=alumni-belum-diverifikasi"><input class="btn btn-primary" type="submit" name="alumni_belum_verifikasi" value="Alumni Belum Diverifikasi"></a>
                                </div>
                                <div class="table-responsive">
                                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                        <thead>
                                            <tr align="center">
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Alumni</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tahun Masuk</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tahun Keluar</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Nama Alumni</th>
                                                <th>Tahun Masuk</th>
                                                <th>Tahun Keluar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php

                                            $no = 1;
                                            $sql = "SELECT * FROM alumni WHERE status_alumni ='Sudah Diverifikasi' order by waktu_alumni DESC";
                                            $run = mysqli_query($conn, $sql);
                                            while ($e = mysqli_fetch_array($run)) {
                                                echo "
                                                    <tr align='center'>
                                                        <td>$no</td>
                                                        <td>$e[nama]</td>
                                                        <td>$e[tahun_masuk]</td>
                                                        <td>$e[tahun_keluar]</td>
                                                        <td>
                                                            <a href='?page=detailalumni-sudah-verifikasi&detail=$e[id_alumni_en]'><button class='btn btn-outline-success'>Detail</button></a>
                                                            <a href='?page=updalumni-sudah-verifikasi&upd=$e[id_alumni_en]'><button class='btn btn-outline-primary'>Edit</button></a>
                                                            <a href='?page=delalumni-sudah-verifikasi&del=$e[id_alumni_en]' onClick='return confirmDelete()'><button class='btn btn-outline-danger' >Hapus</button></a>
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