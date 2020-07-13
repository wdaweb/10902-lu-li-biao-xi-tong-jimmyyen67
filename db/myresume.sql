-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-13 07:07:44
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `myresume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `tel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `line` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `about`
--

INSERT INTO `about` (`id`, `name`, `ename`, `birthday`, `tel`, `line`, `email`, `img`) VALUES
(1, '顏子勛', 'Jimmy', '1990-06-18', '+886 933-486-463', 'ichthyoid95', 'ichthyoid95@gmail.com', 'TomHardy.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `autobio`
--

CREATE TABLE `autobio` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `autobio`
--

INSERT INTO `autobio` (`id`, `title`, `text`, `sh`) VALUES
(3, '我的夢想', '我要成為對社會有貢獻的人類，哈哈哈。', 1),
(4, 'My Dream', 'I want to be a man who can help this world, ho ho ho.', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `collection`
--

CREATE TABLE `collection` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(11) NOT NULL DEFAULT 1,
  `del` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `collection`
--

INSERT INTO `collection` (`id`, `title`, `img`, `url`, `note1`, `note2`, `note3`, `sh`, `del`) VALUES
(3, '色彩製造機', 'Image 012.png', 'https://jimmyyen67.github.io/randomcolor/', 'HTML5', 'CSS3', 'JavaScript', 1, 0),
(4, '統一發票系統', 'Image 011.png', 'http://220.128.133.15/s1090201/invoice/index.php', 'HTML5', 'CSS3', 'PHP', 1, 0),
(7, '神奇寶貝的考驗', 'Image 010.png', 'https://jimmyyen67.github.io/js-12-storygame/', 'HTML5', 'CSS3', 'JavaScript', 1, 0),
(9, '光源類比時鐘', 'Image 013.png', 'https://jimmyyen67.github.io/analogclock/', 'HTML5', 'CSS3', 'JavaScript', 1, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `experience`
--

CREATE TABLE `experience` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `datein` date NOT NULL,
  `dateout` date NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL,
  `sh` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `experience`
--

INSERT INTO `experience` (`id`, `name`, `item`, `datein`, `dateout`, `parent`, `sh`) VALUES
(1, '國立宜蘭大學', '食品科學系', '2008-09-01', '2012-07-01', 1, 1),
(2, '新北市立聯合醫院', '約用人事專員', '2015-06-15', '2015-12-17', 2, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `images`
--

INSERT INTO `images` (`id`, `img`) VALUES
(1, 'TomHardy.jpg'),
(2, 'TomHolland.jpg'),
(3, 'ChrisEvans.jpg'),
(4, 'TomHiddleston.png');

-- --------------------------------------------------------

--
-- 資料表結構 `required`
--

CREATE TABLE `required` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(10) NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `required`
--

INSERT INTO `required` (`id`, `item`, `parent`, `sh`) VALUES
(1, '期望工作地點：', 0, 1),
(2, '台北市', 1, 1),
(3, '新北市', 1, 1),
(7, '期望職務名稱：', 0, 1),
(8, '前端工程師', 7, 1),
(9, '後端工程師', 7, 1),
(13, '桃園市', 1, 1),
(14, '希望待遇：', 0, 1),
(15, 'UI/UX設計師', 7, 1),
(16, '30,000 - 33,000', 14, 1),
(17, '32,000 - 35,000', 14, 1),
(21, '37,000 - 39,000', 14, 1),
(22, '期望從事產業：', 0, 1),
(23, '金融業', 22, 1),
(24, '健身產業', 22, 1),
(25, '公家機關', 22, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `acc`, `pwd`) VALUES
(1, 'admin', '0000');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `autobio`
--
ALTER TABLE `autobio`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `required`
--
ALTER TABLE `required`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `autobio`
--
ALTER TABLE `autobio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `required`
--
ALTER TABLE `required`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
