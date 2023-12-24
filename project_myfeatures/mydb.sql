-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 06:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `aboutus_id` int(11) NOT NULL,
  `aboutus_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`aboutus_id`, `aboutus_text`) VALUES
(1, 'welcome');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `faq_question` longtext NOT NULL,
  `faq_answer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_question`, `faq_answer`) VALUES
(1, 'Q: How can I place an order for delivery?', 'A: To place an order for delivery, visit our website, select the items you want, and proceed to the checkout. You can also call our hotline to place a phone order.'),
(2, 'Q: What is the estimated delivery time?', 'A: The estimated delivery time varies based on your location and current order volume. During the checkout process, you will be provided with an estimated delivery time.'),
(3, 'Q: What payment methods do you accept?', 'A: We accept online payments through credit/debit cards. Cash on delivery is also available for certain locations.');

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE `orderhistory` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `food_quantity` int(100) NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderhistory`
--

INSERT INTO `orderhistory` (`id`, `username`, `food_name`, `food_quantity`, `total_amount`, `payment_type`, `amount_paid`, `adress`, `date`) VALUES
(5, 'user1', 'Pizza', 7, '35', 'card', '35', 'dhaka', '2023-11-15'),
(6, 'user1', 'Pizza', 3, '15', 'cash', '15', 'uttara', '2023-11-15'),
(8, 'user1', 'Pizza', 2, '10', 'card', '10', 'dhaka', '2023-11-15'),
(9, 'ahmed_21', 'Pizza', 4, '20', 'cash', '20', 'dhaka', '2023-11-15'),
(10, 'validuse_1', 'Pizza', 2, '10', 'card', '10', 'basundhara', '2023-11-15'),
(11, 'user1', 'Pizza', 6, '30', 'cash', '30', 'uttara', '2023-11-15'),
(12, 'user1', 'Pizza', 4, '20', 'card', '20', 'dhaka', '2023-11-15'),
(13, 'user1', 'Pizza', 6, '30', 'card', '30', 'basundhara', '2023-11-15'),
(14, 'user1', 'Pizza', 3, '15', 'card', '15', 'dhaka', '2023-11-20'),
(15, 'user1', '', 1, '5', 'cash', '5', '1212', '2023-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promotion_id` int(10) NOT NULL,
  `promotion` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promotion_id`, `promotion`) VALUES
(24, 'new offers coming soon!'),
(25, 'test'),
(26, 'test1'),
(37, ''),
(38, ''),
(39, ''),
(40, 'a nasasa'),
(43, 'asa');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(20) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `userType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `firstName`, `lastName`, `userName`, `email`, `password`, `gender`, `phone`, `userType`) VALUES
(1, '', 'test1', 'admin', 'test@gmail.com', 'adminpassword', 'Male', 212121, 'admin'),
(3, 'dsds', 'dsds', 'admin1', 'nateto3171@pubpng.com', 'adminpassword1', 'Male', 23232, 'admin'),
(4, 'test', 'user', 'user1', 'new@gmail.com', 'userpassword', 'Male', 121212121, 'customer'),
(12, 'shahriar', 'ahmed', 'shahriar12', 'shah@gmail.com', 'password', 'Male', 123123, 'customer'),
(26, '2121212', '1212121', '212121212', 'nateto3171@pubpng.com', '21212121212', 'Male', 12111111111, 'customer'),
(27, '2121212', '1212121', '212121212', 'nateto3171@pubpng.com', '21212121212', 'Male', 121111111111, 'customer'),
(28, 'shahriar', 'sazin', 'shahriarsazin', 'shah@gmail.com', 'passwordshahriar', 'Male', 1866430959, 'customer'),
(30, 'newuser', 'ddgfdfgasd', 'perfecetusername', 'nateto3171@pubpng.com', 'perfectpassword', 'Male', 12345678911, 'customer'),
(41, 'valid', 'name', 'validuse_1', 'email@mail.om', 'password101', 'Male', 1911111111, 'customer'),
(42, 'shahriar', 'ahmed', 'test11223', 'nateto3171@pubpng.com', '323423423423', 'Male', 12343423444, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `reviewType` varchar(100) NOT NULL,
  `review` mediumtext NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `username`, `reviewType`, `review`, `rating`) VALUES
(1, 'test11', 'food', 'good', 5),
(2, 'test11', 'retaurant', 'check', 3),
(3, 'user1', 'food', 'good one', 3),
(4, 'user1', 'retaurant', 'bad', 1),
(5, 'test100', 'retaurant', 'ddd', 1),
(6, 'shahriarsazin', 'food', 'weew', 1),
(7, 'perfecetusername', 'food', 'worst food ever', 1),
(8, 'user1', 'retaurant', 'hkbhjk', 1),
(9, 'user1', 'food', 'check', 3),
(10, 'user1', 'retaurant', 'very good', 5),
(11, 'user1', 'retaurant', 'nafis', 1),
(12, 'user1', 'retaurant', 'good', 4),
(13, 'user1', 'food', 'testing', 1),
(14, 'user1', 'food', 'testing', 1),
(26, 'user1', 'retaurant', 'rr', 1),
(27, 'user1', 'food', 'ter', 2),
(28, 'user1', 'food', 'asasas', 1),
(29, 'user1', 'retaurant', 'not bad', 4),
(30, 'user1', 'food', 'dndsbds', 1),
(31, 'user1', 'food', 'asasas', 1),
(32, 'user1', 'retaurant', 'rgrty', 1),
(33, 'user1', 'retaurant', 'good', 5),
(34, 'user1', 'food', 'bad', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'user1', 'userpassword1', 'user1@mail.com'),
(2, 'shahriar', 'shahriar123', 'shahriar@mail.com'),
(3, 'username21', 'password11', 'username@mail.com'),
(4, 'any_user', 'passsword123', 'any_user@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`aboutus_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `aboutus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orderhistory`
--
ALTER TABLE `orderhistory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotion_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
