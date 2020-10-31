-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2020 pada 16.57
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp_oktavia_17`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nik_pegawai` varchar(15) NOT NULL,
  `nm_pegawai` varchar(25) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `stts_kerja` enum('aktif','keluar') NOT NULL,
  `jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tmp_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `rt` varchar(2) NOT NULL,
  `rw` varchar(2) NOT NULL,
  `desa` varchar(10) NOT NULL,
  `kecamatan` varchar(10) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting_app`
--

CREATE TABLE `setting_app` (
  `id` int(3) NOT NULL,
  `nama_app` varchar(13) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_a`
--

CREATE TABLE `surat_a` (
  `id_permohonan` varchar(25) NOT NULL,
  `nik_permohonan` varchar(15) NOT NULL,
  `waktu_permohonan` datetime NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `tgl_disetujui` datetime NOT NULL,
  `jns_surat` enum('domisili','belum nikah') NOT NULL,
  `last_update` datetime NOT NULL,
  `status` enum('pengajuan','menunggu','disetujui','tolak') NOT NULL,
  `nik` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_penghasilan`
--

CREATE TABLE `surat_penghasilan` (
  `id_permohonan` varchar(25) NOT NULL,
  `nik_pemohon` varchar(15) NOT NULL,
  `waktu_permohonan` datetime NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `tgl_disetujui` datetime NOT NULL,
  `nama_anak` varchar(30) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `penghasilan` varchar(10) NOT NULL,
  `last_update` datetime NOT NULL,
  `keterangan` text NOT NULL,
  `status` enum('pengajuan','menunggu','disetujui','tolak') NOT NULL,
  `nik` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_app`
--

CREATE TABLE `user_app` (
  `username` varchar(25) NOT NULL,
  `nik_pegawai` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_pegawai` int(2) NOT NULL,
  `role_pengajuan` int(2) NOT NULL,
  `role_penduduk` int(2) NOT NULL,
  `role_user` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nik_pegawai`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `surat_a`
--
ALTER TABLE `surat_a`
  ADD PRIMARY KEY (`id_permohonan`);

--
-- Indeks untuk tabel `user_app`
--
ALTER TABLE `user_app`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
