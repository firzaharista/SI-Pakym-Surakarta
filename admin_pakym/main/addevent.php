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
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA EVENT</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>event mengenai data website PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Event</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Nama Event" required="required" type="text" name="namaevent">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Waktu Event ( Mulai )</label>
                                    <div class="date-input">
                                        <input class="single-daterange form-control" data-error="Data harus diisi" required="required" type="text" name="waktumulai" value="">
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Waktu Event ( Akhir )</label>
                                    <div class="date-input">
                                        <input class="single-daterange form-control" data-error="Data harus diisi" required="required" type="text" name="waktuakhir" value="">
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Event</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="" required="required" type="file" name="fotoevent">
                                    <div class="help-block form-text text-muted form-control-feedback">
                                        Foto untuk Event
                                    </div> <br>
                                    <div class="form-group">
                                        <label for="">Ringkasan Event</label>
                                        <textarea class="form-control" data-error="Data harus diisi" required="required" name="ringkasanevent"></textarea>
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Isi Event</label>
                                        <textarea class="form-control" data-error="Data harus diisi" required="required" cols="60" id="ckeditor1" name="isievent" name="isievent"></textarea>
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kategori Event </label>
                                        <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="kategorievent">
                                            <?php
                                            echo "<option>-- Pilihan Kategori --</option>";
                                            $query = mysqli_query($conn, "SELECT * FROM kategori_event order by id_kategorievent DESC");
                                            while ($d = mysqli_fetch_array($query)) {
                                                echo "<option value='$d[id_kategorievent_en]'> $d[nama_kategorievent] </option>";
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <div class="form-group" align='left'>
                                        <input class="btn btn-primary" type="submit" name="submit" value="Tambah Data">
                                    </div>
                            </form>
                            <?php
                            $target = "../../images/event/" . basename($_FILES['fotoevent']['name']);
                            $s = "select max(id_event) 'max' from event";
                            $qs = mysqli_query($conn, $s);
                            $rv = mysqli_fetch_array($qs);
                            $id_event = $rv['max'];
                            $id_event = $id_event + 1;
                            $id_event_en = md5(md5('smp') . $id_event);

                            $nama = $_POST['namaevent'];
                            $waktumulai = $_POST['waktumulai'];
                            $waktuakhir = $_POST['waktuakhir'];
                            $foto = $_FILES['fotoevent']['name'];
                            $ringkasan = $_POST['ringkasanevent'];
                            $isi = $_POST['isievent'];
                            $kategori = $_POST['kategorievent'];
                            $submit      = $_POST['submit'];

                            // print $penulis;

                            if ($submit) {
                                if (move_uploaded_file($_FILES['fotoevent']['tmp_name'], $target)) {
                                    $sql = "INSERT INTO event (id_event,id_event_en,nama_event, waktu_mulai,waktu_akhir, foto_event, ringkasan_event, isi_event, id_kategorievent_en) VALUES('$id_event','$id_event_en','$nama', '$waktumulai','$waktuakhir','$foto', '$ringkasan', '$isi', '$kategori')";
                                    $run = mysqli_query($conn, $sql);
                                    if ($run) {
                                        ?>
                                        <script type="text/javascript">
                                            alert('Data Event Berhasil Ditambahkan');
                                            document.location = '?page=event';
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