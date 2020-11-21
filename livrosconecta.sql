-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Nov-2019 às 18:52
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `livrosconecta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncios`
--

CREATE TABLE `anuncios` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `anuncios`
--

INSERT INTO `anuncios` (`id`, `id_usuario`, `id_categoria`, `titulo`, `descricao`, `valor`, `estado`) VALUES
(3, 1, 1, 'Inteligência em Vendas', 'Muito bom, aprendi muito com este livro', 10, 1),
(4, 1, 2, 'O bazar dos sonhos ruins', 'Surpreendente', 29, 2),
(5, 1, 4, 'Timão e pumba', 'Divertido, você vai rir', 50, 1),
(6, 1, 4, 'Me before you', 'História de romance emocionante', 0, 1),
(25, 13, 1, 'A Obra', 'Doação', 10, 2),
(26, 13, 1, 'O dia diferente', 'outro livro porém velho', 0, 1),
(27, 14, 4, 'Novo Livro do Teste', 'Este livro solidifica o projeto', 0, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncios_imagens`
--

CREATE TABLE `anuncios_imagens` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_anuncio` int(11) NOT NULL,
  `url` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `anuncios_imagens`
--

INSERT INTO `anuncios_imagens` (`id`, `id_anuncio`, `url`) VALUES
(5, 3, 'ce22b99a632571fc5ff345eafa252a67.jpg'),
(6, 3, 'c38581766dff46f000ae243330ead1a8.jpg'),
(7, 3, 'fe31ef89de0c785c24e2007719241763.jpg'),
(8, 4, 'ef9b88ad9e74cd9b4f1510653da291a2.jpg'),
(18, 15, '519f9b57a79084174caa3f1e65798f36.jpg'),
(19, 18, '409caa1656df55db1b7f4feaa009e012.jpg'),
(20, 19, '01ee373c3dac3c38b12e7d12b4826a3d.jpg'),
(21, 20, 'e934944c4ee8916bc99592913f8d1086.jpg'),
(22, 21, '83128068dcdc98b5b2efbc53c56da27f.jpg'),
(23, 22, '60b6bd5b172bd7439df2c7a685a7ba0f.jpg'),
(24, 23, '8464679637c36ca0617a4d5ed60f39e3.jpg'),
(25, 24, '7dcd681327b0ab5954d2f9422953936c.jpg'),
(26, 25, '567c2fc5f34a46ac8d4564dbf70698db.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Terror'),
(2, 'Ficção cientifica'),
(3, 'Aventura'),
(4, 'Romance');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL DEFAULT '',
  `cpf` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  `senha` varchar(32) NOT NULL DEFAULT '',
  `telefone` varchar(30) DEFAULT NULL,
  `celular` varchar(20) NOT NULL,
  `cep` int(10) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `logradouro` varchar(60) NOT NULL,
  `complemento` varchar(60) NOT NULL,
  `numero` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `email`, `senha`, `telefone`, `celular`, `cep`, `uf`, `cidade`, `bairro`, `logradouro`, `complemento`, `numero`) VALUES
(1, 'TESTE', '2147483647', 'dd@novo.com', '202cb962ac59075b964b07152d234b70', '12345645789', '2147483647', 91420702, 'AC', 'Porto Alegre', 'Bom Jesus', 'Rua B', '(Vl Fátima - Divinéia)', 111),
(4, 'TESTE', '2147483647', 'dd@novo.com', '202cb962ac59075b964b07152d234b70', '12345645789', '2147483647', 91420702, 'AC', 'Porto Alegre', 'Bom Jesus', 'Rua B', '(Vl Fátima - Divinéia)', 111),
(13, 'mauricio Dias', '99999999999', 'dd@xx.com', '202cb962ac59075b964b07152d234b70', '12345678910', '12345678910', 90035040, 'RS', 'Porto Alegre', 'Centro Histórico', 'Largo Vespasiano Júlio Veppo', '', 11),
(14, 'Outro Teste', '44444444444', 'rr@dd.com', '202cb962ac59075b964b07152d234b70', '12312312333', '123222222222', 90035040, 'RS', 'Porto Alegre', 'Centro Histórico', 'Largo Vespasiano Júlio Veppo', '', 444);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `anuncios_imagens`
--
ALTER TABLE `anuncios_imagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `anuncios_imagens`
--
ALTER TABLE `anuncios_imagens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
