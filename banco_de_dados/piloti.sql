-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Ago-2019 às 14:34
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `piloti`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'ativo',
  `permissao` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `status`, `permissao`) VALUES
(1, 'Henrique', 'admin@piloti.com.br', 'e10adc3949ba59abbe56e057f20f883e', 'ativo', 1),
(5, 'Anderson', 'ander_son@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ativo', 0),
(6, 'André', 'andre@bol.com.br', 'e10adc3949ba59abbe56e057f20f883e', 'ativo', 0),
(7, 'Alessandra', 'alessandra@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'desativado', 0),
(8, 'Dayany 2', 'dayany@yahoo.com.br', 'e10adc3949ba59abbe56e057f20f883e', 'ativo', 0),
(9, 'Verônica', 'veve@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ativo', 0),
(10, 'Laura', 'laurinha@bol.com.br', 'e10adc3949ba59abbe56e057f20f883e', 'ativo', 0),
(11, 'Paulo', 'paulinho@hotmail.com', '25f9e794323b453885f5181f1b624d0b', 'ativo', 0),
(12, 'Testando 2', 'teste@oi.com.br', '81dc9bdb52d04dc20036dbd8313ed055', 'ativo', 0),
(13, 'Henrique', 'teste@teste.com', 'e10adc3949ba59abbe56e057f20f883e', 'desativado', 0),
(14, 'Jonas', 'jonas@teste.com', 'e10adc3949ba59abbe56e057f20f883e', 'ativo', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
