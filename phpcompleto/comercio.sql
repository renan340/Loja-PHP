-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Mar-2019 às 15:48
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comercio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso_restrito`
--

CREATE TABLE `acesso_restrito` (
  `pk_restrito` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `acesso_restrito`
--

INSERT INTO `acesso_restrito` (`pk_restrito`, `nome`, `email`, `telefone`, `login`, `senha`) VALUES
(1, 'admin', 'admin@gmail.com', '3234433', 'admin', '123'),
(2, 'Maria', '(21)1415-2423', 'maria@gmail.com', 'maria23', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codcliente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `telefone` int(17) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`codcliente`, `nome`, `endereco`, `cep`, `telefone`, `cpf`, `email`, `senha`) VALUES
(6, 'Maria', 'AV. CesÃ¡rio de Melo, numero 352', '(21)2315-', 34028, '2145115155', 'maria@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `faleconosco`
--

CREATE TABLE `faleconosco` (
  `codfale` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensagem` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `codpedido` int(11) NOT NULL,
  `codproduto` int(11) NOT NULL,
  `codcliente` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `preco` float(10,2) NOT NULL,
  `total` float(10,2) NOT NULL,
  `datacompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codproduto` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `preco` float(10,2) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codproduto`, `descricao`, `categoria`, `preco`, `imagem`) VALUES
(33, 'Mousse de MaracujÃ¡', 'Sobremesas', 10.00, '1b5019b978cb9c905c6e6cf7d30bfb85.jpg'),
(34, 'Coca-Cola 3L', 'Bebidas', 6.00, '42648750f8a041e41ec8fa8fcbf55002.jpg'),
(36, 'Pepsi 3L', 'Bebidas', 6.00, 'bfa5724be5af5a39d823b32e11755510.jpg'),
(37, 'Guarana Antartica 3L', 'Bebidas', 6.00, '1e09d4dc08301dea4df0b7b2d06acb24.jpg'),
(38, 'Feijoada', 'Comidas Nordestina', 19.00, '95296a932008e474fb1a1ffcb4724002.jpeg'),
(39, 'Arroz', 'Acompanhamento', 10.00, '5eea9db4ba77155949a0261358ba0713.jpg'),
(40, 'Batata Frita', 'Acompanhamento', 10.00, 'c441dc2f6b71bb16bd2401fe5f7ee698.jpg'),
(41, 'BaiÃ£o de dois', 'Comidas Nordestina', 30.00, 'f18e7887ab735764bbeddab8f093ffad.jpeg'),
(42, 'BobÃ³ de camarÃ£o', 'Frutos do mar', 28.00, '8f07066b4993c7b307b5af0bc155fe61.jpg'),
(43, 'Strogonoff de carne', 'Carnes', 22.00, 'f7d34e71b653023b40e9a5bcdb1db20d.jpg'),
(44, 'Lasanha Bolonhesa', 'Massas', 29.00, '9660e9eec836c692c3b1ba96f0e5595d.jpeg'),
(45, 'Bife a Parmegiana', 'Carnes', 20.00, 'd6544fa31809ea7115e3eef87677f9dc.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acesso_restrito`
--
ALTER TABLE `acesso_restrito`
  ADD PRIMARY KEY (`pk_restrito`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codcliente`);

--
-- Indexes for table `faleconosco`
--
ALTER TABLE `faleconosco`
  ADD PRIMARY KEY (`codfale`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`codpedido`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codproduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acesso_restrito`
--
ALTER TABLE `acesso_restrito`
  MODIFY `pk_restrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `faleconosco`
--
ALTER TABLE `faleconosco`
  MODIFY `codfale` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `codpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `codproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
