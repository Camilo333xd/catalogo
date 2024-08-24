-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2024 at 09:47 PM
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
  `id_pedido` int(11) NOT NULL,
  `productos` varchar(255) NOT NULL,
  `valor_total` decimal(10,2) NOT NULL,
  `fecha_pedido` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `productos`, `valor_total`, `fecha_pedido`) VALUES
(2, 'CHEEMS - 370000.00 (Cantidad: 1), jesus - 10000000.00 (Cantidad: 1)', 10370000.00, '2024-08-20 00:18:27'),
(3, 'jeronimo - 28000.00 (Cantidad: 1), itadori - 1000000.00 (Cantidad: 2), relente - 2311.00 (Cantidad: 1)', 2030311.00, '2024-08-20 05:27:27'),
(4, 'jeronimo - 28000.00 (Cantidad: 2), itadori - 1000000.00 (Cantidad: 1)', 1056000.00, '2024-08-20 05:36:03'),
(5, 'itadori - 1000000.00 (Cantidad: 2), relente - 2311.00 (Cantidad: 2), jeronimo - 28000.00 (Cantidad: 2)', 2060622.00, '2024-08-23 03:26:10'),
(6, 'relente - 2311.00 (Cantidad: 1), jeronimo - 28000.00 (Cantidad: 2), itadori - 1000000.00 (Cantidad: 2)', 2058311.00, '2024-08-23 03:27:42'),
(7, 'relente - 2311.00 (Cantidad: 1), jeronimo - 28000.00 (Cantidad: 2), mama - 99999999.99 (Cantidad: 1), CHEEMS - 20000.00 (Cantidad: 1), cama de perro - 138000.00 (Cantidad: 1)', 99999999.99, '2024-08-23 03:40:11'),
(8, 'mama - 99999999.99 (Cantidad: 1), jeronimo - 28000.00 (Cantidad: 1), relente - 2311.00 (Cantidad: 1)', 99999999.99, '2024-08-24 02:35:40'),
(9, 'jeronimo - 28000.00 (Cantidad: 2), mama - 99999999.99 (Cantidad: 1)', 99999999.99, '2024-08-24 16:15:08'),
(10, 'jeronimo - 28000.00 (Cantidad: 1), mama - 99999999.99 (Cantidad: 2), relente - 2311.00 (Cantidad: 1)', 99999999.99, '2024-08-24 16:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `ID_Producto` int(11) NOT NULL,
  `Nombre_P` varchar(30) DEFAULT NULL,
  `Precio_P` decimal(10,2) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`ID_Producto`, `Nombre_P`, `Precio_P`, `Cantidad`, `descripcion`, `image`) VALUES
(76, 'relente', 2311.00, 133, 'para el hogar', '..\\assets\\Pictures\\nuevas\\REPELENTE.jpg'),
(78, 'jeronimo', 28000.00, 2, 'un negrito chocoano', '..\\assets\\Pictures\\nuevas\\abejorro.png'),
(80, 'mama', 99999999.99, 1, 'te cuida con gran amor', '..\\assets\\Pictures\\nuevas\\peinilla.jpg'),
(81, 'cama de perro', 138000.00, 53, 'comoda cama de algodon 100x56  cm', '..\\assets\\Pictures\\nuevas\\comidaenlatada_perro.webp'),
(82, 'CHEEMS', 20000.00, 1, 'perro bonito', '..\\assets\\Pictures\\nuevas\\perro.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_Producto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `ID_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
