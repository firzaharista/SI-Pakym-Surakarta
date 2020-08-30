<!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="adm.php">Home</a>
            </li>
            <li class="breadcrumb-item">
              <span>UPDATE KATEGORI EVENT</span>
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
                      Update Kategori EVENT
                    </h6>
                    <?php 
                      $upd = $_GET['upd'];
                      $sql = "SELECT * FROM kategori_event WHERE id_kategorievent_en='$upd'";
                      $run = mysqli_query($conn,$sql);
                      $data =mysqli_fetch_array($run);
                    ?>
                    <div class="element-wrapper">
                      <div class="element-box">
                        <form id="formValidate" name='form' method="post" enctype="multipart/form-data">
                          <h4 class="form-header" align='center'>
                            <u>UPDATE KATEGORI EVENT</u>
                          </h4>
                          <div class="form-desc" align='center'>
                            <p>Informasi mengenai data berita website PAKYM Surakarta</p>
                          </div>
                          <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input class="form-control" data-error="Data harus diisi" placeholder="Nama Kategori" required="required" type="text" name="namakategorievent" value="<?php echo $data['nama_kategorievent']; ?>">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                          </div>
                          <div class="form-group" align='left'>
                            <input class="btn btn-primary" type="submit" name="submit" value="Update Kategori Event">
                          </div>
                        </form>
                        <?php

                            $namakategori = $_POST['namakategorievent'];
                            $submit = $_POST['submit'];

                            if ($submit) {
                                $sql = "update kategori_event set nama_kategorievent='$namakategori' where id_kategorievent_en='$upd' ";

                                $query = mysqli_query($conn, $sql);
                                if ($query) {
                                    ?>
                                        <script>
                                            alert("Data Kategori Berita Berhasil Diubah");
                                            document.location = '?page=kategorievent';
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