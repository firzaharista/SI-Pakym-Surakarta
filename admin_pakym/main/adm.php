<!DOCTYPE html>
<html>

<head>
    <?php
    include "../../.private/koneksi.php";
    // include "../../.private/auth_adm.php";

    $nama = $_SESSION['nama'];
    ?>
    <?php
    $sql1 = "SELECT * FROM informasi";
    $run  = mysqli_query($conn, $sql1);
    $z    = mysqli_fetch_array($run);
    ?>
    <title>Admin Dashboard - PAKYM Surakarta</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Firza Affan Harista, Debby Kusuma Wardhani, Lathifatun Nathiqah" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="owner" content="PAKYM Surakarta">
    <meta name="url" content="http://www.pakymsurakarta.com/">
    <meta name="rating" content="general">
    <meta name="identifier-URL" content="http://www.pakymsurakarta.com/">
    <meta name="copyright" content="PAKYM Surakarta">
    <meta itemprop="name" content="PAKYM Surakarta">
    <link href="../../images/logo/<?php echo $z['favicon']; ?>" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- Data Table-->
    <link rel="stylesheet" type="text/css" href="bower_components/datatable/datatables.min.css" />
    <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="css/main.css?version=4.4.0" rel="stylesheet">
    <link href="icon_fonts_assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="icon_fonts_assets/entypo/style.css" rel="stylesheet">
    <link href="icon_fonts_assets/batch-icons/style.css" rel="stylesheet">
    <link href="icon_fonts_assets/dashicons/dashicons.css" rel="stylesheet">
    <link href="icon_fonts_assets/dripicons/webfont.css" rel="stylesheet">
    <link href="icon_fonts_assets/feather/style.css" rel="stylesheet">
    <link href="icon_fonts_assets/eightyshades/style.css" rel="stylesheet">
    <link href="icon_fonts_assets/ligature-symbols/style.css" rel="stylesheet">
    <link href="icon_fonts_assets/foundation-icon-font/foundation-icons.css" rel="stylesheet">
    <link href="icon_fonts_assets/metrize-icons/style.css" rel="stylesheet">
    <link href="icon_fonts_assets/picons-social/style.css" rel="stylesheet">
    <link href="icon_fonts_assets/picons-thin/style.css" rel="stylesheet">
    <link href="icon_fonts_assets/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="icon_fonts_assets/themefy/themify-icons.css" rel="stylesheet">
    <link href="icon_fonts_assets/typicons/typicons.css" rel="stylesheet">
    <link href="icon_fonts_assets/weather-icons/css/weather-icons.min.css" rel="stylesheet">
    <!-- author  -->
    <!--Firza Affan Harista
        Debby Kusuma Wardani
        Lathifatun Nathiqah -->
</head>
<?php
$getAnakAsuh = "SELECT COUNT(*) AS total FROM anak_asuh";
$run = mysqli_query($conn, $getAnakAsuh);
$a    = mysqli_fetch_array($run);
?>

<?php
$getAdmin = "SELECT COUNT(*) AS total FROM user";
$run = mysqli_query($conn, $getAdmin);
$b    = mysqli_fetch_array($run);
?>

<?php
$getAdmin = "SELECT COUNT(*) AS total FROM daftar_masuk";
$run = mysqli_query($conn, $getAdmin);
$c    = mysqli_fetch_array($run);
?>


