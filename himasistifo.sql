-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2020 at 11:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himasistifo`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul_postingan` varchar(250) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `isi_postingan` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(6) NOT NULL,
  `id_judul` int(6) NOT NULL,
  `nama_foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `judul`
--

CREATE TABLE `judul` (
  `id` int(6) NOT NULL,
  `nama_kegiatan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kabinet`
--

CREATE TABLE `kabinet` (
  `id` int(6) NOT NULL,
  `nama_foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabinet`
--

INSERT INTO `kabinet` (`id`, `nama_foto`) VALUES
(1, 'Struktur_07.png'),
(2, 'Struktur_05.png'),
(3, 'Struktur_10.png'),
(4, 'Struktur_09.png'),
(5, 'Struktur_16.png'),
(6, 'Struktur_12.png'),
(7, 'Struktur_15.png'),
(8, 'Struktur_13.png');

-- --------------------------------------------------------

--
-- Table structure for table `kepengurusan`
--

CREATE TABLE `kepengurusan` (
  `id` int(11) NOT NULL,
  `nama_foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepengurusan`
--

INSERT INTO `kepengurusan` (`id`, `nama_foto`) VALUES
(10, 'Bersama.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `nim` int(10) NOT NULL,
  `kelas` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `kontak` varchar(250) NOT NULL,
  `divisi` varchar(250) NOT NULL,
  `panitiasdg` text NOT NULL,
  `cv` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(6) NOT NULL,
  `hidupataumati` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `hidupataumati`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tentanghima`
--

CREATE TABLE `tentanghima` (
  `id` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `maknalogo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentanghima`
--

INSERT INTO `tentanghima` (`id`, `visi`, `misi`, `maknalogo`) VALUES
(2, '<p>Bersama Mahasiswa Mewujudkan HIMASISTIFO yang ASRI (Aspiratif, Sosialis, Religius dan Intelektual).<br></p>', '<ol><li>Membangun HIMASISTIFO yang bersifat kekeluargaan dan Profesionalisme.</li><li>Menciptakan Kaderisasi yang berkualitas dan berkelanjutan.</li><li>Menciptakan Kaderisasi yang berkualitas dan berkelanjutan.</li><li>Melanjutkan dan Meningkatkan kinerja periode Kebinet sebelumnya.</li></ol><p><br></p>', '<ol><li>Cangkir melambangkan \r\nHIMASISTIFO adalah sebuah wadah yang dapat menampung seluruh elemen \r\nmahasiswa Progam Studi Sistem Informasi di Politeknik Caltex Riau.</li><li>Asap\r\n melambangkan dan menunjukkan kata SI menandakan setiap lulusan dari \r\nProgram Studi Sistem Informasi memiliki aroma yang nikmat dan khusus \r\nsehingga dapat siap pakai pada dunia.</li></ol><p><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Rory Rinaldo', 'gubernur', '123123aa', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `judul`
--
ALTER TABLE `judul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabinet`
--
ALTER TABLE `kabinet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentanghima`
--
ALTER TABLE `tentanghima`
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
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `judul`
--
ALTER TABLE `judul`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kabinet`
--
ALTER TABLE `kabinet`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tentanghima`
--
ALTER TABLE `tentanghima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
