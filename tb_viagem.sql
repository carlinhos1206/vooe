-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Nov-2022 às 21:20
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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_viagem`
--

INSERT INTO `tb_viagem` (`codigo`, `local`, `data`, `preco`, `foto`) VALUES
(14, 'Mato Grosso 02', '2022-11-04', '50000', 'imgs/cb493bad63d8857caf86165cabf73482.jpg'),
(13, 'euuuuu', '', '2005', 'imgs/a281b9c55b44c243673953be9778ee58.jpg'),
(15, 'Carlos Emanoel', '2023-01-27', '2000', 'imgs/2fd12a257770a5bc856a76f963849334.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
