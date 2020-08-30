<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>Pesan Kontak</span>
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
        if (confirm("Hapus Data Pesan ?")) {
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
                        Pesan Kontak Website
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>DATA PESAN KONTAK WEBSITE</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Pesan Kontak Website Panti Asuhan PAKYM Surakarta</p>
                                </div>
                                <div class="form-group" align='center'>
                                </div>
                                <div class="table-responsive">
                                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                        <thead>
                                            <tr align="center">
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subjek</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Subjek</th>>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $sql = "SELECT * FROM pesan_kontak order by id_pesan DESC";
                                            $run = mysqli_query($conn, $sql);
                                            while ($e = mysqli_fetch_array($run)) {
                                                echo "
                                                    <tr align='center'>
                                                        <td>$no</td>
                                                        <td>$e[nama]</td>
                                                        <td>$e[email]</td>
                                                        <td>$e[subjek]</td>
                                                        <td>
                                                            <a href='?page=detailpesankontak&detail=$e[id_pesan]'><input type='button' class='btn btn-outline-success' value='Detail'></a>
											                <a href='?page=delpesankontak&del=$e[id_pesan]' onClick='return confirmDelete()'><input type='button' class='btn btn-outline-danger' value='Hapus'></a>
                                                        </td>

                                                    </tr>";
                                                $no++;
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>