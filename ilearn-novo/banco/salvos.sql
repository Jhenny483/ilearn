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
-- Estrutura da tabela `salvos`
--

CREATE TABLE `salvos` (
  `idSalvo` int(11) NOT NULL,
  `textoSalvo` longtext NOT NULL,
  `usuarioSalvo` varchar(100) NOT NULL,
  `idPublicacao` varchar(20) NOT NULL,
  `idUsuarioPub` varchar(10) NOT NULL,
  `idPerfil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `salvos`
--

INSERT INTO `salvos` (`idSalvo`, `textoSalvo`, `usuarioSalvo`, `idPublicacao`, `idUsuarioPub`, `idPerfil`) VALUES
(162, 'chjsdghfd ', 'fulano', '137 ', '152', '152'),
(164, 'AI MEU DEUS QUE MEDO DE APRESENTAR NAO QUERO NAO  ', 'jessica', '139 ', '154', '154'),
(165, 'Boa noite, avaliem com carinho ', 'juninhoBacana', '140 ', '153', '153');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `salvos`
--
ALTER TABLE `salvos`
  ADD PRIMARY KEY (`idSalvo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `salvos`
--
ALTER TABLE `salvos`
  MODIFY `idSalvo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
