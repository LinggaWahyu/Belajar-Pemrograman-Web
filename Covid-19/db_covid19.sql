-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 05 Apr 2020 pada 17.22
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
-- Database: `db_covid19`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `idgejala` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nmgejala` text NOT NULL,
  `keterangan` text NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`idgejala`, `kode`, `nmgejala`, `keterangan`, `jenis`) VALUES
(1, 'G1', 'Demam', 'Riwayat Demam < 2 minggu', 'Gejala'),
(2, 'G2', 'Batuk', 'Nyeri Tenggorokan < 2 minggu', 'Gejala'),
(3, 'G3', 'Pilek', 'Nyeri Tenggorokan < 2 minggu', 'Gejala'),
(4, 'G4', 'Sesak Nafas', '-', 'Gejala'),
(5, 'G5', 'Letih Lesu', '-', 'Gejala'),
(6, 'R1', 'Pernah muncul gejala sekitar 14 hari setelah travelling ke luar negeri atau ke kota terjangkit? ', 'China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA, Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll.', 'Resiko'),
(7, 'R2', 'Pernah memberikan perawatan atau melakukan kontak dekat dengan seseorang dengan COVID-19 (kemungkinan atau dikonfirmasi) saat mereka sakit (batuk, demam, bersin, atau sakit tenggorokan)', '-', 'Resiko'),
(8, 'G6', 'Pusing', '', 'Gejala'),
(9, 'G7', 'Mual', '', 'Gejala');

-- --------------------------------------------------------

--
-- Struktur dari tabel `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `statusCode` varchar(50) NOT NULL,
  `name` varchar(60) NOT NULL,
  `addres` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `markers`
--

