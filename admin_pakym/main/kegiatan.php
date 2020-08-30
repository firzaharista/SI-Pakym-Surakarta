<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>Kegiatan</span>
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
        if (confirm("Hapus Data Kegiatan ?")) {
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
                        Kegiatan Panti Asuhan
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA KEGIATAN PANTI ASUHAN</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Kegiatan Panti Asuhan Keluarga Yatim Muhammadiyah Surakarta</p>
                                </div>
                                <div class="form-group" align='center'>
                                    <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="button">Tambah Data Kegiatan</button>
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
                                                            Tambah Data Kegiatan
                                                        </h4>
                                                        <div class="onboarding-text">
                                                            Kegiatan Panti Asuhan Keluarga Yatim Muhammadiyah Surakarta
                                                        </div>
                                                        <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Kelas</label>
                                                                        <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="kelas">
                                                                            <?php
                                                                            echo "<option>-- Pilihan Kelas --</option>";
                                                                            $query = mysqli_query($conn, "SELECT * FROM kelas order by id_kelas DESC");
                                                                            while ($d = mysqli_fetch_array($query)) {
                                                                                echo "<option value='$d[id_kelas]'> $d[nama_kelas] </option>";
                                                                            }
                                                                            ?>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Hari</label>
                                                                        <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="hari">
                                                                            <?php
                                                                            echo "<option>-- Pilihan Hari --</option>";
                                                                            $query = mysqli_query($conn, "SELECT * FROM waktu WHERE tipe_waktu = 'Hari' order by id_kategoriwaktu ASC");
                                                                            while ($d = mysqli_fetch_array($query)) {
                                                                                echo "<option value='$d[id_kategoriwaktu]'> $d[nama_waktu] </option>";
                                                                            }
                                                                            ?>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                    <div class="col-sm-12" align="left">
                                                                        <div class="form-group">
                                                                            <label for="">Waktu</label>
                                                                            <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="waktubada">
                                                                                <?php
                                                                                echo "<option>-- Pilihan Waktu --</option>";
                                                                                $query = mysqli_query($conn, "SELECT * FROM waktu WHERE tipe_waktu = 'waktu' order by id_kategoriwaktu DESC");
                                                                                while ($d = mysqli_fetch_array($query)) {
                                                                                    echo "<option value='$d[id_kategoriwaktu]'> $d[nama_waktu] </option>";
                                                                                }
                                                                                ?>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12" align="left">
                                                                        <div class="form-group">
                                                                            <label for="">Kegiatan 1</label>
                                                                            <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Kegiatan 1" name="kegiatan1" type="text" value="">
                                                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12" align="left">
                                                                        <div class="form-group">
                                                                            <label for="">Kegiatan 2</label>
                                                                            <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Kegiatan 2" name="kegiatan2" type="text" value="">
                                                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12" align="left">
                                                                        <div class="form-group">
                                                                            <label for="">Kegiatan 3</label>
                                                                            <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Kegiatan 3" name="kegiatan3" type="text" value="">
                                                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group" align='left'>
                                                                            <input class="btn btn-primary" type="submit" name="submit" value="Tambah Data">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </form>
                                                        <?php
                                                        $kelas = $_POST['kelas'];
                                                        $waktu_hari = $_POST['hari'];
                                                        $waktu_bada = $_POST['waktubada'];
                                                        $kegiatan1 = $_POST['kegiatan1'];
                                                        $kegiatan2 = $_POST['kegiatan2'];
                                                        $kegiatan3 = $_POST['kegiatan3'];
                                                        $submit = $_POST['submit'];

                                                        if ($submit) {
                                                            $waktu_post = date("Y-m-d H:i:s");
                                                            $sql = "INSERT INTO kegiatan(kegiatan1,kegiatan2,kegiatan3,waktu_post,id_kelas)
                                                                    VALUES('$kegiatan1','$kegiatan2','$kegiatan3','$waktu_post','$kelas')";
                                                            if (mysqli_query($conn, $sql)) {
                                                                // $cekkegiatan = ;
                                                                $sqlkegiatan = mysqli_fetch_array(mysqli_query($conn, "SELECT id_kegiatan FROM kegiatan WHERE waktu_post = '$waktu_post'"));
                                                                $relasi1 = "INSERT INTO kegiatan_has_waktu(id_kegiatan,id_kategoriwaktu) VALUES('$sqlkegiatan[0]','$waktu_hari')";
                                                                $relasi2 = "INSERT INTO kegiatan_has_waktu(id_kegiatan,id_kategoriwaktu) VALUES('$sqlkegiatan[0]','$waktu_bada')";
                                                                mysqli_query($conn, $relasi1);
                                                                mysqli_query($conn, $relasi2);
                                                                ?>
                                                        <script type="text/javascript">
                                                            alert('Berhasil menambah data kegiatan');
                                                            document.location = '?page=kegiatan';
                                                        </script>
                                                        <?php

                                                    } else {
                                                        ?>
                                                        <script type="text/javascript">
                                                            alert('Gagal menambah data kegiatan');
                                                            document.location = '?page=kegiatan';
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
                                </div>
                                <div class="table-responsive">
                                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                        <thead>
                                            <tr align="center">
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kelas</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Waktu</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kegiatan 1</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kegiatan 2</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kegiatan 3</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Kelas</th>
                                                <th>Waktu</th>
                                                <th>Kegiatan 1</th>
                                                <th>Kegiatan 2</th>
                                                <th>Kegiatan 3</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $sql = "SELECT * FROM kegiatan, kegiatan_has_waktu, waktu,kelas WHERE kegiatan.id_kegiatan = kegiatan_has_waktu.id_kegiatan AND kegiatan_has_waktu.id_kategoriwaktu = waktu.id_kategoriwaktu AND kegiatan.id_kelas = kelas.id_kelas group by kegiatan.id_kegiatan";
                                            $query = mysqli_query($conn, $sql);
                                            while ($data = mysqli_fetch_array($query)) {
                                                echo "
                                                <tr align='center'>
                                                    <td>$no</td>
                                                    <td>$data[nama_kelas]</td>
                                                    <td>";
                                                $sql1 = "SELECT kegiatan_has_waktu.id_kegiatan, waktu.nama_waktu FROM kegiatan, kegiatan_has_waktu, waktu WHERE kegiatan.id_kegiatan = kegiatan_has_waktu.id_kegiatan AND kegiatan_has_waktu.id_kategoriwaktu = waktu.id_kategoriwaktu AND kegiatan.id_kegiatan = $data[id_kegiatan] order by id_kegiatan ASC";
                                                $query1 = mysqli_query($conn, $sql1);
                                                while ($data1 = mysqli_fetch_array($query1)) {
                                                    if ($data['kegiatan.id_kegiatan'] == $data1['kegiatan_has_waktu.id_kegiatan']) {
                                                        echo "$data1[nama_waktu], ";
                                                    }
                                                }
                                                echo "</td>
                                                        <td>$data[kegiatan1]</td>
                                                        <td>$data[kegiatan2]</td>
                                                        <td>$data[kegiatan3]</td>
                                                        <td>
                                                            <a href='?page=updkegiatan&upd=$data[id_kegiatan]'><button class='btn btn-outline-primary'>Edit</button></a>
											                <a href='?page=delkegiatan&del=$data[id_kegiatan]' onClick='return confirmDelete()'><button class='btn btn-outline-danger' >Hapus</button></a>
                                                        </td>

                                                    </tr>";
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div> 