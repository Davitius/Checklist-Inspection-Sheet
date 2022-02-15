-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 15, 2022 at 07:53 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `arqi_changelog`
--

CREATE TABLE `arqi_changelog` (
  `id` int(11) UNSIGNED NOT NULL,
  `timme` varchar(30) DEFAULT NULL,
  `changes` text,
  `news` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `arqi_changelog`
--

INSERT INTO `arqi_changelog` (`id`, `timme`, `changes`, `news`) VALUES
(1, '11-11-21', 'დაემატა სტანდარტული სურათი.\r\n(გამოჩნდება როდესაც არ აქვს მომხმარებელს ატვირთული სურათი)\r\n', ''),
(5, '18-11-21', 'ჩასწორდა შეტყობინება. (ახალი ჩექლისტის შექმნისას, რედასაც უკვე არსებობს იგივე სახელწოდების ჩექლისტი გამოაქვს კორექტული შეტყობინება)', ''),
(2, '12-11-21', 'ჩექლისტის ფორმაში „ფანჯრების მინის ხარისხი“ და „ბინის მდგომარეობა“ -ის შესაძლო პასუხები უფრო გასაგები გახდა.', ''),
(3, '13-11-21', 'განახლდა ჩექლისტის ფორმა.\r\n(დათვალიერება-დაბეჭდვისას ცვლილების შეტანა შეუძლებელი გახდა).', ''),
(4, '17-11-21', 'პირად კაბინეტში დაემატა ცვლილებების ჟურნალი.', ''),
(6, '18-11-21', 'ჩექლისტში ყველა პასუხი ავტომატურად \"დიახ\" დადგა.(შესაცვლელი იქნება მხოლოდ ის პუნქტი რომელიც ხარვეზითაა გაკეთებული. ნაკლები დრო დასჭირდება ჩექლისტის შევსებას)', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arqi_changelog`
--
ALTER TABLE `arqi_changelog`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arqi_changelog`
--
ALTER TABLE `arqi_changelog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
