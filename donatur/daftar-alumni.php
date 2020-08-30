<section class="no-padding sh-company-history">
    <div class="sub-header ">
        <h3>DAFTAR ALUMNI</h3>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-user"></i>Anak Asuh</a>
            </li>
            <li>
                <a href="#">Alumni</a>
            </li>
            <li class="active">Daftar Alumni</li>
        </ol>
    </div>
</section>

<section class="bg-case-h9">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="group-title-btn">
                    <div class="title-block">
                        <span class="top-title "></span>
                        <h3>Daftar Alumni PAKYM Surakarta</h3>
                        <p class="sub-title">Bagi alumni anak asuh PAKYM Surakarta, Silahkan mengisi form berikut ini. Data Penting tidak akan kami publikasikan.</p>
                        <span class="bottom-title"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="no-padding bg-case-h9">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="warp-full-width offer-h3-warp section-fix-position-h3">
                    <?php
                    $se = "select max(id_alumni) 'max' from alumni";
                    $qs  = mysqli_query($conn, $se);
                    $rc = mysqli_fetch_array($qs);
                    $id_alumni    = $rc['max'];
                    $id_alumni    = $id_alumni + 1;
                    $id_alumni_en = md5(md5('smp') . $id_alumni);

                    $nama_alumni   = trim(mysqli_real_escape_string($conn, $_POST['nama_alumni']));
                    $email         = trim(mysqli_real_escape_string($conn, $_POST['email']));
                    $tempat_lahir  = trim(mysqli_real_escape_string($conn, $_POST['tempat_lahir']));
                    $tanggal_lahir = trim(mysqli_real_escape_string($conn, $_POST['tanggal_lahir']));
                    $telp          = trim(mysqli_real_escape_string($conn, $_POST['telepon']));
                    $alamat        = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
                    $tahun_masuk   = trim(mysqli_real_escape_string($conn, $_POST['tahun_masuk']));
                    $tahun_keluar  = trim(mysqli_real_escape_string($conn, $_POST['tahun_keluar']));
                    $pekerjaan     = trim(mysqli_real_escape_string($conn, $_POST['pekerjaan']));
                    $pesankesan    = trim(mysqli_real_escape_string($conn, $_POST['pesankesan']));
                    // $submit = $_POST['submit'];

                    if (isset($_POST['submit'])) {
                        $sql = "insert into alumni(id_alumni,id_alumni_en,nama,email,tempat_lahir,tanggal_lahir,telepon,alamat,tahun_masuk,tahun_keluar,pekerjaan,pesan_kesan,status_alumni) 
                        values('$id_alumni','$id_alumni_en','$nama_alumni','$email','$tempat_lahir','$tanggal_lahir','$telp','$alamat','$tahun_masuk','$tahun_keluar','$pekerjaan','$pesankesan','Belum Diverifikasi')";
                        $run = mysqli_query($conn, $sql);
                        if ($run) {
                            ?>
                            <div class="alert alert-success alert-dismissible fade in" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true"> &times;</span></button><strong>Data Alumni Berhasil didaftarkan !</strong> Terima kasih sudah mendaftar sebagai alumni. PAKYM Surakarta akan memverifikasi data alumni anda . . .
                            </div>
                        <?php } else { ?>
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true"> &times;</span></button><strong>Data Alumni Gagal Didaftarkan !</strong> Silahkan lakukan pendaftaran ulang . . .
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <form class="form-contact-warp form-apply-job cb-form" id="formValidate" action="<?php $_SERVER['PHP_SELF']; ?>" name='form' method="post" enctype="multipart/form-data">
                        <div class="col-md-4">
                            <input class="form-control" value="" required="required" title="" placeholder="Nama Lengkap*" type="text" name='nama_alumni'>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" value="" required="required" title="" placeholder="Email*" type="text" name='email'>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" value="" required="required" title="" placeholder="Telepon*" type="text" name='telepon'>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" value="" required="required" title="" placeholder="Tempat Lahir*" type="text" name='tempat_lahir'>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" value="" required="required" title="" placeholder="Tanggal Lahir ( bln/tgl/thn )*" type="text" name='tanggal_lahir'>
                            <p></p>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" value="" required="required" title="" placeholder="Pekerjaan*" type="text" name='pekerjaan'>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" value="" required="required" title="" placeholder="Tahun Masuk*" type="text" name='tahun_masuk'>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" value="" required="required" title="" placeholder="Tahun Keluar*" type="text" name='tahun_keluar'>
                        </div>
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea id="textarea" class="form-control" rows="3" required="required" placeholder="Alamat*" name='alamat'></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea id="textarea" class="form-control" rows="5" required="required" placeholder="Pesan dan Kesan*" name='pesankesan'></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name='submit' class="btn-sub-color btn-apply">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>