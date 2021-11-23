-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 11:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `name` varchar(100) NOT NULL,
  `bdate` int(2) NOT NULL,
  `bmonth` int(2) NOT NULL,
  `byear` int(4) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `imgsorce` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`name`, `bdate`, `bmonth`, `byear`, `mobile`, `email`, `password`, `imgsorce`) VALUES
('Demo User', 1, 11, 1997, 7218172966, 'user@gmail.com', '12345', 'birthimage/user.jpg'),
('Raj Sharma', 1, 1, 1981, 7778885599, 'raj@gmail.com', '12345', 'birthimage/user.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `itemdetails`
--

CREATE TABLE `itemdetails` (
  `category` varchar(100) NOT NULL,
  `ownername` varchar(100) NOT NULL,
  `item` text NOT NULL,
  `price` int(5) NOT NULL,
  `discount` int(4) NOT NULL,
  `details` text NOT NULL,
  `imgsource` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemdetails`
--

INSERT INTO `itemdetails` (`category`, `ownername`, `item`, `price`, `discount`, `details`, `imgsource`) VALUES
('Groceries & Essentials', 'Roshan Zalte', 'Biscuit', 100, 0, 'none', 'itemimage/download6.jpg'),
('Groceries & Essentials', 'Roshan Zalte', 'Chocolate', 100, 0, 'none', 'itemimage/download5.jpg'),
('Groceries & Essentials', 'Roshan Zalte', 'Pen', 200, 0, 'none', 'itemimage/images76.png'),
('Groceries & Essentials', 'Roshan Zalte', 'Pencil', 100, 0, 'none', 'itemimage/download12.jpg'),
('Groceries & Essentials', 'Roshan Zalte', 'Mask', 200, 0, 'none', 'itemimage/downloada.jpg'),
('Groceries & Essentials', 'Roshan Zalte', 'Sanitizer', 500, 0, 'none', 'itemimage/downloadb.jpg'),
('Electronic & Hardware', 'Demo Owner', 'Redmi Mobile', 14000, 0, 'Good', 'itemimage/download 98.jpg'),
('Electronic & Hardware', 'Demo Owner', 'Dell Laptop', 40000, 0, 'none', 'itemimage/product-jpeg-500x500.jpeg'),
('Electronic & Hardware', 'Demo Owner', 'Lenovo Laptop', 49999, 0, 'Best', 'itemimage/download3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `onrinformation`
--

CREATE TABLE `onrinformation` (
  `name` varchar(100) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `enterprisename` varchar(200) NOT NULL,
  `shopnumber` varchar(40) NOT NULL,
  `servicename` varchar(300) NOT NULL,
  `address` text NOT NULL,
  `opentime` time NOT NULL,
  `closetime` time NOT NULL,
  `imgsorce` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `onrinformation`
--

INSERT INTO `onrinformation` (`name`, `mobile`, `email`, `password`, `enterprisename`, `shopnumber`, `servicename`, `address`, `opentime`, `closetime`, `imgsorce`) VALUES
('Raj Sing', 9874587487, 'raj@gmail.com', '56789', 'Tanvi Medical', 'RU54327', 'Medical', 'Malkapur,Ramnagar,443101', '00:00:00', '18:00:00', 'birthimage/med1.jpg'),
('Ajay Dhage', 7898784567, 'ajay@gmail.com', '56789', 'AJ Medical', 'DFS2355DFD', 'Medical', 'Busawal,NearBusStop,435423', '01:04:00', '18:09:00', 'birthimage/med2.jpg'),
('Kapil Kumar', 7898748596, 'kapil@gmail.com', '56789', 'Kapil Medical', 'RU54327', 'Medical', 'Akola,435267', '04:11:00', '16:10:00', 'birthimage/med3.jpg'),
('Archana Medical', 8745789874, 'archana@gmail.com', '56789', 'Archana Medical', 'RU54327', 'Medical', 'Jalgaon,456543', '02:09:00', '16:09:00', 'birthimage/med4.jpg'),
('Nikita Medical', 9874857487, 'nikita@gmail.com', '56789', 'Nikita Medical', 'DFS2355DFD', 'Medical', 'Nasik,654324', '16:11:00', '18:17:00', 'birthimage/med5.jpg'),
('Roshan Zalte', 7898748596, 'roshan@gmail.com', '56789', 'Roshan General Store', 'RU54327', 'Groceries And Essentials', 'Akola,435267', '04:11:00', '16:10:00', 'birthimage/gos6.jpg'),
('Sagar Patil', 7898748596, 'sagar@gmail.com', '56789', 'Sagar General Store', 'RU54327', 'Groceries And Essentials', 'Akola,435267', '04:11:00', '16:10:00', 'birthimage/gos2.jpg'),
('Akssh Patil', 7898748596, 'akash@gmail.com', '56789', 'Akash General Store', 'RU54327', 'Groceries And Essentials', 'Akola,435267', '04:11:00', '16:10:00', 'birthimage/gos5.jpg'),
('Sanjay Patil', 7898748596, 'akash@gmail.com', '56789', 'Sanjay General Store', 'RU54327', 'Groceries And Essentials', 'Akola,435267', '04:11:00', '16:10:00', 'birthimage/gos1.jpg'),
('Rahul Patil', 7898748596, 'rahul@gmail.com', '56789', 'Rahul Hotel', 'RU54327', 'Hotels And Restaurants', 'Mumbai,435267', '04:11:00', '16:10:00', 'birthimage/hot1.jpg'),
('Sham Patil', 7898748596, 'sham@gmail.com', '56789', 'Rahul Hotel', 'RU54327', 'Hotels And Restaurants', 'Mumbai,435267', '04:11:00', '16:10:00', 'birthimage/hot2.jpg'),
('Nikam Patil', 7898748596, 'nikam@gmail.com', '56789', 'Rahul Hotel', 'RU54327', 'Hotels And Restaurants', 'Mumbai,435267', '04:11:00', '16:10:00', 'birthimage/hot3.jpg'),
('Tejas Patil', 7898748596, 'tejas@gmail.com', '56789', 'Rahul Hotel', 'RU54327', 'Hotels And Restaurants', 'Mumbai,435267', '04:11:00', '16:10:00', 'birthimage/hot4.jpg'),
('Vilas Patil', 7898748596, 'vilas@gmail.com', '567689', 'Vilas Cake Shop', 'RU54327', 'Bakeries And Cake Shop', 'Mumbai,435267', '04:11:00', '16:10:00', 'birthimage/cak1.jpg'),
('Shital Patil', 7898748596, 'shital@gmail.com', '56789', 'shital Cake Shop', 'RU54327', 'Bakeries And Cake Shop', 'Mumbai,435267', '04:11:00', '16:10:00', 'birthimage/cak1.jpg'),
('Kanchan Patil', 7898748596, 'kanchan@gmail.com', '56789', 'Kanchan Bakery', 'RU54327', 'Bakeries And Cake Shop', 'Mumbai,435267', '04:11:00', '16:10:00', 'birthimage/bek1.jpg'),
('Swati Patil', 7898748596, 'swati@gmail.com', '56789', 'Swati Bakery', 'RU54327', 'Bakeries And Cake Shop', 'Mumbai,435267', '04:11:00', '16:10:00', 'birthimage/bek2.jpg'),
('Rushi Sharma', 9875487541, 'rushi@gmail.com', '56789', 'Rushi Fruits', 'DFS2355DFD', 'Fruits And Vegitables', 'Nasik,432687', '02:42:00', '14:42:00', 'birthimage/fru6.jpg'),
('Smir Sharma', 9875487541, 'samir@gmail.com', '567898', 'Samir Fruits', 'DFS2355DFD', 'Fruits And Vegitables', 'Jalna,432687', '02:42:00', '14:42:00', 'birthimage/fru4.jpg'),
('Raj Sharma', 9875487541, 'raj@gmail.com', '56789', 'Raj Fruits', 'DFS2355DFD', 'Fruits And Vegitables', 'Buldhana,432687', '02:42:00', '14:42:00', 'birthimage/fru3.jpg'),
('Tejas Rathi', 9875487541, 'tejas@gmail.com', '56789', 'Tejas Fruits', 'DFS2355DFD', 'Fruits And Vegitables', 'Pune,432687', '02:42:00', '14:42:00', 'birthimage/fru1.jpg'),
('Jethalal Gada', 9875487541, 'jethalal@gmail.com', '56789', 'Gada Electronic', 'DFS2355DFD', 'Electronic And Hardware', 'Pune,432687', '02:42:00', '14:42:00', 'birthimage/ele1.jpg'),
('Kajal sharma', 7898748596, 'kajal@gmail.com', '56789', 'Kajal Mobile Shop', 'RU54327', 'Electronic And Hardware', 'Shegaon,456787', '10:55:00', '22:49:00', 'birthimage/mob4.jpg'),
('Simran Dubey', 7898748596, 'simaran@gmail.com', '56789', 'Simaran Electonics', 'RU54327', 'Electronic And Hardware', 'Shegaon,456787', '10:55:00', '22:49:00', 'birthimage/ele2.jpg'),
('Demo Owner', 7848745966, 'demo@gmail.com', '56789', 'Demo Electronics', 'UVD4356TX', 'Electronic And Hardware', 'Pune,456787', '05:00:00', '17:00:00', 'birthimage/mob2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
