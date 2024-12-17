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
    <meta name="description" content="Profil Dokter dan Psikolog Profesional">
    <title>Profil Dokter - Kim Sabu</title>
    <link rel="stylesheet" href="../style/dokter.css">
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

    <!-- Profil Section -->
    <section class="profile-section">
        <img src="../src/dokterikjun.jpg" alt="Kim Sabu">
        <div class="profile-info">
            <h2>Kim Sabu, S.Psi., M.Psi.</h2>
            <p><strong>Spesialis:</strong> Psikologi</p>
            <p><strong>Pendidikan:</strong></p>
            <ul>
                <li>Yonsei University - S1 Psychology</li>
                <li>Seoul National University - S2 Psychology</li>
            </ul>
            <p><strong>Pengalaman:</strong></p>
            <ul>
                <li>RS Yulje, Seoul - Head of Psychology Department</li>
                <li>SiCare Psychologist Clinic - Consultant</li>
            </ul>
            <a href="../booking/bookingdokter1.php" class="book-btn">BOOK NOW</a>
        </div>
    </section>

    <!-- Jadwal Praktik -->
    <section class="schedule">
        <h3>Jadwal Praktik</h3>
        <table>
            <thead>
                <tr>
                    <th>Senin</th>
                    <th>Selasa</th>
                    <th>Rabu</th>
                    <th>Kamis</th>
                    <th>Jumat</th>
                    <th>Sabtu</th>
                    <th>Minggu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>10.00 - 12.00</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </section>

    
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
