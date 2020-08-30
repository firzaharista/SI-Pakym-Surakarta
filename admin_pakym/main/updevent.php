<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>UPDATE EVENT</span>
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
                        Update Event
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <!-- SELECT DATA KATEGORI BERITA -->
                            <?php

                            $upd = $_GET['upd'];
                            $sql = "SELECT * FROM event, kategori_event WHERE event.id_kategorievent_en=kategori_event.id_kategorievent_en AND id_event_en='$upd'";
                            $r = mysqli_query($conn, $sql);
                            $d = mysqli_fetch_array($r);
                            ?>
                            <?php
                            $tgl_mulai = date("d-m-Y", strtotime($d['waktu_mulai']));
                            $tgl_akhir = date("d-m-Y", strtotime($d['waktu_akhir']));
                            ?>
                            <form id="formValidate" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>UPDATE EVENT</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>event mengenai data website PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Event</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Nama Event" required="required" type="text" name="namaevent" value="<?php echo $d['nama_event']; ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Waktu Event ( Mulai )</label>
                                    <div class="date-input">
                                        <input class="single-daterange form-control" data-error="Data harus diisi" required="required" type="text" name="waktumulai" value="<?php echo $d['waktu_mulai']; ?>">
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Waktu Event ( Akhir )</label>
                                    <div class="date-input">
                                        <input class="single-daterange form-control" data-error="Data harus diisi" required="required" type="text" name="waktuakhir" value="<?php echo $d['waktu_akhir']; ?>">
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Event</label> <br>
                                    <img src="../../images/event/<?php echo $d['foto_event']; ?>" width='120'>
                                    <?php echo $d['foto_event']; ?>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="" required="required" type="file" name="fotoevent>
                                    <div class="help-block form-text text-muted form-control-feedback">
                                        Foto untuk Event
                                    </div> <br>
                                    <div class="form-group">
                                        <label for="">Ringkasan Event</label>
                                        <textarea class="form-control" data-error="Data harus diisi" required="required" name="ringkasanevent"><?php echo $d['ringkasan_event']; ?></textarea>
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Isi Event</label>
                                        <textarea class="form-control" data-error="Data harus diisi" required="required" cols="60" id="ckeditor1" name="isievent"><?php echo $d['isi_event']; ?></textarea>
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kategori Event </label>
                                        <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="kategorievent" value="<?php echo $d['nama_kategorievent']; ?>">
                                            <?php
                                            $query = mysqli_query($conn, "SELECT * FROM kategori_event");
                                            while ($hasil = mysqli_fetch_array($query)) {
                                                if ($hasil[id_kategorievent] == $d[id_kategorievent]) {
                                                    echo "<option value='$hasil[id_kategorievent_en]' selected='selected'>$hasil[nama_kategorievent]</option>";
                                                } else {
                                                    echo "<option value='$hasil[id_kategorievent_en]'>$hasil[nama_kategorievent]</option>";
                                                }
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <div class="form-group" align='left'>
                                        <input class="btn btn-primary" type="submit" name="submit" value="Update Data">
                                    </div>
                            </form>
                            <?php
                            $target = "../../images/event/" . basename($_FILES['fotoevent']['name']);

                            $nama = $_POST['namaevent'];
                            $waktumulai = $_POST['waktumulai'];
                            $waktuakhir = $_POST['waktuakhir'];
                            $foto = $_FILES['fotoevent']['name'];
                            $ringkasan = $_POST['ringkasanevent'];
                            $isi = $_POST['isievent'];
                            $kategori = $_POST['kategorievent'];
                            $submit      = $_POST['submit'];

                            // print $penulis;

                            $sql = "update event set nama_event='$nama',waktu_mulai='$waktumulai',waktu_akhir='$waktuakhir',foto_event='$foto',ringkasan_event='$ringkasan',isi_event='$isi', id_kategorievent_en='$kategori' where id_event_en='$upd' ";

                            if (isset($_POST["submit"])) {
                                if (move_uploaded_file($_FILES["fotoevent"]["tmp_name"], $target)) {
                                    mysqli_query($conn, $sql);
                                    ?>
                                    <script type="text/javascript">
                                        alert(' Data Event Berhasil Diubah');
                                        document.location = '?page=event';
                                    </script>
                                <?php

                            } else {
                                ?>
                                    <script type="text/javascript">
                                        alert('Data salah, ulangi lagi');
                                        document.location = '?page=updevent';
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