-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2023 pada 07.31
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekpwl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'wpu123', 1, 0, 0, NULL, 1),
(2, 2, 'dosen123', 2, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `limits`
--

CREATE TABLE `limits` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `count` int(10) NOT NULL,
  `hour_started` int(11) NOT NULL,
  `api_key` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `limits`
--

INSERT INTO `limits` (`id`, `uri`, `count`, `hour_started`, `api_key`) VALUES
(1, 'uri:api/mahasiswa/index:get', 1, 1576492483, 'wpu123'),
(2, 'uri:api/dosen/index:get', 2, 1576490527, 'wpu123'),
(3, 'uri:api/dosen/index:get', 1, 1576495810, 'dosen123'),
(4, 'uri:api/petcare/petcare:get', 5, 1576658961, 'wpu123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petcare`
--

CREATE TABLE `petcare` (
  `id` int(11) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `nama_hewan` varchar(50) NOT NULL,
  `jenis_hewan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `bayar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petcare`
--

INSERT INTO `petcare` (`id`, `nama_pemilik`, `nama_hewan`, `jenis_hewan`, `alamat`, `telepon`, `harga`, `jumlah_hari`, `bayar`) VALUES
(103, 'Soneo', 'oren', 'Kucing Persia', 'Jl.Sigura gura No.12', '087657857', '20000', 5, '100000'),
(106, 'Lili', 'Dora', 'Kelinci', 'Jln.Suhat No.90', '0898765778', '15000', 6, '90000'),
(109, 'Spongebob', 'Planktont', 'Anjing Buldog', 'Jalan kepten Tendean', '08976465335', '25000', 4, '100000'),
(110, 'Sandy', 'Coco', 'Kucing Persia', 'Jalan Semanggi Barat', '08976467', '20000', 3, '60000'),
(113, 'dela', 'ulul', 'Kucing Persia', 'Jalan Jakarta', '0897545664', '25000', 2, '50000'),
(114, 'putri', 'riri', 'Kucing Anggora', 'Jalan Surakarta', '0865457734', '25000', 3, '75000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '12345', 'admin'),
(2, 'user', 'user1', 'user'),
(19, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userclient`
--

CREATE TABLE `userclient` (
  `id_regis` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `limits`
--
ALTER TABLE `limits`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petcare`
--
ALTER TABLE `petcare`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `userclient`
--
ALTER TABLE `userclient`
  ADD PRIMARY KEY (`id_regis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `limits`
--
ALTER TABLE `limits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `petcare`
--
ALTER TABLE `petcare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `userclient`
--
ALTER TABLE `userclient`
  MODIFY `id_regis` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
