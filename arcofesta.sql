-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Fev-2023 às 23:40
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `arcofesta`
--
CREATE DATABASE IF NOT EXISTS `arcofesta` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `arcofesta`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `idcolaborador` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `funcao` varchar(30) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `precohora` double NOT NULL,
  `tempoevento` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `Cpf` char(12) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `Nascimento` date NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`Cpf`, `nome`, `Nascimento`, `telefone`, `email`, `senha`) VALUES
('05841983711', 'Marina Cruz', '1990-08-18', '21971165408', 'arcofesta.festa@gmail.com', '$2y$10$lkij7uFtIr6KJxm3JbLRouK8YaxZ9H5KTa.clPMySte0l7SG.oPym');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

CREATE TABLE `contrato` (
  `Numerocontrato` int(11) NOT NULL,
  `Dataevento` date NOT NULL,
  `preco` double NOT NULL,
  `Tipoevento` varchar(15) NOT NULL,
  `cep` char(9) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(40) NOT NULL,
  `cpf` char(12) NOT NULL,
  `Tempo_evento` varchar(9) NOT NULL,
  `nomerecep` varchar(60) NOT NULL,
  `telrecep` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contrato`
--

INSERT INTO `contrato` (`Numerocontrato`, `Dataevento`, `preco`, `Tipoevento`, `cep`, `numero`, `complemento`, `cpf`, `Tempo_evento`, `nomerecep`, `telrecep`) VALUES
(1, '2023-03-02', 950, '15 anos', '23085610', 31, '31', '05841983711', '5', 'maria', '21988691066'),
(2, '2023-03-02', 950, '15 anos', '23085610', 31, '31', '05841983711', '5', 'maria', '21988691066'),
(3, '2023-03-02', 950, '15 anos', '23085610', 31, '31', '05841983711', '5', 'maria', '21988691066'),
(4, '2023-03-31', 1325, '15 anos', '23085-610', 100, 'galpão', '05841983711', '5', 'antonio', '21545454'),
(5, '2023-03-02', 125, '15 anos', '23085-610', 40, 'salão', '05841983711', '5', 'marina', '245454'),
(6, '2023-02-20', 750, '15 anos', '23033090', 3, 'ja sei', '05841983711', '5', 'vania', 'jose');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idcolaborador` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cep` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `função` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `pix` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `precohora` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idcolaborador`, `nome`, `telefone`, `cep`, `email`, `função`, `senha`, `pix`, `cpf`, `foto`, `precohora`) VALUES
(1, 'Jhon Lennon Ribeiro', '21981454753', '23058002', 'jlennon1989.jrl@gmail.com', 'garçom', '$2y$10$lkij7uFtIr6KJxm3JbLRouK8YaxZ9H5KTa.clPMySte0l7SG.oPym', '12345678910', '123456789', 'foto\\Jhon.jpg', 25),
(2, 'Maria Jariele', '21981454753', '23058002', 'marial@gmail.com', 'garçom', '$2y$10$lkij7uFtIr6KJxm3JbLRouK8YaxZ9H5KTa.clPMySte0l7SG.oPym', '12345678910', '123456789', 'foto\\maria.png', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE `item` (
  `iditem` int(11) NOT NULL,
  `idcolaborador` int(11) NOT NULL,
  `Numerocontrato` int(11) NOT NULL,
  `preco` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `item`
--

INSERT INTO `item` (`iditem`, `idcolaborador`, `Numerocontrato`, `preco`) VALUES
(1, 1, 2, 950),
(2, 1, 3, 950),
(3, 1, 3, 950),
(4, 1, 3, 950),
(5, 2, 3, 950),
(6, 2, 3, 950),
(7, 2, 3, 950),
(8, 2, 3, 950),
(9, 2, 3, 950),
(10, 2, 3, 950),
(11, 2, 3, 950),
(12, 1, 4, 1325),
(13, 1, 4, 1325),
(14, 1, 4, 1325),
(15, 2, 4, 1325),
(16, 2, 4, 1325),
(17, 2, 4, 1325),
(18, 2, 4, 1325),
(19, 2, 4, 1325),
(20, 2, 4, 1325),
(21, 2, 4, 1325),
(22, 2, 4, 1325),
(23, 2, 4, 1325),
(24, 2, 5, 125),
(25, 2, 6, 750),
(26, 2, 6, 750),
(27, 2, 6, 750),
(28, 2, 6, 750),
(29, 2, 6, 750),
(30, 2, 6, 750);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Cpf`);

--
-- Índices para tabela `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`Numerocontrato`),
  ADD KEY `cpf` (`cpf`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idcolaborador`);

--
-- Índices para tabela `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`iditem`),
  ADD KEY `idcolaborador` (`idcolaborador`),
  ADD KEY `Numerocontrato` (`Numerocontrato`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contrato`
--
ALTER TABLE `contrato`
  MODIFY `Numerocontrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idcolaborador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `item`
--
ALTER TABLE `item`
  MODIFY `iditem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`cpf`) REFERENCES `cliente` (`Cpf`);

--
-- Limitadores para a tabela `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`idcolaborador`) REFERENCES `funcionario` (`idcolaborador`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`Numerocontrato`) REFERENCES `contrato` (`Numerocontrato`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
