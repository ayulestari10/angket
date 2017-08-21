-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2016 at 05:36 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angket`
--

-- --------------------------------------------------------

--
-- Table structure for table `angket_tbl`
--

CREATE TABLE `angket_tbl` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(225) NOT NULL,
  `angkatan` varchar(225) NOT NULL,
  `kategori` varchar(35) NOT NULL,
  `pernyataan` text NOT NULL,
  `STS` varchar(225) NOT NULL,
  `TS` varchar(225) NOT NULL,
  `N` varchar(225) NOT NULL,
  `S` varchar(225) NOT NULL,
  `ST` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angket_tbl`
--

INSERT INTO `angket_tbl` (`id`, `jurusan`, `angkatan`, `kategori`, `pernyataan`, `STS`, `TS`, `N`, `S`, `ST`) VALUES
(1, '0#0#0#0', '0#0#0#0#0', 'Dosen', 'Kinerja dosen telah cukup baik?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(2, '0#0#0#0', '0#0#0#0#0', 'Dosen', 'Menurut Anda apakah dosen bersedia membuka kelas konseling diluar jadwal kuliah?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(3, '0#0#0#0', '0#0#0#0#0', 'Dosen', 'Dosen telah menerapkan kedisiplinan dikelas?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(4, '0#0#0#0', '0#0#0#0#0', 'Materi', 'Materi yang disampaikan dosen telah lumayan baik?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(5, '0#0#0#0', '0#0#0#0#0', 'Materi', 'Penguasaan materi yang diajarkan oleh dosen lumayan banyak?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(6, '0#0#0#0', '0#0#0#0#0', 'Materi', 'Materi yang disampaikan dosen adalah interaktif?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(7, '0#0#0#0', '0#0#0#0#0', 'Materi', 'Materi yang diajarkan sesuai dengan silabus?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(8, '0#0#0#0', '0#0#0#0#0', 'Pengajaran', 'Dosen memiliki ketepatan waktu masuk dan keluar kelas?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(9, '0#0#0#0', '0#0#0#0#0', 'Pengajaran', 'Dalam proses belajar/mengajar Anda dapat mengerti dengan baik?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(10, '0#0#0#0', '0#0#0#0#0', 'Pengajaran', 'Nilai yang diberikan dosen sesuai dengan penguasaan materi Anda?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(11, '0#0#0#0', '0#0#0#0#0', 'Pengajaran', 'Cara dosen menyampaikan materi sesuai dengan apa yang Anda harapkan?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(12, '0#0#0#0', '0#0#0#0#0', 'Fasilitas', 'Fasilitas yang telah diberikan kampus telah cukup baik untuk menunjang kegiatan kuliah Anda?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(13, '0#0#0#0', '0#0#0#0#0', 'Fasilitas', 'Penanganan cepat pada masalah listrik apabila listrik padam?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(14, '0#0#0#0', '0#0#0#0#0', 'Fasilitas', 'Fasilitas toilet berfungsi dengan baik dan bersih?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(15, '0#0#0#0', '0#0#0#0#0', 'Fasilitas', 'Fasilitas pendingin ruangan dirasakan telah cukup baik?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(16, '0#0#0#0', '0#0#0#0#0', 'Fasilitas', 'Pencahayaan didalam kelas telah lumayan baik?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(17, '0#0#0#0', '0#0#0#0#0', 'Fasilitas', 'Proyektor dan layar proyektor yang digunakan telah cukup membantu melaksanakan kegiatan pengajaran?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(18, '0#0#0#0', '0#0#0#0#0', 'Fasilitas', 'Perlengkapan seperti papan tulis/spidol telah menunjang proses pengajaran?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(19, '0#0#0#0', '0#0#0#0#0', 'Fasilitas', 'Fasilitas hotspot tersedia dengan baik?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(20, '0#0#0#0', '0#0#0#0#0', 'Fasilitas', 'Kantin sudah memadai?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(21, '', '0#0#0#0#0', 'Parkiran', 'Sistem pakiraan telah berjalan cukup baik masalah pakir kendaraan?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(22, '0#0#0#0', '0#0#0#0#0', 'Parkiran', 'Kinerja satpam dalam pengamanan dan tanggung jawab dalam pengaturan parkiran berjalan dengan baik?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(23, '0#0#0#0', '0#0#0#0#0', 'Parkiran', 'Kinerja satpam dalam sistem pakir berjalan dengan baik?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(24, '0#0#0#0', '0#0#0#0#0', 'Laboratorium', 'Fasilitas laboratorium yang disediakan telah memadai?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(25, '0#0#0#0', '0#0#0#0#0', 'Laboratorium', 'Apakah pendapat saudara mengenai laboran telah dibangun dengan baik?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(26, '0#0#0#0', '0#0#0#0#0', 'Laboratorium', 'Materi mengenai laboran yang disampaikan dapat dipahami?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(27, '0#0#0#0', '0#0#0#0#0', 'Laboratorium', 'Materi yang diberikan laboran sesuai dengan silabus?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(28, '0#0#0#0', '0#0#0#0#0', 'Laboratorium', 'Materi yang disampaikan laboran dapat dimengerti dengan baik?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(29, '0#0#0#0', '0#0#0#0#0', 'Laboratorium', 'Laboratorium bisa digunakan untuk search atau bahkan mengerjakan tugas-tugas perkuliahan?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(30, '0#0#0#0', '0#0#0#0#0', 'Laboratorium', 'Laboran bersedia mengajarkan saudara diluar jam kuliah?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(31, '0#0#0#0', '0#0#0#0#0', 'Laboratorium', 'Antara dosen pemateri dan laboran saling berkomunikasi mengenai materi yang diajarkan?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(32, '0#0#0#0', '0#0#0#0#0', 'Laboratorium', 'Laboratorium dapat digunakan oleh mahasiswa diluar jam pengajaran?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(33, '0#0#0#0', '0#0#0#0#0', 'kenyamanan_keamanan', 'Kabersihan da kerapian telah terlaksana denga baik disetiap ruangan kelas yang akan digunakan?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(34, '0#0#0#0', '0#0#0#0#0', 'kenyamanan_keamanan', 'Kebersihan lingkungan dapat dirasakan dalam kenyamanan perkuliahan?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(35, '0#0#0#0', '0#0#0#0#0', 'kenyamanan_keamanan', 'Apakah Anda mengharapkan adanya fasilitas student center/fasilitas outdoor/tempat berdiskusi diluar kelas?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(36, '0#0#0#0', '0#0#0#0#0', 'kenyamanan_keamanan', 'Keamanan dalam perkuliahan bejalan dengan baik', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(37, '0#0#0#0', '0#0#0#0#0', 'kenyamanan_keamanan', 'Pengatasan untuk masalah kehilangan barang dapat terselesaikan?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(38, '0#0#0#0', '0#0#0#0#0', 'kenyamanan_keamanan', 'Menurut Anda cara security dalam menangani masalah keamanan dapat berjalan dengan baik?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(39, '0#0#0#0', '0#0#0#0#0', 'minat_bakat', 'Fakultas telah membantu mahasiswa dalam pengembangan softskill dan hardskill?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(40, '0#0#0#0', '0#0#0#0#0', 'minat_bakat', 'Peran Fakultas mendukung mahasiswa dalam mengikuti perlombaan?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(41, '0#0#0#0', '0#0#0#0#0', 'minat_bakat', 'Dalam ketersediannya Fakultas membantu mahasiswa dalm mewadahi pengembangan minat dan bakat?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(42, '0#0#0#0', '0#0#0#0#0', 'minat_bakat', 'Apakah Fakultas merespon terhadap isu yang berkembang dinegara?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(43, '0#0#0#0', '0#0#0#0#0', 'minat_bakat', 'Apakah Anda setuju diadakan kuliah-kuliah umum dilingkungan Fakultas untuk tambahan perkuliahan?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(44, '0#0#0#0', '0#0#0#0#0', 'ta_kp', 'Dosen pembimbing Skripsi telah membantu dalam masalah mengatasi Skripsi/KP Anda?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(45, '0#0#0#0', '0#0#0#0#0', 'ta_kp', 'Media atau fasilitas di Fakultas telah membantu Anda dalam mengejakan TA?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(46, '0#0#0#0', '0#0#0#0#0', 'ta_kp', 'Peran ketua jurusan/sekjur dapat membantu dalam mengerjakan TA?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(47, '0#0#0#0', '0#0#0#0#0', 'ta_kp', 'Jadwal pembimbing telah sesuai atau membantu mengatasi pembimbingan TA?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(48, '0#0#0#0', '0#0#0#0#0', 'administrasi', 'Pelayanan administrasi sudah baik dan ramah?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0'),
(49, '0#0#0#0', '0#0#0#0#0', 'administrasi', 'Proses dalam pelayanan administrasi cepat?', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0', '0#0#0#0#0');

-- --------------------------------------------------------

--
-- Table structure for table `kritikdansaran`
--

CREATE TABLE `kritikdansaran` (
  `id_ks` int(11) NOT NULL,
  `kritik` text NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kritikdansaranta`
--

CREATE TABLE `kritikdansaranta` (
  `id_ks_ta` int(11) NOT NULL,
  `dosen_pembimbing` text NOT NULL,
  `kendala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angket_tbl`
--
ALTER TABLE `angket_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritikdansaran`
--
ALTER TABLE `kritikdansaran`
  ADD PRIMARY KEY (`id_ks`);

--
-- Indexes for table `kritikdansaranta`
--
ALTER TABLE `kritikdansaranta`
  ADD PRIMARY KEY (`id_ks_ta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angket_tbl`
--
ALTER TABLE `angket_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `kritikdansaran`
--
ALTER TABLE `kritikdansaran`
  MODIFY `id_ks` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kritikdansaranta`
--
ALTER TABLE `kritikdansaranta`
  MODIFY `id_ks_ta` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
