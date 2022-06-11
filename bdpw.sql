-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jun-2022 às 18:33
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdpw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `codfune`
--

CREATE TABLE `codfune` (
  `codfun` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `dpt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `codfune`
--

INSERT INTO `codfune` (`codfun`, `nome`, `dpt`) VALUES
(3, 'Jorge', 5),
(4, 'Olavo', 3),
(5, 'Jotinha', 5),
(6, 'Henrique', 7),
(7, 'Luiz', 4),
(8, 'Gustavo', 3),
(9, 'Isaac Newton', 2),
(10, 'Pedrinho Curter', 6),
(11, 'Pedrinho Jorge', 7),
(12, 'Pedro Croncor', 3),
(13, 'Jorge Amado', 2),
(14, 'Cabral Intersenction', 5),
(16, 'Igor', 6),
(17, 'Matheus', 5),
(18, 'Rodrigo', 5),
(19, 'Ricardo', 2),
(20, 'Ribeirinho', 7),
(23, 'Pedro George', 2),
(24, 'Pedrinho massa', 1),
(27, 'Pedro George Gomes', 2),
(28, 'Luizelson', 4),
(29, 'Pedro guimaraes', 2),
(32, 'João de Oliveira', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_cargos`
--

CREATE TABLE `tab_cargos` (
  `cod` int(3) NOT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `salario` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tab_cargos`
--

INSERT INTO `tab_cargos` (`cod`, `cargo`, `salario`) VALUES
(1, 'ADM', 6800.5),
(2, 'TI', 1100.9),
(3, 'Gerente', 3000),
(4, 'Gestor', 5000),
(5, 'Marketing', 1500),
(6, 'RH', 2500),
(7, 'Faxineiro', 1200),
(8, 'Rapaz do Café', 1200),
(9, 'Auxiliar Administrativo', 5000);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `codfune`
--
ALTER TABLE `codfune`
  ADD PRIMARY KEY (`codfun`),
  ADD KEY `dpt` (`dpt`);

--
-- Índices para tabela `tab_cargos`
--
ALTER TABLE `tab_cargos`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `codfune`
--
ALTER TABLE `codfune`
  MODIFY `codfun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `tab_cargos`
--
ALTER TABLE `tab_cargos`
  MODIFY `cod` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `codfune`
--
ALTER TABLE `codfune`
  ADD CONSTRAINT `codfune_ibfk_1` FOREIGN KEY (`dpt`) REFERENCES `tab_cargos` (`cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
