<?php
include 'koneksi.php';

if (empty($_POST['nama']) || empty($_POST['phone']) || empty($_POST['hari']) || empty($_POST['peserta'])) {
    die("Data form pemesanan harus diisi");
}

$harga = 0;
$penginapan = isset($_POST['penginapan']) ? 'Y' : 'N';
$transportasi = isset($_POST['transportasi']) ? 'Y' : 'N';
$makanan = isset($_POST['makanan']) ? 'Y' : 'N';

if ($penginapan == 'Y') $harga += 1000000;
if ($transportasi == 'Y') $harga += 1200000;
if ($makanan == 'Y') $harga += 500000;

$total = $_POST['hari'] * $_POST['peserta'] * $harga;

$sql = "INSERT INTO pemesanan 
(nama, phone, tanggal, hari, peserta, penginapan, transportasi, makanan, harga_paket, total_tagihan)
VALUES
('$_POST[nama]','$_POST[phone]','$_POST[tanggal]',
 '$_POST[hari]','$_POST[peserta]',
 '$penginapan','$transportasi','$makanan',
 '$harga','$total')";

mysqli_query($db, $sql);
header("Location: list-pesanan.php?status=sukses");