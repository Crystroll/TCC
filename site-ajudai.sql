-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 01:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site-ajudai`
--

-- --------------------------------------------------------

--
-- Table structure for table `cadastro-cliente`
--

CREATE TABLE `cadastro-cliente` (
  `nome` varchar(100) NOT NULL,
  `senha` char(255) NOT NULL,
  `email` varchar(80) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `Id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cadastro-cliente`
--

INSERT INTO `cadastro-cliente` (`nome`, `senha`, `email`, `telefone`, `Id`) VALUES
('Eduardo', 'eduardo123', 'eduardo@gmail.com', '19997972928', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cadastro-profissional`
--

CREATE TABLE `cadastro-profissional` (
  `nome` varchar(100) NOT NULL,
  `senha` varchar(256) NOT NULL,
  `email` varchar(80) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cadastro-profissional`
--

INSERT INTO `cadastro-profissional` (`nome`, `senha`, `email`, `telefone`, `Id`) VALUES
('eduarda', '123123', 'ahwrwaiu@gmail.com', '19888273', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipo-servico`
--

CREATE TABLE `tipo-servico` (
  `id` int(10) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `area` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro-cliente`
--
ALTER TABLE `cadastro-cliente`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cadastro-profissional`
--
ALTER TABLE `cadastro-profissional`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tipo-servico`
--
ALTER TABLE `tipo-servico`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro-cliente`
--
ALTER TABLE `cadastro-cliente`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cadastro-profissional`
--
ALTER TABLE `cadastro-profissional`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tipo-servico`
--
ALTER TABLE `tipo-servico`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
