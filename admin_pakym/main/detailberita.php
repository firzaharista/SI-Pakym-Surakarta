          <!--------------------
                START - Breadcrumbs
                -------------------->
          <ul class="breadcrumb">
              <li class="breadcrumb-item">
                  <a href="adm.php">Home</a>
              </li>
              <li class="breadcrumb-item">
                  <span>DETAIL BERITA</span>
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
                                  Detail Berita
                              </h6>

                              <div style="max-width: 600px; margin: 0px auto; background-color: #fff; box-shadow: 0px 20px 50px rgba(0,0,0,0.05);">
                                  <table style="width: 100%;">
                                      <tr>
                                          <?php
                                            $df = mysqli_query($conn, "SELECT * FROM informasi");
                                            $dfc = mysqli_fetch_array($df);
                                            ?>
                                          <td style="background-color: #fff;">
                                              <img alt="" src="../../images/logo/<?php echo $dfc['favicon'] ?>" style="width: 70px; padding: 20px">
                                          </td>
                                      </tr>
                                  </table>
                                  <?php
                                    $detail = $_GET['detail'];
                                    $sql = "SELECT * FROM berita, kategori_berita WHERE berita.id_kategoriberita_en = kategori_berita.id_kategoriberita_en AND berita.id_berita_en='$detail'";
                                    $run = mysqli_query($conn, $sql);
                                    $d = mysqli_fetch_array($run);
                                    $tgl = date("d-m-Y", strtotime($d['waktu_berita']));
                                    ?>
                                  <h5 style="margin-left: 70px;">
                                      Berita
                                  </h5>
                                  <div style="padding: 30px 70px;">
                                      <table style="margin-top: 0px; width: 100%;">
                                          <tr>
                                              <td style="padding-right: 30px;">
                                                  <div style="text-transform: uppercase; font-size: 12px; letter-spacing: 1px; font-weight: bold; color: #B8B8B8; margin-bottom: 5px;">
                                                      Judul
                                                  </div>
                                                  <div style="font-size: 13px; color: #111; margin-bottom: 20px;">
                                                      <?php echo $d['judul_berita']; ?>
                                                  </div>
                                                  <div style="text-transform: uppercase; font-size: 12px; letter-spacing: 1px; font-weight: bold; color: #B8B8B8; margin-bottom: 5px;">
                                                      Kategori
                                                  </div>
                                                  <div style="font-size: 13px; color: #111; margin-bottom: 20px;">
                                                      <?php echo $d['nama_kategoriberita']; ?>
                                                  </div>
                                                  <div style="text-transform: uppercase; font-size: 12px; letter-spacing: 1px; font-weight: bold; color: #B8B8B8; margin-bottom: 5px;">
                                                      Waktu
                                                  </div>
                                                  <div style="font-size: 13px; color: #111; margin-bottom: 20px;">
                                                      <?php echo $tgl; ?>
                                                  </div>
                                                  <div style="text-transform: uppercase; font-size: 12px; letter-spacing: 1px; font-weight: bold; color: #B8B8B8; margin-bottom: 5px;">
                                                      Penulis
                                                  </div>
                                                  <div style="font-size: 13px; color: #111; margin-bottom: 20px;">
                                                      <?php echo $d['penulis']; ?>
                                                  </div>
                                              </td>
                                              <td style="max-width: 150px; margin-top: 0px;">
                                                  <!-- <div style="background-color: #fffae9; padding: 20px; font-size: 12px;"> -->
                                                  <div style="color: #aaa; font-weight: bold;">
                                                      FOTO BERITA
                                                  </div>
                                                  <div class="image-responsive">
                                                      <h5 style="margin: 10px 0px 40px;">
                                                          <img alt="" src="../../images/berita/<?php echo $d['foto_berita']; ?>" width='200' height='150'>
                                                      </h5>
                                                  </div>

                                                  <!-- </div> -->
                                              </td>

                                          </tr>
                                      </table>
                                      <table style="margin-top: 20px; width: 100%;">
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; font-size: 13px; letter-spacing: 1px; font-weight: bold; color: #B8B8B8; margin-bottom: 5px;">
                                                      Ringkasan Berita
                                                  </div>
                                                  <div style="font-size: 13px; color: #111; margin-bottom: 20px;">
                                                      <?php echo $d['ringkasan_berita']; ?>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; font-size: 13px; letter-spacing: 1px; font-weight: bold; color: #B8B8B8; margin-bottom: 5px;">
                                                      Isi Berita
                                                  </div>
                                                  <div style="font-size: 13px; color: #111; margin-bottom: 20px;">
                                                      <?php echo $d['isi_berita']; ?>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <a href="?page=berita" style="padding: 5px 15px; background-color: #4B72FA; color: #fff; font-weight: bolder; font-size: 14px; display: inline-block; margin: 30px 0px; margin-right: 20px; text-decoration: none;">Kembali</a>
                                              </td>
                                          </tr>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>