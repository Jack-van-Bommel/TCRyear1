-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 11:48 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wk2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `speler`
--

CREATE TABLE `speler` (
  `idspeler` int(11) NOT NULL,
  `voornaam` varchar(45) NOT NULL,
  `achternaam` varchar(45) NOT NULL,
  `rugnummer` int(11) NOT NULL,
  `team_idteam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `speler`
--

INSERT INTO `speler` (`idspeler`, `voornaam`, `achternaam`, `rugnummer`, `team_idteam`) VALUES
(101, 'Denzel', 'Dumfries', 22, 1),
(102, 'Daley', 'Blind', 17, 1),
(201, 'Manuel', 'Neuer', 1, 2),
(202, 'Mario', 'Götze', 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `idteam` int(11) NOT NULL,
  `land` varchar(45) NOT NULL,
  `naam` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`idteam`, `land`, `naam`) VALUES
(1, 'Nederland', 'Nederland'),
(2, 'Duitsland', 'Duitsland');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `speler`
--
ALTER TABLE `speler`
  ADD PRIMARY KEY (`idspeler`),
  ADD UNIQUE KEY `voornaam` (`voornaam`,`achternaam`),
  ADD KEY `fk_speler_team_idx` (`team_idteam`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`idteam`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `speler`
--
ALTER TABLE `speler`
  ADD CONSTRAINT `fk_speler_team` FOREIGN KEY (`team_idteam`) REFERENCES `team` (`idteam`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
