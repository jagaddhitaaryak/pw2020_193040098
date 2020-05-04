-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 01:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040098`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `no` int(5) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `jumlah_halaman` int(100) NOT NULL,
  `tgl_rilis` date NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`no`, `cover`, `judul`, `penerbit`, `jumlah_halaman`, `tgl_rilis`, `penulis`, `deskripsi`, `harga`) VALUES
(1, '1.jpg', 'Belajar Coding Android Bagi Pemula', 'Elex Media Komputindo', 198, '2015-12-14', 'Ir. Yuniar Supardi', 'Membantu Anda dari dasar dalam pembuatan program Android memakai bahasa pemrograman Java.', 120000),
(2, '2.png', 'Otodidak Belajar Pemrograman untuk Pemula', 'Elex Media Komputindo', 190, '2016-06-20', 'Jubilee Enterprise', 'Dunia pemrograman merupakan dasar dari komputer dan teknologi. Oleh karena itu, bila Anda ingin berkomunikasi dengan perangkat teknologi, mulailah pelajari pemrograman-pemrograman komputer.', 100000),
(3, '3.jpg', 'Easy & Simple - Web Programming', 'Elex Media Komputindo', 231, '2016-05-26', 'Rohi Abdulloh', 'Kata siapa pemrograman website itu sulit? Buku ini akan memberikan panduan mempelajari pemrograman website dengan cara yang mudah. Setiap bahasa pemrograman yang harus dikuasai dibahas menjadi satu dalam sebuah proyek membuat website responsive.', 70000),
(4, '4.jpg', 'Database MySQL dengan Pemograman PHP', 'PT RajaGrafindo Persada', 186, '2019-03-29', 'Dr. Gede Indrawan', 'Basis Data (Database) dapat dibayangkan sebagai sebuah lemari atau tempat penyimpanan arsip yang dapat diatur dan dikelola. Basis Data juga dapat diartikan sebagai kumpulan informasi yang terorganisasi dan disajikan untuk tujuan khusus.', 80000),
(5, '5.jpg', 'Photoshop dan CorelDRAW', 'Elex Media Komputindo', 172, '2016-06-16', 'Jubilee Enterprise', 'Buku ini tentang latihan desain grafis menggunakan Photoshop dan CorelDRAW. Jika Anda tertarik dengan dunia grafis, kuasailah Photoshop dan CorelDRAW.', 65000),
(6, '6.jpg', 'Python untuk Programmer Pemula', 'Elex Media Komputindo', 256, '2016-04-09', 'Jubilee Enterprise', 'Setiap orang yang mau belajar pemrograman akan jatuh cinta dengan Python. Mengapa? Karena mudah dipelajari sekaligus sangat prospektif untuk karier di masa depan.', 57000),
(7, '7.jpg', 'STOP Jadi YouTuber! Kalau Nggak Tahu Cara Marketingnya', 'Elex Media Komputindo', 196, '2020-03-02', 'Jefferly Helianthusonfri', 'STOP Jadi YouTuber! Kini semua orang berlomba-lomba jadi YouTuber, tapi jangan jadi YouTuber yang biasa-biasa aja.', 89000),
(8, '8.jpg', 'Sukses Bisnis Afiliasi 4.0', 'Elex Media Komputindo', 228, '2020-02-19', 'Arista Prasetyo Adi', 'E-commerce sudah memasuki era 4.0 di mana kolaborasi antara online dan offline sedang berlangsung.', 95000),
(9, '9.jpg', 'Menulis Skripsi, Jurnal, dan Tulisan Ilmiah dengan MS Word', 'Elex Media Komputindo', 250, '2020-02-24', 'Jubilee Enterprise', 'Menulis skripsi, jurnal, tesis, atau karya ilmiah lainnya membutuhkan penelitian dan pengetahuan teknis.', 150000),
(10, '10.jpg', 'Dasar-Dasar Animasi Komputer', 'Elex Media Komputindo', 244, '2020-03-02', 'Jubilee Enterprise', 'Animasi adalah gambar bergerak yang dibentuk dari sekumpulan objek yang disusun secara beraturan dengan kecepatan tertentu. Di era modern saat ini, animasi dibuat menggunakan komputer baik secara menyeluruh maupun sebagian. ', 195000),
(33, '1.jpg', 'Aryaa Ganteng pisan', 'aaaa', 120, '2020-05-21', 'ZAHRAH MEL', 'aryaaa', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `username`, `password`) VALUES
(2, 'arya', '$2y$10$eO.utNq1sq5zH4ZF3zuLHe7krebOTlKLlzTDUFwZlRQCjvuBZMeqq'),
(3, 'koswara', '$2y$10$WQOvz95yGOH9ExmcIUnYC.0dWWhSNlCJ5LRlzmN61AO99CrkeAC3i'),
(4, 'jagaddhita', '$2y$10$v9sSPRY8w4IAsfOkn46zlew.EonzyAQrIDhNL8eBzDTRGVN5md.5C'),
(5, 'jagad', '$2y$10$eQxfoLwY6dnisd3kIh2IbeIPIEyr8.n9zanQvC5WBEX9zo.S/eoky'),
(6, 'sayang', '$2y$10$UWm30sxXXTRDyGRCiGXGAe9CTpnnqTMiSXec6MEZ.x0.l2RAyNfqG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
