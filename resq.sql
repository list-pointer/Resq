-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 03:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resq`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'resq062@gmail.com', 'Resq123@');

-- --------------------------------------------------------

--
-- Table structure for table `register_garage`
--

CREATE TABLE `register_garage` (
  `id` int(11) NOT NULL,
  `oname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `activated` tinyint(1) NOT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_garage`
--

INSERT INTO `register_garage` (`id`, `oname`, `email`, `phoneno`, `password`, `gname`, `address`, `token`, `date`, `activated`, `lat`, `lng`) VALUES
(1, 'Soni', 'sonimax78@gmail.com', '9152798698', ' 3a95db000609bdca20c373b701d5f5f0', 'Sonimax Garage', ' Ovala, Ghodbunder Road, Thane West, Thane - 400610, Next Cng Station & Ambrosia Hotel', '3331e8d1992e9dceb8f3ce8c69d8c2fb', '2019-11-15', 1, 19.304850, 72.866707),
(2, 'Roshan Singh', 'fivegear78@gmail.com', '9152272537', 'a51b522b1c3292755db46538c7212e9a', 'Five Gear Towing and Car Services', ' Juhu Koliwada, H B Gawde Marg, Santacruz West, Mumbai - 400054, Near Holy Cross Church', '8cc792fd21efe024287d6e377ae0bf3a', '2019-11-15', 1, 19.083080, 72.826630),
(3, 'Rakesh Rathod', 'totalcar@gmail.com', '9152891168', '10d658fb4c4483d44a88da31b3e44b85', 'Total Car  Services', 'Siddhi Apartment Plot No.42Sector 9, Kamothe, Panvel Navi Mumbai, Maharashtra 410206', '4860ea6dc053936667c8dbfe74e53c32', '2019-11-17', 1, 18.988779, 73.110130),
(4, 'Hasan', 'hasanmotors45@gmail.com', '9152246994', '8d9cf7d43c5ff6c31c256cc4ecf6892e', 'Hasan Motors', ' Shiv Sagar Estate, Shop No 4, Markandeswar Nagar, Dr Annie Besant Road, Worli, mumbai - 400018, Behind Poonam Chamber ', '213bea2c11d5549c77a597b9de3d6627', '2019-11-27', 1, 18.935913, 72.840515),
(5, 'neranjan Rathod', 'mbauto10@gmail.com', '9152891168', '76e19f0fdb76b90114d56081091dee71', 'MB Auto Garage', ' \r\nplot no 58\r\nSector No 3, Shree Nagar, Thane West\r\nThane, Maharashtra 400604 ', '60761c8131732a5e59e3f2597eba1e4b', '2019-11-26', 1, 19.333330, 73.250000),
(6, 'manish', 'manishmotor11@gmail.com', '9152880389', ' 7d5cb6bbbb1f1597d65e5f58e8072e49', '\r\nManish Motors', ' New Delta Garden, Opp. Vimal Company, Miragaon Rd, Mira Road, Mira Bhayandar, Maharashtra 401107', '59c95189ac895fcc1c6e1c38d067e244', '2019-11-22', 1, 40.719730, -111.834442),
(7, 'Rider', 'rider11@gmail.com', '9152441433', 'a719a0c786fe6e79532acb8b35226025', 'Rider Garage', ' Shop No 116, Service Rd, Malad, Pushpa Park, Malad East, Mumbai, Maharashtra 400097', '95116ecd84c8e4e43c29629b68775bbd', '2019-11-17', 1, 19.189590, 72.857681),
(8, 'guarav raje', 'amcar@gmail.com', '9152891168', 'c9bdb4a1d10af93265f4f975bfd11d74', '\r\nA M Car Washing Center', '  Shop No 14 Sundaram Building, Sector No 1, Nerul, Navi Mumbai - 400706, Opp Bank Of Baroda ', 'bcab91cd6f14fafbb846b4e4fb1e75bd', '2019-11-17', 1, 19.022501, 73.018349),
(9, 'amit jadhav', 'jadhav11@gmail.com', '9152892541', 'ce8724150e6fdcad631f5432d5c9dc3d', '\r\nJadhav Auto Mobile', '  Titwala Ganesh Mandir, Goveli Road Near Raviraj Hotel, Titwala, Thane - 421605, Nearby Manali Palace ', '0cb1eb413b8f7cee17701a37a1d74dc3', '2019-11-17', 1, 19.295610, 73.209541),
(10, 'Rocky', 'rocky10@gmail.com', '7854891168', 'e4c7187fdfd298795710df46e3030521', 'Rocky Auto Garage', '  Lokmanya Nagar, Vishnu Nagar, Kacheri Road, Palghar, Palghar - 401404, Near Registration Office ', 'd405e3063aac76a254e44386c961b24c', '2019-11-17', 1, 19.700500, 72.775681),
(11, 'Karim Rathod', 'karimauto22@gmail.com', '9120191168', '88732f562a768dee7befa3e24c7e5eed', '\r\nKarim Auto Centre', '  Shop No 2, Four Bungalow, Juhu Versova Link Road, Andheri West, Mumbai - 400053, Opposite Vikram Petrol Pump ', 'a39f7b076f8a7be5fab77af044b11ff2', '2019-11-17', 1, 19.066936, 72.904419),
(12, 'Aditi Jadhav', 'central11@gmail.com', '9152892255', '6f7d500333110261f9a70a57ec228811', '\r\nCentral Motors', '  Shop No 1, Plot No 3, Ishwar Chs, Sector 50 Old, Nerul, Navi Mumbai - 400706, Near Sandesh Fine Dine', 'e3a531b4b2a5cae5bde491d3cbc80b97', '2019-11-17', 1, 54.519928, 18.533484),
(13, 'Akash bajaj', 'bajajspares33@gmail.com', '9152896713', '26a991ce0d465e436476785a8a254a6b', 'Bajaj Automobiles', ' Shop No.6, Nalini Apartment, 90 Feet Road, Mulund East, Mumbai - 400081, Opposite ICICI Bank', '7beb2bdcd98fe6167fa3321979699002', '2019-11-02', 1, 19.162960, 72.956421),
(14, 'Rohan', 'iccu@gmail.com', '7820891168', '59d2aea911a301cccee5c56260c26cac', 'Intensive Car Care Unit', '  C/O Jonny Garage Premises, Sector 8, Charkop, Kandivali West, Mumbai - 400067, Near Sunrise Towers ', ' 02df8936eee3d4d2568857ed530671b2', '2019-11-17', 1, 19.216320, 72.824120),
(15, 'Laxman', 'mahalaxmi99@gmail.com', '9120147168', 'd05265e500bbb63e90839d5fd9f12401', 'Mahalaxmi Automobiles', '  Shop No 6, Jangal Mangal Road, Bhandup West, Mumbai - 400078', '19fde9932981cf2810592e890f7f1d6d', '2019-11-17', 1, 19.150721, 72.934341),
(16, 'Sam', 'smservice113@gmail.com', '9152236568', '404c47ca4ed629060063b17621457fbd', '\r\nS M Auto Service', ' Shop No 2, Gokhale Nagar, Powai Hospital Road, Iit Powai, Mumbai - 400076, Opposite Chittranjan Park ', ' ba0e0cde1bf72c28d435c89a66afc61a', '2019-11-17', 1, 19.129930, 72.919487),
(17, 'Arhaan Roshan', 'armotor87@gmail.com', '9152820147', '386ca8b84c7b22580f232fbff489badb', 'A R Motor Works', ' Shop No. 2, Juhu Versova Ekta Chs, Bharat Nagar, Juhu Versova Link Road, Andheri West, Mumbai - 400053, Next to Vikram Petrol Pump', 'fe31506154189f633bfa39b8e565a512', '2019-11-17', 1, 19.066936, 72.904419),
(18, '\r\nSwaraj', '\r\nSwaraj Automobiles@gmail.com', '9852014788', '9fbb19288e74c6d2364f00607dcc51ce', '\r\nSwaraj Automobiles', ' Gala No, 15, Bhumiraj Twin Bridge, Sector 16, Ghansoli, Ghansoli, Navi Mumbai - 400701, Near Ghansoli New Bus Depot', '54ad08423708bb9f8c41cc85eae4e25a', '2019-11-17', 1, 19.083529, 72.844261),
(19, 'santosh', 'santoshgupta10101977@gmail.com', '8574785785', '25d55ad283aa400af464c76d713c07ad', 'santosh motors', '33, 3A/6, Keshavnagar, Mundhwa, Hanuman Nagar, Keshav Nagar, Mundhwa, Pune, Maharashtra 411036', '587c57365b54e8283fd6b1ac24acf29d', '2019-11-27', 1, 18.532553, 73.950134),
(20, 'rakesh', 'rakesh021@gmail.com', '8547741452', '25d55ad283aa400af464c76d713c07ad', 'rajaesh motors', 'Ramgadh Nagar, P.K.Road Near, Keshav Pada, Mulund West, Mumbai, Maharashtra 400080', '67a05e3822ce48a6386746388e6c81f5', '2019-11-27', 1, 19.174820, 72.942177);

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `activated` enum('0','1') NOT NULL DEFAULT '0',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`id`, `name`, `email`, `phoneno`, `password`, `token`, `activated`, `date`) VALUES
(67, 'santosh', 'santoshgupta10101977@gmail.com', '9920051442', '2bbe788f52e0deafc426c3216b7b0da8', '587c57365b54e8283fd6b1ac24acf29d', '1', '2019-11-28'),
(68, 'abhishek', 'guptaabhishek891@gmail.com', '8898622447', '2d26f42efe0f4d3623e3c054e0f2b629', 'f589a6959f3e04037eb2b3eb0ff726ac', '1', '2019-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `user_query`
--

CREATE TABLE `user_query` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `message` longtext NOT NULL,
  `date` date NOT NULL,
  `resolved` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_query`
