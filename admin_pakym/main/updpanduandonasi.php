<!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.php">Home</a>
            </li>
            <li class="breadcrumb-item">
              <span>UPDATE PANDUAN DONASI</span>
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
                      Update Panduan Donasi
                    </h6>
                    <div class="element-wrapper">
                      <div class="element-box">
                        <form id="formValidate" name='form' method="post" enctype="multipart/form-data">
                          <h4 class="form-header" align='center'>
                            <u>UPDATE PANDUAN DONASI</u>
                          </h4>
                          <div class="element-wrapper">
                          <div class="element-box">
                              <!-- SELECT DATA PANDUAN -->
                              <?php

                              $upd = $_GET['upd'];
                              $sql = "SELECT * FROM panduan_donasi WHERE id_panduan='$upd'";
                              $run = mysqli_query($conn, $sql);
                              $d = mysqli_fetch_array($run);
                              ?>
                          <div class="form-desc" align='center'>
                                    <p>Update Panduan Donasi Panti Asuhan PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Panduan</label>
                                    <select class="form-control" data-error="Data harus diisi" required="required" placeholder="" name="jenis">
                                        <?php
                                                $query = mysqli_query($conn, "SELECT * FROM jenis_panduan");
                                                while ($hasil = mysqli_fetch_array($query)) {
                                                  if ($hasil[id_jenispanduan] == $d[id_jenispanduan]) {
                                                    echo "<option value='$hasil[id_jenispanduan]' selected='selected'>$hasil[nama_jenispanduan]</option>";
                                                  }else{
                                                    echo "<option value='$hasil[id_jenispanduan]'>$hasil[nama_jenispanduan]</option>";
                                                  }
                                                
                                                }
                                            ?>

                                    </select>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Isi Panduan</label>
                                    <textarea class="form-control" data-error="Data harus diisi" required="required" cols="60" id="ckeditor1" name="isipanduan" rows="10"><?php echo $d['isi_panduan']; ?></textarea>
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                
                                <div class="form-group" align='left'>
                                  <input class="btn btn-primary" type="submit" name="submit" value="Update Data">
                                </div>
                                
                        </form>
                        <!-- UPDATE DATA DAFTAR MASUK -->
                        <?php
                            $jenis = $_POST['jenis'];
                            $isi = $_POST['isipanduan'];
                            $submit = $_POST['submit'];


                            if ($submit) {
                                    $sql = "update panduan_donasi set id_jenispanduan='$jenis', isi_panduan='$isi' where id_panduan='$upd'";
                                    $run = mysqli_query($conn, $sql);
                                    if ($run) {
                                        ?>
                                          <script type="text/javascript">
                                            alert('Data Panduan Berhasil Diubah');
                                            document.location = '?page=panduandonasi';
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