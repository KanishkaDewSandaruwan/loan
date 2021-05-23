-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 08:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twiter` varchar(255) NOT NULL,
  `instragram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`image`, `title`, `description`, `email`, `phone`, `address`, `facebook`, `twiter`, `instragram`) VALUES
('hero_img2.jpg', 'White Catchers Gift Wall decor', '<p>hhhhhhhh</p>', 'dew@gmail.com', 713664078, 'Galle Neluwa', 'https://www.facebook.com/', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `deposit_saving`
--

CREATE TABLE `deposit_saving` (
  `saving_deposit_id` int(11) NOT NULL,
  `saving_id` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `trndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposit_saving`
--

INSERT INTO `deposit_saving` (`saving_deposit_id`, `saving_id`, `amount`, `trndate`) VALUES
(13, 10, 5000, '2021-05-20 05:18:25'),
(14, 10, 5000, '2021-05-20 05:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `holder`
--

CREATE TABLE `holder` (
  `holder_id` int(11) NOT NULL,
  `member_id` int(255) NOT NULL,
  `pf_no` varchar(255) NOT NULL,
  `station_address` varchar(255) NOT NULL,
  `bank_account` int(255) NOT NULL,
  `bank_branch` varchar(255) NOT NULL,
  `trndate` datetime NOT NULL,
  `bank_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `holder`
--

INSERT INTO `holder` (`holder_id`, `member_id`, `pf_no`, `station_address`, `bank_account`, `bank_branch`, `trndate`, `bank_image`) VALUES
(1, 4, '2222222222', 'Thawalama', 2147483647, 'Udugama Galle', '2021-05-16 05:20:22', 'home_blog4.png');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loan_id` int(11) NOT NULL,
  `member_id` int(255) NOT NULL,
  `loan_amount` int(255) NOT NULL,
  `number_of_months` int(255) NOT NULL,
  `signature_image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `trndate` datetime NOT NULL,
  `document` varchar(255) NOT NULL,
  `paysheet` varchar(255) NOT NULL,
  `current_balance` int(255) NOT NULL,
  `monthly_amount` varchar(255) NOT NULL,
  `number_of_paid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_id`, `member_id`, `loan_amount`, `number_of_months`, `signature_image`, `status`, `trndate`, `document`, `paysheet`, `current_balance`, `monthly_amount`, `number_of_paid`) VALUES
(11, 4, 45000, 9, 'WhatsApp Image 2020-12-07 at 10.08.32 PM.jpeg', 'Cancel', '2021-05-20 05:16:07', 'Project-Proposal-original.pdf', 'proposal.pdf', 45000, 'Pending', 'Pending'),
(12, 4, 25000, 6, 'WhatsApp Image 2020-12-07 at 10.08.32 PM.jpeg', 'Accepted', '2021-05-20 05:19:48', 'MIT Proj Guide (1).pdf', 'MIT Proj Guide (1).pdf', 25000, 'Pending', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `loan_payment`
--

CREATE TABLE `loan_payment` (
  `loan_pay_id` int(11) NOT NULL,
  `amount` int(255) NOT NULL,
  `trndate` datetime NOT NULL,
  `loan_id` int(255) NOT NULL,
  `balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `name`, `phone`, `address`, `nic`, `email`, `username`, `password`, `reg_date`) VALUES
(1, '', 0, '', '', '', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00'),
(4, 'Kanishka', 753664071, 'Neluwa', '962670426C', 'kanishkadewsandaruwan@gmail.com', 'dew', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-16 05:08:46'),
(5, 'Thilini Maheshika', 713664072, 'Thawalama', '962670429V', 'thili@gmail.com', 'thili', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-16 05:08:45'),
(6, 'Kanishka Dew Sandaruwan', 713664056, 'Banwalgodalla, Kosmulla', '962670426B', 'kanishkadewsandaruwan9@gmail.com', 'sada', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-20 05:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `member_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `name`, `email`, `subject`, `message`, `trn_date`, `member_id`) VALUES
(2, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'kk', 'tjgj', '2020-12-24 12:17:24', ''),
(3, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'kk', 'hhhdhdh', '2020-12-25 12:08:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `saving`
--

CREATE TABLE `saving` (
  `saving_id` int(11) NOT NULL,
  `member_id` varchar(255) NOT NULL,
  `saving_amount` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `saving_signature_image` varchar(255) NOT NULL,
  `balance` int(255) NOT NULL,
  `request` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saving`
--

INSERT INTO `saving` (`saving_id`, `member_id`, `saving_amount`, `trn_date`, `status`, `saving_signature_image`, `balance`, `request`) VALUES
(10, '4', '4500', '2021-05-20 05:17:00', 'Cancel', 'WhatsApp Image 2020-12-07 at 10.08.32 PM.jpeg', 10000, 'No'),
(11, '4', '2500', '2021-05-20 05:20:03', 'Pending', 'WhatsApp Image 2020-12-07 at 10.08.32 PM.jpeg', 0, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `description`, `image`) VALUES
(1, 'Logitec Keyboard', 'Order your foods', 'hero_img.jpg'),
(2, 'White Catchers Gift Wall decor', 'Order your foods', 'hero_img2.jpg'),
(3, 'White Catchers Gift Wall decor', 'Patta sssds', 'hero_footer.png'),
(4, 'White Catchers Gift Wall decor', 'Patta sssds', 'hero_img.jpg'),
(5, 'White Catchers Gift Wall decor', 'Order your foods', 'hero_img.jpg'),
(6, 'White Catchers Gift Wall decor', 'Order your foods', 'hero_img2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider_banner`
--

CREATE TABLE `slider_banner` (
  `slider_banner_01` varchar(255) NOT NULL,
  `slider_banner_02` varchar(255) NOT NULL,
  `slider_banner_03` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `subpage_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_banner`
--

INSERT INTO `slider_banner` (`slider_banner_01`, `slider_banner_02`, `slider_banner_03`, `title`, `description`, `subpage_image`) VALUES
('blog2.png', 'blog1.png', 'about2.png', 'White Catchers Gift Wall decor', 'Order your foods', 'footer_bg.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposit_saving`
--
ALTER TABLE `deposit_saving`
  ADD PRIMARY KEY (`saving_deposit_id`);

--
-- Indexes for table `holder`
--
ALTER TABLE `holder`
  ADD PRIMARY KEY (`holder_id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `loan_payment`
--
ALTER TABLE `loan_payment`
  ADD PRIMARY KEY (`loan_pay_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `saving`
--
ALTER TABLE `saving`
  ADD PRIMARY KEY (`saving_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deposit_saving`
--
ALTER TABLE `deposit_saving`
  MODIFY `saving_deposit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `holder`
--
ALTER TABLE `holder`
  MODIFY `holder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `loan_payment`
--
ALTER TABLE `loan_payment`
  MODIFY `loan_pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `saving`
--
ALTER TABLE `saving`
  MODIFY `saving_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
