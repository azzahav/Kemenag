-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 03:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dupak`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_penilai`
--

CREATE TABLE `form_penilai` (
  `unsur` varchar(200) NOT NULL,
  `sub_unsur` varchar(200) NOT NULL,
  `butir_kegiatan` varchar(200) NOT NULL,
  `satuan_hasil` varchar(200) NOT NULL,
  `pelaksanaan_kegiatan` varchar(200) NOT NULL,
  `angka_kredit` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(255) NOT NULL,
  `nip` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `nip`, `password`) VALUES
(1, 1234, '1234'),
(2, 4567, '4567');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(100) NOT NULL,
  `id_login` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` int(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_seri_kapreg` varchar(1000) NOT NULL,
  `tempat_tanggal_lahir` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `masa_kerja` varchar(100) NOT NULL,
  `unit_kerja` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `id_login`, `nama`, `nip`, `password`, `no_seri_kapreg`, `tempat_tanggal_lahir`, `jenis_kelamin`, `pendidikan`, `pangkat`, `jabatan`, `masa_kerja`, `unit_kerja`, `role`) VALUES
(1, 0, 'Andryanto, S.Si', 197203082, 'statistisi', '614/KEP/KARPEG/2010', 'Sukabumi, 08 Maret 1972', 'Laki-laki', 'S1 Statistika', 'Penata / III/c / 1 Oktober 2016', 'Muda', 'Lama', 'Biro Humas Data dan Informasi', 'Statistisi'),
(5, 1, 'Raisa andayani', 197203082, 'penilai', '614/KEP/KARPEG/2011', 'Tanggerang, 12 Juni 1999 ', 'Perempuan', 'S1-Keperawatan', 'Penata / III/c / 1 Oktober 2019', 'Muda', 'S1-Keperawatan', 'Biro Humas Data dan Informasi', 'Penilai'),
(8, 2, 'Muhammad Iskandar.S.sos', 123456, 'admin', '614/KEP/KARPEG/2016', 'Jakarta, 12 Juni 2020', 'Laki-Laki', 'S1-Manajemen', 'Penata / III/c / 1 Oktober 2016', 'Madya', 'Lama', 'Biro Humas Data dan Informasi', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan`
--

CREATE TABLE `pimpinan` (
  `id_pimpinan` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` int(255) NOT NULL,
  `pangkat_golongan` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `unit_kerja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pimpinan`
--

INSERT INTO `pimpinan` (`id_pimpinan`, `nama`, `nip`, `pangkat_golongan`, `jabatan`, `unit_kerja`) VALUES
(2, 'Andryanto, S.Si', 197203082, 'Penata / III/c / 1 Oktober 2016', 'Muda', 'Biro Humas Data dan Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `rekap_harian`
--

CREATE TABLE `rekap_harian` (
  `id_rekap` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `unsur` varchar(100) NOT NULL,
  `sub_unsur` varchar(100) NOT NULL,
  `butir_kegiatan` varchar(100) NOT NULL,
  `uraian_kegiatan` varchar(100) NOT NULL,
  `satuan_hasil` varchar(100) NOT NULL,
  `angka_kredit` varchar(255) NOT NULL,
  `jumlah_kredit` varchar(255) NOT NULL,
  `jumlah_volume` varchar(255) NOT NULL,
  `total_nilai` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekap_harian`
--

INSERT INTO `rekap_harian` (`id_rekap`, `nama`, `nip`, `unsur`, `sub_unsur`, `butir_kegiatan`, `uraian_kegiatan`, `satuan_hasil`, `angka_kredit`, `jumlah_kredit`, `jumlah_volume`, `total_nilai`, `tanggal`) VALUES
(55, 'Andryanto, S.Si', '197203082', 'Pendidikan', 'Pendidikan sekolah dan memperoleh gelar/ijasah.', 'Doktor/Spesialis II (S3)', 'Tabulasi pengumpulan data Pendis2017', 'Tiap buku', '100.00', '200.00', '100', '1000', '0000-00-00'),
(56, 'Dwi Handayani S.pg', '197203082', 'Pendidikan', 'Pendidikan sekolah dan memperoleh gelar/ijasah.', 'Doktor/Spesialis II (S3)', 'Tabulasi pengumpulan data Pendis2017', 'Tiap buku', '200', '100', '200', '300', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`id_pimpinan`);

--
-- Indexes for table `rekap_harian`
--
ALTER TABLE `rekap_harian`
  ADD PRIMARY KEY (`id_rekap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pimpinan`
--
ALTER TABLE `pimpinan`
  MODIFY `id_pimpinan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rekap_harian`
--
ALTER TABLE `rekap_harian`
  MODIFY `id_rekap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
