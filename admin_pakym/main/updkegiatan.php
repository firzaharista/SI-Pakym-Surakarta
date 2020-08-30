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
<div class="content-panel-toggler">
    <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
</div>
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper">
                    <h6 class="element-header">
                        UPDATE DATA KEGIATAN
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <!-- SELECT DATA KEGIATAN -->
                            <?php

                            $upd = $_GET['upd'];
                            $datalama = "SELECT * FROM waktu,kegiatan_has_waktu,kegiatan,kelas WHERE waktu.id_kategoriwaktu = kegiatan_has_waktu.id_kategoriwaktu 
                                         AND kegiatan_has_waktu.id_kegiatan = kegiatan.id_kegiatan AND kegiatan.id_kelas = kelas.id_kelas AND kegiatan.id_kegiatan ='$upd'";
                            $run       = mysqli_query($conn, $datalama);
                            $dataT     = mysqli_fetch_array($run);
                            $datawaktu = mysqli_query($conn, "SELECT kegiatan_has_waktu.id_kategoriwaktu FROM waktu,kegiatan_has_waktu,kegiatan 
                                         WHERE waktu.id_kategoriwaktu = kegiatan_has_waktu.id_kategoriwaktu AND kegiatan_has_waktu.id_kegiatan = kegiatan.id_kegiatan 
                                         AND kegiatan.id_kegiatan='$upd'");
                            $datawaktuArray = [];
                            while ($dt = mysqli_fetch_array($datawaktu)) {
                                array_push($datawaktuArray, $dt['id_kategoriwaktu']);
                            }

                            ?>
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>UPDATE DATA KEGIATAN</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data kegiatan website PAKYM Surakarta</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Kelas</label>
                                            <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="kelas">
                                                <?php
                                                echo "<option>-- Pilihan Kelas --</option>";
                                                $query = mysqli_query($conn, "SELECT * FROM kelas");
                                                while ($hasil = mysqli_fetch_array($query)) {
                                                    if ($hasil[id_kelas] == $dataT[id_kelas]) {
                                                        echo "<option value='$hasil[id_kelas]' selected='selected'>$hasil[nama_kelas]</option>";
                                                    } else {
                                                        echo "<option value='$hasil[id_kelas]'>$hasil[nama_kelas]</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Hari</label>
                                            <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="hari">
                                                <?php
                                                echo "<option>-- Pilihan Hari --</option>";
                                                $waktuX = "SELECT nama_waktu FROM waktu WHERE tipe_waktu='Hari' AND id_kategoriwaktu=$datawaktuArray[0]";
                                                $waktu  = "SELECT nama_waktu FROM waktu WHERE tipe_waktu='Hari'";
                                                $runX   = mysqli_query($conn, $waktuX);
                                                $run    = mysqli_query($conn, $waktu);
                                                $datX   = mysqli_fetch_array($runX);
                                                while ($dat = mysqli_fetch_array($run)) {
                                                    if ($datX['nama_waktu'] == $dat['nama_waktu']) {
                                                        echo "<option values='$dat[id_kategoriwaktu]' selected>$dat[nama_waktu]</option>";
                                                    } else {
                                                        echo "<option values='$dat[id_kategoriwaktu]'>$dat[nama_waktu]</option>";
                                                    }
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for=" ">Waktu</label>
                                            <select class="form-control" data-error=" Data harus diisi" required="required" placeholder="" name="waktubada">
                                                <?php
                                                echo "<option>-- Pilihan Waktu --</option>";
                                                $waktuX = "SELECT nama_waktu FROM waktu WHERE tipe_waktu='Waktu' AND id_kategoriwaktu=$datawaktuArray[1]";
                                                $waktu  = "SELECT nama_waktu FROM waktu WHERE tipe_waktu='Waktu'";
                                                $runX   = mysqli_query($conn, $waktuX);
                                                $run    = mysqli_query($conn, $waktu);
                                                $datX   = mysqli_fetch_array($runX);
                                                while ($dat = mysqli_fetch_array($run)) {
                                                    if ($datX['nama_waktu'] == $dat['nama_waktu']) {
                                                        echo "<option values='$dat[id_kategoriwaktu]' selected>$dat[nama_waktu]</option>";
                                                    } else {
                                                        echo "<option values='$dat[id_kategoriwaktu]'>$dat[nama_waktu]</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Kegiatan 1</label>
                                            <input class="form-control" data-error="Data harus diisi" placeholder="Kegiatan 1" required="required" type="text" name="kegiatan1" value="<?php echo $dataT['kegiatan1']; ?>">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Kegiatan 2</label>
                                            <input class="form-control" data-error="Data harus diisi" placeholder="Kegiatan 2" required="required" type="text" name="kegiatan2" value="<?php echo $dataT['kegiatan2']; ?>">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Kegiatan 3</label>
                                            <input class="form-control" data-error="Data harus diisi" placeholder="Kegiatan 3" required="required" type="text" name="kegiatan3" value="<?php echo $dataT['kegiatan3']; ?>">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" align=''>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Data">
                                </div>
                            </form>
                            <?php
                            $kelas      = $_POST['kelas'];
                            $waktu_hari = $_POST['hari'];
                            $waktu_bada = $_POST['waktubada'];
                            $kegiatan1  = $_POST['kegiatan1'];
                            $kegiatan2  = $_POST['kegiatan2'];
                            $kegiatan3  = $_POST['kegiatan3'];
                            $submit     = $_POST['submit'];
                            $del        = $_GET['del'];

                            if ($submit) {
                                $query = "UPDATE kegiatan SET kegiatan1 = '$kegiatan1', kegiatan2 = '$kegiatan2', kegiatan3 = '$kegiatan3', id_kelas = '$kelas' WHERE id_kegiatan='$upd' ";
                                $s = mysqli_query($conn, $query);
                                if ($s) {
                                    $cekwaktu1 = "SELECT id_kategoriwaktu FROM waktu WHERE nama_waktu = '$waktu_hari';";
                                    $cekwaktu2 = "SELECT id_kategoriwaktu FROM waktu WHERE nama_waktu = '$waktu_bada';";
                                    $cekwaktu3 = "SELECT id_kategoriwaktu FROM waktu WHERE nama_waktu != '$waktu_hari';";
                                    $cekwaktu4 = "SELECT id_kategoriwaktu FROM waktu WHERE nama_waktu != '$waktu_bada';";
                                    $cekkegiatan = "SELECT id_kegiatan FROM kegiatan WHERE kegiatan1 = '$kegiatan1'";
                                    if ($cekwaktu1 and $cekwaktu2) {
                                        $sqlwaktu1 = mysqli_fetch_array(mysqli_query($conn, $cekwaktu1));
                                        $sqlwaktu2 = mysqli_fetch_array(mysqli_query($conn, $cekwaktu2));
                                        $sqlkegiatan = mysqli_fetch_array(mysqli_query($conn, $cekkegiatan));
                                        $del = "delete from kegiatan_has_waktu where id_kegiatan='$upd'";

                                        $relasi1 = "INSERT INTO kegiatan_has_waktu(id_kegiatan,id_kategoriwaktu) VALUES ('$sqlkegiatan[0]','$sqlwaktu1[0]') ";
                                        $relasi2 = "INSERT INTO kegiatan_has_waktu(id_kegiatan,id_kategoriwaktu) VALUES ('$sqlkegiatan[0]','$sqlwaktu2[0]') ";
                                        mysqli_query($conn, $del);
                                        mysqli_query($conn, $relasi1);
                                        mysqli_query($conn, $relasi2);
                                        ?>
                                        <script type="text/javascript">
                                            alert('Berhasil mengubah data kegiatan');
                                            document.location = '?page=kegiatan';
                                        </script>
                                    <?php
                                    } else {
                                        $sqlwaktu3 = mysqli_fetch_array(mysqli_query($conn, $cekwaktu3));
                                        $sqlwaktu4 = mysqli_fetch_array(mysqli_query($conn, $cekwaktu4));
                                        $sqlkegiatan2 = mysqli_fetch_array(mysqli_query($conn, $cekkegiatan));
                                        $del2 = "delete from kegiatan_has_waktu where id_kegiatan='$upd'";

                                        $relasi3 = "INSERT INTO kegiatan_has_waktu(id_kegiatan,id_kategoriwaktu) VALUES ('$sqlkegiatan2[0]','$sqlwaktu3[0]') ";
                                        $relasi4 = "INSERT INTO kegiatan_has_waktu(id_kegiatan,id_kategoriwaktu) VALUES ('$sqlkegiatan2[0]','$sqlwaktu4[0]') ";
                                        mysqli_query($conn, $del2);
                                        mysqli_query($conn, $relasi3);
                                        mysqli_query($conn, $relasi4);
                                        ?>
                                            <script type="text/javascript">
                                                alert('Berhasil mengubah data kegiatan');
                                                document.location = '?page=kegiatan';
                                            </script>
                                        <?php
                                    }

                            } else {
                                ?>
                                    <script type="text/javascript">
                                        alert('Gagal mengubah data kegiatan');
                                        document.location = '?page=kegiatan';
                                    </script>
                                <?php

                            }
                        }

                        ?>
                        </div>
                    </div>
                </div>
                <!-- </div>
                </div>   -->