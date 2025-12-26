<?php include("header.php"); ?>
<?php include 'koneksi.php'; ?>

<div class="max-w-7xl mx-auto px-6 py-8">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">
        Data Pemesanan Paket Wisata
    </h1>

    <?php if (isset($_GET['status'])): ?>
        <?php if ($_GET['status'] == 'sukses'): ?>
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-800 rounded-lg">
                Berhasil Daftar Wisata
            </div>
        <?php elseif ($_GET['status'] == 'update_sukses'): ?>
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-800 rounded-lg">
                Berhasil Update Pesanan
            </div>
        <?php elseif ($_GET['status'] == 'hapus_sukses'): ?>
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-800 rounded-lg">
                Berhasil Hapus Pesanan
            </div>
        <?php else : ?>
            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-800 rounded-lg">
                Gagal daftar wisata
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <a href="form-pesan.php"
        class="inline-block px-3 py-1 bg-cyan-600 text-white rounded hover:bg-yellow-500 text-base my-2">Tambah Pesanan Wisata</a>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full border border-gray-200">
            <thead class="bg-gray-100">
                <tr class="text-left text-sm font-semibold text-gray-700">
                    <th class="px-4 py-3 border">Nama</th>
                    <th class="px-4 py-3 border">Phone</th>
                    <th class="px-4 py-3 border">Peserta</th>
                    <th class="px-4 py-3 border">Hari</th>
                    <th class="px-4 py-3 border">Penginapan</th>
                    <th class="px-4 py-3 border">Transportasi</th>
                    <th class="px-4 py-3 border">Makanan</th>
                    <th class="px-4 py-3 border">Harga Paket</th>
                    <th class="px-4 py-3 border">Total Tagihan</th>
                    <th class="px-4 py-3 border text-center">Aksi</th>
                </tr>
            </thead>

            <tbody class="text-sm text-gray-700">
                <?php
                $q = mysqli_query($db, "SELECT * FROM pemesanan");
                while ($d = mysqli_fetch_assoc($q)) {
                ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 border"><?= $d['nama']; ?></td>
                        <td class="px-4 py-2 border"><?= $d['phone']; ?></td>
                        <td class="px-4 py-2 border text-center"><?= $d['peserta']; ?></td>
                        <td class="px-4 py-2 border text-center"><?= $d['hari']; ?></td>
                        <td class="px-4 py-2 border text-center"><?= $d['penginapan'] ? 'Ya' : 'Tidak'; ?></td>
                        <td class="px-4 py-2 border text-center"><?= $d['transportasi'] ? 'Ya' : 'Tidak'; ?></td>
                        <td class="px-4 py-2 border text-center"><?= $d['makanan'] ? 'Ya' : 'Tidak'; ?></td>
                        <td class="px-4 py-2 border">
                            Rp <?= number_format($d['harga_paket'], 0, ',', '.'); ?>
                        </td>
                        <td class="px-4 py-2 border font-semibold">
                            Rp <?= number_format($d['total_tagihan'], 0, ',', '.'); ?>
                        </td>
                        <td class="px-4 py-2 border text-center space-x-2">
                            <a href="form-edit.php?id=<?= $d['id']; ?>"
                                class="inline-block px-3 py-1 bg-yellow-400 text-white rounded hover:bg-yellow-500 text-xs">
                                Edit
                            </a>
                            <a href="hapus.php?id=<?= $d['id']; ?>"
                                onclick="return confirm('Anda yakin akan menghapus data ini?')"
                                class="inline-block px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 text-xs">
                                Hapus
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include("footer.php"); ?>