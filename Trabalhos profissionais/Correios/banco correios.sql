-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Mar-2019 às 20:35
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `correios`
--
CREATE DATABASE IF NOT EXISTS `correios` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `correios`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `ID_pessoas` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero_carta` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabela para cadastro de Cartas';

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`ID_pessoas`, `nome`, `numero_carta`, `data`) VALUES
(4, 'Paulinho Aguiar', 131324, '2019-03-25'),
(5, 'sadsadasd', 131325, '2019-03-25'),
(6, 'dasdsada', 131326, '2019-03-25'),
(7, 'ewqeqwe', 131327, '2019-03-25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sedex`
--

CREATE TABLE `sedex` (
  `ID_sedex` int(11) NOT NULL,
  `nome_remetente` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nome_destinatario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_rastreio` int(11) NOT NULL,
  `data_entrada` date NOT NULL,
  `tipo_carta` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sedex`
--

INSERT INTO `sedex` (`ID_sedex`, `nome_remetente`, `nome_destinatario`, `codigo_rastreio`, `data_entrada`, `tipo_carta`) VALUES
(2, 'dsadasd', 'asdasdas', 1, '2019-03-25', 'da'),
(3, 'dsadasd', 'sadasd', 0, '2019-03-25', 'adas'),
(4, 'dsadasd', 'asd', 0, '2019-03-25', 'sadsa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID_usuario` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `local` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID_usuario`, `usuario`, `senha`, `local`) VALUES
(1, 'administrador', 'Skavursk@', 'base');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`ID_pessoas`);

--
-- Indexes for table `sedex`
--
ALTER TABLE `sedex`
  ADD PRIMARY KEY (`ID_sedex`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `ID_pessoas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sedex`
--
ALTER TABLE `sedex`
  MODIFY `ID_sedex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
