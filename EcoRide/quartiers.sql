-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 02:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quartiers`
--

-- --------------------------------------------------------

--
-- Table structure for table `rabat`
--

CREATE TABLE `rabat` (
  `id` int(9) NOT NULL,
  `nom_quartier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rabat`
--

INSERT INTO `rabat` (`id`, `nom_quartier`) VALUES
(1, 'Aakkari'),
(2, 'Agdal'),
(3, 'Aviation'),
(4, 'Diour Jamaa'),
(5, 'Douar El Hajja'),
(6, 'Hassan'),
(7, 'Hay El Fath'),
(8, 'Hay Nahda'),
(9, 'Hay Riad'),
(10, 'L\'Océan'),
(11, 'La Médina'),
(12, 'Les Ambassadeurs'),
(13, 'Les Orangers'),
(14, 'Les Oudayas'),
(15, 'Mabella'),
(16, 'Massira'),
(17, 'Rommani'),
(18, 'Souissi'),
(19, 'Taqaddoum'),
(20, 'Yacoub El Mensour'),
(21, 'Youssoufia'),
(22, 'Autre...');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` int(9) NOT NULL,
  `nom_quartier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `nom_quartier`) VALUES
(1, 'Addoha Adouab Sala'),
(2, 'Cité Militaire'),
(3, 'Groupe Résidentiel Annaim'),
(4, 'Hay Al Qoriaa'),
(5, 'Hay Chemaaou'),
(6, 'Hay Errahma'),
(7, 'Hay Hourria'),
(8, 'Hay Moulay Ismail'),
(9, 'Hay Sakani'),
(10, 'Kariat'),
(11, 'Lotissements Assalam'),
(12, 'Lotissements Fath Al Khair'),
(13, 'Lotissements Rouid'),
(14, 'Lotissements Villa'),
(15, 'Lotissements Said Hajji'),
(16, 'Nahda'),
(17, 'Quartier Bettana'),
(18, 'Sehb'),
(19, 'Youssra et Zarkae'),
(20, 'Autre...');

-- --------------------------------------------------------

--
-- Table structure for table `temara`
--

CREATE TABLE `temara` (
  `id` int(9) NOT NULL,
  `nom_quartier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temara`
--

INSERT INTO `temara` (`id`, `nom_quartier`) VALUES
(1, '11 Janvier'),
(2, 'Beni Brour'),
(3, 'Cité Alandalous'),
(4, 'Firdaous'),
(5, 'Guich Oudaya'),
(6, 'Harhoura'),
(7, 'Hay Abbadi'),
(8, 'Hay Nahda 1'),
(9, 'Hay Nahda 2'),
(10, 'Lotissement Beethoven'),
(11, 'Lotissement Laayoune'),
(12, 'Massira III'),
(16, 'Oued Eddahab'),
(17, 'Oulad Mtaa'),
(18, 'Résidence Ennassime'),
(19, 'Résidence Mimosas'),
(20, 'Résidence Taoufik'),
(21, 'Wifak II'),
(22, 'Autre...');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rabat`
--
ALTER TABLE `rabat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temara`
--
ALTER TABLE `temara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rabat`
--
ALTER TABLE `rabat`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `temara`
--
ALTER TABLE `temara`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
