-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 2 月 01 日 15:34
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `fmk_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `listing_items_table`
--

CREATE TABLE `listing_items_table` (
  `id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_img` text NOT NULL,
  `price` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `listing_items_table`
--

INSERT INTO `listing_items_table` (`id`, `item_name`, `item_img`, `price`, `size`, `description`) VALUES
(1, 'リサイクルポリエステル　アクアコート ブラック', 'https://cdn.shopify.com/s/files/1/0271/5802/0178/products/imagef_958x1437.jpg?v=1637550596', 33600, '36(S)', '\"サイズ詳細(実寸)\r\n34(XS)　着丈116㎝　肩幅41㎝　身幅56㎝　袖丈62㎝\r\n36(S)　  着丈118㎝　肩幅43㎝　身幅59㎝　袖丈63㎝\r\n38(M)　 着丈120㎝　肩幅45㎝　身幅61㎝　袖丈64㎝\r\n\"'),
(2, '手織りジャカードテーラードコート', 'https://www.peopletree.co.jp/photo/l/190117.jpg', 9680, 'M', 'M：バスト114　ゆき丈78.5　身丈64.5cm'),
(3, '訳あり 送料無料 ダブルテーラードコート', 'https://makeshop-multi-images.akamaized.net/aafashion/shopimages/24/50/13_000000005024.jpg?1640685420', 6800, '11(M)', 'サイズ：\r\n《11号》\r\n着丈／(約)98cm\r\n身幅／(約)47cm\r\n肩幅／(約)38.5cm\r\n袖丈／(約)60cm\r\n');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `listing_items_table`
--
ALTER TABLE `listing_items_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `listing_items_table`
--
ALTER TABLE `listing_items_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
