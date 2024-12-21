<?php
// Konfigurasi koneksi ke database
$host = 'localhost';
$db = 'phpdasar';
$user = 'root';
$pass = '';
try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query untuk mendapatkan data produk dari database
    $query = "SELECT nama, harga, deskripsi, url_gambar, link FROM barang_rekomendasi";
    $stmt = $conn->query($query);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Menutup koneksi
$conn = null;
?>