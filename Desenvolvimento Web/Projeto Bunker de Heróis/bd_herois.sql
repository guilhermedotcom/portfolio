-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Jun-2019 às 18:39
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
-- Database: `bd_herois`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_herois`
--

CREATE TABLE `tb_herois` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `universo` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `poder` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `vilao` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `id_userfk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_herois`
--

INSERT INTO `tb_herois` (`id`, `nome`, `universo`, `poder`, `vilao`, `id_userfk`) VALUES
(16, 'Luke Skywalker', 'Star Wars', 'Sabre de Luz', 'Darth Vader', 18),
(17, 'Chewbacca', 'Star Wars', 'Besta laser', 'Darth Vader', 18),
(18, 'Spider-Man', 'Marvel', 'Maximus Spider', 'Dr. Octopus', 18),
(19, 'Ryu', 'CAPCOM', 'Hadouken', 'Bison', 17),
(20, 'L', 'Anime', 'InteligÃªncia', 'Kira (Light Yagami)', 17),
(21, 'Meliodas', 'Anime', 'Imortal (DemÃ´nio)', 'Zeldris', 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `username`, `password`, `email`) VALUES
(17, 'admin', 'admin', 'adm@adm.net'),
(18, 'guilherme', 'guiju3266', 'guilhermerck@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_herois`
--
ALTER TABLE `tb_herois`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_herois`
--
ALTER TABLE `tb_herois`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
