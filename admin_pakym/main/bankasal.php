<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>Bank Asal</span>
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
        if (confirm("Hapus Data Bank ?")) {
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
                        Bank Asal
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA BANK ASAL</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai bank asal pengirim</p>
                                </div>
                                <div class="form-group" align='center'>
                                    <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="button">Tambah Data Bank</button>
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
                                                            Tambah Data Bank
                                                        </h4>
                                                        <div class="onboarding-text">
                                                            Bank Asal Pengirim
                                                        </div>
                                                        <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Nama Bank</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Nama Bank" type="text" name="namabank" value="">
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
                                                        <!-- INSERT BANK -->
                                                        <?php
                                                        $namabank = $_POST['namabank'];
                                                        // $norek    = $_POST['norek'];
                                                        $submit   = $_POST['submit'];

                                                        if ($submit) {
                                                            echo $sql = "INSERT INTO bank_asal(nama_bankasal) VALUES('$namabank')";
                                                            $run = mysqli_query($conn, $sql);
                                                            
                                                            if ($run) {
                                                                ?>
                                                        <script type="text/javascript">
                                                            alert('Data Bank Berhasil Ditambahkan');
                                                            document.location = '?page=bankasal';
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
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Bank</th>
                                                <!-- <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No. Rekening</th> -->
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Nama Bank</th>
                                                <!-- <th>No. Rekening</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no  = 1;
                                            $sql = "SELECT * FROM bank_asal order by id_bankasal DESC";
                                            $run = mysqli_query($conn, $sql);
                                            while ($data = mysqli_fetch_array($run)) {
                                                echo  "
                                                    <tr align='center'>
                                                        <td>$no</td>
                                                        <td>$data[nama_bankasal]</td>
                                                        <td>
                                                            <a href='?page=updbankasal&upd=$data[id_bankasal]'><button class='btn btn-outline-primary'>Edit</button></a>
											                <a href='?page=delbankasal&del=$data[id_bankasal]' onClick='return confirmDelete()'><button class='btn btn-outline-danger' >Hapus</button></a>
                                                        </td>

                                                    </tr>";
                                                $no++;
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div> 