<?php
session_start();
require '../function.php';
cekLogin();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terima Kasih - SiCare</title>
  <link rel="stylesheet" href="../style/afterBooking.css">
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
            <a href="../login/logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
</nav>

  <!-- Main content -->
  <div class="content">
    <div class="thank-you-message">
      <h2>Terima Kasih atas Kepercayaan Anda!</h2>
      <p>Langkah selanjutnya dalam perjalanan konsultasi mental Anda hampir selesai!</p>
      <p>Tim kami sedang memproses pesanan Anda dan akan segera mengirimkan:</p>
      <ul>
        <li>Kode akses untuk sesi konsultasi melalui Zoom atau Google Meet.</li>
        <li>Petunjuk tambahan untuk memulai sesi Anda.</li>
      </ul>
      <p>Email akan dikirim ke alamat yang Anda gunakan saat mendaftar.</p>
      <p>Terima kasih telah memilih kami sebagai partner dalam mendukung kesehatan mental Anda. Kami siap membantu! 💙</p>

      <div class="actions">
        <a href="../home/homepage.php" class="back-button">BACK</a>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-content">
        <div class="footer-left">
            <img src="../src/Si-Care.svg" alt="Logo" class="logo">
            <p>"Bicara dengan hati,<br>temukan solusi"<br>-SiCare-</p>
        </div>
        <div class="footer-right">
            <div class="contact-info">
                <p><strong>Kontak:</strong></p>
                <p>081023456</p>
                <p>sicare@gmail.com</p>
            </div>
            <div class="social-links">
                <p><strong>Sosial Media:</strong></p>
                <img src="/api/placeholder/24/24" alt="WhatsApp">
                <img src="../src/logo-email.png" alt="Email">
                <img src="../src/logo-insta.png" alt="Instagram">
            </div>
        </div>
    </div>
</footer>

</body>
</html>
