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
        if (confirm("Hapus Data Alumni ?")) {
            return true;
        } else {
            return false;
        }
    }
</script>
<script language="JavaScript" type="text/javascript">
    function confirmVerifikasi() {
        if (confirm("Verifikasi Data Alumni ?")) {
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
                        Alumni PAKYM Surakarta
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA ALUMNI PANTI ASUHAN</u>
                                    <P>BELUM DIVERIFIKASI</P>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Alumni Panti Asuhan PAKYM Surakarta</p>
                                </div>
                                <div class="form-group" align='center'>
                                    <a href="?page=alumni-sudah-verifikasi"><input class="btn btn-primary" type="submit" name="alumni_verifikasi" value="Alumni Sudah Diverifikasi"></a>
                                </div>
                                <?php
                                if (isset($_POST['alumni_verifikasi'])) {
                                    ?>
                                    <script type="text/javascript">
                                        document.location = '?page=alumni-sudah-verifikasi';
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
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Alumni</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tahun Masuk</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tahun Keluar</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Nama Alumni</th>
                                                <th>Tahun Masuk</th>
                                                <th>Tahun Keluar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $sql = "SELECT * FROM alumni WHERE status_alumni = 'Belum Diverifikasi' order by waktu_alumni DESC";
                                            $run = mysqli_query($conn, $sql);
                                            while ($r = mysqli_fetch_array($run)) {
                                                echo "
                                                    <tr align='center'>
                                                        <td>$no</td>
                                                        <td>$r[nama]</td>
                                                        <td>$r[tahun_masuk]</td>
                                                        <td>$r[tahun_keluar]</td>
                                                        <td>
                                                            <a href='?page=detailalumni-belum-diverifikasi&detail=$r[id_alumni_en]'><input type='button' class='btn btn-outline-success' value='Detail'></a>
                                                            <a href='?page=verifikasi-alumni&verifikasi=$r[id_alumni_en]' onClick='return confirmVerifikasi()'><input type='button' class='btn btn-outline-primary' value='Verifikasi'></a>
                                                            <a href='?page=delalumni-belum-diverifikasi&del=$r[id_alumni_en]' onClick='return confirmDelete()'><input type='button' class='btn btn-outline-danger' value='Dihapus'></a>
                                                        </td>
                                                    </tr>
                                                ";
                                                $no++;
                                            }

                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>