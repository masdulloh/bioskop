-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 10:23 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `kdfilm` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `poster` varchar(2000) NOT NULL,
  `trailer` varchar(200) NOT NULL,
  `durasi` int(4) NOT NULL,
  `sinopsis` text NOT NULL,
  `harga` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`kdfilm`, `judul`, `poster`, `trailer`, `durasi`, `sinopsis`, `harga`) VALUES
('fil001', 'Avengers: Infinity War', 'fil001.jpg', 'https://www.youtube.com/embed/QwievZ1Tx-8', 143, 'The Avengers dan sekutu mereka harus bersedia mengorbankan segalanya dalam upaya untuk mengalahkan Thanos yang kuat sebelum ia berhasil menghancurkan alam semesta.', 50000),
('fil002', 'Deadpool 2', 'fil002.jpg', 'https://www.youtube.com/embed/20bpjtCbCz0', 135, 'Wade Wilson (Ryan Reynolds) berusaha melindungi seorang mutan misterius yang diincar Cable (Josh Brolin). Untuk melindunginya, Wade lalu membentuk sebuah tim bernama X-Force yang beranggotakan Deadpool sendiri, Domino, Negasonic Teenage Warhead, Colossus, dan Bedlam.', 50000),
('fil003', 'Ternyata Anakku Adalah Anak dari Istriku', 'fil001.jpg', '', 142, 'dua film Spider-Man sebelumnya. Hal ini yang lebih ditekankan oleh film Spider-Man: Homecoming, di mana Peter berjuang keras bukan untuk supaya bisa terkenal dan populer di mata masyarakat serta di mata pujaan hati, tetapi lebih bagaimana dirinya ingin membuktikan diri bahwa ia bisa menjadi seorang pahlawan berkekuatan super seperti halnya para Avengers di mata dunia, sembari menyeimbangkan kehidupan nyatanya sebagai murid yang harus bergelut dengan pelajaran dan ujian serta jam pulang ke rumah tepat waktu. Harus diakui bahwa tema yang diangkat kali ini memang berbeda dengan film-film sebelumnya, tetapi mampu memberikan sebuah hal baru yang lebih fresh dan cukup ringan untuk diterima oleh sebagian besar penonton di beragam usia. Langkah dan pendekatan yang diambil oleh pihak Sony dan Marvel Studios kali ini memang terlihat riskan, tetapi nampaknya berbuah sangat baik pada akhirnya.\r\n', 10000),
('fil004', 'Tukang Kubur Naik Delman Istimewa', 'fil002.jpg', '', 432, 'dua film Spider-Man sebelumnya. Hal ini yang lebih ditekankan oleh film Spider-Man: Homecoming, di mana Peter berjuang keras bukan untuk supaya bisa terkenal dan populer di mata masyarakat serta di mata pujaan hati, tetapi lebih bagaimana dirinya ingin membuktikan diri bahwa ia bisa menjadi seorang pahlawan berkekuatan super seperti halnya para Avengers di mata dunia, sembari menyeimbangkan kehidupan nyatanya sebagai murid yang harus bergelut dengan pelajaran dan ujian serta jam pulang ke rumah tepat waktu. Harus diakui bahwa tema yang diangkat kali ini memang berbeda dengan film-film sebelumnya, tetapi mampu memberikan sebuah hal baru yang lebih fresh dan cukup ringan untuk diterima oleh sebagian besar penonton di beragam usia. Langkah dan pendekatan yang diambil oleh pihak Sony dan Marvel Studios kali ini memang terlihat riskan, tetapi nampaknya berbuah sangat baik pada akhirnya.\r\n', 21000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idtrans` int(10) NOT NULL,
  `kdfilm` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `bangku` int(3) NOT NULL,
  `totharga` int(10) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idtrans`, `kdfilm`, `username`, `bangku`, `totharga`, `status`, `tanggal`) VALUES
(6, 'fil001', 'user', 1, 50000, NULL, '2018-05-24 06:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `type`) VALUES
('admin', 'admin@admin.com', 'admin', 'admin'),
('user', '', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`kdfilm`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtrans`),
  ADD KEY `kdfilm` (`kdfilm`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtrans` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kdfilm`) REFERENCES `film` (`kdfilm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