--

INSERT INTO `user_query` (`id`, `name`, `email`, `subject`, `phoneno`, `message`, `date`, `resolved`) VALUES
(1, 'saloni', 'skhaire22@gmail.com', 'is this paid', '9552141452', 'is this service paid or free', '2019-11-28', 'Not-Resolved'),
(2, 'ritik seth', 'seth.developers88@gmail.com', 'collaboration', '9200141452', 'Are you intrested in collaboration with us???', '2019-11-28', 'Not-Resolved'),
(3, 'aayush shah', 'aayush95@gmail.com', 'Service in mumbai', '9988521452', 'Is this service available in mumbai??', '2019-11-25', 'Not-Resolved'),
(4, 'bharat ', 'bharat.kumavat@gmail.com', 'how to use your website', '9452141452', 'having problem in using the website', '2019-11-27', 'Resolved'),
(5, 'bharat ', 'dev.kumavat@gmail.com', 'login problem', '8632141452', 'having problem in login', '2019-11-27', 'Resolved'),
(6, 'neha', 'nehaverma.22@gmail.com', 'Loved your work', '9452142012', 'Really loved your work guys keep it up', '2019-11-27', 'Resolved'),
(7, 'rajesh', 'rajesh.shaikh7@gmail.com', 'Road Side Taxi', '8547452145', 'do you provide road side taxi', '2019-11-28', 'Resolved'),
(8, 'amar', 'amar.gurav@gmail.com', 'international??', '8632141452', 'Is this website for international use???', '2019-11-27', 'Not-Resolved'),
(9, 'divya', 'divyadhuri@gmail.com', 'vacancy', '7652141452', 'do you guys have any vacany??', '2019-11-27', 'Not-Resolved'),
(10, 'suresh', 'sureshshah885@gmail.com', 'New Garage Registration', '9832141452', 'how should i register my new garage', '2019-11-27', 'Not-Resolved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_garage`
--
ALTER TABLE `register_garage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_query`
--
ALTER TABLE `user_query`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register_garage`
--
ALTER TABLE `register_garage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `user_query`
--
ALTER TABLE `user_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
