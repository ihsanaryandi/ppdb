-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 05:55 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk2`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nisn` char(10) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nisn`, `email`, `password`) VALUES
(1, '1008208902', 'ihsan@gmail.com', '$2y$10$RHEeW9t/bV2bFHRwBxEmy.NhvZ9QbLDssXWJ5eikj3k.Cer7M7iFS'),
(2, '1107681727', 'dena@gmail.com', '$2y$10$r3IkYHajDORt.CewaSN2f.CMSKhHxlwZMgRfJttUgEZYVwr05paAW');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nisn` char(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nisn`) VALUES
(1, '1029329082'),
(2, '1008208902'),
(3, '1119902821'),
(4, '1008269729'),
(5, '1020568239'),
(6, '1107681727');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` char(10) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `nem` float NOT NULL,
  `ttl` varchar(64) NOT NULL,
  `asal_sekolah` varchar(64) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `no_peserta` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama`, `nem`, `ttl`, `asal_sekolah`, `foto`, `no_peserta`) VALUES
('1029329082', 'rayhan hanif sutrisno', 28.95, 'Bandung, 30 Oktober 2002', 'SMPN 5 BANDUNG', 'person_1.jpg', '10-23-009-243-69'),
('1008208902', 'Muhamad Ihsan Aryandi', 27.95, 'Bandung, 03 April 2001', 'SMP PASUNDAN 8', 'person_2.jpg', '10-22-001-373-10'),
('1119902821', 'Muhamad Aqsal Zakki', 27.85, 'Bandung, 24 September 2002', 'SMPN 9 BANDUNG', 'person_3.jpg', '11-03-399-423-29'),
('1008269729', 'Ditya Dwi Kunjati', 26.95, 'Lembang, 04 Januari 2001', 'SMPN 3 LEMBANG', 'person_4.jpg', '10-32-402-291-89'),
('1020568239', 'Aditya Rachman', 28.65, 'Bandung, 26 Oktober 2002', 'SMPN 23 BANDUNG', 'person_5.jpg', '10-40-339-297-77'),
('1033845211', 'Yogi Mulyadi', 29.25, 'Lembang, 24 Maret 2001', 'SMPN 1 LEMBANG', 'person_6.jpg', '10-33-287-986-29'),
('1041803316', 'Ari Ariyandi', 27.85, 'Bandung, 08 Agustus', 'SMPN 44 BANDUNG', 'person_7.jpg', '10-90-867-198-44'),
('1107681656', 'Dika Gardena', 28.55, 'Bandung, 27 Mei 2001', 'SMPN 19 BANDUNG', 'person_8.jpg', '10-27-207-320-29'),
('1038116734', 'Gilang Ramadhan', 27.25, 'Bandung, 26 Juni 2001', 'SMPN 8 BANDUNG', 'person_9.jpg', '10-08-249-653-87'),
('1107681727', 'Dena', 28.75, 'Bandung, 12 Juli 2002', 'SMPN 10 BANDUNG', 'person_5.jpg', '10-10-672-871-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
