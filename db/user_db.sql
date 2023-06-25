-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2023 pada 12.47
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `bpom` char(30) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `serving` varchar(20) DEFAULT NULL,
  `energy` varchar(20) DEFAULT NULL,
  `lemak` varchar(20) DEFAULT NULL,
  `lemakjenuh` varchar(20) DEFAULT NULL,
  `protein` varchar(20) DEFAULT NULL,
  `karbo` varchar(20) DEFAULT NULL,
  `gula` varchar(20) DEFAULT NULL,
  `garam` varchar(20) DEFAULT NULL,
  `caffeine` int(2) DEFAULT NULL,
  `seafood` int(2) DEFAULT NULL,
  `dairy` int(2) DEFAULT NULL,
  `egg` int(2) DEFAULT NULL,
  `peanut` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `caffeine` int(2) NOT NULL,
  `seafood` int(2) NOT NULL,
  `dairy` int(2) NOT NULL,
  `egg` int(2) NOT NULL,
  `peanut` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `caffeine`, `seafood`, `dairy`, `egg`, `peanut`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, 1, 1, 1, 1),
(2, 'testing', 'testing@gmail.com', 'ae2b1fca515949e5d54fb22b8ed95575', 0, 0, 0, 0, 0),
(5, 'a', 'a@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 1, 0, 1, 0, 0),
(7, 'b', 'b@gmail.com', '92eb5ffee6ae2fec3ad71c777531578f', 1, 0, 0, 0, 0),
(8, 'c', 'c@gmail.com', '4a8a08f09d37b73795649038408b5f33', 0, 1, 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`bpom`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
