-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 16-Maio-2022 às 20:24
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lancheria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `cod` int(11) NOT NULL,
  `data_hora` datetime DEFAULT NULL,
  `ingredientes` text DEFAULT NULL,
  `qtde` int(11) DEFAULT NULL,
  `pgto` varchar(20) DEFAULT NULL,
  `entrega` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`cod`, `data_hora`, `ingredientes`, `qtde`, `pgto`, `entrega`) VALUES
(2, '2022-05-11 15:44:10', 'Pão, Queijo, Ovo', 1, 'Cartão', 'Viamar'),
(4, '2022-04-03 14:54:25', 'Pão, Maionese, Batata palha', 4, 'Pix', 'Paraná'),
(6, '2022-05-11 15:44:10', 'Pão, Queijo, Ovo', 1, 'Cartão', 'Viamar'),
(7, '2022-10-01 10:24:02', 'Pão, Guizado', 2, 'Boleto', 'Porto Alegre'),
(8, '2022-04-03 14:54:25', 'Pão, Maionese, Batata palha', 4, 'Pix', 'Paraná'),
(9, '2022-06-06 18:17:44', 'Pão, Margarina, Patê', 3, 'Grana', 'Cafundó');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cod` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod`, `nome`, `email`, `senha`) VALUES
(1, 'Paulo', 'paulo@ig.net', 'senha1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
