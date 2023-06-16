-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 09:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_sem4`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_1`
--

CREATE TABLE `login_1` (
  `nama` varchar(30) NOT NULL,
  `katalaluan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_1`
--

INSERT INTO `login_1` (`nama`, `katalaluan`) VALUES
('Nama', 'aina5'),
('Nama Penuh', 'aina6');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `nama` varchar(30) NOT NULL,
  `ndp` int(10) NOT NULL,
  `katalaluan` int(10) NOT NULL,
  `telefon` int(20) NOT NULL,
  `tinggi` int(5) NOT NULL,
  `badan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `update1`
--

CREATE TABLE `update1` (
  `nama` varchar(25) NOT NULL,
  `ndp` int(10) NOT NULL,
  `katalaluan` int(10) NOT NULL,
  `telefon` int(25) NOT NULL,
  `tinggi` int(4) NOT NULL,
  `badan` int(4) NOT NULL,
  `action` int(50) NOT NULL,
  `update` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `update1`
--

INSERT INTO `update1` (`nama`, `ndp`, `katalaluan`, `telefon`, `tinggi`, `badan`, `action`, `update`) VALUES
('aina ayuni binti amran', 23569, 125896, 1065268854, 165, 68, 0, 0),
('aina nabilah binti amran', 22355222, 2147483647, 103659822, 154, 51, 0, 0),
('aina najwa binti amran', 23221102, 2002723, 1099798101, 159, 631, 0, 0),
('aina masturina binti amra', 78002155, 15268, 106589441, 154, 65, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ndp`);

--
-- Indexes for table `update1`
--
ALTER TABLE `update1`
  ADD PRIMARY KEY (`ndp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ndp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=587984546;

--
-- AUTO_INCREMENT for table `update1`
--
ALTER TABLE `update1`
  MODIFY `ndp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200236589;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
