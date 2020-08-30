        <section class="no-padding sh-company-history">
            <div class="sub-header ">
                <h3>SUSUNAN PERSONALIA</h3>
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-home"></i>Tentang Kami</a>
                    </li>
                    <li class="active">Susunan Personalia</li>
                </ol>
            </div>
        </section>
        <!-- /Sub HEader -->

        <section class="bg-case-h9">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="title-block title-contact">
                            <h3>Susunan Personalia</h3>
                            <span class="bottom-title"></span> <br>
                            <p>Susunan Personalia merupakan suatu bagan struktur organisasi dari PAKYM Surakarta</p>
                        </div>
                        <div class="list-job-warp">
                            <div class="table-warp">
                                <div class="table-responsive">
                                    <table class="table table-hover table-reset">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $sql = "SELECT * FROM susunan,jabatan WHERE susunan.id_jabatan = jabatan.id_jabatan order by id_susunan DESC";
                                            $run = mysqli_query($conn, $sql);
                                            while ($c = mysqli_fetch_array($run)) {
                                                echo "
                                                    <tr>
                                                        <td>$no</td>
                                                        <td>$c[nama]</td>
                                                        <td>$c[namajabatan]</td>
                                                    </tr>";
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    include 'sidebar-right.php';
                    ?>
                </div>
            </div>
        </section>