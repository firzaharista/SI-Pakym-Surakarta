<!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="adm.php">Home</a>
            </li>
            <li class="breadcrumb-item">
              <span>UPDATE KELAS</span>
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
                      Update Kelas
                    </h6>
                    <div class="element-wrapper">
                      <div class="element-box">
                        <!-- SELECT DATA KELAS -->
                            <?php
                            
                                $upd = $_GET['upd'];
                                $sql = "SELECT * FROM kelas WHERE id_kelas='$upd'";
                                $run = mysqli_query($conn, $sql);
                                $data = mysqli_fetch_array($run);
                            ?>
                        <form id="formValidate" name='form' method="post" enctype="multipart/form-data">
                          <h4 class="form-header" align='center'>
                            <u>UPDATE KELAS</u>
                          </h4>
                          <div class="form-desc" align='center'>
                            <p>Kelas di Panti Asuhan Keluarga Yatim Muhammadiyah Surakarta</p>
                          </div>
                          <div class="form-group">
                            <label for="">Nama Kelas</label>
                            <input class="form-control" data-error="Data harus diisi" placeholder="Nama Kelas" required="required" type="text" name="namakelas" value="<?php echo $data['nama_kelas']; ?>">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                          </div>
                          <div class="form-group" align='left'>
                            <input class="btn btn-primary" type="submit" name="submit" value="Update Kelas">
                          </div>
                        </form>
                        <!-- UPDATE DATA KATEGORI BERITA -->
                            <?php

                            $namakelas = $_POST['namakelas'];
                            $submit = $_POST['submit'];

                            if ($submit) {
                                $sql = "update kelas set nama_kelas='$namakelas' where id_kelas='$upd' ";

                                $query = mysqli_query($conn, $sql);
                                if ($query) {
                                    ?>
                                        <script>
                                            alert("Data Kelas Berhasil Diubah");
                                            document.location = '?page=kelas';
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