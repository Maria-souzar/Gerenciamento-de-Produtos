-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 14-Set-2026 às 22:54
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `sistema_produto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sistema_produtos`
--

CREATE TABLE IF NOT EXISTS `sistema_produtos` (
  `produtos` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `valorCompra` decimal(10,2) NOT NULL,
  `valorVenda` decimal(10,2) NOT NULL,
  `estoque` int(11) NOT NULL,
  PRIMARY KEY (`produtos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `sistema_produtos`
--

INSERT INTO `sistema_produtos` (`produtos`, `descricao`, `categoria`, `valorCompra`, `valorVenda`, `estoque`) VALUES
(2, 'celular poco m5', 'tecnologia', '1200.00', '1800.00', 5),
(3, 'notebook acer aspire 15', 'tecnologia', '3000.00', '4200.00', 2),
(4, 'pc gamer', 'tecnologia', '3000.00', '5000.00', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
