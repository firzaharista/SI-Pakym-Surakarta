<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>Donasi Offline</span>
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
                        Donasi Offline Panti Asuhan
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA DONASI OFFLINE PANTI ASUHAN</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Donasi Offline Panti Asuhan Keluarga Yatim Muhammadiyah Surakarta</p>
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
                                                            Data Donasi Offline Panti Asuhan PAKYM Surakarta
                                                        </div>
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
                                                                        <label for="">Telepon</label>
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
                                                                        <label class="col-sm-4 col-form-label">Jumlah Donasi</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" type="text" id="jumlah" name="jumlah" placeholder="Jumlah Donasi">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group" align='left'>
                                                                        <!-- <button class="btn btn-outline-primary" type="button" name="button">Update Azas Panti Asuhan</button> -->
                                                                        <input class="btn btn-primary" type="submit" name="submit" value="Tambah Data">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!-- INSERT JABATAN -->
                                                        <?php
                                                        $nama = $_POST['nama'];
                                                        $telepon = $_POST['telepon'];
                                                        $alamat = $_POST['alamat'];
                                                        $jumlah = $_POST['jumlah'];
                                                        $submit      = $_POST['submit'];

                                                        if ($submit) {
                                                            $sql = "INSERT INTO donasi_offline(nama,telepon,alamat,jumlah) VALUES('$nama','$telepon','$alamat','$jumlah')";
                                                            $run = mysqli_query($conn, $sql);
                                                            if ($run) {
                                                                ?>
                                                                <script type="text/javascript">
                                                                    alert('Data Donatur Berhasil Ditambahkan');
                                                                    document.location = '?page=donasioffline';
                                                                </script>
                                                            <?php

                                                        }
                                                    }

                                                    ?>
                                                        <script type="text/javascript">
                                                            var rupiah = document.getElementById("jumlah");
                                                            rupiah.addEventListener("keyup", function(e) {
                                                                // tambahkan 'Rp.' pada saat form di ketik
                                                                // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                                                                rupiah.value = formatRupiah(this.value, "Rp. ");
                                                            });

                                                            /* Fungsi formatRupiah */
                                                            function formatRupiah(angka, prefix) {
                                                                var number_string = angka.replace(/[^,\d]/g, "").toString(),
                                                                    split = number_string.split(","),
                                                                    sisa = split[0].length % 3,
                                                                    rupiah = split[0].substr(0, sisa),
                                                                    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                                                                // tambahkan titik jika yang di input sudah menjadi angka ribuan
                                                                if (ribuan) {
                                                                    separator = sisa ? "." : "";
                                                                    rupiah += separator + ribuan.join(".");
                                                                }

                                                                rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
                                                                return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
                                                            }
                                                        </script>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $run   = mysqli_query($conn, "SELECT * FROM keterangan_donasi");
                                    $cetak = mysqli_fetch_array($run);
                                    ?>
                                    <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal2" data-toggle="modal" type="button">Edit keterangan donasi</button>
                                    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="onboardingWideFormModal2" role="dialog" tabindex="-1">
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
                                                            Data Keterangan Donasi Offline Panti Asuhan PAKYM Surakarta
                                                        </div>
                                                        <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-sm-12" align="left">
                                                                    <!-- <div class="form-group">
                                                                        <label for="">Isi</label>
                                                                        <textarea cols="80" id="ckeditor1" data-error="Data harus diisi" required="required" name="ket_offline" rows="10"> <?php echo $cetak['ket_offline']; ?> </textarea>
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div> -->
                                                                    <div class="form-group">
                                                                        <label for="">Isi keterangan</label>
                                                                        <textarea class="form-control" data-error="Data harus diisi" required="required" placeholder="Isi Keterangan" cols="60" id="ckeditor1" name="ket_offline" rows="10"><?php echo $cetak['ket_offline']; ?></textarea>
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group" align='left'>
                                                                        <input class="btn btn-primary" type="submit" name="submit1" value="Update">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!-- UPDATE DONASI -->
                                                        <?php
                                                        $ket_offline = $_POST['ket_offline'];
                                                        $submit1 = $_POST['submit1'];


                                                        if (isset($_POST['submit1'])) {
                                                            if ($ket_offline != "") {
                                                                $update = "UPDATE keterangan_donasi SET ket_offline='$ket_offline' WHERE id_ketdonasi = 1";
                                                                $run = mysqli_query($conn, $update);
                                                                if ($run) {
                                                                    ?>
                                                                    <script type="text/javascript">
                                                                        alert("Data offline berhasil diupdate");
                                                                        document.location = "?page=donasioffline";
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
                                            <tr align='center'>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Donatur</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No. Telepon</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Waktu Donasi</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nominal</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Nama Donatur</th>
                                                <th>No. Telepon</th>
                                                <th>Alamat</th>
                                                <th>Waktu Donasi</th>
                                                <th>Nominal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $sql = "SELECT * FROM donasi_offline order by waktu_donasi DESC";
                                            $run = mysqli_query($conn, $sql);
                                            while ($c = mysqli_fetch_array($run)) {
                                                $tgl = date("d-m-Y, H:i:s", strtotime($c['waktu_donasi']));
                                                echo "
                                                    <tr align='center'>
                                                        <td>$no</td>
                                                        <td>$c[nama]</td>
                                                        <td>$c[telepon]</td>
                                                        <td>$c[alamat]</td>
                                                        <td>$tgl WIB</td>
                                                        <td>$c[jumlah]</td>
                                                        <td>
                                                            <a href='?page=deldonasioffline&del=$c[id_donasioffline]' onClick='return confirmDelete()'><input type='button' class='btn btn-outline-danger' value='Hapus'></a>
                                                        </td>
                                                    </tr>";
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>