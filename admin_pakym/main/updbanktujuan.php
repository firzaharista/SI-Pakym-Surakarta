<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>BANK TUJUAN</span>
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
                        UPDATE DATA BANK TUJUAN
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <!-- SELECT DATA JABATAN -->
                            <?php

                            $upd = $_GET['upd'];
                            $sql = "SELECT * FROM bank_tujuan WHERE id_banktujuan='$upd'";
                            $run = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_array($run);
                            ?>
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>UPDATE DATA BANK TUJUAN</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data bank website PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Bank</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Nama Bank" required="required" type="text" name="namabank" value="<?php echo $data['nama_bank']; ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">No. Rekening</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="No. Rekening" required="required" type="text" name="norek" value="<?php echo $data['no_rek']; ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Atas Nama Rekening</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Atas Nama Rekening" required="required" type="text" name="atasnama" value="<?php echo $data['atas_nama']; ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group" align=''>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Data">
                                </div>
                            </form>

                            <!-- UPDATE DATA BANK -->
                            <?php

                            $namabank    = trim(mysqli_real_escape_string($conn, $_POST['namabank']));
                            $norek       = trim(mysqli_real_escape_string($conn, $_POST['norek']));
                            $atasnama    = trim(mysqli_real_escape_string($conn, $_POST['atasnama']));
                            $submit = $_POST['submit'];

                            if ($submit) {
                                $sql = "update bank_tujuan set nama_bank='$namabank', no_rek='$norek' , atas_nama='$atasnama' where id_banktujuan='$upd' ";
                                $query = mysqli_query($conn, $sql);
                                if ($query) {
                                    ?>
                                    <script>
                                        alert("Data Bank Berhasil Diubah");
                                        document.location = '?page=banktujuan';
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