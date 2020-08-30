<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>TATA TERTIB</span>
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
                        Tata Tertib Panti Asuhan
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <?php
                            $run   = mysqli_query($conn, "SELECT * FROM ketentuan");
                            $cetak = mysqli_fetch_array($run);
                            ?>
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA TATA TERTIB</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data website PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">TATA TERTIB</label>
                                    <textarea class="form-control" data-error="Data harus diisi" required="required" cols="60" id="ckeditor1" name="tatatertib" rows="10"> <?php echo $cetak['tata_tertib']; ?> </textarea>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group" align='center'>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Visi dan Misi">
                                </div>
                            </form>
                            <?php
                            $tatatertib = $_POST['tatatertib'];

                            if (isset($_POST['submit'])) {
                                if ($tatatertib != "") {
                                    $update = "UPDATE ketentuan SET tata_tertib='$tatatertib' WHERE id_ketentuan = 1";
                                    $run = mysqli_query($conn, $update);
                                    if ($run) {
                                        ?>
                            <script type="text/javascript">
                                alert("Data tata tertib berhasil diupdate");
                                document.location = "?page=tatatertib";
                            </script>
                            <?php

                        }
                    } else {
                        ?>
                            <script type="text/javascript">
                                alert("Data Tata Tertib Harus Diisi");
                                document.location = "?page=tatatertib";
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