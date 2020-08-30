<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
    include "../.private/koneksi.php";
    // include "../.private/auth-donatur.php";

    $nama = $_SESSION['nama'];
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Firza Affan Harista, Debby Kusuma Wardhani, Lathifatun Nathiqah">
    <meta name="owner" content="PAKYM Surakarta">
    <meta name="url" content="http://www.pakymsurakarta.com/">
    <meta name="rating" content="general">
    <meta name="identifier-URL" content="http://www.pakymsurakarta.com/">
    <meta name="keywords" content="PAKYM Surakarta, Panti, Asuhan, Panti Asuhan, Surakarta, Donasi, Anak Yatim, Piatu, Panti Asuhan Surakarta, Panti Asuhan Keluarga Yatim Muhammadiyah Surakarta, Muhammadiyah, Yatim">
    <meta name="copyright" content="PAKYM Surakarta">
    <meta itemprop="name" content="PAKYM Surakarta">
    <meta itemprop="description" content="PAKYM Surakarta adalah Panti Asuhan Keluarga Muhammadiyah Surakarta yang berdiri sejak tahun 1930 dan berlokasi di jantung Kota Solo serta berada pada Jalan Slamet Riyadi 441">
    <?php
    $getInfo = mysqli_query($conn, "SELECT * FROM informasi");
    $a       = mysqli_fetch_assoc($getInfo);
    ?>
    <title><?php echo $a['judulweb']; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Fonts and Icon-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&subset=devanagari,latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../fonts/IcoMoon/icomoon.css">
    <link rel="stylesheet" href="../fonts/linearicon/style.css">
    <link href="../icon_fonts_assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Mobile Menu -->
    <link type="text/css" rel="stylesheet" href="../css/jquery.mmenu.all.css" />
    <!-- OWL CAROUSEL
			================================================== -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <!-- SELECTBOX
			================================================== -->
    <link rel="stylesheet" type="text/css" href="../css/fancySelect.css" media="screen" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="../revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="../revolution/css/layers.css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="../revolution/css/navigation.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="../style.css">

    <!-- Favicons
			================================================== -->
    <link rel="shortcut icon" href="../images/logo/<?php echo $a['favicon']; ?>">
</head>

