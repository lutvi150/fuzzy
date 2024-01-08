-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 04, 2024 at 08:58 PM
-- Server version: 10.5.23-MariaDB-cll-lve
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teamclov_demo_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_data_balita`
--

CREATE TABLE `table_data_balita` (
  `id_balita` int(11) NOT NULL,
  `nik` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `bb_lahir` double DEFAULT NULL,
  `tb_lahir` double DEFAULT NULL,
  `nama_ortu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usia_saat_ukur` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_pengukuran` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinggi` double DEFAULT NULL,
  `berat` double DEFAULT NULL,
  `status_tinggi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_berat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_gizi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuzzy` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `table_data_balita`
--

INSERT INTO `table_data_balita` (`id_balita`, `nik`, `nama`, `jenis_kelamin`, `tgl_lahir`, `bb_lahir`, `tb_lahir`, `nama_ortu`, `alamat`, `kecamatan`, `usia_saat_ukur`, `tgl_pengukuran`, `tinggi`, `berat`, `status_tinggi`, `status_berat`, `status_gizi`, `fuzzy`) VALUES
(1, '1106505905237850', 'ARCELA ZULFA SHAKAYLA', 'P', '2023-12-11', 3.1, 49, 'ERIKA DIO SANDA', 'BUR BIAH', 'BEBESEN', '0 th, 5 bln, 13 h', '2023-12-11', 64, 6.9, '1', '1', '1', '{\"data\":1}'),
(2, '1106505309211220', 'AISYAH IHZA TAHIRA', 'P', '2023-12-11', 3.2, 48, 'SASTRI RAHMANA', 'ATU TULU', 'BEBESEN', '2 th, 1 bln, 29 h', '2023-12-11', 81, 11, '1', '1', '2', '{\"data\":1}'),
(3, '1104114710199990', 'ALFA AQILA', 'P', '2023-12-11', 2.9, 46, 'ANISA RAMADNI', 'BAHGIE', 'BEBESEN', '4 th, 3 bln, 5 h', '2023-12-11', 92, 13.2, '1', '1', '3', '{\"data\":1}'),
(4, '1171096469899990', 'ARVINO MAUZA', 'L', '2023-12-11', 3.1, 49, 'HUDAINI', 'BEBESEN', 'BEBESEN', '0 th, 5 bln, 13 h', '2023-12-11', 64, 6.9, '1', '1', '1', '{\"data\":1}'),
(5, '110405520699999', 'AZHARI RAHMAT', 'L', '2023-12-11', 3.2, 48, 'MUSFIRA', 'BLANG GELE', 'BEBESEN', '2 th, 1 bln, 29 h', '2023-12-11', 81, 11, '1', '1', '3', '{\"data\":1}'),
(6, '1104031208799990', 'CUT FAZINDA KANZIA', 'P', '2023-12-11', 2.9, 46, 'FAUZI HADIAN', 'BLANG KOLAK I', 'BEBESEN', '4 th, 3 bln, 5 h', '2023-12-11', 92, 13.2, '1', '1', '2', '{\"data\":1}'),
(7, '1104030305190000', 'HABIB RIZKI', 'L', '2023-12-11', 3.1, 49, 'YASMIATI', 'BLANG KOLAK I', 'BEBESEN', '0 th, 5 bln, 13 h', '2023-12-11', 64, 6.9, '1', '1', '3', '{\"data\":1}'),
(8, '11040368011900000', 'KAYLA CHAYANI', 'P', '2023-12-11', 3.2, 48, 'AHMAD ZAILANI', 'BLANG KOLAK II', 'BEBESEN', '2 th, 1 bln, 29 h', '2023-12-11', 81, 11, '1', '1', '3', '{\"data\":1}'),
(9, '1104030200920000', 'KENZO RAHMAN', 'L', '2023-12-11', 2.9, 46, 'IMAM AHMADI', 'BUR BIAH', 'BEBESEN', '4 th, 3 bln, 5 h', '2023-12-11', 92, 13.2, '1', '1', '2', '{\"data\":1}'),
(10, '1103072110180000', 'M. ARIFIN', 'L', '2023-12-11', 3.1, 49, 'MANSUR', 'DALING', 'BEBESEN', '0 th, 5 bln, 13 h', '2023-12-11', 64, 6.9, '1', '1', '3', '{\"data\":1}'),
(11, '1106500111197110', 'M. BILAL ALFATIH', 'L', '2023-12-11', 3.2, 48, 'FADIAN', 'EMPUS TALU', 'BEBESEN', '2 th, 1 bln, 29 h', '2023-12-11', 81, 11, '1', '1', '1', '{\"data\":1}'),
(12, '1104037107040000', 'MUHAMMAD ALFATIH', 'L', '2023-12-11', 2.9, 46, 'AFIKAH SYAHIRA', 'GELE LAH', 'BEBESEN', '4 th, 3 bln, 5 h', '2023-12-11', 92, 13.2, '1', '1', '3', '{\"data\":1}'),
(13, '1103031107899990', 'NURHALIZA PUTRI', 'P', '2023-12-11', 3.1, 49, 'IMRAN', 'KEBET', 'BEBESEN', '0 th, 5 bln, 13 h', '2023-12-11', 64, 6.9, '1', '1', '2', '{\"data\":1}'),
(14, '1104031004200000', 'RAIHAN ALGIFAHRI', 'L', '2023-12-11', 3.2, 48, 'SAMUYADI', 'KEMILI', 'BEBESEN', '2 th, 1 bln, 29 h', '2023-12-11', 81, 11, '1', '1', '2', '{\"data\":1}'),
(15, '1104031511018000', 'RASYA YUDA A.', 'L', '2023-12-11', 2.9, 46, 'SRIE YANDA', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 3 bln, 5 h', '2023-12-11', 92, 13.2, '1', '1', '3', '{\"data\":1}'),
(16, '1104036006230000', 'RAYYA ALMAHYRA', 'P', '2023-12-11', 3.1, 49, 'LAILAWATI', 'LELABU', 'BEBESEN', '0 th, 5 bln, 13 h', '2023-12-11', 64, 6.9, '1', '1', '1', '{\"data\":1}'),
(17, '1104033006230000', 'RIZQY ARSYAKA', 'L', '2023-12-11', 3.2, 48, 'JULIANTI', 'LEMAH BURBANA', 'BEBESEN', '2 th, 1 bln, 29 h', '2023-12-11', 81, 11, '1', '1', '3', '{\"data\":1}'),
(18, '11040315077999900', 'SYAHLA MUDE JAMARA', 'P', '2023-12-11', 2.9, 46, 'JAMALUDDIN', 'MAH BENGI', 'BEBESEN', '4 th, 3 bln, 5 h', '2023-12-11', 92, 13.2, '1', '1', '1', '{\"data\":1}'),
(19, '1104030610180000', 'TEUKU YAZID AL FAQI', 'L', '2023-12-11', 3.1, 49, 'MULIYA YANTI', 'MONGAL', 'BEBESEN', '0 th, 5 bln, 13 h', '2023-12-11', 64, 6.9, '1', '1', '1', '{\"data\":1}'),
(20, '11040315077999900', 'SYAHLA MUDE JAMARA', 'P', '2023-12-11', 3.2, 48, 'JAMALUDDIN', 'NUNANG ANTARA', 'BEBESEN', '2 th, 1 bln, 29 h', '2023-12-11', 81, 11, '1', '1', '1', '{\"data\":1}'),
(21, '1106504202232990', 'ALIFA ZEA AMANDA', 'P', '2023-12-11', 2.9, 46, 'MURNI RAYATI ZIKRULLAH', 'PENDERE SARIL', 'BEBESEN', '4 th, 3 bln, 5 h', '2023-12-11', 92, 13.2, '1', '1', '3', '{\"data\":1}'),
(22, '1104084712180000', 'ALISA AMIRA', 'P', '2023-12-11', 3.2, 48, 'JAMALUDDIN', 'KEBET', 'BEBESEN', '2 th, 1 bln, 29 h', '2023-12-11', 81, 11, '1', '1', '2', '{\"data\":1}'),
(23, '1106505706219980', 'ALISA ZAHRA', 'P', '2023-12-11', 3.2, 50, 'MULIYA YANTI', 'MAH BENGI', 'BEBESEN', '2 th, 6 bln, 21 h', '2023-12-11', 81, 10, '1', '1', '3', '{\"data\":1}'),
(24, '1104036909190000', 'ALLA ZAHIRA', 'P', '2023-12-11', 2.9, 40, 'YANDA', 'MONGAL', 'BEBESEN', '3 th, 0 bln, 22 h', '2023-12-11', 92, 9.4, '1', '1', '2', '{\"data\":1}'),
(25, '1106502606216700', 'ALZAIDAN', 'L', '2023-12-11', 2.8, 49, 'MUYADI', 'TENSAREN', 'BEBESEN', '3 th, 7 bln, 15 h', '2023-12-11', 90, 11, '1', '1', '1', '{\"data\":1}'),
(26, '1106503006218110', 'AMAR ALFARIZI', 'L', '2023-12-11', 3, 48, 'HAJIRWAN', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 3 bln, 24 h', '2023-12-11', 112, 15.5, '1', '1', '1', '{\"data\":1}'),
(27, '1104176904190000', 'AMARA QAILA MEDINA', 'P', '2023-12-11', 3, 50, 'IKA ARMALA', 'SIMPANG EMPAT', 'BEBESEN', '3 th, 7 bln, 11 h', '2023-12-11', 103, 13, '1', '1', '1', '{\"data\":1}'),
(28, '1106506702212220', 'AMIRA SYAKILA', 'P', '2023-12-11', 3.2, 49, 'BASRAH', 'UMANG', 'BEBESEN', '4 th, 0 bln, 13 h', '2023-12-11', 101, 13.3, '1', '1', '1', '{\"data\":1}'),
(29, '1207261201190000', 'ANAN DHIAURRAHMAN', 'L', '2023-12-11', 1.8, 45, 'YANTI', 'KERAMAT MUFAKAT', 'BEBESEN', '1 th, 4 bln, 20 h', '2023-12-11', 69, 6.1, '1', '1', '2', '{\"data\":1}'),
(30, '1106504406238240', 'ANGELINE ALLEA', 'P', '2023-12-11', 3.2, 45, 'HAMDANI', 'TAN SARIL', 'BEBESEN', '4 th, 5 bln, 14 h', '2023-12-11', 115, 15.9, '1', '1', '2', '{\"data\":1}'),
(31, '1106504307219060', 'ANINDIRA AZAHRA', 'P', '2023-12-11', 3.1, 50, 'YUDI', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 2 bln, 2 h', '2023-12-11', 120, 16, '1', '1', '2', '{\"data\":1}'),
(32, '1104034504230000', 'ANNASYA SAILA', 'P', '2023-12-11', 3.3, 51, 'JUSILA', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 1 bln, 14', '2023-12-11', 101, 12.4, '1', '1', '3', '{\"data\":1}'),
(33, '1104036401190000', 'ARCYILA PUTRI', 'P', '2023-12-11', 2.2, 49, 'ZURAIDAH', 'KERAMAT MUFAKAT', 'BEBESEN', '1 th, 2 bln, 20 h', '2023-12-11', 119, 13.2, '1', '1', '2', '{\"data\":1}'),
(34, '1104171705230000', 'ARDALAN MIZAMAUL', 'L', '2023-12-11', 3.4, 52, 'SUPARNI', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 1 bln, 30 h', '2023-12-11', 125, 14.5, '1', '1', '3', '{\"data\":1}'),
(35, '1106502205216610', 'ARJET ALFARISKI', 'L', '2023-12-11', 2.9, 51, 'SALAWATI', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 8 bln, 20, h', '2023-12-11', 110, 14.2, '1', '1', '1', '{\"data\":1}'),
(36, '1104030506200000', 'ARSYA ALIQ SYAHPUTRA', 'L', '2023-12-11', 3.5, 52, 'KARMINA', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 4 bln, 20h', '2023-12-11', 133, 15.2, '1', '1', '3', '{\"data\":1}'),
(37, '1104032005199990', 'ASYRAFUL MUBARAQ', 'L', '2023-12-11', 3, 50, 'RAMLI', 'KERAMAT MUFAKAT', 'BEBESEN', '1 th, 1 bln, 28 h', '2023-12-11', 70, 6.3, '1', '1', '1', '{\"data\":1}'),
(38, '1104034211190000', 'ATIKA', 'P', '2023-12-11', 3.1, 49, 'YANTI', 'KERAMAT MUFAKAT', 'BEBESEN', '1 th, 1 bln, 13 h', '2023-12-11', 111, 9.3, '1', '1', '3', '{\"data\":1}'),
(39, '1104034308220000', 'AULIA PUTRI', 'P', '2023-12-11', 2.9, 48, 'ZURAIDAH', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 4 bln, 29 h', '2023-12-11', 123, 15.4, '1', '1', '1', '{\"data\":1}'),
(40, '1104037003930000', 'AURA ATTAQIN', 'P', '2023-12-11', 3.2, 49, 'HARISDAWATI', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 2 bln, 29 h', '2023-12-11', 110, 14.1, '1', '1', '3', '{\"data\":1}'),
(41, '1104175306220000', 'AUREL QUEENSYA', 'P', '2023-12-11', 3.1, 52, 'HINDAH', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 5 bln, 23h', '2023-12-11', 143, 16.2, '1', '1', '2', '{\"data\":1}'),
(42, '120303410799999', 'AYYUP ALFARISKI', 'L', '2023-12-11', 2.9, 52, 'SITI AISAH', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 6 bln, 4 h', '2023-12-11', 123, 14.2, '1', '1', '2', '{\"data\":1}'),
(43, '1104036812180000', 'AZZALEA KHALIKA', 'P', '2023-12-11', 3.1, 51, 'KASMAWATI', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 7 bln, 7 h', '2023-12-11', 132, 13.2, '1', '1', '2', '{\"data\":1}'),
(44, '1104031704190000', 'AZZAM FAHREZA', 'L', '2023-12-11', 3.2, 49, 'NURJANAH', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 6 bln, 4 h', '2023-12-11', 123, 14.2, '1', '1', '1', '{\"data\":1}'),
(45, '1106501404218770', 'BAGAS SYAHPUTRA', 'L', '2023-12-11', 2.8, 48, 'MURNI RAYATI ZIKRULLAH', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 6 bln, 16 h', '2023-12-11', 102, 12.2, '1', '1', '1', '{\"data\":1}'),
(46, '1104035807190000', 'CUT JASRA UMAIZA', 'P', '2023-12-11', 2.8, 49, 'JUSILA', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 6 bln, 4 h', '2023-12-11', 123, 14.2, '1', '1', '1', '{\"data\":1}'),
(47, '1104034603190000', 'DAMLA HAMIDA', 'P', '2023-12-11', 3.2, 50, 'ZURAIDAH', 'KERAMAT MUFAKAT', 'BEBESEN', '2 th, 6 bln, 21 h', '2023-12-11', 81, 10, '1', '1', '3', '{\"data\":1}'),
(48, '1106507012192440', 'DEVI AZZAHRA PUTRI', 'P', '2023-12-11', 2.9, 40, 'SITI AISAH', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 0 bln, 22 h', '2023-12-11', 92, 9.4, '1', '1', '1', '{\"data\":1}'),
(49, '1104031808200000', 'DHEEFIN UZEIR', 'L', '2023-12-11', 2.8, 49, 'KASMAWATI', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 7 bln, 15 h', '2023-12-11', 90, 11, '1', '1', '2', '{\"data\":1}'),
(50, '1106505507218000', 'EDELWIS MOTAVANI', 'P', '2023-12-11', 3, 48, 'HAJIRWAN', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 3 bln, 24 h', '2023-12-11', 112, 15.5, '1', '1', '3', '{\"data\":1}'),
(51, '110403100219001', 'EDZARD EL HISYAM', 'L', '2023-12-11', 3, 50, 'IKA ARMALA', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 7 bln, 11 h', '2023-12-11', 103, 13, '1', '1', '1', '{\"data\":1}'),
(52, '1104031108190000', 'EL GHIFFAR ADHIA ARIVI', 'L', '2023-12-11', 3.2, 49, 'BASRAH', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 0 bln, 13 h', '2023-12-11', 101, 13.3, '1', '1', '1', '{\"data\":1}'),
(53, '1104033112180000', 'FAHRI AKBAR FASARIBU', 'L', '2023-12-11', 1.8, 45, 'YANTI', 'KERAMAT MUFAKAT', 'BEBESEN', '1 th, 4 bln, 20 h', '2023-12-11', 69, 6.1, '1', '1', '1', '{\"data\":1}'),
(54, '1106504911218210', 'FAIDA QABRINA', 'P', '2023-12-11', 3.2, 45, 'HAMDANI', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 5 bln, 14 h', '2023-12-11', 115, 15.9, '1', '1', '2', '{\"data\":1}'),
(55, '1104036711180000', 'FAIHA AZZHRA', 'P', '2023-12-11', 3.1, 50, 'YUDI', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 2 bln, 2 h', '2023-12-11', 120, 16, '1', '1', '3', '{\"data\":1}'),
(56, '1104030406999990', 'FAIZ AL AZAMI', 'L', '2023-12-11', 3.3, 51, 'JUSILA', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 1 bln, 14', '2023-12-11', 101, 12.4, '1', '1', '3', '{\"data\":1}'),
(57, '1104032204190000', 'FAZREL ALVA RIZKY', 'L', '2023-12-11', 2.2, 49, 'ZURAIDAH', 'KERAMAT MUFAKAT', 'BEBESEN', '1 th, 2 bln, 20 h', '2023-12-11', 119, 13.2, '1', '1', '3', '{\"data\":1}'),
(58, '1104035905799990', 'GHIFAR AL MUHARRMA', 'L', '2023-12-11', 3.4, 52, 'SUPARNI', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 1 bln, 30 h', '2023-12-11', 125, 14.5, '1', '1', '3', '{\"data\":1}'),
(59, '1104032711190000', 'GHIFARI ABBASY', 'L', '2023-12-11', 2.9, 51, 'SALAWATI', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 8 bln, 20, h', '2023-12-11', 110, 14.2, '1', '1', '3', '{\"data\":1}'),
(60, '1010403271222000', 'GIFARI ATHARAZKA', 'L', '2023-12-11', 3.5, 52, 'KARMINA', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 4 bln, 20h', '2023-12-11', 133, 15.2, '1', '1', '3', '{\"data\":1}'),
(61, '1271185502200000', 'HAFIDZA LUTHFIA', 'P', '2023-12-11', 3, 50, 'RAMLI', 'KERAMAT MUFAKAT', 'BEBESEN', '1 th, 1 bln, 28 h', '2023-12-11', 70, 6.3, '1', '1', '1', '{\"data\":1}'),
(62, '1104036908190000', 'HANIN RAUDATUN NAIN', 'P', '2023-12-11', 3.1, 49, 'YANTI', 'KERAMAT MUFAKAT', 'BEBESEN', '1 th, 1 bln, 13 h', '2023-12-11', 111, 9.3, '1', '1', '1', '{\"data\":1}'),
(63, '111703050799999', 'HARSA GIUANO', 'L', '2023-12-11', 2.9, 48, 'ZURAIDAH', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 4 bln, 29 h', '2023-12-11', 123, 15.4, '1', '1', '1', '{\"data\":1}'),
(64, '1106504806211350', 'JUNAIRA', 'P', '2023-12-11', 3.2, 49, 'HARISDAWATI', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 2 bln, 29 h', '2023-12-11', 110, 14.1, '1', '1', '2', '{\"data\":1}'),
(65, '1171040901899990', 'KENZI AROYAN ALFARISKI', 'L', '2023-12-11', 3.1, 52, 'HINDAH', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 5 bln, 23h', '2023-12-11', 143, 16.2, '1', '1', '2', '{\"data\":1}'),
(66, '1104030911180000', 'KENZI HARDANA PUTRA', 'L', '2023-12-11', 2.9, 52, 'SITI AISAH', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 6 bln, 4 h', '2023-12-11', 123, 14.2, '1', '1', '2', '{\"data\":1}'),
(67, '1104031608190000', 'KEVIN RAPSYA', 'L', '2023-12-11', 3.1, 51, 'KASMAWATI', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 7 bln, 7 h', '2023-12-11', 132, 13.2, '1', '1', '2', '{\"data\":1}'),
(68, '1106506810215260', 'KHAFITATUR RADHYYAH', 'P', '2023-12-11', 3.2, 49, 'NURJANAH', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 2 bln, 14 h', '2023-12-11', 123, 15.4, '1', '1', '2', '{\"data\":1}'),
(69, '1104032708899990', 'KHAIRUNNISAH', 'P', '2023-12-11', 2.8, 48, 'MURNI RAYATI ZIKRULLAH', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 6 bln, 16 h', '2023-12-11', 102, 12.2, '1', '1', '2', '{\"data\":1}'),
(70, '110401486840001', 'KHALIZA SALSABILA', 'P', '2023-12-11', 3.1, 52, 'HINDAH', 'KERAMAT MUFAKAT', 'BEBESEN', '2 th, 6 bln, 16 h', '2023-12-11', 123, 15.4, '1', '1', '2', '{\"data\":1}'),
(71, '1104175211190000', 'KIMBELI HABIBAH AZAHRA', 'P', '2023-12-11', 3.2, 50, 'DARWIN', 'KERAMAT MUFAKAT', 'BEBESEN', '2 th, 6 bln, 21 h', '2023-12-11', 81, 10, '1', '1', '2', '{\"data\":1}'),
(72, '1104136203220000', 'LESTI AMELLIYA', 'P', '2023-12-11', 2.9, 40, 'SITI AISAH', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 0 bln, 22 h', '2023-12-11', 92, 9.4, '1', '1', '1', '{\"data\":1}'),
(73, '1104030811190000', 'M ALFAQIH BATUBARA', 'L', '2023-12-11', 2.8, 49, 'KASMAWATI', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 7 bln, 15 h', '2023-12-11', 90, 11, '1', '1', '1', '{\"data\":1}'),
(74, '1104032401200000', 'M ASATAFUL QIRAM', 'L', '2023-12-11', 3, 48, 'HAJIRWAN', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 3 bln, 24 h', '2023-12-11', 112, 15.5, '1', '1', '2', '{\"data\":1}'),
(75, '1106502003225330', 'M GIBRAN ALFARIZKI', 'L', '2023-12-11', 3, 50, 'IKA ARMALA', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 7 bln, 11 h', '2023-12-11', 103, 13, '1', '1', '2', '{\"data\":1}'),
(76, '1104030404190000', 'M NAUVAL', 'L', '2023-12-11', 3.2, 49, 'BASRAH', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 0 bln, 13 h', '2023-12-11', 101, 13.3, '1', '1', '2', '{\"data\":1}'),
(77, '11040328012000000', 'M SALMAN ALFARIS', 'L', '2023-12-11', 1.8, 45, 'YANTI', 'KERAMAT MUFAKAT', 'BEBESEN', '1 th, 4 bln, 20 h', '2023-12-11', 69, 6.1, '1', '1', '2', '{\"data\":1}'),
(78, '1104030108190000', 'M ZAFRAN', 'L', '2023-12-11', 3.2, 45, 'HAMDANI', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 5 bln, 14 h', '2023-12-11', 115, 15.9, '1', '1', '2', '{\"data\":1}'),
(79, '1104030608190000', 'M ZAIN ALFATIH', 'L', '2023-12-11', 3.1, 50, 'YUDI', 'KERAMAT MUFAKAT', 'BEBESEN', '4 th, 2 bln, 2 h', '2023-12-11', 120, 16, '1', '1', '3', '{\"data\":1}'),
(80, '1104032507199990', 'M ABDUL RAJIQ', 'L', '2023-12-11', 3.3, 51, 'JUSILA', 'KERAMAT MUFAKAT', 'BEBESEN', '3 th, 1 bln, 14', '2023-12-11', 101, 12.4, '1', '1', '3', '{\"data\":1}');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_data_balita`
--
ALTER TABLE `table_data_balita`
  ADD PRIMARY KEY (`id_balita`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_data_balita`
--
ALTER TABLE `table_data_balita`
  MODIFY `id_balita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
