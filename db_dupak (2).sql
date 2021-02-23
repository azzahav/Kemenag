-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 01:02 PM
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
-- Table structure for table `data_butir`
--

CREATE TABLE `data_butir` (
  `id_butir` int(8) NOT NULL,
  `id_subunsur` int(4) NOT NULL,
  `butir_kegiatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `volume_kegiatan` int(4) NOT NULL,
  `angka_kredit` varchar(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_butir`
--

INSERT INTO `data_butir` (`id_butir`, `id_subunsur`, `butir_kegiatan`, `volume_kegiatan`, `angka_kredit`) VALUES
(1171010, 1171, 'Doktor/Spesialis II (S3)', 20, '60'),
(1171011, 1171, 'Pasca Sarjana/Spesialis I (S2)', 20, '50'),
(1171012, 1171, 'Sarjana (S1)/Diploma IV', 20, '40'),
(1172010, 1172, 'Lamanya lebih dari 960 jam', 15, '15'),
(1172020, 1172, 'Lamanya antara 641 - 960 jam', 15, '9'),
(1172030, 1172, 'Lamanya antara 401 - 640 jam', 15, '6'),
(1172040, 1172, 'Lamanya antara 161 - 400 jam', 15, '3'),
(1172050, 1172, 'Lamanya antara 81 - 160 jam', 15, '2'),
(1172060, 1172, 'Lamanya antara 31 - 80 jam', 15, '1'),
(1172070, 1172, 'Lamanya antara 10 - 30 jam', 15, '1'),
(1173010, 1173, 'Pendidikaan dan pelatihan prajabatan golongan II', 15, '2'),
(1271010, 1271, 'Mengumpulkan bahan/informasi pendukung untuk kegiatan statistik', 1, '0.5'),
(1271022, 1271, 'Menelaah bahan/informasi pendukung untuk kegiatan statistik', 1, '1.5'),
(1271023, 1271, 'Membuat rencana tabulasi kegiatan statistik', 1, '0.016'),
(1271024, 1271, 'Mengikuti pembahasan kuesioner dan instrumen lainnya pada kegiatan statistik', 1, '0.1'),
(1271032, 1271, 'Mengikuti pembahasan penyusunan pedoman kegiatan statistik', 1, '0.1'),
(1271033, 1271, 'Melaksanakan kegiatan sampling menyusun kerangka sampel', 1, '0.55'),
(1271044, 1271, 'Melaksanakan kegiatan sampling menyusun  metode pemilihan sampel', 1, '1.5'),
(1271045, 1271, 'Melaksanakan kegiatan sampling membuat program pemilihan sampel', 1, '1.25'),
(1271054, 1271, 'Melaksanakan kegiatan sampling memilih sampel', 1, '0.05'),
(1271055, 1271, 'Melaksanakan kegiatan sampling memperbaharui (updating) kerangka sampel', 1, '0.001'),
(1271064, 1271, 'Melaksanakan kegiatan dalam lingkup observasi penyusunan kerangka sampel', 1, '0.5'),
(1271065, 1271, 'Melaksanakan kegiatan dalam lingkup observasi monitoring dan evaluasi penerimaan daftar sampel ', 1, '0.2'),
(1271066, 1271, 'Melaksanakan kegiatan dalam lingkup observasi pengelolaan dan penyempurnaan master file', 1, '0.03'),
(1271074, 1271, 'Melaksanakan kegiatan dalam lingkup observasi penentuan metode penarikan sampel', 1, '0.55'),
(1271075, 1271, 'Melakukan pengenalan wilayah objek statistik Observasi', 0, '0'),
(1271076, 1271, 'Menghitung penimbang dalam rangka estimasi kegiatan statistik', 0, '1.3'),
(1271077, 1271, 'Mengatur alokasi dokumen/peralatan sensus/survei/observasi tingkat nasional', 0, '0.06'),
(1271078, 1271, 'Mengikuti pelatihan pengumpulan data', 0, '0.015'),
(1271079, 1271, 'Memberikan pelatihan pengumpulan data bagi petugas', 0, '0.02'),
(1271080, 1271, 'Membuat peta indeks kegiatan statistik', 0, '0.06'),
(1271081, 1271, 'Meneliti peta analog observasi (manual)', 0, '0.03'),
(1271082, 1271, 'Meneliti peta indeks kegiatan statistik', 0, '0,005'),
(1271083, 1271, 'Membuat peta digital', 0, '0,01'),
(1271084, 1271, 'Menghitung sampling error kegiatan statistik', 0, '1.2'),
(1271085, 1271, 'Melakukan pengawasan pemetaan', 0, '0.03'),
(1271086, 1271, 'Mengelola peta digital', 0, '0.06'),
(1271095, 1271, 'Memeriksa hasil penarikan sampel kegiatan observasi berdasarkan wilayah Kerja', 0, '0.04'),
(1271097, 1271, 'Memeriksa hasil penarikan sampel kegiatan observasi berdasarkan non wilayah Kerja', 0, '0.01'),
(1275098, 1275, 'Melakukan pengumpulan data pada kegiatan statistik objek rumah tangga kuesioner sederhana', 0, '0.005'),
(1275099, 1275, 'Melakukan pengumpulan data pada kegiatan statistik objek rumah tangga kuesioner sedang', 0, '0.011'),
(1275120, 1275, 'Melakukan pengumpulan data pada kegiatan statistik objek rumah tangga kuesioner kompleks', 0, '0.027'),
(1275121, 1275, 'Melakukan pengumpulan data pada kegiatan statistik objek non rumah tangga Kuesioner sederhana', 0, '0.01'),
(1275122, 1275, 'Melakukan pengumpulan data pada kegiatan statistik objek non rumah tangga kuesioner kompleks', 0, '0.035'),
(1275123, 1275, 'Melakukan pengawasan pada kegiatan statistik objek rumah tangga kuesioner sederhana', 0, '0.001'),
(1275124, 1275, 'Melakukan pengawasan pada kegiatan statistik objek rumah tangga kuesioner sedang', 0, '0.002'),
(1275125, 1275, 'Melakukan pengawasan pada kegiatan statistik objek rumah tangga kuesioner kompleks', 0, '0.005'),
(1275126, 1275, 'Melakukan pengawasan pada kegiatan statistik objek non rumah tangga kuesioner sederhana', 0, '0.002'),
(1275127, 1275, 'Melakukan pengawasan pada kegiatan statistik objek non rumah tangga kuesioner sedang', 0, '0.003'),
(1275128, 1275, 'Melakukan pengawasan pada kegiatan statistik objek non rumah tangga kuesioner kompleks', 0, '0.006'),
(1275129, 1275, 'Melakukan pemeriksaan hasil pengumpulan data objek rumah tangga kuesioner sederhana', 0, '0.002'),
(1275130, 1275, 'Melakukan pemeriksaan hasil pengumpulan data objek rumah tangga kuesioner sedang', 0, '0.003'),
(1275131, 1275, 'Melakukan pemeriksaan hasil pengumpulan data objek rumah tangga kuesioner kompleks', 0, '0.008'),
(1275132, 1275, 'Melakukan pemeriksaan hasil pengumpulan data objek non rumah tangga kuesioner sederhana', 0, '0.002'),
(1275133, 1275, 'Melakukan pemeriksaan hasil pengumpulan data objek non rumah tangga kuesioner sedang', 0, '0.003'),
(1275134, 1275, 'Melakukan pemeriksaan hasil pengumpulan data objek non rumah tangga kuesioner kompleks', 0, '0.008'),
(1275135, 1275, 'Melakukan pengumpulan data pada kegiatan statistik objek non rumah tangga kuesioner sedang', 0, '0.021'),
(1277136, 1277, 'Merancang dan membuat pedoman pengolahan kegiatan statistik untuk tabulasi', 0, '0.5'),
(1277137, 1277, 'Merancang dan membuat pedoman pengolahan kegiatan statistik untuk Penyuntingan dan penyandian hasil pengumpulan data', 0, '0.72'),
(1277138, 1277, 'Merancang dan membuat pedoman pengolahan kegiatan statistik untuk Validitas data', 0, '1.08'),
(1277139, 1277, 'Membuat program entri data tanpa validasi', 0, '1.4'),
(1277140, 1277, 'Membuat program entri data dengan validasi hasil kegiatan statistik', 0, '2.2'),
(1277141, 1277, 'Melakukan penyuntingan (editing), hasil kegiatan in depth interview.', 0, '0.005'),
(1277142, 1277, 'Membuat program tabulasi pada kegiatan statistik', 0, '1'),
(1277143, 1277, 'Melakukan reformat data sensus/survei dari satu format ke format lainnya dalam media komputer', 0, '0.003'),
(1278144, 1278, 'Membuat peta tematik digital kegiatan statistik', 0, '0.03'),
(1278145, 1278, 'Memeriksa tabel/grafik hasil kegiatan statistik yang akan disajikan tingkat Kabupaten/Kota', 0, '0.02'),
(1278146, 1278, 'Memeriksa tabel/grafik hasil kegiatan statistik yang akan disajikan Tingkat Provinsi', 0, '0.02'),
(1278147, 1278, 'Memeriksa tabel/grafik hasil kegiatan statistik yang akan disajikan Tingkat Nasional', 0, '0.02'),
(1278148, 1278, 'Menyusun publikasi statistik Tingkat Kabupaten/Kota', 0, '1.5'),
(1278149, 1278, 'Menyusun publikasi statistik Tingkat Provinsi', 0, '2'),
(1278150, 1278, 'Menyusun publikasi statistik Tingkat Nasional', 0, '2.5'),
(1278151, 1278, 'Menyusun ringkasan eksekutif Tingkat Kabupaten/Kota', 0, '0.2'),
(1278152, 1278, 'Menyusun ringkasan eksekutif Tingkat Provinsi', 0, '0.3'),
(1278153, 1278, 'Menyusun ringkasan eksekutif Tingkat Nasional', 0, '0.4'),
(1278154, 1278, 'Menyusun publikasi digital dari kegiatan statistik', 0, '0.2'),
(1278155, 1278, 'Menyajikan metadata statistik', 0, '1.5'),
(1371156, 1371, 'Mengkaji kegiatan statistik', 0, '1.6'),
(1371157, 1371, 'Membuat inovasi statistik dalam rangka penyusunan kegiatan statistik', 0, '7.9'),
(1371158, 1371, 'Membuat estimasi parameter dalam rangka penyusunan statistik kelembagaan', 0, '0.6'),
(1371159, 1371, 'Membuat outline untuk publikasi', 0, '0.36'),
(1371160, 1371, 'Mengumpulkan literatur/ referensi untuk publikasi', 0, '0.36'),
(1371161, 1371, 'Melakukan analisis sederhana lintas sektor', 0, '1.9'),
(1371162, 1371, 'Melakukan analisis mendalam satu sektor', 0, '3.2'),
(1371163, 1371, 'Melakukan analisis mendalam lintas sektor', 0, '4.8'),
(1371164, 1371, 'Melakukan kajian lengkap terhadap organisasi dan lingkungan organisasi dalam rangka menentukan kebutuhan organisasi terhadap data statistik.', 0, '25'),
(1373165, 1373, 'Mengembangkan metodologi kegiatan statistik', 0, '4.5'),
(1373166, 1373, 'Memberikan konsultasi statistik dalam rangka penyusunan statistik kelembagaan pada tingkat menengah', 0, '0.2'),
(1373167, 1373, 'Memberikan konsultasi statistik dalam rangka penyusunan statistik kelembagaan pada tingkat Lanjutan', 0, '0.3'),
(1373168, 1373, 'Memberikan konsultasi statistik dalam rangka penyusunan statistik kelembagaan pada tingkat khusus', 0, '0.45'),
(1373169, 1373, 'Menyiapkan materi pengarahan statistik dasar', 0, '0.05'),
(1373170, 1373, 'Menyiapkan materi pengarahan statistik menengah', 0, '0.1'),
(1373171, 1373, 'Menyiapkan materi pengarahan statistik lanjutan', 0, '0.3'),
(1373172, 1373, 'Menyiapkan materi pengarahan statistik khusus', 0, '0.54'),
(1373173, 1373, 'Memberikan pengarahan statistik dalam rangka penyusunan statistik kelembagaan pada tingkat dasar', 0, '0.04'),
(1373174, 1373, 'Memberikan pengarahan statistik dalam rangka penyusunan statistik kelembagaan pada tingkat menengah', 0, '0.05'),
(1373175, 1373, 'Memberikan pengarahan statistik dalam rangka penyusunan statistik kelembagaan pada tingkat lanjutan', 0, '0.006'),
(1373176, 1373, 'Memberikan pengarahan statistik dalam rangka penyusunan statistik kelembagaan pada tingkat khusus', 0, '0.009'),
(1373177, 1373, 'Melakukan penyebarluasan hasil pengumpulan data statistik dalam rangka evaluasi kegiatan kelembagaan dalam bidang statistik menengah', 0, '0.04'),
(1373178, 1373, 'Melakukan penyebarluasan hasil pengumpulan data statistik dalam rangka evaluasi kegiatan kelembagaan dalam bidang statistik lanjutan', 0, '0.06'),
(1373179, 1373, 'Melakukan penyebarluasan hasil pengumpulan data statistik dalam rangka evaluasi kegiatan kelembagaan dalam bidang statistik khusus', 0, '0.09'),
(1373180, 1373, 'Membuat indikator statistik baru', 0, '1.5'),
(1373181, 1373, 'Menyusun rencana induk (master plan) Sistem Statistik Nasional (SSN)', 0, '25'),
(1373182, 1373, 'Melakukan revitalisasi rencana induk SSN sesuai kemajuan teknologi dan ilmu pengetahuan', 0, '10'),
(1373183, 1373, 'Melakukan evaluasi SSN yang sedang berjalan', 0, '10'),
(1373184, 1373, 'Melakukan kajian terhadap perkembangan dan pemanfaatan statistik secara internasional', 0, '5'),
(1471185, 1471, 'Membuat Karya Tulis/Karya Ilmiah hasil penelitian, pengkajian, survei dan atau evaluasi di bidang statistik yang dipublikasikan Dalam bentuk buku terbitan internasional', 0, '40'),
(1471186, 1471, 'Membuat Karya Tulis/Karya Ilmiah hasil penelitian, pengkajian, survei dan atau evaluasi di bidang statistik yang dipublikasikan Dalam bentuk buku yang diterbitkan dan diedarkan secara nasional.', 0, '12.5'),
(1471187, 1471, 'Membuat Karya Tulis/Karya Ilmiah hasil penelitian, pengkajian, survei dan atau evaluasi di bidang statistik yang dipublikasikan Dalam bentuk majalah ilmiah yang diakui oleh LIPI', 0, '6'),
(1471188, 1471, 'Membuat Karya Tulis/Karya Ilmiah hasil penelitian, pengkajian, survei dan atau evaluasi di bidang statistik yang dipublikasikan Karya tulis/karya ilmiah diterbitkan lewat internet', 0, '6'),
(1471189, 1471, 'Membuat karya tulis/karya ilmiah, hasil penelitian, pengkajian survei dan atau evaluasi di bidang statistik yang tidak dipublikasikan Dalam bentuk buku', 0, '8'),
(1471190, 1471, 'Membuat karya tulis/karya ilmiah, hasil penelitian, pengkajian survei dan atau evaluasi di bidang statistik yang tidak dipublikasikan Dalam bentuk makalah', 0, '4'),
(1471191, 1471, 'Membuat karya tulis/karya ilmiah atau ulasan ilmiah hasil gagasan sendiri di bidang statistik yang dipublikasikan Dalam bentuk buku yang diterbitkan dan diedarkan secara nasional', 0, '8'),
(1471192, 1471, 'Membuat karya tulis/karya ilmiah atau ulasan ilmiah hasil gagasan sendiri di bidang statistik yang dipublikasikan Dalam majalah ilmiah yang diakui oleh LIPI', 0, '4'),
(1471193, 1471, 'Membuat karya tulis/karya ilmiah berupa tinjauan atau ulasan ilmiah hasil gagasan sendiri di bidang statistik yang tidak dipublikasikan Dalam bentuk buku', 0, '7'),
(1471194, 1471, 'Membuat karya tulis/karya ilmiah berupa tinjauan atau ulasan ilmiah hasil gagasan sendiri di bidang statistik yang tidak dipublikasikan Dalam bentuk buku', 0, '7'),
(1471195, 1471, 'Membuat karya tulis/karya ilmiah populer di bidang statistik yang disebarluaskan melalui media masa', 0, '2.5'),
(1471196, 1471, 'Membuat karya tulis/karya ilmiah berupa tinjauan, atau ulasan ilmiah hasil gagasan sendiri di bidang statistik yang disampaikan dalam pertemuan ilmiah.', 0, '2.5'),
(1473197, 1473, 'Menyusun petunjuk teknis pelaksanaan pengelolaan kegiatan statistik.', 0, '3'),
(1475198, 1475, 'Menerjemahkan / menyadur buku atau karya ilmiah dibidang statistik yang dipublikasikan Dalam bentuk buku yang diterbitkan dan diedarkan secara nasional', 0, '7'),
(1475199, 1475, 'Menerjemahkan / menyadur buku atau karya ilmiah dibidang statistik yang dipublikasikan Dalam majalah ilmiah yang diakui oleh LIPI.', 0, '3.5'),
(1475200, 1475, 'Menerjemahkan/menyadur buku atau karya ilmiah di bidang statistik yang tidak dipublikasikan Dalam bentuk buku', 0, '3.5'),
(1475201, 1475, 'Menerjemahkan/menyadur buku atau karya ilmiah di bidang statistik yang tidak dipublikasikan Dalam bentuk makalah', 0, '1.5'),
(1475202, 1475, 'Membuat abstrak tulisan yang dimuat dalam majalah ilmiah.', 0, '1'),
(1509203, 1509, 'Memberikan bimbingan penuh kader statistisi sampai mencapai tingkat Doktor per orang, sebagai Pembimbing Pendamping', 0, '3'),
(1509204, 1509, 'Memberikan bimbingan penuh kader statistisi sampai mencapai tingkat Pascasarjana per orang, sebagai Pembimbing Utama', 0, '3'),
(1509205, 1509, 'Memberikan bimbingan penuh kader statistisi sampai mencapai tingkat Pascasarjana per orang, sebagai Pembimbing Pendamping', 0, '2'),
(1509206, 1509, 'Memberikan bimbingan penuh kader statistisi sampai mencapai tingkat Pascasarjana per orang, sebagai Penguji', 0, '1'),
(1509207, 1509, 'Memberikan bimbingan penuh kader statistisi sampai mencapai tingkat Sarjana/Diploma IV per orang, sebagai Pembimbing Utama', 0, '2'),
(1509208, 1509, 'Memberikan bimbingan penuh kader statistisi sampai mencapai tingkat Sarjana/Diploma IV per orang, sebagai Pembimbing Pendamping', 0, '1'),
(1509209, 1509, 'Memberikan bimbingan penuh kader statistisi sampai mencapai tingkat Diploma III per orang, sebagai Pembimbing', 0, '1'),
(1571210, 1571, 'Melaksanakan tugas mengajar pada kursus/ penataran statistik', 0, '0.03'),
(1571211, 1571, 'Melaksanakan tugas mengajar pada perguruan tinggi, tiap SKS (maksimum 6 SKS), per semester Strata 2 atau Strata 3', 0, '1'),
(1571212, 1571, 'Melaksanakan tugas mengajar pada perguruan tinggi, tiap SKS (maksimum 6 SKS), per semester Strata 2 atau Strata 3', 0, '1'),
(1571213, 1571, 'Melaksanakan tugas mengajar pada perguruan tinggi, tiap SKS (maksimum 6 SKS), per semester Strata 1/Diploma IV', 0, '0.5'),
(1571214, 1571, 'Melaksanakan tugas mengajar pada perguruan tinggi, tiap SKS (maksimum 6 SKS), per semester Diploma III', 0, '0.3'),
(1572215, 1572, 'Mengikuti seminar/lokakarya/konferensi sebagai Pemrasaran', 0, '3'),
(1572216, 1572, 'Mengikuti seminar/lokakarya/konferensi sebagai Moderator/pembahas/nara sumber', 0, '2'),
(1572217, 1572, 'Mengikuti seminar/lokakarya/konferensi sebagai Peserta', 0, '1'),
(1574218, 1574, 'Menjadi anggota Tim Penilai Jabatan Fungsional Statistisi', 0, '1'),
(1576218, 1576, 'Menjadi anggota organisasi profesi pada Tingkat Nasional/Internasional sebagai Pengurus aktif', 0, '1'),
(1576219, 1576, 'Menjadi anggota organisasi profesi pada Tingkat Nasional/Internasional sebagai Anggota aktif', 0, '0.5'),
(1576220, 1576, 'Menjadi anggota organisasi profesi pada Tingkat Provinsi/Kabupaten/ Kodya sebagai Pengurus aktif', 0, '0.25'),
(1576221, 1576, 'Menjadi anggota organisasi profesi pada Tingkat Provinsi/Kabupaten/ Kodya sebagai anggota aktif', 0, '0.15'),
(1578222, 1578, 'Memperoleh penghargaan/ tanda jasa Satya Lancana Karya Satya 30 (tiga puluh) tahun', 0, '3'),
(1578223, 1578, 'Memperoleh penghargaan/ tanda jasa Satya Lancana Karya Satya 20 (dua puluh) tahun.', 0, '2'),
(1578224, 1578, 'Memperoleh penghargaan/ tanda jasa Satya Lancana Karya Satya 10 (sepuluh) tahun', 0, '1'),
(1578225, 1578, 'Gelar kehormatan akademis', 0, '15'),
(1579226, 1579, 'Memperoleh gelar kesarjanaan yang tidak sesuai dengan bidang tugasnya Doktor', 0, '15'),
(1579227, 1579, 'Memperoleh gelar kesarjanaan yang tidak sesuai dengan bidang tugasnya S2', 0, '10'),
(1579228, 1579, 'Memperoleh gelar kesarjanaan yang tidak sesuai dengan bidang tugasnya S1', 0, '5');

-- --------------------------------------------------------

--
-- Table structure for table `data_master`
--

CREATE TABLE `data_master` (
  `id` int(11) NOT NULL,
  `butir_kegiatan` varchar(255) NOT NULL,
  `kode_subunsur` varchar(255) NOT NULL,
  `kode_unsur` varchar(255) NOT NULL,
  `volume_kegiatan` varchar(255) NOT NULL,
  `angka_kredit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_master`
--

INSERT INTO `data_master` (`id`, `butir_kegiatan`, `kode_subunsur`, `kode_unsur`, `volume_kegiatan`, `angka_kredit`) VALUES
(1, 'Doktor/Spesialis II (S3)', 'Pendidikan sekolah dan memperoleh gelar/ijasah.', 'Pendidikan', '26', '200'),
(2, 'Pasca Sarjana/Spesialis I (S2)', 'Pendidikan Sekolah dan Memperoleh Gelar/Ijazah', 'Pendidikan', '26', '150'),
(3, 'Sarjana (S1)/Diploma IV', 'Pendidikan sekolah dan memperoleh gelar/ijasah.', 'Pendidikan', '26', '100'),
(4, 'Lamanya lebih dari 960 jam', 'Pendidikan dan pelatihan fungsional di bidang statistik dan memperoleh surat tanda tamat pendidikan dan pelatihan.', 'Pendidikan', '20', '15'),
(5, 'Lamanya antara 161 -  400 jam', 'Pendidikan dan pelatihan fungsional di bidang statistik dan memperoleh surat tanda tamat pendidikan dan pelatihan.', 'Pendidikan', '10', '3'),
(6, 'Lamanya antara 641 - 960 jam', 'Pendidikan dan pelatihan fungsional di bidang statistik dan memperoleh surat tanda tamat pendidikan dan pelatihan.', 'Pendidikan', '19', '9'),
(7, 'Lamanya antara 401 - 640 jam', 'Pendidikan dan pelatihan fungsional di bidang statistik dan memperoleh surat tanda tamat pendidikan dan pelatihan.', 'Pendidikan', '15', '6'),
(8, 'Lamanya antara 81 - 160 jam', 'Pendidikan dan pelatihan fungsional di bidang statistik dan memperoleh surat tanda tamat pendidikan dan pelatihan.', 'Pendidikan', '9', '2'),
(9, 'Lamanya antara 31 - 80 jam', 'Pendidikan dan pelatihan fungsional di bidang statistik dan memperoleh surat tanda tamat pendidikan dan pelatihan.', 'Pendidikan', '7', '1'),
(10, 'Lamanya antara 10 - 30 jam', 'Pendidikan dan pelatihan fungsional di bidang statistik dan memperoleh surat tanda tamat pendidikan dan pelatihan.', 'Pendidikan', '5', '0,5'),
(11, 'Pendidikaan dan pelatihan prajabatan golongan II', 'Pendidikan dan pelatihan prajabatan', 'Pendidikan', '3', '0,5');

-- --------------------------------------------------------

--
-- Table structure for table `data_subunsur`
--

CREATE TABLE `data_subunsur` (
  `id_subunsur` int(4) NOT NULL,
  `id_unsur` int(2) NOT NULL,
  `sub_unsur` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_subunsur`
--

INSERT INTO `data_subunsur` (`id_subunsur`, `id_unsur`, `sub_unsur`) VALUES
(1171, 11, 'Pendidikan sekolah dan memperoleh ijasah/gelar.'),
(1172, 11, 'Pendidikan dan pelatihan fungsional di bidang statistik dan memperoleh surat tanda tamat pendidikan dan pelatihan.'),
(1173, 11, 'Pendidikan dan pelatihan prajabatan'),
(1271, 12, 'Persiapan'),
(1275, 12, 'Pengumpulan Data'),
(1277, 12, 'Pengolahan'),
(1278, 12, 'Penyajian dan Publikasi'),
(1279, 12, 'Penunjang Kegiatan Statistisi'),
(1371, 13, 'Analisis statistik'),
(1373, 13, 'Pengembangan statistik'),
(1471, 14, 'Pembuatan karya tulis/karya ilmiah di bidang statisitik'),
(1473, 14, 'Penyusunan petunjuk teknis pelaksanaan pengelolaan kegiatan statistik.'),
(1475, 14, 'Penerjemahan/penyaduran buku atau karya ilmiah di bidang statistik.'),
(1509, 15, 'Bimbingan penuh kader statistisi'),
(1571, 15, 'Pengajaran/pelatihan di bidang statistik'),
(1572, 15, 'Peran serta dalam mengikuti seminar/ lokakarya/konferensi.'),
(1574, 15, 'Keanggotaan dalam tim penilai jabatan fungsional statistisi'),
(1576, 15, 'Keanggotaan dalam organisasi profesi.'),
(1578, 15, 'Perolehan piagam kehormatan.'),
(1579, 15, 'Perolehan gelar kesarjanaan lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `data_unsur`
--

CREATE TABLE `data_unsur` (
  `id_unsur` int(255) NOT NULL,
  `unsur` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_unsur`
--

INSERT INTO `data_unsur` (`id_unsur`, `unsur`) VALUES
(11, 'Pendidikan'),
(12, 'Penyediaan Data dan Informasi Statistik'),
(13, 'Analisis dan Pengembangan Statistik'),
(14, 'Pengembangan Profesi Statistisi'),
(15, 'Penunjang Kegiatan Statistisi');

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
  `nama` varchar(100) NOT NULL,
  `nip` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_seri_kapreg` varchar(1000) NOT NULL,
  `tempat_tanggal_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `jabatan` enum('Statistisi Muda','Statistisi Madya') NOT NULL,
  `masa_kerja` varchar(100) NOT NULL,
  `unit_kerja` varchar(100) NOT NULL,
  `role` enum('Admin','Statistisi','Penilai') CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `nip`, `password`, `email`, `alamat`, `no_seri_kapreg`, `tempat_tanggal_lahir`, `tgl_lahir`, `jenis_kelamin`, `pendidikan`, `pangkat`, `jabatan`, `masa_kerja`, `unit_kerja`, `role`) VALUES
(2, 'Muhammad Iskandar Muda.S.p', '5556664433322', 'mantap', 'iskandar@kemenag.co.id', 'Jl. Batang 1 Kelurahan Banyumanik Kecamatan Sedikkesano Mantap', '614/KEP/KARPEG/2020', 'Sukabumi', '1998-02-04', 'Laki-laki', 'S1-Keperawatan', 'Penata / III/c / 1 Oktober 2019', 'Statistisi Muda', 'Lama', 'Biro Humas Data dan Informasi', 'Statistisi'),
(8, 'Indah Kumala Sari S.Sos', '112345677776555', 'admin', 'inda@kemenag.co.id', 'Jl. Batang 1 Kelurahan Banyumanik Kecamatan Sedikkesano Mantap', '614/KEP/KARPEG/2020', 'Jakarta', '1999-01-03', 'Laki-Laki', 'S1-Sosial', 'Penata / III/c / 1 Oktober 2019', 'Statistisi Muda', 'Baru', 'Biro Humas Data dan Informasi', 'Admin'),
(10, 'Sugiyanto S.Si', '22233344455', 'penilai1', 'sugi@kemenag.co.id', 'Jl. Batang 1 Kelurahan Banyumanik Kecamatan Sedikkesano Mantap', '614/KEP/KARPEG/2020', 'Jakarta', '1996-01-03', 'Laki-Laki', 'S1-Keperawatan', 'Penata / III/c / 1 Oktober 2019', 'Statistisi Muda', 'Lama', 'Biro Humas Data dan Informasi', 'Penilai'),
(14, 'Ardhito S.H', '44433322211', 'mantap', 'ard@kemenag.co.id', 'Jl. Batang 1 Kelurahan Banyumanik Kecamatan Sedikkesano Mantap', '614/KEP/KARPEG/2020', 'Tanggerang, 12 Juni 1999 ', '1997-05-12', 'Perempuan', 'S1-Hukum', 'Penata / III/c / 1 Oktober 2019', 'Statistisi Muda', 'Lama', 'Biro Humas Data dan Informasi', 'Statistisi'),
(25, 'Gea Mariana Walili S.Ked', '777122121', 'oke', 'gea@kemenag.co.id', 'Jl. Batang 1 Kelurahan Banyumanik Kecamatan Sedikkesano Mantap', '614/KEP/KARPEG/2020', 'Jakarta', '1998-02-04', 'Perempuan', 'S1-Keperawatan', 'Penata / III/c / 1 Oktober 2019', 'Statistisi Madya', 'Lama', 'Biro Humas Data dan Informasi', 'Penilai'),
(27, 'Bakwan', '2223334445512121', '', '', '', '614/KEP/KARPEG/2020', 'Surabaya', '0000-00-00', 'Laki-Laki', 'S1 - Teknik Komputer', 'Penata / III/c / 1 Oktober 2016', 'Statistisi Madya', 'S1 - Teknik Komputer', 'Biro Humas Data dan Informasi', 'Penilai');

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
(3, 'Aquilla Haya Tuzzahra', 1234, 'Penata / III/c / 1 Oktober 2016', 'madya', 'Biro Humas Data dan Informasi'),
(4, 'Muhammad Susilo', 123456, 'Penata / III/c / 1 Oktober 2020', 'Madya', 'Biro Humas Data dan Informasi'),
(5, 'Gea Mariana ', 123456, 'Penata / III/c / 1 Oktober 2016', 'Muda', 'Biro Humas Data dan Informasi'),
(9, 'Raisa andayani S.T', 2147483647, 'Penata / III/c / 1 Oktober 2020', 'Muda', 'Biro Humas Data dan Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `rekap_harian`
--

CREATE TABLE `rekap_harian` (
  `id_rekap` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `unsur` varchar(255) NOT NULL,
  `sub_unsur` varchar(255) NOT NULL,
  `butir_kegiatan` varchar(255) NOT NULL,
  `uraian_kegiatan` varchar(100) NOT NULL,
  `satuan_hasil` varchar(100) NOT NULL,
  `angka_kredit` varchar(255) NOT NULL,
  `volume_kegiatan` varchar(255) NOT NULL,
  `jumlah_kredit` varchar(255) NOT NULL,
  `total_nilai` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `unggah_bukti` varchar(255) NOT NULL,
  `status` enum('Belum Dinilai','Sedang Dinilai','Selesai Dinilai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekap_harian`
--

INSERT INTO `rekap_harian` (`id_rekap`, `nama`, `nip`, `unsur`, `sub_unsur`, `butir_kegiatan`, `uraian_kegiatan`, `satuan_hasil`, `angka_kredit`, `volume_kegiatan`, `jumlah_kredit`, `total_nilai`, `tanggal`, `unggah_bukti`, `status`) VALUES
(240, 'Muhammad Iskandar Muda.S.p', '5556664433322', '11', '1171', 'Pasca Sarjana/Spesialis I (S2)', 'Bismillah nyoba', 'Tiap buku', '2', '50', '2500', '125000', '2021-02-01', 'file_240.pdf', 'Sedang Dinilai'),
(241, 'Ardhito S.H', '44433322211', '11', '1172', 'Lamanya antara 161 - 400 jam', 'ini punya si ardito', 'Jam', '', '50', '150', '450', '2021-02-02', 'file_241.pdf', 'Selesai Dinilai'),
(242, 'Ardhito S.H', '44433322211', '15', '1509', 'Memberikan bimbingan penuh kader statistisi sampai mencapai tingkat Pascasarjana per orang, sebagai Pembimbing Utama', 'Akhir udah full semuaaaaa', 'Tesis', '', '30', '90', '270', '2021-02-08', 'file_242.pdf', 'Belum Dinilai'),
(244, 'Muhammad Iskandar Muda.S.p', '5556664433322', '15', '1574', 'Menjadi anggota Tim Penilai Jabatan Fungsional Statistisi', 'nyoba lagi', 'Tesis', '1', '30', '30', '30', '2021-02-02', 'file_244.pdf', 'Belum Dinilai'),
(245, 'Ardhito S.H', '44433322211', '11', '1173', 'Pendidikaan dan pelatihan prajabatan golongan II', 'akakakakassssssas', 'Jam', '2', '50', '100', '200', '2021-02-11', 'file_245.pdf', 'Belum Dinilai'),
(246, 'Ardhito S.H', '44433322211', '13', '1373', 'Memberikan pengarahan statistik dalam rangka penyusunan statistik kelembagaan pada tingkat lanjutan', 'cobaaaaaaaa', 'Jam', '0.006', '50', '0.3', '0.0018', '2021-02-02', 'file_246.pdf', 'Belum Dinilai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nip` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `role` enum('admin','statistisi') CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nip`, `password`, `role`) VALUES
(1, 'aliya statistisi', '1234', '1234', 'statistisi'),
(2, 'Sur', '234', '234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_butir`
--
ALTER TABLE `data_butir`
  ADD PRIMARY KEY (`id_butir`),
  ADD KEY `districts_id_index` (`id_subunsur`);

--
-- Indexes for table `data_master`
--
ALTER TABLE `data_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_subunsur`
--
ALTER TABLE `data_subunsur`
  ADD PRIMARY KEY (`id_subunsur`),
  ADD KEY `regencies_province_id_index` (`id_unsur`);

--
-- Indexes for table `data_unsur`
--
ALTER TABLE `data_unsur`
  ADD PRIMARY KEY (`id_unsur`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_master`
--
ALTER TABLE `data_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pimpinan`
--
ALTER TABLE `pimpinan`
  MODIFY `id_pimpinan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rekap_harian`
--
ALTER TABLE `rekap_harian`
  MODIFY `id_rekap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
