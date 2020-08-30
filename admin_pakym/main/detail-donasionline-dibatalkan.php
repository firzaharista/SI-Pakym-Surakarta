          <!--------------------
                START - Breadcrumbs
                -------------------->
          <ul class="breadcrumb">
              <li class="breadcrumb-item">
                  <a href="adm.php">Home</a>
              </li>
              <li class="breadcrumb-item">
                  <span>DETAIL DONASI ONLINE</span>
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
                                  Detail Donasi Online
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
                                    $sql = "SELECT * FROM donasi_online,bank_tujuan,waktu_donasionline WHERE status_donasi = 'Donasi Dibatalkan' AND donasi_online.id_banktujuan = bank_tujuan.id_banktujuan AND waktu_donasionline.no_invoice = donasi_online.id_donasionline AND donasi_online.id_donasionline_en='$detail'";
                                    $run = mysqli_query($conn, $sql);
                                    $d = mysqli_fetch_array($run);
                                    ?>
                                  <h5 style="margin-left: 70px;">
                                      Detail Donasi Dibatalkan
                                  </h5>
                                  <div style="padding: 30px 70px;">
                                      <table style="margin-top: 0px; width: 100%;">
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                                      No. Invoice
                                                  </div>
                                              </td>
                                              <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <?php echo $d['id_donasionline']; ?>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                                      Nama Donatur
                                                  </div>
                                              </td>
                                              <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <?php echo $d['nama_donatur']; ?>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                                      Email
                                                  </div>
                                              </td>
                                              <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <?php echo $d['email']; ?>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                                      Telepon
                                                  </div>
                                              </td>
                                              <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <?php echo $d['telepon']; ?>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                                      Bank Tujuan
                                                  </div>
                                              </td>
                                              <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <?php echo $d['nama_bank']; ?>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                                      No. Rekening Tujuan
                                                  </div>
                                              </td>
                                              <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <?php echo $d['no_rek']; ?>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                                      Jumlah Donasi
                                                  </div>
                                              </td>
                                              <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <?php echo $d['jumlah_donasi']; ?>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                                      Waktu Donasi
                                                  </div>
                                              </td>
                                              <?php
                                                $sql = mysqli_query($conn, "SELECT * FROM waktu_donasionline,donasi_online WHERE waktu_donasionline.no_invoice = donasi_online.id_donasionline AND donasi_online.id_donasionline_en='$detail'");
                                                while ($ds = mysqli_fetch_array($sql)) {
                                                    $waktu_d = date("d-m-Y, H:i:s", strtotime($ds['waktu_online']));
                                                    $waktu = date("d-m-Y, H:i:s", strtotime($ds['waktu_donasi']));
                                                    if ($ds['id_donasionline'] = $ds['no_invoice']) { ?>
                                                      <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                          <?php echo $waktu_d; ?> WIB
                                                      </td>
                                                  <?php } ?>

                                              </tr>
                                              <tr>
                                                  <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                      <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                                          Waktu Dibatalkan
                                                      </div>
                                                  </td>
                                                  <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                      <?php echo $waktu; ?> WIB
                                                  </td>
                                              </tr>
                                          <?php } ?>
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                                      Status Donasi
                                                  </div>
                                              </td>
                                              <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <?php echo $d['status_donasi']; ?>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <a href="?page=donasionline-dibatalkan" style="padding: 5px 15px; background-color: #4B72FA; color: #fff; font-weight: bolder; font-size: 14px; display: inline-block; margin: 30px 0px; margin-right: 20px; text-decoration: none;">Kembali</a>
                                              </td>
                                          </tr>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>