<?php
include 'koneksi.php';

// validasi tombol submit
if (!isset($_POST['id'])) {
    die("Akses dilarang");
}

// ambil data dari form
$id      = $_POST['id'];
$nama    = $_POST['nama'];
$phone   = $_POST['phone'];
$tanggal = $_POST['tanggal'];
$hari    = $_POST['hari'];
$peserta = $_POST['peserta'];

// validasi form wajib
if (empty($nama) || empty($phone) || empty($hari) || empty($peserta)) {
    die("Data form pemesanan harus diisi");
}

// cek layanan paket
$penginapan   = isset($_POST['penginapan']) ? 'Y' : 'N';
$transportasi = isset($_POST['transportasi']) ? 'Y' : 'N';
$makanan      = isset($_POST['makanan']) ? 'Y' : 'N';

// hitung harga paket
$hargaPaket = 0;
if ($penginapan == 'Y')   $hargaPaket += 1000000;
if ($transportasi == 'Y') $hargaPaket += 1200000;
if ($makanan == 'Y')      $hargaPaket += 500000;

// hitung total tagihan
$totalTagihan = $hari * $peserta * $hargaPaket;

// query update
$sql = "UPDATE pemesanan SET
    nama='$nama',
    phone='$phone',
    tanggal='$tanggal',
    hari='$hari',
    peserta='$peserta',
    penginapan='$penginapan',
    transportasi='$transportasi',
    makanan='$makanan',
    harga_paket='$hargaPaket',
    total_tagihan='$totalTagihan'
WHERE id='$id'";

$query = mysqli_query($db, $sql);

// redirect
if ($query) {
    header("Location: list-pesanan.php?status=update_sukses");
} else {
    header("Location: list-pesanan.php?status=update_gagal");
}