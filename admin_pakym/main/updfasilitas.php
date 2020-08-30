<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>FASILITAS</span>
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
                        UPDATE DATA FASILITAS
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <!-- SELECT DATA JABATAN -->
                            <?php

                            $upd = $_GET['upd'];
                            $sql = "SELECT * FROM fasilitas WHERE id_fasilitas='$upd'";
                            $run = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_array($run);
                            ?>
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>UPDATE DATA FASILITAS</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data fasilitas website PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Fasilitas</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Nama Fasilitas" required="required" type="text" name="namafasilitas" value="<?php echo $data['namafasilitas']; ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group" align=''>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Data">
                                </div>
                            </form>

                            <!-- UPDATE DATA FASILITAS -->
                            <?php

                            $namafasilitas = $_POST['namafasilitas'];
                            $submit = $_POST['submit'];

                            if ($submit) {
                                $sql = "update fasilitas set namafasilitas='$namafasilitas' where id_fasilitas='$upd' ";

                                $query = mysqli_query($conn, $sql);
                                if ($query) {
                                    ?>
                            <script>
                                alert("Data Jabatan Berhasil Diubah");
                                document.location = '?page=fasilitas';
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