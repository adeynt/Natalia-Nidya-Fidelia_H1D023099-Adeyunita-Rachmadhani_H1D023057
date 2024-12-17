<?php
session_start();
include("koneksi.php");
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'") or die("Select Error");
    $row = mysqli_fetch_assoc($result);

    if ($row && password_verify($password, $row['password'])) {
        $_SESSION['valid'] = $row['email'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['logged_in'] = true;

        echo "<script>alert('Login Successful!'); window.location.href='../home/homepage.php';</script>";
    } else {
        echo "<script>alert('Wrong Username or Password'); window.location.href='login.php';</script>";
    }
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI-CARE Sign In</title>
    <link rel="stylesheet" href="../style/login.css">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <div class="illustration">
                <img src="../src/login.png" alt="Doctor Illustration" style="width: 100%; height: auto;">
            </div>
        </div>
        <div class="right-side">
            <div class="logo">
                <img src="../src/Si-Care.svg" alt="SI-CARE Logo">
                <div class="logo-text">SI-CARE</div>
            </div>
            <div class="signin-form">
                <h1>SIGN IN</h1>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="signup-link">
                        <span>Don't have an account? </span>
                        <a href="register.php">Sign Up</a>
                    </div>
                    <button type="submit" name="submit">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</body>
<?php
}
?>
</html>