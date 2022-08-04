-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Jul 21, 2022 at 03:57 AM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `src` text NOT NULL,
  `price` text NOT NULL,
  `percentage` int NOT NULL,
  `quantitySold` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `name`, `src`, `price`, `percentage`, `quantitySold`) VALUES
(1, 'Quần short jean nữ lưng cao phối nút cài 2 bên hông - J02', '[\"https://cf.shopee.vn/file/905c2ba722dd8a9ba3b9f82fba90ae50_tn\",\"https://cf.shopee.vn/file/520ef9a95fbe27f8758d95f9ef86fe60\",\"https://cf.shopee.vn/file/91706c886d5397a5783776d1c891bc6c\",\"https://cf.shopee.vn/file/33ec232793566f67aeecf3a4d0017bdc\",\"https://cf.shopee.vn/file/376114d806f5d80b48cb45d9935826f2\"]', '{\"price_of\":\"125.000\",\"price_new\":\"75.000\"}', 40, '2'),
(2, 'Dép đi trong nhà [Lù Store ] Dép bánh mì hình chibi dễ thương, 3 màu đen, cam, kem, size từ 36-40', '[\"https://cf.shopee.vn/file/fc4863a6a34872f738a90951680fa61d\",\"https://cf.shopee.vn/file/843cfb7e6d7dd349b49db0e895c74342\",\"https://cf.shopee.vn/file/56951295c29a63fef5bcdad9884fb993\",\"https://cf.shopee.vn/file/64a5d56ba55823f3abdee40665b892c7\",\"https://cf.shopee.vn/file/0b4bc7129d4717eeabaa0f8fd8cf9a6e\"]', '{\"price_of\": \"90.000\",\"price_new\": \"55.000\"}', 40, '2'),
(3, 'Áo trễ vai tay phồng chun ngực chun tay, áo kiểu bánh bèo', '[\"https://cf.shopee.vn/file/d05a702cc77514080b1ac274556e1c30_tn\",\"https://cf.shopee.vn/file/9f144917aa2b640bd37272303a245e06\",\"https://cf.shopee.vn/file/742811b0427e1befea3255349e5b7ea0\",\"https://cf.shopee.vn/file/07df4486e139d6b80be87071b1998967\",\"https://cf.shopee.vn/file/11cc39a5f7a54a76c0b887127906ee00\"]', '{\"price_of\": \"69.000 - 109.000\",\"price_new\": \"68.000\"}', 37, '691'),
(4, 'Áo thun nam nữ unisex YOUTH form rộng cổ tròn tay lỡ vải Cotton Mát Mịn FreeSize(38-65Kg) - Nhiều Mẫu - AP', '[\"https://cf.shopee.vn/file/8a6260f36907a27e907fe0dfb2afb076_tn\",\"https://cf.shopee.vn/file/c2425390ba3ac7de508d4243a1559d28\",\"https://cf.shopee.vn/file/e66ff8d5dfd5c5e8a47a18d5c1f2d4a2\",\"https://cf.shopee.vn/file/5412382bace2f6d337dd087cd6aaa16d\",\"https://cf.shopee.vn/file/00cdb794a66170f3f7cab47a0550474e\"]', '{\"price_of\": \"98.000\",\"price_new\": \"65.000\"}', 34, '6'),
(5, 'Mũ lưỡi trai Nón kết thêu chữ Memorie And Forever phong cách Ulzzang form unisex nam nữ', '[\"https://cf.shopee.vn/file/fd7a2f7b6216a9a849399335c613b4a5_tn\",\"https://cf.shopee.vn/file/673aeb6c2875d27ebbabca8ef0ed3a9f\",\"https://cf.shopee.vn/file/23bca222377488a27c41cde9177ef215\",\"https://cf.shopee.vn/file/fd7a2f7b6216a9a849399335c613b4a5\",\"https://cf.shopee.vn/file/cd00eb7c7e1b9387a4d3a7157234641d\"]', '{\"price_of\": \"65.000\",\"price_new\": \"27.000\"}', 58, '2'),
(6, 'Dép nữ quai ngang BALEN cao cấp êm nhẹ', '[\"https://cf.shopee.vn/file/0be9d1aee55bf4baedea9f3967e8e149_tn\",\"https://cf.shopee.vn/file/f91ac39877b15b8c9764ca0c290f98b2\",\"https://cf.shopee.vn/file/23bca222377488a27c41cde9177ef215\",\"https://cf.shopee.vn/file/d56f4e22da7699275afbaa97ffe441e4\",\"https://cf.shopee.vn/file/d624866812aed527dd40373d09a07933\"]', '{\"price_of\": \"120.000\",\"price_new\": \"69.000\"}', 43, '2'),
(7, 'Áo Polo nam cổ bẻ vải cá sấu Cotton Cao Cấp, thiết kế phong cách basic sang trọng lịch lãm POMANO', '[\r\n      \"https://cf.shopee.vn/file/4c7963a37823bdd3cf1d6272b6622507\",\r\n      \"https://cf.shopee.vn/file/c204d83ec2ca5538fb17dc6d9af0e0e7\",\r\n      \"https://cf.shopee.vn/file/421a3090b0fc9eb6d300fb2d309250a4\",\r\n      \"https://cf.shopee.vn/file/e7602c79bb8a9871c57ef2a00107c9ea\",\r\n      \"https://cf.shopee.vn/file/a9ac01c6fc24bf3f05453231467e16ce\"\r\n    ]', '{\r\n      \"price_of\": \"320.000\",\r\n      \"price_new\": \"262.400\"\r\n    }', 18, '365'),
(8, 'Mắt Kính Giả Cận Phong Cách Retro Thời Trang', '[\r\n      \"https://cf.shopee.vn/file/5e1aba516702afd1b4fe05ffa4e15a15_tn\",\r\n      \"https://cf.shopee.vn/file/77bb35fcdf15f9359e3ca7059215bc20\",\r\n      \"https://cf.shopee.vn/file/002e0b3a55709ad8bb3eed257bffac19\",\r\n      \"https://cf.shopee.vn/file/534d053fca2bfc80a7581740d5cca6dc\",\r\n      \"https://cf.shopee.vn/file/2769603a770082874a0c72fdf5d26d96\"\r\n    ]', '{\r\n      \"price_of\": \"18.000\",\r\n      \"price_new\": \"13.500\"\r\n    }', 25, '126'),
(9, 'Đèn ngủ LED đổi màu hình hoạt hình Baymax xinh xắn', '[\r\n      \"https://cf.shopee.vn/file/5ab747468537cb25e026fbe028de1a1f_tn\",\r\n      \"https://cf.shopee.vn/file/bc3528642e401199e15b781a6ed869b7\",\r\n      \"https://cf.shopee.vn/file/f0a98fb126b47802b40c1c148e6c3a2a\",\r\n      \"https://cf.shopee.vn/file/afab846913c64c12d0bc1f0a3e08dec1\",\r\n      \"https://cf.shopee.vn/file/ff770a3b8c6098e38b4c481e4dad2f6f\"\r\n    ]', '{\r\n      \"price_of\": \"22.000\",\r\n      \"price_new\": \"11.490\"\r\n    }', 48, '290'),
(10, 'VÁY ĐEN TRỄ VAI THIẾT KẾ NƠ KEM NGỰC SIÊU SANG CHẢNH', '[\r\n      \"https://cf.shopee.vn/file/34237aa48b6f53d92423db61ae23e038_tn\",\r\n      \"https://cf.shopee.vn/file/74095bcc78d3b669a2ffc1ab3c4c963b\",\r\n      \"https://cf.shopee.vn/file/8fdd0a692aac9cd8af06a8d0edef7b6f\",\r\n      \"https://cf.shopee.vn/file/8fdd0a692aac9cd8af06a8d0edef7b6f\",\r\n      \"https://cf.shopee.vn/file/bb62d62bcb181f7d0d6dcf922770a618\"\r\n    ]', '{\r\n      \"price_of\": \"266.000\",\r\n      \"price_new\": \"149.500\"\r\n    }', 44, '52'),
(11, 'Quần jean nữ ống rộng chất đẹp JS03 Hexany, Quần jeans nữ ống rộng dáng suông phong cách Hàn Quốc', '[\r\n      \"https://cf.shopee.vn/file/a3fa47bc9e2c24dea394162a603d9abd_tn\",\r\n      \"https://cf.shopee.vn/file/e6e4cee180ff17d568135b76f7ef3079\",\r\n      \"https://cf.shopee.vn/file/8fdd0a692aac9cd8af06a8d0edef7b6f\",\r\n      \"https://cf.shopee.vn/file/8fdd0a692aac9cd8af06a8d0edef7b6f\",\r\n      \"https://cf.shopee.vn/file/bb62d62bcb181f7d0d6dcf922770a618\"\r\n    ]', '{\r\n      \"price_of\": \"43.600 - 218.000\",\r\n      \"price_new\": \"21.800\"\r\n    }', 50, '1,2k'),
(12, 'Dép nam và nữ đế cao 5cm cực đẹp , chất liệu EVA siêu êm mẫu mới 2021', '[\r\n      \"https://cf.shopee.vn/file/1775040a09509614468b28c116b77b94_tn\",\r\n      \"https://cf.shopee.vn/file/72437f5c8d43fd920b47390368925942\",\r\n      \"https://cf.shopee.vn/file/5a2d0e70db65ce5decff67ab90d46571\",\r\n      \"https://cf.shopee.vn/file/8fe1e77b51ca5e1c02c0b7d1daad9d1e\",\r\n      \"https://cf.shopee.vn/file/0e081d9f72981c7c79ce7e7b15d86eba\"\r\n    ]', '{\r\n      \"price_of\": \"160.000\",\r\n      \"price_new\": \"83.000\"\r\n    }', 48, '5,9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
