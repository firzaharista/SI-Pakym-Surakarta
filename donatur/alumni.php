<section class="no-padding sh-company-history">
    <div class="sub-header ">
        <h3>DATA ALUMNI PAKYM</h3>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-user"></i>Anak Asuh</a>
            </li>
            <li>
                <a href="#">Alumni</a>
            </li>
            <li class="active">Data Alumni</li>
        </ol>
    </div>
</section>

<!-- /Why Us -->

<section class="bg-case-h9">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-offset-1">
                <div class="title-block title-contact">
                    <h3>Data Alumni PAKYM Surakarta</h3>
                    <span class="bottom-title"></span>
                </div>
                <div class="list-job-warp">
                    <div class="table-warp">
                        <div class="table-responsive">
                            <table class="table table-hover table-reset">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Tahun Masuk</th>
                                        <th>Tahun Keluar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $sql = "SELECT * FROM alumni WHERE status_alumni = 'Sudah Diverifikasi' order by waktu_alumni ASC";
                                    $run = mysqli_query($conn, $sql);
                                    while ($e = mysqli_fetch_array($run)) {
                                        // $tgl = date("d-m-Y", strtotime($e['tanggal_lahir']));
                                        echo "
                                            <tr align='center'>
                                                <td>$no</td>
                                                <td>$e[nama]</td>
                                                <td>$e[tahun_masuk]</td>
                                                <td>$e[tahun_keluar]</td>
                                                <td>
                                                    <a href='?page=detail-alumni&detail=$e[id_alumni_en]'><button class='btn btn'>Detail</button></a>
                                                </td>
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

        </div>
    </div>
    </div>
</section>