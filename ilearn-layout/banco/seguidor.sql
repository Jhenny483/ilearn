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
-- Estrutura da tabela `seguidor`
--

CREATE TABLE `seguidor` (
  `idSeg` int(11) NOT NULL,
  `idSeguido` int(10) NOT NULL,
  `idSeguidor` int(10) NOT NULL,
  `nicknameSeguido` varchar(100) NOT NULL,
  `nicknameSeguidor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `seguidor`
--

INSERT INTO `seguidor` (`idSeg`, `idSeguido`, `idSeguidor`, `nicknameSeguido`, `nicknameSeguidor`) VALUES
(103, 152, 153, 'fulano', 'juninhoBacana'),
(104, 156, 153, 'vinicios', 'juninhoBacana'),
(108, 153, 152, 'juninhoBacana', 'fulano'),
(110, 157, 152, 'preta', 'fulano'),
(114, 156, 155, 'vinicios', 'jhenny'),
(116, 153, 159, 'juninhoBacana', 'fufulano');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seguidor`
--
ALTER TABLE `seguidor`
  ADD PRIMARY KEY (`idSeg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seguidor`
--
ALTER TABLE `seguidor`
  MODIFY `idSeg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
