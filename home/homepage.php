<?php
session_start();
require '../function.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Telekonsultasi Kesehatan Mental</title>
    <link rel="stylesheet" href="../style/home.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-content">
            <img src="../src/Si-Care.svg" alt="Logo" class="logo">
            <div class="nav-links">
                <a href="../home/homepage.php">Beranda</a>
                <a href="../test/test.php">Tes Depresi</a>
                <a href="#doctors">Dokter</a>
                <a href="#services">Layanan</a>
                <a href="#articles">Artikel</a>
                <?php echo tambahBtn(); ?>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Selamat Datang di Website Telekonsultasi Kesehatan Mental!</h1>
                <p>Rutin cek kesehatan mentalmu supaya kesehatan mentalmu terjaga dan terhindar dari stress, depresi, dan overthinking berlebihan yang dapat menghambat aktivitasmu.</p>
                <a href="../test/test.php" class="button">Tes Depresi</a>
            </div>
            <img src="../src/OrangPsi.png" alt="Telekonsultasi" class="hero-image">
        </div>
    </section>

    <section class="doctors" id="doctors">
        <div class="container">
            <h2>DOKTER</h2>
            <p class="text-center">Dapatkan pelayanan kesehatan terbaik. Lihat profil lengkap konsultan, spesialisasi, dan pengalaman mereka.</p>
            <div class="doctor-cards">
                <div class="doctor-card">
                    <img src="../src/doktersabu.jpg" alt="Kim Sabu" class="doctor-image">
                    <h3>Kim Sabu, S.Psi., M.Psi.</h3>
                    <a href="../dokter/dokter1.php" class="button">Lihat Profil</a>
                </div>
                <div class="doctor-card">
                    <img src="../src/dokterchae.jpg" alt="Dr. Chae Song Hwa" class="doctor-image">
                    <h3>dr. Chae Song Hwa, Sp.KJ.</h3>
                    <a href="../dokter/dokter2.php" class="button">Lihat Profil</a>
                </div>
                <div class="doctor-card">
                    <img src="../src/dokterikjun.jpg" alt="Lee Ik Jun" class="doctor-image">
                    <h3>Lee Ik Jun, S.Psi., M.Psi.</h3>
                    <a href="../dokter/dokter3.php" class="button">Lihat Profil</a>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container">
            <h2>LAYANAN</h2>
            <p class="text-center">Layanan konseling individu, pasangan, dan keluarga untuk membantu Anda menghadapi tantangan hidup. Buat janji dengan mudah dan mulai perjalanan Anda menuju kesejahteraan.</p>
            <div class="service-cards">
                <div class="service-card">
                    <img src="../src/individu.png" alt="Paket Individu" class="service-image">
                    <h3>Paket Individu</h3>
                    <div id="isi1">
                        <p class="price">Rp500.000</p>
                        <p class="free">GRATIS!!!</p>
                    </div>
                    <button class="button" id="service1" onclick="ubah1()">Lihat Paket</button>
                </div>
                <div class="service-card">
                    <img src="../src/couple.png" alt="Paket Couple" class="service-image">
                    <h3>Paket Couple</h3>
                    <div id="isi2">
                        <p class="price">Rp500.000</p>
                        <p class="free">GRATIS!!!</p>
                    </div>
                    <button class="button" id="service2" onclick="ubah2()">Lihat Paket</button>
                </div>
                <div class="service-card">
                    <img src="../src/family.png" alt="Paket Family" class="service-image">
                    <h3>Paket Family</h3>
                    <div id="isi3">
                        <p class="price">Rp500.000</p>
                        <p class="free">GRATIS!!!</p>
                    </div>
                    <button class="button" id="service3" onclick="ubah3()">Lihat Paket</button>
                </div>
            </div>
    </section>

    <section class="articles" id="articles">
        <div class="container">
            <h2>ARTIKEL</h2>
            <p class="text-center">Dari stres sehari-hari hingga pengelolaan emosi, kami menghadirkan artikel menarik untuk membantu Anda memahami dan merawat kesehatan mental Anda.</p>
            <div class="article-list">
                <div class="article-card">
                    <div>
                        <h3>Pentingnya Memahami Perbedaan Sedih dan Depresi</h3>
                        <p>18 November 2024 • 3 menit waktu baca</p>
                    </div>
                    <a href="../artikel/artikel1.php" class="button">></a>
                </div>
                <div class="article-card">
                    <div>
                        <h3>Jarang Diketahui, Ini 4 Manfaat Vitamin B6 untuk Kesehatan Mental</h3>
                        <p>18 November 2024 • 4 menit waktu baca</p>
                    </div>
                    <a href="../artikel/artikel2.php" class="button">></a>
                </div>
                <div class="article-card">
                    <div>
                        <h3>Pola Hidup Sehat Bisa Mencegah Terjadinya Depresi</h3>
                        <p>18 November 2024 • 4 menit waktu baca</p>
                    </div>
                    <a href="../artikel/artikel3.php" class="button">></a>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-left">
                <img src="../src/Si-Care.svg" alt="Logo" class="logo">
                <p>"Bicara dengan hati,<br>temukan solusi"<br>-SiCare-</p>
            </div>
            <div class="footer-right">
                <div class="social-links">
                  <p><strong>Follow Us</strong></p>
                  <div class="social-item">
                    <img src="../src/logo-wa.svg" alt="WhatsApp">
                    <span>081023456</span>
                  </div>
                  <div class="social-item">
                      <img src="../src/logo-email.png" alt="Email">
                      <span>sicare@gmail.com</span>
                  </div>
                  <div class="social-item">
                      <img src="../src/logo-insta.png" alt="Instagram">
                      <span>@si.care</span>
                  </div>
              </div>
              
            </div>
        </div>
    </footer>
    <script>
        // Simpan HTML awal untuk mengembalikan kondisi
        const isi1Awal = `
            <p class="price">Rp300.000</p>
            <p class="free">GRATIS!!!</p>
            <button class="button" id="service1" onclick="ubah1()">Lihat Paket</button>
        `;
        function reset1() {
            document.getElementById("isi1").innerHTML = isi1Awal;
        }
        const isi2Awal = `
            <p class="price">Rp500.000</p>
            <p class="free">GRATIS!!!</p>
            <button class="button" id="service2" onclick="ubah2()">Lihat Paket</button>
        `;
        function reset2() {
            document.getElementById("isi2").innerHTML = isi2Awal;
        }
        const isi3Awal = `
            <p class="price">Rp800.000</p>
            <p class="free">GRATIS!!!</p>
            <button class="button" id="service3" onclick="ubah3()">Lihat Paket</button>
        `;
        function reset3() {
            document.getElementById("isi3").innerHTML = isi3Awal;
        }
        function ubah1() {
    document.getElementById("isi1").innerHTML = `
        <ul>
            <li>Konsultasi hanya untuk 1 orang</li>
            <li>Durasi konsultasi 2 jam</li>
            <li>Konsultan berusia 40+</li>
            <li>Pengalaman lebih dari 10 tahun</li>
        </ul>
        <button class="button" onclick="reset1()">Kembali</button>
    `;
    document.getElementById("service1").style.display = "none";
}

function ubah2() {
    document.getElementById("isi2").innerHTML = `
        <ul>
            <li>Konsultasi untuk pasangan</li>
            <li>Durasi konsultasi 2 jam</li>
            <li>Konsultan berusia 40+</li>
            <li>Pengalaman lebih dari 10 tahun</li>
        </ul>
        <button class="button" onclick="reset2()">Kembali</button>
    `;
    document.getElementById("service2").style.display = "none";
}

function ubah3() {
    document.getElementById("isi3").innerHTML = `
        <ul>
            <li>Konsultasi untuk 3-6 orang</li>
            <li>Durasi konsultasi 2 jam</li>
            <li>Konsultan berusia 40+</li>
            <li>Pengalaman lebih dari 10 tahun</li>
        </ul>
        <button class="button" onclick="reset3()">Kembali</button>
    `;
    document.getElementById("service3").style.display = "none";
}

    </script>
</body>
</html>