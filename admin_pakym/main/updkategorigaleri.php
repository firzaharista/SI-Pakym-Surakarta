<!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="adm.php">Home</a>
            </li>
            <li class="breadcrumb-item">
              <span>UPDATE KATEGORI GALERI</span>
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
                      Update Kategori Galeri
                    </h6>
                    <div class="element-wrapper">
                      <div class="element-box">
                        <!-- SELECT DATA KATEGORI GALERI -->
                            <?php
                            
                                $upd = $_GET['upd'];
                                $sql = "SELECT * FROM kategori_galeri WHERE id_kategorigaleri_en='$upd'";
                                $run = mysqli_query($conn, $sql);
                                $data = mysqli_fetch_array($run);
                            ?>
                        <form id="formValidate" name='form' method="post" enctype="multipart/form-data">
                          <h4 class="form-header" align='center'>
                            <u>UPDATE KATEGORI GALERI</u>
                          </h4>
                          <div class="form-desc" align='center'>
                            <p>Kategori Galeri Panti Asuhan Keluarga Yatim Muhammadiyah Surakarta</p>
                          </div>
                          <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input class="form-control" data-error="Data harus diisi" placeholder="Nama Kategori" required="required" type="text" name="namakategorigaleri" value="<?php echo $data['nama_kategorigaleri']; ?>">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                          </div>
                          <div class="form-group" align='left'>
                            <input class="btn btn-primary" type="submit" name="submit" value="Update Kategori Galeri">
                          </div>
                        </form>
                        <!-- UPDATE DATA KATEGORI GALERI -->
                            <?php

                            $namakategorigaleri = $_POST['namakategorigaleri'];
                            $submit = $_POST['submit'];

                            if ($submit) {
                                $sql = "update kategori_galeri set nama_kategorigaleri='$namakategorigaleri' where id_kategorigaleri_en='$upd' ";

                                $query = mysqli_query($conn, $sql);
                                if ($query) {
                                    ?>
                                        <script>
                                            alert("Data Kategori Galeri Berhasil Diubah");
                                            document.location = '?page=kategorigaleri'
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