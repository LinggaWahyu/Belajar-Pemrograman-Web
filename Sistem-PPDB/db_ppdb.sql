-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 29 Apr 2020 pada 15.11
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
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(1, 'linggawahyurochim@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `kd_agama` int(11) NOT NULL,
  `nama_agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`kd_agama`, `nama_agama`) VALUES
(1, 'Islam'),
(2, 'Kristen Protestan'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Buddha'),
(6, 'Kong Hu Cu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cita-cita`
--

CREATE TABLE `cita-cita` (
  `kd_cita_cita` int(11) NOT NULL,
  `nama_cita_cita` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cita-cita`
--

INSERT INTO `cita-cita` (`kd_cita_cita`, `nama_cita_cita`) VALUES
(0, 'Lainnya'),
(1, 'PNS'),
(2, 'TNI/Polri'),
(3, 'Guru/Dosen'),
(4, 'Dokter'),
(5, 'Politikus'),
(6, 'Wiraswasta'),
(7, 'Seniman/Artis'),
(8, 'Ilmuwan'),
(9, 'Agamawan');

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
  `kd_tingkat_kelas` varchar(11) NOT NULL,
  `kd_kelas_paralel` int(11) NOT NULL,
  `id_jenis_asal_sekolah` int(11) NOT NULL,
  `NPSN_sekolah_asal` varchar(50) NOT NULL,
  `nama_sekolah_asal` varchar(50) NOT NULL,
  `alamat_sekolah_asal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `formulir_pendaftaran`
--

INSERT INTO `formulir_pendaftaran` (`id_formulir`, `id_siswa`, `NISM`, `NPSN`, `status_siswa`, `nama_siswa`, `NSM`, `NISN`, `NIK`, `tempat_lahir`, `tanggal_lahir`, `kd_jk`, `kd_agama`, `kd_hobi`, `kd_cita_cita`, `anak_ke`, `jumlah_saudara`, `tanggal_masuk`, `tahun_ajaran`, `kd_tingkat_kelas`, `kd_kelas_paralel`, `id_jenis_asal_sekolah`, `NPSN_sekolah_asal`, `nama_sekolah_asal`, `alamat_sekolah_asal`) VALUES
(4, 12, '678357269874098271', '12345678', 'Siswa Baru', 'Muhammad Syifa', '123456789101', '9989874561', '3505153919000003', 'Blitar', '2020-05-02', 1, 1, 6, 9, 1, 2, '2020-08-01', '2019-2020', '10', 13, 29, '18709827', 'MTsN Jabung', 'Blitar'),
(6, 2, '874928573918746286', '12345678', 'Siswa Baru', 'Lingga Wahyu Rochim', '123456789101', '999763172097', '3505159219000001', 'Blitar', '2009-03-19', 1, 1, 1, 0, 1, 1, '2020-08-01', '2019-2020', '10', 13, 29, '19389103', 'MTsN Gandusari', 'Blitar'),
(7, 14, '371971048201839371', '12345678', 'Siswa Baru', 'Ahmad Budi', '123456789101', '9990182711', '3505152819220001', 'Jakarta', '1999-02-04', 1, 1, 3, 5, 2, 3, '2020-08-01', '2019-2020', '10', 14, 25, '73928302', 'SMP 2 Jakarta', 'DKI Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hobi`
--

CREATE TABLE `hobi` (
  `kd_hobi` int(11) NOT NULL,
  `nama_hobi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hobi`
--

INSERT INTO `hobi` (`kd_hobi`, `nama_hobi`) VALUES
(1, 'Olahraga'),
(2, 'Kesenian'),
(3, 'Membaca'),
(4, 'Menulis'),
(5, 'Jalan-Jalan'),
(6, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_asal_sekolah`
--

CREATE TABLE `jenis_asal_sekolah` (
  `id_jenis_asal_sekolah` int(11) NOT NULL,
  `kd_jenis_asal_sekolah` int(11) NOT NULL,
  `kd_tingkat_kelas` varchar(11) NOT NULL,
  `nama_asal_sekolah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_asal_sekolah`
--

INSERT INTO `jenis_asal_sekolah` (`id_jenis_asal_sekolah`, `kd_jenis_asal_sekolah`, `kd_tingkat_kelas`, `nama_asal_sekolah`) VALUES
(6, 14, 'A', 'RA'),
(7, 15, 'A', 'TK'),
(8, 16, 'A', 'PAUD'),
(9, 17, 'A', 'Langsung dari Orang Tua'),
(10, 18, 'A', 'Kelompok Bermain'),
(11, 14, 'B', 'RA'),
(12, 15, 'B', 'TK'),
(13, 16, 'B', 'PAUD'),
(14, 17, 'B', 'Langsung dari Orang Tua'),
(15, 18, 'B', 'Kelompok Bermain'),
(16, 1, '1', 'TK'),
(17, 3, '1', 'PAUD'),
(18, 4, '1', 'TKLB'),
(19, 5, '1', 'Langsung dari Orang Tua'),
(20, 2, '7', 'SD'),
(21, 3, '7', 'Paket A'),
(22, 4, '7', 'Pondok Pesantren'),
(23, 5, '7', 'SD Luar Negeri'),
(24, 6, '7', 'Lainnya'),
(25, 2, '10', 'SMP'),
(26, 3, '10', 'Paket B'),
(27, 4, '10', 'Pondok Pesantren'),
(28, 5, '10', 'SMP Luar Negeri'),
(29, 6, '10', 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `kd_jk` int(11) NOT NULL,
  `nama_jk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`kd_jk`, `nama_jk`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_paralel`
--

CREATE TABLE `kelas_paralel` (
  `kd_kelas_paralel` int(11) NOT NULL,
  `nama_kelas_paralel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas_paralel`
--

INSERT INTO `kelas_paralel` (`kd_kelas_paralel`, `nama_kelas_paralel`) VALUES
(1, 'A-A'),
(2, 'A-B'),
(3, 'A-C'),
(4, 'B-A'),
(5, 'B-B'),
(6, 'B-C'),
(7, '1-A'),
(8, '1-B'),
(9, '1-C'),
(10, '7-A'),
(11, '7-B'),
(12, '7-C'),
(13, '10-A'),
(14, '10-B'),
(15, '10-C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status_pendaftaran` varchar(50) NOT NULL,
  `nomor_pendaftaran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_lengkap`, `email`, `password`, `keterangan`, `status_pendaftaran`, `nomor_pendaftaran`) VALUES
(2, 'Lingga Wahyu Rochim', 'linggawahyurochim@gmail.com', '458d0f67bec87022f05530adf3c4c64a', 'Aktif', 'Sudah Mengisi Formulir', 22020983),
(12, 'Muhamad Syifa', 'andapolytron@gmail.com', 'd878c179fbeef70c7ff44efb1b7c6582', 'Aktif', 'Sudah Mengisi Formulir', 122020582),
(14, 'Ahmad Budi', '18650055@student.uin-malang.ac.id', 'ceb796f3b3865efe7ab0c0d3e61c8d3f', 'Aktif', 'Sudah Mengisi Formulir', 142020305);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tingkat_kelas`
--

CREATE TABLE `tingkat_kelas` (
  `kd_tingkat_kelas` varchar(11) NOT NULL,
  `nama_tingkat_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tingkat_kelas`
--

INSERT INTO `tingkat_kelas` (`kd_tingkat_kelas`, `nama_tingkat_kelas`) VALUES
('1', 'MI'),
('10', 'MA'),
('7', 'MTs'),
('A', 'RA A'),
('B', 'RA B');

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
  ADD KEY `fk_kelas_paralel` (`kd_kelas_paralel`),
  ADD KEY `fk_jenis_sekolah_asal` (`id_jenis_asal_sekolah`),
  ADD KEY `fk_cita_cita` (`kd_cita_cita`),
  ADD KEY `fk_tingkat_kelas` (`kd_tingkat_kelas`);

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
  ADD KEY `fk_jenjang` (`kd_tingkat_kelas`);

--
-- Indeks untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`kd_jk`);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `formulir_pendaftaran`
--
ALTER TABLE `formulir_pendaftaran`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jenis_asal_sekolah`
--
ALTER TABLE `jenis_asal_sekolah`
  MODIFY `id_jenis_asal_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  ADD CONSTRAINT `fk_jenjang` FOREIGN KEY (`kd_tingkat_kelas`) REFERENCES `tingkat_kelas` (`kd_tingkat_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
