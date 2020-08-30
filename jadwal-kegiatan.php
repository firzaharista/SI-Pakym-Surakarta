        <section class="no-padding sh-company-history">
            <div class="sub-header ">
                <h3>JADWAL KEGIATAN</h3>
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-home"></i>Tentang Kami</a>
                    </li>
                    <li class="active">Jadwal Kegiatan</li>
                </ol>
            </div>
        </section>

        <!-- /Why Us -->

        <section class="bg-case-h9">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-block title-contact">
                            <h3>Jadwal Kegiatan</h3>
                            <span class="bottom-title"></span>
                        </div>
                        <div class="list-job-warp">
                            <div class="table-warp">
                                <div class="table-responsive">
                                    <table class="table table-hover table-reset">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kelas</th>
                                                <th>Waktu</th>
                                                <th>Kegiatan 1</th>
                                                <th>Kegiatan 2</th>
                                                <th>Kegiatan 3</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $sql = "SELECT * FROM kegiatan, kegiatan_has_waktu, waktu,kelas WHERE kegiatan.id_kegiatan = kegiatan_has_waktu.id_kegiatan AND kegiatan_has_waktu.id_kategoriwaktu = waktu.id_kategoriwaktu AND kegiatan.id_kelas = kelas.id_kelas group by kegiatan.id_kegiatan order by nama_kelas ASC";
                                            $query = mysqli_query($conn, $sql);
                                            while ($data = mysqli_fetch_array($query)) {
                                                echo "
                                                <tr align='center'>
                                                    <td>$no</td>
                                                    <td>$data[nama_kelas]</td>
                                                    <td>";
                                                $sql1 = "SELECT kegiatan_has_waktu.id_kegiatan, waktu.nama_waktu FROM kegiatan, kegiatan_has_waktu, waktu WHERE kegiatan.id_kegiatan = kegiatan_has_waktu.id_kegiatan AND kegiatan_has_waktu.id_kategoriwaktu = waktu.id_kategoriwaktu AND kegiatan.id_kegiatan = $data[id_kegiatan] order by waktu_post DESC";
                                                $query1 = mysqli_query($conn, $sql1);
                                                while ($data1 = mysqli_fetch_array($query1)) {
                                                    if ($data['kegiatan.id_kegiatan'] == $data1['kegiatan_has_waktu.id_kegiatan']) {
                                                        echo "$data1[nama_waktu], ";
                                                    }
                                                }
                                                echo "</td>
                                                        <td>$data[kegiatan1]</td>
                                                        <td>$data[kegiatan2]</td>
                                                        <td>$data[kegiatan3]</td>
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