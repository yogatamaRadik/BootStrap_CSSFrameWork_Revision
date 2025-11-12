-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2025 at 02:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitnesspro_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `datachartmember_fitnesspro`
--

CREATE TABLE `datachartmember_fitnesspro` (
  `id` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `datamember` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datachartmember_fitnesspro`
--

INSERT INTO `datachartmember_fitnesspro` (`id`, `tahun`, `datamember`) VALUES
(1, 2012, 20),
(2, 2015, 150),
(3, 2018, 120),
(4, 2020, 300),
(5, 2022, 1500),
(6, 2024, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `inputdatakontak`
--

CREATE TABLE `inputdatakontak` (
  `id` int(11) NOT NULL,
  `nama_penghubung` varchar(200) NOT NULL,
  `notelp_penghubung` varchar(15) NOT NULL,
  `email_penghubung` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inputdatakontak`
--

INSERT INTO `inputdatakontak` (`id`, `nama_penghubung`, `notelp_penghubung`, `email_penghubung`) VALUES
(23, 'Radik', '082223545404', 'yogatamaradix55@gmail.com'),
(24, 'Radik', '082223545404', 'yogatamaradix55@gmail.com'),
(25, 'Radik', '082223545404', 'yogatamaradix55@gmail.com'),
(26, 'Radik', '082223545404', 'yogatamaradix55@gmail.com'),
(27, 'Radik', '082223545404', 'yogatamaradix55@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `membershipwtrainer_fitnesspro`
--

CREATE TABLE `membershipwtrainer_fitnesspro` (
  `id` int(11) NOT NULL,
  `paket_kelas2` varchar(50) NOT NULL,
  `harga_paket2` varchar(50) NOT NULL,
  `desc1_2` text NOT NULL,
  `desc2_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membershipwtrainer_fitnesspro`
--

INSERT INTO `membershipwtrainer_fitnesspro` (`id`, `paket_kelas2`, `harga_paket2`, `desc1_2`, `desc2_2`) VALUES
(1, 'PAKET BULANAN', '2800000', '/bulan', 'Akses Penuh ke Gym\r\nAkses Semua Kelas\r\nGratis Handuk & Loker\r\n+ Trainer (12 sesi)'),
(2, 'PAKET 6 BULAN (Best Value)', '15000000', '/6 bulan (Hemat Rp 1.800.000)', 'Akses Penuh ke Gym\r\nAkses Semua Kelas\r\nGratis Handuk & Loker\r\n+ Trainer (72 sesi)'),
(3, 'PAKET TAHUNAN', '30000000', '/1 tahun (Hemat Rp 3.600.000)', 'Akses Penuh ke Gym\r\nAkses Semua Kelas\r\nGratis Handuk & Loker\r\n+ Trainer (144 sesi)');

-- --------------------------------------------------------

--
-- Table structure for table `membership_fitnesspro`
--

CREATE TABLE `membership_fitnesspro` (
  `id` int(11) NOT NULL,
  `paket_kelas` varchar(50) NOT NULL,
  `harga_paket` varchar(50) NOT NULL,
  `desc_1` text NOT NULL,
  `desc_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership_fitnesspro`
--

INSERT INTO `membership_fitnesspro` (`id`, `paket_kelas`, `harga_paket`, `desc_1`, `desc_2`) VALUES
(1, 'PAKET BULANAN', '350000', '/bulan', 'Akses Penuh ke Gym\r\nAkses Semua Kelas\r\nGratis Handuk & Loker'),
(2, 'PAKET 6 BULAN (Best Value)', '1800000', '(Hemat Rp 300.000)', 'Akses Penuh ke Gym\r\nAkses Semua Kelas\r\nGratis Handuk & Loker'),
(3, 'PAKET TAHUNAN', '3950000', '(Hemat Rp250.000)', 'Akses Penuh ke Gym\r\nAkses Semua Kelas\r\nGratis Handuk & Loker');

-- --------------------------------------------------------

--
-- Table structure for table `program_fitnesspro`
--

CREATE TABLE `program_fitnesspro` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `desc_kelas` text NOT NULL,
  `gambar_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_fitnesspro`
--

INSERT INTO `program_fitnesspro` (`id`, `nama_kelas`, `desc_kelas`, `gambar_kelas`) VALUES
(1, 'Kelas Kardio', 'Tingkatkan daya tahan jantung dan bakar kalori dengan kelas high-intensity kami.', 'pexels-tima-miroshnichenko-6390240.jpg'),
(2, 'Weight Lifting', 'Bentuk otot dan tambah kekuatan Anda di area angkat beban kami yang lengkap.', 'pexels-leonmart-1552106.jpg'),
(3, 'Yoga', 'Temukan ketenangan dan tingkatkan fleksibilitas tubuh Anda di kelas yoga kami.', 'pexels-olly-917732.jpg'),
(4, 'Zumba', 'Tampil energik dan bersenang-senang dengan ritme musik dalam kelas Zumba kami', 'pexels-katetrysh-4090012.jpg'),
(5, 'Body Pump', 'Program latihan kekuatan seluruh tubuh yang memanfaatkan beban barbell ringan.', 'pexels-olly-3836880.jpg'),
(6, 'TRX', 'Latihan kekuatan tubuh menggunakan tali gantung untuk keseimbangan dan stabilitas.', 'pexels-mikhail-nilov-6740311.jpg'),
(7, 'Pilates', 'Latihan fokus pada kekuatan inti, postur tubuh, dan kontrol pernapasan.', 'pexels-jessica-monte-424529-1103254.jpg'),
(8, 'Body Combat', 'Latihan berenergi tinggi dengan gerakan bela diri untuk membakar kalori cepat.', 'istockphoto-1182619218-2048x2048.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datachartmember_fitnesspro`
--
ALTER TABLE `datachartmember_fitnesspro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inputdatakontak`
--
ALTER TABLE `inputdatakontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membershipwtrainer_fitnesspro`
--
ALTER TABLE `membershipwtrainer_fitnesspro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_fitnesspro`
--
ALTER TABLE `membership_fitnesspro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_fitnesspro`
--
ALTER TABLE `program_fitnesspro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datachartmember_fitnesspro`
--
ALTER TABLE `datachartmember_fitnesspro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inputdatakontak`
--
ALTER TABLE `inputdatakontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `membershipwtrainer_fitnesspro`
--
ALTER TABLE `membershipwtrainer_fitnesspro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `membership_fitnesspro`
--
ALTER TABLE `membership_fitnesspro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `program_fitnesspro`
--
ALTER TABLE `program_fitnesspro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
