<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>Donasi Online</span>
    </li>
    <!-- <li class="breadcrumb-item">
              <span>Laptop with retina screen</span>
            </li> -->
</ul>
<!--------------------
          END - Breadcrumbs
          -------------------->

<!-- DELETE ALERT -->
<script language="JavaScript" type="text/javascript">
    function confirmDelete() {
        if (confirm("Hapus Data Donasi ?")) {
            return true;
        } else {
            return false;
        }
    }
</script>
<div class="content-panel-toggler">
    <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
</div>
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper">
                    <h6 class="element-header">
                        Donasi Online Panti Asuhan
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA DONASI ONLINE PANTI ASUHAN</u>
                                    <P>DIBATALKAN</P>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Donasi Online Panti Asuhan Keluarga Yatim Muhammadiyah Surakarta</p>
                                </div>
                                <div class="form-group" align='center'>
                                    <a href="?page=donasionline-belum-dibayar"><input class="btn btn-primary" type="submit" name="belumdibayar" value="Donasi Belum Dibayar"></a>
                                    <a href="?page=donasionline-pembayaran-diterima"><input class="btn btn-primary" type="submit" name="diterima" value="Pembayaran Sudah Diterima"></a>
                                    <a href="?page=donasionline-konfirmasi"><input class="btn btn-primary" type="submit" name="konfirmasi" value="Donasi Sudah Dikonfirmasi"></a>
                                </div>
                                <?php
                                if (isset($_POST['konfirmasi'])) {
                                    ?>
                                    <script type="text/javascript">
                                        document.location = '?page=donasionline-konfirmasi';
                                    </script>
                                <?php
                            } elseif (isset($_POST['diterima'])) {
                                ?>
                                    <script type="text/javascript">
                                        document.location = '?page=donasionline-pembayaran-diterima';
                                    </script>
                                <?php
                            } elseif (isset($_POST['belumdibayar'])) {
                                ?>
                                    <script type="text/javascript">
                                        document.location = '?page=donasionline-belum-dibayar';
                                    </script>
                                <?php
                            }
                            ?>
                                <div class="table-responsive">
                                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                        <thead>
                                            <tr align='center'>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No. Invoice</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Donatur</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah Donasi</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Waktu Dibatalkan</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>No. Invoice</th>
                                                <th>Nama Donatur</th>
                                                <th>Jumlah Donasi</th>
                                                <th>Waktu Dibatalkan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $sql = "SELECT * FROM donasi_online,bank_tujuan,waktu_donasionline WHERE status_donasi = 'Donasi Dibatalkan' AND donasi_online.id_banktujuan = bank_tujuan.id_banktujuan AND waktu_donasionline.no_invoice = donasi_online.id_donasionline group by id_donasionline order by id_donasionline DESC";
                                            $run = mysqli_query($conn, $sql);
                                            while ($c = mysqli_fetch_array($run)) {
                                                $waktu = date("d-m-Y, H:i:s", strtotime($c['waktu_online']));
                                                $waktubatal = date("d-m-Y, H:i:s", strtotime($c['waktu_donasi']));
                                                echo "
                                                    <tr align='center'>
                                                        <td>$no</td>
                                                        <td>$c[id_donasionline]</td>
                                                        <td>$c[nama_donatur]</td>
                                                        <td>$c[jumlah_donasi]</td>
                                                        <td>$waktubatal WIB</td>
                                                        <td>
                                                            <a href='?page=detail-donasionline-dibatalkan&detail=$c[id_donasionline_en]'><input type='button' class='btn btn-outline-success' value='Detail'></a>
                                                        </td>
                                                    </tr>";
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>