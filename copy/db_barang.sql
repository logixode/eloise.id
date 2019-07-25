-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 04:24 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_brg` int(11) NOT NULL,
  `kode_merek` int(11) NOT NULL,
  `kode_jenis_brg` int(11) NOT NULL,
  `barcode_brg` varchar(20) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah_brg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_brg`, `kode_merek`, `kode_jenis_brg`, `barcode_brg`, `nama_brg`, `jumlah_brg`) VALUES
(3, 2, 1114, '321', '321', 321),
(4, 1, 1, '3211', '321', 321),
(5, 1, 1, '123', 'asd', 123),
(8, 1, 1, '212', 'asd', 212),
(11, 1, 1, '1', '1', 12);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_brg`
--

CREATE TABLE `jenis_brg` (
  `kode_jenis_brg` int(11) NOT NULL,
  `jenis_brg` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_brg`
--

INSERT INTO `jenis_brg` (`kode_jenis_brg`, `jenis_brg`, `deskripsi`) VALUES
(1, 'PC', 'Personal Computer'),
(2, 'Laptop', 'Laptop'),
(1114, 'sada', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `merek`
--

CREATE TABLE `merek` (
  `kode_merek` int(11) NOT NULL,
  `nama_merek` varchar(20) NOT NULL,
  `alamat_merek` text NOT NULL,
  `no_telepon` int(13) NOT NULL,
  `email_merek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merek`
--

INSERT INTO `merek` (`kode_merek`, `nama_merek`, `alamat_merek`, `no_telepon`, `email_merek`) VALUES
(1, 'Asus', 'Asus', 909090, 'asus@asus'),
(2, 'Lenovo', 'Lenovo', 1029, 'lenovo@lenovo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_brg`),
  ADD KEY `kode_merek` (`kode_merek`),
  ADD KEY `kode_jenis_brg` (`kode_jenis_brg`);

--
-- Indexes for table `jenis_brg`
--
ALTER TABLE `jenis_brg`
  ADD PRIMARY KEY (`kode_jenis_brg`),
  ADD KEY `kode_jenis_brg` (`kode_jenis_brg`);

--
-- Indexes for table `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`kode_merek`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `kode_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jenis_brg`
--
ALTER TABLE `jenis_brg`
  MODIFY `kode_jenis_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213233;

--
-- AUTO_INCREMENT for table `merek`
--
ALTER TABLE `merek`
  MODIFY `kode_merek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kode_jenis_brg`) REFERENCES `jenis_brg` (`kode_jenis_brg`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`kode_merek`) REFERENCES `merek` (`kode_merek`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
