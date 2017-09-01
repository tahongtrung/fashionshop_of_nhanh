-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2016 at 05:24 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashionshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `privilege` tinyint(4) NOT NULL,
  `group` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `billdetail`
--

CREATE TABLE `billdetail` (
  `id` int(11) NOT NULL,
  `id_billpayment` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `quanity` int(50) NOT NULL,
  `date_delivere` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `billdetail`
--

INSERT INTO `billdetail` (`id`, `id_billpayment`, `id_product`, `status`, `quanity`, `date_delivere`) VALUES
(1, 2, 2, 1, 5, '2016-12-11'),
(2, 1, 1, 0, 3, '2016-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `billpayment`
--

CREATE TABLE `billpayment` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL,
  `totalamount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `billpayment`
--

INSERT INTO `billpayment` (`id`, `id_user`, `date`, `totalamount`) VALUES
(1, 1, '2016-12-14', 232423423),
(2, 2, '2016-12-15', 1234534),
(3, 2, '2016-12-12', 1312312),
(4, 1, '2016-12-08', 1000000),
(5, 1, '2016-12-26', 323423);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_code` varchar(50) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_code`, `category_name`) VALUES
(1, 'VA', 'Váy'),
(2, 'AT', 'Áo Thun'),
(3, 'TT', 'Quần Áo Thể Thao'),
(4, 'SM', 'Áo Sơ Mi'),
(5, 'QT', 'Quần Tây'),
(6, 'AK', 'Áo Khoác'),
(7, 'GI', 'Giày');

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE `manufacture` (
  `id` int(11) NOT NULL,
  `mf_code` varchar(50) NOT NULL,
  `mf_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`id`, `mf_code`, `mf_name`) VALUES
(1, 'AD', 'Adidas'),
(2, 'NI', 'Nike'),
(3, 'VT', 'Việt Tiến'),
(4, 'CO', 'Converse'),
(5, 'NB', 'New Balance');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `manufacture` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `view` int(10) NOT NULL,
  `price` decimal(18,0) NOT NULL,
  `love` int(100) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `size_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `manufacture`, `description`, `img`, `view`, `price`, `love`, `origin`, `size_id`) VALUES
(1, 'Áo không cổ ngắn tay nam Adidas AK1796', 2, 1, 'AD375FAAA1U8VHVNAMZ-3104006, Màu:  Xanh, Mẫu mã: AK1796, trọng lượng(KG): 0.3, Loại hình bảo hành: Không hỗ trợ bảo hành', 'images/ni5.png', 30, '595000', 0, 'Trung Quốc', 1),
(2, 'Áo golf nam Adidas Z97860', 6, 1, 'AD375FAAA1U8VHVNAMZ-2560244, Màu:  Xám, Mẫu mã: 4056564165163, trọng lượng(KG): 1, Kích thước sản phẩm (D x R x C cm): 25x25x10, Loại hình bảo hành: Không hỗ trợ bảo hành', 'images/ad3.png', 23, '1210000', 0, 'Trung Quốc', 2),
(3, 'Áo thun adidas GRADIENT TEE T-SHIRT', 2, 1, 'AD375FAAA1U8VHVNAMZ-3104006, Màu:  Xanh, Mẫu mã: AK1796, trọng lượng(KG): 0.3, Loại hình bảo hành: Không hỗ trợ bảo hành.', 'images/ad3.png', 33, '1020000', 0, 'Trung Quốc', 3),
(4, 'Áo thun Adidas SN Climachill TSHIRT', 2, 1, 'AD375FAAA1U8VHVNAMZ-2210512, Màu:  Xanh, Mẫu mã: 6457396534, trọng lượng(KG): 0.3, Kích thước sản phẩm (D x R x C cm): 60x35x3,Loại hình bảo hành: Không hỗ trợ bảo hành', 'images/ad4.png', 9, '859000', 0, 'Trung Quốc', 2),
(5, 'Áo golf nam Adidas AE5481', 2, 1, 'AD375FAAA1U8VHVNAMZ-2720756, Màu:  Trắng, Mẫu mã: TLM631AE54816, trọng lượng(KG): 0.5, Loại hình bảo hành: Không hỗ trợ bảo hành', 'images/ad3.png', 10, '1380000', 0, 'Việt Nam', 2),
(6, 'Áo NIKE/M-620321-010', 2, 2, 'o	NI958FAAA1U8VHVNAMZ-1513732, Màu:  Đen, Mẫu mã: M-643246831, trọng lượng(KG): 0.1, Kích thước sản phẩm (D x R x C cm): 20x20x3, Sản xuất tại: Trung Quốc, Loại hình bảo hành: Không hỗ trợ bảo hành', 'images/ni5.png', 22, '562000', 0, 'Trung Quốc', 3),
(7, 'Áo Nike M-644779-100', 2, 2, 'NI958FAAA1U8VHVNAMZ-89453732, Màu:  Đen, Mẫu mã: M-643246831, trọng lượng(KG): 0.1, Kích thước sản phẩm (D x R x C cm): 20x20x3, Sản xuất tại: Trung Quốc, Loại hình bảo hành: Không hỗ trợ bảo hành', 'images/ni5.png', 6, '938000', 0, 'Việt Nam', 1),
(8, 'Áo NIKE/M-669832-100', 2, 2, 'NI958FAAA1U8VHVNAMZ-1513966, Màu:  Trắng, Mẫu mã: M-6674331, trọng lượng(KG): 0.1, Kích thước sản phẩm (D x R x C cm): 20x20x3, Sản xuất tại: Trung Quốc, Loại hình bảo hành: Không hỗ trợ bảo hành', 'images/ni6.png', 9, '695000', 0, 'Trung Quốc', 3),
(9, 'Áo NIKE/M-669832-063', 2, 2, 'NI958FAAA1U8VHVNAMZ-1513732, Màu:  Đen, Mẫu mã: M-643246831, trọng lượng(KG): 0.1, Kích thước sản phẩm (D x R x C cm): 20x20x3, Sản xuất tại: Trung Quốc, Loại hình bảo hành: Không hỗ trợ bảo hành', 'images/ni4.png', 48, '715000', 0, 'Việt Nam', 1),
(10, 'Áo NIKE/M-620321-010', 2, 2, 'NI958FAAA1U8VHVNAMZ-1513542, Màu:  Xám, Mẫu mã: M-643246831, trọng lượng(KG): 0.1, Kích thước sản phẩm (D x R x C cm): 20x20x3, Sản xuất tại: Trung Quốc, Malaysia, Indonesia, Thái Lan, Loại hình bảo hành: Không hỗ trợ bảo hành', 'images/ni5.png', 9, '695000', 0, 'Thái Lan', 1),
(11, 'Áo NIKE nam 696700-436/S', 2, 2, 'o	NI958FAAA1U8VHVNAMZ-2386542, Màu:  Xanh, Mẫu mã: M-64396831, trọng lượng(KG): 0.3, Kích thước sản phẩm (D x R x C cm): 20x20x3 , Loại hình bảo hành: Không hỗ trợ bảo hành.', 'images/ni6.png', 18, '682000', 0, 'Thái Lan', 2),
(12, 'Áo NIKE/M-519699-702', 4, 2, 'o	NI958FAAA1U8VHVNAMZ-15389542, Màu:  Xanh lá, Mẫu mã: M-986546831, trọng lượng(KG): 0.1, Kích thước sản phẩm (D x R x C cm): 20x20x3, Sản xuất tại: Trung Quốc , Loại hình bảo hành: Không hỗ trợ bảo hành.', 'images/ni6.png', 23, '695000', 0, 'Việt Nam', 1),
(13, 'Áo NIKE/M-644785-010', 4, 3, 'NI958FAAA1U8VHVNAMZ-1519842, Màu Đen, Mẫu mã: M-65346831/S, trọng lượng(KG): 0.1, Kích thước sản phẩm (D x R x C cm): 20x20x3, Sản xuất tại: Trung Quốc, Loại hình bảo hành: Không hỗ trợ bảo hành', 'images/ni8.png', 25, '749000', 0, 'Trung Quốc', 3),
(14, 'Áo Sơ Mi Nữ Cao Cấp', 4, 3, 'Áo Sơ Mi Đen có thiết kế đơn giản với form áo chuẩn, tay dài, cổ bẻ. Dễ dàng phối cùng short, jeans dài, chân váy...Phù hợp với tất cả  các cô nàng cá tính và hiện đại ', 'images/vt1.png', 16, '179000', 0, 'Việt Nam', 3),
(15, 'Áo Sơ Mi Nam Viền Trắng', 4, 3, 'Màu sắc hài hòa, dễ mặc, thích hợp với nhiều dáng người.\r\nThích hợp mặc cùng quần jeans, kaki, short ... tạo phong cách thời trang trẻ trung và ấn tượng.\r\nChất liệu: Kate cotton giúp áo lên dáng, form đẹp nhưng vẫn giữ được độ mềm mại.\r\n', 'images/vt1.png', 15, '210000', 0, 'Việt nam', 2),
(16, 'Áo Sơ Mi Nam Viền Trắng', 3, 4, 'Màu sắc hài hòa, dễ mặc, thích hợp với nhiều dáng người.\r\nThích hợp mặc cùng quần jeans, kaki, short ... tạo phong cách thời trang trẻ trung và ấn tượng.\r\nChất liệu: Kate cotton giúp áo lên dáng, form đẹp nhưng vẫn giữ được độ mềm mại.', 'images/vt1.png', 4, '210000', 0, 'Việt Nam', 3),
(17, 'Áo Sơ Mi Nam Viền Trắng', 4, 3, ':  Màu sắc hài hòa, dễ mặc, thích hợp với nhiều dáng người.\r\nThích hợp mặc cùng quần jeans, kaki, short ... tạo phong cách thời trang trẻ trung và ấn tượng.\r\nChất liệu: Kate cotton giúp áo lên dáng, form đẹp nhưng vẫn giữ được độ mềm mại', 'images/vt1.png', 22, '210000', 0, 'Việt Nam', 3),
(18, 'Áo NIKE', 2, 2, '', 'images/ni6.png', 58, '5000000', 0, 'Việt Nam', 1),
(19, 'fhfjghjgh', 2, 2, 'ghjghjgh', 'ghjgh5', 6, '656565', 5, 'Việt Nam', 2);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `name`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `birthday`, `email`, `phone`, `location`) VALUES
(1, 'test', '123456', 'Trần Văn A', '2016-12-16', 'tranvana@gmail.com', '', 'Hàm Thuâun'),
(2, 'admin', 'admin', 'Admin chnh chóả', '2016-12-14', 'admin@localhost', '', 'VN'),
(3, 'Nhanh', '123456', 'Phạm Nhanh', '1996-06-02', 'phamnhanhitus@gmail.com', '', 'Tân Phú, tp.HCM'),
(4, 'Nhanh', '12345', 'Nhanh Phạm', '1996-06-02', 'phamnhanhitus@gmail.com', '012232', 'sdasda'),
(5, 'Nhanh123', '123456', 'Phạm Nhanh', '2016-06-02', 'phamnhanh@123.com', '0123456', 'Bình Thuận');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user_2` (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `billdetail`
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_billpayment` (`id_billpayment`),
  ADD UNIQUE KEY `id_product` (`id_product`);

--
-- Indexes for table `billpayment`
--
ALTER TABLE `billpayment`
  ADD PRIMARY KEY (`id`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `manufacture` (`manufacture`),
  ADD KEY `size_id` (`size_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `billdetail`
--
ALTER TABLE `billdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `billpayment`
--
ALTER TABLE `billpayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `billdetail`
--
ALTER TABLE `billdetail`
  ADD CONSTRAINT `billdetail_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `billdetail_ibfk_2` FOREIGN KEY (`id_billpayment`) REFERENCES `billpayment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `billpayment`
--
ALTER TABLE `billpayment`
  ADD CONSTRAINT `billpayment_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`manufacture`) REFERENCES `manufacture` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`size_id`) REFERENCES `size` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
