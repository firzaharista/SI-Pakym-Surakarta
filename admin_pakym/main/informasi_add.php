<!--------------------
START - Breadcrumbs
-------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>INFORMASI</span>
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
                        Informasi
                    </h6>
                    <?php
                    $query = mysqli_query($conn, 'select * from informasi');
                    $cetak = mysqli_fetch_row($query);
                    ?>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA INFORMASI</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data website PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Panti Asuhan</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Nama Panti" required="required" type="text" name="namapanti" value='<?php echo $cetak[1]; ?>'>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi Panti Asuhan</label>
                                    <textarea class="form-control" data-error="Data harus diisi" placeholder="Deskripsi Panti" required="required" rows="2" name="deskripsi"><?php echo $cetak[2]; ?></textarea>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Judul Website</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Judul Website" required="required" type="text" name="judulweb" value='<?php echo $cetak[3]; ?>'>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Email Panti Asuhan</label>
                                    <input class="form-control" data-error="Data email tidak valid" placeholder="Email Panti" required="required" type="email" name="email" value='<?php echo $cetak[4]; ?>'>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Nomor Telepon Panti</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Telepon" required="required" type="text" name="telepon" value='<?php echo $cetak[5]; ?>'>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat Panti Asuhan</label>
                                    <textarea class="form-control" data-error="Data harus diisi" placeholder="Alamat Panti" required="required" rows="3" name="alamat"><?php echo $cetak[6]; ?></textarea>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Logo Panti Asuhan</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="" required="required" type="file" name="filelogo" value='<?php echo $cetak[7]; ?>'>
                                    <div class="help-block form-text text-muted form-control-feedback">
                                        Logo untuk Website
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Favicon Panti Asuhan</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="" required="required" type="file" name="filefavicon" value='<?php echo $cetak[8]; ?>'>
                                    <div class="help-block form-text text-muted form-control-feedback">
                                        Favicon untuk Website
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Link Facebook</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Link Facebook" required="required" type="text" name="linkfb" value='<?php echo $cetak[9]; ?>'>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Footer</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Footer" required="required" type="text" name="footer" value='<?php echo $cetak[10]; ?>'>
                                    <div class="help-block form-text text-muted form-control-feedback">
                                        Footer untuk Website
                                    </div>
                                </div>
                                <div class="form-group" align='center'>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Informasi Panti">
                                </div>
                            </form>
                            <?php
                            // $targetlama = "img/logo/" . basename($cetak[7]);
                            // $targetlama2 = "img/logo/" . basename($cetak[8]);
                            $target = "img/logo/".basename($_FILES['filelogo']['name']);
                            $target2 = "img/logo/".basename($_FILES['filefavicon']['name']);

                            $namapanti = $_POST['namapanti'];
                            $deskripsi = $_POST['deskripsi'];
                            $judulweb  = $_POST['judulweb'];
                            $email     = $_POST['email'];
                            $telp      = $_POST['telepon'];
                            $alamat    = $_POST['alamat'];
                            $filelogo = $_FILES['filelogo']['name'];
                            $filefavicon = $_FILES['filefavicon']['name'];
                            $linkfb    = $_POST['linkfb'];
                            $footer    = $_POST['footer'];

                            $sql = "INSERT INTO informasi(namapanti,deskripsi,judulweb,email,telepon,alamat,logo,favicon,fb,footer)
                                    VALUES('$namapanti','$deskripsi','$judulweb','$email','$telp','$alamat','$filelogo','$filefavicon','$linkfb','$footer')";

                            if (isset($_POST['submit'])) {
                                if (move_uploaded_file($_FILES['filelogo']['tmp_name'], $target) and move_uploaded_file($_FILES['filefavicon']['tmp_name'], $target2)) {
                                    mysqli_query($conn, $sql);
                                    ?>
                                    <script type="text/javascript">
                                        alert('Data Berhasil Ditambahkan');
                                        document.location = '?page=informasi.php';
                                    </script>
                                    <?php

                                } else {
                                    ?>
                                    <script type="text/javascript">
                                        alert('Data salah, ulangi lagi');
                                        document.location = '?page=informasi.php';
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