<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>Donasi Barang</span>
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
        if (confirm("Hapus Data Donasi ?")) {
            return true;
        } else {
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
                        Donasi Barang Panti Asuhan
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA DONASI BARANG PANTI ASUHAN</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Donasi Barang Panti Asuhan Keluarga Yatim Muhammadiyah Surakarta</p>
                                </div>
                                <div class="form-group" align='center'>
                                    <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="button">Tambah Data Donasi</button>
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
                                                            Tambah Data Donasi
                                                        </h4>
                                                        <div class="onboarding-text">
                                                            Data Donatur Panti Asuhan PAKYM Surakarta
                                                        </div>
                                                        <?php
                                                        $run   = mysqli_query($conn, "SELECT * FROM donasi_barang");
                                                        $cetak = mysqli_fetch_array($run);
                                                        ?>
                                                        <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Nama Donatur</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Nama Donatur" type="text" name="nama" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">No. Telepon</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="No.telepon" type="text" name="telepon" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Alamat Lengkap</label>
                                                                        <textarea class="form-control" data-error="Data harus diisi" placeholder="Alamat Lengkap" required="required" rows="3" name="alamat"></textarea>
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Jenis Barang</label>
                                                                        <textarea class="form-control" data-error="Data harus diisi" placeholder="Jenis Barang" required="required" rows="3" name="jenis_barang"></textarea>
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group" align='left'>
                                                                        <input class="btn btn-primary" type="submit" name="submit" value="Tambah Data">
                                                                        <input type="hidden" name="id" value="<?php echo $edit['id'] ?>" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!-- INSERT JABATAN -->
                                                        <?php
                                                        $nama = $_POST['nama'];
                                                        $telepon = $_POST['telepon'];
                                                        $alamat = $_POST['alamat'];
                                                        $jenis_barang = $_POST['jenis_barang'];
                                                        $submit      = $_POST['submit'];

                                                        if ($submit) {
                                                            $sql = "INSERT INTO donasi_barang(nama_donatur,telepon,alamat,jenis_barang) VALUES('$nama','$telepon','$alamat','$jenis_barang')";
                                                            $run = mysqli_query($conn, $sql);
                                                            if ($run) {
                                                                ?>
                                                                <script type="text/javascript">
                                                                    alert('Data Donatur Berhasil Ditambahkan');
                                                                    document.location = '?page=donasibarang';
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
                                    <?php
                                    $run   = mysqli_query($conn, "SELECT * FROM keterangan_donasi");
                                    $cetak = mysqli_fetch_array($run);
                                    ?>
                                    <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal1" data-toggle="modal" type="button">Edit keterangan donasi</button>
                                    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="onboardingWideFormModal1" role="dialog" tabindex="-1">
                                        <div class="modal-dialog modal-lg modal-centered" role="document">
                                            <div class="modal-content text-center">
                                                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Exit</span><span class="os-icon os-icon-close"></span></button>
                                                <div class="onboarding-side-by-side">
                                                    <div class="onboarding-media">
                                                        <img alt="" src="img/logo_pakym.png" width="180px">
                                                    </div>
                                                    <div class="onboarding-content with-gradient">
                                                        <h4 class="onboarding-title">
                                                            Edit Keterangan Donasi
                                                        </h4>
                                                        <div class="onboarding-text">
                                                            Data Keterangan Donasi Barang Panti Asuhan PAKYM Surakarta
                                                        </div>
                                                        <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Isi keterangan</label>
                                                                        <textarea class="form-control" data-error="Data harus diisi" required="required" placeholder="Isi Keterangan" cols="60" id="ckeditor1" name="ket_barang" rows="10"><?php echo $cetak['ket_barang']; ?></textarea>
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group" align='left'>
                                                                        <!-- <button class="btn btn-outline-primary" type="button" name="button">Update Azas Panti Asuhan</button> -->
                                                                        <input class="btn btn-primary" type="submit" name="submit1" value="Update Data">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!-- UPDATE DONASI -->
                                                        <?php
                                                        $ket_barang = $_POST['ket_barang'];

                                                        if (isset($_POST['submit1'])) {
                                                            if ($ket_barang != "") {
                                                                $update = "UPDATE keterangan_donasi SET ket_barang='$ket_barang' WHERE id_ketdonasi = 1";
                                                                $run = mysqli_query($conn, $update);
                                                                if ($run) {
                                                                    ?>
                                                                    <script type="text/javascript">
                                                                        alert("Data Barang berhasil diupdate");
                                                                        document.location = "?page=donasibarang";
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
                                </div> <br>
                                <div class="table-responsive">
                                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                        <thead>
                                            <tr align='center'>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Donatur</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No. Telepon</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Barang</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Waktu Donasi</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Nama Donatur</th>
                                                <th>No. Telepon</th>
                                                <th>Alamat</th>
                                                <th>Jenis Barang</th>
                                                <th>Waktu Donasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $sql = "SELECT * FROM donasi_barang order by waktu_donasi DESC";
                                            $run = mysqli_query($conn, $sql);
                                            while ($c = mysqli_fetch_array($run)) {
                                                $tgl = date("d-m-Y, H:i:s", strtotime($c['waktu_donasi']));
                                                echo "
                                                    <tr align='center'>
                                                        <td>$no</td>
                                                        <td>$c[nama_donatur]</td>
                                                        <td>$c[telepon]</td>
                                                        <td>$c[alamat]</td>
                                                        <td>$c[jenis_barang]</td>             
                                                        <td>$tgl WIB</td>
                                                        <td>
                                                            <a href='?page=deldonasibarang&del=$c[id_donasibarang]' onClick='return confirmDelete()'><input type='button' class='btn btn-outline-danger' value='Hapus'></a>
                                                        </td>
                                                    </tr>";
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>