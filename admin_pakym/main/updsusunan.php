<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>Susunan Personalia</span>
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
                        UPDATE DATA SUSUNAN PERSONALIA
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <!-- SELECT DATA SUSUNAN -->
                            <?php

                            $upd = $_GET['upd'];
                            $sql = "SELECT * FROM susunan WHERE id_susunan='$upd'";
                            $run = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_array($run);
                            ?>
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>UPDATE DATA SUSUNAN PERSONALIA</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data susunan personalia website PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Nama Jabatan" required="required" type="text" name="nama" value="<?php echo $data['nama']; ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">No. Telepon</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Telepon" required="required" type="text" name="telepon" value="<?php echo $data['telepon']; ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Jabatan</label></label>
                                    <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="jabatan">
                                        <?php
                                        echo "<option>-- Pilihan Jabatan --</option>";
                                        $query = mysqli_query($conn, "SELECT * FROM jabatan");
                                        while ($hasil = mysqli_fetch_array($query)) {
                                            if ($hasil[id_jabatan] == $data[id_jabatan]) {
                                                echo "<option value='$hasil[id_jabatan]' selected='selected'>$hasil[namajabatan]</option>";
                                            } else {
                                                echo "<option value='$hasil[id_jabatan]'>$hasil[namajabatan]</option>";
                                            }
                                        }
                                        ?>

                                    </select>
                                </div>

                                <div class="form-group" align=''>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Data">
                                </div>
                            </form>

                            <!-- UPDATE DATA SUSUNAN -->
                            <?php
                            
                            $nama        = $_POST['nama'];
                            $telepon     = $_POST['telepon'];
                            $jabatan = $_POST['jabatan'];
                            $submit      = $_POST['submit'];

                            if ($submit) {
                                $sql = "update susunan set nama='$nama',telepon='$telepon',id_jabatan='$jabatan' where id_susunan='$upd' ";
                                $query = mysqli_query($conn, $sql);
                                if ($query) {
                                    ?>
                                    <script>
                                        alert("Data Susunan Personalia Berhasil Diubah");
                                        document.location = '?page=susunan';
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