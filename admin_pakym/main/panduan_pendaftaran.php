<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>PANDUAN PENDAFTARAN</span>
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
        if (confirm("Hapus Data Panduan Pendaftaran ?")) {
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
                        Panduan Pendaftaran
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>PANDUAN PENDAFTARAN</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Panduan Pendaftaran Panti Asuhan PAKYM Surakarta</p>
                                </div>
                                <div class="form-group" align='center'>
                                    <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="button">Tambah Data</button>
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
                                                            Tambah Data
                                                        </h4>
                                                        <div class="onboarding-text">
                                                            Panduan Pendaftaran Panti Asuhan PAKYM Surakarta
                                                        </div>
                                                        <form action="<?php $_SERVER['PHP_SELF']; ?>">
                                                            <div class="row">
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Judul Pendaftaran</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Judul Pendaftaran" type="text" name="judul" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group" align='left'>
                                                                        <label for="">keterangan Pendaftaran</label>
                                                                        <textarea class="form-control" data-error="Data harus diisi" required="required" cols="60" id="ckeditor1" name="keterangan" rows="10"></textarea>
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
                                                        $judul = $_POST['judul'];
                                                        $keterangan = $_POST['keterangan'];

                                                        if (isset($_POST['submit'])) {
                                                            $run = mysqli_query($conn, "INSERT INTO panduan_pendaftaran(judul,keterangan) VALUES('$judul','$keterangan')");
                                                            if ($run) {
                                                                ?>
                                                                <script type="text/javascript">
                                                                    alert("Data Pendaftaran telah ditambahkan");
                                                                    document.location = "?page=panduan_pendaftaran";
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
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Judul Pendaftaran</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keterangan Pendaftaran</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Judul Pendaftaran</th>
                                                <th>Keterangan Pendaftaran</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $sql = "SELECT * FROM panduan_pendaftaran order by id_panduanpendaftaran DESC";
                                            $run = mysqli_query($conn, $sql);
                                            while ($e = mysqli_fetch_array($run)) {
                                                echo "
                                                    <tr align='center'>
                                                        <td>$no</td>
                                                        <td>$e[judul]</td>
                                                        <td>$e[keterangan]</td>
                                                        <td>
                                                            <a href='?page=updpanduanpendaftaran&upd=$e[id_panduanpendaftaran]'><button class='btn btn-outline-primary'>Edit</button></a>
                                                            <a href='?page=delpanduanpendaftaran&del=$e[id_panduanpendaftaran]' onClick='return confirmDelete()'><button class='btn btn-outline-danger' >Hapus</button></a>
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