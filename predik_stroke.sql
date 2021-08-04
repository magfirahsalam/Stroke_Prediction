-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 02:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `predik_stroke`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `Judul` varchar(128) NOT NULL,
  `Isi` text NOT NULL,
  `Penulis` varchar(255) NOT NULL,
  `Gambar` varchar(255) NOT NULL,
  `dibuat_pada` datetime NOT NULL,
  `diedit_pada` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `Judul`, `Isi`, `Penulis`, `Gambar`, `dibuat_pada`, `diedit_pada`) VALUES
(50, 'Stroke Berbahaya!', 'Cegah stroke dari sekarang dengan menerapkan pola hidup sehat. ', 'Tivanni Magfirah I.S.', 'screenshot.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'baru&nbsp;nih', 'qKLS,ksl', ';SL,SS', '23498497_332175023923579_4650115843898736640_n1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `data_stroke`
--

CREATE TABLE `data_stroke` (
  `id_data_stroke` int(11) NOT NULL,
  `id_pasien` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `usia` varchar(5) NOT NULL,
  `hipertensi` varchar(255) NOT NULL,
  `liver` varchar(255) NOT NULL,
  `status_pernikahan` varchar(255) NOT NULL,
  `tipe_pekerjaan` varchar(255) NOT NULL,
  `tempat_tinggal` varchar(255) NOT NULL,
  `rata_kadar_glukosa` varchar(255) NOT NULL,
  `index_berat_badan` varchar(255) NOT NULL,
  `status_perokok` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_stroke`
--

INSERT INTO `data_stroke` (`id_data_stroke`, `id_pasien`, `jenis_kelamin`, `usia`, `hipertensi`, `liver`, `status_pernikahan`, `tipe_pekerjaan`, `tempat_tinggal`, `rata_kadar_glukosa`, `index_berat_badan`, `status_perokok`, `keterangan`) VALUES
(1, '45535', '0', '68', '1', '1', '0', '1', '1', '2', '2', '1', '1'),
(2, '40460', '1', '68', '0', '0', '0', '0', '0', '0', '0', '0', '1'),
(3, '19584', '1', '20', '1', '1', '1', '1', '0', '0', '1', '1', '0'),
(4, '24447', '1', '42', '1', '1', '0', '1', '1', '0', '1', '1', '0'),
(5, '27153', '1', '75', '1', '1', '0', '0', '1', '0', '2', '0', '1'),
(6, '34060', '1', '71', '1', '0', '1', '1', '1', '0', '1', '1', '0'),
(7, '65460', '1', '32', '1', '1', '0', '1', '1', '0', '2', '0', '0'),
(23, '29765', '0', '23', '1', '1', '1', '2', '1', '0', '0', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `data_stroke_tim_medis`
--

CREATE TABLE `data_stroke_tim_medis` (
  `id_data_stroke_tim_medis` int(11) NOT NULL,
  `id_pasien` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `usia` varchar(5) NOT NULL,
  `hipertensi` varchar(255) NOT NULL,
  `liver` varchar(255) NOT NULL,
  `status_pernikahan` varchar(255) NOT NULL,
  `tipe_pekerjaan` varchar(255) NOT NULL,
  `tempat_tinggal` varchar(255) NOT NULL,
  `rata_kadar_glukosa` varchar(255) NOT NULL,
  `index_berat_badan` varchar(255) NOT NULL,
  `status_perokok` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_tim_medis`
--

CREATE TABLE `data_tim_medis` (
  `No` int(11) NOT NULL,
  `id_tim_medis` varchar(10) NOT NULL,
  `nama_tim_medis` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_tim_medis`
--

INSERT INTO `data_tim_medis` (`No`, `id_tim_medis`, `nama_tim_medis`, `email`) VALUES
(1, '112', 'Tivanni ', 'tivannisalam11@gmail.com'),
(6, '982', 'Magfirah Salam', 'magfirahsalam@student.polindra.ac.id'),
(7, '2214', 'Tivanni mm', 'payment.lyf@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_hasil_prediksi_tm`
--

CREATE TABLE `keterangan_hasil_prediksi_tm` (
  `id_hasil_prediksi_tm` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keterangan_hasil_prediksi_tm`
--

INSERT INTO `keterangan_hasil_prediksi_tm` (`id_hasil_prediksi_tm`, `keterangan`) VALUES
(0, 'tidak_stroke'),
(1, 'stroke');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `pekerjaan`, `nomor_telepon`, `alamat`) VALUES
(62466, 'Dita', 'Indramayu', '1972-12-08', 'P', 'ASN', '08912833002', 'Lohbener');

-- --------------------------------------------------------

--
-- Table structure for table `prediksi`
--

CREATE TABLE `prediksi` (
  `id_prediksi` int(11) NOT NULL,
  `jenis_kelamin_pengunjung` varchar(255) NOT NULL,
  `usia_pengunjung` varchar(5) NOT NULL,
  `hipertensi_pengunjung` varchar(255) NOT NULL,
  `liver_pengunjung` varchar(255) NOT NULL,
  `status_pernikahan_pengunjung` varchar(255) NOT NULL,
  `tipe_pekerjaan_pengunjung` varchar(255) NOT NULL,
  `tempat_tinggal_pengunjung` varchar(255) NOT NULL,
  `rata_kadar_glukosa_pengunjung` varchar(255) NOT NULL,
  `tinggi_badan` int(255) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `index_bb_pengunjung` varchar(255) NOT NULL,
  `status_perokok_pengunjung` varchar(255) NOT NULL,
  `keterangan_pengunjung` varchar(255) NOT NULL,
  `dibuat_pada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prediksi`
--

INSERT INTO `prediksi` (`id_prediksi`, `jenis_kelamin_pengunjung`, `usia_pengunjung`, `hipertensi_pengunjung`, `liver_pengunjung`, `status_pernikahan_pengunjung`, `tipe_pekerjaan_pengunjung`, `tempat_tinggal_pengunjung`, `rata_kadar_glukosa_pengunjung`, `tinggi_badan`, `berat_badan`, `index_bb_pengunjung`, `status_perokok_pengunjung`, `keterangan_pengunjung`, `dibuat_pada`) VALUES
(31, '0', '23', '1', '1', '1', '1', '1', '0', 168, 54, '0', '1', '0', '2021-07-24'),
(32, '0', '57', '0', '1', '1', '0', '1', '2', 150, 70, '2', '1', '1', '2021-07-25'),
(33, '0', '57', '0', '1', '1', '0', '1', '2', 150, 70, '2', '1', '1', '2021-07-25'),
(34, '0', '67', '0', '0', '0', '0', '0', '1', 167, 90, '2', '1', '1', '2021-07-28'),
(35, '0', '15', '1', '1', '1', '3', '0', '0', 165, 45, '0', '1', '0', '2021-07-28'),
(36, '0', '15', '1', '1', '1', '3', '0', '0', 165, 45, '0', '1', '0', '2021-07-28'),
(37, '0', '15', '1', '1', '1', '3', '0', '0', 165, 45, '0', '1', '0', '2021-07-28'),
(38, '0', '15', '1', '1', '1', '3', '0', '0', 165, 45, '0', '1', '0', '2021-07-28'),
(39, '0', '15', '1', '1', '1', '3', '0', '0', 165, 45, '0', '1', '0', '2021-07-28'),
(40, '0', '25', '0', '1', '1', '0', '1', '1', 158, 50, '1', '0', '0', '2021-07-28'),
(41, '0', '50', '0', '0', '1', '0', '1', '2', 165, 70, '2', '2', '0', '2021-07-28'),
(42, '0', '50', '0', '0', '0', '0', '1', '2', 165, 70, '2', '2', '1', '2021-07-28'),
(51, '0', '23', '1', '1', '1', '2', '1', '1', 165, 45, '0', '1', '0', '2021-08-02'),
(52, '0', '22', '1', '1', '1', '0', '1', '1', 175, 100, '2', '1', '0', '2021-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `prediksi_tim_medis`
--

CREATE TABLE `prediksi_tim_medis` (
  `id_prediksi_tim_medis` int(11) NOT NULL,
  `id_pasien_tm` varchar(255) NOT NULL,
  `jenis_kelamin_tm` varchar(255) NOT NULL,
  `usia_tm` varchar(5) NOT NULL,
  `hipertensi_tm` varchar(255) NOT NULL,
  `liver_tm` varchar(255) NOT NULL,
  `status_pernikahan_tm` varchar(255) NOT NULL,
  `tipe_pekerjaan_tm` varchar(255) NOT NULL,
  `tempat_tinggal_tm` varchar(255) NOT NULL,
  `rata_kadar_glukosa_tm` varchar(255) NOT NULL,
  `berat_badan_tm` int(21) NOT NULL,
  `tinggi_badan_tm` int(11) NOT NULL,
  `index_bb_tm` varchar(255) NOT NULL,
  `status_perokok_tm` varchar(255) NOT NULL,
  `keterangan_tm` int(255) NOT NULL,
  `dibuat_pada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prediksi_tim_medis`
--

INSERT INTO `prediksi_tim_medis` (`id_prediksi_tim_medis`, `id_pasien_tm`, `jenis_kelamin_tm`, `usia_tm`, `hipertensi_tm`, `liver_tm`, `status_pernikahan_tm`, `tipe_pekerjaan_tm`, `tempat_tinggal_tm`, `rata_kadar_glukosa_tm`, `berat_badan_tm`, `tinggi_badan_tm`, `index_bb_tm`, `status_perokok_tm`, `keterangan_tm`, `dibuat_pada`) VALUES
(16, 'P06', '1', '49', '0', '0', '0', '0', '0', '2', 0, 0, '0', '0', 1, '2021-08-02'),
(17, 'P15', '0', '25', '0', '0', '0', '0', '0', '0', 0, 0, '0', '0', 1, '2021-08-02'),
(18, 'P17', '0', '25', '0', '0', '0', '0', '0', '0', 0, 0, '0', '0', 1, '2021-08-02'),
(19, 'P21', '0', '25', '0', '0', '0', '0', '0', '0', 0, 0, '0', '0', 1, '2021-08-02'),
(21, 'P29', '0', '49', '0', '0', '0', '0', '0', '0', 39, 150, '0', '0', 0, '2021-08-02'),
(47, 'P201', '0', '23', '0', '0', '0', '0', '0', '2', 80, 165, '1', '0', 0, '2021-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(7, 'Magfirah Admin', 'magfirahsalam@student.polindra.ac.id', 'levi_2.jpg', '$2y$10$sh4A8RQj4dzvea8PzCYxI.o2YFIysmniscs3ozDo1Ru..89TqwKY2', 1, 1, 1622393732),
(12, 'Magfirah Tim Medis', 'tivannisalam11@gmail.com', 'aa_levi.jpg', '$2y$10$w/RiA/0n5w24CeSx4HuA3u7RejoVq4KR5ofEHdtyT.owt1NjriawO', 2, 1, 1622493009),
(14, 'Tivanni Magfirah Illahi Salam', 'magfirahsalam@gmail.com', 'default.jpg', '$2y$10$TqpXxdfNjLjrFLEcni35GOTfEQwfAALzUuQRtHF6EVR5lRXE0gW6O', 2, 1, 1622988179);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `name_role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `name_role`) VALUES
(1, 'Admin'),
(2, 'Medis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `data_stroke`
--
ALTER TABLE `data_stroke`
  ADD PRIMARY KEY (`id_data_stroke`,`id_pasien`);

--
-- Indexes for table `data_stroke_tim_medis`
--
ALTER TABLE `data_stroke_tim_medis`
  ADD PRIMARY KEY (`id_data_stroke_tim_medis`,`id_pasien`);

--
-- Indexes for table `data_tim_medis`
--
ALTER TABLE `data_tim_medis`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `keterangan_hasil_prediksi_tm`
--
ALTER TABLE `keterangan_hasil_prediksi_tm`
  ADD PRIMARY KEY (`id_hasil_prediksi_tm`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `prediksi`
--
ALTER TABLE `prediksi`
  ADD PRIMARY KEY (`id_prediksi`);

--
-- Indexes for table `prediksi_tim_medis`
--
ALTER TABLE `prediksi_tim_medis`
  ADD PRIMARY KEY (`id_prediksi_tim_medis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `data_stroke`
--
ALTER TABLE `data_stroke`
  MODIFY `id_data_stroke` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `data_stroke_tim_medis`
--
ALTER TABLE `data_stroke_tim_medis`
  MODIFY `id_data_stroke_tim_medis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_tim_medis`
--
ALTER TABLE `data_tim_medis`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `keterangan_hasil_prediksi_tm`
--
ALTER TABLE `keterangan_hasil_prediksi_tm`
  MODIFY `id_hasil_prediksi_tm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62467;

--
-- AUTO_INCREMENT for table `prediksi`
--
ALTER TABLE `prediksi`
  MODIFY `id_prediksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `prediksi_tim_medis`
--
ALTER TABLE `prediksi_tim_medis`
  MODIFY `id_prediksi_tim_medis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
