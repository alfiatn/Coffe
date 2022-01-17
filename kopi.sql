-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 12:56 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `name`, `created_at`, `updated_at`) VALUES
(8, 'ayu@gmail.com', '$2y$10$Zuzvs/qyV1WqYFSVEE1jl./fJTWEtZCq8AiICUW..FgrLGXDroCP2', 'risma', '2019-03-17 21:37:15', '2019-03-17 21:37:45'),
(14, 'cheryl@gmail.com', '$2y$10$Oq2mh.b2beJc.83RMFRy3OdAjYOJt2e6lYIyNMJNhyf8RW7zRL9oO', 'cheryl', '2019-03-18 17:32:44', '2019-03-18 17:32:44'),
(19, 'resa@gmail.com', '$2y$10$POJhSxuR/ADVwkgZkdJasuFoAnRxW6auZ4EjXKBnRJXMu8L0nzzgy', 'resa', '2019-03-18 23:43:51', '2019-03-18 23:43:51'),
(20, 'admin@gmail.com', '$2y$10$BmgD.MA742g0HgDKG7pywOulA/AhdehItkS7GQ8RGaMMmiPRJT7S2', 'admin', '2019-03-19 19:31:39', '2019-03-19 19:31:39'),
(21, 'admin1@gmail.com', '$2y$10$Y27EHpR2qLSUkqkwrUc2keu.ZONRhbduliXKU9QVylmd/j1iEK9X6', 'admin1', '2019-03-19 20:21:01', '2019-03-19 20:21:01'),
(22, 'alfia@gmail.com', '$2y$10$jZw51SEmRygvCSENGv8u/O5NRQJdtjimDhQBU4zVYzwtZmI0/RjC2', 'alfia', '2019-03-20 20:24:14', '2019-03-20 20:24:14'),
(23, 'aghna@gmail.com', '$2y$10$aPkffszNbc3IazN9Ptde0O.7WeHJcWxzklpXsbpNJodNUoXgtN2Ui', 'aghna', '2019-03-20 21:23:17', '2019-03-20 21:23:17');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'cheryl', 'cheryl@gmail.com', 'semangat ya', '2019-03-20 21:06:15', '2019-03-20 21:06:15'),
(3, 'user', 'resa@gmail.com', 'tempatnya nyaman, luas, kayak di CK', '2019-03-20 23:17:07', '2019-03-20 23:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `cutomers`
--

CREATE TABLE `cutomers` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kopi`
--

CREATE TABLE `kopi` (
  `id` int(11) NOT NULL,
  `nama_kopi` varchar(50) NOT NULL,
  `file` text NOT NULL,
  `harga` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kopi`
--

INSERT INTO `kopi` (`id`, `nama_kopi`, `file`, `harga`, `deskripsi`, `created_at`, `updated_at`) VALUES
(9, 'Matcha Green Tea Ice Blended Drink', '987654343.jpg', '20000', 'Matcha, Milk, Sugar, Milk, Ice', '2019-03-19 18:19:50', '2019-03-19 19:42:30'),
(10, 'Caramel Ice Blended Drink', '877478223.jpg', '25000', 'Caramel, Milk, Sugar, Syrup', '2019-03-19 18:20:37', '2019-03-19 18:20:37'),
(11, 'Iced Coffee', '808181170.jpg', '15000', 'Coffee, Sugar, Water, Ice', '2019-03-19 18:21:23', '2019-03-19 18:21:23'),
(12, 'Iced Cappuccino', '439716977.jpg', '20000', 'Cappuccino, Milk, Sugar, Water', '2019-03-19 18:22:03', '2019-03-19 18:22:03'),
(13, 'Iced Vanilla Latte', '509626716.jpg', '26000', 'Vanilla, Coffee, Milk, Sugar', '2019-03-19 18:22:32', '2019-03-19 18:22:32'),
(14, 'Espresso', '27677940.jpg', '17000', 'Coffee, Sugar, Milk, Water', '2019-03-19 18:23:08', '2019-03-19 18:23:08'),
(15, 'Macchiato', '235453414.jpg', '18000', 'Caramel Mocchiato, Coffee, Milk', '2019-03-19 18:23:38', '2019-03-19 18:23:38'),
(18, 'expresso', '410097408.jpg', '20000', 'Milk, sugar, mocha, water, ice', '2019-03-19 20:22:39', '2019-03-20 20:20:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_03_16_081939_create_model_admins_table', 1),
(2, '2019_03_20_060714_pesan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` date NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kursi` enum('1','2','3','4','5','6','7','8') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `hari`, `no_hp`, `jenis_kelamin`, `kursi`, `created_at`, `updated_at`) VALUES
(20, 'cheryl', '2019-03-20', '12345678', 'perempuan', '2', '2019-03-20 04:35:26', '2019-03-20 04:35:26'),
(21, 'user', '2019-03-20', '12345678', 'laki-laki', '6', '2019-03-20 04:36:44', '2019-03-20 04:36:44'),
(35, 'risma', '2019-03-20', '12345678', 'perempuan', '8', '2019-03-20 04:53:59', '2019-03-20 04:53:59'),
(42, 'alfia', '2019-03-20', '12345', 'perempuan', '4', '2019-03-20 05:47:34', '2019-03-20 05:47:34'),
(44, 'resa', '2019-03-26', '08224474569', 'perempuan', '6', '2019-03-20 05:59:49', '2019-03-20 05:59:49'),
(55, 'teresia', '2019-03-22', '08224474569', 'perempuan', '3', '2019-03-20 06:24:18', '2019-03-20 06:24:18'),
(62, 'sehun', '2019-03-27', '6578954327', 'laki-laki', '1', '2019-03-20 19:06:31', '2019-03-20 19:06:31'),
(63, 'manda', '2019-03-26', '08224474569', 'perempuan', '1', '2019-03-20 20:02:30', '2019-03-20 20:02:30'),
(64, 'resa', '2019-03-26', '08224474569', 'perempuan', '1', '2019-03-20 20:03:30', '2019-03-20 20:03:30'),
(65, 'andini', '2019-03-21', '089646741419', 'perempuan', '1', '2019-03-20 22:25:17', '2019-03-20 22:25:17'),
(66, 'resa', '2019-03-19', '08224474566', 'perempuan', '1', '2019-03-20 23:00:46', '2019-03-20 23:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `nama_kopi` varchar(50) NOT NULL,
  `jenis_kelamin` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cutomers`
--
ALTER TABLE `cutomers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kopi`
--
ALTER TABLE `kopi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id` (`order_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cutomers`
--
ALTER TABLE `cutomers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kopi`
--
ALTER TABLE `kopi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
