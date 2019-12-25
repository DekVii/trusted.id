-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 07:12 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trusted.id`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `Id_barang` int(11) NOT NULL,
  `Nama_barang` varchar(50) NOT NULL,
  `Harga` varchar(50) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Deskripsi_barang` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `Id_chat` int(11) NOT NULL,
  `Id_barang` varchar(10) NOT NULL,
  `Id_pelanggan` varchar(10) NOT NULL,
  `Id_penjual` varchar(10) NOT NULL,
  `Tgl_chat` datetime NOT NULL,
  `Isi_chat` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_barang`
--
-- Error reading structure for table trusted.id.detail_barang: #1932 - Table 'trusted.id.detail_barang' doesn't exist in engine
-- Error reading data for table trusted.id.detail_barang: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `trusted.id`.`detail_barang`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `detail_kategori`
--
-- Error reading structure for table trusted.id.detail_kategori: #1932 - Table 'trusted.id.detail_kategori' doesn't exist in engine
-- Error reading data for table trusted.id.detail_kategori: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `trusted.id`.`detail_kategori`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanan`
--
-- Error reading structure for table trusted.id.detail_pemesanan: #1932 - Table 'trusted.id.detail_pemesanan' doesn't exist in engine
-- Error reading data for table trusted.id.detail_pemesanan: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `trusted.id`.`detail_pemesanan`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `Id_kategori` int(11) NOT NULL,
  `Nama_kategori` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `Id_pelanggan` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Nama_pelanggan` varchar(50) NOT NULL,
  `Kontak_pelanggan` varchar(50) NOT NULL,
  `Alamat_pelanggan` varchar(150) NOT NULL,
  `jk_pelanggan` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `Id_pembayaran` int(11) NOT NULL,
  `Tgl_pembayaran` date NOT NULL,
  `Metode_pembayaran` varchar(30) NOT NULL,
  `nomor_rekening` int(11) DEFAULT NULL,
  `nama_rekening` varchar(30) DEFAULT NULL,
  `Id_pemesanan` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `Id_pemesanan` int(11) NOT NULL,
  `Nama_barang` int(11) NOT NULL,
  `Tgl_pemesanan` int(11) NOT NULL,
  `Status_pemesanan` int(11) NOT NULL,
  `Id_pelanggan` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `Id_pengiriman` int(11) NOT NULL,
  `Tgl_pengiriman` date NOT NULL,
  `Tgl_estimasi` date NOT NULL,
  `Opsi_pengiriman` varchar(25) NOT NULL,
  `Biaya_kirim` varchar(20) NOT NULL,
  `Status_pengiriman` varchar(15) NOT NULL,
  `Resi_pengiriman` varchar(25) NOT NULL,
  `Id_pembayaran` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Id_review` int(11) NOT NULL,
  `Tgl_review` date NOT NULL,
  `Nama_pelanggan` varchar(25) NOT NULL,
  `Isi_review` varchar(200) NOT NULL,
  `Id_barang` varchar(10) NOT NULL,
  `Id_pengiriman` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `Id_penjual` varchar(10) NOT NULL,
  `Id_barang` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Nama_penjual` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Kontak_penjual` varchar(30) NOT NULL,
  `Alamat_penjual` varchar(200) NOT NULL,
  `Last_in` time DEFAULT NULL,
  `Foto_user` varchar(25) NOT NULL,
  `level_user` enum('admin','user') NOT NULL DEFAULT 'user',
  `Jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Username`, `Password`, `Nama_penjual`, `Email`, `Kontak_penjual`, `Alamat_penjual`, `Last_in`, `Foto_user`, `level_user`, `Jenis_kelamin`) VALUES
(3, 'Bochil', 'bocil', 'Bochil', 'indah@gmail.com', '0812533549', 'jkt', NULL, '', 'user', ''),
(2, 'admin', 'admin', 'Bochil', 'Bochil@gmail.com', '0812533548', 'diy', NULL, '', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `Id_wishlist` int(11) NOT NULL,
  `Id_barang` varchar(10) NOT NULL,
  `Id_pelanggan` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`Id_barang`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`Id_chat`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`Id_kategori`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`Id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`Id_pembayaran`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`Id_pemesanan`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`Id_pengiriman`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Id_review`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`Id_penjual`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`Id_wishlist`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `Id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `Id_chat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `Id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `Id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `Id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `Id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `Id_pengiriman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Id_review` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `Id_wishlist` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
