<!--------------------
START - Breadcrumbs
-------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>DASHBOARD</span>
    </li>
    <!-- <li class="breadcrumb-item">
    <span>Laptop with retina screen</span>
  </li> -->
</ul>
<!--------------------
END - Breadcrumbs
-------------------->
<?php
include "../../.private/koneksi.php";
?>
<div class="content-panel-toggler">
    <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
</div>
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper">
                    <h6 class="element-header">
                        Dashboard
                    </h6>
                    <div class="element-content">
                        <div class="row">
                            <?php
                            $getAdmin = "SELECT COUNT(*) AS total FROM user";
                            $run = mysqli_query($conn, $getAdmin);
                            $x    = mysqli_fetch_array($run);
                            ?>
                            <div class="col-sm-4 col-xxxl-4">
                                <a class="element-box el-tablo" href="#">
                                    <div class="label">
                                        Total Admin
                                    </div>
                                    <div class="value">
                                        <?php echo "{$x['total']}"; ?>
                                    </div>
                                    <div class="trending trending-up-basic">
                                        <span>Ada <?php echo "{$x['total']}"; ?> Admin</span><i class="os-icon os-icon-arrow-up2"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 col-xxxl-4">
                                <?php
                                $getDonatur = "SELECT COUNT(*) AS total FROM user_donatur";
                                $run = mysqli_query($conn, $getDonatur);
                                $y    = mysqli_fetch_array($run);
                                ?>
                                <a class="element-box el-tablo" href="#">
                                    <div class="label">
                                        Total Donatur
                                    </div>
                                    <div class="value">
                                        <?php echo "{$y['total']}"; ?>
                                    </div>
                                    <div class="trending trending-up-basic">
                                        <span>Ada <?php echo "{$y['total']}"; ?> Akun</span><i class="os-icon os-icon-arrow-up2"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 col-xxxl-4">
                                <?php
                                $getAnakAsuh = "SELECT COUNT(*) AS total FROM anak_asuh";
                                $run = mysqli_query($conn, $getAnakAsuh);
                                $z    = mysqli_fetch_array($run);
                                ?>
                                <a class="element-box el-tablo" href="#">
                                    <div class="label">
                                        Total Anak Asuh
                                    </div>
                                    <div class="value">
                                        <?php echo "{$z['total']}"; ?>
                                    </div>
                                    <div class="trending trending-up-basic">
                                        <span>Ada <?php echo "{$z['total']}"; ?> Anak Asuh</span><i class="os-icon os-icon-arrow-up2"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-xxxl-6">
                <div class="element-wrapper">
                    <h6 class="element-header">
                        Berita
                    </h6>
                    <div class="element-box">
                        <div class="table-responsive">
                            <table class="table table-lightborder">
                                <thead>
                                    <tr align="left">
                                        <th>
                                            Judul
                                        </th>
                                        <th>
                                            Foto
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM berita,kategori_berita WHERE berita.id_kategoriberita_en = kategori_berita.id_kategoriberita_en LIMIT 4");
                                    while ($a   = mysqli_fetch_array($sql)) {
                                        ?>
                                        <tr>
                                            <td class="nowrap">
                                                <?php echo $a['judul_berita']; ?>
                                            </td>
                                            <td>
                                                <div class="cell-image-list">
                                                    <div class="cell-img" style="background-image: url(../../images/berita/<?php echo $a['foto_berita']; ?>)"></div>
                                                    <!-- <div class="cell-img" style="background-image: url(img/portfolio2.jpg)"></div> -->
                                                    <!-- <div class="cell-img" style="background-image: url(img/portfolio12.jpg)"></div> -->
                                                    <!-- <div class="cell-img-more">
                                                                        + 5 more
                                                                    </div> -->
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xxxl-3">
                <!--START - Top Selling Chart-->
                <div class="element-wrapper">
                    <h6 class="element-header">
                        Total Berita
                    </h6>
                    <?php
                    $sql2 = "SELECT COUNT(*) AS total FROM berita";
                    $run = mysqli_query($conn, $sql2);
                    $b    = mysqli_fetch_array($run);
                    ?>
                    <div class="element-box">
                        <div class="el-chart-w">
                            <canvas height="120" id="donutChart" width="120"></canvas>
                            <div class="inside-donut-chart-label">
                                <strong><?php echo "{$b['total']}"; ?></strong>
                                <span>Total Berita</span>
                            </div>
                        </div>
                        <div class="el-legend condensed">
                            <div class="row">
                                <div class="col-auto col-xxxxl-6 ml-sm-auto mr-sm-auto col-6">
                                    <div class="legend-value-w">
                                        <div class="legend-pin legend-pin-squared" style="background-color: #6896f9;"></div>
                                        <div class="legend-value">
                                            <span>Total Berita</span>
                                            <div class="legend-sub-value">
                                                Ada <?php echo "{$b['total']}"; ?> Berita
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END - Top Selling Chart-->
                <!-- </div> -->

                <!--END - Questions per product                  -->
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper">
                    <h6 class="element-header">
                        Data Anak Asuh
                    </h6>
                    <div class="element-box-tp">
                        <!--------------------
                      START - Table with actions
                      ------------------  -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-lg table-v2 table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Nama Anak Asuh
                                        </th>
                                        <th>
                                            Nama Ayah
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql3 = "SELECT * FROM anak_asuh,status WHERE anak_asuh.id_status = status.id_status order by id_anakasuh DESC LIMIT 10";
                                    $run  = mysqli_query($conn, $sql3);
                                    while ($c    = mysqli_fetch_array($run)) {
                                        ?>
                                        <tr align="center">
                                            <td>
                                                <?php echo $c['nama_anakasuh']; ?>
                                            </td>
                                            <td>
                                                <?php echo $c['nama_bapak_kandung']; ?>
                                            </td>
                                            <td class="text">
                                                <?php echo $c['nama_status']; ?>
                                            </td>
                                        </tr>
                                    <?php
                                } ?>
                                </tbody>
                            </table>
                        </div>
                        <!--------------------
                      END - Table with actions
                      ------------------            -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------
            START - Sidebar
            -------------------->
    <div class="content-panel">
        <div class="content-panel-close">
            <i class="os-icon os-icon-close"></i>
        </div>
        <div class="element-wrapper">
            <h6 class="element-header">
                Quick Links
            </h6>
            <div class="element-box-tp">
                <div class="el-buttons-list full-width">
                    <a class="btn btn-white btn-sm" href="?page=addberita"><i class="os-icon os-icon-edit-1"></i><span>Tambah Berita</span></a>
                    <a class="btn btn-white btn-sm" href="?page=addevent"><i class="os-icon os-icon-agenda-1"></i><span>Tambah Event</span></a>
                    <a class="btn btn-white btn-sm" href="?page=addgaleri"><i class="os-icon os-icon-documents-07"></i><span>Tambah Galeri</span></a>
                    <a class="btn btn-white btn-sm" href="?page=kegiatan"><i class="os-icon os-icon-tasks-checked"></i><span>Data Kegiatan</span></a>
                    <a class="btn btn-white btn-sm" href="?page=anakasuh"><i class="os-icon os-icon-window-content"></i><span>Data Anak Asuh</span></a> </div>
            </div>
        </div>
        <!--------------------
              START - Support Agents
              -------------------->
        <div class="element-wrapper">
            <h6 class="element-header">
                Galeri
            </h6>
            <?php
            $sql3 = mysqli_query($conn, "SELECT * FROM galeri, kategori_galeri WHERE galeri.id_kategorigaleri_en = kategori_galeri.id_kategorigaleri_en order by id_galeri DESC LIMIT 4");
            while ($d = mysqli_fetch_array($sql3)) {
                $tgl = date("d-m-Y", strtotime($d['tanggal']));
                ?>
                <div class="element-box-tp">
                    <div class="profile-tile">
                        <a class="profile-tile-box">
                            <div class="pt-avatar-w">
                                <img alt="" src="../../images/galeri/<?php echo $d['foto_galeri']; ?>">
                            </div>
                        </a>
                        <div class="profile-tile-meta">
                            <ul>
                                <li>
                                    Judul:<strong><?php echo $d['judul']; ?></strong>
                                </li>
                                <li>
                                    Kategori:<strong><?php echo $d['nama_kategorigaleri']; ?></strong>
                                </li>
                                <li>
                                    Waktu Post:<strong><?php echo $tgl; ?></strong>
                                </li>
                            </ul>
                            <div class="pt-btn">
                                <a class="btn btn-success btn-sm" href="?page=galeri">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        } ?>
        </div>
        <!--------------------
              END - Support Agents
              -------------------->
        <!--------------------
              START - Recent Activity
              -------------------->
        <?php
        $sql4 = mysqli_query($conn, "SELECT * FROM informasi");
        $e = mysqli_fetch_array($sql4);
        ?>
        <div class="element-wrapper">
            <h6 class="element-header">
                Admin PAKYM Surakarta
            </h6>
            <?php
            $sql4 = mysqli_query($conn, "SELECT * FROM user");
            while ($f = mysqli_fetch_array($sql4)) {

                ?>
                <div class="element-box-tp">
                    <div class="activity-boxes-w">
                        <div class="activity-box-w">
                            <div class="activity-time">
                                ADMIN
                            </div>
                            <div class="activity-box">
                                <div class="activity-avatar">
                                    <img alt="" src="../../images/logo/<?php echo $e['favicon']; ?>">
                                </div>
                                <div class="activity-info">
                                    <div class="activity-title">
                                        <?php echo $f['nama']; ?>
                                    </div>
                                    <div class="activity-time">ADMINISTRATOR</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        } ?>
        </div>
        <!--------------------
              END - Recent Activity
              -------------------->
        <!--------------------
              START - Team Members
              -------------------->
        <div class="element-wrapper">
            <h6 class="element-header">
                Data Donatur
            </h6>
            <?php
            $sql5 = mysqli_query($conn, "SELECT * FROM user_donatur order by waktu_add DESC LIMIT 5");
            while ($g = mysqli_fetch_array($sql5)) {


                ?>
                <div class="element-box-tp">
                    <div class="users-list-w">
                        <div class="user-w with-status ">
                            <div class="user-avatar-w">
                                <div class="user-avatar">
                                    <img alt="" src="../../images/logo/<?php echo $e['favicon']; ?>">
                                </div>
                            </div>
                            <div class="user-name">
                                <h6 class="user-title">
                                    <?php echo $g['nama']; ?>
                                </h6>
                                <div class="user-role">
                                    Donatur
                                </div>
                            </div>
                            <a class="user-action">
                                <div class="os-icon os-icon-user"></div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
        } ?>
        </div>
        <!--------------------
              END - Team Members
              -------------------->
    </div>
    <!--------------------
            END - Sidebar
             -------------------->