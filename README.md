
# SICARE

Proyek ini merupakan sebuah aplikasi web telekonsultasi yang dirancang untuk membantu dan mendukung layanan psikologis dan kesehatan mental di era digital. Aplikasi ini bertujuan untuk meningkatkan aksesibilitas, efisiensi, dan privasi layanan psikologis, menyediakan edukasi kesehatan mental, serta menjangkau masyarakat luas melalui konsultasi daring yang aman dan nyaman.

- **Homepage :** Tampilan utama dari web telekonsultasi layanan psikologis. 
- **Login :** Halaman untuk login pengguna.
- **Tes Depresi :** Halaman yang berisi kumpulan pertanyaan untuk mengetahui seberapa tingkat depresi pasien.
- **Kelola Pemesanan (Booking) :** Halaman untuk melakukan pemesanan konsultan.
- **Layanan Konsultasi Daring :** Konsultasi dilakukan secara daring melalui Google Meet atau aplikasi online lainnya.
- **Artikel :** Halaman berisi materi edukasi mengenai kesehatan mental.
## Teknologi yang Digunakan

**Frontend       :** HTML, CSS, dan Javascript

**Backend :** PHP dan MySQL

**Server:** XAMPP
## Struktur Project

1. **artikel/**
   Folder ini berisi semua page artikel.

1. **booking/**
   Folder booking/berisi page yang berhubungan dengan booking konsultan. Di dalamnya terdapat file:
   - `afterbooking.php`: File ini merupakan page yang muncul setelah melakukan booking, isinya adalah ucapat terima kasih.
   - `bookingdokter1.php`: File ini merupakan page untuk booking konsultan dengan menginputkan data-data yang sesuai.
   - `kirim.php`: File php untuk mengirimkan email otomatis kepada user.
   - `proses_booking.php`: File php untuk mengambil data dari page bookingdokter1.php yang akan dikirim ke database.

2. **dokter/** 
   Pada folder ini isinya adalah page tentang data diri serta jadwal dari konsultan.

3. **home/** 
   Folder ini berisi homepage.php senagai page utama dari website.

3. **src/** 
   Folder src adalah folder yang isinya semua aset image (gambar) yang digunakan pada website.

4. **login/**
   Folder ini berisi file yang berhubungan dengan sesi login user. Di dalamnya terdapat file: 
   - `koneksi.php`: File untuk menghubungkan website dengan database mysql.
   - `login.php`: File page login untuk login user.
   - `logout.php`: File untuk menghentikan session dari user.
   - `register.php`: File page yang berisi input untuk mendaftarkan/input data user ke database sehingga nanti bisa login.

5. **sql/** 
   Pada folder ini berisi file sql yang isinya query yang bisa langsung diimport ke http://localhost/phpmyadmin.

6. **style/**
   Berisi semua file CSS untuk memperindah website. Di dalamnya terdapat file:
   - `afterbooking.css`: File CSS untuk page after booking.
   - `artikel.css`: File CSS untuk page artikel.
   - `booking.css`: File CSS untuk page bbokingdokter1.php.
   - `dokter.css`: File CSS untuk page dokter.
   - `home.css`: File CSS untuk untuk homepage.
   - `login.css`: File CSS untuk page login.
   - `register.css`: File CSS untuk page register.
   - `testMental.css`: File CSS untuk page test.php.

7. **test/** 
   Folder ini isinya adalah page untuk tes kesehatan mental, di dalamnya berupa input radio button.

8. **README.md**  
   File ini berisi nama proyek, deskripsi proyek, fitur, teknologi yang digunakan, struktur, data pembuat proyek, dan demo proyek.
## Kontributor Proyek

| Role              | Nama                 | NIM        |
|-------------------|----------------------|------------|
| Ketua | Natalia Nidya Fidelia         | H1D023099 |
| Anggota    | Adeyunita Rachmadhani        | H1D023057 |

## Demo
https://sicare.ifunsoed23.xyz/

