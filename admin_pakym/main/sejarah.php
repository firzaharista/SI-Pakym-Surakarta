<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>SEJARAH</span>
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
                        Sejarah Panti Asuhan
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">

                            <?php
                                // $upd = $_GET['upd'];
                                $run   = mysqli_query($conn, "SELECT * FROM tentangkami");
                                $cetak = mysqli_fetch_array($run) ;
                            ?>

                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF'];?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA SEJARAH</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data website PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Sejarah Panti Asuhan</label>
                                    <textarea cols="80" id="ckeditor1" data-error="Data harus diisi" required="required" name="sejarah" rows="10"> <?php echo $cetak['sejarah'];?> </textarea>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group" align='center'>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Sejarah Panti">
                                </div>
                            </form>

                            <!-- UPDATE SEJARAH -->
                            <?php
                            $sejarah = $_POST['sejarah'];

                            if (isset($_POST['submit'])) {
                                if ($sejarah != "") {
                                    $update = "UPDATE tentangkami SET sejarah='$sejarah' WHERE id_tentangkami = 1";
                                    $run = mysqli_query($conn, $update);
                                    if ($run) {
                                        ?>
                                        <script type="text/javascript">
                                            alert("Data Sejarah berhasil diupdate");
                                            document.location = "?page=sejarah";
                                        </script>
                                        <?php
                                    }   
                            } else {
                                ?>
                                    <script type="text/javascript">
                                        alert("Data Sejarah Harus Diisi");
                                        document.location = "?page=sejarah";
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