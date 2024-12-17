<?php
include("koneksi.php");
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($koneksi, $_POST['confirm_password']);

    // Validasi password dan konfirmasi password
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match. Please try again!'); window.history.back();</script>";
    } else {
        // Verifikasi email unik
        $verify_query = mysqli_query($koneksi, "SELECT email FROM user WHERE email='$email'");

        if (mysqli_num_rows($verify_query) != 0) {
            echo "<script>alert('This email is already used. Try another one, please!'); window.history.back();</script>";
        } else {
            // Hashing password untuk keamanan
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Simpan ke database
            mysqli_query($koneksi, "INSERT INTO user(email, nama, password) VALUES('$email', '$nama', '$hashed_password')") or die("Error Occurred");

            echo "<script>alert('Registration successful!'); window.location.href='login.php';</script>";
        }
    }
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI-CARE Registration</title>
    <link rel="stylesheet" href="../style/register.css">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <div class="illustration">
                <img src="../src/login.png" alt="Registration Illustration" style="width: 100%; height: auto;">
            </div>
        </div>
        <div class="right-side">
            <div class="logo">
                <img src="../src/Si-Care.svg" alt="SI-CARE Logo">
                <div class="logo-text">SI-CARE</div>
            </div>
            <div class="registration-form">
                <h1>REGISTER</h1>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="nama">Name</label>
                        <input type="text" id="nama" name="nama" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
                    </div>
                    <div class="signin-link">
                        <span>Already have an account? </span>
                        <a href="login.php">Sign In</a>
                    </div>
                    <button type="submit" name="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirm_password');

        form.addEventListener('submit', function(event) {
            if (password.value !== confirmPassword.value) {
                event.preventDefault(); // Mencegah pengiriman form
                alert('Passwords do not match. Please try again!');
            }
        });
    });
</script>
</html>
<?php
}
?>