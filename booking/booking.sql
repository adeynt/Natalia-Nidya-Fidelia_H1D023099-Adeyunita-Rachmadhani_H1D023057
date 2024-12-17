CREATE TABLE bookings (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100),
    dokter VARCHAR(255),
    pasien VARCHAR(255),
    tanggalLahir DATE,
    noHp VARCHAR(20),
    email_input VARCHAR(100),
    tanggalBooking DATE,
    waktuBooking VARCHAR(50),
    layanan VARCHAR(50),
    FOREIGN KEY (email) REFERENCES user(email)
);