<body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
        <div class="search-with-suggestions-w">
            <div class="search-with-suggestions-modal">
                <div class="element-search">
                    <input class="search-suggest-input" placeholder="Pencarian . . ." type="text">
                    <div class="close-search-suggestions">
                        <i class="os-icon os-icon-x"></i>
                    </div>
                </div>
                <div class="search-suggestions-group">
                    <div class="ssg-header">
                        <div class="ssg-icon">
                            <div class="os-icon os-icon-box"></div>
                        </div>
                        <div class="ssg-name">
                            Anak Asuh
                        </div>
                        <div class="ssg-info">
                            Ada <?php echo "{$a['total']}"; ?>
                        </div>
                    </div>
                    <div class="ssg-content">
                        <div class="ssg-items ssg-items-boxed">
                        </div>
                    </div>
                </div>
                <div class="search-suggestions-group">
                    <div class="ssg-header">
                        <div class="ssg-icon">
                            <div class="os-icon os-icon-users"></div>
                        </div>
                        <div class="ssg-name">
                            Administrator
                        </div>
                        <div class="ssg-info">
                            Ada <?php echo "{$b['total']}"; ?>
                        </div>
                    </div>
                    <?php
                    $getAdmin = "SELECT * FROM user";
                    $run2 = mysqli_query($conn, $getAdmin);
                    while ($d = mysqli_fetch_array($run2)) {
                        ?>
                        <div class="ssg-content">
                            <div class="ssg-items ssg-items-list">
                                <a class="ssg-item">
                                    <div class="item-media" style="background-image: url(../../images/logo/<?php echo $z['favicon']; ?>)"></div>
                                    <div class="item-name">
                                        <?php echo $d['nama']; ?>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>
                <div class="search-suggestions-group">

                    <div class="ssg-header">
                        <div class="ssg-icon">
                            <div class="os-icon os-icon-folder"></div>
                        </div>
                        <div class="ssg-name">
                            Pendaftar
                        </div>
                        <div class="ssg-info">
                            Ada <?php echo "{$c['total']}"; ?>
                        </div>
                    </div>
                    <div class="ssg-content">

                        <div class="ssg-nothing-found">
                            <div class="icon-w">
                                <i class="os-icon os-icon-eye-off"></i>
                            </div>
                            <span>Kata yang anda maksud tidak ada. Silahkan ulangi lagi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layout-w">

            <?php
            $sql = "SELECT * FROM user";
            $run = mysqli_query($conn, $sql);
            $data = mysqli_fetch_array($run);
            ?>

            <!--------------------
        START - Mobile Menu
        -------------------->

            <div class="menu-mobile menu-activated-on-click color-scheme-dark">
                <div class="mm-logo-buttons-w">
                    <a class="mm-logo" href="adm.php"><img src="../../images/logo/<?php echo $z['favicon']; ?>"><span>PAKYM Surakarta</span></a>
                    <div class="mm-buttons">
                        <div class="content-panel-open">
                            <div class="os-icon os-icon-grid-circles"></div>
                        </div>
                        <div class="mobile-menu-trigger">
                            <div class="os-icon os-icon-hamburger-menu-1"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-and-user">
                    <div class="logged-user-w">
                        <div class="avatar-w">
                            <img alt="" src="img/logo_pakym.png">
                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">
                                <?php echo $nama; ?>
                            </div>
                            <div class="logged-user-role">
                                Administrator
                            </div>
                        </div>
                    </div>
                    <!--------------------
             START - Mobile Menu List
             -------------------->
                    <ul class="main-menu">
                        <li class="">
                            <a href="adm.php">
                                <div class="icon-w">
                                    <div class="fa fa-home"></div>
                                </div>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="?page=informasi">
                                <div class="icon-w">
                                    <div class="dripicons-information"></div>
                                </div>
                                <span>Informasi</span>
                            </a>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="fa fa-list-alt"></div>
                                </div>
                                <span>Tentang Kami</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=sejarah">Sejarah</a>
                                </li>
                                <li>
                                    <a href="?page=azas">Azas</a>
                                </li>
                                <li>
                                    <a href="?page=visimisi">Visi Misi</a>
                                </li>
                                <li>
                                    <a href="?page=tujuan">Tujuan</a>
                                </li>
                                <li>
                                    <a href="?page=fasilitas">Fasilitas</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="fa fa-id-card-o"></div>
                                </div>
                                <span>Susunan Personalia</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=jabatan">Data Jabatan</a>
                                </li>
                                <li>
                                    <a href="?page=susunan">Data Susunan Personalia</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="fa fa-newspaper-o"></div>
                                </div>
                                <span>Berita</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=kategoriberita">Kategori Berita</a>
                                </li>
                                <li>
                                    <a href="?page=berita">Data Berita</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="fa fa-calendar"></div>
                                </div>
                                <span>Event</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=kategorievent">Kategori Event</a>
                                </li>
                                <li>
                                    <a href="?page=event">Data Event</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="fa fa-picture-o"></div>
                                </div>
                                <span>Galeri</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=kategorigaleri">Kategori Galeri</a>
                                </li>
                                <li>
                                    <a href="?page=galeri">Data Galeri</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="?page=anakasuh">
                                <div class="icon-w">
                                    <div class="fa fa-id-card-o"></div>
                                </div>
                                <span>Anak Asuh</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=status">Status</a>
                                </li>
                                <li>
                                    <a href="?page=anakasuh">Data Anak Asuh</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="fa fa-tags"></div>
                                </div>
                                <span>Ketentuan Anak Asuh</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=tatatertib">Tata Tertib</a></a>
                                </li>
                                <li>
                                    <a href="?page=larangan">Larangan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a>
                                <div class="icon-w">
                                    <div class="fa fa-list-ul"></div>
                                </div>
                                <span>Pendaftaran</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=panduan_pendaftaran">Panduan Pendaftaran</a>
                                </li>
                                <li>
                                    <a href="?page=daftarmasuk">Daftar Masuk Anak Asuh</a>
                                </li>
                                <li>
                                    <a href="?page=alumni-belum-diverifikasi">Data Alumni</a>
                                </li>
                                <li>
                                    <a href="?page=syarat">Syarat - syarat diterima</a></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="fa fa-wpforms"></div>
                                </div>
                                <span>Program</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=progpendidikan">Program Pendidikan</a>
                                </li>
                                <li>
                                    <a href="?page=progekonomi">Program Ekonomi</a></a>
                                </li>
                                <li>
                                    <a href="?page=progkesehatan">Program Kesehatan</a>
                                </li>
                                <li>
                                    <a href="?page=progpembangunan">Program Pembangunan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="fa fa-calendar"></div>
                                </div>
                                <span>Jadwal Kegiatan</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=kelas">Kelas</a>
                                </li>
                                <li>
                                    <a href="?page=waktu">Waktu Kegiatan</a>
                                </li>
                                <li>
                                    <a href="?page=kegiatan">Data Kegiatan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="fa fa-archive"></div>
                                </div>
                                <span>Donasi</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=bankasal">Bank Asal</a>
                                </li>
                                <li>
                                    <a href="?page=banktujuan">Bank Tujuan</a>
                                </li>
                                <li>
                                    <a href="?page=donasionline-belum-dibayar">Donasi Online</a>
                                </li>
                                <li>
                                    <a href="?page=donasioffline">Donasi Offline</a>
                                </li>
                                <li>
                                    <a href="?page=donasibarang">Donasi Barang</a>
                                </li>
                                <li>
                                    <a href="?page=panduandonasionline">Panduan Donasi Online</a>
                                </li>
                                <li>
                                    <a href="?page=panduandonasioffline">Panduan Donasi Offline</a>
                                </li>
                                <li>
                                    <a href="?page=panduandonasibarang">Panduan Donasi Barang</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="?page=pesankontak">
                                <div class="icon-w">
                                    <div class="fa fa-comments"></div>
                                </div>
                                <span>Pesan Kontak</span>
                            </a>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="fa fa-users"></div>
                                </div>
                                <span>Pengguna</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=user_admin">Data Pengguna Admin</a>
                                </li>
                                <li>
                                    <a href="?page=user_donatur">Data Pengguna Donatur</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-header">
                            <span>KELUAR</span>
                        </li>
                        <li class="">
                            <a href="?page=logout">
                                <div class="icon-w">
                                    <div class="fa fa-sign-out"></div>
                                </div>
                                <span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                    <!--------------------
             END - Mobile Menu List
             -------------------->
                    <div class="mobile-menu-magic">
                        <h4>
                            PAKYM Surakarta
                        </h4>
                        <p>
                            Panti Asuhan Keluarga Yatim Muhammadiyah Surakarta
                        </p>

                    </div>
                </div>
            </div>
            <!--------------------
        END - Mobile Menu
        -------------------->
            <!--------------------
        START - Main Menu
        -------------------->
            <div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
                <div class="logo-w">
                    <a class="logo" href="adm.php">
                        <div class="logo-element"></div>
                        <div class="logo-label">
                            PAKYM Surakarta
                        </div>
                    </a>
                </div>
                <div class="logged-user-w avatar-inline">
                    <div class="logged-user-i">
                        <div class="avatar-w">
                            <img alt="" src="../../images/logo/<?php echo $z['favicon']; ?>">
                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">
                                <?php echo $nama; ?>
                            </div>
                            <div class="logged-user-role">
                                Administrator
                            </div>
                        </div>
                        <div class="logged-user-toggler-arrow">
                            <div class="os-icon os-icon-chevron-down"></div>
                        </div>
                        <div class="logged-user-menu color-style-bright">
                            <div class="logged-user-avatar-info">
                                <div class="avatar-w">
                                    <img alt="" src="../../images/logo/<?php echo $z['favicon']; ?>">
                                </div>
                                <div class="logged-user-info-w">
                                    <div class="logged-user-name">
                                        <?php echo $nama; ?>
                                    </div>
                                    <div class="logged-user-role">
                                        Administrator
                                    </div>
                                </div>
                            </div>
                            <div class="bg-icon">
                                <i class="os-icon os-icon-wallet-loaded"></i>
                            </div>
                            <ul>
                                <li>
                                    <a href="?page=user_admin"><i class="os-icon os-icon-user-male-circle2"></i><span>Data Admin</span></a>
                                </li>
                                <li>
                                    <a href="?page=user_donatur"><i class="os-icon os-icon-wallet-loaded"></i><span>Data Donatur</span></a>
                                </li>
                                <li>
                                    <a href="?page=anakasuh"><i class="os-icon os-icon-coins-4"></i><span>Data Anak Asuh</span></a>
                                </li>
                                <li>
                                    <a href="?page=alumni-belum-diverifikasi"><i class="os-icon os-icon-others-43"></i><span>Data Alumni</span></a>
                                </li>
                                <li>
                                    <a href="?page=logout"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu-actions">
                    <!--------------------
            START - Messages Link in secondary top menu
            -------------------->
                    <div class="messages-notifications os-dropdown-trigger os-dropdown-position-right">
                        <i class="os-icon os-icon-mail-14"></i>
                        <div class="new-messages-count">
                            0
                        </div>
                    </div>
                    <!--------------------
            END - Messages Link in secondary top menu
            -------------------->
                    <!--------------------
            START - Settings Link in secondary top menu
            -------------------->
                    <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-right">
                        <i class="os-icon os-icon-ui-46"></i>
                        <div class="os-dropdown">
                            <div class="icon-w">
                                <i class="os-icon os-icon-ui-46"></i>
                            </div>
                            <ul>
                                <li>
                                    <a href="?page=addberita"><i class="os-icon os-icon-ui-49"></i><span>Tambah Berita</span></a>
                                </li>
                                <li>
                                    <a href="?page=addevent"><i class="os-icon os-icon-window-content"></i><span>Tambah Event</span></a>
                                </li>
                                <li>
                                    <a href="?page=addgaleri"><i class="os-icon os-icon-documents-07"></i><span>Tambah Galeri</span></a>
                                </li>
                                <li>
                                    <a href="?page=logout"><i class="os-icon os-icon-signs-11"></i><span>Log out</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--------------------
            END - Settings Link in secondary top menu
            -------------------->
                    <!--------------------
            START - Messages Link in secondary top menu
            -------------------->
                    <div class="messages-notifications os-dropdown-trigger os-dropdown-position-right">
                        <i class="os-icon os-icon-zap"></i>
                        <div class="os-dropdown light message-list">
                            <div class="icon-w">
                                <i class="os-icon os-icon-zap"></i>
                            </div>
                            <ul>
                                <li>
                                    <a>
                                        <div class="user-avatar-w">
                                            <img alt="" src="../../images/logo/<?php echo $z['favicon']; ?>">
                                        </div>

                                        <div class="message-content">
                                            <h6 class="message-from">
                                                <?php echo $nama; ?>
                                            </h6>
                                            <h6 class="message-title">
                                                Administrator
                                            </h6>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--------------------
            END - Messages Link in secondary top menu
            -------------------->
                </div>
                <div class="element-search autosuggest-search-activator">
                    <input placeholder="Pencarian . . ." type="text">
                </div>
                <h1 class="menu-page-header">
                    Page Header
                </h1>
                <ul class="main-menu">
                    <li class="sub-header">
                        <span>MENU UTAMA</span>
                    </li>
                    <li class="">
                        <a href="adm.php">
                            <div class="icon-w">
                                <div class="fa fa-home"></div>
                            </div>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="?page=informasi">
                            <div class="icon-w">
                                <div class="dripicons-information"></div>
                            </div>
                            <span>Informasi</span>
                        </a>
                    </li>

                    <li class="has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="fa fa-list-alt"></div>
                            </div>
                            <span>Tentang Kami</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">
                                Tentang Kami
                            </div>
                            <div class="sub-menu-icon">
                                <i class="fa fa-list-alt"></i>
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?page=sejarah">Sejarah</a>
                                    </li>
                                    <li>
                                        <a href="?page=azas">Azas</a>
                                    </li>
                                    <li>
                                        <a href="?page=visimisi">Visi Misi</a>
                                    </li>
                                    <li>
                                        <a href="?page=tujuan">Tujuan</a>
                                    </li>
                                    <li>
                                        <a href="?page=fasilitas">Fasilitas</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="fa fa-id-card-o"></div>
                            </div>
                            <span>Susunan Personalia</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">
                                Susunan Personalia
                            </div>
                            <div class="sub-menu-icon">
                                <i class="fa fa-id-card-o"></i>
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?page=jabatan">Data Jabatan</a>
                                    </li>
                                    <li>
                                        <a href="?page=susunan">Data Susunan Personalia</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="fa fa-newspaper-o"></div>
                            </div>
                            <span>Berita</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">
                                Berita
                            </div>
                            <div class="sub-menu-icon">
                                <i class="fa fa-newspaper-o"></i>
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?page=kategoriberita">Kategori Berita</a>
                                    </li>
                                    <li>
                                        <a href="?page=berita">Data Berita</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="fa fa-calendar"></div>
                            </div>
                            <span>Event</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">
                                Event
                            </div>
                            <div class="sub-menu-icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?page=kategorievent">Kategori Event</a>
                                    </li>
                                    <li>
                                        <a href="?page=event">Data Event</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="fa fa-picture-o"></div>
                            </div>
                            <span>Galeri</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">
                                Galeri
                            </div>
                            <div class="sub-menu-icon">
                                <i class="fa fa-picture-o"></i>
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?page=kategorigaleri">Kategori Galeri</a>
                                    </li>
                                    <li>
                                        <a href="?page=galeri">Data Galeri</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="fa fa-id-card-o"></div>
                            </div>
                            <span>Anak Asuh</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">
                                Anak Asuh
                            </div>
                            <div class="sub-menu-icon">
                                <i class="fa fa-id-card-o"></i>
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?page=status">Status</a>
                                    </li>
                                    <li>
                                        <a href="?page=anakasuh">Data Anak Asuh</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="fa fa-tags"></div>
                            </div>
                            <span>Ketentuan Anak Asuh</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">
                                Ketentuan Anak Asuh
                            </div>
                            <div class="sub-menu-icon">
                                <i class="fa fa-tags"></i>
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?page=tatatertib">Tata Tertib</a>
                                    </li>
                                    <li>
                                        <a href="?page=larangan">Larangan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu">
                        <a>
                            <div class="icon-w">
                                <div class="fa fa-list-ul"></div>
                            </div>
                            <span>Pendaftaran</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">
                                Pendaftaran
                            </div>
                            <div class="sub-menu-icon">
                                <i class="fa fa-list-ul"></i>
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?page=panduan_pendaftaran">Panduan Pendaftaran</a>
                                    </li>
                                    <li>
                                        <a href="?page=daftarmasuk">Daftar Masuk Anak Asuh</a>
                                    </li>
                                    <li>
                                        <a href="?page=alumni-belum-diverifikasi">Data Alumni</a>
                                    </li>
                                    <li>
                                        <a href="?page=syarat">Syarat-syarat Diterima</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu">
                        <a>
                            <div class="icon-w">
                                <div class="fa fa-wpforms"></div>
                            </div>
                            <span>Program</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">
                                Program
                            </div>
                            <div class="sub-menu-icon">
                                <i class="fa fa-wpforms"></i>
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?page=progpendidikan">Program Pendidikan</a>
                                    </li>
                                    <li>
                                        <a href="?page=progekonomi">Program Ekonomi</a></a>
                                    </li>
                                    <li>
                                        <a href="?page=progkesehatan">Program Kesehatan</a>
                                    </li>
                                    <li>
                                        <a href="?page=progpembangunan">Program Pembangunan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu">
                        <a>
                            <div class="icon-w">
                                <div class="fa fa-calendar"></div>
                            </div>
                            <span>Jadwal Kegiatan</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">
                                Jadwal Kegiatan
                            </div>
                            <div class="sub-menu-icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?page=kelas">Kelas</a>
                                    </li>
                                    <li>
                                        <a href="?page=waktu">Waktu Kegiatan</a>
                                    </li>
                                    <li>
                                        <a href="?page=kegiatan">Data Kegiatan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu">
                        <a>
                            <div class="icon-w">
                                <div class="fa fa-archive"></div>
                            </div>
                            <span>Donasi</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">
                                Donasi
                            </div>
                            <div class="sub-menu-icon">
                                <i class="fa fa-archive"></i>
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?page=bankasal">Bank Asal</a>
                                    </li>
                                    <li>
                                        <a href="?page=banktujuan">Bank Tujuan</a>
                                    </li>
                                    <li>
                                        <a href="?page=donasionline-belum-dibayar">Donasi Online</a>
                                    </li>
                                    <li>
                                        <a href="?page=donasioffline">Donasi Offline</a>
                                    </li>
                                    <li>
                                        <a href="?page=donasibarang">Donasi Barang</a>
                                    </li>
                                    <li>
                                        <a href="?page=panduandonasionline">Panduan Donasi Online</a>
                                    </li>
                                    <li>
                                        <a href="?page=panduandonasioffline">Panduan Donasi Offline</a>
                                    </li>
                                    <li>
                                        <a href="?page=panduandonasibarang">Panduan Donasi Barang</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <a href="?page=pesankontak">
                            <div class="icon-w">
                                <div class="fa fa-comments"></div>
                            </div>
                            <span>Pesan Kontak</span>
                        </a>
                    </li>
                    <li class="has-sub-menu">
                        <a>
                            <div class="icon-w">
                                <div class="fa fa-users"></div>
                            </div>
                            <span>Pengguna</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">
                                Pengguna
                            </div>
                            <div class="sub-menu-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?page=user_admin">Data Pengguna Admin</a>
                                    </li>
                                    <li>
                                        <a href="?page=user_donatur">Data Pengguna Donatur</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="sub-header">
                        <span>KELUAR</span>
                    </li>
                    <li class="">
                        <a href="?page=logout">
                            <div class="icon-w">
                                <div class="fa fa-sign-out"></div>
                            </div>
                            <span>Log Out</span>
                        </a>
                    </li>
                </ul>
                <div class="side-menu-magic">
                    <h4>
                        PAKYM Surakarta
                    </h4>
                    <p>
                        Panti Asuhan Keluarga Yatim Muhammadiyah Surakarta
                    </p>
                    <p>
                        All Rights Reserved &copy; 2019
                    </p>
                </div>
            </div>
            <!--------------------
        END - Main Menu
        -------------------->
            <div class="content-w">
                <!--------------------
          START - Top Bar
          -------------------->
                <div class="top-bar color-scheme-transparent">
                    <!--------------------
            START - Top Menu Controls
            -------------------->
                    <div class="top-menu-controls">
                        <div class="element-search autosuggest-search-activator">
                            <input placeholder="Pencarian . . ." type="text">
                        </div>
                        <!--------------------
              START - Messages Link in secondary top menu
              -------------------->
                        <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left">
                            <i class="os-icon os-icon-mail-14"></i>
                            <div class="new-messages-count">
                                0
                            </div>
                        </div>
                        <!--------------------
              END - Messages Link in secondary top menu
              -------------------->
                        <!--------------------
              START - Settings Link in secondary top menu
              -------------------->
                        <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left">
                            <i class="os-icon os-icon-ui-46"></i>
                            <div class="os-dropdown">
                                <div class="icon-w">
                                    <i class="os-icon os-icon-ui-46"></i>
                                </div>
                                <ul>
                                    <li>
                                        <a href="?page=addberita"><i class="os-icon os-icon-ui-49"></i><span>Tambah Berita</span></a>
                                    </li>
                                    <li>
                                        <a href="?page=addevent"><i class="os-icon os-icon-window-content"></i><span>Tambah Event</span></a>
                                    </li>
                                    <li>
                                        <a href="?page=addgaleri"><i class="os-icon os-icon-documents-07"></i><span>Tambah Galeri</span></a>
                                    </li>
                                    <li>
                                        <a href="?page=logout.php"><i class="os-icon os-icon-signs-11"></i><span>Log Out</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--------------------
              END - Settings Link in secondary top menu
              -------------------->
                        <!--------------------
              START - User avatar and menu in secondary top menu
              -------------------->
                        <div class="logged-user-w">
                            <div class="logged-user-i">
                                <div class="avatar-w">
                                    <img alt="" src="../../images/logo/<?php echo $z['favicon']; ?>">
                                </div>
                                <div class="logged-user-menu color-style-bright">
                                    <div class="logged-user-avatar-info">
                                        <div class="avatar-w">
                                            <img alt="" src="../../images/logo/<?php echo $z['favicon']; ?>">
                                        </div>
                                        <div class="logged-user-info-w">
                                            <div class="logged-user-name">
                                                <?php echo $nama; ?>
                                            </div>
                                            <div class="logged-user-role">
                                                Administrator
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-icon">
                                        <i class="os-icon os-icon-wallet-loaded"></i>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="?page=user_admin"><i class="os-icon os-icon-user-male-circle2"></i><span>Data Admin</span></a>
                                        </li>
                                        <li>
                                            <a href="?page=user_donatur"><i class="os-icon os-icon-wallet-loaded"></i><span>Data Donatur</span></a>
                                        </li>
                                        <li>
                                            <a href="?page=anakasuh"><i class="os-icon os-icon-coins-4"></i><span>Data Anak Asuh</span></a>
                                        </li>
                                        <li>
                                            <a href="?page=alumni-belum-diverifikasi"><i class="os-icon os-icon-others-43"></i><span>Data Alumni</span></a>
                                        </li>
                                        <li>
                                            <a href="?page=logout"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--------------------
              END - User avatar and menu in secondary top menu
              -------------------->
                    </div>
                    <!--------------------
            END - Top Menu Controls
            -------------------->
                </div>
                <!--------------------
          END - Top Bar
          -------------------->
                <?php
                error_reporting(E_ALL ^ E_DEPRECATED ^ E_NOTICE);

                $page = $_GET['page'];
                $aksi = $_GET['aksi'];

                // MENU
                if ($page == "") {
                    if ($aksi == "") {
                        include "dashboard.php";
                    }
                } elseif ($page == "informasi") {
                    if ($aksi == "") {
                        include "informasi.php";
                    }
                } elseif ($page == "sejarah") {
                    if ($aksi == "") {
                        include "sejarah.php";
                    }
                } elseif ($page == "azas") {
                    if ($aksi == "") {
                        include "azas.php";
                    }
                } elseif ($page == "visimisi") {
                    if ($aksi == "") {
                        include "visimisi.php";
                    }
                } elseif ($page == "tujuan") {
                    if ($aksi == "") {
                        include "tujuan.php";
                    }
                } elseif ($page == "fasilitas") {
                    if ($aksi == "") {
                        include "fasilitas.php";
                    }
                } elseif ($page == "jabatan") {
                    if ($aksi == "") {
                        include "jabatan.php";
                    }
                } elseif ($page == "susunan") {
                    if ($aksi == "") {
                        include "susunan.php";
                    }
                } elseif ($page == "kategoriberita") {
                    if ($aksi == "") {
                        include "kategoriberita.php";
                    }
                } elseif ($page == "berita") {
                    if ($aksi == "") {
                        include "berita.php";
                    }
                } elseif ($page == "kategorievent") {
                    if ($aksi == "") {
                        include "kategorievent.php";
                    }
                } elseif ($page == "event") {
                    if ($aksi == "") {
                        include "event.php";
                    }
                } elseif ($page == "kategorigaleri") {
                    if ($aksi == "") {
                        include "kategorigaleri.php";
                    }
                } elseif ($page == "galeri") {
                    if ($aksi == "") {
                        include "galeri.php";
                    }
                } elseif ($page == "status") {
                    if ($aksi == "") {
                        include "status.php";
                    }
                } elseif ($page == "anakasuh") {
                    if ($aksi == "") {
                        include "anakasuh.php";
                    }
                } elseif ($page == "alumni-belum-diverifikasi") {
                    if ($aksi == "") {
                        include "alumni-belum-diverifikasi.php";
                    }
                } elseif ($page == "syarat") {
                    if ($aksi == "") {
                        include "syarat.php";
                    }
                } elseif ($page == "tatatertib") {
                    if ($aksi == "") {
                        include "tatatertib.php";
                    }
                } elseif ($page == "larangan") {
                    if ($aksi == "") {
                        include "larangan.php";
                    }
                } elseif ($page == "panduan_pendaftaran") {
                    if ($aksi == "") {
                        include "panduan_pendaftaran.php";
                    }
                } elseif ($page == "daftarmasuk") {
                    if ($aksi == "") {
                        include "daftarmasuk.php";
                    }
                } elseif ($page == "progpendidikan") {
                    if ($aksi == "") {
                        include "progpendidikan.php";
                    }
                } elseif ($page == "progekonomi") {
                    if ($aksi == "") {
                        include "progekonomi.php";
                    }
                } elseif ($page == "progkesehatan") {
                    if ($aksi == "") {
                        include "progkesehatan.php";
                    }
                } elseif ($page == "progpembangunan") {
                    if ($aksi == "") {
                        include "progpembangunan.php";
                    }
                } elseif ($page == "kelas") {
                    if ($aksi == "") {
                        include "kelas.php";
                    }
                } elseif ($page == "waktu") {
                    if ($aksi == "") {
                        include "waktu.php";
                    }
                } elseif ($page == "kegiatan") {
                    if ($aksi == "") {
                        include "kegiatan.php";
                    }
                } elseif ($page == "donasionline-belum-dibayar") {
                    if ($aksi == "") {
                        include "donasionline-belum-dibayar.php";
                    }
                } elseif ($page == "donasionline-konfirmasi") {
                    if ($aksi == "") {
                        include "donasionline-konfirmasi.php";
                    }
                } elseif ($page == "donasionline-pembayaran-diterima") {
                    if ($aksi == "") {
                        include "donasionline-pembayaran-diterima.php";
                    }
                } elseif ($page == "donasionline-dibatalkan") {
                    if ($aksi == "") {
                        include "donasionline-dibatalkan.php";
                    }
                } elseif ($page == "donasioffline") {
                    if ($aksi == "") {
                        include "donasioffline.php";
                    }
                } elseif ($page == "donasibarang") {
                    if ($aksi == "") {
                        include "donasibarang.php";
                    }
                } elseif ($page == "bankasal") {
                    if ($aksi == "") {
                        include "bankasal.php";
                    }
                } elseif ($page == "banktujuan") {
                    if ($aksi == "") {
                        include "banktujuan.php";
                    }
                } elseif ($page == "jenispanduan") {
                    if ($aksi == "") {
                        include "jenispanduan.php";
                    }
                } elseif ($page == "panduandonasionline") {
                    if ($aksi == "") {
                        include "panduandonasionline.php";
                    }
                } elseif ($page == "panduandonasioffline") {
                    if ($aksi == "") {
                        include "panduandonasioffline.php";
                    }
                } elseif ($page == "panduandonasibarang") {
                    if ($aksi == "") {
                        include "panduandonasibarang.php";
                    }
                } elseif ($page == "konfirmasi_online") {
                    if ($aksi == "") {
                        include "konfirmasi_online.php";
                    }
                } elseif ($page == "konfirmasi_Barang") {
                    if ($aksi == "") {
                        include "konfirmasi_barang.php";
                    }
                } elseif ($page == "pesankontak") {
                    if ($aksi == "") {
                        include "pesankontak.php";
                    }
                } elseif ($page == "user_admin") {
                    if ($aksi == "") {
                        include "user_admin.php";
                    }
                } elseif ($page == "user_donatur") {
                    if ($aksi == "") {
                        include "user_donatur.php";
                    }
                } elseif ($page == "slider") {
                    if ($aksi == "") {
                        include "slider.php";
                    }
                } elseif ($page == "logout") {
                    if ($aksi == "") {
                        include "auth_logout.php";
                    }
                } elseif ($page == "alumni-sudah-verifikasi") {
                    if ($aksi == "") {
                        include "alumni-sudah-verifikasi.php";
                    }
                }
                // MENU ADD ( TAMBAH )
                elseif ($page == "addberita") {
                    if ($aksi == "") {
                        include "addberita.php";
                    }
                } elseif ($page == "addevent") {
                    if ($aksi == "") {
                        include "addevent.php";
                    }
                } elseif ($page == "addgaleri") {
                    if ($aksi == "") {
                        include "addgaleri.php";
                    }
                } elseif ($page == "addketentuan") {
                    if ($aksi == "") {
                        include "addketentuan.php";
                    }
                } elseif ($page == "addkegiatan") {
                    if ($aksi == "") {
                        include "addkegiatan.php";
                    }
                } elseif ($page == "addbankasal") {
                    if ($aksi == "") {
                        include "addbankasal.php";
                    }
                } elseif ($page == "addbanktujuan") {
                    if ($aksi == "") {
                        include "addbanktujuan.php";
                    }
                } elseif ($page == "addpanduandonasi") {
                    if ($aksi == "") {
                        include "addpanduandonasi.php";
                    }
                } elseif ($page == "addpengguna") {
                    if ($aksi == "") {
                        include "addpengguna.php";
                    }
                } elseif ($page == "addslider") {
                    if ($aksi == "") {
                        include "addslider.php";
                    }
                }
                // UPDATE ( UBAH )
                elseif ($page == "updfasilitas") {
                    if ($aksi == "") {
                        include "updfasilitas.php";
                    }
                } elseif ($page == "updjabatan") {
                    if ($aksi == "") {
                        include "updjabatan.php";
                    }
                } elseif ($page == "updsusunan") {
                    if ($aksi == "") {
                        include "updsusunan.php";
                    }
                } elseif ($page == "updkategoriberita") {
                    if ($aksi == "") {
                        include "updkategoriberita.php";
                    }
                } elseif ($page == "updberita") {
                    if ($aksi == "") {
                        include "updberita.php";
                    }
                } elseif ($page == "updkategorievent") {
                    if ($aksi == "") {
                        include "updkategorievent.php";
                    }
                } elseif ($page == "updevent") {
                    if ($aksi == "") {
                        include "updevent.php";
                    }
                } elseif ($page == "updkategorigaleri") {
                    if ($aksi == "") {
                        include "updkategorigaleri.php";
                    }
                } elseif ($page == "updgaleri") {
                    if ($aksi == "") {
                        include "updgaleri.php";
                    }
                } elseif ($page == "updstatus") {
                    if ($aksi == "") {
                        include "updstatus.php";
                    }
                } elseif ($page == "updanakasuh") {
                    if ($aksi == "") {
                        include "updanakasuh.php";
                    }
                } elseif ($page == "updalumni-sudah-verifikasi") {
                    if ($aksi == "") {
                        include "updalumni-sudah-verifikasi.php";
                    }
                } elseif ($page == "updketentuan") {
                    if ($aksi == "") {
                        include "updketentuan.php";
                    }
                } elseif ($page == "updpanduanpendaftaran") {
                    if ($aksi == "") {
                        include "updpanduanpendaftaran.php";
                    }
                } elseif ($page == "upddaftarmasuk") {
                    if ($aksi == "") {
                        include "upddaftarmasuk.php";
                    }
                } elseif ($page == "updkelas") {
                    if ($aksi == "") {
                        include "updkelas.php";
                    }
                } elseif ($page == "updwaktu") {
                    if ($aksi == "") {
                        include "updwaktu.php";
                    }
                } elseif ($page == "updkegiatan") {
                    if ($aksi == "") {
                        include "updkegiatan.php";
                    }
                } elseif ($page == "updbankasal") {
                    if ($aksi == "") {
                        include "updbankasal.php";
                    }
                } elseif ($page == "updbanktujuan") {
                    if ($aksi == "") {
                        include "updbanktujuan.php";
                    }
                } elseif ($page == "updjenispanduan") {
                    if ($aksi == "") {
                        include "updjenispanduan.php";
                    }
                } elseif ($page == "updpanduandonasi") {
                    if ($aksi == "") {
                        include "updpanduandonasi.php";
                    }
                } elseif ($page == "updslider") {
                    if ($aksi == "") {
                        include "updslider.php";
                    }
                } elseif ($page == "verifikasi-alumni") {
                    if ($aksi == "") {
                        include "verifikasi-alumni.php";
                    }
                }
                // MENU DELETE
                elseif ($page == "delfasilitas") {
                    if ($aksi == "") {
                        include "delfasilitas.php";
                    }
                } elseif ($page == "deljabatan") {
                    if ($aksi == "") {
                        include "deljabatan.php";
                    }
                } elseif ($page == "delsusunan") {
                    if ($aksi == "") {
                        include "delsusunan.php";
                    }
                } elseif ($page == "delkategoriberita") {
                    if ($aksi == "") {
                        include "delkategoriberita.php";
                    }
                } elseif ($page == "delberita") {
                    if ($aksi == "") {
                        include "delberita.php";
                    }
                } elseif ($page == "delkategorievent") {
                    if ($aksi == "") {
                        include "delkategorievent.php";
                    }
                } elseif ($page == "delevent") {
                    if ($aksi == "") {
                        include "delevent.php";
                    }
                } elseif ($page == "delkategorigaleri") {
                    if ($aksi == "") {
                        include "delkategorigaleri.php";
                    }
                } elseif ($page == "delgaleri") {
                    if ($aksi == "") {
                        include "delgaleri.php";
                    }
                } elseif ($page == "delstatus") {
                    if ($aksi == "") {
                        include "delstatus.php";
                    }
                } elseif ($page == "delanakasuh") {
                    if ($aksi == "") {
                        include "delanakasuh.php";
                    }
                } elseif ($page == "delalumni-belum-diverifikasi") {
                    if ($aksi == "") {
                        include "delalumni-belum-diverifikasi.php";
                    }
                } elseif ($page == "delalumni-sudah-verifikasi") {
                    if ($aksi == "") {
                        include "delalumni-sudah-verifikasi.php";
                    }
                } elseif ($page == "delketentuan") {
                    if ($aksi == "") {
                        include "delketentuan.php";
                    }
                } elseif ($page == "delpanduanpendaftaran") {
                    if ($aksi == "") {
                        include "delpanduanpendaftaran.php";
                    }
                } elseif ($page == "deldaftarmasuk") {
                    if ($aksi == "") {
                        include "deldaftarmasuk.php";
                    }
                } elseif ($page == "delkelas") {
                    if ($aksi == "") {
                        include "delkelas.php";
                    }
                } elseif ($page == "delwaktu") {
                    if ($aksi == "") {
                        include "delwaktu.php";
                    }
                } elseif ($page == "delkegiatan") {
                    if ($aksi == "") {
                        include "delkegiatan.php";
                    }
                } elseif ($page == "deldonasionline") {
                    if ($aksi == "") {
                        include "deldonasionline.php";
                    }
                } elseif ($page == "deldonasioffline") {
                    if ($aksi == "") {
                        include "deldonasioffline.php";
                    }
                } elseif ($page == "deldonasibarang") {
                    if ($aksi == "") {
                        include "deldonasibarang.php";
                    }
                } elseif ($page == "delbankasal") {
                    if ($aksi == "") {
                        include "delbankasal.php";
                    }
                } elseif ($page == "delbanktujuan") {
                    if ($aksi == "") {
                        include "delbanktujuan.php";
                    }
                } elseif ($page == "deljenispanduan") {
                    if ($aksi == "") {
                        include "deljenispanduan.php";
                    }
                } elseif ($page == "delpanduandonasi") {
                    if ($aksi == "") {
                        include "delpanduandonasi.php";
                    }
                } elseif ($page == "delkonfirmasi_online") {
                    if ($aksi == "") {
                        include "delkonfirmasi_online.php";
                    }
                } elseif ($page == "delkonfirmasi_barang") {
                    if ($aksi == "") {
                        include "delkonfirmasi_barang.php";
                    }
                } elseif ($page == "delpesankontak") {
                    if ($aksi == "") {
                        include "delpesankontak.php";
                    }
                } elseif ($page == "deluser_admin") {
                    if ($aksi == "") {
                        include "deluser_admin.php";
                    }
                } elseif ($page == "deluser_donatur") {
                    if ($aksi == "") {
                        include "deluser_donatur.php";
                    }
                } elseif ($page == "delslider") {
                    if ($aksi == "") {
                        include "delslider.php";
                    }
                }
                // MENU DETAIL
                elseif ($page == "detailberita") {
                    if ($aksi == "") {
                        include "detailberita.php";
                    }
                } elseif ($page == "detailevent") {
                    if ($aksi == "") {
                        include "detailevent.php";
                    }
                } elseif ($page == "detailanakasuh") {
                    if ($aksi == "") {
                        include "detailanakasuh.php";
                    }
                } elseif ($page == "detailalumni-belum-diverifikasi") {
                    if ($aksi == "") {
                        include "detailalumni-belum-diverifikasi.php";
                    }
                } elseif ($page == "detailalumni-sudah-verifikasi") {
                    if ($aksi == "") {
                        include "detailalumni-sudah-verifikasi.php";
                    }
                } elseif ($page == "detaildaftarmasuk") {
                    if ($aksi == "") {
                        include "detaildaftarmasuk.php";
                    }
                } elseif ($page == "detaildonasionline") {
                    if ($aksi == "") {
                        include "detaildonasionline.php";
                    }
                } elseif ($page == "detail-donasionline-belum-dibayar") {
                    if ($aksi == "") {
                        include "detail-donasionline-belum-dibayar.php";
                    }
                } elseif ($page == "detail-donasionline-konfirmasi") {
                    if ($aksi == "") {
                        include "detail-donasionline-konfirmasi.php";
                    }
                } elseif ($page == "detail-donasionline-pembayaran-diterima") {
                    if ($aksi == "") {
                        include "detail-donasionline-pembayaran-diterima.php";
                    }
                } elseif ($page == "detail-donasionline-dibatalkan") {
                    if ($aksi == "") {
                        include "detail-donasionline-dibatalkan.php";
                    }
                } elseif ($page == "detaildonasioffline") {
                    if ($aksi == "") {
                        include "detaildonasioffline.php";
                    }
                } elseif ($page == "detailkonfirmasi_online") {
                    if ($aksi == "") {
                        include "detailkonfirmasi_online.php";
                    }
                } elseif ($page == "detailkonfirmasi_barang") {
                    if ($aksi == "") {
                        include "detailkonfirmasi_barang.php";
                    }
                } elseif ($page == "detailpesankontak") {
                    if ($aksi == "") {
                        include "detailpesankontak.php";
                    }
                } elseif ($page == "detail-user-donatur") {
                    if ($aksi == "") {
                        include "detail-user-donatur.php";
                    }
                }
                // DONASI HAPUS,DIBATALKAN,DITERIMA,KONFIRMASI
                elseif ($page == "don-dibatalkan") {
                    if ($aksi == "") {
                        include "don-dibatalkan.php";
                    }
                } elseif ($page == "don-sudah-diterima") {
                    if ($aksi == "") {
                        include "don-sudah-diterima.php";
                    }
                }
                ?>

                <div class="content-panel-toggler">
                    <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
                </div>

                <?php
                include "customizer.php";
                ?>

            </div>
        </div>
    </div>
    <div class="display-type"></div>
    </div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="bower_components/moment/moment.js"></script>
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="bower_components/ckeditor/ckeditor.js"></script>
    <script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="bower_components/dropzone/dist/dropzone.js"></script>
    <script src="bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="bower_components/bootstrap/js/dist/util.js"></script>
    <script src="bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="bower_components/bootstrap/js/dist/button.js"></script>
    <script src="bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="js/demo_customizer.js?version=4.4.0"></script>
    <script src="js/main.js?version=4.4.0"></script>
    <!-- This is data table -->
    <script src="bower_components/datatable/datatables.min.js"></script>
    <!-- for Data Table -->
    <!-- <script src="js/data-table.js"></script> -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-XXXXXXX-9', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>