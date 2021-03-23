-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Apr 2020 pada 17.18
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himatif1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bph`
--

CREATE TABLE `bph` (
  `bph_id` int(11) NOT NULL,
  `periode_id` int(11) DEFAULT NULL,
  `mahasiswa_id` int(11) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bph`
--

INSERT INTO `bph` (`bph_id`, `periode_id`, `mahasiswa_id`, `jabatan`) VALUES
(3, 1, 1, 'Ketua'),
(4, 4, 3, 'Bendahara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `kegiatan_id` int(11) NOT NULL,
  `bph_id` int(11) DEFAULT NULL,
  `periode_id` int(11) DEFAULT NULL,
  `nama_kegiatan` varchar(100) DEFAULT NULL,
  `waktu_kegiatan` date DEFAULT NULL,
  `tempat_kegiatan` varchar(100) DEFAULT NULL,
  `deskripsi_kegiatan` text,
  `foto_kegiatan` varchar(255) NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `status_kegiatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`kegiatan_id`, `bph_id`, `periode_id`, `nama_kegiatan`, `waktu_kegiatan`, `tempat_kegiatan`, `deskripsi_kegiatan`, `foto_kegiatan`, `tanggal_berakhir`, `status_kegiatan`) VALUES
(1, 3, 1, 'Perpisahan 2016', '2020-01-14', 'Holbung', '						savfahsvfjashfckjvfhkv;alfhdsvflhdvghdfgfd\r\ndgjdbgkjdfgjdfgbjkbfdjgbdfg\r\n				', 'danila.JPG', '0000-00-00', ''),
(3, NULL, NULL, 'Akreditasi', '0000-00-00', 'Aula Institut Teknologi Del', 'xcsdvsfdfgnfhnfhnghn', 'menu.png', '0000-00-00', ''),
(5, NULL, NULL, 'Melinium', '2020-01-11', 'asdasd', 'jj', 'danila.JPG', '0000-00-00', ''),
(6, NULL, NULL, 'Barokah', '2020-01-18', 'Aula Institut Teknologi Del', 'masvcas cnba snc ascasc', 'WhatsApp Image 2020-01-15 at 22.16.44 (1).jpeg', '0000-00-00', ''),
(8, 4, NULL, 'brodo', '2020-01-23', 'PematangSiantar', 'hahahaa		', '421c8108cfac759d262052bf103b71ea.jpg', '0000-00-00', ''),
(9, 3, NULL, 'lando', '2020-01-10', 'Silaen', 'sadbksajbfkjasf', 'calendar.png', '0000-00-00', ''),
(10, 3, NULL, 'fewf', '2020-01-10', 'fweffwfs', '			sdfsf		', 'danila.JPG', '0000-00-00', ''),
(11, 3, NULL, 'Asdfg', '2020-01-17', 'ascascas', 'cascasc', 'download.png', '0000-00-00', ''),
(12, 3, NULL, 'Akreditasi', '2020-01-21', 'Aula Institut Teknologi Del', 'kkkgfksjgfsd', 'download.png', '0000-00-00', ''),
(13, 3, NULL, 'joni', '2020-02-15', 'lkdshldsfbvldf', 'xasxasx', '421c8108cfac759d262052bf103b71ea.jpg', '0000-00-00', ''),
(14, 3, NULL, 'brodo', '2020-02-12', 'medan', 'ayam', 'menu.png', '0000-00-00', ''),
(24, 3, 1, 'test', '2020-12-31', 'test', 'test', 'back.png', '0000-00-00', ''),
(25, 3, 1, 'Wenny', '2020-12-04', 'Aula Institut Teknologi Del', 'Rajon		', 'danila.JPG', '0000-00-00', ''),
(26, 3, 1, 'Wisuda', '2020-09-09', 'Institut Teknologi Del', 'Wisuda Angkatan 2017 D3 Teknologin Informasi ', '421c8108cfac759d262052bf103b71ea.jpg', '2020-09-09', 'Belum Terlaksanakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisioner`
--

CREATE TABLE `kuisioner` (
  `kuisioner_id` int(11) NOT NULL,
  `bph_id` int(11) DEFAULT NULL,
  `kegiatan_id` int(11) DEFAULT NULL,
  `judul_kuisioner` varchar(225) NOT NULL,
  `tanggal_view` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `keterangan_kuisioner` varchar(225) NOT NULL,
  `intruksi_kuisioner` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuisioner`
--

INSERT INTO `kuisioner` (`kuisioner_id`, `bph_id`, `kegiatan_id`, `judul_kuisioner`, `tanggal_view`, `tanggal_berakhir`, `keterangan_kuisioner`, `intruksi_kuisioner`) VALUES
(1, 3, 1, 'Ayam ', '2020-01-06', '2020-01-18', 'sdv,msd vsdds', 'sdvsdvsvsdv'),
(2, NULL, NULL, 'Pembahasan Acara Refresinh Himatif Akt. 2019', '2020-01-16', '2020-01-30', 'ss = Sanagt setuju\r\ns = setuju\r\nc = Cukup\r\n1 = kurang setuju\r\n5 = Sangat setuju  ', 'Diharapkan pada seluruh Mahasiswa Himatif Untuk Mengisi Kuisioner Tersebut untuk kepentingan Bersama.'),
(3, NULL, NULL, 'test', '2020-12-31', '2020-12-02', 'test', 'test'),
(4, 3, NULL, 'test', '2019-12-31', '2019-12-27', 'res', 'res');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisioner_jawaban`
--

CREATE TABLE `kuisioner_jawaban` (
  `kuisioner_jawaban_id` int(11) NOT NULL,
  `kuisioner_id` int(11) DEFAULT NULL,
  `kuisioner_pertanyaan_id` int(11) DEFAULT NULL,
  `mahasiswa_id` int(11) DEFAULT NULL,
  `jawaban` text,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuisioner_jawaban`
--

INSERT INTO `kuisioner_jawaban` (`kuisioner_jawaban_id`, `kuisioner_id`, `kuisioner_pertanyaan_id`, `mahasiswa_id`, `jawaban`, `waktu`) VALUES
(1, 1, 1, 1, 'vdasvhdasvfahvfjdvfjsdvfjdsf', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisioner_opsi`
--

CREATE TABLE `kuisioner_opsi` (
  `kuisioner_opsi_id` int(11) NOT NULL,
  `kuisioner_pertanyaan_id` int(11) DEFAULT NULL,
  `no_opsi` int(11) DEFAULT NULL,
  `keterangan_opsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuisioner_opsi`
--

INSERT INTO `kuisioner_opsi` (`kuisioner_opsi_id`, `kuisioner_pertanyaan_id`, `no_opsi`, `keterangan_opsi`) VALUES
(1, 1, 1, 'ghghxffgxgx'),
(2, 2, 1, 'sangat setuju'),
(3, 2, 2, 'tidak setuju');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisioner_pertanyaan`
--

CREATE TABLE `kuisioner_pertanyaan` (
  `kuisioner_pertanyaan_id` int(11) NOT NULL,
  `kuisioner_id` int(11) DEFAULT NULL,
  `nomor` int(11) DEFAULT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuisioner_pertanyaan`
--

INSERT INTO `kuisioner_pertanyaan` (`kuisioner_pertanyaan_id`, `kuisioner_id`, `nomor`, `pertanyaan`) VALUES
(1, 1, 1, ''),
(2, 1, 1, 'apa?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mahasiswa_id` int(11) NOT NULL,
  `nama` text,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nim` varchar(100) DEFAULT NULL,
  `kelas` text,
  `angkatan` varchar(100) DEFAULT NULL,
  `alamat` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `status_mahasiswa` varchar(225) NOT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `role` varchar(100) NOT NULL,
  `foto_mahasiswa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`mahasiswa_id`, `nama`, `username`, `password`, `nim`, `kelas`, `angkatan`, `alamat`, `email`, `status_mahasiswa`, `tempat_lahir`, `tanggal_lahir`, `role`, `foto_mahasiswa`) VALUES
(1, 'Hernan Crespo Panjaitan', 'hernan', 'hernan', '11317056', '32TI2', '2017', '						JL.Bahkora II Bawah PematangSiantar				', 'if318056@itdel', 'user', 'DolokSanggul', '1999-11-09', 'admin', ''),
(2, 'brodo Vulcano', 'brodo2', 'brodo2', '11312121', '32TI1', '2018', '						test3						', 'if318016@itdel', 'user', 'Medan', '2001-07-07', 'user', ''),
(3, 'brodo Vulcano', 'brodo2', 'brodo2', '11312121', '32TI1', '2018', '						test3						', 'if318016@itdel', 'user', 'Medan', '2001-07-07', 'user', ''),
(4, 'brodo Vulcano', 'brodo2', 'brodo2', '11312121', '32TI1', '2018', '						test3						', 'if318016@itdel', 'user', 'Medan', '2001-07-07', 'user', ''),
(5, 'brodo Vulcano', 'brodo2', 'brodo2', '11312121', '32TI1', '2018', '						test3						', 'if318016@itdel', 'user', 'Medan', '2001-07-07', 'user', ''),
(6, 'brodo Vulcano', 'brodo2', 'brodo2', '11312121', '32TI1', '2018', '						test3						', 'if318016@itdel', 'user', 'Medan', '2001-07-07', 'user', ''),
(7, 'brodo Vulcano', 'brodo2', 'brodo2', '11312121', '32TI1', '2018', '						test3						', 'if318016@itdel', 'user', 'Medan', '2001-07-07', 'user', ''),
(8, 'brodo Vulcano', 'brodo2', 'brodo2', '11312121', '32TI1', '2018', '						test3						', 'if318016@itdel', 'user', 'Medan', '2001-07-07', 'user', ''),
(9, 'Amri Simajuntak', 'Amri', 'amri123', '11317036', '33TI2', '2017', '			Silaen								', 'if317036@itdel', 'user', 'Silaen', '2020-03-21', 'user', '421c8108cfac759d262052bf103b71ea.jpg'),
(10, 'Fandi Dachi', 'Fandi', 'fandi123', '11317024', '33TI1', '2017', 'Tembung Medan				', 'if317024@itdel', '', 'Padang', '2020-03-14', '', 'calendar.png'),
(11, 'Humbas Panjaitan', 'humbas', 'humbas123', '11318023', '33TI1', '2018', '						P.Siantar				', 'if318023@itdel', 'user', 'DolokSanggul', '2003-03-04', 'user', 'danila.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `bph_id` int(11) DEFAULT NULL,
  `periode_id` int(11) DEFAULT NULL,
  `detail_pengumuman` text,
  `tanggal_akhir_pengumuman` date DEFAULT NULL,
  `judul_pengumuman` varchar(225) NOT NULL,
  `foto_pengumuman` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`pengumuman_id`, `bph_id`, `periode_id`, `detail_pengumuman`, `tanggal_akhir_pengumuman`, `judul_pengumuman`, `foto_pengumuman`) VALUES
(1, 3, 1, 'gass', '2020-01-29', 'coding', ''),
(2, 3, 1, '			GKJVGJDVGJSVFHSDFJDSHFSDHBFHSDBFAKBFAFAFSFGFSGHFGHJGJGFJGFJGHJ\r\nJGJGHJGHJGJ		', '2020-01-29', 'Ret-Ret', ''),
(3, NULL, NULL, '			Untuk sebagian umat Muslim pasti sudah tidak asing dengan istilah Wudlu? Pasalnya sebelum melakukan ibadah suci seperti sholat dan mengaji, diperlukannya untuk bersuci dari najis dan hadas yang menempel pada tubuh kita.\r\n\r\nHal itu dilakukan karena merupakan syarat wajibnya kita beribadah. Namun tahukah kamu apa itu definisi Wudlu?\r\n\r\nWudlu adalah salah satu cara bersuci dengan air. Nah dalam artikel ini akan dibahas apakah air Wudlu dapat membuat orang cantik menurut substansi zat kimia yang terkandung didalamnya.\r\n\r\nAir adalah substansi kimia dengan rumus kimia H2O, yang berarti satu molekul air tersusun atas 2 atom Hidrogen dan 1 atom Oksigen. Kedua molekul tersebut saling berikat menjadi suatu senyawa.			', '2020-01-29', 'Himatif ', ''),
(4, NULL, NULL, 'test', '2020-02-21', 'Himatif ', ''),
(10, 3, 4, 'ewew', '2020-03-27', 'qwqe', 'asd.jpg'),
(12, 3, 1, '		test', '2020-04-24', 'rwaa', ''),
(14, 3, 1, '		zxc', '2020-03-25', 'zxc', 'back.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `periode`
--

CREATE TABLE `periode` (
  `periode_id` int(11) NOT NULL,
  `periode_awal` varchar(100) DEFAULT NULL,
  `periode_akhir` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `periode`
--

INSERT INTO `periode` (`periode_id`, `periode_awal`, `periode_akhir`, `status`) VALUES
(1, '2016', '2020', 1),
(2, '2018', '2021', 1),
(3, '2019', '2022', 1),
(4, '2017', '2020', 1),
(5, '2017', '2020', 1),
(7, '2018', '2021', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `uang_kas`
--

CREATE TABLE `uang_kas` (
  `uang_kas_id` int(11) NOT NULL,
  `bph_id` int(11) DEFAULT NULL,
  `periode_id` int(11) DEFAULT NULL,
  `jumlah_bayar` varchar(225) DEFAULT NULL,
  `tanggal_dibuat` date DEFAULT NULL,
  `tanggal_berakhir` date DEFAULT NULL,
  `deskripsi_pembayaran` text,
  `status_pembayaran` varchar(50) DEFAULT NULL,
  `mahasiswa_id` int(11) DEFAULT NULL,
  `Nama_pembayar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `uang_kas`
--

INSERT INTO `uang_kas` (`uang_kas_id`, `bph_id`, `periode_id`, `jumlah_bayar`, `tanggal_dibuat`, `tanggal_berakhir`, `deskripsi_pembayaran`, `status_pembayaran`, `mahasiswa_id`, `Nama_pembayar`) VALUES
(1, 3, 1, '350.000.000', '2020-01-22', '2020-01-31', 'sdbfsdbfkdsjbfkjdskhfvdshfsdkbfdsjlfbsd;kfbdsjkfbsdjbgkdfjg', '', NULL, ''),
(2, 3, 4, '45.000', '2020-03-09', '2020-03-31', 'Uang kas pada bulan maret', 'Lunas', 6, 'Jonathan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `role`) VALUES
(1, 'hernan', 'hernan123', 'admin'),
(2, 'layla', 'layla123', 'admin'),
(3, 'roma', 'roma123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bph`
--
ALTER TABLE `bph`
  ADD PRIMARY KEY (`bph_id`),
  ADD KEY `periode_id` (`periode_id`),
  ADD KEY `mahasiswa_id` (`mahasiswa_id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`kegiatan_id`),
  ADD KEY `bph_id` (`bph_id`),
  ADD KEY `periode_id` (`periode_id`);

--
-- Indexes for table `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD PRIMARY KEY (`kuisioner_id`),
  ADD KEY `bph_id` (`bph_id`),
  ADD KEY `kegiatan_id` (`kegiatan_id`);

--
-- Indexes for table `kuisioner_jawaban`
--
ALTER TABLE `kuisioner_jawaban`
  ADD PRIMARY KEY (`kuisioner_jawaban_id`),
  ADD KEY `kuisioner_id` (`kuisioner_id`),
  ADD KEY `kuisioner_pertanyaan_id` (`kuisioner_pertanyaan_id`),
  ADD KEY `mahasiswa_id` (`mahasiswa_id`);

--
-- Indexes for table `kuisioner_opsi`
--
ALTER TABLE `kuisioner_opsi`
  ADD PRIMARY KEY (`kuisioner_opsi_id`),
  ADD KEY `kuisioner_pertanyaan_id` (`kuisioner_pertanyaan_id`);

--
-- Indexes for table `kuisioner_pertanyaan`
--
ALTER TABLE `kuisioner_pertanyaan`
  ADD PRIMARY KEY (`kuisioner_pertanyaan_id`),
  ADD KEY `kuisioner_id` (`kuisioner_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mahasiswa_id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`),
  ADD KEY `bph_id` (`bph_id`),
  ADD KEY `periode_id` (`periode_id`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`periode_id`);

--
-- Indexes for table `uang_kas`
--
ALTER TABLE `uang_kas`
  ADD PRIMARY KEY (`uang_kas_id`),
  ADD KEY `bph_id` (`bph_id`),
  ADD KEY `periode_id` (`periode_id`),
  ADD KEY `mahasiswa_id` (`mahasiswa_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bph`
--
ALTER TABLE `bph`
  MODIFY `bph_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `kegiatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `kuisioner`
--
ALTER TABLE `kuisioner`
  MODIFY `kuisioner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kuisioner_jawaban`
--
ALTER TABLE `kuisioner_jawaban`
  MODIFY `kuisioner_jawaban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kuisioner_opsi`
--
ALTER TABLE `kuisioner_opsi`
  MODIFY `kuisioner_opsi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kuisioner_pertanyaan`
--
ALTER TABLE `kuisioner_pertanyaan`
  MODIFY `kuisioner_pertanyaan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `mahasiswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `periode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `uang_kas`
--
ALTER TABLE `uang_kas`
  MODIFY `uang_kas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bph`
--
ALTER TABLE `bph`
  ADD CONSTRAINT `bph_ibfk_1` FOREIGN KEY (`periode_id`) REFERENCES `periode` (`periode_id`),
  ADD CONSTRAINT `bph_ibfk_2` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`mahasiswa_id`);

--
-- Ketidakleluasaan untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`bph_id`) REFERENCES `bph` (`bph_id`),
  ADD CONSTRAINT `kegiatan_ibfk_2` FOREIGN KEY (`periode_id`) REFERENCES `periode` (`periode_id`);

--
-- Ketidakleluasaan untuk tabel `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD CONSTRAINT `kuisioner_ibfk_1` FOREIGN KEY (`bph_id`) REFERENCES `bph` (`bph_id`),
  ADD CONSTRAINT `kuisioner_ibfk_2` FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatan` (`kegiatan_id`);

--
-- Ketidakleluasaan untuk tabel `kuisioner_jawaban`
--
ALTER TABLE `kuisioner_jawaban`
  ADD CONSTRAINT `kuisioner_jawaban_ibfk_1` FOREIGN KEY (`kuisioner_id`) REFERENCES `kuisioner` (`kuisioner_id`),
  ADD CONSTRAINT `kuisioner_jawaban_ibfk_2` FOREIGN KEY (`kuisioner_pertanyaan_id`) REFERENCES `kuisioner_pertanyaan` (`kuisioner_pertanyaan_id`),
  ADD CONSTRAINT `kuisioner_jawaban_ibfk_3` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`mahasiswa_id`);

--
-- Ketidakleluasaan untuk tabel `kuisioner_opsi`
--
ALTER TABLE `kuisioner_opsi`
  ADD CONSTRAINT `kuisioner_opsi_ibfk_1` FOREIGN KEY (`kuisioner_pertanyaan_id`) REFERENCES `kuisioner_pertanyaan` (`kuisioner_pertanyaan_id`);

--
-- Ketidakleluasaan untuk tabel `kuisioner_pertanyaan`
--
ALTER TABLE `kuisioner_pertanyaan`
  ADD CONSTRAINT `kuisioner_pertanyaan_ibfk_1` FOREIGN KEY (`kuisioner_id`) REFERENCES `kuisioner` (`kuisioner_id`);

--
-- Ketidakleluasaan untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `pengumuman_ibfk_1` FOREIGN KEY (`bph_id`) REFERENCES `bph` (`bph_id`),
  ADD CONSTRAINT `pengumuman_ibfk_2` FOREIGN KEY (`periode_id`) REFERENCES `periode` (`periode_id`);

--
-- Ketidakleluasaan untuk tabel `uang_kas`
--
ALTER TABLE `uang_kas`
  ADD CONSTRAINT `uang_kas_ibfk_1` FOREIGN KEY (`bph_id`) REFERENCES `bph` (`bph_id`),
  ADD CONSTRAINT `uang_kas_ibfk_2` FOREIGN KEY (`periode_id`) REFERENCES `periode` (`periode_id`),
  ADD CONSTRAINT `uang_kas_ibfk_3` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`mahasiswa_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
