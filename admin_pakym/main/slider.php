<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>Slider</span>
    </li>
    <!-- <li class="breadcrumb-item">
              <span>Laptop with retina screen</span>
            </li> -->
</ul>
<!--------------------
          END - Breadcrumbs
          -------------------->

<!-- DELETE ALERT -->
<script language="JavaScript" type="text/javascript">
    function confirmDelete() {
        if (confirm("Hapus Data Slider ?")) {
            return true;
        } else {i
            return false;
        }
    }
</script>
<div class="content-panel-toggler">
    <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
</div>
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper">
                    <h6 class="element-header">
                        Slider
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA SLIDER</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Slider Panti Asuhan Keluarga Yatim Muhammadiyah Surakarta</p>
                                </div>
                                <div class="form-group" align='center'>
                                    <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="button">Tambah Data Slider</button>
                                    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="onboardingWideFormModal" role="dialog" tabindex="-1">
                                        <div class="modal-dialog modal-lg modal-centered" role="document">
                                            <div class="modal-content text-center">
                                                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Exit</span><span class="os-icon os-icon-close"></span></button>
                                                <div class="onboarding-side-by-side">
                                                    <div class="onboarding-media">
                                                        <img alt="" src="img/logo_pakym.png" width="180px">
                                                    </div>
                                                    <div class="onboarding-content with-gradient">
                                                        <h4 class="onboarding-title">
                                                            Tambah Data Slider Website
                                                        </h4>
                                                        <div class="onboarding-text">
                                                            Slider Website Panti Asuhan PAKYM Surakarta
                                                        </div>
                                                        <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Judul Foto</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Judul Slider" type="text" name="judul" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Foto</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Foto Slider" type="file" name="foto" value="">
                                                                        <div class="help-block form-text text-muted form-control-feedback">
                                                                            Foto untuk berita website
                                                                        </div>
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <label for="">Keterangan Foto</label>
                                                                    <textarea class="form-control" data-error="Data harus diisi" placeholder="Keterangan Foto" required="required" rows="2" name="ketfoto"></textarea>
                                                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group" align='left'>
                                                                        <input class="btn btn-primary" type="submit" name="submit" value="Tambah Data">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <?php
                                                        $target = "img/slider/".basename($_FILES['foto']['name']);

                                                        $judul = $_POST['judul'];
                                                        $foto  = $_FILES['foto']['name'];
                                                        $ketfoto = $_POST['ketfoto'];

                                                        if (isset($_POST['submit'])) {
                                                            if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
                                                                $c = "INSERT INTO slider(foto_slider,judul_slider,keterangan_slider) VALUES('$foto','$judul','$ketfoto')";
                                                                $query = mysqli_query($conn, $c);
                                                                if ($query) {
                                                                    ?>
                                                                    <script type="text/javascript">
                                                                        alert("Data Slider Berhasil Ditambahkan");
                                                                        document.location = "?page=slider";
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
                                </div>
                                <div class="table-responsive">
                                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                        <thead>
                                            <tr align="center">
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Judul</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Foto</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keterangan</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Waktu Upload</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Judul</th>
                                                <th>Foto</th>
                                                <th>Keterangan</th>
                                                <th>Waktu Upload</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                 
                                            $no = 1;
                                            $sql = "select * from slider order by waktu_upload DESC";
                                            $query = mysqli_query($conn, $sql);
                                            while ($data = mysqli_fetch_array($query)) {
                                                echo "
                                                    <tr align='center'>
                                                        <td>$no</td>
                                                        <td>$data[judul_slider]</td>
                                                        <td><img src='img/slider/$data[foto_slider]' width='180' height='100'></td>
                                                        <td>$data[keterangan_slider]</td>
                                                        <td>$data[waktu_upload]</td>
                                                        <td>
                                                            <a href='?page=delslider&del=$data[id_slider]' onClick='return confirmDelete()'><button class='btn btn-outline-danger' >Hapus</button></a>
                                                        </td>

                                                    </tr>";
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div> 