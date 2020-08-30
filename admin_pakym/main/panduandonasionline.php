<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>PANDUAN DONASI ONLINE</span>
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
                        Panduan Donasi Online Panti Asuhan
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">

                            <?php
                                // $upd = $_GET['upd'];
                                $run   = mysqli_query($conn, "SELECT * FROM panduan_donasi");
                                $cetak = mysqli_fetch_array($run) ;
                            ?>

                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF'];?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA PANDUAN DONASI ONLINE</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data panduan donasi website PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Isi Panduan Donasi Online</label>
                                    <textarea cols="80" id="ckeditor1" data-error="Data harus diisi" required="required" name="panduandonasionline" rows="10"> <?php echo $cetak['donasionline'];?> </textarea>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group" align='left'>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Panduan Donasi Online">
                                </div>
                            </form>

                            <!-- UPDATE SEJARAH -->
                            <?php
                            $online = $_POST['panduandonasionline'];

                            if (isset($_POST['submit'])) {
                                if ($online != "") {
                                    $update = "UPDATE panduan_donasi SET donasionline='$online' WHERE id_panduandonasi = 1";
                                    $run = mysqli_query($conn, $update);
                                    if ($run) {
                                        ?>
                                        <script type="text/javascript">
                                            alert("Data panduan donasi online berhasil diubah");
                                            document.location = "?page=panduandonasionline";
                                        </script>
                                        <?php
                                    }   
                            } else {
                                ?>
                                    <script type="text/javascript">
                                        alert("Data Panduan Donasi Online Harus Diisi");
                                        document.location = "?page=panduandonasionline";
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