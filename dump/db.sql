-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Aug 09, 2022 at 01:30 PM
-- Server version: 8.0.29
-- PHP Version: 8.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `quantity` int NOT NULL,
  `id_product` int NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `quantity`, `id_product`, `id_user`) VALUES
(1, 7, 2, 2),
(2, 3, 9, 0),
(3, 7, 2, 28),
(5, 3, 9, 2),
(6, 1, 10, 2),
(7, 1, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `total` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `user_id`, `total`, `create_at`) VALUES
(2, 2, '385,000', '2022-08-09 13:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_item`
--

CREATE TABLE `invoice_item` (
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `src` text NOT NULL,
  `price` text NOT NULL,
  `percentage` int NOT NULL,
  `quantity_sold` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `name`, `src`, `price`, `percentage`, `quantity_sold`) VALUES
(1, 'Qu???n short jean n??? l??ng cao ph???i n??t c??i 2 b??n h??ng - J02', '[\"https://cf.shopee.vn/file/905c2ba722dd8a9ba3b9f82fba90ae50_tn\",\"https://cf.shopee.vn/file/520ef9a95fbe27f8758d95f9ef86fe60\",\"https://cf.shopee.vn/file/91706c886d5397a5783776d1c891bc6c\",\"https://cf.shopee.vn/file/33ec232793566f67aeecf3a4d0017bdc\",\"https://cf.shopee.vn/file/376114d806f5d80b48cb45d9935826f2\"]', '{\"price_of\":\"125.000\",\"price_new\":\"75.000\"}', 40, '2'),
(2, 'D??p ??i trong nh?? [L?? Store ] D??p b??nh m?? h??nh chibi d??? th????ng, 3 m??u ??en, cam, kem, size t??? 36-40', '[\"https://cf.shopee.vn/file/fc4863a6a34872f738a90951680fa61d\",\"https://cf.shopee.vn/file/843cfb7e6d7dd349b49db0e895c74342\",\"https://cf.shopee.vn/file/56951295c29a63fef5bcdad9884fb993\",\"https://cf.shopee.vn/file/64a5d56ba55823f3abdee40665b892c7\",\"https://cf.shopee.vn/file/0b4bc7129d4717eeabaa0f8fd8cf9a6e\"]', '{\"price_of\": \"90.000\",\"price_new\": \"55.000\"}', 40, '2'),
(3, '??o tr??? vai tay ph???ng chun ng???c chun tay, ??o ki???u b??nh b??o', '[\"https://cf.shopee.vn/file/d05a702cc77514080b1ac274556e1c30_tn\",\"https://cf.shopee.vn/file/9f144917aa2b640bd37272303a245e06\",\"https://cf.shopee.vn/file/742811b0427e1befea3255349e5b7ea0\",\"https://cf.shopee.vn/file/07df4486e139d6b80be87071b1998967\",\"https://cf.shopee.vn/file/11cc39a5f7a54a76c0b887127906ee00\"]', '{\"price_of\": \"69.000 - 109.000\",\"price_new\": \"68.000\"}', 37, '691'),
(4, '??o thun nam n??? unisex YOUTH form r???ng c??? tr??n tay l??? v???i Cotton M??t M???n FreeSize(38-65Kg) - Nhi???u M???u - AP', '[\"https://cf.shopee.vn/file/8a6260f36907a27e907fe0dfb2afb076_tn\",\"https://cf.shopee.vn/file/c2425390ba3ac7de508d4243a1559d28\",\"https://cf.shopee.vn/file/e66ff8d5dfd5c5e8a47a18d5c1f2d4a2\",\"https://cf.shopee.vn/file/5412382bace2f6d337dd087cd6aaa16d\",\"https://cf.shopee.vn/file/00cdb794a66170f3f7cab47a0550474e\"]', '{\"price_of\": \"98.000\",\"price_new\": \"65.000\"}', 34, '6'),
(5, 'M?? l?????i trai N??n k???t th??u ch??? Memorie And Forever phong c??ch Ulzzang form unisex nam n???', '[\"https://cf.shopee.vn/file/fd7a2f7b6216a9a849399335c613b4a5_tn\",\"https://cf.shopee.vn/file/673aeb6c2875d27ebbabca8ef0ed3a9f\",\"https://cf.shopee.vn/file/23bca222377488a27c41cde9177ef215\",\"https://cf.shopee.vn/file/fd7a2f7b6216a9a849399335c613b4a5\",\"https://cf.shopee.vn/file/cd00eb7c7e1b9387a4d3a7157234641d\"]', '{\"price_of\": \"65.000\",\"price_new\": \"27.000\"}', 58, '2'),
(6, 'D??p n??? quai ngang BALEN cao c???p ??m nh???', '[\"https://cf.shopee.vn/file/0be9d1aee55bf4baedea9f3967e8e149_tn\",\"https://cf.shopee.vn/file/f91ac39877b15b8c9764ca0c290f98b2\",\"https://cf.shopee.vn/file/23bca222377488a27c41cde9177ef215\",\"https://cf.shopee.vn/file/d56f4e22da7699275afbaa97ffe441e4\",\"https://cf.shopee.vn/file/d624866812aed527dd40373d09a07933\"]', '{\"price_of\": \"120.000\",\"price_new\": \"69.000\"}', 43, '2'),
(7, '??o Polo nam c??? b??? v???i c?? s???u Cotton Cao C???p, thi???t k??? phong c??ch basic sang tr???ng l???ch l??m POMANO', '[\r\n      \"https://cf.shopee.vn/file/4c7963a37823bdd3cf1d6272b6622507\",\r\n      \"https://cf.shopee.vn/file/c204d83ec2ca5538fb17dc6d9af0e0e7\",\r\n      \"https://cf.shopee.vn/file/421a3090b0fc9eb6d300fb2d309250a4\",\r\n      \"https://cf.shopee.vn/file/e7602c79bb8a9871c57ef2a00107c9ea\",\r\n      \"https://cf.shopee.vn/file/a9ac01c6fc24bf3f05453231467e16ce\"\r\n    ]', '{\r\n      \"price_of\": \"320.000\",\r\n      \"price_new\": \"262.400\"\r\n    }', 18, '365'),
(8, 'M???t K??nh Gi??? C???n Phong C??ch Retro Th???i Trang', '[\r\n      \"https://cf.shopee.vn/file/5e1aba516702afd1b4fe05ffa4e15a15_tn\",\r\n      \"https://cf.shopee.vn/file/77bb35fcdf15f9359e3ca7059215bc20\",\r\n      \"https://cf.shopee.vn/file/002e0b3a55709ad8bb3eed257bffac19\",\r\n      \"https://cf.shopee.vn/file/534d053fca2bfc80a7581740d5cca6dc\",\r\n      \"https://cf.shopee.vn/file/2769603a770082874a0c72fdf5d26d96\"\r\n    ]', '{\r\n      \"price_of\": \"18.000\",\r\n      \"price_new\": \"13.500\"\r\n    }', 25, '126'),
(9, '????n ng??? LED ?????i m??u h??nh ho???t h??nh Baymax xinh x???n', '[\r\n      \"https://cf.shopee.vn/file/5ab747468537cb25e026fbe028de1a1f_tn\",\r\n      \"https://cf.shopee.vn/file/bc3528642e401199e15b781a6ed869b7\",\r\n      \"https://cf.shopee.vn/file/f0a98fb126b47802b40c1c148e6c3a2a\",\r\n      \"https://cf.shopee.vn/file/afab846913c64c12d0bc1f0a3e08dec1\",\r\n      \"https://cf.shopee.vn/file/ff770a3b8c6098e38b4c481e4dad2f6f\"\r\n    ]', '{\r\n      \"price_of\": \"22.000\",\r\n      \"price_new\": \"11.490\"\r\n    }', 48, '290'),
(10, 'V??Y ??EN TR??? VAI THI???T K??? N?? KEM NG???C SI??U SANG CH???NH', '[\r\n      \"https://cf.shopee.vn/file/34237aa48b6f53d92423db61ae23e038_tn\",\r\n      \"https://cf.shopee.vn/file/74095bcc78d3b669a2ffc1ab3c4c963b\",\r\n      \"https://cf.shopee.vn/file/8fdd0a692aac9cd8af06a8d0edef7b6f\",\r\n      \"https://cf.shopee.vn/file/8fdd0a692aac9cd8af06a8d0edef7b6f\",\r\n      \"https://cf.shopee.vn/file/bb62d62bcb181f7d0d6dcf922770a618\"\r\n    ]', '{\r\n      \"price_of\": \"266.000\",\r\n      \"price_new\": \"149.500\"\r\n    }', 44, '52'),
(11, 'Qu???n jean n??? ???ng r???ng ch???t ?????p JS03 Hexany, Qu???n jeans n??? ???ng r???ng d??ng su??ng phong c??ch H??n Qu???c', '[\r\n      \"https://cf.shopee.vn/file/a3fa47bc9e2c24dea394162a603d9abd_tn\",\r\n      \"https://cf.shopee.vn/file/e6e4cee180ff17d568135b76f7ef3079\",\r\n      \"https://cf.shopee.vn/file/8fdd0a692aac9cd8af06a8d0edef7b6f\",\r\n      \"https://cf.shopee.vn/file/8fdd0a692aac9cd8af06a8d0edef7b6f\",\r\n      \"https://cf.shopee.vn/file/bb62d62bcb181f7d0d6dcf922770a618\"\r\n    ]', '{\r\n      \"price_of\": \"43.600 - 218.000\",\r\n      \"price_new\": \"21.800\"\r\n    }', 50, '1,2k'),
(12, 'D??p nam v?? n??? ????? cao 5cm c???c ?????p , ch???t li???u EVA si??u ??m m???u m???i 2021', '[\r\n      \"https://cf.shopee.vn/file/1775040a09509614468b28c116b77b94_tn\",\r\n      \"https://cf.shopee.vn/file/72437f5c8d43fd920b47390368925942\",\r\n      \"https://cf.shopee.vn/file/5a2d0e70db65ce5decff67ab90d46571\",\r\n      \"https://cf.shopee.vn/file/8fe1e77b51ca5e1c02c0b7d1daad9d1e\",\r\n      \"https://cf.shopee.vn/file/0e081d9f72981c7c79ce7e7b15d86eba\"\r\n    ]', '{\r\n      \"price_of\": \"160.000\",\r\n      \"price_new\": \"83.000\"\r\n    }', 48, '5,9');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone_number` int NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `password`) VALUES
(1, 'Nguy???n Duy Th??nh', 'duythanhit203@gmail.com', 969000000, ' nh??n'),
(2, 'Nguy???n Duy Th??nh', 'asdasd@gmail.com', 969067361, '57ba172a6be125cca2f449826f9980ca'),
(26, 'Nguy???n Duy Th??nh', 'asdfghjklqwertyuio@gmail.com', 969067361, '57ba172a6be125cca2f449826f9980ca'),
(27, 'Nguy???n Duy Th??nh', 'thanhasdasdasfadfasgf@gmail.com', 969067361, '57ba172a6be125cca2f449826f9980ca'),
(28, 'Nguy???n Duy Th??nh', 'thanhasdasdasfdfasgf@gmail.com', 969067361, '57ba172a6be125cca2f449826f9980ca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
