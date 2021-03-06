-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2021 at 02:11 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trasua2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

DROP TABLE IF EXISTS `admin_roles`;
CREATE TABLE IF NOT EXISTS `admin_roles` (
  `id_admin_roles` int(11) NOT NULL AUTO_INCREMENT,
  `admin_admin_id` int(10) UNSIGNED NOT NULL,
  `roles_id_roles` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_admin_roles`),
  KEY `admin_admin_id` (`admin_admin_id`,`roles_id_roles`),
  KEY `roles_id_roles` (`roles_id_roles`)
) ENGINE=InnoDB AUTO_INCREMENT=207 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_roles`
--

INSERT INTO `admin_roles` (`id_admin_roles`, `admin_admin_id`, `roles_id_roles`) VALUES
(205, 5, 4),
(206, 48, 5);

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

DROP TABLE IF EXISTS `attribute`;
CREATE TABLE IF NOT EXISTS `attribute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) UNSIGNED NOT NULL,
  `attr_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=400 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`id`, `product_id`, `attr_id`, `created_at`, `updated_at`) VALUES
(139, 82, 29, '2021-07-18 06:42:57', '2021-07-18 06:42:57'),
(140, 82, 30, '2021-07-18 06:42:57', '2021-07-18 06:42:57'),
(141, 82, 31, '2021-07-18 06:42:57', '2021-07-18 06:42:57'),
(145, 80, 29, '2021-07-18 06:43:47', '2021-07-18 06:43:47'),
(146, 80, 30, '2021-07-18 06:43:47', '2021-07-18 06:43:47'),
(147, 80, 31, '2021-07-18 06:43:47', '2021-07-18 06:43:47'),
(148, 79, 29, '2021-07-18 06:43:59', '2021-07-18 06:43:59'),
(149, 79, 30, '2021-07-18 06:44:00', '2021-07-18 06:44:00'),
(150, 79, 31, '2021-07-18 06:44:00', '2021-07-18 06:44:00'),
(157, 76, 29, '2021-07-18 06:45:04', '2021-07-18 06:45:04'),
(158, 76, 30, '2021-07-18 06:45:04', '2021-07-18 06:45:04'),
(159, 76, 31, '2021-07-18 06:45:04', '2021-07-18 06:45:04'),
(172, 71, 29, '2021-07-18 06:46:36', '2021-07-18 06:46:36'),
(173, 71, 30, '2021-07-18 06:46:36', '2021-07-18 06:46:36'),
(174, 71, 31, '2021-07-18 06:46:37', '2021-07-18 06:46:37'),
(175, 70, 29, '2021-07-18 06:46:49', '2021-07-18 06:46:49'),
(176, 70, 30, '2021-07-18 06:46:49', '2021-07-18 06:46:49'),
(177, 70, 31, '2021-07-18 06:46:49', '2021-07-18 06:46:49'),
(178, 69, 29, '2021-07-18 06:47:25', '2021-07-18 06:47:25'),
(179, 69, 30, '2021-07-18 06:47:25', '2021-07-18 06:47:25'),
(180, 69, 31, '2021-07-18 06:47:26', '2021-07-18 06:47:26'),
(193, 64, 29, '2021-07-18 06:49:09', '2021-07-18 06:49:09'),
(194, 64, 30, '2021-07-18 06:49:09', '2021-07-18 06:49:09'),
(195, 64, 31, '2021-07-18 06:49:09', '2021-07-18 06:49:09'),
(196, 63, 29, '2021-07-18 06:49:25', '2021-07-18 06:49:25'),
(197, 63, 30, '2021-07-18 06:49:25', '2021-07-18 06:49:25'),
(198, 63, 31, '2021-07-18 06:49:26', '2021-07-18 06:49:26'),
(199, 62, 29, '2021-07-18 06:49:43', '2021-07-18 06:49:43'),
(200, 62, 30, '2021-07-18 06:49:44', '2021-07-18 06:49:44'),
(201, 62, 31, '2021-07-18 06:49:44', '2021-07-18 06:49:44'),
(211, 57, 29, '2021-07-18 06:50:52', '2021-07-18 06:50:52'),
(212, 57, 30, '2021-07-18 06:50:52', '2021-07-18 06:50:52'),
(213, 57, 31, '2021-07-18 06:50:52', '2021-07-18 06:50:52'),
(214, 56, 29, '2021-07-18 06:51:18', '2021-07-18 06:51:18'),
(215, 56, 30, '2021-07-18 06:51:19', '2021-07-18 06:51:19'),
(216, 56, 31, '2021-07-18 06:51:21', '2021-07-18 06:51:21'),
(217, 55, 29, '2021-07-18 06:51:34', '2021-07-18 06:51:34'),
(218, 55, 30, '2021-07-18 06:51:34', '2021-07-18 06:51:34'),
(219, 55, 31, '2021-07-18 06:51:34', '2021-07-18 06:51:34'),
(220, 54, 29, '2021-07-18 06:52:01', '2021-07-18 06:52:01'),
(221, 54, 30, '2021-07-18 06:52:01', '2021-07-18 06:52:01'),
(222, 54, 31, '2021-07-18 06:52:02', '2021-07-18 06:52:02'),
(223, 53, 29, '2021-07-18 06:52:21', '2021-07-18 06:52:21'),
(224, 53, 30, '2021-07-18 06:52:21', '2021-07-18 06:52:21'),
(225, 53, 31, '2021-07-18 06:52:22', '2021-07-18 06:52:22'),
(226, 52, 29, '2021-07-18 06:52:39', '2021-07-18 06:52:39'),
(227, 52, 30, '2021-07-18 06:52:39', '2021-07-18 06:52:39'),
(228, 52, 31, '2021-07-18 06:52:39', '2021-07-18 06:52:39'),
(229, 51, 29, '2021-07-18 06:52:57', '2021-07-18 06:52:57'),
(230, 51, 30, '2021-07-18 06:52:57', '2021-07-18 06:52:57'),
(231, 51, 31, '2021-07-18 06:52:58', '2021-07-18 06:52:58'),
(238, 48, 29, '2021-07-18 06:54:06', '2021-07-18 06:54:06'),
(239, 48, 30, '2021-07-18 06:54:07', '2021-07-18 06:54:07'),
(240, 48, 31, '2021-07-18 06:54:07', '2021-07-18 06:54:07'),
(241, 47, 29, '2021-07-18 06:54:21', '2021-07-18 06:54:21'),
(242, 47, 30, '2021-07-18 06:54:22', '2021-07-18 06:54:22'),
(243, 47, 31, '2021-07-18 06:54:22', '2021-07-18 06:54:22'),
(247, 45, 29, '2021-07-18 06:54:46', '2021-07-18 06:54:46'),
(248, 45, 30, '2021-07-18 06:54:46', '2021-07-18 06:54:46'),
(249, 45, 31, '2021-07-18 06:54:46', '2021-07-18 06:54:46'),
(326, 206, 29, '2021-09-15 19:27:21', '2021-09-15 19:27:21'),
(327, 206, 30, '2021-09-15 19:27:21', '2021-09-15 19:27:21'),
(328, 206, 31, '2021-09-15 19:27:21', '2021-09-15 19:27:21'),
(329, 207, 29, '2021-09-15 19:28:18', '2021-09-15 19:28:18'),
(330, 207, 30, '2021-09-15 19:28:18', '2021-09-15 19:28:18'),
(331, 207, 31, '2021-09-15 19:28:19', '2021-09-15 19:28:19'),
(332, 208, 29, '2021-09-15 19:29:14', '2021-09-15 19:29:14'),
(333, 208, 30, '2021-09-15 19:29:14', '2021-09-15 19:29:14'),
(334, 208, 31, '2021-09-15 19:29:14', '2021-09-15 19:29:14'),
(335, 209, 29, '2021-09-15 19:29:59', '2021-09-15 19:29:59'),
(336, 209, 30, '2021-09-15 19:29:59', '2021-09-15 19:29:59'),
(337, 209, 31, '2021-09-15 19:29:59', '2021-09-15 19:29:59'),
(341, 211, 29, '2021-09-15 19:31:42', '2021-09-15 19:31:42'),
(342, 211, 30, '2021-09-15 19:31:42', '2021-09-15 19:31:42'),
(343, 211, 31, '2021-09-15 19:31:42', '2021-09-15 19:31:42'),
(344, 212, 29, '2021-09-15 19:33:08', '2021-09-15 19:33:08'),
(345, 212, 30, '2021-09-15 19:33:08', '2021-09-15 19:33:08'),
(346, 212, 31, '2021-09-15 19:33:08', '2021-09-15 19:33:08'),
(355, 216, 29, '2021-11-07 06:53:12', '2021-11-07 06:53:12'),
(356, 216, 30, '2021-11-07 06:53:12', '2021-11-07 06:53:12'),
(357, 216, 31, '2021-11-07 06:53:13', '2021-11-07 06:53:13'),
(358, 217, 29, '2021-11-07 06:54:19', '2021-11-07 06:54:19'),
(359, 217, 30, '2021-11-07 06:54:19', '2021-11-07 06:54:19'),
(360, 217, 31, '2021-11-07 06:54:20', '2021-11-07 06:54:20'),
(361, 218, 29, '2021-11-07 06:55:12', '2021-11-07 06:55:12'),
(362, 218, 30, '2021-11-07 06:55:12', '2021-11-07 06:55:12'),
(363, 218, 31, '2021-11-07 06:55:13', '2021-11-07 06:55:13'),
(364, 219, 29, '2021-11-07 06:56:08', '2021-11-07 06:56:08'),
(365, 219, 30, '2021-11-07 06:56:09', '2021-11-07 06:56:09'),
(366, 219, 31, '2021-11-07 06:56:10', '2021-11-07 06:56:10'),
(367, 220, 29, '2021-11-07 06:57:08', '2021-11-07 06:57:08'),
(368, 220, 30, '2021-11-07 06:57:08', '2021-11-07 06:57:08'),
(369, 220, 31, '2021-11-07 06:57:09', '2021-11-07 06:57:09'),
(370, 221, 29, '2021-11-07 06:58:14', '2021-11-07 06:58:14'),
(371, 221, 30, '2021-11-07 06:58:15', '2021-11-07 06:58:15'),
(372, 221, 31, '2021-11-07 06:58:16', '2021-11-07 06:58:16'),
(373, 222, 29, '2021-11-07 06:59:07', '2021-11-07 06:59:07'),
(374, 222, 30, '2021-11-07 06:59:08', '2021-11-07 06:59:08'),
(375, 222, 31, '2021-11-07 06:59:08', '2021-11-07 06:59:08'),
(376, 223, 29, '2021-11-07 06:59:59', '2021-11-07 06:59:59'),
(377, 223, 30, '2021-11-07 07:00:00', '2021-11-07 07:00:00'),
(378, 223, 31, '2021-11-07 07:00:00', '2021-11-07 07:00:00'),
(379, 224, 29, '2021-11-07 07:01:30', '2021-11-07 07:01:30'),
(380, 224, 30, '2021-11-07 07:01:30', '2021-11-07 07:01:30'),
(381, 224, 31, '2021-11-07 07:01:31', '2021-11-07 07:01:31'),
(382, 225, 29, '2021-11-07 07:02:29', '2021-11-07 07:02:29'),
(383, 225, 30, '2021-11-07 07:02:29', '2021-11-07 07:02:29'),
(384, 225, 31, '2021-11-07 07:02:29', '2021-11-07 07:02:29'),
(385, 226, 29, '2021-11-07 07:03:06', '2021-11-07 07:03:06'),
(386, 226, 30, '2021-11-07 07:03:07', '2021-11-07 07:03:07'),
(387, 226, 31, '2021-11-07 07:03:07', '2021-11-07 07:03:07'),
(388, 227, 29, '2021-11-07 07:07:06', '2021-11-07 07:07:06'),
(389, 227, 30, '2021-11-07 07:07:06', '2021-11-07 07:07:06'),
(390, 227, 31, '2021-11-07 07:07:06', '2021-11-07 07:07:06'),
(391, 228, 29, '2021-11-07 07:07:57', '2021-11-07 07:07:57'),
(392, 228, 30, '2021-11-07 07:07:57', '2021-11-07 07:07:57'),
(393, 228, 31, '2021-11-07 07:07:57', '2021-11-07 07:07:57'),
(394, 229, 29, '2021-11-07 07:08:47', '2021-11-07 07:08:47'),
(395, 229, 30, '2021-11-07 07:08:47', '2021-11-07 07:08:47'),
(396, 229, 31, '2021-11-07 07:08:48', '2021-11-07 07:08:48'),
(397, 230, 29, '2021-11-07 07:09:27', '2021-11-07 07:09:27'),
(398, 230, 30, '2021-11-07 07:09:28', '2021-11-07 07:09:28'),
(399, 230, 31, '2021-11-07 07:09:29', '2021-11-07 07:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

DROP TABLE IF EXISTS `policy`;
CREATE TABLE IF NOT EXISTS `policy` (
  `policy_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sumary` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`policy_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`policy_id`, `title`, `image`, `sumary`, `content`, `created_at`, `updated_at`) VALUES
(5, 'Ph?? ship r???', 'Capture339.PNG', '<p>mi???n ph&iacute; ship cho ????n h&agrave;ng t??? 200.000 VN?? tr??? l&ecirc;n</p>', '<p>Ch&iacute;nh s&aacute;ch ch???t l?????ng s???n ph???m&nbsp;ch??m s&oacute;c s???c kh???e Buona&nbsp;???????c ?????c bi???t ch&uacute; tr???ng nh???m ??em l???i cho kh&aacute;ch h&agrave;ng m???t d???ch v??? chuy&ecirc;n nghi???p.</p>\r\n\r\n<p>V???i ph????ng ch&acirc;m s??? h&agrave;i l&ograve;ng c???a kh&aacute;ch h&agrave;ng l&agrave; t&agrave;i s???n c???a doanh nghi???p, ch&uacute;ng t&ocirc;i mong mu???n ???????c ph???c v??? kh&aacute;ch h&agrave;ng ng&agrave;y m???t t???t h??n v???i ch&iacute;nh s&aacute;ch ch???t l?????ng s???n ph???m&nbsp;uy t&iacute;n.</p>\r\n\r\n<p>Quy ?????nh&nbsp;v??? ti&ecirc;u chu???n ch???t l?????ng</p>\r\n\r\n<p>T???t c???&nbsp; c&aacute;c s???n ph???m c???a Buona do NC Vi???t Nam&nbsp;b&aacute;n ra ?????u ???????c d&aacute;n tem b???o ?????m c???a NC Vi???t Nam; M???i s???n ph???m ?????u ???????c theo d&otilde;i theo m&atilde; v???ch, k??? t??? kh&acirc;u nh???p h&agrave;ng cho ?????n khi xu???t h&agrave;ng. Nh???ng s???n ph???m kh&ocirc;ng c&oacute; tem ?????m b???o c???a NC Vi???t Nam v&agrave; kh&ocirc;ng c&oacute; m&atilde; v???ch s??? kh&ocirc;ng ?????t ti&ecirc;u chu???n.</p>\r\n\r\n<ul>\r\n	<li>H???n s??? d???ng c???a s???n ph???m l&agrave; 02 n??m k??? t???&nbsp;ng&agrave;y s???n xu???t in tr&ecirc;n bao b&igrave;.</li>\r\n	<li>Kh&aacute;ch h&agrave;ng s??? ???????c ?????i s???n ph???m kh&aacute;c trong&nbsp; 1 tu???n&nbsp;?????u sau khi mua h&agrave;ng n???u s???n ph???m b??? l???i do nh&agrave; s???n xu???t ( y&ecirc;u c???u kh&aacute;ch h&agrave;ng ph???i gi??? ?????y ????? h???p, bao b&igrave; s???n ph???m b??? l???i ????? cung c???p cho Buona Vi???t Nam).</li>\r\n	<li>Buona Vi???t Nam&nbsp;s??? ?????i s???n ph???m kh&aacute;c, c&ugrave;ng lo???i cho qu&yacute; kh&aacute;ch h&agrave;ng ngay sau khi nh???n ???????c h&agrave;ng b??? l???i. Th???i gian ?????i h&agrave;ng kh&ocirc;ng qu&aacute; 1 tu???n k??? t??? khi nh???n ???????c h&agrave;ng h???ng, l???i c???a qu&yacute; kh&aacute;ch.</li>\r\n</ul>\r\n\r\n<h3>C&aacute;c tr?????ng h???p kh&ocirc;ng ch???p nh???n b???o h&agrave;nh</h3>\r\n\r\n<ul>\r\n	<li>&nbsp;S???n ph???m Buona kh&aacute;ch h&agrave;ng ?????t mua c&oacute; ngu???n g???c kh&ocirc;ng ph???i t??? NC Vi???t Nam ph&acirc;n ph???i.</li>\r\n	<li>&nbsp;S???n ph???m b??? h???ng, v??? do t&aacute;c ?????ng c???a kh&aacute;ch h&agrave;ng nh?? va ?????p, l&agrave;m r??i.</li>\r\n	<li>&nbsp;S???n ph???m b??? thay ?????i ch???t l?????ng, m&ugrave;i v??? do kh&aacute;ch h&agrave;ng b???o qu???n sai quy ?????nh nh?? ????? ??? nhi???t ????? qu&aacute; cao ( tr&ecirc;n 35 ????? C) , ????? tr???c ti???p d?????i &aacute;nh n???ng m???t tr???i trong th???i gian d&agrave;i.</li>\r\n	<li>Kh&aacute;ch h&agrave;ng kh&ocirc;ng cung c???p ???????c m???u h&agrave;ng b??? l???i, b??? h???ng.</li>\r\n	<li>Kh&aacute;ch h&agrave;ng ????? s???n ph???m b??? h???t h???n, m??? s???n ph???m ra s??? d???ng nh??ng kh&ocirc;ng s??? d???ng li&ecirc;n t???c, ????? l&acirc;u d???n ?????n t&igrave;nh tr???ng s???n ph???m b??? thay ?????i m&ugrave;i v???, xu???t hi???n hi???n t?????ng vi khu???n, n???m m???c x&acirc;m nh???p.</li>\r\n</ul>', '2021-07-24 13:59:55', '2021-07-24 06:59:55'),
(4, 'Giao h??ng nhanh ch??ng', 'Capture15.PNG', '<p>Tr&ecirc;n ?????a b&agrave;n TP.H??? Ch&iacute; Minh</p>', '<p>&nbsp;</p>\r\n\r\n<h2><a name=\"chinhsachvanchuyen\"></a>2. CH&Iacute;NH S&Aacute;CH V???N CHUY???N</h2>\r\n\r\n<p><strong>&ndash; Kh&aacute;ch h&agrave;ng ??? n???i th&agrave;nh H&agrave; N???i:</strong><br />\r\n+ Qu&yacute; kh&aacute;ch nh???n h&agrave;ng trong v&ograve;ng 24h.<br />\r\n+ Ph&iacute; v???n chuy???n t&ugrave;y thu???c v&agrave;o ch&iacute;nh s&aacute;ch c???a ????n v??? v???n chuy???n (Ahamove, Grab,&hellip;) t???i th???i ??i???m mua h&agrave;ng.</p>\r\n\r\n<p><strong>&ndash; Kh&aacute;ch h&agrave;ng ??? ngo???i t???nh:</strong><br />\r\n????? ?????m b???o an to&agrave;n v&agrave; ti???n l???i nh???t cho qu&yacute; kh&aacute;ch h&agrave;ng, C&ocirc;ng ty ??&atilde; k&yacute; k???t h???p ?????ng v???i c&aacute;c ????n v??? v???n chuy???n: Giaohangtietkiem, Giaohangnhanh,&hellip;<br />\r\n+ ??? th&agrave;nh ph??? l???n: Qu&yacute; kh&aacute;ch h&agrave;ng nh???n h&agrave;ng sau 2-3 ng&agrave;y l&agrave;m vi???c (tr??? th??? 7 v&agrave; CN)<br />\r\n+ ??? l&agrave;ng, x&atilde;,&hellip;: Qu&yacute; kh&aacute;ch nh???n h&agrave;ng sau 4-5 ng&agrave;y l&agrave;m vi???c (tr??? th??? 7 v&agrave; CN)<br />\r\n+ Ph&iacute; v???n chuy???n t&ugrave;y thu???c v&agrave;o ch&iacute;nh s&aacute;ch c???a ????n v??? v???n chuy???n t???i th???i ??i???m mua h&agrave;ng</p>\r\n\r\n<p><em><strong>L??u &yacute;:</strong></em><br />\r\n&ndash; Kh&aacute;ch h&agrave;ng ???????c mi???n ph&iacute; v???n chuy???n khi mua h&agrave;ng v???i h&oacute;a ????n t??? 1.000.000 vn?? tr??? l&ecirc;n.<br />\r\n&ndash; Khi kh&aacute;ch h&agrave;ng ?????t mua tr???c ti???p t???i c&aacute;c trang TM??T c???a C&ocirc;ng ty. Qu&yacute; kh&aacute;ch vui l&ograve;ng theo d&otilde;i ????n h&agrave;ng theo ch&iacute;nh s&aacute;ch v???n chuy???n c???a b&ecirc;n ?????i t&aacute;c.<br />\r\n&ndash; Ngay sau khi nh???n h&agrave;ng b???n ki???m tra n???i dung th&ocirc;ng tin tr&ecirc;n v???n ????n ?????m b???o ??&uacute;ng t&ecirc;n ng?????i nh???n, ng?????i g???i, m&ocirc; t??? h&agrave;ng h&oacute;a.<br />\r\n&ndash; Ki???m tra hi???n tr???ng b&ecirc;n ngo&agrave;i b??u ph???m: n???u c&oacute; d???u hi???u b???t th?????ng nh?? ?????t, r&aacute;ch c???n ph???i y&ecirc;u c???u b&ecirc;n chuy???n ph&aacute;t nhanh l???p bi&ecirc;n b???n tr?????c khi m??? b??u ph???m.<br />\r\n&ndash; M??? b??u ph???m ki???m tra xem c&oacute; ??&uacute;ng nh?? ????n h&agrave;ng b???n ?????t mua kh&ocirc;ng, t&igrave;nh tr???ng h&agrave;ng h&oacute;a.<br />\r\n&ndash; N???u c&oacute; b???t k??? d???u hi???u b???t th?????ng, h?? h???ng, sai l???ch n&agrave;o, b???n li&ecirc;n l???c v???i hotline c???a ch&uacute;ng t&ocirc;i ????? gi???i quy???t. Sau 12 ti???ng k??? khi h&agrave;ng ??&atilde; ???????c giao,c&aacute;c khi???u n???i li&ecirc;n quan ?????n t&igrave;nh tr???ng h&agrave;ng h&oacute;a, b??u ph???m c???a b???n s??? kh&ocirc;ng c&oacute; hi???u l???c.</p>\r\n\r\n<p><em><strong>N???u c&oacute; b???t k??? v???n ????? n&agrave;o c???n h??? tr???, qu&yacute; kh&aacute;ch h&agrave;ng vui l&ograve;ng li&ecirc;n h??? qua website ho???c t???ng ??&agrave;i t?? v???n c???a Buonavn. Ch&uacute;ng t&ocirc;i lu&ocirc;n lu&ocirc;n h??? tr??? ????? quy???n l???i c???a qu&yacute; kh&aacute;ch ???????c ?????m b???o t???t nh???t.</strong></em></p>\r\n\r\n<h2>&nbsp;</h2>', '2021-08-13 12:49:55', '2021-08-13 05:49:55'),
(3, 'Nhi???u l???a ch???n', 'Capture40.PNG', '<p>k&iacute;ch th?????c,gi&aacute; c???</p>', '<p><strong>6. Ph&iacute; v???n chuy???n</strong></p>\r\n\r\n<p>T???i H&agrave; N???i, Tp. H??? Ch&iacute; Minh, ??&agrave; N???ng, H???i An &amp; Hu???: 250.000??/ l???n.</p>\r\n\r\n<p>C&aacute;c t???nh th&agrave;nh kh&aacute;c: Tu??? theo bi???u ph&iacute; v???n chuy???n c???a b&ecirc;n th??? ba.</p>\r\n\r\n<p>&Aacute;p d???ng cho tr?????ng h???p kh&aacute;ch s??? d???ng d???ch v??? v???n chuy???n c???a BAYA ?????:</p>\r\n\r\n<ul>\r\n	<li>?????i tr??? h&agrave;ng.</li>\r\n	<li>D???ch v??? giao h&agrave;ng t???n nh&agrave; sau 2 l???n giao h&agrave;ng kh&ocirc;ng th&agrave;nh c&ocirc;ng.</li>\r\n	<li>Giao h&agrave;ng t???i sau 17h v&agrave;o c&aacute;c ng&agrave;y th??? ba, th??? n??m, th??? b???y h&agrave;ng tu???n.</li>\r\n</ul>\r\n\r\n<p>C&aacute;c lo???i ph&iacute; ph&aacute;t sinh theo quy ?????nh c???a Ban Qu???n l&yacute; n??i c?? tr&uacute; li&ecirc;n quan ?????n vi???c giao h&agrave;ng b???ng xe t???i, s??? d???ng thang m&aacute;y&hellip; s??? do kh&aacute;ch h&agrave;ng thanh to&aacute;n.</p>', '2021-09-14 02:44:24', '2021-09-13 19:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

DROP TABLE IF EXISTS `product_attribute`;
CREATE TABLE IF NOT EXISTS `product_attribute` (
  `attr_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `value` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`attr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_attribute`
--

INSERT INTO `product_attribute` (`attr_id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(29, 'size', 'Nh???', '2021-06-28 03:11:17', '2021-06-28 03:11:17'),
(30, 'size', 'V???a', '2021-06-28 21:18:28', '2021-06-28 21:18:28'),
(31, 'size', 'L???n', '2021-07-07 19:37:24', '2021-07-07 19:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
CREATE TABLE IF NOT EXISTS `product_images` (
  `image_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) UNSIGNED NOT NULL,
  `images` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`image_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=432 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`image_id`, `product_id`, `images`, `created_at`, `updated_at`) VALUES
(177, 48, '7218.PNG', '2021-07-03 02:33:32', '2021-07-03 02:33:32'),
(225, 82, '1878.png', '2021-07-10 06:28:21', '2021-07-10 06:28:21'),
(226, 82, '472.png', '2021-07-10 06:28:25', '2021-07-10 06:28:25'),
(230, 80, '4645.png', '2021-07-10 06:29:00', '2021-07-10 06:29:00'),
(231, 79, '1305.png', '2021-07-10 06:29:11', '2021-07-10 06:29:11'),
(232, 79, '7844.png', '2021-07-10 06:29:14', '2021-07-10 06:29:14'),
(251, 76, '8669.png', '2021-07-10 06:32:09', '2021-07-10 06:32:09'),
(252, 76, '1966.png', '2021-07-10 06:32:12', '2021-07-10 06:32:12'),
(261, 71, '5179.png', '2021-07-10 06:33:32', '2021-07-10 06:33:32'),
(262, 71, '4080.png', '2021-07-10 06:33:35', '2021-07-10 06:33:35'),
(263, 70, '5130.png', '2021-07-10 06:33:45', '2021-07-10 06:33:45'),
(264, 70, '4673.png', '2021-07-10 06:33:48', '2021-07-10 06:33:48'),
(265, 69, '7038.png', '2021-07-10 06:34:07', '2021-07-10 06:34:07'),
(266, 69, '7268.png', '2021-07-10 06:34:17', '2021-07-10 06:34:17'),
(275, 64, '2104.png', '2021-07-10 06:35:36', '2021-07-10 06:35:36'),
(276, 64, '2880.png', '2021-07-10 06:35:41', '2021-07-10 06:35:41'),
(277, 63, '8296.png', '2021-07-10 06:36:07', '2021-07-10 06:36:07'),
(278, 63, '6362.png', '2021-07-10 06:36:10', '2021-07-10 06:36:10'),
(279, 62, '2678.png', '2021-07-10 06:36:37', '2021-07-10 06:36:37'),
(281, 62, '7218.png', '2021-07-10 06:36:50', '2021-07-10 06:36:50'),
(288, 57, '8209.png', '2021-07-10 06:37:54', '2021-07-10 06:37:54'),
(289, 57, '4752.png', '2021-07-10 06:37:59', '2021-07-10 06:37:59'),
(291, 56, '3970.png', '2021-07-10 06:38:25', '2021-07-10 06:38:25'),
(294, 54, '2367.png', '2021-07-10 06:38:51', '2021-07-10 06:38:51'),
(295, 54, '2411.png', '2021-07-10 06:38:54', '2021-07-10 06:38:54'),
(296, 53, '9971.png', '2021-07-10 06:39:13', '2021-07-10 06:39:13'),
(297, 53, '6817.png', '2021-07-10 06:39:16', '2021-07-10 06:39:16'),
(298, 52, '8579.png', '2021-07-10 06:39:30', '2021-07-10 06:39:30'),
(299, 52, '4832.png', '2021-07-10 06:39:36', '2021-07-10 06:39:36'),
(300, 51, '7080.png', '2021-07-10 06:39:49', '2021-07-10 06:39:49'),
(301, 51, '8211.png', '2021-07-10 06:39:52', '2021-07-10 06:39:52'),
(306, 48, '9098.png', '2021-07-10 06:41:51', '2021-07-10 06:41:51'),
(311, 45, '9060.png', '2021-07-10 06:42:57', '2021-07-10 06:42:57'),
(312, 45, '2893.png', '2021-07-10 06:43:01', '2021-07-10 06:43:01'),
(350, 211, '7297.png', '2021-09-15 19:32:08', '2021-09-15 19:32:08'),
(351, 211, '8970.png', '2021-09-15 19:32:08', '2021-09-15 19:32:08'),
(352, 212, '8623.png', '2021-09-15 19:33:19', '2021-09-15 19:33:19'),
(356, 209, '3968.png', '2021-09-15 19:33:48', '2021-09-15 19:33:48'),
(357, 209, '5420.png', '2021-09-15 19:33:48', '2021-09-15 19:33:48'),
(358, 208, '2687.png', '2021-09-15 19:34:00', '2021-09-15 19:34:00'),
(359, 208, '5561.png', '2021-09-15 19:34:00', '2021-09-15 19:34:00'),
(360, 207, '9226.png', '2021-09-15 19:34:13', '2021-09-15 19:34:13'),
(361, 207, '8214.png', '2021-09-15 19:34:13', '2021-09-15 19:34:13'),
(362, 206, '3409.png', '2021-09-15 19:34:25', '2021-09-15 19:34:25'),
(363, 206, '9610.png', '2021-09-15 19:34:25', '2021-09-15 19:34:25'),
(378, 212, '1833.png', '2021-11-02 20:16:43', '2021-11-02 20:16:43'),
(386, 80, '3368.png', '2021-11-02 20:23:38', '2021-11-02 20:23:38'),
(387, 55, '8002.png', '2021-11-02 20:24:10', '2021-11-02 20:24:10'),
(388, 55, '950.png', '2021-11-02 20:24:17', '2021-11-02 20:24:17'),
(389, 56, '8528.png', '2021-11-02 20:24:50', '2021-11-02 20:24:50'),
(398, 47, '9274.png', '2021-11-07 03:27:25', '2021-11-07 03:27:25'),
(399, 47, '7894.png', '2021-11-07 03:27:25', '2021-11-07 03:27:25'),
(400, 216, '6740.png', '2021-11-07 06:53:26', '2021-11-07 06:53:26'),
(401, 216, '5788.png', '2021-11-07 06:53:27', '2021-11-07 06:53:27'),
(404, 217, '4339.png', '2021-11-07 06:54:29', '2021-11-07 06:54:29'),
(405, 217, '3348.png', '2021-11-07 06:54:30', '2021-11-07 06:54:30'),
(406, 218, '2678.png', '2021-11-07 06:55:23', '2021-11-07 06:55:23'),
(407, 218, '2857.png', '2021-11-07 06:55:24', '2021-11-07 06:55:24'),
(408, 219, '8564.png', '2021-11-07 06:56:20', '2021-11-07 06:56:20'),
(409, 219, '3484.png', '2021-11-07 06:56:20', '2021-11-07 06:56:20'),
(410, 220, '8426.png', '2021-11-07 06:57:21', '2021-11-07 06:57:21'),
(411, 220, '762.png', '2021-11-07 06:57:21', '2021-11-07 06:57:21'),
(412, 221, '9997.png', '2021-11-07 06:58:26', '2021-11-07 06:58:26'),
(413, 221, '8592.png', '2021-11-07 06:58:27', '2021-11-07 06:58:27'),
(414, 222, '4216.png', '2021-11-07 06:59:16', '2021-11-07 06:59:16'),
(415, 222, '4421.png', '2021-11-07 06:59:17', '2021-11-07 06:59:17'),
(416, 223, '6823.png', '2021-11-07 07:00:16', '2021-11-07 07:00:16'),
(417, 223, '3501.png', '2021-11-07 07:00:17', '2021-11-07 07:00:17'),
(418, 224, '8120.png', '2021-11-07 07:01:41', '2021-11-07 07:01:41'),
(419, 224, '3292.png', '2021-11-07 07:01:42', '2021-11-07 07:01:42'),
(420, 226, '3876.png', '2021-11-07 07:04:24', '2021-11-07 07:04:24'),
(421, 226, '964.png', '2021-11-07 07:04:24', '2021-11-07 07:04:24'),
(422, 225, '6840.png', '2021-11-07 07:04:39', '2021-11-07 07:04:39'),
(423, 225, '8395.png', '2021-11-07 07:04:40', '2021-11-07 07:04:40'),
(424, 227, '5520.png', '2021-11-07 07:07:18', '2021-11-07 07:07:18'),
(425, 227, '6914.png', '2021-11-07 07:07:19', '2021-11-07 07:07:19'),
(426, 228, '2603.png', '2021-11-07 07:08:11', '2021-11-07 07:08:11'),
(427, 228, '4217.png', '2021-11-07 07:08:12', '2021-11-07 07:08:12'),
(428, 229, '5889.png', '2021-11-07 07:08:56', '2021-11-07 07:08:56'),
(429, 229, '5913.png', '2021-11-07 07:08:56', '2021-11-07 07:08:56'),
(430, 230, '4161.png', '2021-11-07 07:09:42', '2021-11-07 07:09:42'),
(431, 230, '2841.png', '2021-11-07 07:09:43', '2021-11-07 07:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addvertised`
--

DROP TABLE IF EXISTS `tbl_addvertised`;
CREATE TABLE IF NOT EXISTS `tbl_addvertised` (
  `quangcao_id` int(11) NOT NULL AUTO_INCREMENT,
  `quangcao_name` varchar(255) NOT NULL,
  `hinh_quangcao` varchar(255) NOT NULL,
  `quangcao_status` int(10) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`quangcao_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_addvertised`
--

INSERT INTO `tbl_addvertised` (`quangcao_id`, `quangcao_name`, `hinh_quangcao`, `quangcao_status`, `link`, `created_at`, `updated_at`) VALUES
(1, 'tr?? s???a', 'gettyimages-1157712696-2048x204865.jpg', 0, 'https://google.com', '2021-11-03 03:47:10', '2021-11-02 20:47:10'),
(2, 'tr??', 'photo-1541696490-8744a5dc022868.jfif', 0, 'https://youtobe.com', '2021-11-03 03:47:12', '2021-11-02 20:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `created_at`, `updated_at`, `status`, `email`, `password`, `name`, `phone`) VALUES
(5, '2021-06-08 01:56:57', '2021-06-08 01:56:57', NULL, 'tantaiIT3000@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'nick jason', '0585861855'),
(48, '2021-10-31 06:43:46', '2021-10-31 06:43:46', NULL, 'tantaiIT30000@gmail.com', '5ee8c0875d027346ccf73cdcb26ea27b', 'nguy???n T???n T??i', '0585861855');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_post`
--

DROP TABLE IF EXISTS `tbl_category_post`;
CREATE TABLE IF NOT EXISTS `tbl_category_post` (
  `cate_post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cate_post_name` tinytext NOT NULL,
  `cate_post_status` int(10) NOT NULL,
  `cate_post_slug` varchar(255) NOT NULL,
  `cate_post_desc` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`cate_post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category_post`
--

INSERT INTO `tbl_category_post` (`cate_post_id`, `cate_post_name`, `cate_post_status`, `cate_post_slug`, `cate_post_desc`, `created_at`, `updated_at`) VALUES
(8, 'tr?? s???a v?? s???c kh???e', 0, 'tra-sua-va-suc-khoe', 'Tr?? s???a l?? m???t th???c u???ng ph??? bi???n v?? ???????c ??a th??ch hi???n nay. Tuy nhi??n, u???ng qu?? nhi???u tr?? s???a s??? c?? nhi???u ???nh h?????ng nguy hi???m ?????n s???c kh???e.', '2021-07-03 02:02:42', '2021-07-03 02:02:42'),
(9, 'Qu??n Tr?? S???a', 0, 'quan-tra-sua', 'H???u h???t ai c??ng v???t b??? th??? n??y khi u???ng tr?? s???a tr??n ch??u, gi??? bi???t ???????c c??ng d???ng th???t c???a n?? m???i b???t ng???', '2021-10-31 03:06:30', '2021-10-30 20:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_product`
--

DROP TABLE IF EXISTS `tbl_category_product`;
CREATE TABLE IF NOT EXISTS `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(4, 'LATTE SERIES', '<p>LATTE SERIES</p>', 1, '2021-06-27 07:04:12', '2021-11-06 21:35:51'),
(5, 'TH???C U???NG ?????C BI???T TEAMILK', 'TH???C U???NG ?????C BI???T TEAMILK', 1, '2021-06-27 07:05:13', '2021-06-27 07:05:13'),
(6, 'TR?? S???A', 'TR?? S???A', 1, '2021-06-27 07:05:25', '2021-06-27 07:05:25'),
(7, 'TR?? NGUY??N CH???T', 'TR?? NGUY??N CH???T', 1, '2021-06-27 07:05:37', '2021-06-27 07:05:37'),
(8, 'TH???C U???NG S??NG T???O', 'TH???C U???NG S??NG T???O', 1, '2021-06-27 07:05:49', '2021-06-27 07:05:49'),
(9, 'TH???C U???NG ???? XAY', 'TH???C U???NG ???? XAY', 1, '2021-06-27 07:06:08', '2021-06-27 07:06:08'),
(10, 'TOPPING', '<p>TOPPING</p>', 1, '2021-06-27 07:06:19', '2021-09-09 18:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

DROP TABLE IF EXISTS `tbl_comment`;
CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comment_product_id` int(10) UNSIGNED NOT NULL,
  `comment_parent_comment` int(10) NOT NULL,
  `comment_status` int(10) NOT NULL,
  `comment_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`comment_id`),
  KEY `comment_product_id` (`comment_product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `comment`, `comment_date`, `comment_product_id`, `comment_parent_comment`, `comment_status`, `comment_name`, `created_at`, `updated_at`) VALUES
(103, 'ngon', '2021-09-11 02:02:02', 57, 0, 0, 'tan tai', '2021-09-11 02:02:02', '2021-09-11 02:02:02'),
(104, 'dat', '2021-09-11 02:02:19', 57, 103, 0, 'tan dat', '2021-09-11 02:02:19', '2021-09-11 02:02:19'),
(105, 'miss', '2021-09-11 02:02:44', 57, 103, 0, 'join', '2021-09-11 02:02:44', '2021-09-11 02:02:44'),
(106, 'ngon', '2021-09-11 02:03:02', 57, 0, 0, 'van anh', '2021-09-11 02:03:02', '2021-09-11 02:03:02'),
(107, 'sfsdf', '2021-09-11 02:03:47', 57, 106, 0, 'gs', '2021-09-11 02:03:47', '2021-09-11 02:03:47'),
(110, 'binh luan', '2021-09-11 06:11:37', 71, 0, 0, 'tai', '2021-09-11 06:11:37', '2021-09-11 06:11:37'),
(111, 'hay', '2021-09-11 06:11:46', 71, 110, 0, 'dat', '2021-09-11 06:11:46', '2021-09-11 06:11:46'),
(117, 'adfadf', '2021-09-12 03:02:33', 52, 0, 0, '??df', '2021-09-12 03:02:33', '2021-09-12 03:02:33'),
(118, 'dfgsdf', '2021-09-12 03:02:46', 52, 117, 0, 'f', '2021-09-12 03:02:46', '2021-09-12 03:02:46'),
(119, 'dfgdf', '2021-09-12 03:05:01', 52, 0, 0, 'sdg', '2021-09-12 03:05:01', '2021-09-12 03:05:01'),
(120, 'sdfd', '2021-09-12 03:07:36', 52, 119, 0, 'samsung note 10', '2021-09-12 03:07:36', '2021-09-12 03:07:36'),
(121, 'zxcvzcxvz', '2021-09-12 03:09:07', 52, 119, 0, 'xcvzc', '2021-09-12 03:09:07', '2021-09-12 03:09:07'),
(122, 'sdfsdf', '2021-09-12 03:09:42', 52, 119, 0, 'sfs', '2021-09-12 03:09:42', '2021-09-12 03:09:42'),
(123, 'adfa', '2021-09-12 03:11:52', 52, 0, 0, 'd??', '2021-09-12 03:11:52', '2021-09-12 03:11:52'),
(124, '??d', '2021-09-12 03:13:00', 52, 0, 0, 'jonson', '2021-09-12 03:13:00', '2021-09-12 03:13:00'),
(125, 'th??n ch??', '2021-09-12 03:14:06', 52, 117, 0, 'tai', '2021-09-12 03:14:06', '2021-09-12 03:14:06'),
(130, 'dfsdf', '2021-09-15 12:33:41', 54, 0, 0, 'tantai', '2021-09-15 12:33:41', '2021-09-15 12:33:41'),
(131, 'fgfd', '2021-09-15 12:33:46', 54, 130, 0, 'dfd', '2021-09-15 12:33:46', '2021-09-15 12:33:46'),
(132, 'cvxcv', '2021-09-15 12:33:57', 54, 0, 0, 'nick jason', '2021-09-15 12:33:57', '2021-09-15 12:33:57'),
(134, 'ta', '2021-09-18 11:42:14', 212, 0, 0, 'tantai', '2021-09-18 11:42:14', '2021-09-18 11:42:14'),
(135, '??dfads', '2021-09-18 11:42:21', 212, 134, 0, '??a', '2021-09-18 11:42:21', '2021-09-18 11:42:21'),
(136, 'hay', '2021-10-07 09:34:34', 209, 0, 0, 'tai', '2021-10-07 09:34:34', '2021-10-07 09:34:34'),
(137, 'ok', '2021-10-07 09:34:48', 209, 136, 0, 'hai', '2021-10-07 09:34:48', '2021-10-07 09:34:48'),
(147, 'tra sua', '2021-10-16 03:56:23', 211, 0, 0, 'tra', '2021-10-16 03:56:23', '2021-10-16 03:56:23'),
(148, 'yes', '2021-10-16 03:56:39', 211, 147, 0, 'ngon', '2021-10-16 03:56:39', '2021-10-16 03:56:39'),
(159, '??df', '2021-10-27 11:52:36', 52, 0, 0, 'adsf', '2021-10-27 11:52:36', '2021-10-27 11:52:36'),
(160, 'hay', '2021-10-27 11:52:44', 52, 0, 0, 'tai', '2021-10-27 11:52:44', '2021-10-27 11:52:44'),
(161, 'ngon', '2021-10-27 11:52:53', 52, 160, 0, 'hai', '2021-10-27 11:52:53', '2021-10-27 11:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coupon`
--

DROP TABLE IF EXISTS `tbl_coupon`;
CREATE TABLE IF NOT EXISTS `tbl_coupon` (
  `coupon_id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_name` varchar(150) NOT NULL,
  `coupon_time` int(50) NOT NULL,
  `coupon_condition` int(11) NOT NULL,
  `coupon_number` int(11) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `start_day` varchar(50) DEFAULT NULL,
  `end_day` varchar(50) DEFAULT NULL,
  `coupon_status` int(11) DEFAULT 1,
  `coupon_used` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`coupon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_coupon`
--

INSERT INTO `tbl_coupon` (`coupon_id`, `coupon_name`, `coupon_time`, `coupon_condition`, `coupon_number`, `coupon_code`, `start_day`, `end_day`, `coupon_status`, `coupon_used`) VALUES
(39, 'ph??? n??? vi???t nam', 20, 1, 20, '123', '2021/11/07', '2021/11/30', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

DROP TABLE IF EXISTS `tbl_customers`;
CREATE TABLE IF NOT EXISTS `tbl_customers` (
  `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code_active` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custommer_vip` int(10) DEFAULT NULL,
  `code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `created_at`, `updated_at`, `code_active`, `custommer_vip`, `code`, `code_time`) VALUES
(20, 'jason', '0306171389@caothang.edu.vn', '25f9e794323b453885f5181f1b624d0b', '0585861855', NULL, '2021-10-23 19:51:14', '$2y$10$aW.YZ5ATPeLWXwHeZljeS.HG6ox0l0vtVluV7OSMi3F55CuXKnkLG', NULL, '$2y$10$EqWVtwDSOE8cmLS/CH5gpeg.uABwDaPcCPMnzvogOaBHEy83ys/BS', '2021-10-23 19:50:40'),
(21, 'Nguy???n T???n T??i', 'tantaiIT3000@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0585423658', NULL, '2021-11-01 07:42:26', '$2y$10$SkXHycNOWzSLUKm9YbFZKOiDAAmPTYB5d0iIy825m9TL0YJ/zh/Z2', NULL, '$2y$10$KHXxBGHWOi9sqBai.eqQVuB5ZBQrf51YRBNZZaV5po1G1MHF2ET4G', '2021-11-01 07:41:40'),
(22, 'Nguy???n T??i', 'tantaiIT3000@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0585423658', NULL, '2021-11-01 07:42:26', '$2y$10$SkXHycNOWzSLUKm9YbFZKOiDAAmPTYB5d0iIy825m9TL0YJ/zh/Z2', NULL, '$2y$10$KHXxBGHWOi9sqBai.eqQVuB5ZBQrf51YRBNZZaV5po1G1MHF2ET4G', NULL),
(23, 'Tr???n Trung', 'trungtran2692000@gmail.com', '', '', '2021-11-03 06:49:56', '2021-11-03 06:49:56', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_infomation`
--

DROP TABLE IF EXISTS `tbl_infomation`;
CREATE TABLE IF NOT EXISTS `tbl_infomation` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `info_contact` mediumtext NOT NULL,
  `info_map` text NOT NULL,
  `info_logo` varchar(255) NOT NULL,
  `info_fanpage` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_infomation`
--

INSERT INTO `tbl_infomation` (`info_id`, `info_contact`, `info_map`, `info_logo`, `info_fanpage`, `created_at`, `updated_at`) VALUES
(1, '<p><span style=\"font-size:18px\">?????a ch???: T???ng 3 s??? 102 N?? Trang Long, P.13, Q.B&igrave;nh Th???nh, HCM</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Email: TrasuaTeaMilk@gmail.com</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Hotline: 0966342792 ho???c 0966342709</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Website: http://google.com.vn.</span></p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.074425170947!2d106.69275991474917!3d10.80561179230171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528c6b3087445%3A0x9f9e59544876ddf!2zMzU2LCA3IE7GoSBUcmFuZyBMb25nLCBwaMaw4budbmcgNywgQsOsbmggVGjhuqFuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1625906869368!5m2!1svi!2s\" width=\"1250\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'gettyimages-1157712696-2048x204819.jpg', '<div id=\"fb-root\"></div>\r\n            <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0&appId=2339123679735877&autoLogAppEvents=1\" nonce=\"2RfDRhZm\"></script>\r\n<div class=\"fb-page\" \r\ndata-tabs=\"timeline,events,messages\"\r\ndata-href=\"https://www.facebook.com/trasuafeelingtea/\"\r\ndata-width=\"380\" \r\ndata-hide-cover=\"false\"></div>', '2021-11-05 03:38:01', '2021-06-11 04:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_intro`
--

DROP TABLE IF EXISTS `tbl_intro`;
CREATE TABLE IF NOT EXISTS `tbl_intro` (
  `intro_id` int(11) NOT NULL AUTO_INCREMENT,
  `intro_title` varchar(100) NOT NULL,
  `intro_desc` text NOT NULL,
  `intro_content` text NOT NULL,
  `intro_image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`intro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_intro`
--

INSERT INTO `tbl_intro` (`intro_id`, `intro_title`, `intro_desc`, `intro_content`, `intro_image`, `created_at`, `updated_at`) VALUES
(1, 'C??c Lo???i Tr?? Ngon N???i Ti???ng C???a Vi???t Nam', '<p>Tr&agrave; b?????i gi???m c&acirc;n l&agrave; xu h?????ng gi???m c&acirc;n m???i xu???t hi???n g???n ??&acirc;y. Tr&agrave; b?????i nh???p t??? H&agrave;n Qu???c ???????c ??&oacute;ng g&oacute;i d?????i d???ng tr&agrave; ho&agrave; tan r???t ti???n d???ng. Nh??ng b???n c&oacute; bi???t l&agrave; b???n c&oacute; th??? l&agrave;m tr&agrave; b?????i gi???m c&acirc;n t???i nh&agrave; c???c k??? ????n gi???n kh&ocirc;ng? T???i Vi???t Nam, c???&nbsp; nh?? th???</p>', '<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:20px\">C&aacute;c lo???i tr&agrave; ngon c???a Vi???t Nam c&oacute; ch???t l?????ng r???t cao. Th???m ch&iacute; c&oacute; ch???t l?????ng t????ng ??????ng v???i c&aacute;c lo???i tr&agrave; ngon ?????n t??? nh???ng qu???c gia tr???ng tr&agrave; l???n kh&aacute;c. V&agrave; b&agrave;i vi???t n&agrave;y s??? li???t k&ecirc; c&aacute;c lo???i tr&agrave; ngon v&agrave; qu&yacute; c???a n?????c ta ????? qu&yacute; b???n ?????c tham kh???o nh&eacute;</span></span></p>', 'gettyimages-1157712696-2048x20481.jpg', '2021-10-30 03:32:21', '2021-10-29 20:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `order_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) UNSIGNED NOT NULL,
  `order_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_id` int(11) UNSIGNED NOT NULL,
  `order_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_destroy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `customer_id` (`customer_id`,`shipping_id`),
  KEY `shipping_id` (`shipping_id`)
) ENGINE=InnoDB AUTO_INCREMENT=274 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `order_code`, `shipping_id`, `order_status`, `order_date`, `created_at`, `updated_at`, `order_destroy`) VALUES
(272, 21, '24e14', 338, '4', '2021-11-07', '2021-11-07 08:39:03', NULL, NULL),
(273, 21, 'ddb97', 339, '1', '2021-11-07', '2021-11-07 10:31:03', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

DROP TABLE IF EXISTS `tbl_order_details`;
CREATE TABLE IF NOT EXISTS `tbl_order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_feeship` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_coupon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `product_size` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_details_id`),
  KEY `product_id` (`product_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=339 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `product_id`, `product_name`, `product_feeship`, `product_coupon`, `order_code`, `product_price`, `product_sales_quantity`, `product_size`, `order_id`, `created_at`, `updated_at`) VALUES
(338, 45, 'S???a T????i Okinawa', '15000', 'no', 'ddb97', '45000', 6, 'Nh???', 273, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

DROP TABLE IF EXISTS `tbl_post`;
CREATE TABLE IF NOT EXISTS `tbl_post` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_title` tinytext NOT NULL,
  `post_views` varchar(50) DEFAULT NULL,
  `post_slug` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `post_desc` text NOT NULL,
  `post_meta_desc` text NOT NULL,
  `post_meta_keywords` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `cate_post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_status` int(10) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `cate_post_id` (`cate_post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_views`, `post_slug`, `post_content`, `post_desc`, `post_meta_desc`, `post_meta_keywords`, `post_image`, `cate_post_id`, `created_at`, `updated_at`, `post_status`) VALUES
(23, 'Tr?? s???a - m??n ??n tin th???n cho gi???i tr???', '84', 'tra-sua-mon-an-tin-than-cho-gioi-tre', '<p><a href=\"https://media-cdn.laodong.vn/storage/newsportal/2019/8/21/750446/Bubblea-Milk-Tea-Hea.jpg\"><img alt=\"Tr?? s???a c?? nhi???u t??c d???ng ph??? khi u???ng qu?? nhi???u. ???nh: Healthy24h.com.\" src=\"https://media-cdn.laodong.vn/storage/newsportal/2019/8/21/750446/Bubblea-Milk-Tea-Hea.jpg?w=888&amp;h=592&amp;crop=auto&amp;scale=both\" style=\"height:592px; width:888px\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Tr&agrave; s???a c&oacute; nhi???u t&aacute;c d???ng ph??? khi u???ng qu&aacute; nhi???u.</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tr&agrave; s???a l&agrave; m???t th???c u???ng ph??? bi???n v&agrave; ???????c ??a th&iacute;ch hi???n nay. Tuy nhi&ecirc;n, u???ng qu&aacute; nhi???u tr&agrave; s???a s??? c&oacute; nhi???u ???nh h?????ng nguy hi???m ?????n s???c kh???e.</p>\r\n\r\n<p><strong>1. B&eacute;o ph&igrave;</strong></p>\r\n\r\n<p>Tr&agrave; s???a l&agrave; m???t trong nh???ng nguy&ecirc;n nh&acirc;n g&acirc;y b&eacute;o ph&igrave; do l?????ng ???????ng v&agrave; calo c???c l???n.&nbsp;Th&agrave;nh ph???n c???a tr&agrave; s???a l&agrave; kem b&eacute;o tr???n v???i b???t tr&agrave; v&agrave; ph??? gia, bu???c c?? th??? ph???i h???p th??? nhi???u ch???t b&eacute;o b&atilde;o h&ograve;a, d???n ?????n t??ng c&acirc;n nhanh ch&oacute;ng.</p>\r\n\r\n<p><strong>2. Thi???u dinh d?????ng</strong></p>\r\n\r\n<p>C?? th??? b&eacute;o kh&ocirc;ng c&oacute; ngh??a l&agrave; do nh???n ???????c nhi???u ch???t dinh d?????ng.&nbsp;S???a trong tr&agrave; s???a c&oacute; &iacute;t canxi, vitamin (A, B v&agrave; D) c??ng nh?? protein h??n s???a th&ocirc;ng th?????ng.&nbsp;Do ??&oacute;, th???c u???ng n&agrave;y s??? g&acirc;y thi???u h???t dinh d?????ng.&nbsp;Tr??? em trong ????? tu???i h???c sinh c???n ?????c bi???t ch&uacute; &yacute; ?????n t&aacute;c h???i c???a tr&agrave; s???a ?????i v???i qu&aacute; tr&igrave;nh ph&aacute;t tri???n.</p>\r\n\r\n<p>Kh&ocirc;ng ch??? v???y, c&aacute;c chuy&ecirc;n gia dinh d?????ng c??ng khuy&ecirc;n r???ng pha tr&agrave; s???a t??? ch??? l&agrave; ph???n khoa h???c.&nbsp;L&yacute; do l&agrave; k???t h???p tr&agrave; v???i s???a s??? l&agrave;m m???t t&aacute;c d???ng t???t ?????i v???i s???c kh???e.&nbsp;</p>\r\n\r\n<p><strong>3. U???ng qu&aacute; nhi???u d???n ?????n nguy c?? v&ocirc; sinh</strong></p>\r\n\r\n<p>M???t trong nh???ng t&aacute;c h???i c???a&nbsp;vi???c u???ng qu&aacute; nhi???u tr&agrave; s???a l&agrave; l&agrave;m t??ng nguy c?? v&ocirc; sinh.&nbsp;Nguy&ecirc;n nh&acirc;n ?????n t??? th&agrave;nh ph???n c???a d???u th???c v???t hydro h&oacute;a trong tr&agrave; s???a.&nbsp;Axit b&eacute;o ???nh h?????ng x???u ?????n kh??? n??ng sinh s???n c???a ng?????i u???ng r?????u.</p>\r\n\r\n<p>C??? th???, ?????i v???i nam gi???i, ch???t l?????ng tinh tr&ugrave;ng s??? b??? gi???m do th&agrave;nh ph???n n&agrave;y ???nh h?????ng ti&ecirc;u c???c ?????n n???i ti???t t??? nam.&nbsp;Ph??? n??? c??ng ph???i ?????i m???t nguy c?? v&ocirc; sinh ho???c ung th?? v&agrave; c&aacute;c b???nh tim m???ch kh&aacute;c.</p>\r\n\r\n<p><strong>4. T&aacute;c d???ng ph??? ?????i v???i gan v&agrave; th???n</strong></p>\r\n\r\n<p>Nhi???u c???a h&agrave;ng tr&agrave; s???a s??? d???ng b???t m&agrave;u thay v&igrave; b???t tr&agrave; t??? nhi&ecirc;n.&nbsp;</p>\r\n\r\n<p>N???u b???n u???ng qu&aacute; nhi???u ho???c l?????ng ch???t ph??? gia ???????c th&ecirc;m v&agrave;o v?????t qu&aacute; ng?????ng an to&agrave;n, s???c kh???e c???a b???n s??? b??? ???nh h?????ng r???t nhi???u.&nbsp;C??? th???, khi ch&uacute;ng ???????c t&iacute;ch l??y trong th???i gian d&agrave;i, ch&uacute;ng s??? l&agrave; g&aacute;nh n???ng c???a gan v&agrave; th???n, l&agrave;m suy gi???m ch???c n??ng c???a c&aacute;c b??? ph???n n&agrave;y.</p>\r\n\r\n<p><strong>5. Ng??? ?????c</strong></p>\r\n\r\n<p>B&ecirc;n c???nh nh???ng t&aacute;c h???i c???a tr&agrave; s???a ??? tr&ecirc;n, th&oacute;i quen u???ng qu&aacute; nhi???u c&ograve;n g&acirc;y ra m???t s??? h???u qu??? kh&ocirc;n l?????ng kh&aacute;c.&nbsp;N???u v&ocirc; t&igrave;nh u???ng tr&agrave; s???a ch??? bi???n v???i s???a kh&ocirc;ng v??? sinh v???i nguy&ecirc;n li???u k&eacute;m ch???t l?????ng, c&oacute; nguy c?? b??? ng??? ?????c.&nbsp;V&igrave; v???y, h???n ch??? u???ng tr&agrave; s???a kh&ocirc;ng r&otilde; ngu???n g???c!</p>\r\n\r\n<p><strong>L???i khuy&ecirc;n c???a c&aacute;c chuy&ecirc;n gia</strong></p>\r\n\r\n<p>- N???u kh&ocirc;ng th??? thi???u tr&agrave; s???a m???i ng&agrave;y, h&atilde;y h???c c&aacute;ch t??? b??? th&oacute;i quen ??&oacute; d???n d???n.</p>\r\n\r\n<p>- Y&ecirc;u c???u c&aacute;c c???a h&agrave;ng gi???m ???????ng cho c???c tr&agrave; s???a c???a b???n</p>\r\n\r\n<p>- N&ecirc;n mua size nh??? thay v&igrave; size l???n.</p>\r\n\r\n<p>- Ch??? u???ng tr&agrave; s???a t???i ??a 2 l???n/tu???n.</p>\r\n\r\n<p>- Ch???n th????ng hi???u tr&agrave; s???a uy t&iacute;n v???i th????ng hi???u r&otilde; r&agrave;ng, ngu???n g???c ki???m duy???t.</p>\r\n\r\n<p>- N&ecirc;n t&iacute;ch c???c t???p th??? d???c ?????u ?????n m???i ng&agrave;y ????? gi&uacute;p ki???m so&aacute;t c&acirc;n n???ng, ng??n ng???a th???a c&acirc;n v&agrave; b&eacute;o ph&igrave;.</p>', '<p>Tr&agrave; s???a l&agrave; m???t th???c u???ng ph??? bi???n v&agrave; ???????c ??a th&iacute;ch hi???n nay. Tuy nhi&ecirc;n, u???ng qu&aacute; nhi???u tr&agrave; s???a s??? c&oacute; nhi???u ???nh h?????ng nguy hi???m ?????n s???c kh???e.</p>', 'tra sua va suc khoe', 'tra sua va suc khoe', 'gettyimages-1157712696-2048x204849.jpg', 9, '2021-11-03 14:04:48', '2021-11-03 07:04:48', 0),
(24, 'Nh???ng Th??ng tin th?? v??? v??? tr?? s???a', '37', 'nhung-thong-tin-thu-vi-ve-tra-sua', '<p>S&aacute;ng 20.5, C&ocirc;ng an&nbsp;<a href=\"https://laodong.vn/xa-hoi/hang-chuc-hoc-sinh-hai-phong-nhap-vien-sau-khi-uong-nuoc-gi-805965.ldo\" rel=\"external\" title=\"TP.H???i Ph??ng\">TP.H???i Ph&ograve;ng</a>&nbsp;th&ocirc;ng tin, l???c l?????ng ch???c n??ng v???a ph&aacute;t hi???n c?? s??? ch???a s??? l?????ng l???n ch???t ph??? gia d&ugrave;ng ????? ch??? bi???n tr&agrave; s???a, n?????c tr&aacute;i c&acirc;y kh&ocirc;ng r&otilde; ngu???n g???c.</p>\r\n\r\n<p>C??? th???, v&agrave;o 15h ng&agrave;y 18.5, ?????i C???nh s&aacute;t ??i???u tra t???i ph???m v??? kinh t??? v&agrave; ch???c v??? C&ocirc;ng an qu???n L&ecirc; Ch&acirc;n ph???i h???p v???i ?????i Qu???n l&yacute; th??? tr?????ng s??? 6 - C???c Qu???n l&yacute; th??? tr?????ng th&agrave;nh ph??? ki???m tra ?????t xu???t v??? l??nh v???c kinh t???, th????ng m???i v&agrave; l??nh v???c an to&agrave;n th???c ph???m t???i ?????a ch??? s??? 1A/188 Ch??? H&agrave;ng, ph?????ng D?? H&agrave;ng K&ecirc;nh, qu???n L&ecirc; Ch&acirc;n. T???i ??&acirc;y, l???c l?????ng ch???c n??ng ph&aacute;t hi???n c?? s??? n&agrave;y c&oacute; ch???a s??? l?????ng l???n ph??? gia d&ugrave;ng ????? ch??? bi???n th???c ph???m kh&ocirc;ng r&otilde; ngu???n g???c, xu???t x???.</p>\r\n\r\n<p>T???i th???i ??i???m ki???m tra, l???c l?????ng ch???c n??ng ph&aacute;t hi???n 68 th&ugrave;ng catton ch???a c&aacute;c m&aacute;y m&oacute;c, ph??? ki???n li&ecirc;n quan ?????n ch??? bi???n th???c ph???m c&oacute; in nh&atilde;n m&aacute;c b???ng ti???ng n?????c ngo&agrave;i; 18 th&ugrave;ng catton v&agrave; 5 bao g&oacute;i b&ecirc;n trong ch???a ch???t ph??? gia th???c ph???m, ch???t h??? tr??? ch??? bi???n th???c ph???m (kho???ng 450 kg) nh?? tr&agrave; s???a, n?????c tr&aacute;i c&acirc;y&hellip; T???ng gi&aacute; tr??? h&agrave;ng h&oacute;a kho???ng 100 tri???u ?????ng.</p>\r\n\r\n<p>B&agrave; Nghi&ecirc;m Th??? Dung (?????i di???n c?? s???) cho bi???t, ??&atilde; mua to&agrave;n b??? s??? h&agrave;ng h&oacute;a tr&ecirc;n t??? nhi???u ngu???n kh&aacute;c nhau ????? kinh doanh ki???m l???i. Tuy nhi&ecirc;n, b&agrave; Dung kh&ocirc;ng xu???t tr&igrave;nh ???????c gi???y t??? ch???ng minh ngu???n g???c, xu???t x??? s??? h&agrave;ng h&oacute;a tr&ecirc;n.</p>\r\n\r\n<p>?????i Qu???n l&yacute; th??? tr?????ng s??? 6 ??&atilde; ra quy???t ?????nh t???m gi??? to&agrave;n b??? tang v???t v&agrave; l???p bi&ecirc;n b???n thu gi??? l&ocirc; h&agrave;ng, ti???p t???c ??i???u tra l&agrave;m r&otilde; theo quy ?????nh c???a ph&aacute;p lu???t.</p>', '<p>T???i th???i ??i???m ki???m tra, l???c l?????ng ch???c n??ng ph&aacute;t hi???n c?? s??? c&oacute; ch???a kho???ng 450kg ch???t ph??? gia ????? ch??? bi???n&nbsp;<a href=\"https://laodong.vn/kinh-te/tin-do-tra-sua-ha-noi-nhao-nhac-khi-hay-biet-1-tan-nguyen-lieu-ban-610795.ldo\" rel=\"external\" title=\"tr?? s???a\">tr&agrave; s???a</a>, n?????c tr&aacute;i c&acirc;y v&agrave; nhi???u m&aacute;y m&oacute;c, thi???t b??? li&ecirc;n quan kh&ocirc;ng r&otilde; ngu???n g???c, xu???t x???.&nbsp;</p>', 'T???i th???i ??i???m ki???m tra, l???c l?????ng ch???c n??ng ph??t hi???n c?? s??? c?? ch???a kho???ng 450kg ch???t ph??? gia ????? ch??? bi???n??tr?? s???a, n?????c tr??i c??y v?? nhi???u m??y m??c, thi???t b??? li??n quan kh??ng r?? ngu???n g???c, xu???t x???.??', 'T???i th???i ??i???m ki???m tra, l???c l?????ng ch???c n??ng ph??t hi???n c?? s??? c?? ch???a kho???ng 450kg ch???t ph??? gia ????? ch??? bi???n??tr?? s???a, n?????c tr??i c??y v?? nhi???u m??y m??c, thi???t b??? li??n quan kh??ng r?? ngu???n g???c, xu???t x???.??', 'khoia mon0.jpg', 9, '2021-11-03 03:39:01', '2021-11-02 20:39:01', 0),
(25, 'Tr?? s???a v?? nh???ng ??i???u n??n bi???t', '24', 'tra-sua-va-nhung-dieu-nen-biet', '<h3>1V&igrave; sao u???ng tr&agrave; s???a l???i t??ng c&acirc;n?</h3>\r\n\r\n<p>Theo hi???p h???i tim m???ch Hoa K??? th&igrave; ??? n??? c???n kho???ng 25g&nbsp;<a href=\"https://www.bachhoaxanh.com/duong\" target=\"_blank\">???????ng</a>, ??? nam kho???ng 37,5g ???????ng cho c&aacute;c ho???t ?????ng h&agrave;ng ng&agrave;y. Tuy nhi&ecirc;n trong&nbsp;<strong>1 ly tr&agrave; s???a</strong>&nbsp;th&igrave; c&oacute; kho???ng&nbsp;<strong>50g ???????ng</strong>&nbsp;l???n h??n r???t nhi???u m&agrave; l?????ng ???????ng c?? th??? c???n.</p>\r\n\r\n<p>U???ng tr&agrave; s???a nhi???u b???n c&oacute; th&oacute;i quen d&ugrave;ng th&ecirc;m tr&acirc;n ch&acirc;u v&agrave; 1 s???&nbsp;<a href=\"https://www.bachhoaxanh.com/kinh-nghiem-hay/cac-loai-topping-dan-nghien-tra-sua-phai-biet-1084978\" target=\"_blank\">topping</a>&nbsp;kh&aacute;c, theo nghi&ecirc;n c???u th&igrave; trong&nbsp;<strong><a href=\"https://www.bachhoaxanh.com/tra-kho-tui-loc/tran-chau-thuy-tinh-yoki-hop-300g\" target=\"_blank\">tr&acirc;n ch&acirc;u</a>&nbsp;ch???a kho???ng 65% tinh b???t</strong>, tinh b???t sau khi c?? th??? ti&ecirc;u ho&aacute; th&igrave; chuy???n ho&aacute; th&agrave;nh ???????ng.</p>\r\n\r\n<p>N???u t&iacute;nh v??? calo th&igrave; trong&nbsp;<strong>1 ly tr&agrave; s???a</strong>&nbsp;c&oacute; ch???a kho???ng&nbsp;<strong>340 calo</strong>, v???y v???i c&aacute;c b???n&nbsp;<strong>u???ng 2-3 ly</strong>&nbsp;m???t ng&agrave;y th&igrave; l?????ng calo t??ng l&ecirc;n r???t nhi???u c&ugrave;ng v???i c&aacute;c th???c ??n kh&aacute;c trong ng&agrave;y d???n ?????n&nbsp;<strong>d?? l?????ng calo</strong>&nbsp;m&agrave; c?? th??? c???n.</p>\r\n\r\n<p>V&igrave; v???y n???u&nbsp;<strong>u???ng nhi???u tr&agrave; s???a trong ng&agrave;y</strong>&nbsp;d???n ?????n d?? l?????ng ???????ng v&agrave; calo m&agrave; c?? th??? c???n, ?????c bi???t v???i ng?????i &iacute;t v???n ?????ng th&igrave; nguy c??<strong>&nbsp;t??ng c&acirc;n, t??ng m??? b???ng l&agrave; kh&ocirc;ng th??? tr&aacute;nh kh???i.</strong></p>\r\n\r\n<p><img alt=\"N???u u???ng nhi???u tr?? s???a trong ng??y d???n ?????n t??ng c??n, t??ng m??? b???ng\" src=\"https://cdn.tgdd.vn/Files/2017/11/24/1044354/10-tac-hai-dang-gom-cua-tra-sua-gioi-tre-can-phai-can-nhac-202107141704550689.jpg\" title=\"N???u u???ng nhi???u tr?? s???a trong ng??y d???n ?????n t??ng c??n, t??ng m??? b???ng\" />N???u u???ng nhi???u tr&agrave; s???a trong ng&agrave;y d???n ?????n t??ng c&acirc;n, t??ng m??? b???ng</p>\r\n\r\n<h3>2Th&agrave;nh ph???n ch&iacute;nh trong m???t ly tr&agrave; s???a</h3>\r\n\r\n<p><img alt=\"Th??nh ph???n ch??nh trong m???t ly tr?? s???a\" src=\"https://cdn.tgdd.vn/Files/2017/11/24/1044354/tac-hai-an-dau-cua-tra-sua-201908290812504812.jpg\" title=\"Th??nh ph???n ch??nh trong m???t ly tr?? s???a\" />Th&agrave;nh ph???n ch&iacute;nh trong m???t ly tr&agrave; s???a</p>\r\n\r\n<h4><strong>Tr&agrave;</strong></h4>\r\n\r\n<p><a href=\"https://www.bachhoaxanh.com/tra-kho-tui-loc-tra-kho\" target=\"_blank\">Tr&agrave;</a>&nbsp;???????c d&ugrave;ng ????? pha ch??? tr&agrave; s???a th?????ng l&agrave; tr&agrave; ??en, tr&agrave; xanh, tr&agrave; &ocirc; long c&oacute; ch???a ch???t ch???ng oxy h&oacute;a, c&oacute; t&aacute;c d???ng t???t cho s???c kh???e.</p>\r\n\r\n<p>Tr&ecirc;n th???c t??? l&agrave; ????? t??ng h????ng v??? cho tr&agrave; nh???m thu h&uacute;t ng?????i ti&ecirc;u d&ugrave;ng, ng?????i b&aacute;n th?????ng t???m th&ecirc;m c&aacute;c h????ng li???u v&agrave;o tr&agrave; nh?? h????ng sen, h????ng nh&agrave;i, h????ng b???c h&agrave;&hellip;&nbsp;<strong>Nh???ng lo???i h????ng li???u n&agrave;y th?????ng ch???a c&aacute;c h&oacute;a ch???t ?????c h???i c&oacute; ngu???n g???c h???u c?? nh??: penzylacetat, P &ndash; dimethoxy penzin&hellip; g&acirc;y h???i cho s???c kh???e ng?????i d&ugrave;ng khi u???ng qu&aacute; nhi???u.</strong></p>\r\n\r\n<p>Ngo&agrave;i ra, v&igrave; l&yacute; do l???i nhu???n ng?????i b&aacute;n tr&agrave; s???a kh&ocirc;ng s??? d???ng tr&agrave; m&agrave; thay b???ng h&oacute;a ch???t t???o v??? tr&agrave; ho???c s??? d???ng tr&agrave; t???m ?????p h????ng li???u ?????c h???i c&oacute; th??? g&acirc;y nguy hi???m cho s???c kh???e ng?????i ti&ecirc;u d&ugrave;ng.</p>\r\n\r\n<h4><strong>S???a</strong></h4>\r\n\r\n<p>????? k&iacute;ch th&iacute;ch kh???u v??? v&agrave; gia t??ng l???i nhu???n, ng?????i b&aacute;n tr&agrave; s???a th?????ng&nbsp;<strong>s??? d???ng kem b&eacute;o thay cho&nbsp;<a href=\"https://www.bachhoaxanh.com/sua-tuoi\" target=\"_blank\">s???a t????i</a>,&nbsp;<a href=\"https://www.bachhoaxanh.com/sua-dac\" target=\"_blank\">s???a ?????c</a>.</strong></p>\r\n\r\n<p>Kem b&eacute;o ch???a r???t nhi???u d???u th???c v???t ???????c hydro h&oacute;a, c&oacute; th???&nbsp;<strong>khi???n ng?????i d&ugrave;ng g???p c&aacute;c v???n ????? v??? s???c kh???e nh??</strong>: t???c m???ch m&aacute;u, t??ng cholesterol x???u, gi???m cholesterol t???t. Ch??a k??? ?????n h&agrave;m l?????ng canxi, c&aacute;c vitamin v&agrave; protein trong kem b&eacute;o r???t th???p so v???i s???a t????i n&ecirc;n c&oacute; th??? khi???n ng?????i d&ugrave;ng b??? thi???u ch???t.</p>', '<p>Theo hi???p h???i tim m???ch Hoa K??? th&igrave; ??? n??? c???n kho???ng 25g&nbsp;<a href=\"https://www.bachhoaxanh.com/duong\" target=\"_blank\">???????ng</a>, ??? nam kho???ng 37,5g ???????ng cho c&aacute;c ho???t ?????ng h&agrave;ng ng&agrave;y. Tuy nhi&ecirc;n trong&nbsp;<strong>1 ly tr&agrave; s???a</strong>&nbsp;th&igrave; c&oacute; kho???ng&nbsp;<strong>50g ???????ng</strong>&nbsp;l???n h??n r???t nhi???u m&agrave; l?????ng ???????ng c?? th??? c???n.</p>', 'U???ng tr?? s???a nhi???u b???n c?? th??i quen d??ng th??m tr??n ch??u', 'U???ng tr?? s???a nhi???u b???n c?? th??i quen d??ng th??m tr??n ch??u', 'photo-1541696490-8744a5dc022873.jfif', 8, '2021-11-03 03:39:03', '2021-11-02 20:39:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,0) NOT NULL,
  `gia_km` int(10) DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `soluong` int(10) NOT NULL,
  `product_sold` int(10) DEFAULT NULL,
  `pro_rating_number` int(10) DEFAULT NULL,
  `pro_rating` int(10) DEFAULT NULL,
  `product_view` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price_cost` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=231 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `product_desc`, `product_price`, `gia_km`, `product_image`, `product_status`, `soluong`, `product_sold`, `pro_rating_number`, `pro_rating`, `product_view`, `created_at`, `updated_at`, `price_cost`) VALUES
(45, 'S???a T????i Okinawa', 4, '<p>S???a T????i Okinawa</p>', 50000, 5000, '1626616486.png', 1, 50, 1, 8, 2, 62, '2021-06-26 17:40:18', '2021-11-07 03:27:36', '40000'),
(47, 'Mango Matcha Latte', 4, '<p>Mango Matcha Latte&nbsp;ng???t ng&agrave;o k???t h???p v???i tr&agrave; Alisan, cho ra ly tr&agrave; th??m, ng???t d???u d??? u???ng.</p>', 57000, 5000, '1626616461.png', 1, 50, NULL, NULL, NULL, 36, '2021-06-26 17:42:13', '2021-11-07 06:36:43', '50000'),
(48, 'Okinawa Latte', 4, '<p>Okinawa Latte&nbsp;Tr&agrave; b&iacute; ??ao ng???t ng&agrave;o k???t h???p v???i tr&agrave; Alisan, cho ra ly tr&agrave; th??m, ng???t d???u d??? u???ng.</p>', 57000, 0, '1626616446.png', 1, 50, NULL, NULL, NULL, 6, '2021-06-26 17:43:21', '2021-11-07 03:26:29', '48000'),
(51, 'Tr?? Alisan Gong Cha', 5, '<p>Tr&agrave; Alisan Gong Cha&nbsp;ng???t ng&agrave;o k???t h???p v???i tr&agrave; Alisan, cho ra ly tr&agrave; th??m, ng???t d???u d??? u???ng.</p>', 45000, 0, '1626616376.png', 1, 40, NULL, NULL, NULL, 21, '2021-06-26 17:47:26', '2021-10-21 04:58:37', '40000'),
(52, 'Tr?? Earl Grey Gong Cha', 5, '<p>Tr&agrave; Earl Grey Gong Cha&nbsp;ng???t ng&agrave;o k???t h???p v???i tr&agrave; Alisan, cho ra ly tr&agrave; th??m, ng???t d???u d??? u???ng.</p>', 55000, 0, '1626616359.png', 1, 25, NULL, 5, 1, 19, '2021-06-26 17:48:01', '2021-11-07 03:26:22', '50000'),
(53, 'Tr?? ??en Gong Cha', 5, '<p>Tr&agrave; ??en Gong Cha&nbsp;ng???t ng&agrave;o k???t h???p v???i tr&agrave; Alisan, cho ra ly tr&agrave; th??m, ng???t d???u d??? u???ng.</p>', 40000, 0, '1626616341.png', 1, 50, NULL, NULL, NULL, 4, '2021-06-26 17:48:51', '2021-11-07 07:05:28', '30000'),
(54, 'Tr?? Xanh Gong Cha', 4, '<p>Tr&agrave; Xanh Gong Cha&nbsp;ng???t ng&agrave;o k???t h???p v???i tr&agrave; Alisan, cho ra ly tr&agrave; th??m, ng???t d???u d??? u???ng.</p>', 55000, 0, '1626616321.png', 1, 45, NULL, 4, 1, 21, '2021-06-26 17:49:58', '2021-11-07 03:26:06', '50000'),
(55, 'Okinawa Coffee Milk Tea', 6, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 57000, 0, '1626616294.png', 1, 49, 1, NULL, NULL, 1, '2021-06-26 17:55:12', '2021-11-07 03:26:00', '50000'),
(56, 'Okinawa Oreo Cream Milk Tea', 4, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 50000, 0, '1626616278.png', 1, 50, NULL, NULL, NULL, 15, '2021-06-26 17:55:55', '2021-11-07 03:25:48', '45000'),
(57, 'Tr?? S???a Okinawa', 6, '<p>Tr&agrave; S???a Okinawa</p>', 45000, 0, '1626616252.png', 1, 40, NULL, NULL, NULL, 26, '2021-06-26 17:56:43', '2021-11-07 03:25:41', '40000'),
(62, 'Tr?? S???a Tr??n Ch??u ??en', 6, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 55000, 0, '1626616183.png', 1, 48, 2, NULL, NULL, 1, '2021-06-27 06:13:07', '2021-11-07 03:25:35', '46000'),
(63, 'Tr?? S???a Hokkaido', 6, '<p>Tr&agrave; S???a Hokkaido</p>', 45000, 0, '1626616165.png', 1, 24, 1, NULL, NULL, 3, '2021-06-27 06:13:48', '2021-11-07 03:25:24', '40000'),
(64, 'Tr?? S???a C?? Ph??', 6, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 53000, 0, '1626616149.png', 1, 45, NULL, NULL, NULL, 1, '2021-06-27 06:14:33', '2021-11-07 03:25:17', '43000'),
(69, 'Tr?? S???a Khoai M??n', 4, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 40000, 0, '1626616045.png', 1, 53, NULL, NULL, NULL, 1, '2021-06-27 06:18:16', '2021-11-07 03:25:10', '30000'),
(70, 'Tr?? B?? ??ao Alisan', 7, '<p>Tr&agrave; B&iacute; ??ao Alisan</p>', 30000, 0, '1626616009.png', 1, 20, NULL, NULL, NULL, 2, '2021-06-27 06:19:09', '2021-11-07 03:25:00', '15000'),
(71, 'Tr?? B?? ??ao', 7, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 20000, 0, '1626615996.png', 1, 14, 1, 5, 1, 8, '2021-06-27 06:20:08', '2021-11-07 03:24:54', '10000'),
(76, 'Tr?? Xanh', 4, '<p>&nbsp;</p>\r\n\r\n<p>Tr&agrave; Xanh&nbsp;ng???t ng&agrave;o k???t h???p v???i tr&agrave; Alisan, cho ra ly tr&agrave; th??m, ng???t d???u d??? u???ng.</p>', 15000, 0, '1626615903.png', 1, 10, NULL, 5, 1, 12, '2021-06-27 06:23:27', '2021-11-07 03:24:47', '10000'),
(79, '????o H???ng M???n H???t ??', 8, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 35000, 0, '1626615839.png', 1, 10, 9, 5, 1, 16, '2021-06-27 06:25:26', '2021-11-07 03:24:40', '30000'),
(80, 'Tr?? Oolong V???i', 8, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 30000, 0, '1626615827.png', 1, 25, NULL, NULL, NULL, 4, '2021-06-27 06:26:08', '2021-11-07 03:24:34', '25000'),
(82, 'Tr?? Alisan Xo??i', 4, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 35000, 0, '1626615776.png', 1, 23, 2, NULL, NULL, 3, '2021-06-27 06:27:21', '2021-11-07 03:24:26', '20000'),
(206, 'Th???ch-Ai-yu', 10, '<p>B&ecirc;n c???nh c&aacute;c lo???i th???ch ???????c s???n xu???t c&ocirc;ng nghi???p, c&aacute;c qu&aacute;n tr&agrave; s???a c&ograve;n ph???c v??? c&aacute;c m&oacute;n th???ch t??? l&agrave;m nh??: th???ch c??? n??ng, th???ch khoai m&ocirc;n, th???ch d???a, th???ch ph&ocirc; mai&hellip; ??em ?????n nhi???u l???a ch???n cho ??&ocirc;ng ?????o kh&aacute;ch h&agrave;ng.</p>', 10000, 0, 'Th???ch-Ai-yu29.png', 1, 50, NULL, NULL, NULL, 3, '2021-09-15 19:27:20', '2021-10-22 21:37:53', '5000'),
(207, 'Th???ch D???a', 10, '<p>B&ecirc;n c???nh c&aacute;c lo???i th???ch ???????c s???n xu???t c&ocirc;ng nghi???p, c&aacute;c qu&aacute;n tr&agrave; s???a c&ograve;n ph???c v??? c&aacute;c m&oacute;n th???ch t??? l&agrave;m nh??: th???ch c??? n??ng, th???ch khoai m&ocirc;n, th???ch d???a, th???ch ph&ocirc; mai&hellip; ??em ?????n nhi???u l???a ch???n cho ??&ocirc;ng ?????o kh&aacute;ch h&agrave;ng.</p>', 8000, 0, 'Th???ch-D???a - Copy49.png', 1, 50, NULL, NULL, NULL, NULL, '2021-09-15 19:28:18', '2021-09-15 19:40:06', '4000'),
(208, 'Th???ch tr??i c??y', 10, '<p>B&ecirc;n c???nh c&aacute;c lo???i th???ch ???????c s???n xu???t c&ocirc;ng nghi???p, c&aacute;c qu&aacute;n tr&agrave; s???a c&ograve;n ph???c v??? c&aacute;c m&oacute;n th???ch t??? l&agrave;m nh??: th???ch c??? n??ng, th???ch khoai m&ocirc;n, th???ch d???a, th???ch ph&ocirc; mai&hellip; ??em ?????n nhi???u l???a ch???n cho ??&ocirc;ng ?????o kh&aacute;ch h&agrave;ng.</p>', 15000, 0, '1631759354.png', 1, 42, 8, NULL, NULL, NULL, '2021-09-15 19:29:14', '2021-10-24 21:06:21', '10000'),
(209, 'Kem S???a', 10, '<p>B&ecirc;n c???nh c&aacute;c lo???i th???ch ???????c s???n xu???t c&ocirc;ng nghi???p, c&aacute;c qu&aacute;n tr&agrave; s???a c&ograve;n ph???c v??? c&aacute;c m&oacute;n th???ch t??? l&agrave;m nh??: th???ch c??? n??ng, th???ch khoai m&ocirc;n, th???ch d???a, th???ch ph&ocirc; mai&hellip; ??em ?????n nhi???u l???a ch???n cho ??&ocirc;ng ?????o kh&aacute;ch h&agrave;ng.</p>', 12000, 0, 'Kem-S???a13.png', 1, 50, NULL, NULL, NULL, 2, '2021-09-15 19:29:59', '2021-10-23 19:02:02', '8000'),
(211, 'Tr??n Ch??u ??en', 10, '<p>B&ecirc;n c???nh c&aacute;c lo???i th???ch ???????c s???n xu???t c&ocirc;ng nghi???p, c&aacute;c qu&aacute;n tr&agrave; s???a c&ograve;n ph???c v??? c&aacute;c m&oacute;n th???ch t??? l&agrave;m nh??: th???ch c??? n??ng, th???ch khoai m&ocirc;n, th???ch d???a, th???ch ph&ocirc; mai&hellip; ??em ?????n nhi???u l???a ch???n cho ??&ocirc;ng ?????o kh&aacute;ch h&agrave;ng.</p>', 10000, 0, '1631759502.png', 1, 36, 14, NULL, NULL, 1, '2021-09-15 19:31:42', '2021-10-15 20:56:05', '5000'),
(212, '?????u ?????', 10, '<p>B&ecirc;n c???nh c&aacute;c lo???i th???ch ???????c s???n xu???t c&ocirc;ng nghi???p, c&aacute;c qu&aacute;n tr&agrave; s???a c&ograve;n ph???c v??? c&aacute;c m&oacute;n th???ch t??? l&agrave;m nh??: th???ch c??? n??ng, th???ch khoai m&ocirc;n, th???ch d???a, th???ch ph&ocirc; mai&hellip; ??em ?????n nhi???u l???a ch???n cho ??&ocirc;ng ?????o kh&aacute;ch h&agrave;ng.</p>', 8000, 0, '1631759588.png', 1, 50, NULL, NULL, NULL, 1, '2021-09-15 19:33:08', '2021-10-29 19:48:19', '5000'),
(216, 'tr?? chanh aiyu ch??n tr??u tr???ng', 8, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 45000, 0, '1636293192.png', 1, 50, NULL, NULL, NULL, NULL, '2021-11-07 06:53:12', '2021-11-07 06:53:12', '40000'),
(217, 'tr?? ????o ??en', 8, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 35000, 0, '1636293258.png', 1, 50, NULL, NULL, NULL, NULL, '2021-11-07 06:54:18', '2021-11-07 06:54:18', '30000'),
(218, 'Tr?? xanh chanh d??y', 8, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 42000, 0, '1636293312.png', 1, 50, NULL, NULL, NULL, NULL, '2021-11-07 06:55:12', '2021-11-07 06:55:12', '39000'),
(219, 'Alisan xo??i', 8, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 50000, 0, '1636293368.png', 1, 50, NULL, NULL, NULL, NULL, '2021-11-07 06:56:08', '2021-11-07 06:56:08', '45000'),
(220, 'Nha ??am', 10, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 15000, 0, '1636293428.png', 1, 50, NULL, NULL, NULL, NULL, '2021-11-07 06:57:08', '2021-11-07 06:57:08', '10000'),
(221, 'Strawberry Earl Grey Latte', 4, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 50000, 0, '1636293494.png', 1, 50, NULL, NULL, NULL, NULL, '2021-11-07 06:58:14', '2021-11-07 06:58:14', '40000'),
(222, 'Mango Matcha Latte', 4, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 45000, 0, '1636293547.png', 1, 50, NULL, NULL, NULL, NULL, '2021-11-07 06:59:07', '2021-11-07 06:59:07', '35000'),
(223, 'S???a T????i Okinawa', 4, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 35000, 0, '1636293598.png', 1, 50, NULL, NULL, NULL, NULL, '2021-11-07 06:59:58', '2021-11-07 06:59:58', '30000'),
(224, 'Tr?? S???a Pudding ?????u ?????', 6, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 55000, 0, '1636293689.png', 1, 50, NULL, NULL, NULL, 1, '2021-11-07 07:01:29', '2021-11-07 07:05:04', '45000'),
(225, 'Tr?? s???a SOCOLA', 6, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 50000, 0, '1636293748.png', 1, 50, NULL, NULL, NULL, 2, '2021-11-07 07:02:28', '2021-11-07 07:04:51', '45000'),
(226, 'Tr?? S???a Khoai M??n', 6, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 35000, 0, '1636293786.png', 1, 50, NULL, NULL, NULL, NULL, '2021-11-07 07:03:06', '2021-11-07 07:03:06', '30000'),
(227, 'Strawberry Oreo Smoothie', 9, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 55000, 10000, '1636294026.png', 1, 50, NULL, NULL, NULL, NULL, '2021-11-07 07:07:06', '2021-11-07 07:07:06', '45000'),
(228, 'Matcha ???? Xay', 9, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 60000, 10000, '1636294077.png', 1, 50, NULL, NULL, NULL, 1, '2021-11-07 07:07:57', '2021-11-07 07:10:01', '50000'),
(229, 'Yakult ????o ???? Xay', 9, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 55000, 10000, '1636294126.png', 1, 50, NULL, NULL, NULL, NULL, '2021-11-07 07:08:46', '2021-11-07 07:08:46', '40000'),
(230, 'Khoai M??n ???? Xay', 9, '<p>Tr&agrave; s???a ???????c l&agrave;m t??? nguy&ecirc;n li???u tr&agrave; ??en cao c???p k???t h???p v??? b&eacute;o ng???y c???a Caramel, s???a v&agrave; th???ch caramel m???m d???o</p>', 45000, 0, '1636294167.png', 1, 50, NULL, NULL, NULL, 1, '2021-11-07 07:09:27', '2021-11-07 07:11:17', '40000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

DROP TABLE IF EXISTS `tbl_rating`;
CREATE TABLE IF NOT EXISTS `tbl_rating` (
  `rating_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) UNSIGNED NOT NULL,
  `rating` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`rating_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`rating_id`, `product_id`, `rating`, `created_at`, `updated_at`) VALUES
(79, 45, 4, '2021-07-03 02:35:25', '2021-07-03 02:35:25'),
(80, 71, 5, '2021-07-11 19:59:08', '2021-07-11 19:59:08'),
(83, 79, 5, '2021-07-26 05:39:59', '2021-07-26 05:39:59'),
(84, 76, 5, '2021-07-31 00:37:18', '2021-07-31 00:37:18'),
(112, 52, 5, '2021-09-11 19:59:53', '2021-09-11 19:59:53'),
(113, 54, 4, '2021-09-15 05:33:27', '2021-09-15 05:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

DROP TABLE IF EXISTS `tbl_roles`;
CREATE TABLE IF NOT EXISTS `tbl_roles` (
  `id_roles` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_roles`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id_roles`, `name`) VALUES
(4, 'admin'),
(5, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

DROP TABLE IF EXISTS `tbl_shipping`;
CREATE TABLE IF NOT EXISTS `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_method` int(10) NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`shipping_id`)
) ENGINE=InnoDB AUTO_INCREMENT=340 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_method`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_notes`, `shipping_address2`, `created_at`, `updated_at`) VALUES
(167, 'yasuo', 1, 'N?? Trang Long', '0585861855', 'tandat@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(168, 'Nguy???n T???n ?????t', 1, 'Long Giang', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n T??n Ph??', NULL, NULL),
(169, 'Nguy???n T???n ?????t', 1, 'Long Giang', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n T??n Ph??', NULL, NULL),
(170, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 2', NULL, NULL),
(171, 'tantai', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 3', NULL, NULL),
(172, 'tran thien trung', 1, 'N?? Trang Long', '0585861855', 'tandat@gmail.com', NULL, 'Qu???n 2', NULL, NULL),
(173, 'tran thien trung', 1, 'American', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 3', NULL, NULL),
(174, 'tran thien trung', 1, '??dsf', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 6', NULL, NULL),
(175, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 3', NULL, NULL),
(176, 'nguy???n T???n T??i', 1, 'Long Giang', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n T??n Ph??', NULL, NULL),
(177, 'nguy???n T???n T??i', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(178, 'nguy???n T???n T??i', 1, 'American', '0585861855', 'tantai@gmail.com', 'sdfasdf', 'Qu???n 2', NULL, NULL),
(179, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n T??n Ph??', NULL, NULL),
(180, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(181, 'tran thien trung', 1, 'Frejoib', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n Ph?? Nhu???n', NULL, NULL),
(182, 'tran thien trung', 0, 'American', '0585861855', 'an@gmail.com', NULL, 'Qu???n Th??? ?????c', NULL, NULL),
(183, 'Nguy???n T???n ?????t', 1, 'ionia', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(184, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n T??n Ph??', NULL, NULL),
(185, 'tran thien trung', 1, 'sdfa', '0585861855', 'tandat@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(186, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'aasdf', 'Qu???n 1', NULL, NULL),
(187, 'tran thien trung', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'sdfads', 'Qu???n T??n Ph??', NULL, NULL),
(188, 'Nguy???n T???n ?????t', 1, 'Australia', '0585861855', 'Bo@gmail.com', 'tai ok', 'Qu???n Th??? ?????c', NULL, NULL),
(189, 'nguy???n T???n T??i', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'nhanh', 'Qu???n B??nh Th???nh', NULL, NULL),
(190, 'nguy???n T???n T??i', 1, 'Frejoib', '0585861855', 'tandat@gmail.com', NULL, 'Qu???n 5', NULL, NULL),
(191, 'tantai che', 1, 'erqew', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n Ph?? Nhu???n', NULL, NULL),
(192, 'Tr???n Tu???n Bo', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(193, 'tran thien trung', 1, 'ta', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n Ph?? Nhu???n', NULL, NULL),
(194, 'tran thien trung', 1, 'ta', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n Ph?? Nhu???n', NULL, NULL),
(195, 'nguy???n T???n T??i', 1, 'dsfad', '0585861855', 'tandat@gmail.com', NULL, 'Qu???n Ph?? Nhu???n', NULL, NULL),
(196, 'nguy???n T???n T??i', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(197, 'Nguy???n T???n ?????t', 1, 'ionia', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(198, 'Nguy???n T???n ?????t', 1, 'ionia', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(199, 'Nguy???n T???n ?????t', 1, 'ionia', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(200, 'tantai', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(201, 'tran thien trung', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(202, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(203, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(204, 'nguy???n T???n T??i', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(205, 'nguy???n T???n T??i', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 11', NULL, NULL),
(206, 'Tr???n Tu???n Bo', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'sfsdf', 'Qu???n T??n Ph??', NULL, NULL),
(207, 'nguy???n T???n T??i', 1, 'Long Giang', '0585861855', 'an@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(208, 'nguy???n T???n T??i', 1, 'ionia', '0585861855', 'tandat@gmail.com', NULL, 'Qu???n Ph?? Nhu???n', NULL, NULL),
(209, 'fsd', 1, 'sadas', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(210, 'Nguy???n T???n ?????t', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(211, 'Nguy???n T???n ?????t', 0, 'fsdf', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n Ph?? Nhu???n', NULL, NULL),
(212, 'tran thien trung', 1, 'Long Giang', '0585861855', 'Bo@gmail.com', 'fsdfds', 'Qu???n 2', NULL, NULL),
(213, 'Nguy???n T???n ?????t', 1, 'Frejoib', '0585861855', 'tantai@gmail.com', 'sfgdfg', 'Qu???n 1', NULL, NULL),
(214, 'Nguy???n T???n ?????t', 1, 'Frejoib', '0585861855', 'tantai@gmail.com', 'sfgdfg', 'Qu???n 1', NULL, NULL),
(215, 'nguy???n T???n T??i', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'dfasd', 'Qu???n 3', NULL, NULL),
(216, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'zfsdf', 'Qu???n 3', NULL, NULL),
(217, 'Nguy???n T???n ?????t', 1, 'Long Giang', '0585861855', 'tantai@gmail.com', 'gh', 'Qu???n Ph?? Nhu???n', NULL, NULL),
(218, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'Bo@gmail.com', 'sdfsdf', 'Qu???n 3', NULL, NULL),
(219, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'Bo@gmail.com', 'sdfsdf', 'Qu???n 3', NULL, NULL),
(220, 'nguy???n T???n T??i', 1, 'sdf', '0585861855', 'tantai@gmail.com', 'sdfa', 'Qu???n 3', NULL, NULL),
(221, 'nguy???n T???n T??i', 1, 'Long Giang', '0585861855', 'tantai@gmail.com', 'sdfa', 'Qu???n 1', NULL, NULL),
(222, 'ad', 1, 'sdfs', '343', 'sf@g', '??d', 'Qu???n 1', NULL, NULL),
(223, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', '??fs', 'Qu???n 1', NULL, NULL),
(224, 'sda', 1, '??dad', '324234223423', 'dfads@gm', 'sdfa', 'Qu???n 1', NULL, NULL),
(225, '??dfa', 1, 'adsf', 'ad', 'tai@gmail.com', 'adsf', 'Qu???n 1', NULL, NULL),
(226, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', 'sfs', 'tantai@gmail.com', 'sdsa', 'Qu???n 1', NULL, NULL),
(227, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(228, 'sddfa', 1, 'sdfas', '3242423123423', 'taina@gmail.com', 'sdf', 'Qu???n Ph?? Nhu???n', NULL, NULL),
(229, 'dsdffg', 1, 'tan tai', '0585861855', 'traong@gmail.com', 'fdsfsd', 'Qu???n 1', NULL, NULL),
(230, 'Nguy???n T???n ?????t', 1, 'dfsdfds', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(231, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(232, 'tran thien trung', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(233, 'nguy???n T???n T??i', 1, 'N?? Trang Long', '0585861855', 'tandat@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(234, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(235, 'Nguy???n T???n ?????t', 1, 'Long Giang', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(236, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tandat@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(237, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(238, 'Nguy???n T???n ?????t', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(239, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'zfsdfsd', 'Qu???n 1', NULL, NULL),
(240, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'gdf', 'Qu???n 1', NULL, NULL),
(241, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(242, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(243, 'Nguy???n T???n ?????t', 0, 'Frejoib', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(244, 'Nguy???n T???n ?????t', 1, 'American', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(245, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(246, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(247, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(248, 'tran thien trung', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(249, 'tran thien trung', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(250, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(251, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(252, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tandat@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(253, 'nguy???n T???n T??i', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(254, 'nguy???n T???n T??i', 1, 'Frejoib', '0585861855', 'tantai@gmail.com', 'dfgf', 'Qu???n 1', NULL, NULL),
(255, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(256, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(257, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(258, 'Nguy???n T???n ?????t', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'no', 'Qu???n 2', NULL, NULL),
(259, 'tran thien trung', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'sdf', 'Qu???n 1', NULL, NULL),
(260, 'Tr???n Tu???n Bo', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'no', 'Qu???n 1', NULL, NULL),
(261, 'tran thien trung', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(262, 'tantai che', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(263, 'Nguy???n T???n ?????t', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(264, 'Nguy???n T???n ?????t', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'fsdf', 'Qu???n 1', NULL, NULL),
(265, 'Nguy???n T???n ?????t', 0, 'N?? Trang Long', '0585861855', 'tandat@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(266, 'nguy???n T???n T??i', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(267, 'tran thien trung', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(268, 'Tr???n Tu???n Bo', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(269, 'nguy???n T???n T??i', 1, 'Long Giang', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(270, 'tran thien trung', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'sfsdf', 'Qu???n T??n Ph??', NULL, NULL),
(271, 'nguy???n T???n T??i', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(272, 'Nguy???n T???n ?????t', 1, 'Long Giang', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(273, 'yugjh', 1, 'N?? Trang Long', '05858691458', 'tandat@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(274, 'nguy???n T???n T??i', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'asdasd', 'Qu???n 1', NULL, NULL),
(275, 'Nguy???n T???n ?????t', 1, 'ionia', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(276, 'tran thien trung', 1, 'N?? Trang Long', '0585861855', 'tandat@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(277, 'nguy???n T???n T??i', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(278, 'nguy???n T???n T??i', 1, 'sdfag', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(279, 'tran thien trung', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(280, 'Nguy???n T???n ?????t', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(281, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(282, 'nguy???n T???n T??i', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'sfsdf', 'Qu???n 1', NULL, NULL),
(283, 'tran thien trung', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(284, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(285, 'Nguy???n T???n ?????t', 1, 'Frejoib', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(286, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(287, 'nguy???n T???n T??i', 1, 'N?? Trang Long', '0585861855', 'tandat@gmail.com', 'sds', 'Qu???n 1', NULL, NULL),
(288, 'Nguy???n T???n ?????t', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(289, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(290, 'nguy???n T???n T??i', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(291, 'tran thien trung', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(292, 'nguy???n T???n T??i', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(293, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(294, 'nguy???n T???n T??i', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(295, 'Nguy???n T???n ?????t', 0, 'Frejoib', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(296, 'Nguy???n T???n ?????t', 0, 'Frejoib', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(297, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'an@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(298, 'Nguy???n T???n ?????t', 1, 'Frejoib', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(299, 'Nguy???n T???n ?????t', 1, 'sdfaj', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(300, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(301, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(302, 'nguy???n T???n T??i', 1, 'Long Giang', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(303, 'sdfsdfs', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'sdfasdf', 'Qu???n Th??? ?????c', NULL, NULL),
(304, 'Nguy???n T???n ?????t', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'gdsfgs', 'Qu???n 9', NULL, NULL),
(305, 'Nguy???n T???n ?????t', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'hay', 'Qu???n B??nh Th???nh', NULL, NULL),
(306, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'hay', 'Qu???n B??nh Th???nh', NULL, NULL),
(307, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'hay', 'Qu???n B??nh Th???nh', NULL, NULL),
(308, 'nguy???n T???n T??i', 0, 'N?? Trang Long', '0585861855', 'Bo@gmail.com', 'zfds', 'Qu???n Th??? ?????c', NULL, NULL),
(309, 'Nguy???n T???n ?????t', 1, 'Frejoib', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(310, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(311, 'Nguy???n T???n ?????t', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(312, 'Nguy???n T???n ?????t', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(313, 'Nguy???n T???n ?????t', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(314, 'Nguy???n T???n ?????t', 1, 'Frejoib', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(315, 'zxfdsz', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'sdf', 'Qu???n 1', NULL, NULL),
(316, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(317, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(318, 'Nguy???n T???n ?????t', 1, 'sdfall', '0585861855', 'tandat@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(319, 'nguy???n T???n T??i', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(320, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'tai la so 1', 'Qu???n 1', NULL, NULL),
(321, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(322, 'tran thien trung', 1, 'Long Giang', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(323, 'sdfg5', 0, 'N?? Trang Long', '0585861855', 'tandat@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(324, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tandat@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(325, 'nguy???n T???n T??i', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(326, 'nguy???n T???n T??i', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', 'nhanh', 'Qu???n B??nh Th???nh', NULL, NULL),
(327, 'Nguy???n T???n ?????t', 0, 'American', '0585861855', 'tantai@gmail.com', 'fsee', 'Qu???n 1', NULL, NULL),
(328, 'Nguy???n T???n ?????t', 0, 'N?? Trang Long', '0585861855', 'tandat@gmail.com', 'sdgdfg', 'Qu???n 1', NULL, NULL),
(329, 'Nguy???n T???n ?????t', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(330, 'tran thien trung', 0, 'Long Giang', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(331, 'Tr???n Tu???n Bo', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(332, 'tran thien trung', 0, 'Long Giang', '0585861855', 'tantai@gmail.com', 'fsdfds', 'Qu???n 1', NULL, NULL),
(333, 'tran thien trung', 0, 'Long Giang', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(334, 'Nguy???n T???n ?????t', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(335, 'Nguy???n T???n ?????t', 0, 'Long Giang', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(336, 'Nguy???n T???n ?????t', 1, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n B??nh Th???nh', NULL, NULL),
(337, 'trung', 0, '???p ph?????c k???', '0123456789', 'trungtran2692000@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(338, 'tran thien trung', 1, 'Frejoib', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n 1', NULL, NULL),
(339, 'Nguy???n T???n ?????t', 0, 'N?? Trang Long', '0585861855', 'tantai@gmail.com', NULL, 'Qu???n B??nh Th???nh', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

DROP TABLE IF EXISTS `tbl_slider`;
CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_name` varchar(100) DEFAULT NULL,
  `slider_status` int(11) DEFAULT NULL,
  `slider_desc` varchar(100) DEFAULT NULL,
  `slider_image` varchar(100) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_name`, `slider_status`, `slider_desc`, `slider_image`) VALUES
(16, 'h??nh1', 0, '<p>Hinh 1</p>', 'gettyimages-1157712696-2048x204823.jpg'),
(17, 'hinh2', 0, '<p>hinh 2</p>', 'photo-1541696490-8744a5dc022861.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

DROP TABLE IF EXISTS `tbl_social`;
CREATE TABLE IF NOT EXISTS `tbl_social` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `provider_user_id` varchar(100) NOT NULL,
  `provider` varchar(100) NOT NULL,
  `user` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`user_id`, `provider_user_id`, `provider`, `user`) VALUES
(3, '101966844188032601290', 'GOOGLE', 23);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statistical`
--

DROP TABLE IF EXISTS `tbl_statistical`;
CREATE TABLE IF NOT EXISTS `tbl_statistical` (
  `id_statistical` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` varchar(100) NOT NULL,
  `sales` varchar(200) NOT NULL,
  `profit` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_statistical`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_statistical`
--

INSERT INTO `tbl_statistical` (`id_statistical`, `order_date`, `sales`, `profit`, `quantity`, `total_order`, `created_at`, `updated_at`) VALUES
(68, '2021-06-02', '66000000', '18000000', 23, 12, '2021-06-18 13:39:39', '0000-00-00 00:00:00'),
(69, '2021-06-01', '74000000', '20000000', 32, 20, '2021-06-18 13:39:39', '0000-00-00 00:00:00'),
(73, '2021-06-18', '205000', '205000', 8, 3, '2021-06-18 13:53:20', '2021-06-18 06:53:20'),
(76, '2021-06-19', '320000', '318400', 16, 3, '2021-06-19 14:36:32', '2021-06-19 07:36:32'),
(77, '2021-06-24', '220000', '218900', 11, 7, '2021-06-25 11:16:13', '2021-06-25 04:16:13'),
(78, '2021-06-25', '65000', '64900', 3, 2, '2021-06-25 04:17:10', '2021-06-25 04:17:10'),
(79, '2021-07-20', '57000', '7000', 1, 1, '2021-07-19 21:32:22', '2021-07-19 21:32:22'),
(80, '2021-07-21', '228000', '28000', 4, 2, '2021-07-21 03:23:38', '2021-07-20 20:23:38'),
(81, '2021-07-14', '57000', '7000', 1, 1, '2021-07-20 20:23:49', '2021-07-20 20:23:49'),
(82, '2021-07-26', '403000', '93000', 9, 2, '2021-07-26 12:46:42', '2021-07-26 05:46:42'),
(83, '2021-08-14', '1610000', '280000', 35, 1, '2021-08-14 03:39:15', '2021-08-14 03:39:15'),
(84, '2021-08-27', '267000', '49000', 5, 4, '2021-08-27 12:18:18', '2021-08-27 05:18:18'),
(85, '2021-09-01', '523000', '363000', 9, 2, '2021-09-01 19:46:19', '2021-09-01 19:46:19'),
(86, '2021-09-02', '228000', '68000', 4, 1, '2021-09-02 02:34:45', '2021-09-02 02:34:45'),
(87, '2021-09-06', '102000', '12000', 2, 2, '2021-09-06 13:29:22', '2021-09-06 06:29:22'),
(88, '2021-09-04', '180000', '20000', 4, 2, '2021-09-08 13:20:03', '2021-09-08 06:20:03'),
(89, '2021-09-10', '397000', '77000', 8, 4, '2021-09-10 10:16:59', '2021-09-10 03:16:59'),
(90, '2021-09-11', '1513000', '487000', 32, 11, '2021-09-11 14:17:11', '2021-09-11 07:17:11'),
(91, '2021-09-12', '1124000', '238000', 18, 4, '2021-09-14 15:40:11', '2021-09-14 08:40:11'),
(92, '2021-09-13', '312000', '57000', 6, 4, '2021-09-14 14:24:57', '2021-09-14 07:24:57'),
(93, '2021-09-15', '590000', '138000', 10, 4, '2021-10-07 14:58:23', '2021-10-07 07:58:23'),
(94, '2021-09-16', '133000', '113000', 8, 5, '2021-09-15 21:10:53', '2021-09-15 21:10:53'),
(95, '2021-09-18', '90000', '55000', 2, 2, '2021-09-18 04:44:09', '2021-09-18 04:44:09'),
(96, '2021-10-07', '104000', '18000', 2, 2, '2021-10-07 15:06:27', '2021-10-07 08:06:27'),
(97, '2021-10-08', '315000', '50000', 5, 1, '2021-10-07 20:11:46', '2021-10-07 20:11:46'),
(98, '2021-10-13', '32000', '6000', 1, 1, '2021-10-13 02:45:40', '2021-10-13 02:45:40'),
(99, '2021-10-15', '269000', '99000', 5, 3, '2021-10-15 13:19:46', '2021-10-15 06:19:46'),
(100, '2021-10-16', '496000', '381000', 19, 4, '2021-10-23 13:30:42', '2021-10-23 06:30:42'),
(101, '2021-10-17', '128000', '24000', 4, 1, '2021-10-16 20:35:03', '2021-10-16 20:35:03'),
(102, '2021-10-18', '171000', '51000', 3, 1, '2021-10-18 03:38:40', '2021-10-18 03:38:40'),
(103, '2021-10-20', '63000', '13000', 1, 1, '2021-10-20 06:34:36', '2021-10-20 06:34:36'),
(104, '2021-10-21', '118000', '26000', 2, 1, '2021-10-21 05:00:11', '2021-10-21 05:00:11'),
(105, '2021-10-23', '484000', '198000', 14, 6, '2021-10-25 04:06:21', '2021-10-24 21:06:21'),
(106, '2021-10-27', '228000', '68000', 4, 1, '2021-10-27 19:38:27', '2021-10-27 19:38:27'),
(107, '2021-10-28', '189000', '39000', 3, 1, '2021-10-28 06:40:36', '2021-10-28 06:40:36'),
(108, '2021-10-30', '540000', '134000', 12, 3, '2021-11-03 03:00:55', '2021-11-02 20:00:55'),
(109, '2021-10-31', '371000', '251000', 10, 3, '2021-10-30 20:32:38', '2021-10-30 20:32:38'),
(110, '2021-11-03', '177000', '39000', 3, 1, '2021-11-02 20:27:53', '2021-11-02 20:27:53'),
(111, '2021-11-07', '291000', '153000', 5, 2, '2021-11-07 01:40:05', '2021-11-07 01:40:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitors`
--

DROP TABLE IF EXISTS `tbl_visitors`;
CREATE TABLE IF NOT EXISTS `tbl_visitors` (
  `id_visitors` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(50) NOT NULL,
  `date_visitor` varchar(50) NOT NULL,
  PRIMARY KEY (`id_visitors`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_visitors`
--

INSERT INTO `tbl_visitors` (`id_visitors`, `ip_address`, `date_visitor`) VALUES
(1, '::1', '2020-11-08'),
(27, '127.0.0.1', '2021-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`) VALUES
(1, 'trung', 'trungtran2692000@gmail.com', NULL, '25f9e794323b453885f5181f1b624d0b', NULL, '2021-06-03 06:00:19', '2021-06-03 06:00:19', '07123456789'),
(2, 'trung', '0306181379@caothang.edu.vn', NULL, '123456789', NULL, '2021-06-03 06:07:47', '2021-06-03 06:07:47', '07123456788'),
(3, 'trung', 'trung@gmail.com', NULL, '123456789', NULL, '2021-06-03 07:01:45', '2021-06-03 07:01:45', '07963258741'),
(4, 'nick jason', 'tantaiIT3000@gmail.com', NULL, '123456789', NULL, '2021-06-03 20:53:50', '2021-06-03 20:53:50', '07123456856');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD CONSTRAINT `admin_roles_ibfk_1` FOREIGN KEY (`admin_admin_id`) REFERENCES `tbl_admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_roles_ibfk_2` FOREIGN KEY (`roles_id_roles`) REFERENCES `tbl_roles` (`id_roles`);

--
-- Constraints for table `attribute`
--
ALTER TABLE `attribute`
  ADD CONSTRAINT `attribute_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attribute_ibfk_2` FOREIGN KEY (`attr_id`) REFERENCES `product_attribute` (`attr_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD CONSTRAINT `tbl_comment_ibfk_1` FOREIGN KEY (`comment_product_id`) REFERENCES `tbl_product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customers` (`customer_id`),
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`shipping_id`) REFERENCES `tbl_shipping` (`shipping_id`);

--
-- Constraints for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD CONSTRAINT `tbl_post_ibfk_1` FOREIGN KEY (`cate_post_id`) REFERENCES `tbl_category_post` (`cate_post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category_product` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD CONSTRAINT `tbl_rating_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD CONSTRAINT `tbl_social_ibfk_1` FOREIGN KEY (`user`) REFERENCES `tbl_customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
