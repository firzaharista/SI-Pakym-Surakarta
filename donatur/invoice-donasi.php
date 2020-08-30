<?php
$donasi  = mysqli_real_escape_string($conn, $_GET['donasi']);
$invo = mysqli_query($conn, "SELECT * FROM donasi_online,bank_tujuan,waktu_donasionline WHERE donasi_online.id_banktujuan = bank_tujuan.id_banktujuan AND waktu_donasionline.no_invoice = donasi_online.id_donasionline AND donasi_online.id_donasionline_en = '$donasi'");
$invoice = mysqli_fetch_array($invo);

if ($invoice['id_donasionline_en'] != $donasi) {
    echo '<script type="text/javascript">window.location.href="./";</script>';
    die();
} else {
    if ($invoice == []) {
        echo '<script type="text/javascript">window.location.href="./";</script>';
        die();
    }
}

?>
<section class="no-padding sh-company-history">
    <div class="sub-header ">
        <h3>DONASI</h3>
        <ol class="breadcrumb">
            <li>
                <a><i class="fa fa-home"></i>Invoice Donasi</a>
            </li>
            <!-- <li class="active">PROFIL DONATUR</li> -->
        </ol>
    </div>
</section>
<!-- /Sub HEader -->

<section class="bg-case-h9">
    <div class="container">
        <div class="row">
            <div class="shop-cart-warp">
                <div class="col-md-10 col-sm-offset-1">
                    <div class="table-responsive">
                        <div class="text">
                            <div class="col-md-6 text-left">

                                <h4>
                                    No. Invoice : <strong><?php echo $invoice['id_donasionline']; ?></strong>
                                </h4>
                                <?php
                                $sql = mysqli_query($conn, "SELECT * FROM waktu_donasionline,donasi_online WHERE waktu_donasionline.no_invoice = donasi_online.id_donasionline AND donasi_online.id_donasionline_en='$donasi'");
                                while ($ds = mysqli_fetch_array($sql)) {
                                    $waktu = date("d-m-Y, H:i:s", strtotime($ds['waktu_online']));
                                    if ($ds['id_donasionline' == $ds['no_invoice']]) { ?>
                                        <p>
                                            Donasi terdaftar pada : <?php echo $waktu; ?> WIB
                                        </p> <?php } ?>
                                <?php } ?>
                            </div>
                            <div class="col-md-6 text-right">
                                <!-- <br><br> <br> -->
                                <p>Metode Pembayaran : Bank Transfer</p>
                                <p>Ke <?php echo $invoice['nama_bank']; ?> -> No. Rek : <?php echo $invoice['no_rek'];?></p>
                            </div>
                        </div>
                        <table class="table table-reset  table-cart">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail"></th>
                                    <th class="product-name">Nama Donatur</th>
                                    <th class="product-price">Email</th>
                                    <th class="product-quantity">Telepon</th>
                                    <th class="product-remove">Donasi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail"></td>
                                    <td class="product-name"><?php echo $invoice['nama_donatur']; ?></td>
                                    <td class="product-price"><?php echo $invoice['email']; ?></td>
                                    <td class="product-quantity"><?php echo $invoice['telepon']; ?></td>
                                    <td class="product-subtotal"><?php echo $invoice['jumlah_donasi']; ?></td>
                                    <!-- <td class="product-remove"><a href="#"><i class="fa fa-close"></i></a></td> -->
                                </tr>
                                <tr>
                                    <td class="product-thumbnail"></td>
                                    <td class="product-name"></td>
                                    <td class="product-price"></td>
                                    <td class="cart-product-name">
                                        <strong>Subtotal</strong>
                                    </td>
                                    <td class="cart-product-name text-right">
                                        <span class="amount"><?php echo $invoice['jumlah_donasi']; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="product-thumbnail"></th>
                                    <th class="product-name"></th>
                                    <th class="product-price"></th>
                                    <td class="cart-product-name">
                                        <strong>Total Bayar</strong>
                                    </td>
                                    <td class="cart-product-name text-right">
                                        <span class="amount color lead"><strong><?php echo $invoice['jumlah_donasi']; ?></strong></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php
                    if ($invoice['status_donasi'] == 'Donasi Dibatalkan') { ?>
                        <div class="alert alert-danger" role="alert">
                            <strong>Donasi Dibatalkan !</strong> Silahkan lakukan donasi ulang . . .
                        </div>
                    <?php } elseif ($invoice['status_donasi'] == 'Donasi Belum Dibayar') { ?>
                        <div class="alert alert-warning" role="alert">
                            <strong>Donasi Belum Dibayar. </strong> Silahkan lakukan pembayaran donasi anda . . .
                        </div>
                    <?php } elseif ($invoice['status_donasi'] == 'Sudah Konfirmasi') { ?>
                        <div class="alert alert-info" role="alert">
                            <strong>Sudah Konfirmasi. </strong> Terima kasih atas konfirmasi donasi anda. Silahkan tunggu sampai status berubah menjadi <strong>Pembayaran Sudah Diterima.</strong>
                        </div>
                    <?php } else { ?>
                        <div class="alert alert-success" role="alert">
                            <strong>Pembayaran Sudah Diterima. </strong> Terima kasih atas donasi yang diberikan kepada PAKYM Surakarta . . .
                        </div>
                    <?php } ?>
                    <!-- <br> -->
                    <div class="col-md-12">
                        <div class="group-btn pull-left">
                            <p> <strong>Catatan :</strong> <br>Apabila sudah konfirmasi pembayaran maka tidak perlu konfirmasi lagi</p>
                        </div>
                        <div class="group-btn pull-right">
                            <a href="?page=profil-donatur" class="ot-btn btn-sub-color">Kembali</a>
                            <a href="?page=konfirmasi-pembayaran" class="ot-btn btn-main-color">Lanjut ke Konfirmasi Pembayaran</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Table Cart -->