<?php
$customCSS = "../pesanan/semua.css";
include '../include/header.php';
; ?>

<main>
    <div class="container-main">
        <div class="menu-bar">
            <ul>
                <li><a href="#" style="color:black;">Semua</a></li>
                <hr>
                <li><a href="#" style="color:black;">Belum Bayar</a></li>
                <hr>
                <li><a href="#" style="color:black;">Sedang Dikemas</a></li>
                <hr>
                <li><a href="#" style="color:black;">Dikirim</a></li>
                <hr>
                <li><a href="#" style="color:black;">Selesai</a></li>
                <hr>
                <li><a href="#" style="color:black;">Dibatalkan</a></li>
                <hr>
                <li><a href="#" style="color:black;">Pengembalian Barang</a></li>
            </ul>
        </div>
        <div class="container-barang">
            <div class="search-main">
                <label for="search"><i class="ri-search-2-line"></i></label>
                <input type="search"
                    placeholder="Kamu bisa cari berdasarkan Nama Penjual, No. Pesanan atau Nama Produk">
            </div>
            <div class="blank">

            </div>
        </div>
    </div>

</main>
<?php include '../include/footer.php'; ?>