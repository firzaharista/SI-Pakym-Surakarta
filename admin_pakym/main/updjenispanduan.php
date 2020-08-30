<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="dashboard.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>JENIS PANDUAN</span>
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
                        UPDATE DATA JENIS PANDUAN
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <!-- SELECT DATA JENIS PANDUAN -->
                            <?php

                            $upd = $_GET['upd'];
                            $sql = "SELECT * FROM jenis_panduan WHERE id_jenispanduan='$upd'";
                            $run = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_array($run);
                            ?>
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>UPDATE DATA JENIS PANDUAN</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data jenis panduan website PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Jenis Panduan</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Nama Jenis Panduan" required="required" type="text" name="namajenispanduan" value="<?php echo $data['nama_jenispanduan']; ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group" align=''>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Data">
                                </div>
                            </form>

                            <!-- UPDATE DATA JENIS PANDUAN -->
                            <?php

                            $namajenispanduan = $_POST['namajenispanduan'];
                            $submit = $_POST['submit'];

                            if ($submit) {
                                $sql = "update jenis_panduan set nama_jenispanduan='$namajenispanduan' where id_jenispanduan='$upd' ";

                                $query = mysqli_query($conn, $sql);
                                if ($query) {
                                    ?>
                                    <script>
                                        alert("Data Jenis Panduan Berhasil Diubah");
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