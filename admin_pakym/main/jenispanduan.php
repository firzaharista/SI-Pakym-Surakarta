<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>Jenis Panduan</span>
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
        if (confirm("Hapus Data Jenis Panduan ?")) {
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
                        Jenis Panduan Panti Asuhan
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA JENIS PANDUAN PANTI ASUHAN</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Jenis Panduan Panti Asuhan PAKYM Surakarta</p>
                                </div>
                                <div class="form-group" align='center'>
                                    <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="button">Tambah Data Jenis Panduan</button>
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
                                                            Tambah Data Jenis Panduan
                                                        </h4>
                                                        <div class="onboarding-text">
                                                            Jenis Panduan Panti Asuhan PAKYM Surakarta
                                                        </div>
                                                        <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Nama Jenis Panduan</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Nama Jenis Panduan" type="text" name="namajenispanduan" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group" align='left'>
                                                                        <!-- <button class="btn btn-outline-primary" type="button" name="button">Update Azas Panti Asuhan</button> -->
                                                                        <input class="btn btn-primary" type="submit" name="submit" value="Tambah Data">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!-- INSERT JENIS -->
                                                        <?php
                                                        $namajenispanduan = $_POST['namajenispanduan'];
                                                        $submit      = $_POST['submit'];

                                                        if ($submit) {
                                                            $sql = "INSERT INTO jenis_panduan(nama_jenispanduan) VALUES('$namajenispanduan')";
                                                            $run = mysqli_query($conn, $sql);
                                                            if ($run) {
                                                                ?>
                                                        <script type="text/javascript">
                                                            alert('Data Jenis Panduan Berhasil Ditambahkan');
                                                            document.location = '?page=jenispanduan';
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
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Jenis Panduan</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Nama Jenis Panduan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <!-- VIEW DATA JENIS PANDUAN -->
                                            <?php
                                            $no  = 1;
                                            $sql = "SELECT * FROM jenis_panduan order by id_jenispanduan DESC";
                                            $run = mysqli_query($conn, $sql);
                                            while ($data = mysqli_fetch_array($run)) {
                                                echo  "
                                                    <tr align='center'>
                                                        <td>$no</td>
                                                        <td>$data[nama_jenispanduan]</td>
                                                        <td>
                                                            <a href='?page=updjenispanduan&upd=$data[id_jenispanduan]'><button class='btn btn-outline-primary'>Edit</button></a>
                                                            <a href='?page=deljenispanduan&del=$data[id_jenispanduan]' onClick='return confirmDelete()'><button class='btn btn-outline-danger' >Hapus</button></a>
                                                        </td>

                                                    </tr>";
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div> 