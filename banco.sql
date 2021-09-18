-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Set-2021 às 00:47
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `c_login`
--

CREATE TABLE `c_login` (
  `id_login` int(5) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `c_login`
--

INSERT INTO `c_login` (`id_login`, `nome`, `senha`, `email`) VALUES
(3, 'a1', '123', 'a@1'),
(4, 'a2', '1234', 'a@2'),
(5, 'a3', '12345', 'a@3'),
(6, 'pizza', 'pizza', 'pi@zza'),
(8, 'dd', '123', 'aa@aa'),
(11, 'aaa', '1233', 'a@2'),
(14, 'dani', '1997', 'dani@97'),
(21, 'casa', '3376', 'ca@sa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja`
--

CREATE TABLE `loja` (
  `loja_id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `senha` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `loja`
--

INSERT INTO `loja` (`loja_id`, `nome`, `senha`) VALUES
(1, 'king', 111),
(2, 'dani', 123),
(3, 'nadi', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `produto_id` int(11) NOT NULL,
  `item` varchar(60) NOT NULL,
  `preco` int(10) NOT NULL,
  `loja_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`produto_id`, `item`, `preco`, `loja_id`) VALUES
(2, 'açai', 40, 1),
(4, 'agua', 1, 1),
(8, 'coca', 5, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `c_login`
--
ALTER TABLE `c_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Índices para tabela `loja`
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`loja_id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`produto_id`),
  ADD KEY `pessoa_id_fk` (`loja_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `c_login`
--
ALTER TABLE `c_login`
  MODIFY `id_login` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `loja`
--
ALTER TABLE `loja`
  MODIFY `loja_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `produto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `pessoa_id_fk` FOREIGN KEY (`loja_id`) REFERENCES `loja` (`loja_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