INSERT INTO `markers` (`id`, `statusCode`, `name`, `addres`, `lat`, `lng`, `type`) VALUES
(7, 'OK', 'Surabaya, Indonesia', '114.125.81.90', -7.248400, 112.741898, 'ODP'),
(8, 'OK', 'Surabaya, Indonesia', '114.125.81.90', -7.248400, 112.741898, 'PDP'),
(9, 'OK', 'Surabaya, Indonesia', '114.125.81.90', -7.248400, 112.741898, 'ODR'),
(10, 'OK', 'Surabaya, Indonesia', '114.125.81.90', -7.248400, 112.741898, 'Positif'),
(11, 'OK', 'Surabaya, Indonesia', '114.125.81.90', -7.248400, 112.741898, 'Negatif'),
(12, 'OK', 'Surabaya, Indonesia', '114.125.81.90', -7.248400, 112.741898, 'ODP'),
(13, 'OK', 'Surabaya, Indonesia', '114.125.81.90', -7.248400, 112.741898, 'ODP'),
(14, 'OK', 'Surabaya, Indonesia', '114.125.81.90', -7.248400, 112.741898, 'Positif'),
(15, 'OK', 'Gresik, Indonesia', '36.74.200.83', -7.153900, 112.656097, 'PDP'),
(16, 'OK', 'Gresik, Indonesia', '36.74.200.83', -7.153900, 112.656097, 'ODP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ngetest`
--

CREATE TABLE `ngetest` (
  `idtest` int(11) NOT NULL,
  `idpasien` int(11) NOT NULL,
  `idgejala` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jawab` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ngetest`
--

INSERT INTO `ngetest` (`idtest`, `idpasien`, `idgejala`, `waktu`, `jawab`, `ket`) VALUES
(26, 4, 1, '2020-04-05 07:48:07', 'Tidak', ''),
(27, 4, 2, '2020-04-05 07:48:07', 'Ya', ''),
(28, 4, 3, '2020-04-05 07:48:07', 'Ya', ''),
(29, 4, 4, '2020-04-05 07:48:07', 'Tidak', ''),
(30, 4, 5, '2020-04-05 07:48:07', 'Tidak', ''),
(31, 5, 1, '2020-04-05 08:17:26', 'Ya', ''),
(32, 5, 2, '2020-04-05 08:17:26', 'Tidak', ''),
(33, 5, 3, '2020-04-05 08:17:26', 'Ya', ''),
(34, 5, 4, '2020-04-05 08:17:26', 'Ya', ''),
(35, 5, 5, '2020-04-05 08:17:26', 'Ya', ''),
(36, 5, 6, '2020-04-05 08:17:26', 'Ya', ''),
(37, 5, 7, '2020-04-05 08:17:26', 'Ya', ''),
(38, 6, 1, '2020-04-05 09:05:40', 'Ya', ''),
(39, 6, 2, '2020-04-05 09:05:40', 'Ya', ''),
(40, 6, 3, '2020-04-05 09:05:40', 'Ya', ''),
(41, 6, 4, '2020-04-05 09:05:40', 'Ya', ''),
(42, 6, 5, '2020-04-05 09:05:40', 'Ya', ''),
(43, 6, 6, '2020-04-05 09:05:40', 'Ya', ''),
(44, 6, 7, '2020-04-05 09:05:40', 'Ya', ''),
(45, 6, 1, '2020-04-05 09:06:54', 'Ya', ''),
(46, 6, 2, '2020-04-05 09:06:54', 'Ya', ''),
(47, 6, 3, '2020-04-05 09:06:54', 'Ya', ''),
(48, 6, 4, '2020-04-05 09:06:54', 'Ya', ''),
(49, 6, 5, '2020-04-05 09:06:54', 'Ya', ''),
(50, 6, 6, '2020-04-05 09:06:54', 'Ya', ''),
(51, 6, 7, '2020-04-05 09:06:54', 'Ya', ''),
(52, 6, 1, '2020-04-05 09:07:17', 'Ya', ''),
(53, 6, 2, '2020-04-05 09:07:17', 'Ya', ''),
(54, 6, 3, '2020-04-05 09:07:17', 'Ya', ''),
(55, 6, 4, '2020-04-05 09:07:17', 'Ya', ''),
(56, 6, 5, '2020-04-05 09:07:17', 'Ya', ''),
(57, 6, 6, '2020-04-05 09:07:17', 'Ya', ''),
(58, 6, 7, '2020-04-05 09:07:17', 'Ya', ''),
(59, 6, 1, '2020-04-05 09:07:53', 'Ya', ''),
(60, 6, 2, '2020-04-05 09:07:53', 'Ya', ''),
(61, 6, 3, '2020-04-05 09:07:53', 'Ya', ''),
(62, 6, 4, '2020-04-05 09:07:53', 'Ya', ''),
(63, 6, 5, '2020-04-05 09:07:53', 'Ya', ''),
(64, 6, 6, '2020-04-05 09:07:53', 'Ya', ''),
(65, 6, 7, '2020-04-05 09:07:53', 'Ya', ''),
(66, 6, 1, '2020-04-05 09:08:32', 'Ya', ''),
(67, 6, 2, '2020-04-05 09:08:32', 'Ya', ''),
(68, 6, 3, '2020-04-05 09:08:32', 'Ya', ''),
(69, 6, 4, '2020-04-05 09:08:32', 'Ya', ''),
(70, 6, 5, '2020-04-05 09:08:32', 'Ya', ''),
(71, 6, 6, '2020-04-05 09:08:32', 'Ya', ''),
(72, 6, 7, '2020-04-05 09:08:32', 'Ya', ''),
(73, 6, 1, '2020-04-05 09:10:08', 'Ya', ''),
(74, 6, 2, '2020-04-05 09:10:08', 'Ya', ''),
(75, 6, 3, '2020-04-05 09:10:08', 'Ya', ''),
(76, 6, 4, '2020-04-05 09:10:08', 'Ya', ''),
(77, 6, 5, '2020-04-05 09:10:08', 'Ya', ''),
(78, 6, 6, '2020-04-05 09:10:08', 'Ya', ''),
(79, 6, 7, '2020-04-05 09:10:08', 'Ya', ''),
(80, 6, 1, '2020-04-05 09:10:48', 'Ya', ''),
(81, 6, 2, '2020-04-05 09:10:48', 'Ya', ''),
(82, 6, 3, '2020-04-05 09:10:48', 'Ya', ''),
(83, 6, 4, '2020-04-05 09:10:49', 'Ya', ''),
(84, 6, 5, '2020-04-05 09:10:49', 'Ya', ''),
(85, 6, 6, '2020-04-05 09:10:49', 'Ya', ''),
(86, 6, 7, '2020-04-05 09:10:49', 'Ya', ''),
(87, 7, 1, '2020-04-05 09:21:14', 'Tidak', ''),
(88, 7, 2, '2020-04-05 09:21:14', 'Tidak', ''),
(89, 7, 3, '2020-04-05 09:21:14', 'Tidak', ''),
(90, 7, 4, '2020-04-05 09:21:14', 'Tidak', ''),
(91, 7, 5, '2020-04-05 09:21:14', 'Tidak', ''),
(92, 7, 6, '2020-04-05 09:21:14', 'Tidak', ''),
(93, 7, 7, '2020-04-05 09:21:14', 'Tidak', ''),
(94, 7, 1, '2020-04-05 09:21:39', 'Tidak', ''),
(95, 7, 2, '2020-04-05 09:21:39', 'Tidak', ''),
(96, 7, 3, '2020-04-05 09:21:39', 'Tidak', ''),
(97, 7, 4, '2020-04-05 09:21:39', 'Tidak', ''),
(98, 7, 5, '2020-04-05 09:21:39', 'Tidak', ''),
(99, 7, 6, '2020-04-05 09:21:39', 'Tidak', ''),
(100, 7, 7, '2020-04-05 09:21:39', 'Tidak', ''),
(101, 7, 1, '2020-04-05 09:22:50', 'Tidak', ''),
(102, 7, 2, '2020-04-05 09:22:50', 'Tidak', ''),
(103, 7, 3, '2020-04-05 09:22:50', 'Tidak', ''),
(104, 7, 4, '2020-04-05 09:22:50', 'Tidak', ''),
(105, 7, 5, '2020-04-05 09:22:50', 'Tidak', ''),
(106, 7, 6, '2020-04-05 09:22:50', 'Tidak', ''),
(107, 7, 7, '2020-04-05 09:22:50', 'Tidak', ''),
(108, 7, 1, '2020-04-05 09:22:53', 'Tidak', ''),
(109, 7, 2, '2020-04-05 09:22:53', 'Tidak', ''),
(110, 7, 3, '2020-04-05 09:22:53', 'Tidak', ''),
(111, 7, 4, '2020-04-05 09:22:53', 'Tidak', ''),
(112, 7, 5, '2020-04-05 09:22:53', 'Tidak', ''),
(113, 7, 6, '2020-04-05 09:22:53', 'Tidak', ''),
(114, 7, 7, '2020-04-05 09:22:53', 'Tidak', ''),
(115, 7, 1, '2020-04-05 09:23:02', 'Tidak', ''),
(116, 7, 2, '2020-04-05 09:23:02', 'Tidak', ''),
(117, 7, 3, '2020-04-05 09:23:02', 'Tidak', ''),
(118, 7, 4, '2020-04-05 09:23:02', 'Tidak', ''),
(119, 7, 5, '2020-04-05 09:23:02', 'Tidak', ''),
(120, 7, 6, '2020-04-05 09:23:02', 'Tidak', ''),
(121, 7, 7, '2020-04-05 09:23:02', 'Tidak', ''),
(122, 7, 1, '2020-04-05 09:23:27', 'Ya', ''),
(123, 7, 2, '2020-04-05 09:23:27', 'Ya', ''),
(124, 7, 3, '2020-04-05 09:23:27', 'Tidak', ''),
(125, 7, 4, '2020-04-05 09:23:27', 'Ya', ''),
(126, 7, 5, '2020-04-05 09:23:27', 'Ya', ''),
(127, 7, 6, '2020-04-05 09:23:27', 'Tidak', ''),
(128, 7, 7, '2020-04-05 09:23:27', 'Tidak', ''),
(129, 7, 1, '2020-04-05 09:25:36', 'Ya', ''),
(130, 7, 2, '2020-04-05 09:25:36', 'Ya', ''),
(131, 7, 3, '2020-04-05 09:25:36', 'Tidak', ''),
(132, 7, 4, '2020-04-05 09:25:36', 'Ya', ''),
(133, 7, 5, '2020-04-05 09:25:36', 'Ya', ''),
(134, 7, 6, '2020-04-05 09:25:36', 'Tidak', ''),
(135, 7, 7, '2020-04-05 09:25:36', 'Tidak', ''),
(136, 7, 1, '2020-04-05 09:26:05', 'Ya', ''),
(137, 7, 2, '2020-04-05 09:26:05', 'Ya', ''),
(138, 7, 3, '2020-04-05 09:26:05', 'Tidak', ''),
(139, 7, 4, '2020-04-05 09:26:05', 'Ya', ''),
(140, 7, 5, '2020-04-05 09:26:05', 'Ya', ''),
(141, 7, 6, '2020-04-05 09:26:05', 'Tidak', ''),
(142, 7, 7, '2020-04-05 09:26:05', 'Tidak', ''),
(143, 7, 1, '2020-04-05 09:32:25', 'Ya', ''),
(144, 7, 2, '2020-04-05 09:32:25', 'Ya', ''),
(145, 7, 3, '2020-04-05 09:32:25', 'Ya', ''),
(146, 7, 4, '2020-04-05 09:32:25', 'Ya', ''),
(147, 7, 5, '2020-04-05 09:32:25', 'Ya', ''),
(148, 7, 6, '2020-04-05 09:32:25', 'Ya', ''),
(149, 7, 7, '2020-04-05 09:32:25', 'Ya', ''),
(150, 7, 1, '2020-04-05 09:32:37', 'Ya', ''),
(151, 7, 2, '2020-04-05 09:32:37', 'Ya', ''),
(152, 7, 3, '2020-04-05 09:32:37', 'Ya', ''),
(153, 7, 4, '2020-04-05 09:32:37', 'Ya', ''),
(154, 7, 5, '2020-04-05 09:32:37', 'Ya', ''),
(155, 7, 6, '2020-04-05 09:32:37', 'Ya', ''),
(156, 7, 7, '2020-04-05 09:32:37', 'Ya', ''),
(157, 7, 1, '2020-04-05 09:35:32', 'Ya', ''),
(158, 7, 2, '2020-04-05 09:35:32', 'Tidak', ''),
(159, 7, 3, '2020-04-05 09:35:32', 'Tidak', ''),
(160, 7, 4, '2020-04-05 09:35:32', 'Tidak', ''),
(161, 7, 5, '2020-04-05 09:35:32', 'Ya', ''),
(162, 7, 6, '2020-04-05 09:35:32', 'Tidak', ''),
(163, 7, 7, '2020-04-05 09:35:32', 'Ya', ''),
(164, 7, 1, '2020-04-05 09:52:58', 'Ya', ''),
(165, 7, 2, '2020-04-05 09:52:58', 'Tidak', ''),
(166, 7, 3, '2020-04-05 09:52:58', 'Tidak', ''),
(167, 7, 4, '2020-04-05 09:52:58', 'Tidak', ''),
(168, 7, 5, '2020-04-05 09:52:58', 'Ya', ''),
(169, 7, 6, '2020-04-05 09:52:58', 'Tidak', ''),
(170, 7, 7, '2020-04-05 09:52:58', 'Ya', ''),
(171, 7, 1, '2020-04-05 09:53:15', 'Ya', ''),
(172, 7, 2, '2020-04-05 09:53:15', 'Tidak', ''),
(173, 7, 3, '2020-04-05 09:53:15', 'Tidak', ''),
(174, 7, 4, '2020-04-05 09:53:15', 'Tidak', ''),
(175, 7, 5, '2020-04-05 09:53:15', 'Ya', ''),
(176, 7, 6, '2020-04-05 09:53:15', 'Tidak', ''),
(177, 7, 7, '2020-04-05 09:53:15', 'Ya', ''),
(178, 7, 1, '2020-04-05 09:53:28', 'Ya', ''),
(179, 7, 2, '2020-04-05 09:53:28', 'Ya', ''),
(180, 7, 3, '2020-04-05 09:53:28', 'Ya', ''),
(181, 7, 4, '2020-04-05 09:53:28', 'Ya', ''),
(182, 7, 5, '2020-04-05 09:53:28', 'Ya', ''),
(183, 7, 6, '2020-04-05 09:53:28', 'Ya', ''),
(184, 7, 7, '2020-04-05 09:53:28', 'Ya', ''),
(185, 7, 1, '2020-04-05 09:53:48', 'Tidak', ''),
(186, 7, 2, '2020-04-05 09:53:48', 'Tidak', ''),
(187, 7, 3, '2020-04-05 09:53:48', 'Tidak', ''),
(188, 7, 4, '2020-04-05 09:53:48', 'Tidak', ''),
(189, 7, 5, '2020-04-05 09:53:48', 'Tidak', ''),
(190, 7, 6, '2020-04-05 09:53:48', 'Tidak', ''),
(191, 7, 7, '2020-04-05 09:53:48', 'Tidak', ''),
(192, 7, 1, '2020-04-05 09:54:08', 'Ya', ''),
(193, 7, 2, '2020-04-05 09:54:08', 'Tidak', ''),
(194, 7, 3, '2020-04-05 09:54:08', 'Ya', ''),
(195, 7, 4, '2020-04-05 09:54:08', 'Tidak', ''),
(196, 7, 5, '2020-04-05 09:54:08', 'Ya', ''),
(197, 7, 6, '2020-04-05 09:54:08', 'Tidak', ''),
(198, 7, 7, '2020-04-05 09:54:08', 'Ya', ''),
(199, 7, 1, '2020-04-05 09:54:17', 'Ya', ''),
(200, 7, 2, '2020-04-05 09:54:17', 'Tidak', ''),
(201, 7, 3, '2020-04-05 09:54:17', 'Ya', ''),
(202, 7, 4, '2020-04-05 09:54:17', 'Ya', ''),
(203, 7, 5, '2020-04-05 09:54:17', 'Ya', ''),
(204, 7, 6, '2020-04-05 09:54:17', 'Ya', ''),
(205, 7, 7, '2020-04-05 09:54:17', 'Ya', ''),
(206, 7, 1, '2020-04-05 09:54:26', 'Ya', ''),
(207, 7, 2, '2020-04-05 09:54:26', 'Tidak', ''),
(208, 7, 3, '2020-04-05 09:54:26', 'Tidak', ''),
(209, 7, 4, '2020-04-05 09:54:26', 'Ya', ''),
(210, 7, 5, '2020-04-05 09:54:26', 'Ya', ''),
(211, 7, 6, '2020-04-05 09:54:26', 'Ya', ''),
(212, 7, 7, '2020-04-05 09:54:26', 'Ya', ''),
(213, 7, 1, '2020-04-05 14:01:29', 'Ya', ''),
(214, 7, 2, '2020-04-05 14:01:29', 'Tidak', ''),
(215, 7, 3, '2020-04-05 14:01:29', 'Tidak', ''),
(216, 7, 4, '2020-04-05 14:01:29', 'Ya', ''),
(217, 7, 5, '2020-04-05 14:01:29', 'Ya', ''),
(218, 7, 6, '2020-04-05 14:01:29', 'Ya', ''),
(219, 7, 7, '2020-04-05 14:01:29', 'Ya', ''),
(220, 8, 1, '2020-04-05 14:35:46', 'Ya', ''),
(221, 8, 2, '2020-04-05 14:35:46', 'Ya', ''),
(222, 8, 3, '2020-04-05 14:35:46', 'Ya', ''),
(223, 8, 4, '2020-04-05 14:35:46', 'Ya', ''),
(224, 8, 5, '2020-04-05 14:35:46', 'Ya', ''),
(225, 8, 6, '2020-04-05 14:35:46', 'Ya', ''),
(226, 8, 7, '2020-04-05 14:35:46', 'Ya', ''),
(227, 9, 1, '2020-04-05 14:44:40', 'Ya', ''),
(228, 9, 2, '2020-04-05 14:44:40', 'Tidak', ''),
(229, 9, 3, '2020-04-05 14:44:40', 'Ya', ''),
(230, 9, 4, '2020-04-05 14:44:40', 'Ya', ''),
(231, 9, 5, '2020-04-05 14:44:40', 'Ya', ''),
(232, 9, 6, '2020-04-05 14:44:40', 'Tidak', ''),
(233, 9, 7, '2020-04-05 14:44:40', 'Ya', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `idpasien` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nmpasien` varchar(100) NOT NULL,
  `usia` int(11) NOT NULL,
  `jk` char(5) NOT NULL,
  `tgllahir` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`idpasien`, `id`, `nmpasien`, `usia`, `jk`, `tgllahir`, `telepon`) VALUES
(1, 7, 'Mawar', 15, 'L', '2020-04-02', '081367928637'),
(2, 8, 'Melati', 15, 'P', '2020-04-10', '0867627938949'),
(3, 9, 'Tulip', 15, 'P', '2020-04-11', '081527349000'),
(4, 10, 'Anggrek', 16, 'P', '2020-04-18', '081217453887'),
(5, 11, 'Kamboja', 21, 'P', '2020-04-18', '085655511376'),
(6, 12, 'Bunga', 16, 'P', '2020-04-10', '081217453887'),
(7, 13, 'Sopo', 21, 'L', '2020-04-11', '081527349000'),
(8, 14, 'Siputri', 21, 'P', '2020-04-25', '081217453887'),
(9, 15, 'Damar', 30, 'L', '2020-04-25', '085655511376'),
(10, 16, 'Lucky', 21, 'L', '2020-04-15', '081527349000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`idgejala`);

--
-- Indeks untuk tabel `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ngetest`
--
ALTER TABLE `ngetest`
  ADD PRIMARY KEY (`idtest`),
  ADD KEY `fk_idpasien` (`idpasien`),
  ADD KEY `fk_idgejala` (`idgejala`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idpasien`),
  ADD KEY `fk_id_markers` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `idgejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `ngetest`
--
ALTER TABLE `ngetest`
  MODIFY `idtest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `idpasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ngetest`
--
ALTER TABLE `ngetest`
  ADD CONSTRAINT `fk_idgejala` FOREIGN KEY (`idgejala`) REFERENCES `gejala` (`idgejala`),
  ADD CONSTRAINT `fk_idpasien` FOREIGN KEY (`idpasien`) REFERENCES `pasien` (`idpasien`);

--
-- Ketidakleluasaan untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `fk_id_markers` FOREIGN KEY (`id`) REFERENCES `markers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
