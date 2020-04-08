-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 11:37 AM
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
  `Harga_barang` int(11) NOT NULL,
  `Stok` int(11) NOT NULL,
  `Deskripsi_barang` varchar(1000) NOT NULL,
  `foto_barang` varchar(200) DEFAULT NULL,
  `Id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`Id_barang`, `Nama_barang`, `Harga_barang`, `Stok`, `Deskripsi_barang`, `foto_barang`, `Id_kategori`) VALUES
(1, 'Serum Teracotta', 1500000, 50, 'Serum Limited Edition', NULL, 1),
(2, 'Vestibulum Dictum Magna', 1000000, 100, 'Parfum Limited Edition', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `Id_chat` int(11) NOT NULL,
  `Id_barang` int(10) NOT NULL,
  `id` int(11) NOT NULL,
  `Tgl_chat` datetime NOT NULL,
  `Isi_chat` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_barang`
--

CREATE TABLE `detail_barang` (
  `Id_barang` int(11) NOT NULL,
  `foto_barang` varchar(200) NOT NULL,
  `Id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_kategori`
--

CREATE TABLE `detail_kategori` (
  `Id_barang` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `Id_pemesanan` int(11) NOT NULL,
  `Id_barang` int(11) NOT NULL,
  `Total_item` int(11) NOT NULL,
  `Total_harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `Id_kategori` int(11) NOT NULL,
  `Nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`Id_kategori`, `Nama_kategori`) VALUES
(1, 'Kosmetik'),
(2, 'Tas'),
(3, 'Elektronik'),
(4, 'Alas Kaki'),
(5, 'Aksesoris'),
(6, 'Pakaian');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `Id_pembayaran` int(11) NOT NULL,
  `Tgl_pembayaran` date NOT NULL,
  `Metode_pembayaran` varchar(40) NOT NULL,
  `nomor_rekening` int(11) DEFAULT NULL,
  `nama_rekening` varchar(40) DEFAULT NULL,
  `Id_pemesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `Id_pemesanan` int(11) NOT NULL,
  `Nama_barang` varchar(200) NOT NULL,
  `Tgl_pemesanan` date NOT NULL,
  `Status_pemesanan` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `Id_pengiriman` int(11) NOT NULL,
  `Tgl_pengiriman` date NOT NULL,
  `Tgl_estimasi` date NOT NULL,
  `Opsi_pengiriman` varchar(100) NOT NULL,
  `Biaya_kirim` varchar(20) NOT NULL,
  `Status_pengiriman` varchar(100) NOT NULL,
  `Resi_pengiriman` varchar(25) NOT NULL,
  `Id_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Id_review` int(11) NOT NULL,
  `Tgl_review` date NOT NULL,
  `Nama_pelanggan` varchar(30) NOT NULL,
  `isi_review` varchar(200) NOT NULL,
  `Id_barang` int(11) NOT NULL,
  `Id_pengiriman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `Id_barang` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Kontak` varchar(30) NOT NULL,
  `Alamat` varchar(300) NOT NULL,
  `Last_in` time DEFAULT current_timestamp(),
  `Foto_user` varchar(250) DEFAULT NULL,
  `level_user` enum('admin','user') NOT NULL,
  `Jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Username`, `Password`, `Nama`, `Email`, `Kontak`, `Alamat`, `Last_in`, `Foto_user`, `level_user`, `Jenis_kelamin`) VALUES
(1, 'Bochil', 'd033e22ae3', 'Bocil', 'Bochil@gmail.com', '02632654985', 'Condong Catur, Sleman, DIY', '00:00:00', NULL, 'admin', 'Perempuan'),
(3, 'Indah', '12dea96fec', 'Jastip Concat', 'indah@gmail.com', '0852654985', 'Semarang', '00:00:00', NULL, 'user', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `Id_wishlist` int(11) NOT NULL,
  `Id_barang` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`Id_barang`),
  ADD KEY `Id_kategori` (`Id_kategori`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`Id_chat`),
  ADD KEY `Id_barang` (`Id_barang`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `detail_barang`
--
ALTER TABLE `detail_barang`
  ADD KEY `Id_barang` (`Id_barang`,`Id_kategori`),
  ADD KEY `Id_kategori` (`Id_kategori`);

--
-- Indexes for table `detail_kategori`
--
ALTER TABLE `detail_kategori`
  ADD KEY `id` (`id`),
  ADD KEY `Id_kategori` (`Id_kategori`),
  ADD KEY `Id_barang` (`Id_barang`);

--
-- Indexes for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD KEY `Id_pemesanan` (`Id_pemesanan`),
  ADD KEY `Id_barang` (`Id_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`Id_kategori`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`Id_pembayaran`),
  ADD KEY `Id_pemesanan` (`Id_pemesanan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`Id_pemesanan`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`Id_pengiriman`),
  ADD KEY `Id_pembayaran` (`Id_pembayaran`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Id_review`),
  ADD KEY `Id_barang` (`Id_barang`),
  ADD KEY `Id_pengiriman` (`Id_pengiriman`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD KEY `FK` (`Id_barang`,`id`) USING BTREE,
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`Id_wishlist`),
  ADD KEY `Id_barang` (`Id_barang`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `Id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `Id_chat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `Id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`Id_kategori`) REFERENCES `kategori` (`Id_kategori`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`Id_barang`) REFERENCES `barang` (`Id_barang`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `detail_barang`
--
ALTER TABLE `detail_barang`
  ADD CONSTRAINT `detail_barang_ibfk_1` FOREIGN KEY (`Id_barang`) REFERENCES `barang` (`Id_barang`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_barang_ibfk_2` FOREIGN KEY (`Id_kategori`) REFERENCES `kategori` (`Id_kategori`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `detail_kategori`
--
ALTER TABLE `detail_kategori`
  ADD CONSTRAINT `detail_kategori_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_kategori_ibfk_2` FOREIGN KEY (`Id_kategori`) REFERENCES `kategori` (`Id_kategori`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_kategori_ibfk_3` FOREIGN KEY (`Id_barang`) REFERENCES `barang` (`Id_barang`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `detail_pemesanan_ibfk_1` FOREIGN KEY (`Id_barang`) REFERENCES `barang` (`Id_barang`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pemesanan_ibfk_2` FOREIGN KEY (`Id_pemesanan`) REFERENCES `pemesanan` (`Id_pemesanan`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`Id_pemesanan`) REFERENCES `pemesanan` (`Id_pemesanan`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`Id_pembayaran`) REFERENCES `pembayaran` (`Id_pembayaran`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`Id_barang`) REFERENCES `barang` (`Id_barang`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`Id_pengiriman`) REFERENCES `pengiriman` (`Id_pengiriman`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `toko`
--
ALTER TABLE `toko`
  ADD CONSTRAINT `toko_ibfk_1` FOREIGN KEY (`Id_barang`) REFERENCES `barang` (`Id_barang`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `toko_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`Id_barang`) REFERENCES `barang` (`Id_barang`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
