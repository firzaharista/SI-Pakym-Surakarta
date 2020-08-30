<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>Kategori Berita</span>
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
        if (confirm("Hapus Data Kategori Berita ?")) {
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
                        Kategori Berita
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA KATEGORI BERITA</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Kategori Berita Panti Asuhan PAKYM Surakarta</p>
                                </div>
                                <div class="form-group" align='center'>
                                    <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="button">Tambah Data Kategori Berita</button>
                                    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="onboardingWideFormModal" role="dialog" tabindex="-1">
                                        <div class="modal-dialog modal-lg modal-centered" role="document">
                                            <div class="modal-content text-center">
                                                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Exit</span><span class="os-icon os-icon-close"></span></button>
                                                <div class="onboarding-side-by-side">
                                                    <div class="onboarding-media">
                                                        <img alt="" src="img/logo_pakym.png" width="180px">
                                                    </div>
                                                    <div class="onboarding-content with-gradient">
                                                        <h4 class="onboarding-title">
                                                            Tambah Data Kategori Berita
                                                        </h4>
                                                        <div class="onboarding-text">
                                                            Kategori Berita Pengelolaan Panti Asuhan PAKYM Surakarta
                                                        </div>
                                                        <form id="formValidate" name='form' method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-sm-12" align="left">
                                                                    <div class="form-group">
                                                                        <label for="">Nama Kategori</label>
                                                                        <input class="form-control" data-error="Data harus diisi" required="required" placeholder="Nama Kategori" type="text" name="namakategoriberita" value="">
                                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group" align='left'>
                                                                        <!-- <button class="btn btn-outline-primary" type="button" name="button">Update Azas Panti Asuhan</button> -->
                                                                        <input class="btn btn-primary" type="submit" name="submit" value="Tambah Data">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <?php
                                                        $s = "select max(id_kategoriberita) 'max' from kategori_berita";
                                                        $qs = mysqli_query($conn, $s);
                                                        $rv = mysqli_fetch_array($qs);
                                                        $id_kategoriberita = $rv['max'];
                                                        $id_kategoriberita = $id_kategoriberita + 1;
                                                        $id_kategoriberita_en = md5(md5('smp') . $id_kategoriberita);
                                                        $namakategori = $_POST['namakategoriberita'];
                                                        $submit      = $_POST['submit'];

                                                        if ($submit) {
                                                            $sql = "INSERT INTO kategori_berita (id_kategoriberita,id_kategoriberita_en,nama_kategoriberita) VALUES('$id_kategoriberita','$id_kategoriberita_en','$namakategori')";
                                                            $run = mysqli_query($conn, $sql);
                                                            if ($run) {
                                                                ?>
                                                                <script type="text/javascript">
                                                                    alert('Data Kategori Berita Berhasil Ditambahkan');
                                                                    document.location = '?page=kategoriberita';
                                                                </script>
                                                            <?php

                                                        }
                                                    }

                                                    ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                        <thead>
                                            <tr align="center">
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Kategori</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Nama Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <!-- VIEW DATA KATEGORI BERITA -->
                                            <?php
                                            $no = 1;
                                            $sql = "SELECT * FROM kategori_berita";
                                            $run = mysqli_query($conn, $sql);
                                            while ($data = mysqli_fetch_array($run)) {
                                                echo "
                                                    <tr align='center'>
                                                        <td>$no</td>
                                                        <td>$data[nama_kategoriberita]</td>
                                                        <td>
                                                            <a href='?page=updkategoriberita&upd=$data[id_kategoriberita_en]'><button class='btn btn-outline-primary'>Edit</button></a>
                                                            <a href='?page=delkategoriberita&del=$data[id_kategoriberita_en]' onClick='return confirmDelete()'><button class='btn btn-outline-danger'>Hapus</button></a>
                                                            </td>
                                                    </tr>";
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>