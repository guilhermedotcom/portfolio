-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Jun-2019 às 21:00
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_filmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_filmes`
--

CREATE TABLE `tb_filmes` (
  `id_filme` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `ano` int(11) NOT NULL,
  `diretor` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `estudio` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_filmes`
--

INSERT INTO `tb_filmes` (`id_filme`, `titulo`, `genero`, `ano`, `diretor`, `estudio`) VALUES
(11, 'Os Vingadores', 'AÃ§Ã£o', 2012, 'Joss Whedon', 'Marvel EstÃºdios'),
(12, 'Batman: O Cavaleiro das Trevas', 'AÃ§Ã£o', 2008, 'Christopher Nolan', 'DC Comics'),
(13, 'Esqueceram de Mim', 'ComÃ©dia', 1990, 'Chris Columbus', '20th Century Fox'),
(16, 'De Volta Para o Futuro', 'FicÃ§Ã£o CiÃªntifica', 1985, 'Robert Zemeckis', 'Universal Studios'),
(17, 'De Volta Para o Futuro', 'FicÃ§Ã£o CiÃªntifica', 1985, 'Robert Zemeckis', 'Universal Studios'),
(18, ' Guerra nas Estrelas: O ImpÃ©rio Contra-Ataca', 'FicÃ§Ã£o CiÃªntifica', 1980, 'Irvin Kershner', 'Lucasfilm'),
(19, 'Na Natureza Selvagem', 'Aventura', 2008, 'Sean Penn', 'Paramount Vantage');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_filmes`
--
ALTER TABLE `tb_filmes`
  ADD PRIMARY KEY (`id_filme`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_filmes`
--
ALTER TABLE `tb_filmes`
  MODIFY `id_filme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
