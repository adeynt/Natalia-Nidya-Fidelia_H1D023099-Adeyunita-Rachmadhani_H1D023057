<?php
session_start();
include('koneksi.php'); // Pastikan koneksi ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['email'])) {
        $emailUser = $_SESSION['email']; // Email pengguna yang sudah login
    } else {
        echo "Anda harus login terlebih dahulu.";
        exit;
    }

    // Menangkap data dari form
    $dokter = $_POST['dokter'];
    $pasien = $_POST['pasien'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $noHp = $_POST['noHp'];
    $emailInput = $_POST['email']; // Email yang diisi di form
    $tanggalBooking = $_POST['tanggalBooking'];
    $waktuBooking = $_POST['waktuBooking'];
    $layanan = $_POST['layanan'];

    // Query untuk memasukkan data ke tabel bookings
    $sql = "INSERT INTO bookings (email, dokter, pasien, tanggalLahir, noHp, email_input, tanggalBooking, waktuBooking, layanan) 
            VALUES ('$emailUser', '$dokter', '$pasien', '$tanggalLahir', '$noHp', '$emailInput', '$tanggalBooking', '$waktuBooking', '$layanan')";

    if ($conn->query($sql) === TRUE) {
        // Redirect ke halaman lain (misalnya halaman sukses atau email setelah sukses)
        header("Location: kirim.php?emailInput=$emailInput&pasien=$pasien&waktuBooking=$waktuBooking&tanggalBooking=$tanggalBooking");
        exit; // Pastikan script berhenti setelah redirect
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
