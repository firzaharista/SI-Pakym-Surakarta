<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="dashboard.php">Home</a>
  </li>
  <li class="breadcrumb-item">
    <span>UPDATE PANDUAN PENDAFTARAN</span>
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
            Update Panduan Pendaftaran
          </h6>
          <div class="element-wrapper">
            <div class="element-box">
              <form id="formValidate" name='form' method="post" enctype="multipart/form-data">
                <h4 class="form-header" align='center'>
                  <u>UPDATE PANDUAN Pendaftaran</u>
                </h4>
                <div class="element-wrapper">
                  <div class="element-box">
                    <!-- SELECT DATA PANDUAN -->
                    <?php

                    $upd = $_GET['upd'];
                    $sql = "SELECT * FROM panduan_pendaftaran WHERE id_panduanpendaftaran='$upd'";
                    $run = mysqli_query($conn, $sql);
                    $dx = mysqli_fetch_array($run);
                    ?>
                    <div class="form-desc" align='center'>
                      <p>Update Panduan Pendaftaran Panti Asuhan PAKYM Surakarta</p>
                    </div>
                    <div class="form-group">
                      <label for="">Judul Pendaftaran</label>
                      <input class="form-control" data-error="Data harus diisi" placeholder="Nama Jabatan" required="required" type="text" name="judul" value="<?php echo $dx['judul']; ?>">
                      <div class="help-block form-text with-errors form-control-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="">Keterangan Pendaftaran</label>
                      <textarea class="form-control" data-error="Data harus diisi" required="required" cols="60" id="ckeditor1" name="keterangan" rows="10"><?php echo $dx['keterangan']; ?></textarea>
                      <div class="help-block form-text with-errors form-control-feedback"></div>
                    </div>

                    <div class="form-group" align='left'>
                      <input class="btn btn-primary" type="submit" name="submit" value="Update Data">
                    </div>

              </form>
              <!-- UPDATE DATA  -->
              <?php
              $judul = $_POST['judul'];
              $keterangan = $_POST['keterangan'];
              $submit = $_POST['submit'];


              if ($submit) {
                $sql = "update panduan_pendaftaran set judul='$judul', keterangan='$keterangan' where id_panduanpendaftaran='$upd'";
                $run = mysqli_query($conn, $sql);
                if ($run) {
                  ?>
                  <script type="text/javascript">
                    alert('Data Panduan Pendaftaran Berhasil Diubah');
                    document.location = '?page=panduan_pendaftaran';
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