-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2019 at 08:31 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smk2`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nisn` char(10) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `akun`
--


-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nisn` char(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pendaftaran`
--


-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nisn` char(10) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `nem` double NOT NULL,
  `ttl` varchar(64) NOT NULL,
  `asal_sekolah` varchar(64) NOT NULL,
  `no_peserta` varchar(20) NOT NULL,
  PRIMARY KEY (`nisn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama`, `nem`, `ttl`, `asal_sekolah`, `no_peserta`) VALUES
('1029329082', 'rayhan hanif sutrisno', 28.95, 'Bandung, 30 Oktober 2002', 'SMPN 5 BANDUNG', '10-23-009-243-69'),
('1008208902', 'Muhamad Ihsan Aryandi', 27.9, 'Bandung, 03 April 2001', 'SMP PASUNDAN 8', '10-22-001-373-10'),
('1119902821', 'Muhamad Aqsal Zakki', 27.85, 'Bandung, 24 September 2002', 'SMPN 9 BANDUNG', '11-03-399-423-29'),
('1008269729', 'Ditya Dwi Kunjati', 26.95, 'Lembang, 04 Januari 2001', 'SMPN 3 LEMBANG', '10-32-402-291-89'),
('1020568239', 'Aditya Rachman', 28.65, 'Bandung, 26 Oktober 2002', 'SMPN 23 BANDUNG', '10-40-339-297-77'),
('1033845211', 'Yogi Mulyadi', 29.25, 'Lembang, 24 Maret 2001', 'SMPN 1 LEMBANG', '10-33-287-986-29'),
('1041803316', 'Ari Ariyandi', 27.85, 'Bandung, 08 Agustus', 'SMPN 44 BANDUNG', '10-90-867-198-44'),
('1107681656', 'Dika Gardena', 28.55, 'Bandung, 27 Mei 2001', 'SMPN 19 BANDUNG', '10-27-207-320-29'),
('1038116734', 'Gilang Ramadhan', 27.25, 'Bandung, 26 Juni 2001', 'SMPN 8 BANDUNG', '10-08-249-653-87'),
('1107681727', 'Dena', 28.75, 'Bandung, 12 Juli 2002', 'SMPN 10 BANDUNG', '10-10-672-871-16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
