<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>UPDATE BERITA</span>
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
                        Update Berita
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <!-- SELECT DATA KATEGORI BERITA -->
                            <?php

                            $upd = $_GET['upd'];
                            $sql = "SELECT * FROM berita WHERE id_berita_en ='$upd'";
                            $run = mysqli_query($conn, $sql);
                            $d = mysqli_fetch_array($run);
                            ?>
                            <form id="formValidate" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>UPDATE BERITA</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data berita website PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Judul Berita</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Judul Berita" required="required" type="text" name="judulberita" value="<?php echo $d['judul_berita']; ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Berita</label> <br>
                                    <img src="../../images/berita/<?php echo $d['foto_berita']; ?>" width='120'>
                                    <?php echo $d['foto_berita']; ?>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="" required="required" type="file" name="fotoberita">
                                    <div class="help-block form-text text-muted form-control-feedback">
                                        Foto untuk berita website
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Ringkasan Berita</label>
                                    <textarea class="form-control" data-error="Data harus diisi" placeholder="Ringkasan Berita" required="required" rows="5" name="ringkasanberita"><?php echo $d['ringkasan_berita']; ?></textarea>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Isi Berita</label>
                                    <textarea class="form-control" data-error="Data harus diisi" required="required" cols="60" id="ckeditor1" name="isiberita" rows="10"><?php echo $d['isi_berita']; ?></textarea>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for=""> Kategori Berita</label>
                                    <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="kategoriberita">
                                        <?php
                                        echo "<option>-- Pilihan Kategori --</option>";
                                        $query = mysqli_query($conn, "SELECT * FROM kategori_berita");
                                        while ($hasil = mysqli_fetch_array($query)) {
                                            if ($hasil['id_kategoriberita_en'] == $d['id_kategoriberita_en']) {
                                                echo "<option value='$hasil[id_kategoriberita_en]' selected='selected'>$hasil[nama_kategoriberita]</option>";
                                            } else {
                                                echo "<option value='$hasil[id_kategoriberita_en]'>$hasil[nama_kategoriberita]</option>";
                                            }
                                        }
                                        ?>

                                    </select>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>

                                <div class="form-group" align='center'>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Berita">
                                </div>
                            </form>
                            <!-- UPDATE DATA BERITA -->
                            <?php
                            $target = "../../images/berita/" . basename($_FILES['fotoberita']['name']);

                            $judul = $_POST['judulberita'];
                            $foto = $_FILES['fotoberita']['name'];
                            $ringkasan = $_POST['ringkasanberita'];
                            $isi = $_POST['isiberita'];
                            $kategori = $_POST['kategoriberita'];
                            $penulis = $_SESSION['nama'];
                            $submit      = $_POST['submit'];

                            // print $penulis;

                            $sql = "update berita set judul_berita='$judul',foto_berita='$foto',waktu_berita=NOW(),ringkasan_berita='$ringkasan',isi_berita='$isi',penulis='$penulis',id_kategoriberita_en='$kategori' where id_berita_en='$upd' ";

                            if (isset($_POST["submit"])) {
                                if (move_uploaded_file($_FILES["fotoberita"]["tmp_name"], $target)) {
                                    mysqli_query($conn, $sql);
                                    ?>
                                    <script type="text/javascript">
                                        alert(' Data Berita Berhasil Diubah');
                                        document.location = '?page=berita';
                                    </script>
                                    <?php

                                } else {
                                    ?>
                                    <script type="text/javascript">
                                        alert('Data salah, ulangi lagi');
                                        document.location = '?page=updberita';
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