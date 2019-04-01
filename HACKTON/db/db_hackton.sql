-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Mar 2019 pada 17.28
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hackton`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `kode_bank` varchar(255) NOT NULL,
  `Nama_bank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`kode_bank`, `Nama_bank`) VALUES
('002', 'BANK BRI'),
('003', 'BANK BUDI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datainvestor`
--

CREATE TABLE `datainvestor` (
  `id` int(5) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `no_hp` varchar(14) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `kode_bank` varchar(255) NOT NULL,
  `cabang` varchar(255) NOT NULL,
  `no_rekening` varchar(255) NOT NULL,
  `pemilik` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `npwp` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datainvestor`
--

INSERT INTO `datainvestor` (`id`, `nama_lengkap`, `email`, `password`, `no_hp`, `level`, `kode_bank`, `cabang`, `no_rekening`, `pemilik`, `ktp`, `npwp`, `status`) VALUES
(1, '1', '1', '1', '1', 'investor', 'data', '', '', '', '', '', ''),
(2, '2', '2', '2', '2', 'investor', 'data', '', '', '', '', '', ''),
(3, 'Mohammad', '123', '123', '123', 'investor', 'bank', '', '', '', '', '', ''),
(4, '', '', '', '', 'investor', 'data', '', '', '', '', '', ''),
(5, '', '', '', '', 'investor', 'data', '', '', '', '', '', ''),
(6, '112', '112', '112', '112', 'investor', 'data', '', '', '', '', '', ''),
(7, '1', '1', '1', '1', 'investor', 'data', '', '', '', '', '', ''),
(8, '1', '1', '1', '1', 'investor', 'data', '', '', '', '', '', ''),
(9, '', '', '', '', 'investor', 'data', '', '', '', '', '', ''),
(10, '123', '123', '123', '123', 'investor', '', '', '', '', '', '', ''),
(11, '123qw', '12312', '12312', '12312', 'investor', '002', '', '', '', '', '', ''),
(12, 'qwdasda', 'qq', 'qq', '12', 'investor', '003', '', '', '', '', '', ''),
(13, 'qqqqq', 'qqqqqqq', 'qqqqqqqq', 'qqqqqqqqq', 'investor', '002', 'Jember', '82349', '893', '', '', ''),
(14, '121212', '1212121', '121212', '121212', 'investor', '', '', '', 'froyo_circle.png', 'FDkvZjA.png', 'FDkvZjA.png', 'unapproved'),
(15, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', ''),
(16, '121312', '12222', '12222', '082284228132', 'investor', '002', 'Jember', '1212121', '893', 'FDkvZjA.png', 'FDkvZjA.png', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `umkm`
--

CREATE TABLE `umkm` (
  `ID` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alamat_lengkap` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(4) NOT NULL,
  `sektor` enum('pertanian','pendidikan','ind_rumah','jasa','fashion','peternakan') NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description` text NOT NULL,
  `dana` int(11) NOT NULL,
  `keuntungan` int(11) NOT NULL,
  `jw` int(11) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `umkm`
--

INSERT INTO `umkm` (`ID`, `name`, `alamat_lengkap`, `email`, `no_hp`, `password`, `level`, `sektor`, `image`, `description`, `dana`, `keuntungan`, `jw`, `grade`) VALUES
(1, 'khadafi', 'Banyuwangi', '', '', '', '', 'pertanian', '1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 0, 0, 0, 0),
(2, '22s', 'Serono, Banyuwangi', '', '', '', '', 'pendidikan', '2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 0, 0, 0, 0),
(3, 'wqe', 'Glagah, Banyuwangi', '', '', '', '', 'jasa', '3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 0, 0, 0, 0),
(4, 'sdfdsf', 'Licin, Banyuwangi', '', '', '', '', 'fashion', '4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 0, 0, 0, 0),
(5, 'sadasd', 'Cleluring, Banyuwangi', '', '', '', '', 'pendidikan', '5', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 10000000, 1000000, 50, 65);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`kode_bank`);

--
-- Indeks untuk tabel `datainvestor`
--
ALTER TABLE `datainvestor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datainvestor`
--
ALTER TABLE `datainvestor`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `umkm`
--
ALTER TABLE `umkm`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
