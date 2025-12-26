<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>

    <header>
        <h4>Muhammad Fajar Irsyandhi</h4>
        <h4>2414101011</h4>
        <h4>Tugas Praktikum Web Developer - #3</h4>
    </header>

    <nav>
        <a href="form-daftar.php">+ Tambah Siswa Baru</a>
    </nav>

    <br>

    <?php if (isset($_GET['status'])): ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
            ?>
        </p>
    <?php endif; ?>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);

            $no = 1;
            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $siswa['nama'] . "</td>";
                echo "<td>" . $siswa['alamat'] . "</td>";
                echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                echo "<td>" . $siswa['agama'] . "</td>";
                echo "<td>" . $siswa['sekolah_asal'] . "</td>";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?> siswa</p>

    <hr>

    <h4>Penjelasan Program dan Hasil Debug yang Ditemukan</h4>
    Program ini adalah aplikasi pendaftaran siswa baru berbasis PHP & MySQL yang terdiri dari beberapa file:
    <ul>
        <li>

            Form-daftar.php (Form Input Data)

            File ini berfungsi untuk menampilkan formulir pendaftaran siswa baru.

            Fungsi utama:

            Menampilkan input:

            Nama

            Alamat

            Jenis kelamin

            Agama

            Sekolah asal

            Data dikirim ke proses-daftar.php menggunakan metode POST
        </li>
        <li>
            Catatan penting:

            <!DOCTYPE html>


            harus ditulis lengkap, bukan <DOCTYPE>

        </li>
        <li>
            koneksi.php (Koneksi Database)

            File ini digunakan untuk menghubungkan aplikasi PHP dengan database MySQL.

            Fungsi utama:

            Menyimpan konfigurasi database

            Membuat koneksi ke database

            Digunakan ulang dengan include()

            include("koneksi.php");
        </li>
        <li>
            proses-daftar.php (Proses Simpan Data)

            File ini bertugas untuk memproses data dari form dan menyimpannya ke database.

            Alur proses:

            Mengecek apakah tombol Daftar ditekan

            Mengambil data dari $_POST

            Menyimpan data ke tabel calon_siswa

            Mengarahkan kembali ke index.php dengan status sukses/gagal
        </li>
        <li>
            kurang tanda $ harusnya
            $sekolah = $_POST['sekolah_asal'];
        </li>
        <li>
            Struktur Tabel calon_siswa

            Tabel ini menyimpan data pendaftaran siswa baru.

            Kolom Keterangan
            id Primary key
            nama Nama siswa
            alamat Alamat siswa
            jenis_kelamin Jenis kelamin
            agama Agama
            sekolah_asal Sekolah asal

        </li>
        <li>

            FILE index.php (HASIL PENDAFTARAN)

            File ini berfungsi untuk:

            Menampilkan pesan sukses/gagal

            Menampilkan data siswa yang sudah terdaftar
        </li>
    </ul>





</body>

</html>