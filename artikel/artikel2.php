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
    <title>Artikel 2</title>
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
        <h1>Pola Hidup Sehat Bisa Mencegah Terjadinya Depresi</h1><br>
        <img src="../src/artikel2.png" alt="Ilustrasi Hidup Sehat">
        <p><strong>SiCare</strong> - Bukan tanpa alasan kamu dianjurkan untuk menerapkan pola hidup sehat setiap hari. Selain untuk menjaga kesehatan dan kebugaran tubuh, menerapkan pola hidup sehat juga bisa mencegah depresi lho. Simak penjelasannya lebih lanjut di bawah ini. <br><br>
            Depresi dikelompokkan sebagai gangguan mood yang ditandai dengan perasaan sedih dan kehilangan minat terus-menerus yang dapat menyebabkan pengidapnya tidak bisa beraktivitas dengan baik. Ada banyak hal yang dapat memicu terjadinya kondisi mental tersebut, seperti pengalaman menyakitkan, tekanan hidup, penyakit, dan konsumsi obat-obatan. Itulah mengapa tidak heran bila ada banyak orang yang mengalami depresi.<br><br>
            Menurut Pusat Pengendalian dan Pencegahan Penyakit (CDC), ada sekitar 8,1 persen orang dewasa di Amerika, yang berusia 20 tahun ke atas mengalami depresi dalam periode dua minggu, dari tahun 2013 sampai 2016. Depresi dapat memengaruhi cara seseorang merasa, berpikir, dan berperilaku, sehingga dapat menyebabkan berbagai masalah emosional dan fisik. Saat mengalami depresi, kamu mungkin kesulitan untuk melakukan kegiatan sehari-hari dengan normal, bahkan hubungan dengan orang lain pun juga bisa menjadi runyam. Karena itu, kamu dianjurkan untuk sebisa mungkin menghindari depresi.<br><br>
            Sebenarnya depresi merupakan kondisi yang tidak dapat dicegah. Hal ini karena sulit untuk mengetahui penyebab pasti depresi, sehingga cara mencegahnya pun sulit untuk diketahui. Namun, menerapkan pola hidup sehat telah diketahui dapat mengurangi risiko terjadinya depresi.<br><br></p>

        <h2>Bagaimana Cara Pola Hidup Sehat untuk Mencegah Depresi?</h2><br>
        <h3>1. Menerapkan Pola Makan Sehat</h3>
        <p>
            Selain baik untuk kesehatan tubuh, menerapkan pola makan sehat juga dapat memperbaiki suasana hati kamu secara keseluruhan lho. Cara termudah untuk memperbaiki pola makan kamu adalah dengan mengurangi junk food. Hindari juga makanan yang memiliki kadar gula yang tinggi, makanan yang dikemas, dan lemak jenuh. Sebaliknya, masukkanlah beberapa makanan sehat berikut ke dalam menu makan kamu sehari-hari:
        </p>
        <ol type="a">
            <li><strong>Asam Lemak</strong><br>
                Omega-3 dan omega-6 adalah dua jenis asam lemak sehat yang baik untuk kesehatan tubuh. Kamu bisa menemukan nutrisi tersebut di berbagai jenis makanan, seperti ikan, kacang-kacangan, buah-buahan dan sayuran segar, minyak zaitun.
            </li>
            <li><strong>Asam Amino</strong><br>
                Tahukah kamu, neurotransmitter atau pembawa pesan di otak terbuat dari asam amino. Neurotransmitter juga berperan penting dalam menjaga kesehatan mental. Karena itu, penuhilah kebutuhan asam amino untuk otak dengan mengonsumsi makanan, seperti daging, produk susu, buah-buahan, dan sayuran tertentu.
            </li>
            <li><strong>Karbohidrat Kompleks</strong><br>
                Karbohidrat juga dapat membantu merangsang produksi neurotransmitter serotonin yang membuat suasana hati menjadi lebih baik. Karbohidrat juga membantu tubuh untuk menyerap asam amino lebih efektif, yang membantu mensintesis protein. Otak juga memerlukan glukosa yang juga berasal dari karbohidrat. Karena itu, penting untuk mengonsumsi karbohidrat yang bisa ditemukan di biji-bijian, kacang polong, sayuran, seperti bayam dan brokoli, dan buah-buahan, seperti buah jeruk dan pir.
            </li>
        </ol><br>

        <h3>2. Olahraga</h3>
        <p>Olahraga dapat meningkatkan produksi antidepresan alami dalam tubuh kamu. Menurut Mayo Clinic, berolahraga selama 30 menit sehari, sebanyak 3-5 hari seminggu, dapat mengurangi depresi tanpa obat-obatan. Berikut ini manfaat olahraga untuk mencegah depresi:</p>
        <ul type="bullet">
            <li>Mengurangi stres</li>
            <li>Meningkatkan mood.</li>
            <li>Meningkatkan rasa menghargai diri sendiri.</li>
            <li>Membantu tidur nyenyak.</li>
        </ul><br>

        <h3>3. Tidur yang Cukup</h3>
        <p>Kelelahan karena kurang tidur dapat memperburuk suasana hati sehingga memicu depresi. Karena itu, tidur yang cukup adalah bagian penting dari rencana pencegahan depresi. Lakukanlah rutinitas tidur yang menenangkan untuk dapat membantu kamu tidur di malam hari, dan tidurlah di waktu yang sama setiap harinya untuk meningkatkan jumlah dan kualitas tidurmu.</p><br>

        <p>Itulah pola hidup sehat untuk mencegah depresi. Bila kamu sedang stres dan merasa tertekan, kamu juga bisa curhat dan menceritakan apa yang kamu rasakan pada ahlinya.</p>
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
