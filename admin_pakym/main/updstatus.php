<!--------------------
          START - Breadcrumbs
          -------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="adm.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span>UPDATE STATUS</span>
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
                        UPDATE DATA STATUS
                    </h6>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <!-- SELECT DATA JABATAN -->
                            <?php

                            $upd = $_GET['upd'];
                            $sql = "SELECT * FROM status WHERE id_status='$upd'";
                            $run = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_array($run);
                            ?>
                            <form id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                                <h4 class="form-header" align='center'>
                                    <u>UPDATE DATA STATUS</u>
                                </h4>
                                <div class="form-desc" align='center'>
                                    <p>Status Anak Asuh Panti Asuhan PAKYM Surakarta</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Status</label>
                                    <input class="form-control" data-error="Data harus diisi" placeholder="Nama Status" required="required" type="text" name="namastatus" value="<?php echo $data['nama_status']; ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group" align=''>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Data">
                                </div>
                            </form>

                            <!-- UPDATE DATA STATUS -->
                            <?php

                            $status = $_POST['namastatus'];
                            $submit = $_POST['submit'];

                            if ($submit) {
                                $sql = "update status set nama_status='$status' where id_status='$upd' ";

                                $query = mysqli_query($conn, $sql);
                                if ($query) {
                                    ?>
                            <script>
                                alert("Data Status Berhasil Diubah");
                                document.location = '?page=status';
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