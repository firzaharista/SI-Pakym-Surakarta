          <!--------------------
                START - Breadcrumbs
                -------------------->
          <ul class="breadcrumb">
              <li class="breadcrumb-item">
                  <a href="adm.php">Home</a>
              </li>
              <li class="breadcrumb-item">
                  <span>DETAIL EVENT</span>
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
                                  Detail Event
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
                                    $sql = "SELECT * FROM event, kategori_event WHERE event.id_kategorievent_en = kategori_event.id_kategorievent_en AND id_event_en='$detail'";
                                    $run = mysqli_query($conn, $sql);
                                    $d = mysqli_fetch_array($run);
                                    ?>
                                  <?php
                                    $tgl_mulai = date("d-m-Y", strtotime($d['waktu_mulai']));
                                    $tgl_akhir = date("d-m-Y", strtotime($d['waktu_akhir']));
                                    ?>
                                  <h5 style="margin-left: 70px;">
                                      Event
                                  </h5>
                                  <div style="padding: 10px 70px;">
                                      <table style="margin-top: 0px; width: 100%;">
                                          <tr>
                                              <td style="padding-right: 30px; margin-top: 5px;">
                                                  <div style="text-transform: uppercase; font-size: 12px; letter-spacing: 1px; font-weight: bold; color: #B8B8B8; margin-bottom: 5px;">
                                                      Nama Event
                                                  </div>
                                                  <div style="font-size: 13px; color: #111; margin-bottom: 20px;">
                                                      <?php echo $d['nama_event']; ?>
                                                  </div>
                                                  <div style="text-transform: uppercase; font-size: 12px; letter-spacing: 1px; font-weight: bold; color: #B8B8B8; margin-bottom: 5px;">
                                                      Kategori
                                                  </div>
                                                  <div style="font-size: 13px; color: #111; margin-bottom: 20px;">
                                                      <?php echo $d['nama_kategorievent']; ?>
                                                  </div>
                                                  <div style="text-transform: uppercase; font-size: 12px; letter-spacing: 1px; font-weight: bold; color: #B8B8B8; margin-bottom: 5px;">
                                                      Waktu
                                                  </div>
                                                  <div style="font-size: 13px; color: #111; margin-bottom: 20px;">
                                                      <?php echo $tgl_mulai; ?> sampai <?php echo $tgl_akhir; ?>
                                                  </div>
                                              </td>
                                              <td style="max-width: 180px; margin-top: 0px;">
                                                  <!-- <div style="background-color: #fffae9; padding: 20px; font-size: 12px;"> -->
                                                  <div style="color: #aaa; font-weight: bold;">
                                                      FOTO EVENT
                                                  </div>
                                                  <h5 style="margin: 10px 0px 40px;">
                                                      <img alt="" src="../../images/event/<?php echo $d['foto_event']; ?>" width='200' height='150'>
                                                  </h5>
                                                  <!-- </div> -->
                                              </td>

                                          </tr>
                                      </table>
                                      <table style="margin-top: 3px; width: 100%;">
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; font-size: 13px; letter-spacing: 1px; font-weight: bold; color: #B8B8B8; margin-bottom: 5px;">
                                                      Ringkasan Event
                                                  </div>
                                                  <div style="font-size: 13px; color: #111; margin-bottom: 20px;">
                                                      <?php echo $d['ringkasan_event']; ?>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                                  <div style="text-transform: uppercase; font-size: 13px; letter-spacing: 1px; font-weight: bold; color: #B8B8B8; margin-bottom: 5px;">
                                                      Isi Event
                                                  </div>
                                                  <div style="font-size: 13px; color: #111; margin-bottom: 20px;">
                                                      <?php echo $d['isi_event']; ?>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <a href="?page=event" style="padding: 5px 15px; background-color: #4B72FA; color: #fff; font-weight: bolder; font-size: 14px; display: inline-block; margin: 30px 0px; margin-right: 20px; text-decoration: none;">Kembali</a>
                                              </td>
                                          </tr>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>