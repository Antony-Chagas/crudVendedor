-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Set-2023 às 14:49
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vendas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `value` double NOT NULL,
  `id_saller` int(11) NOT NULL,
  `commission` double NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `value`, `id_saller`, `commission`, `created_at`, `updated_at`) VALUES
(1, 200, 1, 17, '2023-09-07 23:11:03', '2023-09-07 23:11:03'),
(3, 100, 1, 0, '2023-09-07 23:11:03', '2023-09-07 23:11:03'),
(4, 300, 1, 25.5, '2023-09-07 23:11:03', '2023-09-07 23:11:03'),
(5, 300, 1, 25.5, '2023-09-07 23:11:03', '2023-09-07 23:11:03'),
(6, 250, 1, 0, '2023-09-07 23:11:03', '2023-09-07 23:11:03'),
(7, 300, 1, 25.5, '2023-09-07 23:11:03', '2023-09-07 23:11:03'),
(8, 350, 1, 29.75, '2023-09-07 23:11:03', '2023-09-07 23:11:03'),
(9, 350, 1, 29.75, '2023-09-07 23:11:03', '2023-09-08 17:25:43'),
(17, 200, 1, 17, '2023-09-07 23:11:03', '2023-09-07 23:11:03'),
(18, 200, 1, 17, '2023-09-07 23:11:03', '2023-09-07 23:11:03'),
(19, 200, 1, 17, '2023-09-07 23:11:03', '2023-09-07 23:11:03'),
(20, 200, 1, 17, '2023-09-07 23:11:03', '2023-09-07 23:11:03'),
(21, 500, 1, 42.5, '2023-09-07 23:11:03', '2023-09-07 23:11:03'),
(22, 500, 1, 42.5, '2023-09-08 04:11:51', '2023-09-08 04:11:51'),
(23, 500, 1, 42.5, '2023-09-08 04:13:43', '2023-09-08 04:13:43'),
(24, 500, 1, 42.5, '2023-09-08 04:17:33', '2023-09-08 04:17:33'),
(25, 500, 1, 42.5, '2023-09-08 04:22:49', '2023-09-08 04:22:49'),
(26, 500, 1, 42.5, '2023-09-08 04:29:45', '2023-09-08 04:29:45'),
(27, 500, 1, 42.5, '2023-09-08 05:30:44', '2023-09-08 05:30:44'),
(28, 500, 5, 42.5, '2023-09-08 17:24:19', '2023-09-08 17:24:19'),
(29, 500, 5, 42.5, '2023-09-08 17:25:02', '2023-09-08 17:25:02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`id`, `name`, `email`) VALUES
(1, 'Antony Chagas', 'antony.tiago556@gmail.com'),
(5, 'Samuel Chagas', 'samuel.chagas@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
