-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 08:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medik`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dokter` varchar(255) DEFAULT NULL,
  `pasien` varchar(255) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `noHp` varchar(20) DEFAULT NULL,
  `email_input` varchar(100) DEFAULT NULL,
  `tanggalBooking` date DEFAULT NULL,
  `waktuBooking` varchar(50) DEFAULT NULL,
  `layanan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `email`, `dokter`, `pasien`, `tanggalLahir`, `noHp`, `email_input`, `tanggalBooking`, `waktuBooking`, `layanan`) VALUES
(1, 'adeynt11@gmail.com', 'Dr. Chae Song Hwa Sp.KJ.', 'Adey', '2024-12-02', '123456', 'adeynt11@gmail.com', '2025-01-03', '08:00-10:00', 'Layanan Individu'),
(2, 'adeynt11@gmail.com', 'Dr. Chae Song Hwa Sp.KJ.', 'Adey', '2024-12-02', '123456', 'adeynt11@gmail.com', '2025-01-03', '08:00-10:00', 'Layanan Individu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `nama`, `password`) VALUES
('a@gmail.com', 'anna', '123'),
('adeynt11@gmail.com', 'Ade', '$2y$10$GuNmTdE0RHfnevWq7DIlV.527C.FL3dO6rpKNFYxgaW3WuI7FAQ1C'),
('anna@gmail.com', 'anna', 'anna'),
('dh@gmail.com', 'Andy', 'Andy123'),
('moana@gmail.com', 'moana', '$2y$10$nSKzwF/XjXOKNDWfcEDpUuH6X0tZ.fN3efIPs8YvaihbxR/zfG6P.'),
('nata@gmail.com', 'Nata', 'Nata123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
