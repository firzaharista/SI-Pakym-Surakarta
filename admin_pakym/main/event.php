<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>Event</span>
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
        if (confirm("Hapus Data Event Personalia ?")) {
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
                        Data Event Panti Asuhan
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA EVENT PANTI ASUHAN</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Event Panti Asuhan Keluarga Yatim Muhammadiyah Surakarta</p>
                                </div>
                                <div class="form-group" align='center'>
                                    <a href="?page=addevent"><input class="btn btn-primary" type="submit" name="submit" value="Tambah Data Event"></a>
                                </div>
                                <?php
                                if (isset($_POST['submit'])) {
                                    ?>
                                    <script type="text/javascript">
                                        document.location = "?page=addevent";
                                    </script>
                                <?php

                            }
                            ?>
                                <div class="table-responsive">
                                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                        <thead>
                                            <tr align="center">
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Foto</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kategori</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Waktu</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>Foto</th>
                                                <th>Kategori</th>
                                                <th>Waktu</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <!-- VIEW DATA EVENT -->
                                            <?php
                                            $no = 1;
                                            $sql = "SELECT * FROM event, kategori_event WHERE event.id_kategorievent_en = kategori_event.id_kategorievent_en order by id_event DESC";
                                            $run = mysqli_query($conn, $sql);
                                            while ($data = mysqli_fetch_array($run)) {
                                                $tgl_mulai = date("d-m-Y", strtotime($data['waktu_mulai']));
                                                $tgl_akhir = date("d-m-Y", strtotime($data['waktu_akhir']));
                                                echo "
                                                    <tr align='center'>
                                                        <td>$no</td>
                                                        <td>$data[nama_event]</td>
                                                        <td>
                                                            <img src='../../images/event/$data[foto_event]' width='100' >
                                                        </td>   
                                                        <td>$data[nama_kategorievent]</td>
                                                        <td>$tgl_mulai sampai $tgl_akhir</td>
                                                        <td>
                                                            <a href='?page=detailevent&detail=$data[id_event_en]'><input type='button' class='btn btn-outline-success' value='Detail'></a>
                                                            <a href='?page=updevent&upd=$data[id_event_en]'><input type='button' class='btn btn-outline-primary' value='Edit'></a>
                                                            <a href='?page=delevent&del=$data[id_event_en]' onClick='return confirmDelete()'><input type='button' class='btn btn-outline-danger' value='Hapus'></a>
                                                        </td>
                                                    </tr>";
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>