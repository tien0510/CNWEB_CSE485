-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 11:30 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhtl`
--

-- --------------------------------------------------------

--
-- Table structure for table `canbo`
--

CREATE TABLE `canbo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chucvu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coquan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `id_donvi` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `canbo`
--

INSERT INTO `canbo` (`id`, `name`, `thumbnail`, `chucvu`, `coquan`, `email`, `sdt`, `id_donvi`) VALUES
(1, 'Nguyễn Thanh Tùng', 'http://cse.tlu.edu.vn/Portals/0/Images/2016/Tung%20VIASM.jpg', 'Trưởng Ban', '0353037823', 'NTT@gmail.com', 123456789, 1),
(2, 'Kiều Tuấn Dũng', 'https://lh3.googleusercontent.com/proxy/Ii7NlL23-Flih25dLrZ_HHAbogzerc_xgRtBjgTndJ0Tb-GNjAHnUA-BafLoSXfDJAWX3Yl9m2CDV5L9RujgcqLcjt_Zje29kVxyWG2qQ4IKDoQ', 'Trưởng BM', '0353037823', 'kituzu@e.tlu.edu.vn', 123456789, 24),
(3, 'Nguyễn Khánh Linh', 'http://sie.tlu.edu.vn/Portals/0/Nguyen%20Khanh%20Linh.jpg', 'Phó Ban', '0353037823', 'NTTH@gmail.com', 123456789, 1),
(4, 'Nguyễn Thị Thu Hương', 'http://cse.tlu.edu.vn/Portals/0/2016/HuongNT.jpg', 'Trợ Lý Hội Đồng', '0353037823', 'NKL@gmail.com', 369852741, 2),
(5, 'Nguyễn Hữu Thọ', 'http://cse.tlu.edu.vn/Portals/0/Users/nguyenhuutho.jpg', 'Trưởng Khoa', '0353037823', 'NTH@gmail.com', 123456789, 20),
(6, 'Đỗ Lân', 'https://lh3.googleusercontent.com/proxy/kLFllulfAfJKGFyIoUVPzBc_jHlbvpDYDMCs6AkhubR-8xE0TdJ7l8-VA_GpgEP1SL8kaMI4ttw2bse_qGbTccryPg', 'Trưởng HĐ', '0353037823', 'DL@gmail.com', 1236547856, 2),
(7, 'Nguyễn Đức Hậu', 'http://cse.tlu.edu.vn/Portals/0/Users/Nguyen%20duc%20hau.jpg', 'Trưởng VPĐ', '0353037823', 'NDH@gmail.com', 369852654, 3),
(8, 'Phạm Xuân Cường', 'http://cse.tlu.edu.vn/Portals/0/Users/cuongpx.jpg', 'Phó Phòng', '0353037823', 'PXC@gmail.com', 753412344, 4),
(9, 'Phan Thị Thanh Huyền', 'http://cse.tlu.edu.vn/Portals/0/2016/phan%20thanh%20huyen.jpg', 'Giảng Viên', '0353037823', 'PTTH@e.tlu.edu.vn', 369854123, 6),
(10, 'NGuyễn Văn Đắc', 'http://cse.tlu.edu.vn/Portals/0/Users/dac.jpg', 'Trợ Lý Công Đoàn', '0353037823', 'NVD@e.tlu.edu.vn', 536987125, 4),
(11, 'Nguyễn THị Vân', 'http://cse.tlu.edu.vn/Portals/0/2016/nguyen%20thi%20van.jpg', 'Giảng Viên ', '0353037823', 'NTV@e.tlu.edu.vn', 312954865, 7),
(12, 'Đặng Thị Thu Hiền', 'http://cse.tlu.edu.vn/Portals/0/Users/DangThuHien.jpg', 'P.Trưởng Trạm', '0363214862', 'DTTH@e.tlu.edu.vn', 123456789, 19),
(23, 'Nguyễn Quỳnh Diệp', 'http://cse.tlu.edu.vn/Portals/0/Users/%e1%ba%a3nh%20th%e1%ba%bb.png', 'Trưởng Khoa', '0363123654', 'diepnq@tlu.edu.vn', 123654125, 8),
(24, '	Nguyễn Ngọc Doanh ', 'http://cse.tlu.edu.vn/Portals/0/Nguyen%20Ngoc%20Doanh.jpg', 'Giảng viên', '0363123654', 'doanhnn@tlu.edu.vn', 641564916, 9),
(25, '	Phạm Thanh Bình', 'http://cse.tlu.edu.vn/Portals/0/Images/2016/A%20Binh.jpg', 'Trưởng Văn Phòng Đoàn', '0363123654', 'binhpt@tlu.edu.vn', 315192969, 5),
(26, '	Lý Anh Tuấn', 'http://cse.tlu.edu.vn/Portals/0/Users/Ly_Anh_Tuan.jpg', 'Trưởng Phòng Khảo Thí', '0315929266', 'tuanla@tlu.edu.vn', 123654125, 10),
(27, '	Nguyễn Thị Phương Thảo', 'http://cse.tlu.edu.vn/Portals/0/Users/thao.jpg', 'Trưởng Phòng Tài Chính', '0315929266', 'thaont@tlu.edu.vn', 365266967, 11),
(28, '	Phạm Xuân Đồng', 'http://cse.tlu.edu.vn/Portals/0/Users/phamxuandong.jpg', 'Trưởng Phòng Hợp Tác Quốc Tế', '0363123654', 'dongpx@tlu.edu.vn', 321758521, 12),
(29, '	Nguyễn Ngọc Hà', 'http://cse.tlu.edu.vn/Portals/0/Users/ha.jpg', 'Thư Kí Phòng CT-CTSV', '0362321456', 'hantn@tlu.edu.vn', 2147483647, 13),
(30, '	Vũ Mạnh Tới', 'http://cse.tlu.edu.vn/Portals/0/Users/Vu_Manh_Toi.jpg', 'Trưởng Phòng KHCN', '0369851421', 'toivm@tlu.edu.vn', 966452145, 14),
(31, '	Nguyễn Hằng Phương', 'http://cse.tlu.edu.vn/Portals/0/Users/HPhuong.jpg', 'Thư Kí Thư Viện', '0369851421', 'phuongnh@tlu.edu.vn', 641564916, 15),
(32, '	Nguyễn Mạnh Hiển', 'http://cse.tlu.edu.vn/Portals/0/Users/nguyen%20manh%20hien%201.jpg', 'Trưởng BM', '0363123654', 'hiennm@tlu.edu.vn', 353037823, 22),
(33, '	Đỗ Văn Hải', 'http://cse.tlu.edu.vn/Portals/0/2016/Do%20Van%20Hai.jpg', 'Giảng viên', '0363123654', 'dvh@e.tlu.edu.vn', 123654125, 23),
(34, '	Nguyễn Thị Lý', 'http://cse.tlu.edu.vn/Portals/0/2016/nguyen%20thi%20ly.jpg', 'Giảng viên', '0369851421', 'NTL@gmail.com', 315192969, 22),
(35, '	Lưu Đức Trung', 'http://cse.tlu.edu.vn/Portals/0/Users/TrungLD.png', 'Trưởng BM', '0362321456', 'luuductrung@tlu.edu.vn', 321758521, 23),
(36, '	Đỗ Oanh Cường', 'http://cse.tlu.edu.vn/Portals/0/2016/Do%20Oanh%20Cuong%202.jpg', 'Giảng Viên', '0362321456', 'cuongdo@tlu.edu.vn', 315192969, 22),
(37, '	Nguyễn Văn Nam', 'http://cse.tlu.edu.vn/Portals/0/Users/ngvannam.jpg', 'Giảng Viên', '0362321456', 'NVN@e.tlu.edu.vn', 315192969, 24),
(38, '	Nguyễn Ngọc Quỳnh Châu ', 'http://cse.tlu.edu.vn/Portals/0/Users/chau.jpg', 'Giảng viên', '0363123654', 'nnqc@e.tlu.edu.vn', 369852147, 24);

