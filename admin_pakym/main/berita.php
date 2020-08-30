<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>DATA BERITA</span>
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
        if (confirm("Hapus Data Berita ?")) {
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
                        Data Berita
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA BERITA</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Informasi mengenai data berita website PAKYM Surakarta</p>
                                </div>
                                <div class="form-group" align='center'>
                                    <a href="?page=addberita"><input class="btn btn-primary" type="submit" name="submit" value="Tambah Data Berita"></a>
                                </div>
                                <?php
                                if (isset($_POST['submit'])) {
                                    ?>
                                    <script type="text/javascript">
                                        document.location = "?page=addberita";
                                    </script>
                                <?php

                            }
                            ?>
                                <div class="table-responsive">
                                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                        <thead>
                                            <tr align="center">
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Judul</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Foto</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kategori</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Waktu</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Judul</th>
                                                <th>Foto</th>
                                                <th>Kategori</th>
                                                <th>Waktu</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <!-- VIEW DATA BERITA -->
                                            <?php
                                            $no = 1;
                                            $sql = "SELECT * FROM berita,kategori_berita WHERE berita.id_kategoriberita_en = kategori_berita.id_kategoriberita_en order by id_berita DESC";
                                            $run = mysqli_query($conn, $sql);
                                            while ($c = mysqli_fetch_array($run)) {
                                                $tgl = date("d-m-Y", strtotime($c['waktu_berita']));
                                                echo "
                                                    <tr align='center'>
                                                        <td>$no</td>
                                                        <td>$c[judul_berita]</td>
                                                        <td>
                                                            <img src='../../images/berita/$c[foto_berita]' width='100' >
                                                        </td>   
                                                        <td>$c[nama_kategoriberita]</td>
                                                        <td>$tgl</td>
                                                        <td>
                                                            <a href='?page=detailberita&detail=$c[id_berita_en]'><input type='button' class='btn btn-outline-success' value='Detail'></a>
                                                            <a href='?page=updberita&upd=$c[id_berita_en]'><input type='button' class='btn btn-outline-primary' value='Edit'></a>
                                                            <a href='?page=delberita&del=$c[id_berita_en]' onClick='return confirmDelete()'><input type='button' class='btn btn-outline-danger' value='Hapus'></a>
                                                        </td>
                                                    </tr>";
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>