-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Sep 2021 pada 19.22
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `countries`
--

CREATE TABLE `countries` (
  `id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
('ACEH', 'ACEH', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('SUMATERA UTARA', 'SUMATERA UTARA', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('SUMATERA BARAT', 'SUMATERA BARAT', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('	\r\nRIAU', '	\r\nRIAU', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('	\r\nJAMBI', '	\r\nJAMBI', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('SUMATERA SELATAN', 'SUMATERA SELATAN', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('BENGKULU', 'BENGKULU', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('LAMPUNG', 'LAMPUNG', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('KEPULAUAN BANGKA BELITUNG', 'KEPULAUAN BANGKA BELITUNG', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('KEPULAUAN RIAU', 'KEPULAUAN RIAU', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('DKI JAKARTA', 'DKI JAKARTA', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('JAWA BARAT', 'JAWA BARAT', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('JAWA TENGAH', 'JAWA TENGAH', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('DAERAH ISTIMEWA YOGYAKARTA', 'DAERAH ISTIMEWA YOGYAKARTA', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('JAWA TIMUR', 'JAWA TIMUR', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('BANTEN', 'BANTEN', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('BALI', 'BALI', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('NUSA TENGGARA BARAT', 'NUSA TENGGARA BARAT', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('NUSA TENGGARA TIMUR', 'NUSA TENGGARA TIMUR', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('KALIMANTAN BARAT', 'KALIMANTAN BARAT', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('KALIMANTAN TENGAH', 'KALIMANTAN TENGAH', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('KALIMANTAN SELATAN', 'KALIMANTAN SELATAN', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('KALIMANTAN TIMUR', 'KALIMANTAN TIMUR', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('KALIMANTAN UTARA', 'KALIMANTAN UTARA', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('SULAWESI UTARA', 'SULAWESI UTARA', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('SULAWESI TENGAH', 'SULAWESI TENGAH', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('SULAWESI SELATAN', 'SULAWESI SELATAN', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('SULAWESI TENGGARA', 'SULAWESI TENGGARA', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('GORONTALO', 'GORONTALO', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('SULAWESI BARAT', 'SULAWESI BARAT', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('MALUKU', 'MALUKU', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('MALUKU UTARA', 'MALUKU UTARA', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('PAPUA', 'PAPUA', '2021-09-21 14:28:17', '0000-00-00 00:00:00'),
('PAPUA BARAT', 'PAPUA BARAT', '2021-09-21 14:28:17', '0000-00-00 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;