<?php
session_start();
require '../function.php';
cekLogin();
?>
<html lang="id">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Website Telekonsultasi Kesehatan Mental</title>
  <link rel="stylesheet" href="../style/booking.css">
  
 </head>
 <body>
  <!-- Header Section -->
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
  <!-- Booking Form Section -->
  <section class="booking-form">
   <div class="container">
    <h2>
     Daftar Konsultasi
    </h2>
    <form id="bookingForm" method="POST" action="proses_booking.php">
        <!-- Konsultan (Dokter) -->
        <div class="form-group">
            <label for="dokter">Konsultan</label>
            <select id="dokter" name="dokter" required>
                <option value="Kim Sabu, S.Psi, M.Psi.">Kim Sabu, S.Psi, M.Psi.</option>
                <option value="Dr. Chae Song Hwa Sp.KJ.">Dr. Chae Song Hwa Sp.KJ.</option>
                <option value="Lee Ik Jun, S.Psi., M.Psi.">Lee Ik Jun, S.Psi., M.Psi.</option>
            </select>
        </div>
    
        <!-- Pasien -->
        <div class="form-group">
            <label for="pasien">Pasien</label>
            <input id="pasien" name="pasien" placeholder="Nama" type="text" required />
        </div>
    
        <!-- Tanggal Lahir -->
        <div class="form-group">
            <label for="tanggalLahir">Tanggal Lahir</label>
            <input id="tanggalLahir" name="tanggalLahir" type="date" max="" required />
        </div>
    
        <!-- No HP -->
        <div class="form-group">
            <label for="noHp">No HP</label>
            <input id="noHp" name="noHp" placeholder="No HP" type="tel" required />
        </div>
    
        <!-- Email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" name="email" placeholder="Email" type="email" required />
        </div>
    
        <!-- Tanggal Booking -->
        <div class="form-group">
            <label for="tanggalBooking">Tanggal Booking</label>
            <input id="tanggalBooking" name="tanggalBooking" type="date" min="" required />
        </div>
    
        <!-- Waktu Booking -->
        <div class="form-group">
            <label for="waktuBooking">Waktu Booking</label>
            <select id="waktuBooking" name="waktuBooking">
                <option disabled selected value="">Pilih waktu konsultasi</option>
                <option value="08:00-10:00">08:00 - 10:00</option>
                <option value="10:00-12:00">10:00 - 12:00</option>
            </select>
        </div>
    
        <!-- Layanan -->
        <div class="layanan-group">
            <div class="layanan-option" data-radio="layanan1">
                <input id="layanan1" name="layanan" type="radio" value="Layanan Individu" required />
                <label for="layanan1">Paket Individu</label>
                <div class="price">Rp 300.000</div>
                <div class="price-new">Gratis</div>
            </div>
            <div class="layanan-option" data-radio="layanan2">
                <input id="layanan2" name="layanan" type="radio" value="Layanan Couple" required />
                <label for="layanan2">Paket Couple</label>
                <div class="price">Rp 500.000</div>
                <div class="price-new">Gratis</div>
            </div>
            <div class="layanan-option" data-radio="layanan3">
                <input id="layanan3" name="layanan" type="radio" value="Layanan Family" required />
                <label for="layanan3">Paket Family</label>
                <div class="price">Rp 800.000</div>
                <div class="price-new">Gratis</div>
            </div>
        </div>
    
        <!-- Submit Button -->
        <button class="form-button" id="submitBtn" type="submit">Booking</button>
    </form>
    
   </div>
  </section>
  <!-- Footer Section -->
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
<script>
    document.getElementById('tanggalBooking').setAttribute('min', new Date().toISOString().split('T')[0]);
    document.getElementById('tanggalLahir').setAttribute('max', new Date().toISOString().split('T')[0]);
    document.getElementById('bookingForm').addEventListener('submit', function(e) {
        const dokterValue = document.getElementById('dokter').value;
        const pasien = document.getElementById('pasien').value;
        const tanggalLahir = document.getElementById('tanggalLahir').value;
        const noHp = document.getElementById('noHp').value;
        const email = document.getElementById('email').value;
        const tanggalBooking = document.getElementById('tanggalBooking').value;
        const waktuBooking = document.getElementById('waktuBooking').value;
        const layananSelected = document.querySelector('input[name="layanan"]:checked');

        if (!(pasien && tanggalLahir && noHp && email && tanggalBooking && waktuBooking && layananSelected)) {
            e.preventDefault();
            alert("Mohon lengkapi semua informasi sebelum melanjutkan.");
        }
    });

    // Layanan option
    document.querySelectorAll('.layanan-option').forEach(option => {
        option.addEventListener('click', function() {
            const radioId = this.getAttribute('data-radio');
            document.getElementById(radioId).checked = true;
            document.querySelectorAll('.layanan-option').forEach(opt => opt.classList.remove('selected'));
            this.classList.add('selected');
        });
    });
</script>
 </body>
</html>
