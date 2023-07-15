-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2023 pada 14.46
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mocash`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cuan`
--

CREATE TABLE `tb_cuan` (
  `id` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cabang` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`id`, `kategori`, `nama`, `harga`, `stock`, `foto`, `company`) VALUES
(1, 'Makanan', 'Fish Fillet Yakiniku Burger', 39500.00, NULL, 'FishFilletYakinikuBurger.png', 'McDonald\'s'),
(2, 'Makanan', 'Beef Yakiniku Burger', 40500.00, NULL, 'BeefYakinikuBurger.png', 'McDonald\'s'),
(3, 'Makanan', 'McSpicy Yakiniku Burger', 48000.00, NULL, 'McSpicyYakinikuBurger.png', 'McDonald\'s'),
(4, 'Makanan', 'Big Mac', 41000.00, NULL, 'BigMac.png', 'McDonald\'s'),
(5, 'Makanan', 'Triple Cheeseburger', 60000.00, NULL, 'TripleCheeseburger.png', 'McDonald\'s'),
(6, 'Makanan', 'Duoble Cheeseburger', 39500.00, NULL, 'DuobleCheeseburger.png', 'McDonald\'s'),
(7, 'Makanan', 'Cheeseburger deluxe', 33000.00, NULL, 'CheeseburgerDeluxe.png', 'McDonald\'s'),
(8, 'Makanan', 'Cheeseburger', 32000.00, NULL, 'Cheeseburger.png', 'McDonald\'s'),
(9, 'Makanan', 'Beef Burger deluxe', 25000.00, NULL, 'BeefBurgerDeluxe.png', 'McDonald\'s'),
(10, 'Makanan', 'McSpicy', 39500.00, NULL, 'McSpicy.png', 'McDonald\'s'),
(11, 'Makanan', 'McChicken', 32000.00, NULL, 'McChicken.png', 'McDonald\'s'),
(12, 'Makanan', 'Chicken Burger deluxe', 25000.00, NULL, 'ChickenBurgerDeluxe.png', 'McDonald\'s'),
(13, 'Makanan', 'Fish Fillet Burger', 32000.00, NULL, 'FishFilletBurger.png', 'McDonald\'s'),
(14, 'Makanan', 'Nasi Uduk McD', 21500.00, NULL, 'NasiUduk.png', 'McDonald\'s'),
(15, 'Makanan', 'Honey Garlic Chicken Rice', 22000.00, NULL, 'HoneyGarlicChickenRice.png', 'McDonald\'s'),
(16, 'Makanan', 'Honey Garlic Fish Rice', 22000.00, NULL, 'HoneyGarlicFishRice.png', 'McDonald\'s'),
(17, 'Makanan', 'Rica Rica Fish Rice', 22000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(18, 'Makanan', 'Rica Rica Chicken Rice', 22000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(19, 'Makanan', 'Korean Soy Garlic Wings', 34500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(20, 'Cemilan', 'Fish Snack Wrap', 17500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(21, 'Cemilan', 'Chicken Snack Wrap', 17500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(22, 'Cemilan', 'Spicy Nori McShaker Fries', 23000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(23, 'Cemilan', 'Spicy Chicken Bites', 13000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(24, 'Cemilan', 'Chicken Fingers 5pcs', 14500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(25, 'Cemilan', 'French Freis', 19000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(26, 'Cemilan', 'Apple pie', 22500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(27, 'Cemilan', 'Spicy McNuggets 6pcs', 40500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(28, 'Cemilan', 'Spicy McNuggets 9pcs', 60000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(29, 'Minuman', 'Sakura Fizz', 14500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(30, 'Minuman', 'Sprite X Manggo McFloat', 17000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(31, 'Minuman', 'Coca Cola X Strawbeery McFloat', 17000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(32, 'Minuman', 'Dari', 17000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(33, 'Minuman', 'Iced Lychee Tea', 20000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(34, 'Minuman', 'Iced Coffee', 19000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(35, 'Minuman', 'Coca Cola', 9500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(36, 'Minuman', 'Coke McFloat', 14000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(37, 'Minuman', 'Fanta', 9500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(38, 'Minuman', 'Fanta McFloat', 14000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(39, 'Minuman', 'Sprite', 9500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(40, 'Minuman', 'Fruit Tea Lemon', 9500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(41, 'Minuman', 'Friut Tea Blackcurrant 200ml', 9500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(42, 'Minuman', 'Tehbotol Sosro Kotak 250ml', 9500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(43, 'Minuman', 'Milo', 13000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(44, 'Minuman', 'Premium Roast Coffe', 12000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(45, 'Minuman', 'Teh Panas', 12000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(46, 'Minuman', 'Air Mineral 600ml', 11500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(47, 'Minuman', 'Hot Cappucino', 23500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(48, 'Minuman', 'Iced Cappucino', 28500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(49, 'Minuman', 'Hot Cafe Latte', 23500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(50, 'Minuman', 'Iced Cafe Latte', 28500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(51, 'Minuman', 'Hot Long Black', 23500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(52, 'Minuman', 'Hot Flat White', 23500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(53, 'Dessert', 'Duoble Choco Pie', 17000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(54, 'Dessert', 'Matcha McFlurry With Matcha Cookies', 18000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(55, 'Dessert', 'Matcha McFlurry With Oreo', 18000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(56, 'Dessert', 'McFlurry Featuring Oreo', 13500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(57, 'Dessert', 'McFlurry Choco', 13500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(58, 'Dessert', 'Sundae Chocolate', 12000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(59, 'Dessert', 'Sundae Strawberry', 12000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(60, 'Dessert', 'Sundae Chocolate', 12000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(61, 'Paket', 'PaNas Spesial', 46000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(62, 'Paket', 'PaNas Wings Large ', 48000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(63, 'Paket', 'PaNas 1', 38000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(64, 'Paket', 'PaNas 2 With Rice', 50000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(65, 'Paket', 'PaNas 2 With Fries', 52000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(66, 'Paket', 'PaMer 5', 125000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(67, 'Paket', 'PaNas 7', 180000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(68, 'Paket', 'Koran Soy Garlic Wings', 31500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(69, 'Paket', 'Paket Big Order', 562500.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(70, 'Paket', 'Happy Meal Chicken Burger', 44000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(71, 'Paket', 'Happy Meal McNuggets 4pcs', 44000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(72, 'Paket', 'Happy Meal Beef Burger', 44000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(73, 'Paket', 'Happy Meal Ayam', 44000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(74, 'Paket', 'Paket Keluarga Seru Tanpa Mainan', 84000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(75, 'Paket', 'Paket Keluarga Seru Happy Meal Beef dan Mainan', 110000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(76, 'Paket', 'Paket Keluarga Seru Happy Meal Ayam McD dan Mainan', 110000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s'),
(77, 'Paket', 'Paket Hantaran McD', 129000.00, NULL, 'tv_led_32.jpg', 'McDonald\'s');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(200) NOT NULL,
  `fullname` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `masa_berlangganan` varchar(50) DEFAULT NULL,
  `cabang` varchar(200) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `fullname`, `email`, `password`, `role`, `masa_berlangganan`, `cabang`, `company`, `alamat`, `foto`) VALUES
(1, 'Sectio Fatkhul Amrulloh Haq', 'sectiofatkhul51@gmail.com', 'Fatkhul02', 'Super Admin', '12 Bulan', 'Pusat', 'Burger King', 'Indonesia', NULL),
(2, 'Salsabila', 'chacasbl01@gmail.com', 'Cacasuga06', 'Super Admin', '12 Bulan', 'Pusat', 'McDonald\'s', 'Indonesia', 'MCD.jpg'),
(3, 'Nurjanah Dewi Sinta', 'nurjanahdewi51@gmail.com', 'Nurdesin76', 'User', '', 'DMALL', 'Burger King', 'Depok Mall, Jl. Margonda No.Kav 88, Kemiri Muka, Kecamatan Beji, Kota Depok, Jawa Barat 16423', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_cuan`
--
ALTER TABLE `tb_cuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`);

--
-- Indeks untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_cuan`
--
ALTER TABLE `tb_cuan`
  ADD CONSTRAINT `tb_cuan_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `tb_produk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
