-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 21, 2020 at 08:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PFE`
--

-- --------------------------------------------------------

--
-- Table structure for table `admn`
--

CREATE TABLE `admn` (
  `id_admin` int(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admn`
--

INSERT INTO `admn` (`id_admin`, `login`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(50) NOT NULL,
  `nom_a` varchar(50) NOT NULL,
  `srv` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `nom_a`, `srv`, `email`, `pass`) VALUES
(1, 'emame', 'caisier-r', 'emame@gmail.com', '456456'),
(2, 'fatim', 'caisier-v', 'email@gmail.com', '123456'),
(5, 'mey', 'versement', 'mey@gmail.com', 'meymey');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_cl` int(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `tel` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_cl`, `nom`, `tel`) VALUES
(1, 'fatima', 26752986),
(2, 'gfhhj', 3333),
(3, 'fatima', 3333),
(4, 'dddd', 3333),
(5, 'lll', 3333),
(6, 'sss', 26752986),
(7, 'd', 3333),
(8, 'bkabkab', 3333),
(9, 'gfhhj', 26752986),
(10, 'ttt', 45454),
(11, 'hhh', 232),
(12, 'sdf', 332),
(13, 'sda', 2342),
(14, 'fatima', 88),
(15, '', 888),
(16, '', 3434),
(17, 'sds', 32432),
(18, 'fsdff', 342434),
(19, 'rewr', 232),
(20, 'gfhhj', 676),
(21, 'sffds', 232434),
(22, 'qwwq', 3333),
(23, 'sffds', 3333),
(24, 'gh', 777),
(25, 'fsf', 1222222),
(26, 'wwqew', 123232321),
(27, 'were', 535435),
(28, 'fatim', 26752986),
(29, 'wwwww', 24242424),
(30, 'jjjj', 3333),
(31, 'sdd', 231212122),
(32, '', 22),
(33, '', 23),
(34, 'asd', 23132313),
(35, 'jhfg', 86876765),
(36, 'fdfsdf', 324345434),
(37, 'sdfdfs', 23243443),
(38, 'sdfdfs', 232434434),
(39, 'rewrqr', 233243434),
(40, 'wrewrqwer', 12343243),
(41, 'werewrwer', 413434134),
(42, 'rewre', 54534543),
(43, 'kjgjgg', 9876598),
(44, 'jhgf', 76543212),
(45, 'ytrew', 76543655),
(46, 'rtrtrt', 54354543),
(47, 'dfdffadf', 545435434),
(48, '345435q3', 534544543),
(49, 'dfsdddddsf', 34342343),
(50, 'emame', 33536600),
(51, 'ssss', 26752986),
(52, 'fatim', 987654567),
(53, 'fatim', 33333333),
(54, 'fatim', 12345678);

-- --------------------------------------------------------

--
-- Table structure for table `retrait`
--

