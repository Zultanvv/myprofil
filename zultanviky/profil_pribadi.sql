-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2023 pada 07.48
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `email`, `komentar`) VALUES
(27, 'MOH AUFAL KHOLQI', 'aufalkhlq1@gmail.com', 'aaa'),
(28, 'MOH AUFAL KHOLQI', 'aufalkhlq1@gmail.com', 'aaa'),
(29, 'MOH AUFAL KHOLQI', 'aufalkhlq1@gmail.com', 'aaa'),
(31, 'MOH AUFAL KHOLQI', 'ahmadficky9@gmail.com', '123'),
(33, 'Moh Aufal Kholqi', 'admin@mail.com', 'q'),
(34, 'MOH AUFAL KHOLQI', 'aufalkhlq1@gmail.com', 'aa'),
(35, 'MOH AUFAL KHOLQI', 'aufalkhlq1@gmail.com', 'aa'),
(36, 'MOH AUFAL KHOLQI', 'aufalkhlq1@gmail.com', 'aa'),
(37, 'MOH AUFAL KHOLQI', 'aufalkhlq1@gmail.com', 'aa'),
(38, 'z', 'admin@gmail.com', 'a'),
(46, 'MOH AUFAL KHOLQI', 'ahmadficky9@gmail.com', 'ABD'),
(47, 'Moh Aufal Kholqi', 'ahmadaufal@gmail.com', 'z'),
(48, 'Moh Aufal Kholqi', 'ahmadaufal@gmail.com', 'z'),
(49, 'MOH AUFAL KHOLQI', 'aufalkhlq1@gmail.com', 'abc'),
(50, 'MOH AUFAL KHOLQI', 'ahmadaufal@gmail.com', 'aa'),
(51, 'Moh Aufal Kholqi', 'admin@gmail.com', 'a'),
(52, 'aufal', 'admin@gmail.com', 'a8797787'),
(53, 'aufal', 'admin@gmail.com', 'a'),
(54, 'aufal', 'admin@gmail.com', 'a');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
