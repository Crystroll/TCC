-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 04:53 AM
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
-- Table structure for table `tipo-servico`
--

CREATE TABLE `tipo-servico` (
  `Id` int(10) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `area` varchar(30) NOT NULL,
  `caminho_imagem` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trabalho`
--

CREATE TABLE `trabalho` (
  `Id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `tipo_servico` int(2) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(256) NOT NULL,
  `telefone` int(11) NOT NULL,
  `pix` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`Id`, `nome`, `email`, `senha`, `telefone`, `pix`) VALUES
(1, 'aaaa', '123@gmail.com', '202cb962ac59075b964b07152d234b70', 123, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tipo-servico`
--
ALTER TABLE `tipo-servico`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `trabalho`
--
ALTER TABLE `trabalho`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tipo-servico`
--
ALTER TABLE `tipo-servico`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trabalho`
--
ALTER TABLE `trabalho`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
