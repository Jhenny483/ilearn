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
-- Estrutura da tabela `publicacao`
--

CREATE TABLE `publicacao` (
  `idPublicacao` int(11) NOT NULL,
  `idUsuarioPublicacao` int(11) NOT NULL,
  `textoPublicacao` varchar(5000) NOT NULL,
  `dataPublicacao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `publicacao`
--

INSERT INTO `publicacao` (`idPublicacao`, `idUsuarioPublicacao`, `textoPublicacao`, `dataPublicacao`) VALUES
(136, 153, 'oi pessoal', '0000-00-00 00:00:00'),
(137, 152, 'chjsdghfd', '0000-00-00 00:00:00'),
(138, 154, 'oi pessoal', '0000-00-00 00:00:00'),
(139, 154, 'AI MEU DEUS QUE MEDO DE APRESENTAR NAO QUERO NAO \r\n', '0000-00-00 00:00:00'),
(140, 153, 'Boa noite, avaliem com carinho', '0000-00-00 00:00:00'),
(141, 152, 'ABC\r\n', '0000-00-00 00:00:00'),
(142, 157, 'oi gente', '0000-00-00 00:00:00'),
(143, 158, 'Avaliem com carinho', '0000-00-00 00:00:00'),
(145, 159, 'e ai povo\r\n', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `publicacao`
--
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`idPublicacao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `publicacao`
--
ALTER TABLE `publicacao`
  MODIFY `idPublicacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
