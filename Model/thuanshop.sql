-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 09, 2020 at 06:52 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

DROP TABLE IF EXISTS `binhluan`;
CREATE TABLE IF NOT EXISTS `binhluan` (
  `mabl` int(11) NOT NULL AUTO_INCREMENT,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text NOT NULL,
  PRIMARY KEY (`mabl`),
  KEY `fk_bl_mahh` (`mahh`),
  KEY `fk_bl_kh` (`makh`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `binhluan`
--


-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

DROP TABLE IF EXISTS `cthoadon`;
CREATE TABLE IF NOT EXISTS `cthoadon` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  PRIMARY KEY (`masohd`),
  KEY `fk_cthd_mahh` (`mahh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cthoadon1`
--


-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

DROP TABLE IF EXISTS `hanghoa`;
CREATE TABLE IF NOT EXISTS `hanghoa` (
  `mahh` int(11) NOT NULL AUTO_INCREMENT,
  `tenhh` varchar(255) NOT NULL,
  `gia` float NOT NULL,
  `mota` text NOT NULL,
  `soluongton` int(11) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `maloai` int(11) NOT NULL,
  `soluotxem` int(11) NOT NULL,
  
  PRIMARY KEY (`mahh`),
  KEY `FK_hanghoa_maloai` (`maloai`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- insert data

INSERT INTO`hanghoa` (`mahh`, `tenhh`, `gia`, `mota`, `soluongton`, `hinh`, `maloai`, `soluotxem`) VALUES
(12, 'Starscream MPM10KO', '1300000', '<p>Starscream, c&aacute;nh tay phải, vệ sĩ, nh&agrave; khoa học &amp; đứng đầu bộ phận t&aacute;c chiến tr&ecirc;n kh&ocirc;ng của Deception. Vũ kh&iacute; của Megatron cũng do Starscream chế tạo.<br />\r\n- T&agrave;i năng c&oacute; thừa v&agrave; thủ đoạn kh&ocirc;ng thiếu, Starscream lu&ocirc;n tin m&igrave;nh c&oacute; t&agrave;i v&agrave; xứng đ&aacute;ng l&atilde;nh đạo hơn Megatron, tham vọng v&ocirc; c&ugrave;ng lớn, xảo quyệt mưu m&ocirc; nhưng chưa bao giờ th&agrave;nh c&ocirc;ng trong việc lật đổ Megatron.<br />\r\n- Khả năng bay lượn của Starscream kh&ocirc;ng phải dạng vừa, c&oacute; lẽ l&agrave; nhanh nhất trong Decepticon, khả năng cận chiến cũng cực đỉnh khi &aacute;p đảo c&ugrave;ng l&uacute;c Bumblebee + Iron Hide trong phim Transformers 1.<br />\r\n- Gi&aacute; đặt trước: 1.300.000 VNĐ ( Gi&aacute; chỉnh thức 1.400.000 VNĐ )<br />\r\n- K&iacute;ch thước: 27 CM<br />\r\n- Chất liệu: ABS &amp; kim loại diecast<br />\r\n- Transform được sang dạng phản lực F22<br />\r\n- H&agrave;ng dự kiến ph&aacute;t h&agrave;nh trong T11/2020</p>\r\n', 100, 'star1604043745.jpg', 23, 1),
(13, 'Bumblebee 5U - Bản sao Bumblbee DLX 3A', '1850000', '<p>Phi&ecirc;n bản l&agrave;m lại như 2 anh em sinh đ&ocirc;i với mẫu gốc l&agrave; Bumblbee DLX của 3A/ThreeZero.<br />\r\nC&aacute;c th&ocirc;ng số rất giống nhau v&agrave; c&ugrave;ng tương đương số lượng kim loại tầm 50%.<br />\r\n<br />\r\n- K&iacute;ch thước: 21CM<br />\r\n- Chất liệu: ABS &amp; kim loại Die-cast&nbsp;<br />\r\n- LED ở mắt &amp; s&uacute;ng.</p>\r\n', 50, 'bum1604044053.png', 23, 1),
(14, '3A/THREEZEROBUMBLEBEE PREMIUM', '2000000', '<p>Materials:</p>\r\n\r\n<p>ABS, PVC, POM, ZINC ALLOY</p>\r\n\r\n<p><br />\r\nFEATURES:</p>\r\n\r\n<p>Officially Licensed by Hasbro and TakaraTomy</p>\r\n\r\n<p>Approximately 14inches Tall ~ 36 CM</p>\r\n\r\n<p>90 Points of Articulation</p>\r\n\r\n<p>Die-cast Metal Frame</p>\r\n\r\n<p>LED Illuminated Eyes and Stinger Blaster</p>\r\n\r\n<p>Ability to switch between Standard Blue or Retaliation Mode Red eye color</p>\r\n\r\n<p>Articulated Ab Panel with Cassette Player Detailing!</p>\r\n', 100, '11604045675.jpg', 23, 1),
(15, 'Chiến thần Lữ Bố - LYU BU THE DOOM MECHA PREMIUM THREEZERO', '12500000', '<p>Figure stands ~46cm (18 inches) tall;</p>\r\n\r\n<p>Fully-posable figure features over 100 points of articulation;</p>\r\n\r\n<p>Incredibly detailed mechanical parts;</p>\r\n\r\n<p>Exchangeable shoulder armor;</p>\r\n\r\n<p>Articulated fingers;</p>\r\n\r\n<p>Helmet &amp; chest features a light-up LED function;</p>\r\n\r\n<p>Incredible paint application to highlight all the details with weathering effect;</p>\r\n\r\n<p>Includes highly detailed &lsquo;FANGTIANHUAJI (Halberd)&rsquo; weapon.</p>\r\n\r\n<p>Materials used: ABS, PVC, POM, PC.</p>\r\n\r\n<p>Requires: 4 x AG13 Button Cell Batteries for light-up LED function (Batteries Not Included).</p>\r\n', 100, '21604045721.jpg', 23, 1),
(16, 'AOYI MECH SS38KO - Optimus Prime', '249000', '<p>Mẫu Optimus Prime b&aacute;n chạy nhất với thiết kế theo phim Bumblebee 2018 v&agrave; gi&aacute; cực kỳ hợp l&yacute;<br />\r\n- K&iacute;ch thước: 18 CM<br />\r\n- Chất liệu: ABS &amp; kim loại diecast<br />\r\n- Transform được th&agrave;nh xe tải<br />\r\n<br />\r\n- Credit: PJ-PLAYTOYS -</p>\r\n', 50, '31604045916.jpg', 23, 1),
(17, '[Pre-Order] Nemesis Prime Toyworld - TWF09', '3750000', '<p>99% r&acirc;n chơi Trans đều bỏ lỡ Nemeis Prime của ThreeZero v&igrave; em n&oacute; qu&aacute; limited v&agrave; kh&ocirc;ng muốn bỏ tiền ra mua với mức gi&aacute; tăng gấp hơn 2 lần th&igrave; đ&acirc;y ch&iacute;nh l&agrave; phi&ecirc;n bản Nemeis Prime kh&ocirc;ng thể bỏ qua tới từ ToyWorld.</p>\r\n\r\n<p>Nemesis Prime chưa khi n&agrave;o k&eacute;m HOT hơn bản gốc Optimus Prime, c&aacute;i m&agrave;u đen xanh đỏ t&iacute;m ma mị của Nemesis lu&ocirc;n l&agrave;m anh chị em rụng tim v&agrave; muốn sở hữu em n&oacute; ngay v&agrave; lu&ocirc;n.</p>\r\n\r\n<p>ToyWorld đ&atilde; qu&aacute; th&agrave;nh c&ocirc;ng với bản TW-F09 Optimus Prime n&ecirc;n thừa thắng x&ocirc;ng l&ecirc;n để v&eacute;t cạn v&iacute; của anh em trong năm nay.</p>\r\n', 50, '41604046031.jpg', 23, 1),
(18, 'RECAST - TƯỢNG GRIMLOCK PRIME 1', '16300000', '<p>Đẹp th&ocirc;i rồi ae ạ! B&aacute;c Bảy c&oacute; thể l&agrave;m story thiếu muối nhưng ri&ecirc;ng khoản kỹ xảo v&agrave; tạo h&igrave;nh nh&acirc;n vật th&igrave; v&ocirc; địch. Ai đời đi tạo ra con khủng long m&aacute;y đẹp như thế n&agrave;y th&igrave; v&iacute; tiền đỡ l&agrave;m sao.</p>\r\n\r\n<p>Đẹp thế nhưng nhẹ tiền lắm anh em ạ. Tất nhi&ecirc;n l&agrave; nhẹ tiền khi so với con h&agrave;ng gốc của prime 1 chứ từ PVC m&agrave; nhảy l&ecirc;n resin/ polystone th&igrave; căng lắm đ&oacute;.</p>\r\n', 50, '51604046146.jpg', 23, 1),
(19, 'Mô hình Transformer - M09 FREEDOM LEADER OPTIMUS PRIME', '21900000', '<p>Chỉ ph&aacute;t h&agrave;nh 1 lần duy nhất !<br />\r\n<br />\r\n- K&iacute;ch thước: 31 CM<br />\r\n- Chất liệu: ABS &amp; diecast kim loại<br />\r\n- Phụ kiện: S&uacute;ng<br />\r\n- LED mắt.</p>\r\n', 50, '61604046247.jpg', 23, 1),
(20, 'ZS-01 SHOCKWAVE SS56 KO OVERSIZE', '1350000', '<p>Lu&ocirc;n lu&ocirc;n lắng nghe l&acirc;u l&acirc;u mới hiểu, d&ugrave; sao chậm c&ograve;n hơn kh&ocirc;ng. Sau bao lần tr&igrave; ho&atilde;n cuối c&ugrave;ng em h&agrave;ng được mong đợi nhất năm qua cũng đ&atilde; ch&iacute;nh thức cho đặt trước.</p>\r\n\r\n<p>Đặt trước Shockwave ZS-01, chiều cao khủng 35 CM<br />\r\n- Khả năng transform mượt m&agrave; sang dạng xe tăng.<br />\r\n- LED ở mắt, s&uacute;ng, lưng, qu&aacute; nhiều LED&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t7f/1/16/1f60a.png\" style=\"height:16px; width:16px\" />=))<br />\r\n- Tay cử động linh hoạt c&aacute;c ng&oacute;n, đặc điểm nhận diện của c&aacute;c mẫu mới ra mắt gần đ&acirc;y.<br />\r\n- Gi&aacute; ch&iacute;nh thức: 1.350.000 VNĐ<br />\r\n- Gi&aacute; đặt trước: 1.290.000 VNĐ, c&oacute; gi&aacute; tốt hơn cho c&aacute;c kh&aacute;ch đ&atilde; mua c&aacute;c mẫu Trans tr&ecirc;n 1tr kh&aacute;c tại shop</p>\r\n', 100, '71604046294.jpg', 23, 1),
(21, 'WJ - Blackout/Hide Shadow', '1500000', '<p>M&ocirc; h&igrave;nh Hide Shadow KO aka Blackout Set B, l&agrave; Decepticon xuất hiện đầu ti&ecirc;n trong phần 1 Transformers, Blackout dọn sạch cả căn cứ kh&ocirc;ng qu&acirc;n của l&iacute;nh Mỹ v&agrave; su&yacute;t đ&aacute;nh l&eacute;n th&agrave;nh c&ocirc;ng Optimus Prime.<br />\r\n<br />\r\n- Chất liệu nhựa ABS cao cấp + die cast kim loại<br />\r\n- K&iacute;ch thước dạng robot: cao 32 cm<br />\r\n- K&iacute;ch thước dạng trực thăng: D&agrave;i 65 cm, cao 17 cm</p>\r\n', 50, '71604046523.jpeg', 23, 1),
(22, 'TƯỢNG AQUAMAN SILICON BÁN THÂN TỈ LỆ 1:1 - Infinity Studios', '88000000', '<p>- K&iacute;ch thước: H:116cm W:79cm L:57cm<br />\r\n- Chất liệu: Poly Stone, platinum silicone, high temperature fiber, leather,<br />\r\n- Gi&aacute;: 88.000.000 đ<br />\r\n- Cọc: 39.500.000 đ<br />\r\n- Thời gian Pre-Order: 7:00pm 13/08/2020 đến 7:00pm 13/09/2020 (1 th&aacute;ng)<br />\r\n- Thời gian dự kiến ph&aacute;t h&agrave;nh:: Q4 2021<br />\r\n- Số lượng giới hạn: 298 bản</p>\r\n', 50, 'awa1604046647.png', 24, 0),
(23, '[Pre-Order] Queen Studios - Iron Man Mark 7 1/2 Scale', '52500000', '<p>&nbsp;H&atilde;ng: Queen Studios<br />\r\n- Gi&aacute; PO: 53tr900K (Chưa bao gồm ph&iacute; vận chuyển về VN, dự kiến 2-4 triệu)<br />\r\n- Cọc: 17tr900K - thanh to&aacute;n lần 2 khi h&agrave;ng ra mắt: 20tr<br />\r\n- K&iacute;ch thước: Cao 116 CM x Rộng 66 CM x D&agrave;i 60 CM - Tỉ lệ: 1/2<br />\r\n- Hạn PO: Đến khi hết h&agrave;ng<br />\r\n- Limited: 888 bản Worldwide<br />\r\n- Dự kiến ph&aacute;t h&agrave;nh: Q3/2021<br />\r\n- Bản quyền: Marvel</p>\r\n', 50, 'dc1604046702.jpg', 24, 0),
(24, 'Mô hình Marvel - Hulk', '680000', '<p>Chi tiết :<br />\r\n- C&oacute; khớp cử động&nbsp;<br />\r\n- Quần bằng vải<br />\r\nChất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 22cm</p>\r\n', 50, 'hug1604046750.jpg', 24, 0),
(25, 'Mô hình Marvel - Spiderman #1', '675000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 16cm</p>\r\n', 100, 'slider1604046796.jpg', 24, 1),
(26, 'Mô hình Marvel - Thanos End-Game edition', '650000', '<p>Chi tiết :&nbsp;<br />\r\n- C&oacute; khớp chắc chắn tạo d&aacute;ng theo &yacute; muốn<br />\r\n- Nhiều phụ kiện thay thế&nbsp;<br />\r\nChất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 20cm</p>\r\n', 50, 'tha1604046850.jpg', 24, 1),
(27, 'Mô hình Joker #1', '1450000', '<p>Chi tiết :<br />\r\n- C&oacute; khớp chắc chắn tạo d&aacute;ng thoải m&aacute;i&nbsp;<br />\r\n- Phụ kiện đi k&egrave;m như tr&ecirc;n h&igrave;nh<br />\r\nChất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 30cm&nbsp;</p>\r\n', 50, 'jokder1604046920.jpg', 24, 1),
(28, 'Mô hình Marvel - Ironman MK50', '890000', '<p>Chi tiết :&nbsp;<br />\r\n- C&oacute; khớp cử động chắc chắn - tạo nhiều d&aacute;ng&nbsp;<br />\r\n- Nhiều phụ kiện đi k&egrave;m đầy đủ như tr&ecirc;n ảnh&nbsp;<br />\r\nChất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 16cm</p>\r\n', 100, '81604047162.jpg', 24, 1),
(29, '[PRE-ORDER] VTSTOYS CLOUD STRIFE - FINAL FANTASY VII REMAKE', '3700000', '<p>VTSTOYS th&igrave; c&oacute; thể ho&agrave;n to&agrave;n tự tin với chất lượng rồi, mẫu Cloud Strife 1/6 đỉnh nhất thỏa l&ograve;ng fan tr&ocirc;ng đợi bao năm.</p>\r\n\r\n<p>☑️&nbsp;Bản ti&ecirc;u chuẩn: 3.700.000 đ<br />\r\n☑️&nbsp;Bản deluxe: 4.700.000 đ<br />\r\&nbsp;Hạn PO: 22/10<br />\r\&nbsp;Dự kiến ph&aacute;t h&agrave;nh: Q2/2021</p>\r\n', 50, 'fan1604047219.jpg', 25, 0),
(30, 'J.T studio - STREET MASK - 5TH - Tôn Ngộ Không', '6900000', '<p>Số lượng: 399 bản</p>\r\n\r\n<p>- H&atilde;ng: J.T studio</p>\r\n\r\n<p>- K&iacute;ch thước / Tỉ lệ: 30 CM, 1/6</p>\r\n', 50, 'khong1604047331.jpg', 25, 1),
(31, 'Mô hình resin Popeye 1/6', '3400000', '<p>Popeye, kẻ ti&ecirc;m nhiễm v&agrave;o đầu tui ảo tưởng sức mạnh b&aacute; đạo của rau ch&acirc;n vịt&nbsp;</p>\r\n\r\n<p>Mẫu Popeye super super-duper n&agrave;y nh&igrave;n ph&ecirc; qu&aacute; đ&aacute;ng, tỉ lệ 1/6 cao tầm 32-33 CM, chất liệu resin, sơn rất đẹp lại full tatoo, qu&aacute; l&agrave; awesome lu&ocirc;n.</p>\r\n\r\n<p>Mẫu n&agrave;y ra mấy năm rồi m&agrave; sx rất &iacute;t n&ecirc;n giờ h&agrave;ng khan hiếm</p>\r\n', 50, 'pop1604047382.png', 25, 1),
(32, 'Mô hình DragonBall - Goku body silicon #1', '3650000', '<p>Chất liệu : Body Silicon&nbsp;<br />\r\nK&iacute;ch thước : Tỉ lệ 1/6 ~ 35cm<br />\r\n- H&agrave;ng order 7-9 ng&agrave;y</p>\r\n', 50, 'ton1604047434.jpg', 25, 0),
(33, '[Pre-Order] MOZ STUDIO HOKAGE TSUNADE MSAF001', '3350000', '<p><strong>M&ocirc; h&igrave;nh TSUNADE 1/6 từ MOZ STUDIO</strong></p>\r\n\r\n<p>- Tỉ lệ/ Chiều cao: 1:6 - 30CM<br />\r\n- Chất liệu: PVC, ABS, Vải&nbsp;<br />\r\n- Thời hạn đặt trước: 13/06/2020<br />\r\n- Thời gian ph&aacute;t h&agrave;nh: Q4/2020</p>\r\n', 50, 'tsu1604047482.jpg', 25, 1),
(34, '[PRE-ORDER] QUAN VŨ - GUAN YU INFNITY STUDIO 1/7', '8900000', '<p>Rất nhiều kh&aacute;ch h&agrave;ng mong muốn c&oacute; phi&ecirc;n bản nhỏ hơn với gi&aacute; hợp l&yacute; hơn để trưng b&agrave;y, năm ngo&aacute;i shop đ&atilde; chuyển lời nhưng h&atilde;ng chưa phản hồi cụ thể th&igrave; bất ngờ năm nay xuất hiện phi&ecirc;n bản cực đẹp của Quan Vũ được giới thiệu tại Wonderfest Shanghai 2020, với k&iacute;ch thước v&ocirc; c&ugrave;ng hợp l&yacute; để b&agrave;y tr&ecirc;n b&agrave;n hay kệ nhỏ<br />\r\n<br />\r\n- K&iacute;ch thước: 45 x 40 x 19 CM<br />\r\n- Chất liệu: Polystone<br />\r\n- Gi&aacute;: 8.900.000 đ - cọc 3tr500K - cọc sớm nhận h&agrave;ng sớm<br />\r\n- Limited: 333 bản - sắp sold out<br />\r\n- Dự kiến ph&aacute;t h&agrave;nh: Q1 - Q2/2021</p>\r\n', 50, 'quanvu1604047562.jpg', 26, 1),
(35, 'Last Sleep - Son Goku SSJ 1/4 Scale Resin Statue', '10000000', '<p>K&iacute;ch thước:</p>\r\n\r\n<p>- Tỉ lệ 1/4: cao 71cm, rộng 48cm, s&acirc;u 40cm.&nbsp;</p>\r\n\r\n<p>- Tỉ lệ 1/6: cao 47cm, rộng 32cm, s&acirc;u 27cm.&nbsp;</p>\r\n\r\n<p>Giới hạn: 388 bản</p>\r\n', 50, 'las1604047604.jpg', 26, 0),
(36, '[ PRE-ORDER ] Tượng Triệu Vân Infinity Studios - Zhao Yun 2.0', '21900000', '<p>????&nbsp;TH&Ocirc;NG SỐ:<br />\r\n- Cao 81 CM x D&agrave;i 85 CM x Ngang 45 CM<br />\r\n- Chất liệu: Polystone, hợp kim, PVC, da, vải, d&acirc;y chịu nhiệt ...<br />\r\n- Thời gian đ&oacute;ng PO: 29/08/2020 ( 1 th&aacute;ng )<br />\r\n- Dự kiến ra h&agrave;ng: T12/2020 ( c&oacute; thể lệch 1-2 th&aacute;ng )<br />\r\n- Phi&ecirc;n bản Deluxe bao gồm th&ecirc;m: ấu ch&uacute;a A Đẩu<br />\r\nĐặc biệt khi mua h&agrave;ng tại TOYz bản Deluxe sẽ k&egrave;m th&ecirc;m thẻ t&ecirc;n + cờ chiến ( b&aacute;n lẻ 2tr900K ) + 3 đồng xu kỉ niệm in h&igrave;nh Quan Vũ, M&atilde; Si&ecirc;u v&agrave; Trương Phi</p>\r\n\r\n<p>- Số lượng ph&aacute;t h&agrave;nh: 698 bản ( 300 bản deluxe )</p>\r\n\r\n<p>????&nbsp;Hỗ trợ trả g&oacute;p kỳ hạn 3-12 th&aacute;ng kh&ocirc;ng l&atilde;i suất, c&oacute; ph&iacute; chuyển đổi với kh&aacute;ch h&agrave;ng sử dụng thẻ t&iacute;n dụng (Credit) -</p>\r\n\r\n<p>????&nbsp;Tạo h&igrave;nh Triệu V&acirc;n 2.0 của Infnity Studio xứng đ&aacute;ng l&agrave; đẹp nhất thời điểm n&agrave;y, khu&ocirc;n mặt anh t&uacute; m&agrave; đầy đầy dũng m&atilde;nh, đ&aacute;nh xa d&ugrave;ng thương, đ&aacute;nh gần d&ugrave;ng kiếm, Thanh C&ocirc;ng Kiếm tr&ecirc;n tay Triệu V&acirc;n được cả thi&ecirc;n hạ ngưỡng mộ sau trận Đương Dương, Trường Bản.</p>\r\n\r\n<p>????&nbsp;Toyz l&agrave; ph&acirc;n phối ch&iacute;nh thức của Infinity Studio tại Việt Nam, kh&aacute;ch h&agrave;ng khi mua sẽ nhận đầy đủ c&aacute;c chế độ bảo h&agrave;nh g&atilde;y hỏng từ h&atilde;ng, tất cả mọi feedback hoặc lỗi sản phẩm sẽ được gửi trực tiếp tới h&atilde;ng để xử l&yacute;.</p>\r\n', 50, 'trieu van1604047656.jpg', 26, 0),
(37, 'Tượng Trương Phi Infinity Studio 1/4 - Zhang Fei', '22890000', '<p>【Three Kingdoms: Five Tiger Generals series - 1/4th scale Zhang Fei Statue】</p>\r\n\r\n<p>- Chiều cao: 70CM<br />\r\n- Chất liệu: Resin cao cấp + &aacute;o cho&agrave;ng vải<br />\r\n- Số lượng sản xuất: 650 bản, c&aacute;c mẫu sẽ c&oacute; chứng chỉ v&agrave; số thứ tự cụ thể.</p>\r\n', 50, 'phi1604047734.jpg', 26, 1),
(38, '[PRE-ORDER] QUEEN STUDIOS AQUAMAN 1:2 STATUE', '59800000', '<p>[????????????-????????????????????] ???????????????????? ???????????????????????????? ???????????????????????????? ????:???? ????????????????????????</p>\r\n\r\n<p>Đẹp như bước từ phim ra, ảnh n&oacute;i thay cho nội dung. Nh&igrave;n đẹp hơn nhiều mấy c&aacute;i tượng s&aacute;p trong bảo t&agrave;ng, cắm từng c&aacute;i sợi l&ocirc;ng t&oacute;c l&ecirc;n da silicon mới thấy kỳ c&ocirc;ng khủng khiếp.</p>\r\n\r\n<p>- Chất liệu: Silicon, polystone, l&ocirc;ng t&oacute;c nh&acirc;n tạo.<br />\r\n- H&atilde;ng sản xuất: QUEEN STUDIOS.<br />\r\n- Gi&aacute;: 59.8 triệu ( gi&aacute; si&ecirc;u tốt nhưng chỉ c&oacute; 2 slots )<br />\r\n- Số lượng: Giới hạn 666 bản to&agrave;n thế giới.<br />\r\n- K&iacute;ch thước: 57 CM x 49.1 CM x 98.8 CM / 116.8 CM (cả đinh ba).<br />\r\n- Thời gian ra mắt: Q4/2020.</p>\r\n', 50, 'qa1604047794.jpg', 26, 1),
(39, 'Mô hình DragonBall', '680000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 33cm</p>\r\n', 100, 'ball1604047855.jpg', 27, 0),
(40, 'Mô hình DragonBall - Goku comic', '690000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 33cm</p>\r\n', 100, 'wabo1604047908.jpg', 27, 0),
(41, 'Mô hình DragonBall - Goku comic 3', '680000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 33cm</p>\r\n', 50, 'a1604047940.jpg', 27, 0),
(42, 'Mô hình Dragon Ball - Vegeta', '33900000', '<p>Tượng Vegeta chất liệu Resin tỉ lệ 1:1 cao 210 CM.</p>\r\n\r\n<p>- 2 phi&ecirc;n bản tạo h&igrave;nh: T&oacute;c đen đeo m&aacute;y d&ograve; năng lượng &amp; t&oacute;c v&agrave;ng ( Super Saiyan )<br />\r\n- T&iacute;nh năng đặc biệt l&agrave; hệ thống đ&egrave;n LED đổi m&agrave;u rất s&aacute;ng v&agrave; bắt mắt&nbsp;</p>\r\n\r\n<p>Với k&iacute;ch thước khủng bố n&ecirc;n c&aacute;c chi tiết v&acirc;n v&agrave; sơn bề mặt được thể hiện v&ocirc; c&ugrave;ng chi tiết v&agrave; tỉ mỉ.</p>\r\n', 50, 've1604047982.png', 27, 0),
(43, 'Mô hình DragonBall - Gogeta #1', '390000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 31cm</p>\r\n', 50, 'go1604048019.jpg', 27, 0),
(44, 'Mô hình DragonBall - Cell dạng hoàn thiện', '250000', '<p>Cell - Kẻ phản diện đ&atilde; qu&aacute; nổi tiếng, tạo h&igrave;nh qu&aacute; đẹp l&ecirc;n ch&iacute;nh x&aacute;c mọi chi tiết thiết kế trong truyện ra sản phẩm m&ocirc; h&igrave;nh nhựa PVC cao cấp.<br />\r\nChiều cao: 17 cm</p>\r\n', 100, 'dad1604048052.png', 27, 0),
(45, 'Mô hình DragonBall - Goku comic #2', '650000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 36cm</p>\r\n', 50, 'trw1604048096.jpg', 27, 0),
(46, 'Mô hình One Piece - Ace ngồi Sofa', '395000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 16cm</p>\r\n', 50, 'ac1604048162.jpg', 28, 1),
(47, 'Mô hình One Piece - Luffy Gear 4', '585000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 20cm</p>\r\n', 50, 'd51604048204.jpg', 28, 0),
(48, 'Mô hình Shank', '750000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 25cm<br />\r\nPhụ kiện : 2 đầu, kiếm, 2 tay, mũ, bao đựng kiếm</p>\r\n', 100, 'sh1604048250.jpg', 28, 1),
(49, 'Mô hình OnePiece - Kaido', '1250000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 30cm</p>\r\n', 50, 'k1604048285.jpg', 28, 0),
(50, 'Mô hình OnePiece- Enel', '3850000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 50cm<br />\r\n- H&agrave;ng order về sau 7-9 ng&agrave;y&nbsp;</p>\r\n', 100, 'dasdas1604048324.jpg', 28, 0),
(51, 'Mô hình OnePiece - Zoro Wano #1', '1250000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 31cm</p>\r\n', 50, 'on1604048368.jpg', 28, 1),
(52, 'Mô hình One Piece - Zoro tam kiếm', '1350000', '<p>Đặc điểm : Bao gồm 2 kiểu đầu v&agrave; 3 kiếm&nbsp;<br />\r\nChất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 37cm</p>\r\n', 100, 'zero1604048426.jpg', 28, 1),
(53, 'Mô hình One Piece - Zoro kiếm #1', '385000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 24cm</p>\r\n', 50, 'fdfdd1604048467.jpg', 28, 1),
(54, 'Mô hình One Piece - Boa rắn', '850000', '<p>Chất liệu : Nhựa ABS &amp; PVC&nbsp;<br />\r\nChiều cao : 21cm</p>\r\n', 50, 'boa1604048558.jpg', 28, 1),
(55, 'Mô hình One Piece - Zoro Wano đèn ngủ', '1258000', '<p>Đặc điểm : C&oacute; thể bật đ&egrave;n ở đế ( kết nối qua d&acirc;y usb )<br />\r\nChất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 30cm</p>\r\n', 50, 'dsad1604048652.jpg', 28, 1),
(56, 'Mô hình Naruto - Gaara #1', '890000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 25cm</p>\r\n', 50, 'naruto1604048728.png', 29, 0),
(57, 'Mô hình Naruto - Đệ Thất Uzumaki Naruto', '750000', '<p>Chất liệu : Nhựa ABS &amp; PVC&nbsp;<br />\r\nChiều cao : 29cm</p>\r\n', 100, 'dsds1604048771.jpg', 29, 0),
(58, 'Mô hình Naruto - Đệ Nhất Senju Hashirama', '750000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 30cm</p>\r\n', 100, 'hi1604048802.jpg', 29, 0),
(59, 'Mô hình Naruto - Đệ Nhị Senju Toborama', '750000', '<p>Chất liệu : Nhựa ABS &amp; PVC</p>\r\n\r\n<p>Chiều cao : 30cm</p>\r\n', 50, 'te1604048833.jpg', 29, 0),
(60, 'Mô hình Naruto - Might Guy #3', '1250000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 34cm<br />\r\n- C&oacute; đ&egrave;n led ở đế v&agrave; mắt</p>\r\n', 100, 'mig1604048870.jpg', 29, 0),
(61, 'Mô hình Naruto - Might Guy #2', '890000', '<p>Chất liệu : nhựa ABS &amp; PVC<br />\r\nChiều cao : 31cm<br />\r\n- C&oacute; đ&egrave;n led ở mắt&nbsp;</p>\r\n', 50, 'mi21604048918.jpg', 29, 1),
(62, 'Mô hình Naruto - Might Guy #1', '649000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 28cm&nbsp;<br />\r\n- c&oacute; đ&egrave;n led ở mắt&nbsp;</p>\r\n', 100, 'mi11604049076.jpg', 29, 0),
(63, '[Pre-Order] MOZ STUDIO HOKAGE TSUNADE MSAF001', '3350000', '<p><strong>M&ocirc; h&igrave;nh TSUNADE 1/6 từ MOZ STUDIO</strong></p>\r\n\r\n<p>- Tỉ lệ/ Chiều cao: 1:6 - 30CM<br />\r\n- Chất liệu: PVC, ABS, Vải&nbsp;<br />\r\n- Thời hạn đặt trước: 13/06/2020<br />\r\n- Thời gian ph&aacute;t h&agrave;nh: Q4/2020</p>\r\n', 50, 'mi121604049123.jpg', 29, 0),
(64, 'Tranh treo tường #10', '150000', '<p>Chất liệu : Fomex<br />\r\nK&iacute;ch thước :&nbsp;&nbsp;35 x 50 CM&nbsp;<br />\r\n- Ngo&agrave;i ra shop c&oacute; nhận k&iacute;ch thước theo mong muốn&nbsp;</p>\r\n', 50, 'tras1604049214.jpg', 31, 0),
(65, 'Mô hình Batman Robin', '1350000', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 37cm</p>\r\n', 100, 'bat1604049267.jpg', 31, 0),
(66, 'Saitama - One Punch Man', '749000', '<p>M&ocirc; h&igrave;nh Saitama độ ho&agrave;n thiện rất tốt, cao ~25 cm cả &aacute;o cho&agrave;ng.<br />\r\nChất liệu nhựa PVC &amp; ABS cao cấp</p>\r\n', 50, 'sa1604049305.jpg', 31, 1),
(67, 'Tranh treo tường #1', '335000', '<p>Chất liệu : Fomex<br />\r\nK&iacute;ch thước :&nbsp;54 x 70 CM</p>\r\n', 100, 'tranh1604049347.jpg', 31, 0),
(68, 'Genos - One Punch Man', '749000', '<p>Chất liệu: Nhựa PVC &amp; ABS</p>\r\n\r\n<p>Genos - One Punch Man&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</p>\r\n\r\n<p>???? Địa chỉ: Số 44 ng&otilde; 26 V&otilde; Văn Dũng, Đống Đa, H&agrave; Nội</p>\r\n\r\n<p>???? Ship COD to&agrave;n quốc, thanh to&aacute;n khi nhận h&agrave;ng.</p>\r\n', 50, 'one1604049399.jpg', 31, 0),
(69, 'MÔ HÌNH LẮC ĐẦU KIÊM ĐẾ KÊ ĐIỆN THOẠI KAWS 12CM', '130000', '<ul>\r\n	<li><em><strong>M&Ocirc; H&Igrave;NH LẮC ĐẦU KAWS CỰC KUTE</strong></em></li>\r\n	<li><em><strong>C&Oacute; ĐẾ K&Ecirc; ĐIỆN THOẠI CỰC TIỆN LỢI</strong></em></li>\r\n	<li><em><strong>CHẤT LIỆU : NHỰA PVC</strong></em></li>\r\n	<li><em><strong>K&Iacute;CH THƯỚC : 12CM</strong></em></li>\r\n	<li><em><strong>GI&Aacute; : 130K</strong></em></li>\r\n</ul>\r\n', 100, 'kim1604049609.png', 30, 0),
(70, 'MÔ HÌNH LẮC ĐẦU KIÊM ĐẾ KÊ ĐIỆN THOẠI JOKER 12CM', '130000', '<ul>\r\n	<li><em><strong>M&Ocirc; H&Igrave;NH LẮC ĐẦU JOKER CỰC KUTE</strong></em></li>\r\n	<li><em><strong>C&Oacute; ĐẾ K&Ecirc; ĐIỆN THOẠI CỰC TIỆN LỢI</strong></em></li>\r\n	<li><em><strong>CHẤT LIỆU : NHỰA PVC</strong></em></li>\r\n	<li><em><strong>K&Iacute;CH THƯỚC : 12CM</strong></em></li>\r\n	<li><em><strong>GI&Aacute; : 130K</strong></em></li>\r\n</ul>\r\n', 50, 'joker1604049669.png', 30, 0),
(71, 'SPIDERMAN-002 LẮC ĐẦU', '140000', '<p>SPIDERMAN-002 LẮC ĐẦU</p>\r\n\r\n<p>Chất liệu nhựa</p>\r\n\r\n<p>Chiều cao : 5cm</p>\r\n', 100, 'slider21604049727.png', 30, 0),
(72, 'HULK LẮC ĐẦU', '140000', '<p>HULK LẮC ĐẦU</p>\r\n', 100, 'huk1604049769.png', 30, 0),
(73, 'IRON MAN LẮC ĐẦU', '140000', '<h3>IRON MAN LẮC ĐẦU</h3>\r\n', 50, 'iron1604049806.png', 30, 0),
(74, 'THANOS LẮC ĐẦU', '140000', '<h1>THANOS LẮC ĐẦU</h1>\r\n', 100, 'thanps1604049856.jpg', 30, 0),
(75, 'CAPTAIN AMERICA-002 LẮC ĐẦU', '140000', '<p>CAPTAIN AMERICA-002 LẮC ĐẦU</p>\r\n', 100, 'cap1604049890.png', 30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `masohd` int(11) NOT NULL AUTO_INCREMENT,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL,
  PRIMARY KEY (`masohd`),
  KEY `fk_hoadon_kh` (`makh`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--


-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` varchar(12) NOT NULL,
  `vaitro` int(1) DEFAULT 0,
  PRIMARY KEY (`makh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang1`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`, `vaitro`) VALUES
(8, 'thuan', 'thuan03', 'f448fe4f8c3078b023fd85913d3e6d5f', 'thuan13@gmail.com', 'tanphu', '0333333333', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

DROP TABLE IF EXISTS `loai`;
CREATE TABLE IF NOT EXISTS `loai` (
  `maloai` int(11) NOT NULL AUTO_INCREMENT,
  `tenloai` varchar(50) NOT NULL,
  `idmenu` int(11) NOT NULL,
  PRIMARY KEY (`maloai`),
  KEY `FK_loai_menu` (`idmenu`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `idmenu`) VALUES
(23, 'Transformers', 3),
(24, 'Marvel & DC', 3),
(25, 'Hot Toys & Mô hình 1/6', 3),
(26, 'Tượng - Statue', 3),
(27, 'Dragon Ball', 3),
(28, 'One Piece', 3),
(29, 'Naruto', 3),
(30, 'Mô hình lúc lắc', 4),
(31, 'Các thể loại khác', 4);


-- ---------------------------------------------
--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `idmenu` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `link` varchar(150) NOT NULL,
  PRIMARY KEY (`idmenu`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `name`, `link`) VALUES
(1, 'Trang Chủ', 'index.php'),
(3, 'Mô Hình', ''),
(4, 'Khác', ''),
(5, 'Liên Hệ', 'View/lienhe.php'),
(6, 'Tài Khoản', 'View/gioithieu.php');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan1`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_bl_kh` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`),
  ADD CONSTRAINT `fk_bl_mahh` FOREIGN KEY (`mahh`) REFERENCES `hanghoa` (`mahh`);

--
-- Constraints for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD CONSTRAINT `fk_cthd_mahd` FOREIGN KEY (`masohd`) REFERENCES `hoadon` (`masohd`),
  ADD CONSTRAINT `fk_cthd_mahh` FOREIGN KEY (`mahh`) REFERENCES `hanghoa` (`mahh`);

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `FK_hanghoa_maloai` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hoadon_kh` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);

--
-- Constraints for table `loai`
--
ALTER TABLE `loai`
  ADD CONSTRAINT `FK_loai_menu` FOREIGN KEY (`idmenu`) REFERENCES `menu` (`idmenu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
