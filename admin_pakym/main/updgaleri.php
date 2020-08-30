<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>UPDATE GALERI</span>
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
                        Update Galeri
                    </h6>
                    <?php
                    $upd = $_GET['upd'];
                    $sql = "SELECT * FROM galeri WHERE id_galeri_en='$upd'";
                    $f   = mysqli_query($conn, $sql);
                    $e   = mysqli_fetch_array($f);
                    ?>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>UPDATE GALERI</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data galeri website PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Judul Foto</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Judul Foto" required="required" type="text" name="judulfoto" value="<?php echo $e['judul']; ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Galeri</label> <br>
                                    <img src="../../images/galeri/<?php echo $e['foto_galeri']; ?>" width='120'>
                                    <?php echo $e['foto_galeri']; ?>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="" required="required" type="file" name="fotogaleri">
                                    <div class="help-block form-text text-muted form-control-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for=""> Kategori Galeri</label>
                                    <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="kategorigaleri">
                                        <?php
                                        echo "<option>-- Pilihan Kategori --</option>";
                                        $query = mysqli_query($conn, "SELECT * FROM kategori_galeri");
                                        while ($hasil = mysqli_fetch_array($query)) {
                                            if ($hasil['id_kategorigaleri_en'] == $e['id_kategorigaleri_en']) {
                                                echo "<option value='$hasil[id_kategorigaleri_en]' selected='selected'>$hasil[nama_kategorigaleri]</option>";
                                            } else {
                                                echo "<option value='$hasil[id_kategorigaleri_en]'>$hasil[nama_kategorigaleri]</option>";
                                            }
                                        }
                                        ?>

                                    </select>
                                </div>
                                <div class="form-group" align='left'>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Galeri">
                                </div>
                            </form>
                            <?php
                            $target = "../../images/galeri/".basename($_FILES['fotogaleri']['name']);

                            $judul = $_POST['judulfoto'];
                            $foto = $_FILES['fotogaleri']['name'];
                            $kategori = $_POST['kategorigaleri'];
                            $submit      = $_POST['submit'];

                            // print $penulis;

                            $sql = "update galeri set judul='$judul',tanggal=NOW(),foto_galeri='$foto', id_kategorigaleri_en='$kategori' where id_galeri_en='$upd' ";

                            if (isset($_POST["submit"])) {
                                if (move_uploaded_file($_FILES["fotogaleri"]["tmp_name"], $target)) {
                                    mysqli_query($conn, $sql);
                                    ?>
                                    <script type="text/javascript">
                                        alert(' Data Galeri Berhasil Diubah');
                                        document.location = '?page=galeri';
                                    </script>
                                    <?php

                                } else {
                                    ?>
                                    <script type="text/javascript">
                                        alert('Data salah, ulangi lagi');
                                        document.location = '?page=updgaleri';
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