-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2025 at 11:00 PM
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
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id`, `foto`, `product`, `price`, `quantity`, `total`) VALUES
(2, 'https://upload.wikimedia.org/wikipedia/commons/f/fb/Indomie_Logo.png', 'Indomie Goreng', 3500, 10, 35000),
(3, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEiCC4dIIwQhB-C7LXMibtodgD8gmUaBw4NQdlqaDaFQ&s', 'Aqua Botol 600ml', 4000, 4, 16000),
(4, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrjQHVeNlbtdzo5H0YUFapRU7hHB5v336nEg&s', 'Sari Roti Tawar', 13000, 2, 26000),
(5, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCjkduECVfQTYCaEgXAxG0f9PisAwt5Jwz0g&s', 'Teh Kotak 300ml', 5000, 1, 5000),
(6, 'https://www.mirotakampus.com/resources/assets/images/product_images/1725974456.d1fe7f9e-87ac-43ff-9c52-cf52db41c4b4%20(1).jpg', 'Chitato 68g', 13500, 1, 13500),
(7, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqCZ4oXlAkPuNRzIM5NVuNMdjM98_nPRiBlw&s', 'Yakult (Paket 5 Botol)', 10600, 1, 10600),
(8, 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT5h8axwP_FjxooFoQKl-S0iqtOZ4918vDsovPDR8XrqJigxYGmUzgjMmDBbcKRCKd4THkoKyMS2dTijnnkyB3ogHsbT8UTcIdnooMRusU', 'Pepsodent Pasta Gigi 75g', 10500, 1, 10500),
(9, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSchXx3v4xJmfgmwDlcRha8PjM37HnxCadXFw&s', 'Rinso Anti Noda 1kg', 25000, 1, 25000),
(10, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzHufE6qOqCnoZrz3fdC78zSqjOzGPzHSRGw&s', 'Mie Sedaap Spicy Ver.', 3200, 10, 32000),
(21, 'https://cf.shopee.co.id/file/14b34182defb6df5992f818643ec7e7b', 'Coki CAOKI', 25000, 4, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