-- --------------------------------------------------------

--
-- Table structure for table `donvi`
--

CREATE TABLE `donvi` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sophong` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `maytruc` int(255) DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_child` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donvi`
--

INSERT INTO `donvi` (`id`, `name`, `sophong`, `maytruc`, `diachi`, `email`, `website`, `id_child`) VALUES
(1, 'Ban Giám Hiệu', 'P202', 368236741, 'Tầng2  toà A1', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 1),
(2, 'Hội Đồng Trường', 'P102', 36974512, 'Tầng 1 nhà B2', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 2),
(3, 'Văn Phòng Đảng Uỷ', 'P407', 427241274, 'tầng 4 nhà  A2', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 3),
(4, 'Văn Phòng Công Đoàn', 'P453', 124852741, 'tầng 4 nhà  A2', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 3),
(5, 'Văn Phòng Đoàn Thanh Niên', 'P410', 124785963, 'tầng 4 nhà  A2', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 3),
(6, 'Phòng Hành Chính Tổng Hợp', 'P114', 564127851, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(7, 'Phòng Quản Trị', 'P136', 784963245, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(8, 'Phòng Tổ Chức Cán Bộ', 'P101', 364235124, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(9, 'Phòng Đào Tạo', 'P102', 963258753, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(10, 'Phòng Khảo Thí Và Đảm Bảo Chất Lượng', 'P105', 305896352, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(11, 'Phòng Tài Chinh-Kế Toán', 'P113', 312654861, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(12, 'Phòng Hợp Tác Quốc Tế', 'P124', 236984360, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(13, 'Phòng Chính Trị & Công Tác Sinh Viên', 'P131', 145302753, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(14, 'Phòng Khoa Học Công Nghệ', 'P145', 141239751, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(15, 'Thư Viện', 'P159', 420364850, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(19, 'Trạm y tế', 'P164', 301425762, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(20, 'Khoa Công Nghệ Thông Tin', 'P230', 363951364, 'Tầng 2 Toà C5 ', 'CNTTtlu@e.tlu.edu.vn', 'CTNTT.edu.vn', 20),
(22, 'BM Toán Học', 'p201', NULL, NULL, NULL, NULL, 20),
(23, 'BM Kỹ thuật MT & Mạng', 'P207', NULL, NULL, NULL, NULL, 20),
(24, 'BM Hệ Thống Thông Tin', 'P223', NULL, NULL, NULL, NULL, 20);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `taikhoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `taikhoan`, `matkhau`, `trangthai`) VALUES
(1, 'admin', '1', b'1'),
(2, 'user1', '1', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canbo`
--
ALTER TABLE `canbo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_donvi` (`id_donvi`);

--
-- Indexes for table `donvi`
--
ALTER TABLE `donvi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_child` (`id_child`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `canbo`
--
ALTER TABLE `canbo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `donvi`
--
ALTER TABLE `donvi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `canbo`
--
ALTER TABLE `canbo`
  ADD CONSTRAINT `Fk_donvi` FOREIGN KEY (`id_donvi`) REFERENCES `donvi` (`id`);

--
-- Constraints for table `donvi`
--
ALTER TABLE `donvi`
  ADD CONSTRAINT `FK_child` FOREIGN KEY (`id_child`) REFERENCES `donvi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
