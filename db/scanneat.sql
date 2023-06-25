-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 05:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scanneat`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `bpom` char(30) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `serving` varchar(20) DEFAULT NULL,
  `energy` varchar(20) DEFAULT NULL,
  `lemak` varchar(20) DEFAULT NULL,
  `lemakjenuh` varchar(20) DEFAULT NULL,
  `protein` varchar(20) DEFAULT NULL,
  `karbo` varchar(20) DEFAULT NULL,
  `gula` varchar(20) DEFAULT NULL,
  `garam` varchar(20) DEFAULT NULL,
  `caffeine` int(2) DEFAULT NULL,
  `seafood` int(2) DEFAULT NULL,
  `dairy` int(2) DEFAULT NULL,
  `egg` int(2) DEFAULT NULL,
  `peanut` int(2) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`bpom`, `nama`, `serving`, `energy`, `lemak`, `lemakjenuh`, `protein`, `karbo`, `gula`, `garam`, `caffeine`, `seafood`, `dairy`, `egg`, `peanut`, `image`) VALUES
('(90)MD266510106032(91)251124', 'Coca-Cola Original', '250 ml', '100 kkal', '0 g', '0 g', '0 g', '27 g', '27 g', '15 mg', 0, 0, 0, 0, 0, 'https://images.tokopedia.net/img/cache/500-square/product-1/2020/9/11/51182082/51182082_1e9f8824-d1dd-4203-9e6e-cddc9d2659c7_800_800 '),
('(90)MD273811119019(91)210905', 'Sukro Oven Bawang', '25 g', '130 kkal', '7 g', '1.5 g', '5 g', '12 g', '3 g', '80 mg', 0, 0, 0, 1, 1, 'https://images.tokopedia.net/img/cache/700/product-1/2020/10/14/batch-upload/batch-upload_c7b46ef2-cab5-4db1-a20d-15b0e94ee8f6'),
('(90)MD268310026033(91)241014', 'Nü teh tarik', '200 ml', '120 kkal', '3.5 g', '3.5 g', '2 g', '20 g', '17 g', '150 mg', 0, 0, 1, 0, 0, 'https://assets.klikindomaret.com/share/20069527_1.jpg'),
('(90)MD235531088050(91)260223', 'Malkist Belgian Chocolate', '2 crackers', '90 kkal', '4.5 g', '3 g', '2 g', '11 g', '4 g', '85 mg', 0, 0, 1, 0, 0, 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-25163825/roma_roma_malkist_chocolate_biscuit_-_biskuit_roma_malkist_cokelat_105_gr_full02_23k8dih.jpeg'),
('(90)MD224431063050(91)250407', 'Kopiko', '9 g', '40 kkal', '1 g', '0 g', '0 g', '8 g', '5 g', '10 mg', 1, 0, 1, 0, 0, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRv7VsyZ51U_9CwGeBiNuC3bBCasL6OB1QwXw&usqp=CAU'),
('(90)MD824010239001(91)230531', 'Silver Queen Green Tea Matcha', '20 g', '120 kkal', '8 g', '4.5 g', '2 g', '9 g', '8 g', '35 mg', 0, 0, 1, 0, 0, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSe5ULjZxc6q23-yUvTz-uuUgfbJmq3LWylcw&usqp=CAU'),
('(90)MD400810182136(91)241226', 'Cimory Fresh Milk Chocolate', '125 ml', '110 kkal', '3.5 g', '2 g', '3 g', '16 g', '10 g', '65 mg', 0, 0, 1, 0, 0, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTazFjS_x6xMQ7WYfz7yplxKglgC71kSXEdCg&usqp=CAU'),
('(90)MD224010169001(91)260805', 'Chacha Peanut', '20 g', '110 kkal', '6 g', '2 g', '2 g', '12 g', '10 g', '5 mg', 0, 0, 1, 0, 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzEDGEdpUMNThIHrG-sLHcgDpwfCp09Tv4Xw&usqp=CAU'),
('(90)MD566510034032(91)261005', 'AW Root Beer', '250 ml', '50 kkal', '0 g', '0 g', '0 g', '12 g', '12 g', '10 mg', 0, 0, 0, 0, 0, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUZ_6WYbTCtCi5Xz5rCimSfJKW8HyVf_XFWg&usqp=CAU'),
('(90)ML224309017696(91)250106', 'Milo Nuggets', '15 g', '70 kkal', '3.5 g', '2 g', '1 g', '9 g', '7 g', '20 mg', 0, 0, 1, 0, 0, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxnROPTO6jodELeX2r9ThdQyeadS42QS9klQ&usqp=CAU');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `caffeine` int(2) NOT NULL,
  `seafood` int(2) NOT NULL,
  `dairy` int(2) NOT NULL,
  `egg` int(2) NOT NULL,
  `peanut` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `caffeine`, `seafood`, `dairy`, `egg`, `peanut`) VALUES
(1, 'devy', 'vyyvana@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, 1, 0, 0, 0),
(2, 'devyivana_', 'vy@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
