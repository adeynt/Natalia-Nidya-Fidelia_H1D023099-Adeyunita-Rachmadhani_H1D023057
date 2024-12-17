<?php
session_start();
require '../function.php';
tambahBtn();
?>
<html>
 <head>
  <title>
   SI-CARE - Tes Tingkat Keparahan Stres
  </title>
  <link rel="stylesheet" href="../style/testMental.css">
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
  <div class="container">
   <div class="content">
    <h2>
     Tes Tingkat Keparahan Stres: Mengenal Diri Lebih Dalam
    </h2>
    <h3>
     Dalam 2 minggu terakhir, Seberapa sering kamu merasa terganggu oleh hal berikut...
    </h3>
    <div class="question">
     <p>
      Kurang senang atau tertarik dalam kegiatan sehari-hari?
     </p>
     <div class="options">
      <label>
       <input name="q1" type="radio" value="0"/>
       Tidak pernah
      </label>
      <label>
       <input name="q1" type="radio" value="1"/>
       Jarang
      </label>
      <label>
       <input name="q1" type="radio" value="2"/>
       Kadang-kadang
      </label>
      <label>
       <input name="q1" type="radio" value="3"/>
       Cukup sering
      </label>
      <label>
       <input name="q1" type="radio" value="4"/>
       Sangat sering
      </label>
     </div>
    </div>
    <div class="question">
     <p>
      Merasa sedih, muram, dan putus asa?
     </p>
     <div class="options">
        <label>
        <input name="q2" type="radio" value="0"/>
        Tidak pernah
       </label>
       <label>
        <input name="q2" type="radio" value="1"/>
        Jarang
       </label>
       <label>
        <input name="q2" type="radio" value="2"/>
        Kadang-kadang
       </label>
       <label>
        <input name="q2" type="radio" value="3"/>
        Cukup sering
       </label>
       <label>
        <input name="q2" type="radio" value="4"/>
        Sangat sering
       </label>
     </div>
    </div>
    <div class="question">
     <p>
      Sulit tidur atau tidur nyenyak; atau terlalu banyak tidur?
     </p>
     <div class="options">
      <label>
        <label>
        <input name="q3" type="radio" value="0"/>
        Tidak pernah
       </label>
       <label>
        <input name="q3" type="radio" value="1"/>
        Jarang
       </label>
       <label>
        <input name="q3" type="radio" value="2"/>
        Kadang-kadang
       </label>
       <label>
        <input name="q3" type="radio" value="3"/>
        Cukup sering
       </label>
       <label>
        <input name="q3" type="radio" value="4"/>
        Sangat sering
       </label>
     </div>
    </div>
    <div class="question">
     <p>
      Merasa lelah atau kekurangan energi?
     </p>
     <div class="options">
        <label>
        <input name="q4" type="radio" value="0"/>
        Tidak pernah
       </label>
       <label>
        <input name="q4" type="radio" value="1"/>
        Jarang
       </label>
       <label>
        <input name="q4" type="radio" value="2"/>
        Kadang-kadang
       </label>
       <label>
        <input name="q4" type="radio" value="3"/>
        Cukup sering
       </label>
       <label>
        <input name="q4" type="radio" value="4"/>
        Sangat sering
       </label>
     </div>
    </div>
    <div class="question">
     <p>
      Tidak napsu makan, atau terlalu banyak makan?
     </p>
     <div class="options">
      <label>
        <label>
        <input name="q5" type="radio" value="0"/>
        Tidak pernah
       </label>
       <label>
        <input name="q5" type="radio" value="1"/>
        Jarang
       </label>
       <label>
        <input name="q5" type="radio" value="2"/>
        Kadang-kadang
       </label>
       <label>
        <input name="q5" type="radio" value="3"/>
        Cukup sering
       </label>
       <label>
        <input name="q5" type="radio" value="4"/>
        Sangat sering
       </label>
     </div>
    </div>
    <div class="question">
     <p>
      Merasa buruk tentang diri sendiri, atau merasa gagal atau mengecewakan diri atau keluargamu?
     </p>
     <div class="options">
        <label>
        <input name="q6" type="radio" value="0"/>
        Tidak pernah
       </label>
       <label>
        <input name="q6" type="radio" value="1"/>
        Jarang
       </label>
       <label>
        <input name="q6" type="radio" value="2"/>
        Kadang-kadang
       </label>
       <label>
        <input name="q6" type="radio" value="3"/>
        Cukup sering
       </label>
       <label>
        <input name="q6" type="radio" value="4"/>
        Sangat sering
       </label>
     </div>
    </div>
    <div class="question">
     <p>
      Kesulitan berkonsentrasi, seperti saat membaca koran atau menonton TV?
     </p>
     <div class="options">
        <label>
        <input name="q7" type="radio" value="0"/>
        Tidak pernah
       </label>
       <label>
        <input name="q7" type="radio" value="1"/>
        Jarang
       </label>
       <label>
        <input name="q7" type="radio" value="2"/>
        Kadang-kadang
       </label>
       <label>
        <input name="q7" type="radio" value="3"/>
        Cukup sering
       </label>
       <label>
        <input name="q7" type="radio" value="4"/>
        Sangat sering
       </label>
     </div>
    </div>
    <div class="question">
     <p>
      Bergerak atau berbicara dengan lambat hingga orang lain menyadarinya? Atau merasa kurang istirahat dan tidak bisa diam lebih dari biasanya?
     </p>
     <div class="options">
      <label>
        <label>
        <input name="q8" type="radio" value="0"/>
        Tidak pernah
       </label>
       <label>
        <input name="q8" type="radio" value="1"/>
        Jarang
       </label>
       <label>
        <input name="q8" type="radio" value="2"/>
        Kadang-kadang
       </label>
       <label>
        <input name="q8" type="radio" value="3"/>
        Cukup sering
       </label>
       <label>
        <input name="q8" type="radio" value="4"/>
        Sangat sering
       </label>
     </div>
    </div>
    <div class="question">
     <p>
      Merasa lebih baik mati, atau berpikir ingin menyakiti diri sendiri?
     </p>
     <div class="options">
        <label>
        <input name="q9" type="radio" value="0"/>
        Tidak pernah
       </label>
       <label>
        <input name="q9" type="radio" value="1"/>
        Jarang
       </label>
       <label>
        <input name="q9" type="radio" value="2"/>
        Kadang-kadang
       </label>
       <label>
        <input name="q9" type="radio" value="3"/>
        Cukup sering
       </label>
       <label>
        <input name="q9" type="radio" value="4"/>
        Sangat sering
       </label>
     </div>
    </div>
    <div class="question">
     <p>
      Seberapa sering Anda merasa marah karena hal-hal yang terjadi di luar kendali Anda?
     </p>
     <div class="options">
      <label>
        <label>
        <input name="q10" type="radio" value="0"/>
        Tidak pernah
       </label>
       <label>
        <input name="q10" type="radio" value="1"/>
        Jarang
       </label>
       <label>
        <input name="q10" type="radio" value="2"/>
        Kadang-kadang
       </label>
       <label>
        <input name="q10" type="radio" value="3"/>
        Cukup sering
       </label>
       <label>
        <input name="q10" type="radio" value="4"/>
        Sangat sering
       </label>
     </div>
    </div>
    <button class="submit-btn" id="submit">
     Kirim
    </button>
    <div class="score" id="score">
     Skor Anda : 30 - Depresi sedang menuju berat
    </div>
        <a href="../home/homepage.php#doctors" class="consult-btn">Cari Konsultan</a>
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
document.getElementById('submit').addEventListener('click', function () {
    const questions = document.querySelectorAll('.question');
    let totalScore = 0;
    let allAnswered = true;

    questions.forEach((question) => {
        const selectedOption = question.querySelector('input[type="radio"]:checked');
        if (selectedOption) {
            totalScore += parseInt(selectedOption.value, 10); 
        } else {
            allAnswered = false;
        }
    });

    const scoreElement = document.getElementById('score');
    if (allAnswered) {
        let resultMessage = '';
        if (totalScore >= 0 && totalScore <= 7) {
            resultMessage = 'Tidak ada gejala depresi';
        } else if (totalScore >= 8 && totalScore <= 15) {
            resultMessage = 'Depresi ringan';
        } else if (totalScore >= 16 && totalScore <= 23) {
            resultMessage = 'Depresi sedang';
        } else if (totalScore >= 24 && totalScore <= 31) {
            resultMessage = 'Depresi sedang menuju berat';
        } else if (totalScore >= 32 && totalScore <= 40) {
            resultMessage = 'Depresi berat';
        }


        scoreElement.innerHTML = `Skor Anda: ${totalScore} - ${resultMessage}`;
        scoreElement.style.display = "block";
    } else {
        alert("Silakan jawab semua pertanyaan");
        scoreElement.innerHTML = '';
        scoreElement.style.display = "block";
    }
});

</script>
 </body>
</html>