CREATE TABLE `retrait` (
  `id_rt` int(50) NOT NULL,
  `date_r` date NOT NULL,
  `id_c` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `retrait`
--

INSERT INTO `retrait` (`id_rt`, `date_r`, `id_c`) VALUES
(1, '2020-08-17', 2),
(2, '2020-08-17', 2),
(3, '2018-08-17', 4),
(4, '2020-08-17', 3),
(5, '2020-08-17', 3),
(6, '2020-08-18', 4),
(7, '2020-08-18', 3),
(8, '2020-09-03', 1),
(9, '2020-09-03', 1),
(10, '2020-09-03', 2),
(11, '2020-09-03', 2),
(12, '2020-09-06', 3),
(13, '2020-09-09', 9),
(14, '2020-09-13', 4),
(15, '2020-09-13', 7),
(16, '2020-09-16', 3),
(17, '2020-09-16', 17),
(18, '2020-09-16', 17),
(19, '2020-09-16', 17),
(20, '2020-09-16', 18),
(21, '2020-09-16', 18),
(22, '2020-09-16', 19),
(23, '2020-09-16', 2),
(24, '2020-09-16', 20),
(25, '2020-09-16', 21),
(26, '2020-09-16', 3),
(27, '2020-09-16', 3),
(28, '2020-09-16', 22),
(29, '2020-09-16', 3),
(30, '2020-09-16', 24),
(31, '2020-09-16', 27),
(32, '2020-09-17', 36),
(33, '2020-09-17', 36),
(34, '2020-09-17', 37),
(35, '2020-09-17', 38),
(36, '2020-09-17', 39),
(37, '2020-09-17', 40),
(38, '2020-09-17', 41),
(39, '2020-09-17', 41),
(40, '2020-09-17', 43),
(41, '2020-09-17', 45),
(42, '2020-09-19', 47);

-- --------------------------------------------------------

--
-- Table structure for table `statis`
--

CREATE TABLE `statis` (
  `id` int(11) NOT NULL,
  `mois` int(50) NOT NULL,
  `versement` int(50) NOT NULL,
  `retrait` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `statistique`
--

CREATE TABLE `statistique` (
  `id_st` int(50) NOT NULL,
  `servic` varchar(11) NOT NULL,
  `totale` int(11) NOT NULL,
  `jour` int(11) NOT NULL,
  `mois` text NOT NULL,
  `annee` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statistique`
--

INSERT INTO `statistique` (`id_st`, `servic`, `totale`, `jour`, `mois`, `annee`, `date`) VALUES
(1719, 'Retrait', 4, 17, 'août', 2020, '2020-08-17'),
(1720, 'Retrait', 2, 18, 'août', 2020, '2020-08-18'),
(1721, 'Retrait', 4, 3, 'septembre', 2020, '2020-09-03'),
(1722, 'Retrait', 1, 6, 'septembre', 2020, '2020-09-06'),
(1723, 'Retrait', 1, 9, 'septembre', 2020, '2020-09-09'),
(1724, 'Retrait', 2, 13, 'septembre', 2020, '2020-09-13'),
(1725, 'Retrait', 16, 16, 'septembre', 2020, '2020-09-16'),
(1726, 'Retrait', 10, 17, 'septembre', 2020, '2020-09-17'),
(1728, 'Versement', 4, 17, 'août', 2020, '2020-08-17'),
(1729, 'Versement', 2, 18, 'août', 2020, '2020-08-18'),
(1730, 'Versement', 1, 26, 'août', 2020, '2020-08-26'),
(1731, 'Versement', 5, 3, 'septembre', 2020, '2020-09-03'),
(1732, 'Versement', 1, 9, 'septembre', 2020, '2020-09-09'),
(1733, 'Versement', 3, 10, 'septembre', 2020, '2020-09-10'),
(1734, 'Versement', 21, 16, 'septembre', 2020, '2020-09-16'),
(1735, 'Versement', 24, 17, 'septembre', 2020, '2020-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `temp_r`
--

CREATE TABLE `temp_r` (
  `id_rt` int(50) NOT NULL,
  `date_r` date NOT NULL,
  `id_c` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_r`
--

INSERT INTO `temp_r` (`id_rt`, `date_r`, `id_c`) VALUES
(1, '2020-09-20', 28),
(2, '2020-09-20', 6),
(3, '2020-09-20', 6),
(4, '2020-09-20', 6),
(5, '2020-09-20', 28),
(6, '2020-09-20', 51),
(7, '2020-09-21', 28),
(8, '2020-09-21', 1),
(9, '2020-09-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `temp_v`
--

CREATE TABLE `temp_v` (
  `id_vers` int(11) NOT NULL,
  `date_v` date NOT NULL,
  `id_cl` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `versement`
--

CREATE TABLE `versement` (
  `id_v` int(50) NOT NULL,
  `id_vers` int(11) NOT NULL,
  `date_v` date NOT NULL,
  `id_cl` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `versement`
--

INSERT INTO `versement` (`id_v`, `id_vers`, `date_v`, `id_cl`) VALUES
(1, 0, '2020-09-20', 28),
(2, 0, '2020-09-20', 28),
(3, 0, '2020-09-20', 28),
(4, 0, '2020-09-20', 28),
(5, 0, '2020-09-20', 28),
(6, 0, '2020-09-20', 52),
(7, 0, '2020-09-20', 28),
(8, 0, '2020-09-21', 28),
(9, 0, '2020-09-21', 1),
(10, 0, '2020-09-21', 53),
(11, 0, '2020-09-21', 54),
(12, 1, '2020-09-01', 14),
(13, 1, '2020-09-01', 14),
(14, 1, '2020-09-21', 1),
(15, 1, '2020-09-21', 1),
(16, 2, '2020-09-21', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admn`
--
ALTER TABLE `admn`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_cl`);

--
-- Indexes for table `retrait`
--
ALTER TABLE `retrait`
  ADD PRIMARY KEY (`id_rt`),
  ADD KEY `foreign` (`id_c`);

--
-- Indexes for table `statis`
--
ALTER TABLE `statis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistique`
--
ALTER TABLE `statistique`
  ADD PRIMARY KEY (`id_st`);

--
-- Indexes for table `temp_r`
--
ALTER TABLE `temp_r`
  ADD PRIMARY KEY (`id_rt`);

--
-- Indexes for table `temp_v`
--
ALTER TABLE `temp_v`
  ADD PRIMARY KEY (`id_vers`);

--
-- Indexes for table `versement`
--
ALTER TABLE `versement`
  ADD PRIMARY KEY (`id_v`),
  ADD KEY `for` (`id_cl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admn`
--
ALTER TABLE `admn`
  MODIFY `id_admin` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_cl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `retrait`
--
ALTER TABLE `retrait`
  MODIFY `id_rt` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `statis`
--
ALTER TABLE `statis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `statistique`
--
ALTER TABLE `statistique`
  MODIFY `id_st` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1736;

--
-- AUTO_INCREMENT for table `temp_r`
--
ALTER TABLE `temp_r`
  MODIFY `id_rt` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `temp_v`
--
ALTER TABLE `temp_v`
  MODIFY `id_vers` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `versement`
--
ALTER TABLE `versement`
  MODIFY `id_v` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `retrait`
--
ALTER TABLE `retrait`
  ADD CONSTRAINT `foreign` FOREIGN KEY (`id_c`) REFERENCES `client` (`id_cl`);

--
-- Constraints for table `versement`
--
ALTER TABLE `versement`
  ADD CONSTRAINT `for` FOREIGN KEY (`id_cl`) REFERENCES `client` (`id_cl`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
