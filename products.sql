-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2017 at 12:01 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `User_id` varchar(50) NOT NULL,
  `Game_id` int(4) NOT NULL,
  `Total_price` int(10) NOT NULL,
  `Game_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `User_id`, `Game_id`, `Total_price`, `Game_amount`) VALUES
(20, 'hello@gmail.com', 1, 1, 0),
(21, '<br />\r\n<b>Notice</b>:  Undefined index: login_use', 1, 1, 0),
(22, '<br />\r\n<b>Notice</b>:  Undefined index: login_use', 2, 2, 0),
(23, 'ger@gmail.com', 1, 1, 0),
(24, 'ger@gmail.com', 3, 3, 0),
(25, 'ger@gmail.com', 10, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `game_info`
--

CREATE TABLE `game_info` (
  `ID` int(5) NOT NULL,
  `Game_name` varchar(50) NOT NULL,
  `Game_des` varchar(400) NOT NULL,
  `Game_release` date NOT NULL,
  `Game_price` int(5) NOT NULL,
  `Game_image` varchar(100) NOT NULL,
  `Platform` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_info`
--

INSERT INTO `game_info` (`ID`, `Game_name`, `Game_des`, `Game_release`, `Game_price`, `Game_image`, `Platform`) VALUES
(1, 'Halo 5', 'Halo 5: Guardians is a first-person shooter video game developed by 343 Industries and published by Microsoft Studios for the Xbox One home video game console. ... The game\'s plot follows two fireteams of human supersoldiers: Blue Team, led by Master Chief, and Fireteam Osiris, led by Spartan Locke.', '2015-10-27', 50, 'images/1.jpg', 'Xbox'),
(2, 'Skyrim', 'The Elder Scrolls V: Skyrim is an open world action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.', '2016-10-28', 45, 'images/2.jpg', 'Xbox'),
(3, 'South Park', 'South Park: The Fractured but Whole is a role-playing video game developed and published by Ubisoft, in collaboration with South Park Digital Studios.', '2017-10-17', 69, 'images/3.jpg', 'Xbox'),
(4, 'Tekken 7', 'Tekken 7is a fighting game developed and published by Bandai Namco Entertainment. The game is the ninth installment in the Tekken series, and the first to make use of the Unreal Engine. ', '2017-06-02', 50, 'images/4.jpg', 'Xbox'),
(5, 'Mass Effect Andromeda', 'Mass Effect: Andromeda is an action role-playing video game developed by BioWare and published by Electronic Arts for Microsoft Windows, PlayStation 4, and Xbox One. It was released worldwide in March 2017. It is the fourth major entry in the Mass Effect series and the first since Mass Effect 3.', '2017-02-23', 55, 'images/5.jpg', 'Xbox'),
(6, 'Halo Wars 2', 'Halo Wars 2 is a real-time strategy (RTS) video game developed by 343 Industries and Creative Assembly. The game was published by Microsoft Studios and released in February 2017 on Windows-based personal computers (PCs) and the Xbox One video game console. ', '2017-02-21', 30, 'images/6.jpg', 'Xbox'),
(7, 'Dishonoured 2', 'Dishonored 2 is an action-adventure stealth video game developed by Arkane Studios and published by Bethesda Softworks. The sequel to 2012\'s Dishonored, the game was released for Microsoft Windows, PlayStation 4, and Xbox One on 11 November 2016.', '2016-11-11', 20, 'images/7.jpg', 'Xbox'),
(8, 'COD: Infinite Warfare', 'Call of Duty: Infinite Warfare is a first-person shooter video game developed by Infinity Ward and published by Activision. It is the thirteenth primary installment in the Call of Duty series.', '2016-11-04', 35, 'images/8.jpg', 'Xbox'),
(9, 'Titanfall 2', 'Titanfall 2 is a first-person shooter video game developed by Respawn Entertainment and published by Electronic Arts. It is the sequel to 2014\'s Titanfall and was released worldwide on October 28, 2016.', '2016-10-28', 30, 'images/9.jpg', 'Xbox'),
(10, 'Dead Island 2', 'The zombie apocalypse has hit the iconic, sunny realms of California as Deep Silver announced Dead Island® 2 today. Building on the strengths of the multi-million best-selling hit Dead Island, Dead Island 2 delivers a shared survival, open-world zombie experience set in a clash of natural beauty and bloody horror and violence', '2017-10-25', 70, 'images/11.jpg', 'PS4');

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

CREATE TABLE `image_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_gallery`
--

INSERT INTO `image_gallery` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(0, 'fdfdd', '1508510798.PNG', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `myusers`
--

CREATE TABLE `myusers` (
  `id` int(6) UNSIGNED NOT NULL,
  `Account_status` varchar(5) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Account_image` varchar(100) NOT NULL,
  `Address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myusers`
--

INSERT INTO `myusers` (`id`, `Account_status`, `firstname`, `lastname`, `email`, `password`, `reg_date`, `Account_image`, `Address`) VALUES
(1, 'User', 'Ger', 'Lee', 'ger@gmail.com', 'ger123', '2017-10-20 20:37:37', 'gfgf', 'fgfggf'),
(8, 'User', 'Ciaran', 'Dylan', 'gog.@gmail', 'ddd', '2017-10-20 16:13:50', '', '79 Darndale Road'),
(9, 'User', 'Ger', 'Leeeeee', 'hello@gmail.com', 'higer', '2017-10-20 20:05:04', '', '78 Marys Lane'),
(10, 'User', 'rerer', 'rerere', 'gog@gmail', 'gweeer', '2017-10-20 20:09:19', '', 'rerr erere'),
(12, 'Admin', 'Ciaran', 'Hannon', 'C15588357@mydit.ie', 'higer', '2017-10-21 01:04:32', '', '101 Goatstown');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_info`
--
ALTER TABLE `game_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `myusers`
--
ALTER TABLE `myusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `game_info`
--
ALTER TABLE `game_info`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `myusers`
--
ALTER TABLE `myusers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
