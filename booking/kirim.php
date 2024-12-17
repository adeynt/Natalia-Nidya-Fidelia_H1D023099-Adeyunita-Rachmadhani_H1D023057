<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "library/PHPMailer.php";
require_once "library/Exception.php";
require_once "library/OAuth.php";
require_once "library/POP3.php";
require_once "library/SMTP.php";

$mail = new PHPMailer;

// Ambil data dari URL parameter
$emailInput = $_GET['emailInput'];
$pasien = $_GET['pasien'];
$waktuBooking = $_GET['waktuBooking'];
$tanggalBooking = $_GET['tanggalBooking'];

$mail->SMTPDebug = 0;                               
$mail->isSMTP();            
$mail->Host = "tls://smtp.gmail.com"; 
$mail->SMTPAuth = true;                          
$mail->Username = "botoltuper@gmail.com"; 
$mail->Password = "dijldauxzbwlqhkv"; 
$mail->SMTPSecure = "tls";  
$mail->Port = 587;  

$mail->From = "botoltuper@gmail.com";
$mail->FromName = "SI-CARE"; 

$mail->addAddress($emailInput, $pasien, $waktuBooking, $tanggalBooking);

$mail->isHTML(true);

$mail->Subject = "Link Google Meet untuk Sesi Konsultasi SI-CARE Anda.";
$mail->Body    = "Halo {$pasien},<br><br>

Semoga kamu dalam keadaan baik. Berikut adalah link untuk sesi konsultasi mental kita yang dijadwalkan pada {$tanggalBooking}, pukul {$waktuBooking} <br>
Link Google Meet: https://meet.google.com/vzy-qjha-bgm <br>
Silakan klik link di atas pada waktu yang ditentukan untuk bergabung dalam sesi. Jika ada perubahan atau jika kamu tidak dapat hadir, harap beri tahu saya sebelumnya. <br>
Terima kasih, dan saya menantikan sesi konsultasi kita.";

$mail->AltBody = "LINK SI-CARE";

if(!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    //echo "Message has been sent successfully";
    header("Location: afterbooking.php");
    exit;
}
?>
