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

                            <?php
                            $run   = mysqli_query($conn, "SELECT * FROM panduan_pendaftaran");
                            $cetak = mysqli_fetch_array($run);
                            ?>
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA PANDUAN PENDAFTARAN</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data Panduan Pendaftaran PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Panduan Pendaftaran</label>
                                    <textarea cols="80" id="ckeditor1" data-error="Data harus diisi" required="required" name="panduan_pendaftaran" rows="10"> <?php echo $cetak['isi_panduanpendaftaran']; ?> </textarea>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group" align='center'>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Panduan Pendaftaran">
                                </div>
                            </form>

                            <?php
                            $panduan = $_POST['panduan_pendaftaran'];

                            if (isset($_POST['submit'])) {
                                if ($panduan != "") {
                                    $update = "UPDATE panduan_pendaftaran SET isi_panduanpendaftaran='$panduan' WHERE id_panduanpendaftaran = 1";
                                    $run = mysqli_query($conn, $update);
                                    if ($run) {
                                        ?>
                            <script type="text/javascript">
                                alert("Data Panduan Pendaftaran berhasil diupdate");
                                document.location = "?page=panduan_pendaftaran";
                            </script>
                            <?php

                        }
                    } else {
                        ?>
                            <script type="text/javascript">
                                alert("Data Panduan Pendaftaran Harus Diisi");
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
</div> 