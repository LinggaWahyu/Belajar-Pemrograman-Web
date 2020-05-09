-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Apr 2020 pada 06.37
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `kd_agama` int(11) NOT NULL,
  `nama_agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cita-cita`
--

CREATE TABLE `cita-cita` (
  `kd_cita_cita` int(11) NOT NULL,
  `nama_cita_cita` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir_pendaftaran`
--

CREATE TABLE `formulir_pendaftaran` (
  `id_formulir` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `NISM` varchar(50) NOT NULL,
  `NPSN` varchar(50) NOT NULL,
  `status_siswa` varchar(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `NSM` varchar(50) NOT NULL,
  `NISN` varchar(50) NOT NULL,
  `NIK` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kd_jk` int(11) NOT NULL,
  `kd_agama` int(11) NOT NULL,
  `kd_hobi` int(11) NOT NULL,
  `kd_cita_cita` int(11) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `jumlah_saudara` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `kd_tingkat_kelas` int(11) NOT NULL,
  `kd_kelas_paralel` int(11) NOT NULL,
  `id_jenis_asal_sekolah` int(11) NOT NULL,
  `NPSN_sekolah_asal` varchar(50) NOT NULL,
  `nama_sekolah_asal` varchar(50) NOT NULL,
  `alamat_sekolah_asal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hobi`
--

CREATE TABLE `hobi` (
  `kd_hobi` int(11) NOT NULL,
  `nama_hobi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_asal_sekolah`
--

CREATE TABLE `jenis_asal_sekolah` (
  `id_jenis_asal_sekolah` int(11) NOT NULL,
  `kd_jenis_asal_sekolah` int(11) NOT NULL,
  `id_jenjang` int(11) NOT NULL,
  `nama_asal_sekolah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `kd_jk` int(11) NOT NULL,
  `nama_jk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenjang_sekolah`
--

CREATE TABLE `jenjang_sekolah` (
  `id_jenjang` int(11) NOT NULL,
  `nama_jenjang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_paralel`
--

CREATE TABLE `kelas_paralel` (
  `kd_kelas_paralel` int(11) NOT NULL,
  `nama_kelas_paralel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tingkat_kelas`
--

CREATE TABLE `tingkat_kelas` (
  `kd_tingkat_kelas` int(11) NOT NULL,
  `nama_tingkat_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`kd_agama`);

--
-- Indeks untuk tabel `cita-cita`
--
ALTER TABLE `cita-cita`
  ADD PRIMARY KEY (`kd_cita_cita`);

--
-- Indeks untuk tabel `formulir_pendaftaran`
--
ALTER TABLE `formulir_pendaftaran`
  ADD PRIMARY KEY (`id_formulir`),
  ADD KEY `fk_siswa` (`id_siswa`),
  ADD KEY `fk_jk` (`kd_jk`),
  ADD KEY `fk_agama` (`kd_agama`),
  ADD KEY `fk_hobi` (`kd_hobi`),
  ADD KEY `fk_tingkat_kelas` (`kd_tingkat_kelas`),
  ADD KEY `fk_kelas_paralel` (`kd_kelas_paralel`),
  ADD KEY `fk_jenis_sekolah_asal` (`id_jenis_asal_sekolah`),
  ADD KEY `fk_cita_cita` (`kd_cita_cita`);

--
-- Indeks untuk tabel `hobi`
--
ALTER TABLE `hobi`
  ADD PRIMARY KEY (`kd_hobi`);

--
-- Indeks untuk tabel `jenis_asal_sekolah`
--
ALTER TABLE `jenis_asal_sekolah`
  ADD PRIMARY KEY (`id_jenis_asal_sekolah`),
  ADD KEY `fk_jenjang` (`id_jenjang`);

--
-- Indeks untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`kd_jk`);

--
-- Indeks untuk tabel `jenjang_sekolah`
--
ALTER TABLE `jenjang_sekolah`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indeks untuk tabel `kelas_paralel`
--
ALTER TABLE `kelas_paralel`
  ADD PRIMARY KEY (`kd_kelas_paralel`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tingkat_kelas`
--
ALTER TABLE `tingkat_kelas`
  ADD PRIMARY KEY (`kd_tingkat_kelas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `formulir_pendaftaran`
--
ALTER TABLE `formulir_pendaftaran`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_asal_sekolah`
--
ALTER TABLE `jenis_asal_sekolah`
  MODIFY `id_jenis_asal_sekolah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `formulir_pendaftaran`
--
ALTER TABLE `formulir_pendaftaran`
  ADD CONSTRAINT `fk_agama` FOREIGN KEY (`kd_agama`) REFERENCES `agama` (`kd_agama`),
  ADD CONSTRAINT `fk_cita_cita` FOREIGN KEY (`kd_cita_cita`) REFERENCES `cita-cita` (`kd_cita_cita`),
  ADD CONSTRAINT `fk_hobi` FOREIGN KEY (`kd_hobi`) REFERENCES `hobi` (`kd_hobi`),
  ADD CONSTRAINT `fk_jenis_sekolah_asal` FOREIGN KEY (`id_jenis_asal_sekolah`) REFERENCES `jenis_asal_sekolah` (`id_jenis_asal_sekolah`),
  ADD CONSTRAINT `fk_jk` FOREIGN KEY (`kd_jk`) REFERENCES `jenis_kelamin` (`kd_jk`),
  ADD CONSTRAINT `fk_kelas_paralel` FOREIGN KEY (`kd_kelas_paralel`) REFERENCES `kelas_paralel` (`kd_kelas_paralel`),
  ADD CONSTRAINT `fk_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`),
  ADD CONSTRAINT `fk_tingkat_kelas` FOREIGN KEY (`kd_tingkat_kelas`) REFERENCES `tingkat_kelas` (`kd_tingkat_kelas`);

--
-- Ketidakleluasaan untuk tabel `jenis_asal_sekolah`
--
ALTER TABLE `jenis_asal_sekolah`
  ADD CONSTRAINT `fk_jenjang` FOREIGN KEY (`id_jenjang`) REFERENCES `jenjang_sekolah` (`id_jenjang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
