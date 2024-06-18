-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2024 pada 11.28
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartfarm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `idUser` int(11) NOT NULL,
  `nama` varchar(127) NOT NULL,
  `username` varchar(127) NOT NULL,
  `password` varchar(127) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`idUser`, `nama`, `username`, `password`) VALUES
(1, 'Arya', 'bengkok', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `controlling`
--

CREATE TABLE `controlling` (
  `idTanaman` int(11) NOT NULL,
  `namaTanaman` varchar(127) NOT NULL,
  `namaIOT` varchar(127) NOT NULL,
  `pmNutrisi` int(11) NOT NULL,
  `pmPh` int(11) NOT NULL,
  `pmSuhu` int(11) NOT NULL,
  `Nutrisi` int(11) NOT NULL,
  `Ph` int(11) NOT NULL,
  `Suhu` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `controlling`
--

INSERT INTO `controlling` (`idTanaman`, `namaTanaman`, `namaIOT`, `pmNutrisi`, `pmPh`, `pmSuhu`, `Nutrisi`, `Ph`, `Suhu`, `idUser`) VALUES
(1, 'Kopi', '', 1100, 4, 22, 1300, 5, 27, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mesin`
--

CREATE TABLE `mesin` (
  `idMesin` int(11) NOT NULL,
  `NamaIOT` varchar(127) NOT NULL,
  `Nutrisi` int(11) NOT NULL,
  `Ph` int(11) NOT NULL,
  `Suhu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mesin`
--

INSERT INTO `mesin` (`idMesin`, `NamaIOT`, `Nutrisi`, `Ph`, `Suhu`) VALUES
(1, 'Mesin_1', 1300, 5, 27),
(2, 'Mesin_2', 2200, 7, 22);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`idUser`);

--
-- Indeks untuk tabel `controlling`
--
ALTER TABLE `controlling`
  ADD PRIMARY KEY (`idTanaman`);

--
-- Indeks untuk tabel `mesin`
--
ALTER TABLE `mesin`
  ADD PRIMARY KEY (`idMesin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `controlling`
--
ALTER TABLE `controlling`
  MODIFY `idTanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mesin`
--
ALTER TABLE `mesin`
  MODIFY `idMesin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