<body class="royal_loader">
    <!-- royal_loader -->
    <div id="page">
        <!-- Mobile Menu -->
        <nav id="menu">
            <ul>
                <li class="active">
                    <a href="?page=beranda">Beranda</a>
                </li>
                <li><a>Tentang Kami</a>
                    <ul>
                        <li><a href="?page=sejarah"><span>Sejarah</span></a></li>
                        <li><a href="?page=azas"><span>Azas-Azas</span></a></li>
                        <li><a href="?page=visi-misi"><span>Visi Misi</span></a></li>
                        <li><a href="?page=tujuan"><span>Tujuan</span></a></li>
                        <li><a href="?page=fasilitas"><span>Fasilitas</span></a></li>
                        <li><a href="?page=program"><span>Program</span></a></li>
                        <li><a href="?page=susunan-personalia"><span>Susunan Personalia</span></a></li>
                        <li><a href="jadwal-kegiatan"><span>Jadwal Kegiatan</span></a></li>
                        <li><a href="?page=kontak"><span>Kontak Kami</span></a></li>
                    </ul>
                </li>
                <li>
                    <a>Media</a>
                    <ul>
                        <li><a href="?page=berita">Berita</a></li>
                        <li><a href="?page=event">Event</a></li>
                        <li><a href="?page=galeri">Galeri</a></li>
                    </ul>
                </li>

                <li>
                    <a>Anak Asuh</a>
                    <ul>
                        <li><a href="?page=anak-asuh">Data Anak Asuh</a></li>
                        <li><a href="?page=ketentuan">Ketentuan</a></li>
                    </ul>
                </li>
                <li>
                    <a>Pendaftaran</a>
                    <ul>
                        <li><a href="?page=pendaftaran-anak-asuh">Anak Asuh</a></li>
                        <li><a>Alumni</a>
                            <ul>
                                <li><a href="?page=alumni">Data Alumni</a></li>
                                <li><a href="?page=daftar-alumni">Daftar Alumni</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a>Panduan Donasi</a>
                    <ul>
                        <li> <a href="?page=panduan-donasi-online"><span>Donasi Online</span></a></li>
                        <li> <a href="?page=panduan-donasi-offline"><span>Donasi Offline</span></a></li>
                        <li> <a href="?page=panduan-donasi-barang"><span>Donasi Barang</span></a></li>
                    </ul>
                </li>

                <li><a href="?page=donasi">Donasi Sekarang</a></li>
            </ul>
        </nav>
        <!-- /Mobile Menu -->
        <header class="header-h2">
            <div class="topbar tb-dark tb-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="topbar-home2">
                                <div class="tb-contact tb-iconbox">
                                    <?php
                                    $getInfo = mysqli_query($conn, "SELECT * FROM informasi");
                                    $c          = mysqli_fetch_array($getInfo);
                                    ?>
                                    <ul>
                                        <li><a href="https://goo.gl/maps/aUaEHEVbvsq"><i class="fa fa-map-marker" aria-hidden="true"></i><span><i>Lokasi</i><?php echo $c['alamat']; ?></span></a></li>
                                        <li><a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=<?php echo $a['email']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i><span><i>Email</i> <?php echo $c['email']; ?></span></a></li>
                                        <li><a href="?page=konfirmasi-pembayaran"><i class="fa fa-handshake-o" aria-hidden="true"></i><span><i data-toggle="tooltip" data-placement="bottom" class="" title="Silahkan lakukan konfirmasi pembayaran donasi" aria-hidden="true">Konfirmasi Pembayaran</i></span></a></li>
                                    </ul>
                                </div>
                                <div class="tb-social-lan language">
                                    <ul>
                                        <li>
                                            <a href="?page=profil-donatur" data-toggle="tooltip" data-placement="bottom" class="" title="Akun" aria-hidden="true"><?php echo $nama; ?></a>
                                        </li>
                                        <li class="fa fa-user"></li>
                                        <li><a href="?page=auth-logout" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /topbar -->
            <div class="nav-warp nav-warp-h2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navi-warp-home-2">
                                <a href="index.php" class="logo"><img src="../images/logo/<?php echo $a['logo']; ?>" height='150' width='180' class="img-responsive" alt="Image"></a>
                                <a href="#menu" class="btn-menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></a>

                                <nav>
                                    <ul class="navi-level-1 active-subcolor">
                                        <li class="active">
                                            <a href="?page=beranda">Beranda</a>
                                        </li>
                                        <li><a href="#">Tentang Kami</a>
                                            <ul class="navi-level-2">
                                                <li><a href="?page=sejarah"><span>Sejarah</span></a></li>
                                                <li><a href="?page=azas"><span>Azas-Azas</span></a></li>
                                                <li><a href="?page=visi-misi"><span>Visi Misi</span></a></li>
                                                <li><a href="?page=tujuan"><span>Tujuan</span></a></li>
                                                <li><a href="?page=fasilitas"><span>Fasilitas</span></a></li>
                                                <li>
                                                    <a href="?page=program">Program</a></li>
                                                <li><a href="?page=susunan-personalia"><span>Susunan Personalia</span></a></li>
                                                <li><a href="?page=jadwal-kegiatan"><span>Jadwal Kegiatan</span></a></li>
                                                <li><a href="?page=kontak">Kontak Kami</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Media</a>
                                            <ul class="navi-level-2">
                                                <li><a href="?page=berita">Berita</a></li>
                                                <li><a href="?page=event">Event</a></li>
                                                <li><a href="?page=galeri">Galeri</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Anak Asuh</a>
                                            <ul class="navi-level-2">
                                                <li><a href="?page=anak-asuh">Data Anak Asuh</a>
                                                </li>
                                                <li><a href="?page=ketentuan">Ketentuan</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a>Pendaftaran</a>
                                            <ul class="navi-level-2">
                                                <li><a href="?page=pendaftaran-anak-asuh">Anak Asuh</a></li>
                                                <li><a href="#">Alumni</a>
                                                    <ul class="navi-level-3">
                                                        <li><a href="?page=alumni">Data Alumni</a></li>
                                                        <li><a href="?page=daftar-alumni">Daftar Alumni</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Panduan Donasi</a>
                                            <ul class="navi-level-2">
                                                <li><a href="?page=panduan-donasi-online">Donasi Online</a></li>
                                                <li><a href="?page=panduan-donasi-offline">Donasi Offline</a></li>
                                                <li><a href="?page=panduan-donasi-barang">Donasi Barang</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href='?page=donasi'><button class="ot-btn btn-border-main-color">Donasi Sekarang</button></a>
                                        </li>
                                        <!-- <a href="cases.html" class="ot-btn btn-border-dark-color pull-right">View All</a> -->
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /nav -->
        </header>
        <!-- /End Header 1 Warp -->
        <?php
        $page = $_GET['page'];
        $aksi = $_GET['aksi'];

        // MENU
        if ($page == "beranda") {
            if ($aksi == "") {
                include "beranda.php";
            }
        } elseif ($page == "") {
            if ($aksi == "") {
                include "beranda.php";
            }
        } elseif ($page == "sejarah") {
            if ($aksi == "") {
                include "sejarah.php";
            }
        } elseif ($page == "azas") {
            if ($aksi == "") {
                include "azas.php";
            }
        } elseif ($page == "visi-misi") {
            if ($aksi == "") {
                include "visi-misi.php";
            }
        } elseif ($page == "tujuan") {
            if ($aksi == "") {
                include "tujuan.php";
            }
        } elseif ($page == "fasilitas") {
            if ($aksi == "") {
                include "fasilitas.php";
            }
        } elseif ($page == "program") {
            if ($aksi == "") {
                include "program.php";
            }
        } elseif ($page == "susunan-personalia") {
            if ($aksi == "") {
                include "susunan-personalia.php";
            }
        } elseif ($page == "jadwal-kegiatan") {
            if ($aksi == "") {
                include "jadwal-kegiatan.php";
            }
        } elseif ($page == "kontak") {
            if ($aksi == "") {
                include "kontak.php";
            }
        } elseif ($page == "berita") {
            if ($aksi == "") {
                include "berita.php";
            }
        } elseif ($page == "event") {
            if ($aksi == "") {
                include "event.php";
            }
        } elseif ($page == "galeri") {
            if ($aksi == "") {
                include "galeri.php";
            }
        } elseif ($page == "anak-asuh") {
            if ($aksi == "") {
                include "anak-asuh.php";
            }
        } elseif ($page == "detail-anakasuh") {
            if ($aksi == "") {
                include "detail-anakasuh.php";
            }
        } elseif ($page == "ketentuan") {
            if ($aksi == "") {
                include "ketentuan.php";
            }
        } elseif ($page == "alumni") {
            if ($aksi == "") {
                include "alumni.php";
            }
        } elseif ($page == "daftar-alumni") {
            if ($aksi == "") {
                include "daftar-alumni.php";
            }
        } elseif ($page == "detail-alumni") {
            if ($aksi == "") {
                include "detail-alumni.php";
            }
        } elseif ($page == "pendaftaran-anak-asuh") {
            if ($aksi == "") {
                include "pendaftaran-anak-asuh.php";
            }
        } elseif ($page == "panduan-donasi-online") {
            if ($aksi == "") {
                include "panduan-donasi-online.php";
            }
        } elseif ($page == "panduan-donasi-offline") {
            if ($aksi == "") {
                include "panduan-donasi-offline.php";
            }
        } elseif ($page == "panduan-donasi-barang") {
            if ($aksi == "") {
                include "panduan-donasi-barang.php";
            }
        } elseif ($page == "donasi") {
            if ($aksi == "") {
                include "donasi.php";
            }
        } elseif ($page == "donasi-online") {
            if ($aksi == "") {
                include "donasi-online.php";
            }
        } elseif ($page == "donasi-offline") {
            if ($aksi == "") {
                include "donasi-offline.php";
            }
        } elseif ($page == "donasi-barang") {
            if ($aksi == "") {
                include "donasi-barang.php";
            }
        } elseif ($page == "donasi-sukses") {
            if ($aksi == "") {
                include "donasi-sukses.php";
            }
        } elseif ($page == "profil-donatur") {
            if ($aksi == "") {
                include "profil-donatur.php";
            }
        } elseif ($page == "konfirmasi-pembayaran") {
            if ($aksi == "") {
                include "konfirmasi-pembayaran.php";
            }
        } elseif ($page == "konfirmasi") {
            if ($aksi == "") {
                include "konfirmasi.php";
            }
        } elseif ($page == "invoice-donasi") {
            if ($aksi == "") {
                include "invoice-donasi.php";
            }
        } elseif ($page == "auth-logout") {
            if ($aksi == "") {
                include "../.private/auth-logout.php";
            }
        } elseif ($page == "konfirmasi-sukses") {
            if ($aksi == "") {
                include "konfirmasi-sukses.php";
            }
        } elseif ($page == "rekening-bank") {
            if ($aksi == "") {
                include "rekening-bank.php";
            }
        }
        // UPDATE DATA
        elseif ($page == "upd-profil-donatur") {
            if ($aksi == "") {
                include "upd-profil-donatur.php";
            }
        }
        // LIHAT / DETAIL
        elseif ($page == "lihat-berita") {
            if ($aksi == "") {
                include "lihat-berita.php";
            }
        } elseif ($page == "lihat-event") {
            if ($aksi == "") {
                include "lihat-event.php";
            }
        } else {
            echo '<script type="text/javascript">window.location.href="./";</script>';
        }
        ?>

        <section class="bg-subcr-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="subcribe-warp">
                            <form class="form-inline form-subcri">
                                <div class="form-group">
                                    <label for="exampleInputName2"><br>Hubungi Kami Jika Ada <span>Pertanyaan</span></label>
                                    <p>Silahkan hubungi kami jika ada pertanyaan, informasi yang kurang jelas maupun kepentingan lainnya yang bersangkutan</p>
                                </div>
                                <!-- <div>
                                    <button><a href="#" class="ot-btn btn-border-white-color">Hubungi Kami</a></button>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Subcribe -->

        <!-- Footer -->
        <footer class="f-bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-footer widget-footer-text">
                            <div class="title-block title-on-dark title-xs">
                                <h4>Tentang PAKYM</h4>
                                <span class="bottom-title"></span>
                            </div>
                            <p><?php echo $a['deskripsi']; ?></p>
                            <ul class="widget widget-footer widget-footer-social-1">
                                <li><a href="<?php echo $a['fb']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=pakymsurakarta@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-footer widget-footer-hours">
                            <div class="title-block title-on-dark title-xs">
                                <h4>Jam Kerja</h4>
                                <span class="bottom-title"></span>
                            </div>
                            <p>Kami bekerja sepanjang hari dalam seminggu, Silakan hubungi kami untuk setiap pertanyaan.</p>
                            <dt>Jam Kerja :</dt>
                            <dl class="dl-horizontal dl-working-hours">
                                <dt>Senin-Sabtu</dt>
                                <dd>8.00 am - 14.00 pm</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-footer widget-footer-icon-link">
                            <div class="title-block title-on-dark title-xs">
                                <h4>Hubungi Kami</h4>
                                <span class="bottom-title"></span>
                            </div>
                            <ul class="icon-link-list-icon">
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $a['alamat']; ?></li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a><?php echo $a['email']; ?></a></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a><?php echo $a['telepon']; ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-footer widget-footer-list-link">
                            <div class="title-block title-on-dark title-xs">
                                <h4>Quick Links</h4>
                                <span class="bottom-title"></span>
                            </div>
                            <ul>
                                <li><a href="?page=berita">Berita</a></li>
                                <li><a href="?page=event">Event</a></li>
                                <li><a href="?page=galeri">Galeri</a></li>
                                <li><a href="?page=anakasuh">Anak Asuh</a></li>
                                <li><a href="?page=donasi">Donasi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->
        <section class="no-padding cr-h1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-warp cr-1">
                            <div class="copyright-text">
                                <p><?php echo $a['footer']; ?></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /copyright -->
    </div>
    <!-- /page -->
    <a id="to-the-top" class="fixbtt bg-hover-theme"><i class="fa fa-chevron-up"></i></a>
    <!-- Back To Top -->
    <!-- Switcher -->
    <!-- End Switcher -->
    <!-- SCRIPT -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="../bower_components/moment/moment.js"></script>
    <script src="../bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="../bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="../bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="../bower_components/ckeditor/ckeditor.js"></script>
    <script src="../bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="../bower_components/dropzone/dist/dropzone.js"></script>
    <script src="../bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <!-- <script src="../js/main.js?version=4.4.0"></script> -->
    <script src="../bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="../bower_components/tether/dist/js/tether.min.js"></script>
    <script src="../bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="../bower_components/bootstrap/js/dist/util.js"></script>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="../bower_components/bootstrap/js/dist/button.js"></script>
    <script src="../bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="../bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="../bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="../bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="../bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="../bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="../bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/vendor/bootstrap.js"></script>
    <script src="../js/plugins/jquery.waypoints.min.js"></script>
    <!-- Sticky -->
    <script src="../js/plugins/jquery.sticky-kit.min.js"></script>
    <!-- <script src="js/plugins/sticky.js"></script> -->
    <!-- Mobile Menu
			================================================== -->
    <script type="text/javascript" src="../js/plugins/jquery.mmenu.all.min.js"></script>
    <script type="text/javascript" src="../js/plugins/mobilemenu.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="../revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="../revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="../js/plugins/slider-home-1.js"></script>
    <!-- Initializing Owl Carousel
			================================================== -->
    <script src="../js/plugins/owl.carousel.js"></script>
    <script src="../js/plugins/owl.js"></script>
    <!-- PreLoad
			================================================== -->
    <script type="text/javascript" src="../js/plugins/royal_preloader.js"></script>
    <!-- Parallax -->
    <script src="../js/plugins/jquery.parallax-1.1.3.js"></script>
    <!-- <script src="js/plugins/parallax.js"></script> -->
    <!-- Fancy Select -->
    <script src="../js/plugins/fancySelect.js"></script>
    <script src="../js/plugins/lang-select.js"></script>
    <script src="../js/plugins/cb-select.js"></script>
    <!-- Initializing Counter Up
			================================================== -->
    <script src="../js/plugins/jquery.counterup.min.js"></script>
    <script src="../js/plugins/counterup.js"></script>
    <!-- Initializing the isotope
	    ================================================== -->
    <script src="../js/plugins/isotope.pkgd.min.js"></script>
    <script src="../js/plugins/custom-isotope.js"></script>
    <!-- Global Js
			================================================== -->
    <script src="../js/plugins/template.js"></script>
    <!-- Demo Switcher
			================================================== -->
    <!-- <script src="switcher/demo.js"></script> -->
</body>

</html>