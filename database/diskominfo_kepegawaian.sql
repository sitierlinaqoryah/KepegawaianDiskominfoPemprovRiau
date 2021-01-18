-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 04:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diskominfo_kepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'kominfo', 'diskominfo');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`id`, `username`, `password`) VALUES
(1, 'kominfo', 'diskominfo');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_departemen`
--

CREATE TABLE `tabel_departemen` (
  `no_bidang` int(11) NOT NULL,
  `id_bidang` varchar(100) NOT NULL,
  `nama_bidang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_departemen`
--

INSERT INTO `tabel_departemen` (`no_bidang`, `id_bidang`, `nama_bidang`) VALUES
(1, 'ikp', 'Bidang Informasi dan Komunikasi Publik');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_honor`
--

CREATE TABLE `tabel_honor` (
  `no_honor` int(11) NOT NULL,
  `id_honor` varchar(50) NOT NULL,
  `nama_honor` varchar(50) NOT NULL,
  `foto_honor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_honor`
--

INSERT INTO `tabel_honor` (`no_honor`, `id_honor`, `nama_honor`, `foto_honor`) VALUES
(1, '101', 'minhyunw', 'temp_c2561778636517e0b7598146de137f5e.png'),
(10, '1013', 'minhyun101', 'salesorderentryReport.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pegawai`
--

CREATE TABLE `tabel_pegawai` (
  `no_pegawai` int(100) NOT NULL,
  `nip_pegawai` varchar(100) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `tempat_pegawai` varchar(100) NOT NULL,
  `tggllahir_pegawai` date NOT NULL,
  `pangkat_terakhir` varchar(100) NOT NULL,
  `tmt_pegawai` varchar(100) NOT NULL,
  `no_sk` varchar(100) NOT NULL,
  `tgl_sk` date NOT NULL,
  `jabatan_pegawai` varchar(100) NOT NULL,
  `tmt2_pegawai` varchar(100) NOT NULL,
  `no_sk2` varchar(100) NOT NULL,
  `tgl_sk2` varchar(100) NOT NULL,
  `eselon_pegawai` varchar(100) NOT NULL,
  `pendidikan_formal` varchar(100) NOT NULL,
  `pendidikan_perjenjangan` varchar(100) NOT NULL,
  `teknis_pegawai` varchar(100) NOT NULL,
  `tahun_pegawai` varchar(100) NOT NULL,
  `pengalaman_kerja` varchar(100) NOT NULL,
  `tahun_pekerja` varchar(100) NOT NULL,
  `karis` varchar(100) NOT NULL,
  `karsu` text NOT NULL,
  `karpeg` varchar(50) NOT NULL,
  `foto_pegawai` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pegawai`
--

INSERT INTO `tabel_pegawai` (`no_pegawai`, `nip_pegawai`, `nama_pegawai`, `tempat_pegawai`, `tggllahir_pegawai`, `pangkat_terakhir`, `tmt_pegawai`, `no_sk`, `tgl_sk`, `jabatan_pegawai`, `tmt2_pegawai`, `no_sk2`, `tgl_sk2`, `eselon_pegawai`, `pendidikan_formal`, `pendidikan_perjenjangan`, `teknis_pegawai`, `tahun_pegawai`, `pengalaman_kerja`, `tahun_pekerja`, `karis`, `karsu`, `karpeg`, `foto_pegawai`) VALUES
(2, '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3988.jpg'),
(3, 'dma,fam', 'smfslfsl', 'gdhdhd', '0004-04-04', 'V', 'egrgee', 'vddv', '0001-11-11', 'sgwherher', 'hh', 'fsss', '0003-03-31', 'rrr', 'ekfjeijek', 'hh', 'fgehht', 'p', 'wegwgwgw', '0004-04-04', 'gwegwg', 'jyjtyj', 'hr', '15613.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_struktur`
--

CREATE TABLE `tabel_struktur` (
  `id_struktur` int(20) NOT NULL,
  `gambar_struktur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_departemen`
--
ALTER TABLE `tabel_departemen`
  ADD PRIMARY KEY (`no_bidang`);

--
-- Indexes for table `tabel_honor`
--
ALTER TABLE `tabel_honor`
  ADD PRIMARY KEY (`no_honor`);

--
-- Indexes for table `tabel_pegawai`
--
ALTER TABLE `tabel_pegawai`
  ADD PRIMARY KEY (`no_pegawai`);

--
-- Indexes for table `tabel_struktur`
--
ALTER TABLE `tabel_struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_departemen`
--
ALTER TABLE `tabel_departemen`
  MODIFY `no_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_honor`
--
ALTER TABLE `tabel_honor`
  MODIFY `no_honor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tabel_pegawai`
--
ALTER TABLE `tabel_pegawai`
  MODIFY `no_pegawai` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
