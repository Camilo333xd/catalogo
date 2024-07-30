-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2024 at 12:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petstylo_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `productos` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `ID_Producto` int(11) NOT NULL,
  `Nombre_P` varchar(30) DEFAULT NULL,
  `Precio_P` decimal(10,2) NOT NULL,
  `Tipo_P` char(1) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`ID_Producto`, `Nombre_P`, `Precio_P`, `Tipo_P`, `Cantidad`) VALUES
(1, 'Shampoo para perros petys', 21000.00, 'P', 58),
(2, 'Repelente de pulgas petys', 16700.00, 'P', 38),
(3, 'Comida mirringo adulto', 16700.00, 'G', 90),
(4, 'Peinilla dientes medianos', 12000.00, 'P', 22),
(5, 'Eliminador de olores petys', 5600.00, 'P', 41),
(6, 'Frasco shampoo burby', 24800.00, 'P', 20),
(7, 'Pala de arena', 9900.00, 'G', 50),
(8, 'Lata de comida hills', 29300.00, 'P', 100),
(9, 'Perone ahumado', 24000.00, 'P', 27),
(10, 'Patica cerdo blanco', 13000.00, 'P', 17),
(11, 'snacks cabanos', 2700.00, 'P', 31),
(12, 'cama relax', 140000.00, 'P', 20),
(13, 'ratones x2 gatos', 16700.00, 'G', 90),
(14, 'Correa sport cocos', 35000.00, 'P', 15),
(15, 'Removedor de pelos', 36200.00, 'G', 30);

-- --------------------------------------------------------

--
-- Table structure for table `tipoproductos`
--

CREATE TABLE `tipoproductos` (
  `Tipo` char(1) NOT NULL,
  `Descripcion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipoproductos`
--

INSERT INTO `tipoproductos` (`Tipo`, `Descripcion`) VALUES
('G', 'Productos para gatos'),
('P', 'Productos para perros');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_Producto`),
  ADD KEY `FK_TipoP` (`Tipo_P`);

--
-- Indexes for table `tipoproductos`
--
ALTER TABLE `tipoproductos`
  ADD PRIMARY KEY (`Tipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `ID_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `FK_TipoP` FOREIGN KEY (`Tipo_P`) REFERENCES `tipoproductos` (`Tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
