<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>PROGRAM KESEHATAN</span>
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
                        Program Kesehatan
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">

                            <?php
                            $run   = mysqli_query($conn, "SELECT * FROM program");
                            $cetak = mysqli_fetch_array($run);
                            ?>
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA PROGRAM KESEHATAN</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data Program Kesehatan PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Program Kesehatan</label>
                                    <textarea cols="80" id="ckeditor1" data-error="Data harus diisi" required="required" name="progkesehatan" rows="10"> <?php echo $cetak['progkesehatan']; ?> </textarea>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group" align='center'>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Program Kesehatan">
                                </div>
                            </form>

                            <?php
                            $progkesehatan = $_POST['progkesehatan'];

                            if (isset($_POST['submit'])) {
                                if ($progkesehatan != "") {
                                    $update = "UPDATE program SET progkesehatan='$progkesehatan' WHERE id_program = 1";
                                    $run = mysqli_query($conn, $update);
                                    if ($run) {
                                        ?>
                            <script type="text/javascript">
                                alert("Data Program Kesehatan berhasil diupdate");
                                document.location = "?page=progkesehatan";
                            </script>
                            <?php

                        }
                    } else {
                        ?>
                            <script type="text/javascript">
                                alert("Data Program Kesehatan Harus Diisi");
                                document.location = "?page=progkesehatan";
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