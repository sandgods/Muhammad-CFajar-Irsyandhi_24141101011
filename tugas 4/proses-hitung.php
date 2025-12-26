<?php
// Ambil data dari form
$nama    = $_POST['nama'] ?? '';
$phone   = $_POST['phone'] ?? '';
$tanggal = $_POST['tanggal'] ?? '';
$hari    = $_POST['hari'] ?? 0;
$peserta = $_POST['peserta'] ?? 0;

// Validasi wajib isi
if ($nama == '' || $phone == '' || $tanggal == '' || $hari == 0 || $peserta == 0) {
    header("Location: form-pesan.php?error=Form belum lengkap");
    exit;
}

// Harga paket
$harga_paket = 0;

$penginapan  = isset($_POST['penginapan']) ? 1 : 0;
$transportasi = isset($_POST['transportasi']) ? 1 : 0;
$makanan     = isset($_POST['makanan']) ? 1 : 0;

if ($penginapan) {
    $harga_paket += 1000000;
}

if ($transportasi) {
    $harga_paket += 1200000;
}

if ($makanan) {
    $harga_paket += 500000;
}

// Hitung total tagihan
$total_tagihan = $hari * $peserta * $harga_paket;

// Redirect kembali ke form dengan data lama
header("Location: form-pesan.php?confirm=true&" . http_build_query([
    'nama' => $nama,
    'phone' => $phone,
    'tanggal' => $tanggal,
    'hari' => $hari,
    'peserta' => $peserta,
    'penginapan' => $penginapan,
    'transportasi' => $transportasi,
    'makanan' => $makanan,
    'harga_paket' => $harga_paket,
    'total_tagihan' => $total_tagihan
]));
exit;