<!DOCTYPE html>
<!--------------------
                START - Breadcrumbs
                -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>DETAIL ANAK ASUH</span>
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
                        Detail Anak Asuh
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
                        <div style="padding: 0px 50px;">
                            <table style="margin-top: 0px; width: 100%;">
                                <h5 style="margin-top: 0px;">
                                    Anak Asuh
                                </h5>
                            </table>
                            <?php
                            $detail = $_GET['detail'];
                            $sql    = "SELECT * FROM anak_asuh, status WHERE anak_asuh.id_status = status.id_status AND id_anakasuh_en = '$detail'";
                            $run    = mysqli_query($conn, $sql);
                            $w      = mysqli_fetch_array($run);
                            $tgl = date("d-m-Y", strtotime($w['tanggal_lahir']));
                            ?>
                            <table style="margin-top: 0px; width: 100%;">
                                <tr>
                                    <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                        <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                            Nama Anak Asuh
                                        </div>
                                    </td>
                                    <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                        <?php echo $w['nama_anakasuh']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                        <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                            Tempat, Tanggal Lahir
                                        </div>
                                    </td>
                                    <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                        <?php echo $w['tempat_lahir']; ?>, <?php echo $tgl; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                        <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                            Nama Bapak Kandung
                                        </div>
                                    </td>
                                    <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                        <?php echo $w['nama_bapak_kandung']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                        <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                            Nama Ibu Kandung
                                        </div>
                                    </td>
                                    <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                        <?php echo $w['nama_ibu_kandung']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                        <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                            Pendidikan Saat ini
                                        </div>
                                    </td>
                                    <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                        <?php echo $w['pendidikan']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                        <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                            Alamat
                                        </div>
                                    </td>
                                    <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                        <?php echo $w['alamat']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 0px;border-bottom: 1px solid rgba(0,0,0,0.05);">
                                        <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 12px; font-weight: bold;">
                                            Status
                                        </div>
                                    </td>
                                    <td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111; border-bottom: 1px solid rgba(0,0,0,0.05);">
                                        <?php echo $w['nama_status']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="?page=anakasuh" style="padding: 5px 15px; background-color: #4B72FA; color: #fff; font-weight: bolder; font-size: 14px; display: inline-block; margin: 30px 0px; margin-right: 20px; text-decoration: none;">Kembali</a>
                                    </td>
                                </tr>
                            </table>
                        </div>