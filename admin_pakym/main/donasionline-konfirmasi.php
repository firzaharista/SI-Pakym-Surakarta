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
        if (confirm("Donasi Yakin Diterima ?")) {
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
                                    <P>SUDAH KONFIRMASI</P>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Donasi Online Panti Asuhan Keluarga Yatim Muhammadiyah Surakarta</p>
                                </div>
                                <div class="form-group" align='center'>
                                    <a href="?page=donasionline-belum-dibayar"><input class="btn btn-primary" type="submit" name="belumdibayar" value="Donasi Belum Dibayar"></a>
                                    <a href="?page=donasionline-pembayaran-diterima"><input class="btn btn-primary" type="submit" name="diterima" value="Pembayaran Sudah Diterima"></a>
                                    <a href="?page=donasionline-dibatalkan"><input class="btn btn-primary" type="submit" name="dibatalkan" value="Donasi Dibatalkan"></a>
                                </div>
                                <?php
                                if (isset($_POST['belumdibayar'])) {
                                    ?>
                                    <script type="text/javascript">
                                        document.location = '?page=donasionline-belum-dibayar';
                                    </script>
                                <?php
                            } elseif (isset($_POST['diterima'])) {
                                ?>
                                    <script type="text/javascript">
                                        document.location = '?page=donasionline-pembayaran-diterima';
                                    </script>
                                <?php
                            } elseif (isset($_POST['dibatalkan'])) {
                                ?>
                                    <script type="text/javascript">
                                        document.location = '?page=donasionline-dibatalkan';
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
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Waktu Konfirmasi</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>No. Invoice</th>
                                                <th>Nama Donatur</th>
                                                <th>Jumlah Donasi</th>
                                                <th>Waktu Konfimasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $sql = "SELECT * FROM donasi_online,bank_tujuan,waktu_donasionline,konfirmasi_online WHERE status_donasi = 'Sudah Konfirmasi' AND donasi_online.id_banktujuan = bank_tujuan.id_banktujuan AND waktu_donasionline.no_invoice = donasi_online.id_donasionline AND konfirmasi_online.id_donasionline_en = donasi_online.id_donasionline_en group by id_donasionline order by waktu_donasi DESC";
                                            $run = mysqli_query($conn, $sql);
                                            while ($c = mysqli_fetch_array($run)) {
                                                $waktu = date("d-m-Y, H:i:s", strtotime($c['waktu_online']));
                                                $waktukonfirmasi = date("d-m-Y, H:i:s", strtotime($c['waktu_donasi']));
                                                echo "
                                                    <tr align='center'>
                                                        <td>$no</td>
                                                        <td>$c[no_invoice_konfirmasi]</td>
                                                        <td>$c[nama_donatur_konfirmasi]</td>
                                                        <td>$c[jumlah_donasi_konfirmasi]</td>
                                                        <td>$waktukonfirmasi WIB</td>
                                                        <td>
                                                            <a href='?page=detail-donasionline-konfirmasi&detail=$c[id_konfirmasionline_en]'><input type='button' class='btn btn-outline-success' value='Detail'></a>
                                                            <a href='?page=don-sudah-diterima&terima=$c[id_donasionline_en]' onClick='return confirmDelete()'><input type='button' class='btn btn-outline-primary' value='Terima'></a>
                                                        </td>
                                                    </tr>";
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>