<!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="adm.php">Home</a>
            </li>
            <li class="breadcrumb-item">
              <span>UPDATE KATEGORI BERITA</span>
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
                      Update Kategori Berita
                    </h6>
                    <div class="element-wrapper">
                      <div class="element-box">
                        <!-- SELECT DATA KATEGORI BERITA -->
                            <?php
                            
                                $upd = $_GET['upd'];
                                $sql = "SELECT * FROM kategori_berita WHERE id_kategoriberita_en='$upd'";
                                $run = mysqli_query($conn, $sql);
                                $data = mysqli_fetch_array($run);
                            ?>
                        <form id="formValidate" name='form' method="post" enctype="multipart/form-data">
                          <h4 class="form-header" align='center'>
                            <u>UPDATE KATEGORI BERITA</u>
                          </h4>
                          <div class="form-desc" align='center'>
                            <p>Kategori Berita Panti Asuhan PAKYM Surakarta</p>
                          </div>
                          <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input class="form-control" data-error="Data harus diisi" placeholder="Nama Kategori" required="required" type="text" name="namakategoriberita" value="<?php echo $data['nama_kategoriberita']; ?>">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                          </div>
                          <div class="form-group" align='left'>
                            <input class="btn btn-primary" type="submit" name="submit" value="Update Kategori Berita">
                          </div>
                        </form>
                        <!-- UPDATE DATA KATEGORI BERITA -->
                            <?php

                            $namakategori = $_POST['namakategoriberita'];
                            $submit = $_POST['submit'];

                            if ($submit) {
                                $sql = "update kategori_berita set nama_kategoriberita='$namakategori' where id_kategoriberita_en='$upd' ";

                                $query = mysqli_query($conn, $sql);
                                if ($query) {
                                    ?>
                                        <script>
                                            alert("Data Kategori Berita Berhasil Diubah");
                                            document.location = '?page=kategoriberita';
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