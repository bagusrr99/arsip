-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Sep 2020 pada 14.41
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip`
--

CREATE TABLE `arsip` (
  `id` int(11) NOT NULL,
  `nomor_arsip` varchar(50) COLLATE utf8_bin NOT NULL,
  `keamanan` varchar(20) COLLATE utf8_bin NOT NULL,
  `klasifikasi` varchar(30) COLLATE utf8_bin NOT NULL,
  `tanggal_arsip` varchar(10) COLLATE utf8_bin NOT NULL,
  `tanggal_input` varchar(10) COLLATE utf8_bin NOT NULL,
  `keterangan` varchar(40) COLLATE utf8_bin NOT NULL,
  `file` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `arsip`
--

INSERT INTO `arsip` (`id`, `nomor_arsip`, `keamanan`, `klasifikasi`, `tanggal_arsip`, `tanggal_input`, `keterangan`, `file`) VALUES
(1, '1', 'ef', 'qewf', '02/09/2020', '01/09/2020', 'ed', 'document.pdf'),
(2, '245657', 'kyug', 'mj,hg', '01/09/2020', '02/09/2020', 'grstfkih', 'document.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id` int(11) NOT NULL,
  `nomor_surat` varchar(255) COLLATE utf8_bin NOT NULL,
  `tanggal_surat` varchar(10) COLLATE utf8_bin NOT NULL,
  `nama` varchar(255) COLLATE utf8_bin NOT NULL,
  `tujuan` varchar(255) COLLATE utf8_bin NOT NULL,
  `perihal` varchar(111) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `nomor_surat`, `tanggal_surat`, `nama`, `tujuan`, `perihal`) VALUES
(1, '23', '02/09/2020', 'nama', 'tfyhj', 'tyfuil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id` int(11) NOT NULL,
  `nomor_agenda` varchar(20) COLLATE utf8_bin NOT NULL,
  `nomor_surat` varchar(20) COLLATE utf8_bin NOT NULL,
  `tanggal_surat` varchar(10) COLLATE utf8_bin NOT NULL,
  `tanggal_terima` varchar(10) COLLATE utf8_bin NOT NULL,
  `sumber` varchar(50) COLLATE utf8_bin NOT NULL,
  `perihal` varchar(50) COLLATE utf8_bin NOT NULL,
  `keterangan` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `nomor_agenda`, `nomor_surat`, `tanggal_surat`, `tanggal_terima`, `sumber`, `perihal`, `keterangan`) VALUES
(2, '3', '2', '03/09/2020', '04/09/2020', '1', '1', '2'),
(3, '3456', '3467', '01/09/2020', '02/09/2020', 'wt5ti', '6ut8y', 'e6rit'),
(4, '', '', '', '', '', '', 'wfwf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_masalah`
--

CREATE TABLE `tb_masalah` (
  `id` int(11) NOT NULL,
  `kode` varchar(2) COLLATE utf8_bin NOT NULL,
  `masalah` varchar(255) COLLATE utf8_bin NOT NULL,
  `sub_masalah` varchar(255) COLLATE utf8_bin NOT NULL,
  `jenis` varchar(255) COLLATE utf8_bin NOT NULL,
  `awal` varchar(10) COLLATE utf8_bin NOT NULL,
  `akhir` varchar(10) COLLATE utf8_bin NOT NULL,
  `aktif` int(1) NOT NULL,
  `inaktif` int(1) NOT NULL,
  `tmr` varchar(4) COLLATE utf8_bin NOT NULL,
  `thm` varchar(4) COLLATE utf8_bin NOT NULL,
  `gedung` varchar(3) COLLATE utf8_bin NOT NULL,
  `lt` varchar(2) COLLATE utf8_bin NOT NULL,
  `ruang` varchar(7) COLLATE utf8_bin NOT NULL,
  `sarana` varchar(3) COLLATE utf8_bin NOT NULL,
  `no` int(2) NOT NULL,
  `kolom` varchar(2) COLLATE utf8_bin NOT NULL,
  `baris` varchar(2) COLLATE utf8_bin NOT NULL,
  `kotak` varchar(4) COLLATE utf8_bin NOT NULL,
  `media` varchar(3) COLLATE utf8_bin NOT NULL,
  `status` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `tb_masalah`
--

INSERT INTO `tb_masalah` (`id`, `kode`, `masalah`, `sub_masalah`, `jenis`, `awal`, `akhir`, `aktif`, `inaktif`, `tmr`, `thm`, `gedung`, `lt`, `ruang`, `sarana`, `no`, `kolom`, `baris`, `kotak`, `media`, `status`) VALUES
(9, 'LG', 'LOGISTIK', 'PERLENGKAPAN KANTOR', 'RAHASIA', '2010', '2014', 2, 2, '2010', '2014', 'PMD', 'B2', 'PFA/AMW', 'R09', 2, 'KA', 'CD', 'BD66', 'HP', 'DIMUTASI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(7, 'abc', '$2y$10$FKi1lDY3WAxsAahnRXxD2eFLxfhMPqKCQ6ippLpICp4Fr.3LChDKG'),
(8, 'admin', '$2y$10$hgV/g4IqQLGcHeWV0HWOkeGMzn.Rwj4uQkL0/SyDG/VRnLB5Yo/SO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_masalah`
--
ALTER TABLE `tb_masalah`
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
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_masalah`
--
ALTER TABLE `tb_masalah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
