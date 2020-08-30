<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>SYARAT</span>
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
                        Syarat-syarat Diterima Panti Asuhan
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">

                            <?php
                                // $upd = $_GET['upd'];
                                $run   = mysqli_query($conn, "SELECT * FROM ketentuan");
                                $cetak = mysqli_fetch_array($run) ;
                            ?>

                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF'];?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA SYARAT DITERIMA</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data website PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Data Syarat Diterima Panti Asuhan</label>
                                    <textarea cols="80" id="ckeditor1" data-error="Data harus diisi" required="required" name="syarat" rows="10"> <?php echo $cetak['syarat_diterima'];?> </textarea>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group" align='center'>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Syarat-syarat Diterima Panti">
                                </div>
                            </form>

                            <!-- UPDATE SYARAT -->
                            <?php
                            $syarat = $_POST['syarat'];

                            if (isset($_POST['submit'])) {
                                if ($syarat != "") {
                                    $update = "UPDATE ketentuan SET syarat_diterima='$syarat' WHERE id_ketentuan = 1";
                                    $run = mysqli_query($conn, $update);
                                    if ($run) {
                                        ?>
                                        <script type="text/javascript">
                                            alert("Data Syarat Diterima berhasil diupdate");
                                            document.location = "?page=syarat";
                                        </script>
                                        <?php
                                    }   
                            } else {
                                ?>
                                    <script type="text/javascript">
                                        alert("Data Syarat Diterima Harus Diisi");
                                        document.location = "?page=syarat";
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