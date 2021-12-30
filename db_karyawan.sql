-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2021 pada 05.50
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_karyawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `urutan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `urutan`) VALUES
(1, 'Manager', 3),
(2, 'Supervisor', 1),
(4, 'Staff', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `status` enum('AKTIF','TIDAK AKTIF') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `id_jabatan`, `id_unit`, `status`) VALUES
(5, 'Lilipaly', 'New York', '2021-12-30', 'Laki-Laki', 'Teluk Jambe', 1, 2, 'AKTIF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id_unit` int(11) NOT NULL,
  `nama_unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit_kerja`
--

INSERT INTO `unit_kerja` (`id_unit`, `nama_unit`) VALUES
(1, 'Divisi SDM'),
(2, 'Divisi IT');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_jabatan` (`id_jabatan`,`id_unit`),
  ADD KEY `id_unit` (`id_unit`);

--
-- Indeks untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id_unit`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_unit`) REFERENCES `unit_kerja` (`id_unit`),
  ADD CONSTRAINT `karyawan_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
