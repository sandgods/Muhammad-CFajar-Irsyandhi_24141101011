<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promosi Tempat Wisata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #2e7d32;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        .hero {
            position: relative;
            background-image: url('https://via.placeholder.com/1200x400?text=Hero+Image+Wisata'); /* Ganti dengan URL foto hero */
            background-size: cover;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }
        .hero h1 {
            position: relative;
            z-index: 1;
            font-size: 3em;
        }
        .gallery {
            padding: 20px;
            text-align: center;
        }
        .gallery h2 {
            margin-bottom: 20px;
        }
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }
        .gallery img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }
        .video-section {
            padding: 20px;
            background-color: #e8f5e8;
            text-align: center;
        }
        .video-section h2 {
            margin-bottom: 20px;
        }
        .packages {
            padding: 20px;
            text-align: center;
        }
        .packages h2 {
            margin-bottom: 20px;
        }
        .package-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .package {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .package img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .package-content {
            padding: 15px;
        }
        .package h3 {
            margin: 0 0 10px;
        }
        .package p {
            margin: 0 0 15px;
        }
        .btn {
            background-color: #1976d2;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
        footer {
            background-color: #2e7d32;
            color: white;
            text-align: center;
            padding: 10px;
        }
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2em;
            }
            nav ul {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Header dengan Menu Aplikasi -->
    <header>
        <div class="logo">Wisata Talaga herang</div>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#gallery">Galeri</a></li>
                <li><a href="#video">Video</a></li>
                <li><a href="#packages">Paket</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section dengan Foto Utama -->
    <section class="hero" id="home">
        <h1>Jelajahi Keindahan Wisata Indonesia</h1>
    </section>

    <!-- Galeri Foto Kegiatan Wisata -->
    <section class="gallery" id="gallery">
        <h2>Foto-Foto Kegiatan Wisata</h2>
        <div class="gallery-grid">
            <img src="Talaga herang kegiatan 1.webp" alt="Kegiatan Wisata 1">
            <img src="Talaga herang kegiatan 2.webp" alt="Kegiatan Wisata 2">
            <img src="Talaga herang kegiatan 3.webp" alt="Kegiatan Wisata 3">
            <img src="Talaga herang kegiatan 4.webp" alt="Kegiatan Wisata 4">
            <!-- Tambahkan lebih banyak gambar sesuai kebutuhan -->
        </div>
    </section>

    <!-- Section Video -->
    <section class="video-section" id="video">
        <h2>Video Promosi Wisata</h2>
        <p>Tonton video menarik tentang destinasi kami:</p>
        <a href="https://youtu.be/nyCxv3OAYhs?si=2ZYUZydz0O8zR9pv" class="btn" target="_blank">Lihat Video di YouTube</a>
        <!-- Atau embed video: <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe> -->
    </section>

    <!-- Daftar Paket Wisata -->
    <section class="packages" id="packages">
        <h2>Daftar Paket Wisata</h2>
        <div class="package-grid">
            <div class="package">
                <img src="Talaga Herang.webp" alt="Paket Bali">
                <div class="package-content">
                    <h3>Harga Tiket dan Parkir Talaga Herang</h3>
                    <p>Tiket masuk telaga	Rp5.000,00
Parkir motor	Rp2.000,00
Parkir mobil	Rp5.000,00
Tiket masuk Wanda Waterpark dewasa	Rp10.000,00
Tiket masuk Wanda Waterpark anak-anak	Rp8.000,00
Wahana bola air	Rp20.000,00
Wahana kursi air	Rp20.000,00</p>
                    <a href="#" class="btn">Pesan Sekarang</a>
                </div>
            </div>
            <!-- Tambahkan paket lainnya -->
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <p>&copy; 2023 Wisata Nusantara. Hubungi kami di info@wisatanusantara.com</p>
    </footer>

    <script>
        // JavaScript sederhana untuk smooth scroll pada menu
        document.querySelectorAll('nav a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                target.scrollIntoView({ behavior: 'smooth' });
            });
        });
    </script>
</body>
</html>