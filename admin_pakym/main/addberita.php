<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>TAMBAH BERITA</span>
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
                        Tambah Berita
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>TAMBAH BERITA</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data berita website PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Judul Berita</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Judul Berita" required="required" type="text" name="judulberita">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Berita</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="" required="required" type="file" name="fotoberita">
                                    <div class="help-block form-text text-muted form-control-feedback">
                                        Foto untuk berita website
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Ringkasan Berita</label>
                                    <textarea class="form-control" data-error="Data harus diisi" placeholder="Ringkasan Berita" required="required" rows="5" name="ringkasanberita"></textarea>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Isi Berita</label>
                                    <textarea class="form-control" data-error="Data harus diisi" required="required" placeholder="Isi Berita" cols="60" id="ckeditor1" name="isiberita" rows="10"></textarea>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for=""> Kategori Berita</label>
                                    <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="kategoriberita">
                                        <?php
                                        echo "<option>-- Pilihan Kategori --</option>";
                                        $query = mysqli_query($conn, "SELECT * FROM kategori_berita order by id_kategoriberita DESC");
                                        while ($d = mysqli_fetch_array($query)) {
                                            echo "<option value='$d[id_kategoriberita_en]'> $d[nama_kategoriberita] </option>";
                                        }
                                        ?>

                                    </select>
                                </div>

                                <div class="form-group" align='left'>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Tambah Berita">
                                </div>
                            </form>
                            <?php
                            $target = "../../images/berita/" . basename($_FILES['fotoberita']['name']);
                            $s = "select max(id_berita) 'max' from berita";
                            $qs = mysqli_query($conn, $s);
                            $rv = mysqli_fetch_array($qs);
                            $id_berita = $rv['max'];
                            $id_berita = $id_berita + 1;
                            $id_berita_en = md5(md5('smp') . $id_berita);

                            $judul = $_POST['judulberita'];
                            $foto = $_FILES['fotoberita']['name'];
                            $ringkasan = $_POST['ringkasanberita'];
                            $isi = $_POST['isiberita'];
                            $kategori = $_POST['kategoriberita'];
                            $penulis = $_SESSION['nama'];
                            // $tgl = date('d-m-Y');
                            $submit      = $_POST['submit'];
                            if ($submit) {
                                if (move_uploaded_file($_FILES['fotoberita']['tmp_name'], $target)) {
                                    $sql = "INSERT INTO berita (id_berita, id_berita_en, judul_berita, foto_berita, waktu_berita, ringkasan_berita, isi_berita, penulis, id_kategoriberita_en) VALUES ('$id_berita', '$id_berita_en', '$judul', '$foto', NOW(), '$ringkasan', '$isi', '$penulis', '$kategori')";
                                    $run = mysqli_query($conn, $sql);
                                    if ($run) {
                                        ?>
                                        <script type="text/javascript">
                                            alert('Data Berita Berhasil Ditambahkan');
                                            document.location = '?page=berita';
                                        </script>
                                    <?php

                                }
                            }
                        }

                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>