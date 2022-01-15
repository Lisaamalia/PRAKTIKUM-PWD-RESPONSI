-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 15, 2022 at 12:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xtron`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tlp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bagian` varchar(20) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `alamat`, `jk`, `nip`, `tlp`, `email`, `bagian`, `jabatan`) VALUES
(1, 'Anisa', 'Surabaya', 'Perempuan', '11 152021 1251', '089123456789', 'anisa@gmail.com', 'Elektronik', 'Admin'),
(2, 'Dimas', 'Tuban', 'Laki-Laki', '11 152021 1252', '081323456789', 'dimas@gmail.com', 'Non Elektronik', 'Teknisi'),
(3, 'Yogi', 'Malang', 'Laki-Laki', '11 152021 1253', '085321876548', 'yogi@gmail.com', 'Elektronik', 'Teknisi'),
(4, 'Susanti', 'Malang', 'Perempuan', '11 152021 1254', '089112346789', 'susanti@gmail.com', 'Non-Eletronik', 'Admin\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `kode_laporan` varchar(20) NOT NULL,
  `tgl_laporan` date NOT NULL,
  `tgl_solved` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `teknisi` varchar(100) NOT NULL,
  `pengisi` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `sub_kategori` varchar(100) NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `kode_laporan`, `tgl_laporan`, `tgl_solved`, `status`, `teknisi`, `pengisi`, `kategori`, `sub_kategori`, `kondisi`) VALUES
(22, 'B01', '2022-01-11', '0000-00-00', 'Proccesed', 'Proccesed', 'Susanti', 'Non-Elektronik', 'Kerusakan Kursi Kantor', 'Tidak Mendesak'),
(23, 'B02', '2022-01-11', '0000-00-00', 'Solved', 'Yogi', 'Susanti', 'Elektronik', 'Kerusakan LCD Kantor', 'Mendesak'),
(26, 'A01', '2021-12-29', '2022-01-15', 'Solved', 'Dimas', 'Anisa', 'Elektronik', 'Kerusakan LCD Kantor', 'Mendesak'),
(28, 'A02', '2022-01-15', '2022-01-16', 'Proccesed', 'Dimas', 'Lisa', 'Elektronik', 'Kerusakan LCD Kantor', 'Mendesak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `password`, `email`, `level`) VALUES
(1, 'Admin', 'Anisa', 'admin123', 'admin@gmail.com', 'Administrator'),
(2, 'Teknisi', 'Dimas', 'teknisi123', 'teknisi@gmail.com', 'Teknisi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
