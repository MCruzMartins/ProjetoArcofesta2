-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Fev-2023 às 01:30
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
('05841983709', 'Marina', '0000-00-00', '21972122211', 'prof.marina.geo@gmail.com', '123'),
('59848448', 'gabi', '2000-01-01', '21971165408', 'gabi@gmail.com', '$2y$10$CjNBT1N5Kh4mJ2zrLmC7x.F0wWaLHW.PVHaOTEscfiW1hJ374NXyO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

CREATE TABLE `contrato` (
  `Númerocontrato` int(11) NOT NULL,
  `Dataevento` date NOT NULL,
  `preco` double NOT NULL,
  `Tipoevento` varchar(15) NOT NULL,
  `cep` char(9) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(40) NOT NULL,
  `idcolaborador` int(11) NOT NULL,
  `cpf` char(12) NOT NULL,
  `cor_uniforme` varchar(40) NOT NULL,
  `Tempo_evento` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contrato`
--

INSERT INTO `contrato` (`Númerocontrato`, `Dataevento`, `preco`, `Tipoevento`, `cep`, `numero`, `complemento`, `idcolaborador`, `cpf`, `cor_uniforme`, `Tempo_evento`) VALUES
(1, '2023-02-28', 600, '15 anos', '23085-610', 35, 'casa', 1, '59848448', 'vermelho', '4 horas'),
(2, '2023-02-15', 400, 'casamento', '23020660', 135, 'casa', 1, '05841983709', 'preto', '4 horas'),
(3, '2023-02-10', 600, 'festa de 1 ano', '28435974', 24, 'casa', 1, '59848448', 'branco', '4 horas');

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
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idcolaborador`, `nome`, `telefone`, `cep`, `email`, `função`, `senha`, `pix`, `cpf`, `foto`) VALUES
(1, 'Jhon Lennon Ribeiro', '21981454753', '23058002', 'jlennon1989.jrl@gmail.com', 'garçom', '$2y$10$t6govEFTvUipx.2fxo.RtedIu4DNbpezQAoVLcOeNqteNDLOlQz72', '12345678910', '123456789', 'foto/jhon.jpg');

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
  ADD PRIMARY KEY (`Númerocontrato`),
  ADD KEY `cpf` (`cpf`),
  ADD KEY `idcolaborador` (`idcolaborador`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idcolaborador`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contrato`
--
ALTER TABLE `contrato`
  MODIFY `Númerocontrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idcolaborador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`cpf`) REFERENCES `cliente` (`Cpf`),
  ADD CONSTRAINT `contrato_ibfk_2` FOREIGN KEY (`idcolaborador`) REFERENCES `funcionario` (`idcolaborador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
