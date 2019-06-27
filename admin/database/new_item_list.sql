-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 08:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vitproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_item_list`
--

CREATE TABLE `new_item_list` (
  `Id` int(50) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `ShopName` varchar(100) NOT NULL,
  `ShopTownship` varchar(100) NOT NULL,
  `ShopAddress` varchar(100) NOT NULL,
  `ShopImage` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `new_item_list`
--

INSERT INTO `new_item_list` (`Id`, `Title`, `Category`, `ShopName`, `ShopTownship`, `ShopAddress`, `ShopImage`) VALUES
(2, 'fried chicken', '0', 'kfc', 'Hlaing', '                        \r\n                  tgrsdgesrte  ', 0x6261736b65742e6a7067),
(3, 'dsfdfgg', '0', 'sfadasgfds', 'Hlaing Thar Yar', '                        \r\n        sdarvesZVrf            ', 0x636c6f7564636f6d70757465737461636b696d616765312e706e67),
(4, 'purse', '0', 'mk', 'Kamayut', '                        \r\n                    gfdhgfhtryrye', 0x6261736b65742e6a7067),
(5, 'fried chicken', 'food', 'kfc', 'Hlaing', '                        \r\n                    gvasrdger', 0x636c6f7564636f6d70757465737461636b696d616765312e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_item_list`
--
ALTER TABLE `new_item_list`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_item_list`
--
ALTER TABLE `new_item_list`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
