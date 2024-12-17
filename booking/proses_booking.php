<?php
session_start();
include('../login/koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['email'])) {
        $emailUser = $_SESSION['email'];
    } else {
        echo "Anda harus login terlebih dahulu.";
        exit;
    }

    $dokter = $_POST['dokter'];
    $pasien = $_POST['pasien'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $noHp = $_POST['noHp'];
    $emailInput = $_POST['email'];
    $tanggalBooking = $_POST['tanggalBooking'];
    $waktuBooking = $_POST['waktuBooking'];
    $layanan = $_POST['layanan'];

    $sql = "INSERT INTO bookings (email, dokter, pasien, tanggalLahir, noHp, email_input, tanggalBooking, waktuBooking, layanan) 
            VALUES ('$emailUser', '$dokter', '$pasien', '$tanggalLahir', '$noHp', '$emailInput', '$tanggalBooking', '$waktuBooking', '$layanan')";

    if ($koneksi->query($sql) === TRUE) {
        header("Location: kirim.php?emailInput=$emailInput&pasien=$pasien&waktuBooking=$waktuBooking&tanggalBooking=$tanggalBooking");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    $koneksi->close();
}
?>
