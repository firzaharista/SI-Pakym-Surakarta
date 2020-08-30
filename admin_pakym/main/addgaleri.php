<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>TAMBAH GALERI</span>
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
                        Tambah Galeri
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>TAMBAH GALERI</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data galeri website PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Judul Foto</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Judul Foto" required="required" type="text" name="judulfoto">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Galeri</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="" required="required" type="file" name="fotogaleri">
                                    <div class="help-block form-text text-muted form-control-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for=""> Kategori Galeri</label>
                                    <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="kategorigaleri">
                                        <?php
                                        echo "<option>-- Pilihan Kategori --</option>";
                                        $query = mysqli_query($conn, "SELECT * FROM kategori_galeri order by id_kategorigaleri DESC");
                                        while ($d = mysqli_fetch_array($query)) {
                                            echo "<option value='$d[id_kategorigaleri_en]'> $d[nama_kategorigaleri] </option>";
                                        }

                                        ?>

                                    </select>
                                </div>
                                <div class="form-group" align='left'>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Tambah Galeri">
                                </div>
                            </form>
                            <?php
                            // $target = "../../images/galeri/";
                            $target = "../../images/galeri/" . basename($_FILES['fotogaleri']['name']);
                            $s = "select max(id_galeri) 'max' from galeri";
                            $qs = mysqli_query($conn, $s);
                            $rv = mysqli_fetch_array($qs);
                            $id_galeri = $rv['max'];
                            $id_galeri = $id_galeri + 1;
                            $id_galeri_en = md5(md5('smp') . $id_galeri);

                            $judul       = $_POST['judulfoto'];

                            $kategori    = $_POST['kategorigaleri'];
                            $submit      = $_POST['submit'];
                            $nama_foto   = $_FILES['fotogaleri']['name'];
                            // $nama_foto_en = md5(md5('smp') . $nama_foto);
                            // $nama_sementara = $_FILES['fotogaleri']['tmp_name'];
                            // $tipe        = $_FILES['fotogaleri']['type'];
                            // $size        = $_FILES['fotogaleri']['size'];

                            // print $penulis;

                            if ($submit) {
                                if (move_uploaded_file($_FILES['fotogaleri']['tmp_name'], $target)) {
                                // if ($nama_foto != "") {
                                    // $uploadfoto = '../../images/galeri/';
                                    // $url_upload = '../../images/galeri/';
                                    // $url_foto     = $uploadfoto . "foto_" . $id_galeri_en . $nama_foto;
                                    // $url_foto_web = $url_upload . "foto_" . $id_galeri_en . $nama_foto;
                                    // move_uploaded_file($nama_sementara, $target . $nama_foto);

                                    mysqli_query($conn, "INSERT INTO galeri (id_galeri,id_galeri_en,judul, tanggal, foto_galeri, id_kategorigaleri_en) VALUES('$id_galeri','$id_galeri_en','$judul',NOW(), '$nama_foto', '$kategori')");
                                    ?>
                                    <script type="text/javascript">
                                        alert('Data Galeri Berhasil Ditambahkan');
                                        document.location = '?page=galeri';
                                    </script>
                                <?php
                            } else {
                                echo 'gagal';
                            }
                        }
                        // print_r($sql);
                        ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>