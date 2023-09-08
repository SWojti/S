-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 11:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ez`
--

-- --------------------------------------------------------

--
-- Table structure for table `oceny`
--

CREATE TABLE `oceny` (
  `oceny` int(11) NOT NULL,
  `przemdiot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oceny`
--

INSERT INTO `oceny` (`oceny`, `przemdiot`) VALUES
(1, '0'),
(5, '0'),
(6, '0'),
(2, '0'),
(4, '0');

-- --------------------------------------------------------

--
-- Table structure for table `studenci`
--

CREATE TABLE `studenci` (
  `id` int(11) NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `adres_email` text NOT NULL,
  `haslo` text NOT NULL,
  `data_urodzenia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `studenci`
--

INSERT INTO `studenci` (`id`, `imie`, `nazwisko`, `adres_email`, `haslo`, `data_urodzenia`) VALUES
(1, 'Wojti', 'sosna', 'wojtisosna21', 'greghrth', '2022-11-11'),
(2, 'jarek', 'tomczyk', 'jarektomczyk', 'htryjhy', '2022-11-11'),
(3, 'papito', 'poardzito', 'papitoporadzito', 'grdhths', '2022-11-11'),
(4, 'barpo', 'jakistam', 'barpojakistamf', 'gtdshtukm', '2022-11-11'),
(5, 'kuba', 'sosna', 'kubasosna', '73jjsgf', '2022-11-11'),
(6, 'Robert', 'nowak', 'papitojarito', 'trhdtgfh', '2022-11-11'),
(7, 'Tomek', 'Kiełbasik', 'tomekkiełbasik', 'gfhnsfgjn', '2022-11-11'),
(8, 'szymi', 'tomczyk', 'szymitomczyk', 'tukyutysjj', '2022-11-11'),
(9, 'Marlena', 'Lewa', 'marlenalewa432', 'gfradhgh', '2022-11-11'),
(10, 'Ania', 'jakastam', 'jakasmtamaniafsd', 'fgdsgasdh', '2022-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `tabela2`
--

CREATE TABLE `tabela2` (
  `obcy` int(11) NOT NULL,
  `obcyy` int(11) NOT NULL,
  `pole1` text NOT NULL,
  `pole2` enum('m','k') NOT NULL,
  `oceny` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabela3`
--

CREATE TABLE `tabela3` (
  `id` int(11) NOT NULL,
  `pole1` int(11) NOT NULL,
  `pole2` int(11) NOT NULL,
  `pole3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studenci`
--
ALTER TABLE `studenci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabela2`
--
ALTER TABLE `tabela2`
  ADD KEY `obcy` (`obcy`),
  ADD KEY `obcyy` (`obcyy`);

--
-- Indexes for table `tabela3`
--
ALTER TABLE `tabela3`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabela2`
--
ALTER TABLE `tabela2`
  ADD CONSTRAINT `tabela2_ibfk_1` FOREIGN KEY (`obcy`) REFERENCES `studenci` (`id`),
  ADD CONSTRAINT `tabela2_ibfk_2` FOREIGN KEY (`obcyy`) REFERENCES `tabela3` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
