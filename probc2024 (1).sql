-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-06-17 08:12:15
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `probc2024`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `ユーザ`
--

CREATE TABLE `ユーザ` (
  `学籍番号` int(50) NOT NULL,
  `氏名` varchar(50) NOT NULL,
  `所属ID` int(11) NOT NULL,
  `電話番号` varchar(50) NOT NULL,
  `メールアドレス` varchar(50) NOT NULL,
  `住所` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `ユーザ`
--

INSERT INTO `ユーザ` (`学籍番号`, `氏名`, `所属ID`, `電話番号`, `メールアドレス`, `住所`) VALUES
(31341, 'test', 1, '111', '1111', '111111');

-- --------------------------------------------------------

--
-- テーブルの構造 `取得物管理状況`
--

CREATE TABLE `取得物管理状況` (
  `ID` int(11) NOT NULL,
  `ユーザID` int(11) NOT NULL,
  `拾得物ID` int(11) NOT NULL,
  `変更内容` varchar(50) DEFAULT NULL,
  `変更日時` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `取得物管理状況`
--

INSERT INTO `取得物管理状況` (`ID`, `ユーザID`, `拾得物ID`, `変更内容`, `変更日時`) VALUES
(1, 123456, 1, NULL, '2024/05/28');

-- --------------------------------------------------------

--
-- テーブルの構造 `所属`
--

CREATE TABLE `所属` (
  `ID` int(11) NOT NULL,
  `所属分類` varchar(50) DEFAULT NULL,
  `所属` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `所属`
--

INSERT INTO `所属` (`ID`, `所属分類`, `所属`) VALUES
(1, '健康栄養学部健康栄養学科', '健康栄養学科'),
(2, '情報学部情報システム学科', '情報システム学科'),
(3, '情報学部情報社会学科', '情報社会学科'),
(4, '情報学部メディア表現学科', 'メディア表現学科'),
(5, '職員', '職員');

-- --------------------------------------------------------

--
-- テーブルの構造 `拾得物`
--

CREATE TABLE `拾得物` (
  `id` int(11) NOT NULL,
  `拾得物分類ID` int(50) NOT NULL,
  `拾得場所` varchar(50) DEFAULT NULL,
  `色` varchar(50) DEFAULT NULL,
  `特徴` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `拾得物`
--

INSERT INTO `拾得物` (`id`, `拾得物分類ID`, `拾得場所`, `色`, `特徴`) VALUES
(1, 9, '1101教室', '白', '11'),
(3, 9, '2021教室', '', '学生証'),
(4, 9, 'バス停', '黒', 'iPhone'),
(5, 9, '2301教室', '赤', '長い財布'),
(6, 9, 'qwer', 'rf', 'hy'),
(7, 9, '7101', '白', 'おにぎり'),
(8, 9, '1101', '赤', 'キーホルダー'),
(9, 9, '7101', '白', 'おにぎり'),
(10, 1, 'qwer', 'rf', 'おにぎり'),
(11, 6, '7101', '白', 'いやほん'),
(12, 5, '7101', '白', 'さいふ');

-- --------------------------------------------------------

--
-- テーブルの構造 `拾得物分類`
--

CREATE TABLE `拾得物分類` (
  `ID` int(50) NOT NULL,
  `種類` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `拾得物分類`
--

INSERT INTO `拾得物分類` (`ID`, `種類`) VALUES
(1, 'かばん'),
(2, '傘'),
(3, '学生証'),
(4, '携帯電話'),
(5, '財布'),
(6, 'イヤホン'),
(7, '衣類'),
(8, '鍵'),
(9, 'その他');

-- --------------------------------------------------------

--
-- テーブルの構造 `遺失物`
--

CREATE TABLE `遺失物` (
  `ID` int(50) NOT NULL,
  `遺失物分類ID` int(50) NOT NULL,
  `拾得場所` varchar(50) NOT NULL,
  `色` varchar(50) NOT NULL,
  `特徴` varchar(50) NOT NULL,
  `ユーザID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `遺失物依頼`
--

CREATE TABLE `遺失物依頼` (
  `学籍番号` varchar(50) NOT NULL,
  `電話番号` varchar(50) DEFAULT NULL,
  `メールアドレス` varchar(100) DEFAULT NULL,
  `遺失物種類` varchar(50) NOT NULL,
  `その他` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `遺失物依頼`
--

INSERT INTO `遺失物依頼` (`学籍番号`, `電話番号`, `メールアドレス`, `遺失物種類`, `その他`) VALUES
('45', '52423', '9ayumu01@gmail.com', 'sdfg', 'ewrt'),
('c2p00001', '080-331421', 'c2p@bunkyo.ac.jp', '上着', '黒いパーカ'),
('c3p00001', '090-1234-5678', '', 'ヘッドホン', '青と赤'),
('c3p11111', '080-1234-5678', 'xxx@bunkyo.ac.jp', '黒いかばん', '小さな熊人形のアクセサリ'),
('c3p11112', '12345', 'xxx@bunkyo.ac.jp', 'かばん', '小さな熊人形のアクセサリ'),
('c3p11113', '133324', 'xxx@bunkyo.ac.jp', '傘', 'ビニール'),
('c3p11114', '32133', 'xxx1@bunkyo.ac.jp', '鍵', '3個'),
('c4p1114', '32133', '32131123@bunkyo.ac.jp', '上着', '111');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `ユーザ`
--
ALTER TABLE `ユーザ`
  ADD PRIMARY KEY (`学籍番号`);

--
-- テーブルのインデックス `取得物管理状況`
--
ALTER TABLE `取得物管理状況`
  ADD PRIMARY KEY (`ID`);

--
-- テーブルのインデックス `所属`
--
ALTER TABLE `所属`
  ADD PRIMARY KEY (`ID`);

--
-- テーブルのインデックス `拾得物`
--
ALTER TABLE `拾得物`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_拾得物_拾得物分類` (`拾得物分類ID`);

--
-- テーブルのインデックス `拾得物分類`
--
ALTER TABLE `拾得物分類`
  ADD PRIMARY KEY (`ID`);

--
-- テーブルのインデックス `遺失物`
--
ALTER TABLE `遺失物`
  ADD PRIMARY KEY (`ID`);

--
-- テーブルのインデックス `遺失物依頼`
--
ALTER TABLE `遺失物依頼`
  ADD PRIMARY KEY (`学籍番号`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `拾得物`
--
ALTER TABLE `拾得物`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `拾得物`
--
ALTER TABLE `拾得物`
  ADD CONSTRAINT `fk_拾得物_拾得物分類` FOREIGN KEY (`拾得物分類ID`) REFERENCES `拾得物分類` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
