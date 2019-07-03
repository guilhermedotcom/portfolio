-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Jul-2019 às 19:25
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
-- Database: `bd_postgram`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_comments`
--

CREATE TABLE `tb_comments` (
  `id_comment` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_comments`
--

INSERT INTO `tb_comments` (`id_comment`, `id_post`, `id_user`, `comment`, `date_time`) VALUES
(27, 42, 12, 'Realmente o povo nÃ£o quer sair de casa mesmo deve ser o frio de curitiba!', '2019-07-03 02:46:16'),
(28, 43, 12, 'Meu deus hein! que carÃªncia kkkkkkk...', '2019-07-03 02:46:44'),
(29, 42, 13, 'Nem chama mais os amigos para sair! Mancada hein...', '2019-07-03 02:52:40'),
(30, 43, 13, 'KKKKKKKKKKKKKK caramba @ZÃ©zinho nÃ£o perdoa mesmo!', '2019-07-03 02:53:14'),
(31, 44, 13, 'Era pra ser engraÃ§ado???? Se foi essa a intenÃ§Ã£o falhou miseravelmente!', '2019-07-03 02:53:56'),
(32, 45, 13, 'Pow @ZÃ©zinho vai dormir velho olha a mÃºsica que tu ta escutando essas horas!', '2019-07-03 02:54:27'),
(33, 42, 14, 'Eu ia publicar isso agora o povo nÃ£o ta afim de sair... vou jogar meu play 2 de boa aqui!', '2019-07-03 15:35:34'),
(41, 47, 14, 'KKKKKKKKKKKKKKKKKK os cara nÃ£o perdoa.', '2019-07-03 16:16:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_posts`
--

CREATE TABLE `tb_posts` (
  `id_post` int(60) NOT NULL,
  `post` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `id_userfk` int(60) NOT NULL,
  `data_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_posts`
--

INSERT INTO `tb_posts` (`id_post`, `post`, `id_userfk`, `data_time`) VALUES
(42, 'Nossa nÃ£o tem ninguÃ©m querendo sair nessa cidade nÃ£o??? O jeito vai ser assistir um Netflix mesmo!', 11, '2019-07-03 15:28:41'),
(43, 'Uma droga ficar sozinho em casa bate aquela saudade da morena. :/', 11, '2019-07-03 15:28:41'),
(44, 'Porque o pinheiro nÃ£o se perde na floresta??? Porque ele tem uma pinha!!! HAHAHAHAHAHAHA', 12, '2019-07-03 15:28:41'),
(45, 'Doente de amor, procurei remÃ©dio na vida noturna\r\nCom a flor da noite em uma boate aqui na zona sul\r\nA dor do amor Ã© com outro amor que a gente cura\r\nVim curar a dor desse mal de amor na boate azul!', 12, '2019-07-03 15:28:41'),
(46, 'VocÃª fica um tempo sem usar rede social e o pessoal esquece que a gente existe!', 13, '2019-07-03 15:28:41'),
(47, 'o cara que invento o casamento o casamento era muito louco tipo te amo tanto que  quero envolver deus e o governo', 13, '2019-07-03 15:31:15'),
(50, '\"nossa quanto tempo a gente nao se fala\" sim por favor nao estrague isso\r\n\r\n', 14, '2019-07-03 16:17:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `username`, `password`, `email`) VALUES
(11, 'JoÃ£ozinho', '1234', 'joaozinho@gmail.com'),
(12, 'ZÃ©zinho', '1234', 'zezinho@gmail.com'),
(13, 'Pedrinho', '1234', 'pedrinho@gmail.com'),
(14, 'Lukinhas', '1234', 'lukinhas@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_comments`
--
ALTER TABLE `tb_comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `tb_posts`
--
ALTER TABLE `tb_posts`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_comments`
--
ALTER TABLE `tb_comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tb_posts`
--
ALTER TABLE `tb_posts`
  MODIFY `id_post` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
