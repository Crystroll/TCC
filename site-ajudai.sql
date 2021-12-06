-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Dez-2021 às 15:01
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `site-ajudai`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo-servico`
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
-- Estrutura da tabela `trabalho`
--

CREATE TABLE `trabalho` (
  `Id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `tipo_servico` int(2) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `thumb` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `trabalho`
--

INSERT INTO `trabalho` (`Id`, `nome`, `descricao`, `tipo_servico`, `Id_usuario`, `data_criacao`, `thumb`) VALUES
(27, 'Exemplo de trabalho 1', 'Aqui o usuário coloca um descrição simples de seu trabalho.', 1, 0, '2021-12-06 03:13:36', '../TCC/images_products/e2601e1456ca8a66d54deee28533e04d.png'),
(28, 'Pedro Pinturas', 'Eu sei pintar paredes muito bem!\r\nUm dos melhores preços da cidade.', 1, 0, '2021-12-06 03:15:23', '../TCC/images_products/e376d7e8f355cf988e243bde14ccd773.png'),
(29, 'Pedreiro Paulo', 'Qualquer tipo de construção é comigo!', 1, 0, '2021-12-06 03:17:53', '../TCC/images_products/223c46edf46708e2261896fb694349de.png'),
(30, 'trab1', 'tra1 desc', 1, 0, '2021-12-06 12:39:28', '../TCC/images_products/489f744ffe0051bef7e88ce9cda8a18f.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
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
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Id`, `nome`, `email`, `senha`, `telefone`, `pix`) VALUES
(1, 'aaaa', '123@gmail.com', '202cb962ac59075b964b07152d234b70', 123, NULL),
(2, 's', 's@gmail.com', '202cb962ac59075b964b07152d234b70', 0, NULL),
(3, '123', '123@gmail.com', '202cb962ac59075b964b07152d234b70', 0, NULL),
(4, '1111111', '1111@g.com', '7fa8282ad93047a4d6fe6111c93b308a', 11111, NULL),
(5, 'Raquel Rubio de Souza ', '1234@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 123, NULL),
(6, 'ladno', '123@g', 'd41d8cd98f00b204e9800998ecf8427e', 123, NULL),
(7, '11', '1234444@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 123, NULL),
(8, 'cadas', '123123@g', 'd41d8cd98f00b204e9800998ecf8427e', 123, NULL),
(9, 'cadas2', '1234@g', 'd41d8cd98f00b204e9800998ecf8427e', 0, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tipo-servico`
--
ALTER TABLE `tipo-servico`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `trabalho`
--
ALTER TABLE `trabalho`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tipo-servico`
--
ALTER TABLE `tipo-servico`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `trabalho`
--
ALTER TABLE `trabalho`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
