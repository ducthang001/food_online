-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 05:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptitfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_category`
--

CREATE TABLE `db_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(2) NOT NULL,
  `parentid` int(11) NOT NULL,
  `orders` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trash` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_category`
--

INSERT INTO `db_category` (`id`, `name`, `link`, `level`, `parentid`, `orders`, `created_at`, `created_by`, `updated_at`, `updated_by`, `trash`, `status`) VALUES
(25, 'Bữa sáng', 'bua-sang', 2, 25, '0', '2022-03-10 10:00:20', '1', '2022-04-11 23:05:41', '1', 1, 1),
(26, 'Món ăn trưa và tối', 'mon-an-trua-va-toi', 3, 36, '1', '2022-03-10 10:00:23', '1', '2022-04-11 23:05:36', '1', 1, 1),
(27, 'Món ăn tối', 'mon-an-toi', 1, 0, '2', '2022-03-10 10:00:32', '1', '2022-03-10 10:00:32', '1', 0, 1),
(28, 'Đồ ăn nhanh', 'do-an-nhanh', 2, 25, '3', '2022-03-10 10:01:45', '1', '2022-03-10 10:01:45', '1', 1, 1),
(31, 'Thực phẩm từ sữa, trứng', 'thuc-pham-tu-sua-trung', 2, 25, '1', '2022-03-10 10:04:03', '1', '2022-03-10 10:04:03', '1', 1, 1),
(32, 'Chế biến nhanh', 'che-bien-nhanh', 2, 25, '1', '2022-03-10 10:05:03', '1', '2022-03-10 10:05:03', '1', 1, 1),
(33, 'Món mặn', 'mon-man', 2, 26, '2', '2022-03-10 10:06:07', '1', '2022-03-10 10:06:07', '1', 1, 1),
(34, 'Món xào', 'mon-xao', 2, 26, '2', '2022-03-10 10:07:11', '1', '2022-03-10 10:07:11', '1', 1, 1),
(35, 'Canh', 'canh', 2, 26, '2', '2022-03-10 10:08:18', '1', '2022-03-10 10:08:18', '1', 1, 1),
(36, 'Thực phẩm ăn liền', 'thuc-pham-an-lien', 3, 25, '1', '2022-03-10 10:09:13', '1', '2022-06-05 21:29:49', '1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_config`
--

CREATE TABLE `db_config` (
  `id` int(11) NOT NULL,
  `mail_smtp` varchar(68) COLLATE utf8_unicode_ci NOT NULL,
  `mail_smtp_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Password mail shop',
  `mail_noreply` varchar(68) COLLATE utf8_unicode_ci NOT NULL,
  `priceShip` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_config`
--

INSERT INTO `db_config` (`id`, `mail_smtp`, `mail_smtp_password`, `mail_noreply`, `priceShip`, `title`, `description`) VALUES
(1, 'dovankha.tlvn@gmail.com', 'hahahahahah', 'ptitfood@gmail.com', '9900', 'PTIT Food', 'Căn tin PTIT');

-- --------------------------------------------------------

--
-- Table structure for table `db_contact`
--

CREATE TABLE `db_contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `trash` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_contact`
--

INSERT INTO `db_contact` (`id`, `fullname`, `title`, `phone`, `email`, `content`, `created_at`, `status`, `trash`) VALUES
(11, 'Huỳnh Đức Thắng', '123', '0987654321', 'ducthangdt0@gmail.com', 'Help', '2022/05/01', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_content`
--

CREATE TABLE `db_content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `introtext` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `fulltext` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `created_by` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `trash` int(1) NOT NULL DEFAULT 1,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_content`
--

INSERT INTO `db_content` (`id`, `title`, `alias`, `introtext`, `fulltext`, `img`, `created`, `created_by`, `modified`, `modified_by`, `trash`, `status`) VALUES
(10, 'HƯỚNG DẪN THANH TOÁN BẰNG MOMO', 'huong-dan-thanh-toan-bang-momo', '', '<p><strong><h3>Có 2 cách để thanh toán:</h3><br><em>1. Thanh toán tại quầy.<br>2. Thanh toán online qua Momo (0333.441.620 - Nguyễn Chí Bảo | 0384.815.404 - Huỳnh Đức Thắng).</em></strong></p>\r\n', 'h-ng-d-n-thanh-toan-online-thanh-toan.jpg', '2022-03-10 18:07:22', '70', '2022-05-22 18:11:23', '1', 1, 1),
(12, 'Top 10 ứng dụng mua sắm online tốt nhất năm 2022', 'top-10-ung-dung-mua-sam-online-tot-nhat-nam-2022', '', '<p><strong>1. Lazada</strong></p>\r\n\r\n<p>Lazada một ứng dụng mua sắm trực tuyến tr&ecirc;n thiết bị di động gia nhập v&agrave;o thị trường Việt Nam v&agrave;o đầu năm 2012. Đ&acirc;y l&agrave; th&agrave;nh vi&ecirc;n của Lazada Group một trong những trung t&acirc;m mua sắm trực tuyến lớn tại Đ&ocirc;ng Nam &Aacute;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://womenleadersforum.vn/wp-content/uploads/2020/03/popupapp-2016-v1-Copy.jpg\" style=\"height:469px; width:700px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lazada mang đến cho kh&aacute;ch h&agrave;ng những trải nghiệm mua sắm v&ocirc; c&ugrave;ng tuyệt vời với nhiều mặt h&agrave;ng thuộc nhiều thương hiệu kh&aacute;c nhau tr&ecirc;n thế giới. K&egrave;m theo đ&oacute; l&agrave; giao diện dễ sử dụng v&agrave; giao h&agrave;ng nhanh ch&oacute;ng, tiết kiệm.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2. Shopee</strong></p>\r\n\r\n<p>Shopee l&agrave; ứng dụng thu h&uacute;t lượng người d&ugrave;ng lớn nhất tr&ecirc;n thị trường hiện nay với hơn 40 triệu lượt tải về, hiện ứng dụng đang c&oacute; mặt ở 7 quốc gia như: Singapore, Th&aacute;i Lan, Việt Nam, Malaysia, Đ&agrave;i Loan, Indonesia v&agrave; Philippines.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://womenleadersforum.vn/wp-content/uploads/2020/03/Sp-Copy.jpg\" style=\"height:515px; width:700px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mua sắm tại Shopee bạn sẽ được hưởng nhiều ưu đ&atilde;i như: miễn ph&iacute; cước vận chuyển đối với đơn h&agrave;ng tr&ecirc;n 180.000 vnđ,&nbsp;ưu đ&atilde;i tặng sản phẩm cho kh&aacute;ch h&agrave;ng mới với gi&aacute; 0đ, t&iacute;ch hợp nhiều tr&ograve; chơi vui nhộn để săn xu đổi nhiều ưu đ&atilde;i hấp dẫn,&hellip;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2. Tiki</strong></p>\r\n\r\n<p>Từ một trang web b&aacute;n s&aacute;ch đơn thuần, Tiki đang trở th&agrave;nh một đối thủ lớn của c&aacute;c trang thương mại điện tử kh&aacute;c.&nbsp;Độ phủ s&oacute;ng của Tiki trong thời gian qua tại thị trường Việt Nam khiến c&aacute;i t&ecirc;n n&agrave;y đ&atilde; qu&aacute; đỗi th&acirc;n&nbsp;thuộc.&nbsp;Tiki hiện cũng đang l&agrave; ứng dụng được người d&ugrave;ng t&igrave;m kiếm nhiều nhất, cho thấy sức h&uacute;t của Tiki l&agrave; mạnh mẽ đến như thế n&agrave;o. Nếu bạn đang c&oacute; nhu cầu mua h&agrave;ng n&oacute;i chung v&agrave; mua s&aacute;ch n&oacute;i ri&ecirc;ng th&igrave; Tiki ch&iacute;nh l&agrave; sự lựa chọn kh&ocirc;ng thể thiếu d&agrave;nh cho bạn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://womenleadersforum.vn/wp-content/uploads/2020/03/3-Top-7-app-ban-hang-online-thanh-cong-nhat-viet-nam-2019-730x414.jpg\" style=\"height:414px; width:730px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>4. Sendo</strong></p>\r\n\r\n<p>Từ khi ứng dụng ra mắt, Sendo nổi l&ecirc;n như l&agrave; một trong những ứng dụng top đầu&nbsp;gi&uacute;p kh&aacute;ch an t&acirc;m khi mua sắm. Sendo đem lại cho bạn những trải nghiệm v&ocirc; c&ugrave;ng thu h&uacute;t, gi&uacute;p bạn c&oacute; cơ hội tiếp cận được rất nhiều mặt h&agrave;ng trải d&agrave;i từ c&ocirc;ng nghệ, thời trang, mỹ phẩm,&hellip; v&agrave;&nbsp;cập nhật li&ecirc;n tục c&aacute;c chương tr&igrave;nh khuyến m&atilde;i hấp dẫn, miễn ph&iacute; vận chuyển.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://womenleadersforum.vn/wp-content/uploads/2020/03/4-Top-7-app-ban-hang-online-thanh-cong-nhat-viet-nam-2019-1-Copy.jpg\" style=\"height:488px; width:700px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>5. VinID</strong></p>\r\n\r\n<p>VinID l&agrave; ứng dụng&nbsp;b&aacute;n h&agrave;ng trực tuyến thuộc tập đo&agrave;n Vingroup, một si&ecirc;u thị online với h&agrave;ng trăm sản phẩm chất lượng của nhiều thương hiệu nổi tiếng.&nbsp;Tại VinID, bạn c&oacute; thể dễ d&agrave;ng mua sắm trực tuyến c&aacute;c sản phẩm chất lượng cao thuộc c&aacute;c thương hiệu của Vingroup như: Thực phẩm, rau củ tươi sống từ Vinmart, Smartphone, thiết bị điện từ từ Vinpro, nghỉ dưỡng, kh&aacute;ch sạn, resort,&hellip; c&ugrave;ng những chương tr&igrave;nh&nbsp;đến từ c&aacute;c nh&agrave; cung cấp kh&aacute;c, cũng như thanh to&aacute;n điện &ndash; nước &ndash; internet,&hellip; khiến cuộc sống của bạn tiện lợi v&agrave; th&ocirc;ng minh hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://womenleadersforum.vn/wp-content/uploads/2020/03/5-Top-7-app-ban-hang-online-thanh-cong-nhat-viet-nam-2019-Copy.jpg\" style=\"height:423px; width:700px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>6. WService</strong></p>\r\n\r\n<p>WService l&agrave; ứng dụng Mobile VIP Card đầu ti&ecirc;n tại Việt Nam được đầu tư bởi Tập đo&agrave;n Truyền th&ocirc;ng Nam Hương. Ứng dụng n&agrave;y được ra đời với sứ mệnh l&agrave; thay thế to&agrave;n bộ hệ thống thẻ VIP vật của c&aacute;c doanh nghiệp, kh&aacute;ch h&agrave;ng mua sắm kh&ocirc;ng cần đến những chiếc thẻ bất tiện d&ugrave; l&agrave; online hay trực tiếp tại c&aacute;c cửa h&agrave;ng đa ng&agrave;nh. &ldquo;Sinh sau đẻ muộn&rdquo;, WService c&oacute; nhiều lợi thế, kết hợp đầy đủ c&aacute;c t&iacute;nh năng để hỗ trợ qu&aacute; tr&igrave;nh mua sắm, l&agrave;m c&aacute;c kh&aacute;ch h&agrave;ng h&agrave;i l&ograve;ng như: t&igrave;m kiếm th&ocirc;ng minh, tr&ograve; chuyện trực tiếp với cửa h&agrave;ng, giao diện dễ sử dụng, xem nhận x&eacute;t v&agrave; đ&aacute;nh gi&aacute; thực,&hellip; Đặc biệt l&agrave; c&oacute; những lợi &iacute;ch đặc quyền&nbsp;khiến kh&aacute;ch h&agrave;ng &ldquo;m&ecirc; t&iacute;t&rdquo;:</p>\r\n\r\n<p>&ndash; Người ti&ecirc;u d&ugrave;ng đồng l&uacute;c trở th&agrave;nh kh&aacute;ch h&agrave;ng VIP của h&agrave;ng trăm thương hiệu tr&ecirc;n app</p>\r\n\r\n<p>&ndash; Mua sắm bất k&igrave; l&uacute;c n&agrave;o bạn cũng c&oacute; thể hưởng ưu đ&atilde;i theo hạng mức thẻ th&agrave;nh vi&ecirc;n, c&oacute; thể l&ecirc;n đến 30%.</p>\r\n\r\n<p>&ndash; T&iacute;ch điểm sau mỗi lần ti&ecirc;u d&ugrave;ng, đổi qu&agrave; tặng, voucher v&agrave; n&acirc;ng hạng mức thẻ để nhận nhiều hơn những ưu đ&atilde;i, mua sắm c&agrave;ng tiết kiệm.</p>\r\n\r\n<p>&ndash; Giới thiệu bạn b&egrave; sử dụng sẽ được hưởng 5% tiền thưởng sau mỗi h&oacute;a đơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://womenleadersforum.vn/wp-content/uploads/2020/03/WS-Copy.jpeg\" style=\"height:600px; width:600px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>7. Chợ Tốt</strong></p>\r\n\r\n<p>Chợ Tốt l&agrave; một ứng dụng kết nối giữa người b&aacute;n v&agrave; người mua hiệu quả. Tại đ&acirc;y bạn được ph&eacute;p rao b&aacute;n m&agrave; kh&ocirc;ng phải mất bất kỳ khoản ph&iacute; n&agrave;o. Tại Chợ Tốt bạn c&oacute; thể li&ecirc;n hệ với người b&aacute;n h&agrave;ng bằng nhiều c&aacute;ch như gọi điện, nhắn tin v&agrave; qua email. Với Chợ Tốt, bạn dễ d&agrave;ng&nbsp;rao vặt miễn ph&iacute;, cập nhật li&ecirc;n tục c&aacute;c mặt h&agrave;ng v&agrave; gi&aacute; b&aacute;n,&nbsp;kho sản phẩm đa dạng như: xe, nh&agrave;, đồ điện, đồ ngoại thất,&hellip;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://womenleadersforum.vn/wp-content/uploads/2020/03/ungdungmuasam5_20190918124202-Copy.png\" style=\"height:450px; width:600px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>8. Zalora</strong></p>\r\n\r\n<p>Zalora l&agrave; ứng dụng chuy&ecirc;n về c&aacute;c sản phẩm quần &aacute;o thời trang, phụ kiện, gi&agrave;y d&eacute;p, mỹ phẩm cho cả nam v&agrave; nữ. Zalora c&oacute; giao diện tối giản cho phi&ecirc;n bản thiết bị di động, v&igrave; thế bạn c&oacute; thể xem hơn 1000 thương hiệu h&agrave;ng đầu với hơn 50.000 sản phẩm; với bộ lọc th&ocirc;ng minh, lọc theo loại v&agrave; gi&aacute;, xem c&aacute;c sản phẩm h&agrave;ng đầu. Zalora lu&ocirc;n giảm gi&aacute; đặc biệt d&agrave;nh cho kh&aacute;ch h&agrave;ng th&acirc;n thiết v&agrave;&nbsp;bạn c&oacute; thể lưu nhanh ch&oacute;ng c&aacute;c sản phẩm bạn y&ecirc;u th&iacute;ch v&agrave;o &ldquo;Mục Y&ecirc;u Th&iacute;ch&rdquo;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://womenleadersforum.vn/wp-content/uploads/2020/03/6-Top-7-app-ban-hang-online-thanh-cong-nhat-viet-nam-2019-Copy.jpg\" style=\"height:423px; width:700px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>8.</strong>&nbsp;<strong>Amazon</strong></p>\r\n\r\n<p>Nếu bạn c&oacute; nhu cầu mua h&agrave;ng quốc tế th&igrave; kh&ocirc;ng thể kh&ocirc;ng nhắc đến Amazon. Ứng dụng Amazon đ&atilde; thực sự rất th&agrave;nh c&ocirc;ng, nhận được nhiều lượt tải lớn từ c&aacute;c kh&aacute;ch h&agrave;ng tr&ecirc;n thế giới. Kh&aacute;ch h&agrave;ng c&oacute; thể mua sắm được h&agrave;ng triệu sản phẩm từ tất cả c&aacute;c thương hiệu nổi tiếng tr&ecirc;n to&agrave;n cầu. Amazon với nhiều tiện t&iacute;ch cho c&aacute;c kh&aacute;ch h&agrave;ng:</p>\r\n\r\n<p>&ndash; Chỉ cần sử dụng &ldquo;Voice Search&rdquo; để t&igrave;m kiếm sản phẩm theo đ&uacute;ng nhu cầu.</p>\r\n\r\n<p>&ndash; Khả năng qu&eacute;t m&atilde; vạch v&agrave; h&igrave;nh ảnh để so s&aacute;nh h&agrave;ng h&oacute;a v&agrave; kiểm tra gi&aacute; cả.</p>\r\n\r\n<p>&ndash; Kiểm tra c&aacute;c ưu đ&atilde;i hộp v&agrave;ng, bao gồm c&aacute;c giao dịch ưu đ&atilde;i trong ng&agrave;y.</p>\r\n\r\n<p>&ndash; Gửi v&agrave; chia sẻ c&aacute;c li&ecirc;n kết sản phẩm qua email, SMS, Facebook.</p>\r\n\r\n<p>&ndash; C&ocirc;ng nghệ quản l&yacute; đơn h&agrave;ng&nbsp;hiệu quả.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://womenleadersforum.vn/wp-content/uploads/2020/03/ungdungmuasam6_20190918124239-Copy.png\" style=\"height:450px; width:600px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>10. AliExpress</strong></p>\r\n\r\n<p>AliExpress l&agrave; một ứng dụng mua sắm online trực thuộc tập đo&agrave;n Alibaba. AliExpress nổi tiếng với c&aacute;c mặt h&agrave;ng thời trang, phụ kiện c&ocirc;ng nghệ, thiết bị điện &ndash; điện tử với nhiều ph&acirc;n kh&uacute;c từ b&igrave;nh d&acirc;n đến cao cấp. Mua h&agrave;ng tại AliExpress c&oacute; thể miễn ph&iacute; vận chuyển hơn 75% sản phẩm,&nbsp;thanh to&aacute;n trực tuyến an to&agrave;n v&agrave; đảm bảo, hỗ trợ nhiều ng&ocirc;n ngữ kh&aacute;c nhau, hay bạn ho&agrave;n to&agrave;n c&oacute; thể thanh to&aacute;n cho m&oacute;n h&agrave;ng của m&igrave;nh với bất kỳ loại tiền tệ n&agrave;o&hellip;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://womenleadersforum.vn/wp-content/uploads/2020/03/aliexpress-Copy.jpg\" style=\"height:394px; width:700px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hy vọng với 10&nbsp;ứng dụng mua sắm&nbsp;nổi bật&nbsp;tr&ecirc;n đ&acirc;y, bạn sẽ c&oacute; được những trải nghiệm mua sắm online thuận tiện, tiết kiệm,&nbsp;sở hữu những sản phẩm cực k&igrave; hấp dẫn với gi&aacute; ưu đ&atilde;i!</p>\r\n', 'WS.jpg', '2022-03-10 11:19:06', '1', '2022-05-22 18:10:59', '1', 1, 1),
(40, 'Bí quyết sống khoẻ hơn mỗi ngày', 'bi-quyet-song-khoe-hon-moi-ngay', '', '<h2><strong>Ngủ đủ giấc mỗi đ&ecirc;m</strong></h2>\r\n\r\n<p>Giấc ngủ&nbsp;đ&oacute;ng vai tr&ograve; v&ocirc; c&ugrave;ng&nbsp;quan trọng v&igrave; nhiều l&yacute; do - giấc ngủ b&aacute;o hiệu cơ thể bạn giải ph&oacute;ng hormon v&agrave; c&aacute;c hợp chất gi&uacute;p quản l&yacute; cơn th&egrave;m ăn (c&oacute; lợi cho những người hay ăn vặt giữa đ&ecirc;m), duy tr&igrave; hệ thống miễn dịch, giảm nguy cơ mắc bệnh v&agrave; cải thiện tr&iacute; nhớ.</p>\r\n\r\n<p>Nếu bạn bị thiếu ngủ, bạn c&oacute; thể l&agrave;m tăng nguy cơ mắc c&aacute;c chứng bệnh như tiểu đường, bệnh tim, b&eacute;o ph&igrave; v&agrave; ngưng thở khi ngủ. Tất cả c&aacute;c t&igrave;nh trạng sức khỏe n&agrave;y c&oacute; thể giảm khi bạn ngủ &iacute;t nhất 7 đến 8 tiếng mỗi đ&ecirc;m.</p>\r\n\r\n<p><img src=\"https://benhvienthanhvubaclieu.com/cms/static/site/sale_medicbaclieu/uploads/ckeditor/images.thumb.2ed8302d-236f-4b36-bfb5-ec93a67b1cbc.jpg\" /></p>\r\n\r\n<h2><strong>Tập thể dục v&agrave; vận động</strong></h2>\r\n\r\n<p>Tập thể dục &iacute;t nhất 30 ph&uacute;t mỗi ng&agrave;y gi&uacute;p&nbsp;cho qu&aacute; tr&igrave;nh trao đổi chất&nbsp;trong&nbsp;cơ thể được tốt hơn, đặc biệt l&agrave; v&agrave;o s&aacute;ng sớm. Kh&ocirc;ng chỉ vậy, tập thể dục, vận động thường xuy&ecirc;n gi&uacute;p bạn c&oacute; sức bền, kiểm so&aacute;t được c&acirc;n nặng v&agrave; c&oacute; th&acirc;n h&igrave;nh c&acirc;n đối săn chắc. Bạn n&ecirc;n bắt đầu l&agrave;m quen với b&agrave;i tập đơn giản như đi bộ, h&iacute;t thở s&acirc;u v&agrave; c&aacute;c động t&aacute;c h&igrave;nh thể cơ bản.</p>\r\n\r\n<p>Nếu&nbsp;bạn l&agrave; nh&acirc;n vi&ecirc;n&nbsp;văn ph&ograve;ng, bạn n&ecirc;n c&oacute; những thời gian thư gi&atilde;n ngắn trong giờ l&agrave;m việc. Cứ sau mỗi 45 ph&uacute;t &ndash; 1h l&agrave;m việc, bạn n&ecirc;n d&agrave;nh ra 5 ph&uacute;t nghỉ ngơi. Trong 5 ph&uacute;t, bạn c&oacute; thế đi vệ sinh rửa mặt, vận động nhẹ hoặc uống 1 ly nước/tr&agrave;.</p>\r\n\r\n<p><img src=\"https://benhvienthanhvubaclieu.com/cms/static/site/sale_medicbaclieu/uploads/ckeditor/images.thumb.70ff379e-7f05-4de1-b5a1-1ed7170e85bf.jpg\" /></p>\r\n\r\n<h2><strong>Ăn uống bổ dưỡng</strong></h2>\r\n\r\n<p>Duy tr&igrave; một chế độ ăn uống l&agrave;nh mạnh v&agrave; c&acirc;n bằng c&oacute; thể l&agrave;m tăng năng lượng v&agrave; năng suất l&agrave;m việc, đồng thời th&uacute;c đẩy qu&aacute; tr&igrave;nh trao đổi chất v&agrave; khiến bạn cảm thấy&nbsp;khỏe mạnh về thể chất v&agrave; hạnh ph&uacute;c hơn bởi v&igrave; bạn sẽ đang ti&ecirc;u thụ chất dinh dưỡng v&agrave; vitamin m&agrave; cơ thể bạn cần.</p>\r\n\r\n<p><img alt=\"\" src=\"https://benhvienthanhvubaclieu.com/cms/static/site/sale_medicbaclieu/uploads/ckeditor/images.thumb.2bac405e-d1b3-470a-97b3-71c141001bb2.jpg\" /></p>\r\n\r\n<h2><strong>Uống nhiều nước</strong></h2>\r\n\r\n<p>Nước chiếm khoảng 50-65% cơ thể ch&uacute;ng ta, v&igrave; vậy bạn phải lu&ocirc;n bổ sung th&ecirc;m nước. Khi ra mồ h&ocirc;i th&igrave; cơ thể bạn sẽ mất rất nhiều nước, do đ&oacute; bạn cần phải uống nước để b&ugrave; lại.</p>\r\n\r\n<p>Lượng nước m&agrave; bạn cần uống c&oacute; thể được t&iacute;nh dựa theo c&acirc;n nặng của bạn. Nếu bạn đang tập thể dục, bạn sẽ cần phải tăng lượng nước uống để c&acirc;n bằng với lượng mồ h&ocirc;i m&agrave; cơ thể bạn to&aacute;t ra.</p>\r\n\r\n<h2><strong>Ăn nhiều rau v&agrave; tr&aacute;i c&acirc;y</strong></h2>\r\n\r\n<p><strong><img alt=\"\" src=\"https://benhvienthanhvubaclieu.com/cms/static/site/sale_medicbaclieu/uploads/ckeditor/images.thumb.c84a2877-88dd-47ca-a336-7b9b4e0fb39a.jpg\" /></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&aacute;c loại rau xanh, củ quả m&agrave;u cam đỏ hay tr&aacute;i c&acirc;y nhiều nước nước lu&ocirc;n l&agrave; lựa chọn h&agrave;ng đầu cho bữa ăn gia đ&igrave;nh. Ch&uacute;ng ta ăn nhiều rau kh&ocirc;ng phải v&igrave; ngon m&agrave; v&igrave; sức khỏe.<br />\r\nCơ thể ch&uacute;ng ta kh&ocirc;ng thể tự sản sinh ra vitamin A, B, C v&agrave; chất kho&aacute;ng như Canxi, Kali, Sắt, Kẽm v&agrave; phốt pho&hellip;. M&agrave; những chất tr&ecirc;n c&oacute; rất nhiều trong rau v&agrave; tr&aacute;i c&acirc;y. C&aacute;c chất n&agrave;y sẽ gi&uacute;p ph&aacute;t triển cơ thể, tăng sức đề kh&aacute;ng v&agrave; ph&ograve;ng bệnh tật.</p>\r\n\r\n<h2><strong>Giữ tinh thần lu&ocirc;n được vui vẻ v&agrave; tr&aacute;nh căng thẳng</strong></h2>\r\n\r\n<p>H&atilde;y lu&ocirc;n vui vẻ suốt cả ng&agrave;y. Những người lu&ocirc;n vui vẻ sẽ cảm nhận được cuộc sống một c&aacute;ch t&iacute;ch cực, nhờ đ&oacute; cũng c&oacute; thể chất khỏe khoắn hơn. Khi t&acirc;m trạng vui vẻ, n&atilde;o người cũng được k&iacute;ch th&iacute;ch sản sinh ra nhiều tế b&agrave;o T-cells gi&uacute;p th&uacute;c đẩy hệ miễn dịch v&agrave; khiến người ta trở n&ecirc;n khỏe mạnh hơn.</p>\r\n', 'img1.jpg', '2022-06-04 23:37:53', '1', '2022-06-05 10:17:15', '1', 1, 1),
(41, 'hello', 'hello', '', '', 'healthy.png', '2022-06-05 10:10:59', '1', '2022-06-05 10:10:59', '1', 0, 1),
(42, 'Sản phẩm mới ra mắt', 'san-pham-moi-ra-mat', '', '', '6708-389511601366274-16013662742.jpg', '2022-06-05 20:59:44', '1', '2022-06-05 21:00:07', '1', 1, 1),
(43, 'hello các bạn nhỏ', 'hello-cac-ban-nho', '', '', '6712-492361601454633-1601454633.jpg', '2022-06-05 21:01:03', '1', '2022-06-05 21:01:03', '1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_customer`
--

CREATE TABLE `db_customer` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `trash` int(1) NOT NULL DEFAULT 1,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_customer`
--

INSERT INTO `db_customer` (`id`, `fullname`, `username`, `password`, `phone`, `email`, `created`, `trash`, `status`) VALUES
(84, 'ĐỖ VĂN KHA', 'dovankha', '$2y$10$JfkoqEsexyY4vzytkQ3Pxu120fqhM5hCXFUNIdSux4Bpgf3McMFiS', '0987654321', 'dovankha.tlvn@gmail.com', '2022-03-27 00:00:00', 1, 1),
(87, 'bảo nguyễn', 'n19dcat006', '$2a$12$nV6rNeSipHR.Haxi/sjSWO1n0S7o1VVwq.UK/K4cvo/tAJhQ2uvBy', '0324242434', 'baoratao060101@gmail.com', '2022-06-05 00:00:00', 1, 1),
(88, 'My name is Guest', 'aaaaaa', '$2y$10$pl.0wAPoJKEQYfzoqrL5t.ABCdJReApbLohNdR2VmJF936KZMXRqi', '0989898989', 'eubqbidnkssixepcff@bvhrk.com', '2022-06-08 00:00:00', 1, 1),
(89, 'Kha Đẹp Trai', 'khadeptrai', '$2y$10$l7NgNW0G2da/L0X/mxFc.uqPBRfbqkhJgeuialAGYZa84MLs8ORtu', '0909090909', 'khado.khadv@gmail.com', '2022-06-13 00:00:00', 1, 1),
(90, 'Con Mèo Con', 'conmeocon', '$2y$10$165ywKgTEkusMGe/BM5iNez1J4DklLAQgEWqMSzt59FPv5ZTF7dEW', '0987098098', 'lwirvcsvkridfiblmh@nvhrw.com', '2022-06-13 00:00:00', 1, 1),
(92, 'Test Test', 'testing', '$2y$10$nzxqGFbN..cGySQgHYdDhu9SEL0ry6kmyeyQQZpWheHAmR335D1BC', '0912823772', 'gydgdnucyalsztdxhk@kvhrs.com', '2022-06-13 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_discount`
--

CREATE TABLE `db_discount` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mã giảm giá',
  `discount` int(11) NOT NULL COMMENT 'Số tiền',
  `limit_number` int(11) NOT NULL COMMENT 'giới hạn lượt mua',
  `number_used` int(11) NOT NULL COMMENT 'Số lượng đã nhập',
  `expiration_date` date NOT NULL COMMENT 'Ngày hết hạn',
  `payment_limit` int(11) NOT NULL COMMENT 'giới hạn đơn hàng tối thiểu',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mô tả',
  `created` date NOT NULL,
  `orders` int(11) NOT NULL,
  `trash` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_discount`
--

INSERT INTO `db_discount` (`id`, `code`, `discount`, `limit_number`, `number_used`, `expiration_date`, `payment_limit`, `description`, `created`, `orders`, `trash`, `status`) VALUES
(33, 'MAIMAI', 10000, 5, 2, '2022-06-30', 14999, 'Nhập mã giảm giá \"MAIMAI\" để giảm 15000 VND cho đơn hàng tối thiểu 30000 VND.', '2022-05-22', 1, 1, 1),
(34, '0TOZ6FX9K1DM', 100000, 1, 0, '2022-07-05', 0, 'Mã giảm giá 100.000 VNĐ tự động khi đăng ký thành công', '2022-06-05', 0, 1, 1),
(35, 'ncb112233', 20000, 1, 0, '2022-06-25', 50000, 'Đệ bảo được giảm giá', '2022-06-05', 1, 1, 1),
(36, 'YULJIKPP67IO', 100000, 1, 0, '2022-07-08', 0, 'Mã giảm giá 100.000 VNĐ tự động khi đăng ký thành công', '2022-06-08', 0, 1, 1),
(37, 'BJKQE8BYC0KU', 100000, 1, 0, '2022-07-13', 0, 'Mã giảm giá 100.000 VNĐ tự động khi đăng ký thành công', '2022-06-13', 0, 1, 1),
(38, 'RDC7MWAHEVQI', 100000, 1, 0, '2022-07-14', 0, 'Mã giảm giá 100.000 VNĐ tự động khi đăng ký thành công', '2022-06-13', 0, 1, 1),
(40, 'VPEQ5ZXXR0US', 100000, 1, 0, '2022-07-13', 0, 'Mã giảm giá 100.000 VNĐ tự động khi đăng ký thành công', '2022-06-13', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_district`
--

CREATE TABLE `db_district` (
  `id` int(5) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `provinceid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_district`
--

INSERT INTO `db_district` (`id`, `name`, `type`, `provinceid`) VALUES
(1, 'Quận 1', 'Quận', 79),
(2, 'Quận 2', 'Quận', 79),
(3, 'Quận 3', 'Quận', 79),
(4, 'Quận 4', 'Quận', 79),
(5, 'Quận 5', 'Quận', 79),
(6, 'Quận 6', 'Quận', 79),
(7, 'Quận 7', 'Quận', 79),
(8, 'Quận 8', 'Quận', 79),
(9, 'Quận 9', 'Quận', 79),
(10, 'Quận 10', 'Quận', 79),
(11, 'Quận 11', 'Quận', 79),
(18, 'Quận 12', 'Quận', 79),
(19, 'Quận Thủ Đức', 'Quận', 79),
(20, 'Quận Bình Thạnh', 'Quận', 79),
(21, 'Quận Gò Vấp', 'Quận', 79),
(24, 'Quận Tân Bình', 'Quận', 79),
(26, 'Quận Bình Tân', 'Quận', 79),
(27, 'Huyện Bình Chánh', 'Huyện', 79),
(28, 'Huyện Củ Chi', 'Huyện', 79),
(30, 'TP Buôn Ma Thuột', 'Thành Phố', 66),
(33, 'Huyện Xín Mần', 'Huyện', 2),
(34, 'Huyện Bắc Quang', 'Huyện', 2),
(35, 'Huyện Quang Bình', 'Huyện', 2),
(40, 'Thành phố Cao Bằng', 'Thành phố', 4),
(42, 'Huyện Bảo Lâm', 'Huyện', 4),
(43, 'Huyện Bảo Lạc', 'Huyện', 4),
(44, 'Huyện Thông Nông', 'Huyện', 4),
(45, 'Huyện Hà Quảng', 'Huyện', 4),
(46, 'Huyện Trà Lĩnh', 'Huyện', 4),
(47, 'Huyện Trùng Khánh', 'Huyện', 4),
(48, 'Huyện Hạ Lang', 'Huyện', 4),
(49, 'Huyện Quảng Uyên', 'Huyện', 4),
(50, 'Huyện Phục Hoà', 'Huyện', 4),
(51, 'Huyện Hoà An', 'Huyện', 4),
(52, 'Huyện Nguyên Bình', 'Huyện', 4),
(53, 'Huyện Thạch An', 'Huyện', 4),
(58, 'Thành Phố Bắc Kạn', 'Thành phố', 6),
(60, 'Huyện Pác Nặm', 'Huyện', 6),
(61, 'Huyện Ba Bể', 'Huyện', 6),
(62, 'Huyện Ngân Sơn', 'Huyện', 6),
(63, 'Huyện Bạch Thông', 'Huyện', 6),
(64, 'Huyện Chợ Đồn', 'Huyện', 6),
(65, 'Huyện Chợ Mới', 'Huyện', 6),
(66, 'Huyện Na Rì', 'Huyện', 6),
(70, 'Thành phố Tuyên Quang', 'Thành phố', 8),
(71, 'Huyện Lâm Bình', 'Huyện', 8),
(72, 'Huyện Nà Hang', 'Huyện', 8),
(73, 'Huyện Chiêm Hóa', 'Huyện', 8),
(74, 'Huyện Hàm Yên', 'Huyện', 8),
(75, 'Huyện Yên Sơn', 'Huyện', 8),
(76, 'Huyện Sơn Dương', 'Huyện', 8),
(80, 'Thành phố Lào Cai', 'Thành phố', 10),
(82, 'Huyện Bát Xát', 'Huyện', 10),
(83, 'Huyện Mường Khương', 'Huyện', 10),
(84, 'Huyện Si Ma Cai', 'Huyện', 10),
(85, 'Huyện Bắc Hà', 'Huyện', 10),
(86, 'Huyện Bảo Thắng', 'Huyện', 10),
(87, 'Huyện Bảo Yên', 'Huyện', 10),
(88, 'Huyện Sa Pa', 'Huyện', 10),
(89, 'Huyện Văn Bàn', 'Huyện', 10),
(94, 'Thành phố Điện Biên Phủ', 'Thành phố', 11),
(95, 'Thị Xã Mường Lay', 'Thị xã', 11),
(96, 'Huyện Mường Nhé', 'Huyện', 11),
(97, 'Huyện Mường Chà', 'Huyện', 11),
(98, 'Huyện Tủa Chùa', 'Huyện', 11),
(99, 'Huyện Tuần Giáo', 'Huyện', 11),
(100, 'Huyện Điện Biên', 'Huyện', 11),
(101, 'Huyện Điện Biên Đông', 'Huyện', 11),
(102, 'Huyện Mường Ảng', 'Huyện', 11),
(103, 'Huyện Nậm Pồ', 'Huyện', 11),
(105, 'Thành phố Lai Châu', 'Thành phố', 12),
(106, 'Huyện Tam Đường', 'Huyện', 12),
(107, 'Huyện Mường Tè', 'Huyện', 12),
(108, 'Huyện Sìn Hồ', 'Huyện', 12),
(109, 'Huyện Phong Thổ', 'Huyện', 12),
(110, 'Huyện Than Uyên', 'Huyện', 12),
(111, 'Huyện Tân Uyên', 'Huyện', 12),
(112, 'Huyện Nậm Nhùn', 'Huyện', 12),
(116, 'Thành phố Sơn La', 'Thành phố', 14),
(118, 'Huyện Quỳnh Nhai', 'Huyện', 14),
(119, 'Huyện Thuận Châu', 'Huyện', 14),
(120, 'Huyện Mường La', 'Huyện', 14),
(121, 'Huyện Bắc Yên', 'Huyện', 14),
(122, 'Huyện Phù Yên', 'Huyện', 14),
(123, 'Huyện Mộc Châu', 'Huyện', 14),
(124, 'Huyện Yên Châu', 'Huyện', 14),
(125, 'Huyện Mai Sơn', 'Huyện', 14),
(126, 'Huyện Sông Mã', 'Huyện', 14),
(127, 'Huyện Sốp Cộp', 'Huyện', 14),
(128, 'Huyện Vân Hồ', 'Huyện', 14),
(132, 'Thành phố Yên Bái', 'Thành phố', 15),
(133, 'Thị xã Nghĩa Lộ', 'Thị xã', 15),
(135, 'Huyện Lục Yên', 'Huyện', 15),
(136, 'Huyện Văn Yên', 'Huyện', 15),
(137, 'Huyện Mù Căng Chải', 'Huyện', 15),
(138, 'Huyện Trấn Yên', 'Huyện', 15),
(139, 'Huyện Trạm Tấu', 'Huyện', 15),
(140, 'Huyện Văn Chấn', 'Huyện', 15),
(141, 'Huyện Yên Bình', 'Huyện', 15),
(148, 'Thành phố Hòa Bình', 'Thành phố', 17),
(150, 'Huyện Đà Bắc', 'Huyện', 17),
(151, 'Huyện Kỳ Sơn', 'Huyện', 17),
(152, 'Huyện Lương Sơn', 'Huyện', 17),
(153, 'Huyện Kim Bôi', 'Huyện', 17),
(154, 'Huyện Cao Phong', 'Huyện', 17),
(155, 'Huyện Tân Lạc', 'Huyện', 17),
(156, 'Huyện Mai Châu', 'Huyện', 17),
(157, 'Huyện Lạc Sơn', 'Huyện', 17),
(158, 'Huyện Yên Thủy', 'Huyện', 17),
(159, 'Huyện Lạc Thủy', 'Huyện', 17),
(164, 'Thành phố Thái Nguyên', 'Thành phố', 19),
(165, 'Thành phố Sông Công', 'Thành phố', 19),
(167, 'Huyện Định Hóa', 'Huyện', 19),
(168, 'Huyện Phú Lương', 'Huyện', 19),
(169, 'Huyện Đồng Hỷ', 'Huyện', 19),
(170, 'Huyện Võ Nhai', 'Huyện', 19),
(171, 'Huyện Đại Từ', 'Huyện', 19),
(172, 'Thị xã Phổ Yên', 'Thị xã', 19),
(173, 'Huyện Phú Bình', 'Huyện', 19),
(178, 'Thành phố Lạng Sơn', 'Thành phố', 20),
(180, 'Huyện Tràng Định', 'Huyện', 20),
(181, 'Huyện Bình Gia', 'Huyện', 20),
(182, 'Huyện Văn Lãng', 'Huyện', 20),
(183, 'Huyện Cao Lộc', 'Huyện', 20),
(184, 'Huyện Văn Quan', 'Huyện', 20),
(185, 'Huyện Bắc Sơn', 'Huyện', 20),
(186, 'Huyện Hữu Lũng', 'Huyện', 20),
(187, 'Huyện Chi Lăng', 'Huyện', 20),
(188, 'Huyện Lộc Bình', 'Huyện', 20),
(189, 'Huyện Đình Lập', 'Huyện', 20),
(193, 'Thành phố Hạ Long', 'Thành phố', 22),
(194, 'Thành phố Móng Cái', 'Thành phố', 22),
(195, 'Thành phố Cẩm Phả', 'Thành phố', 22),
(196, 'Thành phố Uông Bí', 'Thành phố', 22),
(198, 'Huyện Bình Liêu', 'Huyện', 22),
(199, 'Huyện Tiên Yên', 'Huyện', 22),
(200, 'Huyện Đầm Hà', 'Huyện', 22),
(201, 'Huyện Hải Hà', 'Huyện', 22),
(202, 'Huyện Ba Chẽ', 'Huyện', 22),
(203, 'Huyện Vân Đồn', 'Huyện', 22),
(204, 'Huyện Hoành Bồ', 'Huyện', 22),
(205, 'Thị xã Đông Triều', 'Thị xã', 22),
(206, 'Thị xã Quảng Yên', 'Thị xã', 22),
(207, 'Huyện Cô Tô', 'Huyện', 22),
(213, 'Thành phố Bắc Giang', 'Thành phố', 24),
(215, 'Huyện Yên Thế', 'Huyện', 24),
(216, 'Huyện Tân Yên', 'Huyện', 24),
(217, 'Huyện Lạng Giang', 'Huyện', 24),
(218, 'Huyện Lục Nam', 'Huyện', 24),
(219, 'Huyện Lục Ngạn', 'Huyện', 24),
(220, 'Huyện Sơn Động', 'Huyện', 24),
(221, 'Huyện Yên Dũng', 'Huyện', 24),
(222, 'Huyện Việt Yên', 'Huyện', 24),
(223, 'Huyện Hiệp Hòa', 'Huyện', 24),
(227, 'Thành phố Việt Trì', 'Thành phố', 25),
(228, 'Thị xã Phú Thọ', 'Thị xã', 25),
(230, 'Huyện Đoan Hùng', 'Huyện', 25),
(231, 'Huyện Hạ Hoà', 'Huyện', 25),
(232, 'Huyện Thanh Ba', 'Huyện', 25),
(233, 'Huyện Phù Ninh', 'Huyện', 25),
(234, 'Huyện Yên Lập', 'Huyện', 25),
(235, 'Huyện Cẩm Khê', 'Huyện', 25),
(236, 'Huyện Tam Nông', 'Huyện', 25),
(237, 'Huyện Lâm Thao', 'Huyện', 25),
(238, 'Huyện Thanh Sơn', 'Huyện', 25),
(239, 'Huyện Thanh Thuỷ', 'Huyện', 25),
(240, 'Huyện Tân Sơn', 'Huyện', 25),
(243, 'Thành phố Vĩnh Yên', 'Thành phố', 26),
(244, 'Thị xã Phúc Yên', 'Thị xã', 26),
(246, 'Huyện Lập Thạch', 'Huyện', 26),
(247, 'Huyện Tam Dương', 'Huyện', 26),
(248, 'Huyện Tam Đảo', 'Huyện', 26),
(249, 'Huyện Bình Xuyên', 'Huyện', 26),
(250, 'Huyện Mê Linh', 'Huyện', 1),
(251, 'Huyện Yên Lạc', 'Huyện', 26),
(252, 'Huyện Vĩnh Tường', 'Huyện', 26),
(253, 'Huyện Sông Lô', 'Huyện', 26),
(256, 'Thành phố Bắc Ninh', 'Thành phố', 27),
(258, 'Huyện Yên Phong', 'Huyện', 27),
(259, 'Huyện Quế Võ', 'Huyện', 27),
(260, 'Huyện Tiên Du', 'Huyện', 27),
(261, 'Thị xã Từ Sơn', 'Thị xã', 27),
(262, 'Huyện Thuận Thành', 'Huyện', 27),
(263, 'Huyện Gia Bình', 'Huyện', 27),
(264, 'Huyện Lương Tài', 'Huyện', 27),
(268, 'Quận Hà Đông', 'Quận', 1),
(269, 'Thị xã Sơn Tây', 'Thị xã', 1),
(271, 'Huyện Ba Vì', 'Huyện', 1),
(272, 'Huyện Phúc Thọ', 'Huyện', 1),
(273, 'Huyện Đan Phượng', 'Huyện', 1),
(274, 'Huyện Hoài Đức', 'Huyện', 1),
(275, 'Huyện Quốc Oai', 'Huyện', 1),
(276, 'Huyện Thạch Thất', 'Huyện', 1),
(277, 'Huyện Chương Mỹ', 'Huyện', 1),
(278, 'Huyện Thanh Oai', 'Huyện', 1),
(279, 'Huyện Thường Tín', 'Huyện', 1),
(280, 'Huyện Phú Xuyên', 'Huyện', 1),
(281, 'Huyện Ứng Hòa', 'Huyện', 1),
(282, 'Huyện Mỹ Đức', 'Huyện', 1),
(288, 'Thành phố Hải Dương', 'Thành phố', 30),
(290, 'Thị xã Chí Linh', 'Thị xã', 30),
(291, 'Huyện Nam Sách', 'Huyện', 30),
(292, 'Huyện Kinh Môn', 'Huyện', 30),
(293, 'Huyện Kim Thành', 'Huyện', 30),
(294, 'Huyện Thanh Hà', 'Huyện', 30),
(295, 'Huyện Cẩm Giàng', 'Huyện', 30),
(296, 'Huyện Bình Giang', 'Huyện', 30),
(297, 'Huyện Gia Lộc', 'Huyện', 30),
(298, 'Huyện Tứ Kỳ', 'Huyện', 30),
(299, 'Huyện Ninh Giang', 'Huyện', 30),
(300, 'Huyện Thanh Miện', 'Huyện', 30),
(303, 'Quận Hồng Bàng', 'Quận', 31),
(304, 'Quận Ngô Quyền', 'Quận', 31),
(305, 'Quận Lê Chân', 'Quận', 31),
(306, 'Quận Hải An', 'Quận', 31),
(307, 'Quận Kiến An', 'Quận', 31),
(308, 'Quận Đồ Sơn', 'Quận', 31),
(309, 'Quận Dương Kinh', 'Quận', 31),
(311, 'Huyện Thuỷ Nguyên', 'Huyện', 31),
(312, 'Huyện An Dương', 'Huyện', 31),
(313, 'Huyện An Lão', 'Huyện', 31),
(314, 'Huyện Kiến Thuỵ', 'Huyện', 31),
(315, 'Huyện Tiên Lãng', 'Huyện', 31),
(316, 'Huyện Vĩnh Bảo', 'Huyện', 31),
(317, 'Huyện Cát Hải', 'Huyện', 31),
(318, 'Huyện Bạch Long Vĩ', 'Huyện', 31),
(323, 'Thành phố Hưng Yên', 'Thành phố', 33),
(325, 'Huyện Văn Lâm', 'Huyện', 33),
(326, 'Huyện Văn Giang', 'Huyện', 33),
(327, 'Huyện Yên Mỹ', 'Huyện', 33),
(328, 'Huyện Mỹ Hào', 'Huyện', 33),
(329, 'Huyện Ân Thi', 'Huyện', 33),
(330, 'Huyện Khoái Châu', 'Huyện', 33),
(331, 'Huyện Kim Động', 'Huyện', 33),
(332, 'Huyện Tiên Lữ', 'Huyện', 33),
(333, 'Huyện Phù Cừ', 'Huyện', 33),
(336, 'Thành phố Thái Bình', 'Thành phố', 34),
(338, 'Huyện Quỳnh Phụ', 'Huyện', 34),
(339, 'Huyện Hưng Hà', 'Huyện', 34),
(340, 'Huyện Đông Hưng', 'Huyện', 34),
(341, 'Huyện Thái Thụy', 'Huyện', 34),
(342, 'Huyện Tiền Hải', 'Huyện', 34),
(343, 'Huyện Kiến Xương', 'Huyện', 34),
(344, 'Huyện Vũ Thư', 'Huyện', 34),
(347, 'Thành phố Phủ Lý', 'Thành phố', 35),
(349, 'Huyện Duy Tiên', 'Huyện', 35),
(350, 'Huyện Kim Bảng', 'Huyện', 35),
(351, 'Huyện Thanh Liêm', 'Huyện', 35),
(352, 'Huyện Bình Lục', 'Huyện', 35),
(353, 'Huyện Lý Nhân', 'Huyện', 35),
(356, 'Thành phố Nam Định', 'Thành phố', 36),
(358, 'Huyện Mỹ Lộc', 'Huyện', 36),
(359, 'Huyện Vụ Bản', 'Huyện', 36),
(360, 'Huyện Ý Yên', 'Huyện', 36),
(361, 'Huyện Nghĩa Hưng', 'Huyện', 36),
(362, 'Huyện Nam Trực', 'Huyện', 36),
(363, 'Huyện Trực Ninh', 'Huyện', 36),
(364, 'Huyện Xuân Trường', 'Huyện', 36),
(365, 'Huyện Giao Thủy', 'Huyện', 36),
(366, 'Huyện Hải Hậu', 'Huyện', 36),
(369, 'Thành phố Ninh Bình', 'Thành phố', 37),
(370, 'Thành phố Tam Điệp', 'Thành phố', 37),
(372, 'Huyện Nho Quan', 'Huyện', 37),
(373, 'Huyện Gia Viễn', 'Huyện', 37),
(374, 'Huyện Hoa Lư', 'Huyện', 37),
(375, 'Huyện Yên Khánh', 'Huyện', 37),
(376, 'Huyện Kim Sơn', 'Huyện', 37),
(377, 'Huyện Yên Mô', 'Huyện', 37),
(380, 'Thành phố Thanh Hóa', 'Thành phố', 38),
(381, 'Thị xã Bỉm Sơn', 'Thị xã', 38),
(382, 'Thị xã Sầm Sơn', 'Thị xã', 38),
(384, 'Huyện Mường Lát', 'Huyện', 38),
(385, 'Huyện Quan Hóa', 'Huyện', 38),
(386, 'Huyện Bá Thước', 'Huyện', 38),
(387, 'Huyện Quan Sơn', 'Huyện', 38),
(388, 'Huyện Lang Chánh', 'Huyện', 38),
(389, 'Huyện Ngọc Lặc', 'Huyện', 38),
(390, 'Huyện Cẩm Thủy', 'Huyện', 38),
(391, 'Huyện Thạch Thành', 'Huyện', 38),
(392, 'Huyện Hà Trung', 'Huyện', 38),
(393, 'Huyện Vĩnh Lộc', 'Huyện', 38),
(394, 'Huyện Yên Định', 'Huyện', 38),
(395, 'Huyện Thọ Xuân', 'Huyện', 38),
(396, 'Huyện Thường Xuân', 'Huyện', 38),
(397, 'Huyện Triệu Sơn', 'Huyện', 38),
(398, 'Huyện Thiệu Hóa', 'Huyện', 38),
(399, 'Huyện Hoằng Hóa', 'Huyện', 38),
(400, 'Huyện Hậu Lộc', 'Huyện', 38),
(401, 'Huyện Nga Sơn', 'Huyện', 38),
(402, 'Huyện Như Xuân', 'Huyện', 38),
(403, 'Huyện Như Thanh', 'Huyện', 38),
(404, 'Huyện Nông Cống', 'Huyện', 38),
(405, 'Huyện Đông Sơn', 'Huyện', 38),
(406, 'Huyện Quảng Xương', 'Huyện', 38),
(407, 'Huyện Tĩnh Gia', 'Huyện', 38),
(412, 'Thành phố Vinh', 'Thành phố', 40),
(413, 'Thị xã Cửa Lò', 'Thị xã', 40),
(414, 'Thị xã Thái Hoà', 'Thị xã', 40),
(415, 'Huyện Quế Phong', 'Huyện', 40),
(416, 'Huyện Quỳ Châu', 'Huyện', 40),
(417, 'Huyện Kỳ Sơn', 'Huyện', 40),
(418, 'Huyện Tương Dương', 'Huyện', 40),
(419, 'Huyện Nghĩa Đàn', 'Huyện', 40),
(420, 'Huyện Quỳ Hợp', 'Huyện', 40),
(421, 'Huyện Quỳnh Lưu', 'Huyện', 40),
(422, 'Huyện Con Cuông', 'Huyện', 40),
(423, 'Huyện Tân Kỳ', 'Huyện', 40),
(424, 'Huyện Anh Sơn', 'Huyện', 40),
(425, 'Huyện Diễn Châu', 'Huyện', 40),
(426, 'Huyện Yên Thành', 'Huyện', 40),
(427, 'Huyện Đô Lương', 'Huyện', 40),
(428, 'Huyện Thanh Chương', 'Huyện', 40),
(429, 'Huyện Nghi Lộc', 'Huyện', 40),
(430, 'Huyện Nam Đàn', 'Huyện', 40),
(431, 'Huyện Hưng Nguyên', 'Huyện', 40),
(432, 'Thị xã Hoàng Mai', 'Thị xã', 40),
(436, 'Thành phố Hà Tĩnh', 'Thành phố', 42),
(437, 'Thị xã Hồng Lĩnh', 'Thị xã', 42),
(439, 'Huyện Hương Sơn', 'Huyện', 42),
(440, 'Huyện Đức Thọ', 'Huyện', 42),
(441, 'Huyện Vũ Quang', 'Huyện', 42),
(442, 'Huyện Nghi Xuân', 'Huyện', 42),
(443, 'Huyện Can Lộc', 'Huyện', 42),
(444, 'Huyện Hương Khê', 'Huyện', 42),
(445, 'Huyện Thạch Hà', 'Huyện', 42),
(446, 'Huyện Cẩm Xuyên', 'Huyện', 42),
(447, 'Huyện Kỳ Anh', 'Huyện', 42),
(448, 'Huyện Lộc Hà', 'Huyện', 42),
(449, 'Thị xã Kỳ Anh', 'Thị xã', 42),
(450, 'Thành Phố Đồng Hới', 'Thành phố', 44),
(452, 'Huyện Minh Hóa', 'Huyện', 44),
(453, 'Huyện Tuyên Hóa', 'Huyện', 44),
(454, 'Huyện Quảng Trạch', 'Thị xã', 44),
(455, 'Huyện Bố Trạch', 'Huyện', 44),
(456, 'Huyện Quảng Ninh', 'Huyện', 44),
(457, 'Huyện Lệ Thủy', 'Huyện', 44),
(458, 'Thị xã Ba Đồn', 'Huyện', 44),
(461, 'Thành phố Đông Hà', 'Thành phố', 45),
(462, 'Thị xã Quảng Trị', 'Thị xã', 45),
(464, 'Huyện Vĩnh Linh', 'Huyện', 45),
(465, 'Huyện Hướng Hóa', 'Huyện', 45),
(466, 'Huyện Gio Linh', 'Huyện', 45),
(467, 'Huyện Đa Krông', 'Huyện', 45),
(468, 'Huyện Cam Lộ', 'Huyện', 45),
(469, 'Huyện Triệu Phong', 'Huyện', 45),
(470, 'Huyện Hải Lăng', 'Huyện', 45),
(471, 'Huyện Cồn Cỏ', 'Huyện', 45),
(474, 'Thành phố Huế', 'Thành phố', 46),
(476, 'Huyện Phong Điền', 'Huyện', 46),
(477, 'Huyện Quảng Điền', 'Huyện', 46),
(478, 'Huyện Phú Vang', 'Huyện', 46),
(479, 'Thị xã Hương Thủy', 'Thị xã', 46),
(480, 'Thị xã Hương Trà', 'Thị xã', 46),
(481, 'Huyện A Lưới', 'Huyện', 46),
(482, 'Huyện Phú Lộc', 'Huyện', 46),
(483, 'Huyện Nam Đông', 'Huyện', 46),
(490, 'Quận Liên Chiểu', 'Quận', 48),
(491, 'Quận Thanh Khê', 'Quận', 48),
(492, 'Quận Hải Châu', 'Quận', 48),
(493, 'Quận Sơn Trà', 'Quận', 48),
(494, 'Quận Ngũ Hành Sơn', 'Quận', 48),
(495, 'Quận Cẩm Lệ', 'Quận', 48),
(497, 'Huyện Hòa Vang', 'Huyện', 48),
(498, 'Huyện Hoàng Sa', 'Huyện', 48),
(502, 'Thành phố Tam Kỳ', 'Thành phố', 49),
(503, 'Thành phố Hội An', 'Thành phố', 49),
(504, 'Huyện Tây Giang', 'Huyện', 49),
(505, 'Huyện Đông Giang', 'Huyện', 49),
(506, 'Huyện Đại Lộc', 'Huyện', 49),
(507, 'Thị xã Điện Bàn', 'Thị xã', 49),
(508, 'Huyện Duy Xuyên', 'Huyện', 49),
(509, 'Huyện Quế Sơn', 'Huyện', 49),
(510, 'Huyện Nam Giang', 'Huyện', 49),
(511, 'Huyện Phước Sơn', 'Huyện', 49),
(512, 'Huyện Hiệp Đức', 'Huyện', 49),
(513, 'Huyện Thăng Bình', 'Huyện', 49),
(514, 'Huyện Tiên Phước', 'Huyện', 49),
(515, 'Huyện Bắc Trà My', 'Huyện', 49),
(516, 'Huyện Nam Trà My', 'Huyện', 49),
(517, 'Huyện Núi Thành', 'Huyện', 49),
(518, 'Huyện Phú Ninh', 'Huyện', 49),
(519, 'Huyện Nông Sơn', 'Huyện', 49),
(522, 'Thành phố Quảng Ngãi', 'Thành phố', 51),
(524, 'Huyện Bình Sơn', 'Huyện', 51),
(525, 'Huyện Trà Bồng', 'Huyện', 51),
(526, 'Huyện Tây Trà', 'Huyện', 51),
(527, 'Huyện Sơn Tịnh', 'Huyện', 51),
(528, 'Huyện Tư Nghĩa', 'Huyện', 51),
(529, 'Huyện Sơn Hà', 'Huyện', 51),
(530, 'Huyện Sơn Tây', 'Huyện', 51),
(531, 'Huyện Minh Long', 'Huyện', 51),
(532, 'Huyện Nghĩa Hành', 'Huyện', 51),
(533, 'Huyện Mộ Đức', 'Huyện', 51),
(534, 'Huyện Đức Phổ', 'Huyện', 51),
(535, 'Huyện Ba Tơ', 'Huyện', 51),
(536, 'Huyện Lý Sơn', 'Huyện', 51),
(540, 'Thành phố Qui Nhơn', 'Thành phố', 52),
(542, 'Huyện An Lão', 'Huyện', 52),
(543, 'Huyện Hoài Nhơn', 'Huyện', 52),
(544, 'Huyện Hoài Ân', 'Huyện', 52),
(545, 'Huyện Phù Mỹ', 'Huyện', 52),
(546, 'Huyện Vĩnh Thạnh', 'Huyện', 52),
(547, 'Huyện Tây Sơn', 'Huyện', 52),
(548, 'Huyện Phù Cát', 'Huyện', 52),
(549, 'Thị xã An Nhơn', 'Thị xã', 52),
(550, 'Huyện Tuy Phước', 'Huyện', 52),
(551, 'Huyện Vân Canh', 'Huyện', 52),
(555, 'Thành phố Tuy Hoà', 'Thành phố', 54),
(557, 'Thị xã Sông Cầu', 'Thị xã', 54),
(558, 'Huyện Đồng Xuân', 'Huyện', 54),
(559, 'Huyện Tuy An', 'Huyện', 54),
(560, 'Huyện Sơn Hòa', 'Huyện', 54),
(561, 'Huyện Sông Hinh', 'Huyện', 54),
(562, 'Huyện Tây Hoà', 'Huyện', 54),
(563, 'Huyện Phú Hoà', 'Huyện', 54),
(564, 'Huyện Đông Hòa', 'Huyện', 54),
(568, 'Thành phố Nha Trang', 'Thành phố', 56),
(569, 'Thành phố Cam Ranh', 'Thành phố', 56),
(570, 'Huyện Cam Lâm', 'Huyện', 56),
(571, 'Huyện Vạn Ninh', 'Huyện', 56),
(572, 'Thị xã Ninh Hòa', 'Thị xã', 56),
(573, 'Huyện Khánh Vĩnh', 'Huyện', 56),
(574, 'Huyện Diên Khánh', 'Huyện', 56),
(575, 'Huyện Khánh Sơn', 'Huyện', 56),
(576, 'Huyện Trường Sa', 'Huyện', 56),
(582, 'Thành phố Phan Rang-Tháp Chàm', 'Thành phố', 58),
(584, 'Huyện Bác Ái', 'Huyện', 58),
(585, 'Huyện Ninh Sơn', 'Huyện', 58),
(586, 'Huyện Ninh Hải', 'Huyện', 58),
(587, 'Huyện Ninh Phước', 'Huyện', 58),
(588, 'Huyện Thuận Bắc', 'Huyện', 58),
(589, 'Huyện Thuận Nam', 'Huyện', 58),
(593, 'Thành phố Phan Thiết', 'Thành phố', 60),
(594, 'Thị xã La Gi', 'Thị xã', 60),
(595, 'Huyện Tuy Phong', 'Huyện', 60),
(596, 'Huyện Bắc Bình', 'Huyện', 60),
(597, 'Huyện Hàm Thuận Bắc', 'Huyện', 60),
(598, 'Huyện Hàm Thuận Nam', 'Huyện', 60),
(599, 'Huyện Tánh Linh', 'Huyện', 60),
(600, 'Huyện Đức Linh', 'Huyện', 60),
(601, 'Huyện Hàm Tân', 'Huyện', 60),
(602, 'Huyện Phú Quí', 'Huyện', 60),
(608, 'Thành phố Kon Tum', 'Thành phố', 62),
(610, 'Huyện Đắk Glei', 'Huyện', 62),
(611, 'Huyện Ngọc Hồi', 'Huyện', 62),
(612, 'Huyện Đắk Tô', 'Huyện', 62),
(613, 'Huyện Kon Plông', 'Huyện', 62),
(614, 'Huyện Kon Rẫy', 'Huyện', 62),
(615, 'Huyện Đắk Hà', 'Huyện', 62),
(616, 'Huyện Sa Thầy', 'Huyện', 62),
(617, 'Huyện Tu Mơ Rông', 'Huyện', 62),
(618, 'Huyện Ia H\' Drai', 'Huyện', 62),
(622, 'Thành phố Pleiku', 'Thành phố', 64),
(623, 'Thị xã An Khê', 'Thị xã', 64),
(624, 'Thị xã Ayun Pa', 'Thị xã', 64),
(625, 'Huyện KBang', 'Huyện', 64),
(626, 'Huyện Đăk Đoa', 'Huyện', 64),
(627, 'Huyện Chư Păh', 'Huyện', 64),
(628, 'Huyện Ia Grai', 'Huyện', 64),
(629, 'Huyện Mang Yang', 'Huyện', 64),
(630, 'Huyện Kông Chro', 'Huyện', 64),
(631, 'Huyện Đức Cơ', 'Huyện', 64),
(632, 'Huyện Chư Prông', 'Huyện', 64),
(633, 'Huyện Chư Sê', 'Huyện', 64),
(634, 'Huyện Đăk Pơ', 'Huyện', 64),
(635, 'Huyện Ia Pa', 'Huyện', 64),
(637, 'Huyện Krông Pa', 'Huyện', 64),
(638, 'Huyện Phú Thiện', 'Huyện', 64),
(639, 'Huyện Chư Pưh', 'Huyện', 64),
(643, 'Thành phố Buôn Ma Thuột', 'Thành phố', 66),
(644, 'Thị Xã Buôn Hồ', 'Thị xã', 66),
(645, 'Huyện Ea H\'leo', 'Huyện', 66),
(646, 'Huyện Ea Súp', 'Huyện', 66),
(647, 'Huyện Buôn Đôn', 'Huyện', 66),
(648, 'Huyện Cư M\'gar', 'Huyện', 66),
(649, 'Huyện Krông Búk', 'Huyện', 66),
(650, 'Huyện Krông Năng', 'Huyện', 66),
(651, 'Huyện Ea Kar', 'Huyện', 66),
(652, 'Huyện M\'Đrắk', 'Huyện', 66),
(653, 'Huyện Krông Bông', 'Huyện', 66),
(654, 'Huyện Krông Pắc', 'Huyện', 66),
(655, 'Huyện Krông A Na', 'Huyện', 66),
(656, 'Huyện Lắk', 'Huyện', 66),
(657, 'Huyện Cư Kuin', 'Huyện', 66),
(660, 'Thị xã Gia Nghĩa', 'Thị xã', 67),
(661, 'Huyện Đăk Glong', 'Huyện', 67),
(662, 'Huyện Cư Jút', 'Huyện', 67),
(663, 'Huyện Đắk Mil', 'Huyện', 67),
(664, 'Huyện Krông Nô', 'Huyện', 67),
(665, 'Huyện Đắk Song', 'Huyện', 67),
(666, 'Huyện Đắk R Lấp', 'Huyện', 67),
(667, 'Huyện Tuy Đức', 'Huyện', 67),
(672, 'Thành phố Đà Lạt', 'Thành phố', 68),
(673, 'Thành phố Bảo Lộc', 'Thành phố', 68),
(674, 'Huyện Đam Rông', 'Huyện', 68),
(675, 'Huyện Lạc Dương', 'Huyện', 68),
(676, 'Huyện Lâm Hà', 'Huyện', 68),
(677, 'Huyện Đơn Dương', 'Huyện', 68),
(678, 'Huyện Đức Trọng', 'Huyện', 68),
(679, 'Huyện Di Linh', 'Huyện', 68),
(680, 'Huyện Bảo Lâm', 'Huyện', 68),
(681, 'Huyện Đạ Huoai', 'Huyện', 68),
(682, 'Huyện Đạ Tẻh', 'Huyện', 68),
(683, 'Huyện Cát Tiên', 'Huyện', 68),
(688, 'Thị xã Phước Long', 'Thị xã', 70),
(689, 'Thị xã Đồng Xoài', 'Thị xã', 70),
(690, 'Thị xã Bình Long', 'Thị xã', 70),
(691, 'Huyện Bù Gia Mập', 'Huyện', 70),
(692, 'Huyện Lộc Ninh', 'Huyện', 70),
(693, 'Huyện Bù Đốp', 'Huyện', 70),
(694, 'Huyện Hớn Quản', 'Huyện', 70),
(695, 'Huyện Đồng Phú', 'Huyện', 70),
(696, 'Huyện Bù Đăng', 'Huyện', 70),
(697, 'Huyện Chơn Thành', 'Huyện', 70),
(698, 'Huyện Phú Riềng', 'Huyện', 70),
(703, 'Thành phố Tây Ninh', 'Thành phố', 72),
(705, 'Huyện Tân Biên', 'Huyện', 72),
(706, 'Huyện Tân Châu', 'Huyện', 72),
(707, 'Huyện Dương Minh Châu', 'Huyện', 72),
(708, 'Huyện Châu Thành', 'Huyện', 72),
(709, 'Huyện Hòa Thành', 'Huyện', 72),
(710, 'Huyện Gò Dầu', 'Huyện', 72),
(711, 'Huyện Bến Cầu', 'Huyện', 72),
(712, 'Huyện Trảng Bàng', 'Huyện', 72),
(718, 'Thành phố Thủ Dầu Một', 'Thành phố', 74),
(719, 'Huyện Bàu Bàng', 'Huyện', 74),
(720, 'Huyện Dầu Tiếng', 'Huyện', 74),
(721, 'Thị xã Bến Cát', 'Thị xã', 74),
(722, 'Huyện Phú Giáo', 'Huyện', 74),
(723, 'Thị xã Tân Uyên', 'Thị xã', 74),
(724, 'Thị xã Dĩ An', 'Thị xã', 74),
(725, 'Thị xã Thuận An', 'Thị xã', 74),
(726, 'Huyện Bắc Tân Uyên', 'Huyện', 74),
(731, 'Thành phố Biên Hòa', 'Thành phố', 75),
(732, 'Thị xã Long Khánh', 'Thị xã', 75),
(734, 'Huyện Tân Phú', 'Huyện', 75),
(735, 'Huyện Vĩnh Cửu', 'Huyện', 75),
(736, 'Huyện Định Quán', 'Huyện', 75),
(737, 'Huyện Trảng Bom', 'Huyện', 75),
(738, 'Huyện Thống Nhất', 'Huyện', 75),
(739, 'Huyện Cẩm Mỹ', 'Huyện', 75),
(740, 'Huyện Long Thành', 'Huyện', 75),
(741, 'Huyện Xuân Lộc', 'Huyện', 75),
(742, 'Huyện Nhơn Trạch', 'Huyện', 75),
(747, 'Thành phố Vũng Tàu', 'Thành phố', 77),
(748, 'Thành phố Bà Rịa', 'Thành phố', 77),
(750, 'Huyện Châu Đức', 'Huyện', 77),
(751, 'Huyện Xuyên Mộc', 'Huyện', 77),
(752, 'Huyện Long Điền', 'Huyện', 77),
(753, 'Huyện Đất Đỏ', 'Huyện', 77),
(754, 'Huyện Tân Thành', 'Huyện', 77),
(755, 'Huyện Côn Đảo', 'Huyện', 77),
(767, 'Quận Tân Phú', 'Quận', 79),
(768, 'Quận Phú Nhuận', 'Quận', 79),
(784, 'Huyện Hóc Môn', 'Huyện', 79),
(786, 'Huyện Nhà Bè', 'Huyện', 79),
(787, 'Huyện Cần Giờ', 'Huyện', 79),
(794, 'Thành phố Tân An', 'Thành phố', 80),
(795, 'Thị xã Kiến Tường', 'Thị xã', 80),
(796, 'Huyện Tân Hưng', 'Huyện', 80),
(797, 'Huyện Vĩnh Hưng', 'Huyện', 80),
(798, 'Huyện Mộc Hóa', 'Huyện', 80),
(799, 'Huyện Tân Thạnh', 'Huyện', 80),
(800, 'Huyện Thạnh Hóa', 'Huyện', 80),
(801, 'Huyện Đức Huệ', 'Huyện', 80),
(802, 'Huyện Đức Hòa', 'Huyện', 80),
(803, 'Huyện Bến Lức', 'Huyện', 80),
(804, 'Huyện Thủ Thừa', 'Huyện', 80),
(805, 'Huyện Tân Trụ', 'Huyện', 80),
(806, 'Huyện Cần Đước', 'Huyện', 80),
(807, 'Huyện Cần Giuộc', 'Huyện', 80),
(808, 'Huyện Châu Thành', 'Huyện', 80),
(815, 'Thành phố Mỹ Tho', 'Thành phố', 82),
(816, 'Thị xã Gò Công', 'Thị xã', 82),
(817, 'Thị xã Cai Lậy', 'Huyện', 82),
(818, 'Huyện Tân Phước', 'Huyện', 82),
(819, 'Huyện Cái Bè', 'Huyện', 82),
(820, 'Huyện Cai Lậy', 'Thị xã', 82),
(821, 'Huyện Châu Thành', 'Huyện', 82),
(822, 'Huyện Chợ Gạo', 'Huyện', 82),
(823, 'Huyện Gò Công Tây', 'Huyện', 82),
(824, 'Huyện Gò Công Đông', 'Huyện', 82),
(825, 'Huyện Tân Phú Đông', 'Huyện', 82),
(829, 'Thành phố Bến Tre', 'Thành phố', 83),
(831, 'Huyện Châu Thành', 'Huyện', 83),
(832, 'Huyện Chợ Lách', 'Huyện', 83),
(833, 'Huyện Mỏ Cày Nam', 'Huyện', 83),
(834, 'Huyện Giồng Trôm', 'Huyện', 83),
(835, 'Huyện Bình Đại', 'Huyện', 83),
(836, 'Huyện Ba Tri', 'Huyện', 83),
(837, 'Huyện Thạnh Phú', 'Huyện', 83),
(838, 'Huyện Mỏ Cày Bắc', 'Huyện', 83),
(842, 'Thành phố Trà Vinh', 'Thành phố', 84),
(844, 'Huyện Càng Long', 'Huyện', 84),
(845, 'Huyện Cầu Kè', 'Huyện', 84),
(846, 'Huyện Tiểu Cần', 'Huyện', 84),
(847, 'Huyện Châu Thành', 'Huyện', 84),
(848, 'Huyện Cầu Ngang', 'Huyện', 84),
(849, 'Huyện Trà Cú', 'Huyện', 84),
(850, 'Huyện Duyên Hải', 'Huyện', 84),
(851, 'Thị xã Duyên Hải', 'Thị xã', 84),
(855, 'Thành phố Vĩnh Long', 'Thành phố', 86),
(857, 'Huyện Long Hồ', 'Huyện', 86),
(858, 'Huyện Mang Thít', 'Huyện', 86),
(859, 'Huyện  Vũng Liêm', 'Huyện', 86),
(860, 'Huyện Tam Bình', 'Huyện', 86),
(861, 'Thị xã Bình Minh', 'Thị xã', 86),
(862, 'Huyện Trà Ôn', 'Huyện', 86),
(863, 'Huyện Bình Tân', 'Huyện', 86),
(866, 'Thành phố Cao Lãnh', 'Thành phố', 87),
(867, 'Thành phố Sa Đéc', 'Thành phố', 87),
(868, 'Thị xã Hồng Ngự', 'Thị xã', 87),
(869, 'Huyện Tân Hồng', 'Huyện', 87),
(870, 'Huyện Hồng Ngự', 'Huyện', 87),
(871, 'Huyện Tam Nông', 'Huyện', 87),
(872, 'Huyện Tháp Mười', 'Huyện', 87),
(873, 'Huyện Cao Lãnh', 'Huyện', 87),
(874, 'Huyện Thanh Bình', 'Huyện', 87),
(875, 'Huyện Lấp Vò', 'Huyện', 87),
(876, 'Huyện Lai Vung', 'Huyện', 87),
(877, 'Huyện Châu Thành', 'Huyện', 87),
(883, 'Thành phố Long Xuyên', 'Thành phố', 89),
(884, 'Thành phố Châu Đốc', 'Thành phố', 89),
(886, 'Huyện An Phú', 'Huyện', 89),
(887, 'Thị xã Tân Châu', 'Thị xã', 89),
(888, 'Huyện Phú Tân', 'Huyện', 89),
(889, 'Huyện Châu Phú', 'Huyện', 89),
(890, 'Huyện Tịnh Biên', 'Huyện', 89),
(891, 'Huyện Tri Tôn', 'Huyện', 89),
(892, 'Huyện Châu Thành', 'Huyện', 89),
(893, 'Huyện Chợ Mới', 'Huyện', 89),
(894, 'Huyện Thoại Sơn', 'Huyện', 89),
(899, 'Thành phố Rạch Giá', 'Thành phố', 91),
(900, 'Thị xã Hà Tiên', 'Thị xã', 91),
(902, 'Huyện Kiên Lương', 'Huyện', 91),
(903, 'Huyện Hòn Đất', 'Huyện', 91),
(904, 'Huyện Tân Hiệp', 'Huyện', 91),
(905, 'Huyện Châu Thành', 'Huyện', 91),
(906, 'Huyện Giồng Riềng', 'Huyện', 91),
(907, 'Huyện Gò Quao', 'Huyện', 91),
(908, 'Huyện An Biên', 'Huyện', 91),
(909, 'Huyện An Minh', 'Huyện', 91),
(910, 'Huyện Vĩnh Thuận', 'Huyện', 91),
(911, 'Huyện Phú Quốc', 'Huyện', 91),
(912, 'Huyện Kiên Hải', 'Huyện', 91),
(913, 'Huyện U Minh Thượng', 'Huyện', 91),
(914, 'Huyện Giang Thành', 'Huyện', 91),
(916, 'Quận Ninh Kiều', 'Quận', 92),
(917, 'Quận Ô Môn', 'Quận', 92),
(918, 'Quận Bình Thuỷ', 'Quận', 92),
(919, 'Quận Cái Răng', 'Quận', 92),
(923, 'Quận Thốt Nốt', 'Quận', 92),
(924, 'Huyện Vĩnh Thạnh', 'Huyện', 92),
(925, 'Huyện Cờ Đỏ', 'Huyện', 92),
(926, 'Huyện Phong Điền', 'Huyện', 92),
(927, 'Huyện Thới Lai', 'Huyện', 92),
(930, 'Thành phố Vị Thanh', 'Thành phố', 93),
(931, 'Thị xã Ngã Bảy', 'Thị xã', 93),
(932, 'Huyện Châu Thành A', 'Huyện', 93),
(933, 'Huyện Châu Thành', 'Huyện', 93),
(934, 'Huyện Phụng Hiệp', 'Huyện', 93),
(935, 'Huyện Vị Thuỷ', 'Huyện', 93),
(936, 'Huyện Long Mỹ', 'Huyện', 93),
(937, 'Thị xã Long Mỹ', 'Thị xã', 93),
(941, 'Thành phố Sóc Trăng', 'Thành phố', 94),
(942, 'Huyện Châu Thành', 'Huyện', 94),
(943, 'Huyện Kế Sách', 'Huyện', 94),
(944, 'Huyện Mỹ Tú', 'Huyện', 94),
(945, 'Huyện Cù Lao Dung', 'Huyện', 94),
(946, 'Huyện Long Phú', 'Huyện', 94),
(947, 'Huyện Mỹ Xuyên', 'Huyện', 94),
(948, 'Thị xã Ngã Năm', 'Thị xã', 94),
(949, 'Huyện Thạnh Trị', 'Huyện', 94),
(950, 'Thị xã Vĩnh Châu', 'Thị xã', 94),
(951, 'Huyện Trần Đề', 'Huyện', 94),
(954, 'Thành phố Bạc Liêu', 'Thành phố', 95),
(956, 'Huyện Hồng Dân', 'Huyện', 95),
(957, 'Huyện Phước Long', 'Huyện', 95),
(958, 'Huyện Vĩnh Lợi', 'Huyện', 95),
(959, 'Thị xã Giá Rai', 'Thị xã', 95),
(960, 'Huyện Đông Hải', 'Huyện', 95),
(961, 'Huyện Hoà Bình', 'Huyện', 95),
(964, 'Thành phố Cà Mau', 'Thành phố', 96),
(966, 'Huyện U Minh', 'Huyện', 96),
(967, 'Huyện Thới Bình', 'Huyện', 96),
(968, 'Huyện Trần Văn Thời', 'Huyện', 96),
(969, 'Huyện Cái Nước', 'Huyện', 96),
(970, 'Huyện Đầm Dơi', 'Huyện', 96),
(971, 'Huyện Năm Căn', 'Huyện', 96),
(972, 'Huyện Phú Tân', 'Huyện', 96),
(973, 'Huyện Ngọc Hiển', 'Huyện', 96);

-- --------------------------------------------------------

--
-- Table structure for table `db_order`
--

CREATE TABLE `db_order` (
  `id` int(11) NOT NULL,
  `orderCode` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `customerid` int(11) NOT NULL,
  `orderdate` datetime NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `money` int(12) NOT NULL,
  `price_ship` int(11) NOT NULL,
  `coupon` int(11) NOT NULL,
  `province` int(5) NOT NULL,
  `district` int(5) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trash` int(1) NOT NULL DEFAULT 1,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_order`
--

INSERT INTO `db_order` (`id`, `orderCode`, `customerid`, `orderdate`, `fullname`, `phone`, `money`, `price_ship`, `coupon`, `province`, `district`, `address`, `trash`, `status`) VALUES
(105, 'ZUkRJnaG', 84, '2022-05-27 16:26:51', 'ĐỖ VĂN KHA', '0987654321', 60000, 30000, 0, 77, 752, '850 Hoàng Văn Thụ', 1, 2),
(107, 'kNmSsLRp', 84, '2022-05-28 18:32:37', 'ĐỖ VĂN KHA', '0987654321', 39900, 9900, 0, 92, 926, 'aaaaaa', 0, 2),
(109, 'qE0R9sxJ', 87, '2022-06-05 19:52:48', 'bảo nguyễn', '0324242434', 39912, 9900, 0, 79, 787, 'hello', 0, 0),
(110, 'YoWa6vEb', 87, '2022-06-13 10:49:36', 'bảo nguyễn', '0324242434', 89900, 9900, 10000, 92, 919, 'aaaaa', 1, 2),
(111, 'lguh4dpv', 84, '2022-06-13 11:18:47', 'ĐỖ VĂN KHA', '0987654321', 39900, 9900, 0, 79, 8, '85 Phan Chu Trinh', 1, 2),
(112, 'okH6h90v', 84, '2022-06-13 14:43:58', 'ĐỖ VĂN KHA', '0987654321', 99900, 9900, 0, 79, 10, '100 Cách Mạng Tháng Tám', 1, 0),
(113, 'cg3ydfnU', 84, '2022-06-13 22:01:01', 'ĐỖ VĂN KHA', '0987654321', 99900, 9900, 0, 79, 10, '10 đường 3/2 ', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `db_orderdetail`
--

CREATE TABLE `db_orderdetail` (
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `count` int(10) NOT NULL,
  `price` int(11) NOT NULL,
  `trash` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_orderdetail`
--

INSERT INTO `db_orderdetail` (`id`, `orderid`, `productid`, `count`, `price`, `trash`, `status`) VALUES
(131, 105, 63, 2, 15000, 1, 1),
(133, 107, 63, 2, 15000, 1, 1),
(136, 109, 63, 2, 15000, 1, 1),
(137, 109, 78, 1, 12, 1, 1),
(138, 110, 80, 1, 90000, 1, 1),
(139, 111, 79, 2, 15000, 1, 1),
(140, 112, 80, 1, 90000, 1, 1),
(141, 113, 80, 1, 90000, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_producer`
--

CREATE TABLE `db_producer` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `trash` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_producer`
--

INSERT INTO `db_producer` (`id`, `name`, `code`, `keyword`, `created_at`, `created_by`, `modified`, `modified_by`, `status`, `trash`) VALUES
(2, 'Nhà cung cấp Gò Vấp', 'GOVAPPRODUCER', 'Gò Vấp ', '2022-03-01 23:30:37', 1, '2022-03-05 16:18:48', 1, 1, 0),
(3, 'Công Ty cổ phần SATRAFOOD', 'SATRA', 'satrafood', '2022-03-01 16:06:31', 4, '2022-06-04 22:01:42', 1, 1, 1),
(5, 'cong_ty_ncb', 'n19dcat006', 'n19dcat006', '2022-06-05 21:21:07', 1, '2022-06-05 21:21:07', 1, 1, 1),
(7, '&lt;script&gt;alert(1)&lt;/script&gt;', '1234', '13123', '2022-06-09 15:41:00', 1, '2022-06-09 15:41:00', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `db_product`
--

CREATE TABLE `db_product` (
  `id` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sortDesc` text COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `producer` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `number_buy` int(11) NOT NULL,
  `sale` int(3) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `price_sale` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'HDL',
  `modified` datetime NOT NULL,
  `modified_by` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'HDL',
  `trash` int(1) NOT NULL DEFAULT 1,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_product`
--

INSERT INTO `db_product` (`id`, `catid`, `name`, `alias`, `avatar`, `img`, `sortDesc`, `detail`, `producer`, `number`, `number_buy`, `sale`, `price`, `price_sale`, `created`, `created_by`, `modified`, `modified_by`, `trash`, `status`) VALUES
(63, 32, 'Bánh mì thịt nướng', 'banh-mi-thit-nuong', 'banhmithit.jpg', 'banhmithit#xoixeo', 'Bánh mì thịt cho mọi sinh viên giá rẻ phù hợp.', '<p>B&aacute;nh m&igrave; thịt l&agrave; loại đồ ăn kh&ocirc; khan, ăn dễ mắc nghẹn nhưng v&igrave; rẻ v&agrave; chế biến nhanh n&ecirc;n rất được sinh vi&ecirc;n ưa chuộng. Mua ngay 10 c&aacute;i trở l&ecirc;n được freeship tận ph&ograve;ng.</p>\r\n', 3, 1000, 11, 0, 15000, 15000, '2022-03-10 10:13:32', '1', '2022-03-11 10:13:32', '1', 1, 1),
(78, 32, 'Bún chả Hà Nội', 'bun-cha', 'xoixeo.jpg', 'xoixeo.jpg#xoixeo.jpg#xoixeo.jpg', 'Bún chả Hà Nội nhà làm, thơm ngon mời bạn ăn nha, tôi đây không chờ bạn nữa, giờ tôi ăn liền.', '<p>hehe</p>\r\n', 2, 1, 0, 0, 20000, 12, '2022-03-10 19:14:13', '1', '2022-03-11 19:14:13', '1', 1, 1),
(79, 26, 'Cơm tấm', 'com-tam', 'comtam.jpg', 'comtam.jpg', 'Làm từ cơm  nguyên chất', '', 3, 30, 2, 50, 30000, 15000, '2022-06-05 21:04:33', '1', '2022-06-05 21:04:33', '1', 1, 1),
(80, 31, 'Đùi gà công nghiệp', 'dui-ga-cong-nghiep', 'comchiengaxoimo.jpg', 'comchiengaxoimo.jpg', 'Đậm chất đùi gà công nghiệp _bảo', '', 3, 50, 1, 10, 100000, 90000, '2022-06-05 21:07:01', '1', '2022-06-05 21:07:01', '1', 1, 1),
(81, 25, 'Bánh canh', 'banh-canh', 'banhcanh.jpg', 'banhcanh.jpg', 'Bánh canh đẫm chất bánh canh', '', 3, 100, 0, 50, 50000, 25000, '2022-06-05 21:08:44', '1', '2022-06-05 21:08:44', '1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_province`
--

CREATE TABLE `db_province` (
  `id` int(5) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `db_province`
--

INSERT INTO `db_province` (`id`, `name`, `type`) VALUES
(1, 'Thành phố Hà Nội', 'Thành phố Trung ương'),
(2, 'Tỉnh Hà Giang', 'Tỉnh'),
(4, 'Tỉnh Cao Bằng', 'Tỉnh'),
(6, 'Tỉnh Bắc Kạn', 'Tỉnh'),
(8, 'Tỉnh Tuyên Quang', 'Tỉnh'),
(10, 'Tỉnh Lào Cai', 'Tỉnh'),
(11, 'Tỉnh Điện Biên', 'Tỉnh'),
(12, 'Tỉnh Lai Châu', 'Tỉnh'),
(14, 'Tỉnh Sơn La', 'Tỉnh'),
(15, 'Tỉnh Yên Bái', 'Tỉnh'),
(17, 'Tỉnh Hoà Bình', 'Tỉnh'),
(19, 'Tỉnh Thái Nguyên', 'Tỉnh'),
(20, 'Tỉnh Lạng Sơn', 'Tỉnh'),
(22, 'Tỉnh Quảng Ninh', 'Tỉnh'),
(24, 'Tỉnh Bắc Giang', 'Tỉnh'),
(25, 'Tỉnh Phú Thọ', 'Tỉnh'),
(26, 'Tỉnh Vĩnh Phúc', 'Tỉnh'),
(27, 'Tỉnh Bắc Ninh', 'Tỉnh'),
(30, 'Tỉnh Hải Dương', 'Tỉnh'),
(31, 'Thành phố Hải Phòng', 'Thành phố Trung ương'),
(33, 'Tỉnh Hưng Yên', 'Tỉnh'),
(34, 'Tỉnh Thái Bình', 'Tỉnh'),
(35, 'Tỉnh Hà Nam', 'Tỉnh'),
(36, 'Tỉnh Nam Định', 'Tỉnh'),
(37, 'Tỉnh Ninh Bình', 'Tỉnh'),
(38, 'Tỉnh Thanh Hóa', 'Tỉnh'),
(40, 'Tỉnh Nghệ An', 'Tỉnh'),
(42, 'Tỉnh Hà Tĩnh', 'Tỉnh'),
(44, 'Tỉnh Quảng Bình', 'Tỉnh'),
(45, 'Tỉnh Quảng Trị', 'Tỉnh'),
(46, 'Tỉnh Thừa Thiên Huế', 'Tỉnh'),
(48, 'Thành phố Đà Nẵng', 'Thành phố Trung ương'),
(49, 'Tỉnh Quảng Nam', 'Tỉnh'),
(51, 'Tỉnh Quảng Ngãi', 'Tỉnh'),
(52, 'Tỉnh Bình Định', 'Tỉnh'),
(54, 'Tỉnh Phú Yên', 'Tỉnh'),
(56, 'Tỉnh Khánh Hòa', 'Tỉnh'),
(58, 'Tỉnh Ninh Thuận', 'Tỉnh'),
(60, 'Tỉnh Bình Thuận', 'Tỉnh'),
(62, 'Tỉnh Kon Tum', 'Tỉnh'),
(64, 'Tỉnh Gia Lai', 'Tỉnh'),
(66, 'Tỉnh Đắk Lắk', 'Tỉnh'),
(67, 'Tỉnh Đắk Nông', 'Tỉnh'),
(68, 'Tỉnh Lâm Đồng', 'Tỉnh'),
(70, 'Tỉnh Bình Phước', 'Tỉnh'),
(72, 'Tỉnh Tây Ninh', 'Tỉnh'),
(74, 'Tỉnh Bình Dương', 'Tỉnh'),
(75, 'Tỉnh Đồng Nai', 'Tỉnh'),
(77, 'Tỉnh Bà Rịa - Vũng Tàu', 'Tỉnh'),
(79, 'Thành phố Hồ Chí Minh', 'Thành phố Trung ương'),
(80, 'Tỉnh Long An', 'Tỉnh'),
(82, 'Tỉnh Tiền Giang', 'Tỉnh'),
(83, 'Tỉnh Bến Tre', 'Tỉnh'),
(84, 'Tỉnh Trà Vinh', 'Tỉnh'),
(86, 'Tỉnh Vĩnh Long', 'Tỉnh'),
(87, 'Tỉnh Đồng Tháp', 'Tỉnh'),
(89, 'Tỉnh An Giang', 'Tỉnh'),
(91, 'Tỉnh Kiên Giang', 'Tỉnh'),
(92, 'Thành phố Cần Thơ', 'Thành phố Trung ương'),
(93, 'Tỉnh Hậu Giang', 'Tỉnh'),
(94, 'Tỉnh Sóc Trăng', 'Tỉnh'),
(95, 'Tỉnh Bạc Liêu', 'Tỉnh'),
(96, 'Tỉnh Cà Mau', 'Tỉnh');

-- --------------------------------------------------------

--
-- Table structure for table `db_slider`
--

CREATE TABLE `db_slider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `created_by` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Supper Admin',
  `modified` datetime NOT NULL,
  `modified_by` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Supper Admin',
  `trash` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_slider`
--

INSERT INTO `db_slider` (`id`, `name`, `link`, `img`, `created`, `created_by`, `modified`, `modified_by`, `trash`, `status`) VALUES
(16, 'banner', 'banner', 'banner321.png', '2022-06-03 21:51:52', '1', '2022-06-03 21:51:52', '1', 1, 1),
(17, 'banner', 'banner', 'banner11.png', '2022-06-05 10:49:49', '1', '2022-06-05 10:49:49', '1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(1) NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `trash` int(1) NOT NULL DEFAULT 1,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`id`, `fullname`, `username`, `password`, `role`, `email`, `gender`, `phone`, `address`, `img`, `created`, `trash`, `status`) VALUES
(1, 'admin', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'admin@gmail.com', 1, '0987654321', 'Bình Định', 'user-group.png', '2022-01-03 09:16:16', 1, 1),
(12, 'Nguyễn Chí Bảo', 'chibao', 'daf82a447554a6650a082bca1198905ea8d2b544', 2, 'chibao@gmail.com', 0, '0333441620', '99 Man Thiện, TP. Thủ Đức', 'd9d3bc6fbc141fd6c417c6f9dcc9d7ce.jpg', '2022-06-04 22:18:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_usergroup`
--

CREATE TABLE `db_usergroup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `trash` tinyint(1) NOT NULL DEFAULT 1,
  `access` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_usergroup`
--

INSERT INTO `db_usergroup` (`id`, `name`, `created`, `created_by`, `modified`, `modified_by`, `trash`, `access`, `status`) VALUES
(1, 'Toàn quyền', '2022-06-05 08:59:04', 1, '2022-06-05 08:59:16', 4, 1, 1, 1),
(2, 'Nhân viên', '2022-06-05 08:59:22', 1, '2022-06-05 08:59:38', 4, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_category`
--
ALTER TABLE `db_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_config`
--
ALTER TABLE `db_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_contact`
--
ALTER TABLE `db_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_content`
--
ALTER TABLE `db_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_customer`
--
ALTER TABLE `db_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_discount`
--
ALTER TABLE `db_discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_district`
--
ALTER TABLE `db_district`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matp` (`provinceid`);

--
-- Indexes for table `db_order`
--
ALTER TABLE `db_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerid` (`customerid`),
  ADD KEY `province` (`province`),
  ADD KEY `district` (`district`),
  ADD KEY `province_2` (`province`),
  ADD KEY `district_2` (`district`),
  ADD KEY `province_3` (`province`),
  ADD KEY `district_3` (`district`);

--
-- Indexes for table `db_orderdetail`
--
ALTER TABLE `db_orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productid` (`productid`),
  ADD KEY `orderid` (`orderid`);

--
-- Indexes for table `db_producer`
--
ALTER TABLE `db_producer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_product`
--
ALTER TABLE `db_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producer` (`producer`),
  ADD KEY `catid` (`catid`);

--
-- Indexes for table `db_province`
--
ALTER TABLE `db_province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_slider`
--
ALTER TABLE `db_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `db_usergroup`
--
ALTER TABLE `db_usergroup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_category`
--
ALTER TABLE `db_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `db_config`
--
ALTER TABLE `db_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_contact`
--
ALTER TABLE `db_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `db_content`
--
ALTER TABLE `db_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `db_customer`
--
ALTER TABLE `db_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `db_discount`
--
ALTER TABLE `db_discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `db_order`
--
ALTER TABLE `db_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `db_orderdetail`
--
ALTER TABLE `db_orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `db_producer`
--
ALTER TABLE `db_producer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `db_product`
--
ALTER TABLE `db_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `db_slider`
--
ALTER TABLE `db_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `db_usergroup`
--
ALTER TABLE `db_usergroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `db_district`
--
ALTER TABLE `db_district`
  ADD CONSTRAINT `db_district_ibfk_1` FOREIGN KEY (`provinceid`) REFERENCES `db_province` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `db_order`
--
ALTER TABLE `db_order`
  ADD CONSTRAINT `db_order_ibfk_2` FOREIGN KEY (`province`) REFERENCES `db_province` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `db_order_ibfk_3` FOREIGN KEY (`district`) REFERENCES `db_district` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `db_order_ibfk_4` FOREIGN KEY (`customerid`) REFERENCES `db_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `db_orderdetail`
--
ALTER TABLE `db_orderdetail`
  ADD CONSTRAINT `db_orderdetail_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `db_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `db_orderdetail_ibfk_3` FOREIGN KEY (`orderid`) REFERENCES `db_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `db_product`
--
ALTER TABLE `db_product`
  ADD CONSTRAINT `db_product_ibfk_1` FOREIGN KEY (`catid`) REFERENCES `db_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `db_product_ibfk_2` FOREIGN KEY (`producer`) REFERENCES `db_producer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `db_user`
--
ALTER TABLE `db_user`
  ADD CONSTRAINT `db_user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `db_usergroup` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
