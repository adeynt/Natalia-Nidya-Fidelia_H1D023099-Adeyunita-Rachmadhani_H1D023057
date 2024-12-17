<?php
session_start();
require '../function.php';
tambahBtn();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel 1</title>
    <link rel="stylesheet" href="../style/artikel.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-content">
            <img src="../src/Si-Care.svg" alt="SiCare Logo" class="logo">
            <div class="nav-links">
                <a href="../home/homepage.php">Beranda</a>
                <a href="../test/test.php">Tes Depresi</a>
                <a href="../home/homepage.php#doctors">Dokter</a>
                <a href="../home/homepage.php#services">Layanan</a>
                <a href="../home/homepage.php#articles">Artikel</a>
                <?php echo tambahBtn(); ?>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h1>Pentingnya Memahami Perbedaan Sedih dan Depresi</h1><br>
        <img src="../src/artikel1.png" alt="Ilustrasi Sedih dan Depresi">
        <p><strong>SiCare</strong> - Sedih adalah suatu perasaan atau emosi yang umum terjadi pada setiap orang. Hal ini dapat timbul ketika kehilangan seseorang yang disayangi. Namun, banyak orang yang mengalami kesedihan berlarut-larut yang ternyata disebabkan oleh depresi. Tidak sedikit orang menganggap dua hal tersebut adalah kejadian yang sama.</p><br>
        <p>Memang sulit untuk mengetahui perbedaan antara sedih dan depresi jika hanya dilihat sekejap saja. Maka dari itu, kamu harus tahu perbedaan antara diagnosis depresi dan rasa sedih yang dapat membantu untuk menanganinya segera agar tidak berlarut-larut. Berikut beberapa perbedaan yang harus diketahui dari keduanya!</p><br>

        <h2>Perbedaan Antara Sedih dan Depresi</h2><br>
        <p>Kesedihan adalah emosi yang dipicu oleh suatu peristiwa, pengalaman, hingga situasi yang menyakitkan dan mengecewakan. Terdapat berbagai tingkat kesedihan yang dapat terjadi pada seseorang. Meski begitu, rasa sedih hanya bersifat sementara dan dapat menghilang seiring berjalannya waktu. Rasa sedih yang timbul memiliki perbedaan dengan depresi dari banyak aspek.</p>
        <p>Depresi sendiri adalah penyakit mental yang dapat memengaruhi pemikiran, emosi, persepsi, hingga perilaku seseorang, sehingga keadaan emosi yang tidak normal. Saat mengalami depresi, setiap orang yang mengidapnya kerap merasa sedih tentang semua hal. Seseorang dapat mengalami depresi tanpa mengalami beberapa peristiwa kehilangan dan sebagainya. Jika tidak diatasi, beberapa dampak buruk mungkin saja terjadi.</p><br>

        <h3>1. Penyebabnya Berbeda</h3>
        <p>Sedih dan depresi adalah dua hal yang memiliki perbedaan dari segi penyebabnya. Sedih adalah terjadinya gangguan dari segi emosi. Hal ini sangat umum dan normal untuk terjadi pada semua orang. Berbeda dengan depresi yang penyebabnya tidak selalu jelas.</p>
        <p>Namun, depresi adalah gangguan yang tidak dialami oleh kebanyakan orang. Hal ini dapat disebabkan oleh gangguan mental yang dapat berdampak buruk bagi kesehatan. Saat mengalami depresi, kelainan tersebut dapat berdampak buruk bagi cara berpikir, perasaan, hingga persepsi pada semua hal.</p><br>

        <h3>2. Dampak pada Kualitas Hidup</h3>
        <p>Seseorang biasanya merasa sedih hanya untuk sementara dan akan menghilang setelah beberapa waktu. Namun, jika kamu mengidap depresi, hal ini dapat terjadi dalam waktu yang lama jika tidak mendapatkan penanganan. Pengidap depresi juga kerap merasa tidak memiliki motivasi dan selalu dibaluti rasa sedih. Hal tersebut bahkan dapat memengaruhi aktivitas harian hingga produktivitas yang berhubungan dengan pekerjaan, bahkan semua hal di dalam hidup.</p>
        <p>Kamu juga dapat bertanya pada konsultan dari SiCare tentang perbedaan antara sedih dan depresi.</p><br>

        <h3>3. Penanganan Depresi dan Sedih</h3>
        <p>Sedih dan depresi juga memiliki perbedaan dari segi penanganan. Saat seseorang merasakan sedih, beberapa kegiatan positif dapat membantu untuk melupakannya. Beberapa kegiatan tersebut adalah menonton film, bertemu dengan teman-teman, rutin berolahraga, hingga bercerita dengan orang terdekat tentang perasaan sedih tersebut.</p>
        <p>Hal tersebut juga dapat membuat depresi menjadi lebih baik tetapi tidak dapat mereda hingga mendapatkan pengobatan. Pengidap depresi harus mendapatkan perawatan berupa psikoterapi, konseling, hingga mengonsumsi obat antidepresan.</p><br>

        <p>Itulah perbedaan antara sedih dan depresi yang dapat diketahui. Jangan pernah membiarkan depresi dalam waktu yang lama karena dampak buruknya hingga mungkin saja membuat kamu memiliki pikiran untuk bunuh diri.</p>
    </div>

    <!-- Footer -->
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
</body>
</html>
