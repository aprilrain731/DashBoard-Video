-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-07-01 15:52:22
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `project`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `MemberID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `avatarname` varchar(30) DEFAULT NULL COMMENT '個人頭像',
  `gender` char(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `subscribe` varchar(50) NOT NULL COMMENT '0=false;1=true',
  `帳號是否啟動` varchar(50) NOT NULL COMMENT '0=false;1=true	'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`MemberID`, `name`, `avatarname`, `gender`, `email`, `password`, `birthday`, `phone_number`, `address`, `subscribe`, `帳號是否啟動`) VALUES
(1, 'Ada', '2.jpg', 'F', 'Ada@test.com', '1231', '1995-10-04', '0991-778-964', '台北市萬華區萬大路531號', '1', '1'),
(2, 'Afra', '2.jpg', 'F', 'Afra@test.com', '1232', '1996-07-17', '0991-778-965', '新竹市東區食品路66號', '0', '1'),
(3, 'Matty', 'avatar.png', 'M', 'Matty@test.com', '1233', '1995-12-31', '0991-778-966', '桃園市大園區航站南路9號', '1', '1'),
(4, 'Harry', '4.jpg', 'F', 'Harry@test.com', '1234', '1995-08-08', '0991-778-967', '台南市安平區永華路二段6號', '0', '1'),
(5, 'Josh', '5.jpg', 'M', 'Josh@test.com', '1235', '1996-06-10', '0991-778-968', '台北市中正區承德路一段2號', '1', '1'),
(6, 'Beverly', '6.png\Z', 'F', 'Beverly@test.com', '1236', '1994-02-08', '0991-778-969', '花蓮縣花蓮市府前路17號', '1', '1'),
(7, 'Troy', '7.jpg', 'M', 'Troy@test.com', '1237', '1992-04-16', '0991-778-970', '苗栗縣苗栗市縣府路100號', '1', '1'),
(8, 'Hugo', '8.jpg', 'M', 'Hugo@test.com', '1238', '1998-01-26', '0991-778-971', '桃園市蘆竹區中正北路117-1號', '0', '0'),
(9, 'Caroline', '9.jpg', 'F', 'Caroline@test.com', '1239', '1997-04-06', '0991-778-972', '台中市潭子區中山路二段343號', '0', '0'),
(10, 'Denise', '10.jpg', 'F', 'Denise@test.com', '1240', '1998-09-25', '0991-778-973', '彰化縣鹿港鎮埔頭街3號', '0', '1'),
(11, 'Kenny', '11.jpg', 'M', 'Kenny@test.com', '1241', '1990-03-05', '0991-778-974', '台中市西屯區台灣大道三段99號', '1', '1'),
(12, 'Elva', '12.jpg', 'F', 'Elva@test.com', '1242', '1997-12-18', '0991-778-975', '屏東縣長治鄉園西一路2號', '0', '1'),
(13, 'Maggie', '13.jpg', 'F', 'Maggie@test.com', '1243', '1987-05-14', '0991-778-976', '新竹縣竹北市光明六路10號', '1', '1'),
(14, 'Nick', '14.jpeg', 'M', 'Nick@test.com', '1244', '1985-03-21', '0991-778-977', '苗栗縣三灣鄉中山路43號', '0', '1'),
(15, 'Simon', 'avatar.png', 'M', 'Simon@test.com', '1245', '1999-01-06', '0991-778-978', '高雄市鹽埕區真愛路1號', '0', '1'),
(16, 'Vanessa', 'avatar.png', 'F', 'Vanessa@test.com', '1246', '2001-09-18', '0991-778-979', '高雄市三民區綏遠一街167巷34號', '0', '1'),
(17, 'Alice', 'avatar.png', 'F', 'Alice@test.com', '1247', '2002-08-31', '0991-778-980', '台南市東區前鋒路210號', '0', '1'),
(18, 'Huntley', 'avatar.png', 'M', 'Huntley@test.com', '1248', '2000-02-26', '0991-778-981', '苗栗縣苗栗市國華路1121號', '1', '1'),
(19, 'Charlie', 'avatar.png', 'M', 'Charlie@test.com', '1249', '1992-10-28', '0991-778-982', '台東縣台東市文化公園路200號', '1', '1'),
(20, 'Sara', 'avatar.png', 'F', 'Sara@test.com', '1250', '2003-07-15', '0991-778-983', '新北市鶯歌區館前路300號', '1', '1'),
(68, 'admin2', '9.jpg', 'F', 'yiachi2221@gmail.com', '', '2023-06-14', 'ewfewf', '高雄', '1', '0');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MemberID`),
  ADD KEY `member_id` (`MemberID`),
  ADD KEY `MemberID` (`MemberID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `MemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
