-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 24, 2023 at 03:34 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_bluepeach`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int NOT NULL,
  `category_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `parent_id`) VALUES
(14, 'Dây Chuyền', 21),
(17, 'Lắc Tay', 21),
(19, 'Khuyên Tai', 21),
(20, 'Home', 0),
(21, 'Sản Phẩm', 0),
(22, 'My Shopee', 0),
(23, 'Contact', 0),
(24, 'Về Chúng Tớ', 0),
(25, 'Khuyên Tai Vàng', 21),
(26, 'Combo Quà Tặng', 21),
(32, 'More', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,3) NOT NULL,
  `old_price` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `category_name`, `price`, `old_price`, `description`, `product_img`) VALUES
(1, 'DC Milky Way VN-V2', 'Dây Chuyền', '285.000', '330,000', 'dây chuyền', 'DC-S-V2.jpeg'),
(22, 'LT Glitter Moon VN', 'Lắc Tay', '294.000', '310,000', 'lắc tay', 'sp1.jpeg'),
(48, 'DC Milky Way VN', 'Dây Chuyền', '294.500', '310,000', '', 'DC-milky-Way-VN-V7.jpeg'),
(49, 'DC Blue Sea Circle V1', 'Dây Chuyền', '285.000', '300,000', '', 'DC-blue-Sea-Circle.jpg'),
(52, 'DC Blue Glitter Moon v1 VN - Moonstone Trơn', 'Dây Chuyền', '304.000', '320,000', '', 'DC-blue-Dlitter-Moon-v1.webp'),
(53, 'DC Gumiho VN', 'Dây Chuyền', '294.500', '310,000', '', 'DC-gumiho-v3.jpeg'),
(54, 'DC Hoa Tim Đá Moon', 'Dây Chuyền', '320.000', '', '', 'DC-hoa-tim-Đá-Moon.jpeg'),
(55, 'DC Milky Way VN V7 - Đá CZ', 'Dây Chuyền', '294.500', '', '', 'DC-Milky-Way-VN.jpg'),
(56, 'DC Hoa Đá Tim Móc VN', 'Dây Chuyền', '340.000', '', '', 'DC-Hoa-Da-Tim-Moc-VN.jpeg'),
(57, 'DC Vòng Lá - Moonstone', 'Dây Chuyền', '310.000', '', '', 'Moonstone.jpeg'),
(58, 'DC Tim Chéo Đá VN V4', 'Dây Chuyền', '330.000', '', '', 'DC-Trang-da-treo.jpeg'),
(59, 'DC Diamond in Circle size S V2', 'Dây Chuyền', '330.000', '', '', 'DC-Diamond-in-cricle-size-S.jpeg'),
(60, 'DC Hoa 6 Cánh Đá VN', 'Dây Chuyền', '310.000', '', '', 'DC-hoa-6-canh-da.jpeg'),
(61, 'DC Cỏ 4 Lá VN V2', 'Dây Chuyền', '320.000', '', '', 'DC-co-4-la-v2.jpeg'),
(62, 'DC The Sun VN V2', 'Dây Chuyền', '330.000', '', '', 'DC-da-tim-v2.jpeg'),
(63, 'DC Cỏ 4 Lá V2', 'Dây Chuyền', '294.500', '', '', 'DC-co-4-la.jpeg'),
(64, 'DC Tim Đá V2', 'Dây Chuyền', '310.000', '', '', 'DC-da-tim-v2.jpeg'),
(65, 'DC Tim Chéo Đá VN V3', 'Dây Chuyền', '294.500', '', '', 'DC-Hoa-Da-Tim-Moc-VN.jpeg'),
(66, 'DC Hành Tinh VN V2 - CZ Thường', 'Dây Chuyền', '330.000', '', '', 'DC-milky-Way-VN-V7.jpeg'),
(67, 'DC Tim 2 Cánh Chéo Đá VN', 'Dây Chuyền', '294.500', '', '', 'DC-Milky-Way-VN.jpg'),
(68, 'DC Tim Chéo Đá VN', 'Dây Chuyền', '320.000', '', '', 'DC-the-sun-vn2.jpeg'),
(69, 'DC Diamond in Circle size S', 'Dây Chuyền', '294.500', '', '', 'DC-hoa-tim-Đá-Moon.jpeg'),
(70, 'DC Milky Way VN V2 - Violet', 'Dây Chuyền', '320.000', '', '', 'DC-VN4.jpeg'),
(71, 'DC Trăng Đá Treo - Moonstone', 'Dây Chuyền', '300.000', '', '', 'Moonstone.jpeg'),
(73, 'LT Open Heart VN', 'Lắc Tay', '294.500', '310,000', '', 'LT3.jpg'),
(74, 'LT Milky Way VN - Đá Trắng', 'Lắc Tay', '304.000', '320,000', '', 'LT4.jpg'),
(75, 'LT Diamond In Circle', 'Lắc Tay', '266.000', '280,000', '', 'LT5.jpg'),
(76, 'LT Milky Way VN - Moon Stone', 'Lắc Tay', '313.500', '330,000', '', 'LT6.jpg'),
(77, 'LT Star In Moon - Moonstone', 'Lắc Tay', '280.000', '', '', 'LT7.jpeg'),
(78, 'LT Blue Sea Circle V3', 'Lắc Tay', '290.000', '', '', 'LT8.jpeg'),
(79, 'LT Cỏ 4 Lá VN V2', 'Lắc Tay', '290.000', '', '', 'LT9.jpeg'),
(80, 'LT Four Leaf V2', 'Lắc Tay', '330.000', '', '', 'LT10.jpeg'),
(81, 'LT Vòng Tròn Thanh Ngang V3', 'Lắc Tay', '270.000', '', '', 'LT11.jpeg'),
(82, 'LT Blue Glitter Moon V3', 'Lắc Tay', '290.000', '', '', 'LT12.jpeg'),
(83, 'LT Milky Way V7', 'Lắc Tay', '280.000', '', '', 'LT13.jpeg'),
(84, 'LT Hoa Đá VN', 'Lắc Tay', '290.000', '', '', 'LT15.jpeg'),
(85, 'LT Glitter Moon V2', 'Lắc Tay', '280.000', '', '', 'LT16.jpeg'),
(86, 'LT Tim Viền Hộp VN', 'Lắc Tay', '350.000', '', '', 'LT17.jpeg'),
(87, 'LT Mặt Tròn Đá Moon Viền Hộp VN - Size S', 'Lắc Tay', '350.000', '', '', 'LT18.jpeg'),
(88, 'LT Mặt Đá Hoa Viền Hộp VN', 'Dây Chuyền', '350.000', '', '', 'LT19.jpeg'),
(89, 'LT Mặt Tròn Đá Moon Viền Hộp VN - Size M', 'Lắc Tay', '350.000', '', '', 'LT20.jpeg'),
(90, 'LT Glitter Moon VN - Moonstone', 'Lắc Tay', '340.000', '', '', 'LT21.jpeg'),
(91, 'LT Blue Glitter Moon V2', 'Lắc Tay', '340.000', '', '', 'LT22.jpeg'),
(92, 'LT Mặt Đá Tròn Viền Hộp WG', 'Lắc Tay', '390.000', '', '', 'LT22.jpeg'),
(93, 'LT Mặt Tim Viền Đá Hộp WG', 'Lắc Tay', '390.000', '', '', 'LT23.jpeg'),
(94, 'LT Mặt Đá Viền Đá Hộp WG', 'Lắc Tay', '390.000', '', '', 'LT24.jpeg'),
(95, 'KT Blue Sea Circle V1', 'Khuyên Tai', '161.500', '170,000', '', 'KT1.jpg'),
(96, 'KT Hoa 5 Cánh Đá', 'Khuyên Tai', '160.000', '169,000', '', 'KT2.jpg'),
(97, 'KT Butterfly And Star VN', 'Khuyên Tai', '169.000', '', '', 'KT5.jpeg'),
(98, 'KT Circle And Butterfly VN', 'Khuyên Tai', '169.000', '', '', 'KT4.jpeg'),
(99, 'KT 4 Chấu VN - 4mm', 'Khuyên Tai', '110.000', '', '', 'KT3.jpg'),
(100, 'KT Chuồn Chuồn 2 Cánh Đá To', 'Khuyên Tai', '150.000', '', '', 'KT8.jpeg'),
(101, 'KT Vòng Tròn Dấu Cộng', 'Khuyên Tai', '190.000', '', '', 'KT9.jpeg'),
(102, 'KT 3 Lá Đá Treo', 'Khuyên Tai', '150.000', '', '', 'KT10.jpeg'),
(103, 'KT Hoa 6 Cánh Đá Treo', 'Khuyên Tai', '190.000', '', '', 'KT11.jpeg'),
(104, 'KT Vòng Tròn Sừng Hươu', 'Khuyên Tai', '170.000', '', '', 'KT12.jpeg'),
(105, 'KT Hoa 5 Cánh 1 Cánh Trơn', 'Khuyên Tai', '159.000', '', '', 'KT13.jpeg'),
(106, 'KT Hành Tinh Và Sao VN', 'Khuyên Tai', '170.000', '', '', 'KT14.jpeg'),
(107, 'KT Thiên Thần VN', 'Khuyên Tai', '190.000', '', '', 'KT15.jpeg'),
(108, 'KT Tim Xoắn 1 Viền Đá', 'Khuyên Tai', '160.000', '', '', 'KT16.jpeg'),
(109, 'KT Hành Tinh Và Trăng', 'Khuyên Tai', '1590.000', '', '', 'KT17.jpeg'),
(110, 'KT Tai Thỏ VN', 'Khuyên Tai', '160.000', '', '', 'KT8.jpeg'),
(111, 'KT Tim 6 Chấm Đá VN', 'Khuyên Tai', '160.000', '', '', 'KT9.jpeg'),
(112, 'KT Thiên Nga Trắng', 'Khuyên Tai', '190.000', '', '', 'KT19.jpeg'),
(113, 'KT Diamond Viền Vuông', 'Khuyên Tai', '170.000', '', '', 'KT20.jpeg'),
(114, 'KT Hoa 1 Cánh Đá VN', 'Khuyên Tai', '170.000', '', '', 'KT21.webp'),
(115, 'KT Sao Đá VN', 'Khuyên Tai', '129.000', '', '', 'KT22.png'),
(116, 'LT Huyền Thoại Biển Xanh Size S', 'Lắc Tay', '256.500', '270,000', '', 'LT1.jpg'),
(119, 'Combo To My Darling 399K', 'Combo Quà Tặng', '399.000', '', '', 'cb1.jpeg'),
(120, 'Combo My Sweetheart Pink 399K', 'Combo Quà Tặng', '399.000', '', '', 'cb2.jpeg'),
(121, 'Combo My Sweetheart Blue 549K', 'Combo Quà Tặng', '549.000', '', '', 'cb3.jpeg'),
(122, 'Combo My Sweetheart Blue', 'Combo Quà Tặng', '599.000', '', '', 'cb4.jpeg'),
(123, 'Combo My Sweetheart Red', 'Combo Quà Tặng', '599.000', '', '', 'cb5.jpeg'),
(124, 'Combo Dear My Love Red', 'Combo Quà Tặng', '549.000', '', '', 'cb6.jpeg'),
(125, 'Combo To My Darling', 'Combo Quà Tặng', '599.000', '', '', 'cb7.jpeg'),
(126, 'Combo Dear My Lover', 'Combo Quà Tặng', '549.000', '', '', 'cb8.jpeg'),
(127, 'Combo All My Heart', 'Combo Quà Tặng', '599.000', '', '', 'cb9.jpeg'),
(128, 'Combo My Sweetheart', 'Combo Quà Tặng', '599.000', '', '', 'cb9.jpeg'),
(129, 'Hộp Quà Tặng 399k - Xanh', 'Combo Quà Tặng', '200.000', '', '', 'cb11.jpg'),
(130, 'Hộp Quà Tặng 399k V2 - Xám', 'Combo Quà Tặng', '200.000', '', '', 'cb12.jpg'),
(131, 'Hộp Quà Tặng 399k - Hồng', 'Combo Quà Tặng', '200.000', '', '', 'cb13.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `user_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `password`) VALUES
(1, 'Nam', 'damvannam6626@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `paren_id` (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
