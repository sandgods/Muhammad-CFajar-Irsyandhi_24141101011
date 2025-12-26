<?php
include 'koneksi.php';

// ambil id dari URL
if (!isset($_GET['id'])) {
    die("Akses dilarang");
}

$id = $_GET['id'];

// query hapus
$sql = "DELETE FROM pemesanan WHERE id='$id'";
$query = mysqli_query($db, $sql);

// redirect
if ($query) {
    header("Location: list-pesanan.php?status=hapus_sukses");
} else {
    header("Location: list-pesanan.php?status=hapus_gagal");
}