-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Nov-2018 às 15:15
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formacao`
--

CREATE TABLE `formacao` (
  `idFormacao` int(20) NOT NULL,
  `nomeDono` varchar(20) NOT NULL,
  `nivel` varchar(30) NOT NULL,
  `instituicao` varchar(100) NOT NULL,
  `curso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `formacao`
--

INSERT INTO `formacao` (`idFormacao`, `nomeDono`, `nivel`, `instituicao`, `curso`) VALUES
(1, 'hd', 'TECNICO', 'ETEC JARAGUA', 'INFORMATICA PARA INTERNET'),
(2, 'fulano', 'DOUTORADO', 'FACULDADE DAS AMERICAS', 'CIENCIA DA COMPUTAÇÃO'),
(3, 'juninhoBacana', 'TECNICO', 'ETEC JARAGUA', 'DESENVOLVIMENTO'),
(4, 'jessica', 'TECNICO', 'ETEC JARAGUA', 'INFORMATICA PARA INTERNET'),
(5, 'jhenny', 'TECNICO', 'ETEC JARAGUA', 'INFORMATICA PARA INTERNET'),
(6, 'vinicios', 'TECNICO', 'ETEC JARAGUA', 'INFORMATICA PARA INTERNET'),
(7, 'preta', 'DOUTORADO', 'MACKENZIE', 'MEDICINA'),
(8, 'jessica', 'TECNICO', 'ETEC JARAGUA', 'INFORMATICA PARA INTERNET'),
(9, 'fufulano', 'DOUTORADO', 'FAM', 'ANALISE E DESENVOLVIMENTO DE SISTEMAS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formacao`
--
ALTER TABLE `formacao`
  ADD PRIMARY KEY (`idFormacao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formacao`
--
ALTER TABLE `formacao`
  MODIFY `idFormacao` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
