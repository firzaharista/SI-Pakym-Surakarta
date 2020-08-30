<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>TAMBAH PANDUAN DONASI</span>
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
                        TAMBAH DATA PANDUAN DONASI
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>UPDATE DATA JABATAN</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data jabatan website PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Panduan Donasi</label>
                                    <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="jenispanduan">
                                        <?php
                                        echo "<option>-- Pilihan Jenis Donasi --</option>";
                                        $query = mysqli_query($conn, "SELECT * FROM jenis_panduan");
                                        while ($d = mysqli_fetch_array($query)) {
                                            echo "<option value='$d[id_jenispanduan]'> $d[nama_jenispanduan] </option>";
                                        }
                                        ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Isi Panduan Donasi</label>
                                    <textarea class="form-control" data-error="Data harus diisi" required="required" cols="60" id="ckeditor1" name="isipanduan" rows="10"></textarea>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group" align=''>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Data">
                                </div>
                            </form>
                            <?php
                            $jenis = $_POST['jenispanduan'];
                            $isi = $_POST['isipanduan'];

                            if (isset($_POST['submit'])) {
                                $run = mysqli_query($conn, "INSERT INTO panduan_donasi(jenis_panduan,isi_panduan) VALUES('$jenis','$isi')");
                                if ($run) {
                                    ?>
                            <script type="text/javascript">
                                alert("Data Panduan Donasi telah ditambahkan");
                                document.location = "?page=panduandonasi";
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