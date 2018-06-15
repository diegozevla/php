-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 14-Jun-2018 às 21:41
-- Versão do servidor: 10.0.32-MariaDB-0+deb8u1
-- PHP Version: 5.6.33-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `formulario_teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(2) NOT NULL,
  `codigo` varchar(2) NOT NULL,
  `nome` varchar(19) NOT NULL,
  `timezone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id`, `codigo`, `nome`, `timezone`) VALUES
(1, 'AC', 'Acre', 'America/Rio_Branco'),
(2, 'AL', 'Alagoas', 'America/Maceio'),
(3, 'AP', 'Amapá', 'America/Belem'),
(4, 'AM', 'Amazonas', ''),
(5, 'BA', 'Bahia', 'America/Bahia'),
(6, 'CE', 'Ceará', 'America/Fortaleza'),
(7, 'DF', 'Distrito Federal', 'America/Sao_Paulo'),
(8, 'ES', 'Espírito Santo', 'America/Sao_Paulo'),
(9, 'GO', 'Goiás', 'America/Sao_Paulo'),
(10, 'MA', 'Maranhão', 'America/Fortaleza'),
(11, 'MT', 'Mato Grosso', 'America/Cuiaba'),
(12, 'MS', 'Mato Grosso do Sul', 'America/Campo_Grande'),
(13, 'MG', 'Minas Gerais', 'America/Sao_Paulo'),
(14, 'PA', 'Pará', ''),
(15, 'PB', 'Paraíba', 'America/Fortaleza'),
(16, 'PR', 'Paraná', 'America/Sao_Paulo'),
(17, 'PE', 'Pernambuco', 'America/Recife'),
(18, 'PI', 'Piauí', 'America/Fortaleza'),
(19, 'RJ', 'Rio de Janeiro', 'America/Sao_Paulo'),
(20, 'RN', 'Rio Grande do Norte', 'America/Fortaleza'),
(21, 'RS', 'Rio Grande do Sul', 'America/Sao_Paulo'),
(22, 'RO', 'Rondônia', 'America/Porto_Velho'),
(23, 'SC', 'Santa Catarina', 'America/Sao_Paulo'),
(24, 'SP', 'São Paulo', 'America/Sao_Paulo'),
(25, 'SE', 'Sergipe', 'America/Maceio'),
(26, 'TO', 'Tocantins', 'America/Araguaina');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
