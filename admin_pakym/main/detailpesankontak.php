          <!--------------------
                START - Breadcrumbs
                -------------------->
          <ul class="breadcrumb">
              <li class="breadcrumb-item">
                  <a href="adm.php">Home</a>
              </li>
              <li class="breadcrumb-item">
                  <span>DETAIL PESAN KONTAK</span>
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
                                  Detail Pesan Kontak
                              </h6>

                              <div style="max-width: 600px; margin: 0px auto; background-color: #fff; box-shadow: 0px 20px 50px rgba(0,0,0,0.05);">
                                  <table style="width: 100%;">
                                      <tr>
                                          <td style="background-color: #fff;">
                                              <img alt="" src="img/logo/logo_pakym.jpg" style="width: 70px; padding: 20px">
                                          </td>
                                      </tr>
                                  </table>
                                  <?php
                                    $detail = $_GET['detail'];
                                    $sql    = "SELECT * FROM pesan_kontak WHERE id_pesan='$detail'";
                                    $query  = mysqli_query($conn, $sql);
                                    $r      = mysqli_fetch_array($query);
                                    ?>
                                  <h5 style="margin-left: 70px;">
                                      Pesan Kontak
                                  </h5>
                                  <div style="padding: 30px 70px;">
                                      <table style="margin-top: 0px; width: 100%;">
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                                      Nama
                                                  </div>
                                              </td>
                                              <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <?php echo $r['nama']; ?>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                                      Email
                                                  </div>
                                              </td>
                                              <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <?php echo $r['email']; ?>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                                      Telepon
                                                  </div>
                                              </td>
                                              <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <?php echo $r['telepon']; ?>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                                      Subjek
                                                  </div>
                                              </td>
                                              <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <?php echo $r['subjek']; ?>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                                      Isi Pesan
                                                  </div>
                                              </td>
                                              <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <?php echo $r['isi_pesan']; ?>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <a href="?page=pesankontak" style="padding: 5px 15px; background-color: #4B72FA; color: #fff; font-weight: bolder; font-size: 14px; display: inline-block; margin: 30px 0px; margin-right: 20px; text-decoration: none;">Kembali</a>
                                              </td>
                                          </tr>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>