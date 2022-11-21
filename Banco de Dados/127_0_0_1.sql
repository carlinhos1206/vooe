-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Nov-2022 às 17:10
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_cadastro`
--
CREATE DATABASE IF NOT EXISTS `bd_cadastro` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bd_cadastro`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro`
--

DROP TABLE IF EXISTS `tb_cadastro`;
CREATE TABLE IF NOT EXISTS `tb_cadastro` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_cadastro`
--

INSERT INTO `tb_cadastro` (`codigo`, `nome`, `email`, `cpf`, `funcao`, `senha`) VALUES
(8, 'gustavo', 'gustavo@gmail.com', '111', 'cli', '202cb962ac59075b964b07152d234b70'),
(7, 'vitor', 'hugo@01.com', '12212', 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_viagem`
--

DROP TABLE IF EXISTS `tb_viagem`;
CREATE TABLE IF NOT EXISTS `tb_viagem` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `local` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `preco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_viagem`
--

INSERT INTO `tb_viagem` (`codigo`, `local`, `data`, `preco`, `foto`) VALUES
(20, 'Rua', '2022-11-30', '12', 'img-viagem/70a57748a426330dec2616137d603d8a.jpg'),
(21, 'Pablo Vittar', '2022-11-30', '1500', 'img-viagem/ed1d24b916c7ee278f17ba0ba0151845.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
