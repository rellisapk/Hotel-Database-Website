-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 02:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `booking`
-- (See below for the actual view)
--
CREATE TABLE `booking` (
`id_reservasi` int(11)
,`id_customer` int(11)
,`id_kamar` int(11)
,`tgl_checkin` date
,`tgl_checkout` date
,`lama_hari` int(7)
,`biaya` bigint(17)
,`id_pegawai` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(30) DEFAULT NULL,
  `tgl_lahir_customer` date NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota_asal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `tgl_lahir_customer`, `jenis_kelamin`, `email`, `alamat`, `kota_asal`) VALUES
(2001, 'Arleen Jakubovitch', '1990-02-26', 'P', 'ajakubovitch0@tmall.com', '2 Gale Crossing', 'Mosfilotí'),
(2002, 'Panchito McCrackan', '1983-01-06', 'L', 'pmccrackan1@archive.org', '23490 Butternut Park', 'Niutian'),
(2003, 'Richart Mathivet', '1981-09-09', 'L', 'rmathivet2@yale.edu', '5141 Banding Center', 'Qızılhacılı'),
(2004, 'Nertie Codlin', '1996-09-13', 'P', 'ncodlin3@last.fm', '216 Forster Parkway', 'Rio Grande da Serra'),
(2005, 'Dyna Moyne', '1996-06-15', 'L', 'dmoyne4@biblegateway.com', '36273 Marquette Trail', 'Haixing'),
(2006, 'Margarethe Johanning', '1982-06-18', 'P', 'mjohanning5@free.fr', '150 Ruskin Point', 'Biała Piska'),
(2007, 'Oralie Avon', '1988-11-03', 'P', 'oavon6@furl.net', '7152 Marquette Pass', 'Sexiong'),
(2008, 'Isak Rollings', '1981-09-25', 'P', 'irollings7@narod.ru', '8 Beilfuss Alley', 'Monastyryshche'),
(2009, 'Cobby Curphey', '1990-02-08', 'L', 'ccurphey8@yelp.com', '013 Portage Street', 'Shāhpur Chākar');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `tipe_kamar` varchar(20) NOT NULL,
  `tipe_ranjang` varchar(20) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `photo` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `tipe_kamar`, `tipe_ranjang`, `deskripsi`, `photo`, `harga`) VALUES
(4001, 'Standard Room', '1 Single Bed', '', '', 5000),
(4002, 'Deluxe Room', '2 Double Bed', '', '', 7000),
(4003, 'Standard Room', '2 Single Bed', 'Ranjangnya 2 gitu loh', 'product2.jpeg', 6000),
(4004, 'Executive Suite', '3 Single Bed', '', 'product5.jpg', 14000),
(4005, 'President Suite', '2 King Bed', '', '', 16000);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `tgl_lahir_pegawai` date NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `gaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `tgl_lahir_pegawai`, `jenis_kelamin`, `email`, `jabatan`, `gaji`) VALUES
(3001, 'Karita Jeens', '1983-08-05', 'P', 'kjeens@kj.com', 'Room Service', 19000),
(3002, 'Temp Bruinsma', '1991-12-10', 'P', 'tb@tb.com', 'Room Service', 19000),
(3003, 'Kaine Bowkley', '1999-08-18', '', '', 'Housekeeping', 15000),
(3005, 'Natala Liddicoat', '1998-04-13', '', '', 'Receptionist', 12000),
(3006, 'Mattheus Bowyer', '1984-03-04', '', '', 'Manager', 8000),
(3007, 'Candra Athowe', '1984-06-25', '', '', 'Receptionist', 11000),
(3008, 'Magdalen Gable', '1997-05-17', '', '', 'Manager', 9000),
(3009, 'Mel Beresford', '1999-01-16', '', '', 'Manager', 13000),
(3010, 'Cele Lambrecht', '1997-06-07', '', '', 'Room Service', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservasi` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `tgl_checkin` date NOT NULL,
  `tgl_checkout` date NOT NULL,
  `id_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_reservasi`, `id_customer`, `id_kamar`, `tgl_checkin`, `tgl_checkout`, `id_pegawai`) VALUES
(1001, 2001, 4001, '2020-05-05', '2020-05-10', 3001),
(1002, 2002, 4002, '2020-04-15', '2020-04-17', 3006),
(1004, 2003, 4003, '2020-12-03', '2020-12-08', 3003),
(1006, 2004, 4004, '2020-11-16', '2020-11-19', 3005);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@email.com', '$2y$10$vSVxl185iw3Htc4t2euHDO8Ql8QsqRBrwB7t45giQTqhurLrldT/C');

-- --------------------------------------------------------

--
-- Structure for view `booking`
--
DROP TABLE IF EXISTS `booking`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `booking`  AS  select `reservation`.`id_reservasi` AS `id_reservasi`,`reservation`.`id_customer` AS `id_customer`,`reservation`.`id_kamar` AS `id_kamar`,`reservation`.`tgl_checkin` AS `tgl_checkin`,`reservation`.`tgl_checkout` AS `tgl_checkout`,to_days(`reservation`.`tgl_checkout`) - to_days(`reservation`.`tgl_checkin`) AS `lama_hari`,(to_days(`reservation`.`tgl_checkout`) - to_days(`reservation`.`tgl_checkin`)) * `kamar`.`harga` AS `biaya`,`reservation`.`id_pegawai` AS `id_pegawai` from (`reservation` join `kamar` on(`reservation`.`id_kamar` = `kamar`.`id_kamar`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_kamar` (`id_kamar`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2011;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4007;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3011;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
