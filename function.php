<?php
function cekLogin() {
    if (!isset($_SESSION['logged_in'])) {
        echo "<script>
                alert('Untuk mengakses halaman ini Anda harus login terlebih dahulu!');
                window.location.href = '../login/login.php'; 
              </script>";
        exit();
    }
}
function cekStatUser() {
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'];
}

// Function untuk menampilkan tombol login/logout
function tambahBtn() {
    if (cekStatUser()) {
        // Jika user login, tampilkan tombol Log Out
        return '<a href="../login/logout.php"><button class="btn">Log Out</button></a>';
    } else {
        // Jika user belum login, tampilkan tombol Log In
        return '<a href="../login/login.php"><button class="btn">Log In</button></a>';
    }
}
?>
