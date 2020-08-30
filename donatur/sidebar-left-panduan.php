<div class="sideabar">
    <div class="widget widget-sidebar widget-list-link">
        <h4 class="title-widget-sidebar">
            Panduan Donasi
        </h4>
        <ul class="wd-list-link">
            <li><a href="?page=panduan-donasi-online">Donasi Online</a></li>
            <li><a href="?page=panduan-donasi-offline">Donasi Offline</a></li>
            <li><a href="?page=panduan-donasi-barang">Donasi Barang</a></li>
        </ul>
    </div>
    <div class="widget widget-sidebar widget-list-link">
        <h4 class="title-widget-sidebar">
            Berita Terkini
        </h4>
        <?php
        $sql = "SELECT * FROM berita,kategori_berita WHERE berita.id_kategoriberita_en = kategori_berita.id_kategoriberita_en order by id_berita DESC LIMIT 4";
        $run = mysqli_query($conn, $sql);
        while ($be = mysqli_fetch_array($run)) {
            ?>
            <ul class="wd-list-link">
                <li><a href="?page=lihat-berita&lihat=<?php echo $be['id_berita_en']; ?>"><?php echo $be['judul_berita']; ?></a></li>
            </ul>
        <?php } ?>
    </div>
    <div class="widget widget-sidebar widget-text-block">
        <h4 class="title-widget-sidebar">
            PAKYM
        </h4>
        <div class="wd-text-warp">
            <p>Pakym adalah satu satunya panti asuhan keluarga yatim muhammadiyah surakarta
                yang berada di kota solo, dan sudah berdiri sejak tahun 1930.</p>
        </div>
    </div>

    <div class="widget-sidebar widget widget-html">
        <div class="wd-html-block">
            <div class="content-wd-html-inner">
                <h3>
                    <font color="white">
                        <spasi>DONASI SEKARANG</spasi>
                    </font>
                </h3>
                <p>
                    <font size="2" color="white">
                        <spasi>Mari Berbagi dengan Anak Yatim</spasi>
                    </font>
                </p>
            </div>
            <a href="?page=donasi" class="ot-btn btn-sub-color">
                Donasi Yuk
            </a>
        </div>
    </div>
</div>