-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Mar-2021 às 11:41
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rickandmorty`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `personagem`
--

CREATE TABLE `personagem` (
  `id` int(25) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `specie` varchar(25) NOT NULL,
  `gender` varchar(25) DEFAULT NULL,
  `image` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `personagem`
--

INSERT INTO `personagem` (`id`, `nome`, `status`, `specie`, `gender`, `image`) VALUES
(2, 'Morty Smith', 'Alive', 'Human', 'Male', 0),
(3, 'Summer Smith', 'Alive', 'Human', 'Female', 0),
(8, 'Adjudicator Rick', 'Dead', 'Human', 'Male', 0),
(9, 'Agency Director', 'Dead', 'Human', 'Male', 0),
(12, 'Alexander', 'Dead', 'Human', 'Male', 0),
(13, 'Alien Googah', 'unknown', 'Alien', 'unknown', 0),
(14, 'Alien Morty', 'unknown', 'Alien', 'Male', 0),
(15, 'Alien Rick', 'unknown', 'Alien', 'Male', 0),
(16, 'Amish Cyborg', 'Dead', 'Alien', 'Male', 0),
(17, 'Annie', 'Alive', 'Human', 'Female', 0),
(18, 'Antenna Morty', 'Alive', 'Human', 'Male', 0),
(19, 'Antenna Rick', 'unknown', 'Human', 'Male', 0),
(20, 'Ants in my Eyes Johnson', 'unknown', 'Human', 'Male', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `personagem`
--
ALTER TABLE `personagem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `personagem`
--
ALTER TABLE `personagem`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6186;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
