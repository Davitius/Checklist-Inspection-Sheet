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
-- Table structure for table `arqi_checklists`
--

CREATE TABLE `arqi_checklists` (
  `id` int(11) UNSIGNED NOT NULL,
  `project` varchar(100) DEFAULT NULL,
  `floor` varchar(50) DEFAULT NULL,
  `place` varchar(50) DEFAULT NULL,
  `timme` varchar(30) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `first` varchar(50) DEFAULT NULL,
  `second` varchar(50) DEFAULT NULL,
  `third` varchar(50) DEFAULT NULL,
  `fourth` varchar(50) DEFAULT NULL,
  `fifth` varchar(50) DEFAULT NULL,
  `sixth` varchar(50) DEFAULT NULL,
  `seventh` varchar(50) DEFAULT NULL,
  `eighth` varchar(50) DEFAULT NULL,
  `ninth` varchar(50) DEFAULT NULL,
  `tenth` varchar(50) DEFAULT NULL,
  `eleventh` varchar(50) DEFAULT NULL,
  `twelfth` varchar(50) DEFAULT NULL,
  `thirteenth` varchar(50) DEFAULT NULL,
  `fourteenth` varchar(50) DEFAULT NULL,
  `fifteenth` varchar(50) DEFAULT NULL,
  `sixteenth` varchar(50) DEFAULT NULL,
  `seventeenth` varchar(50) DEFAULT NULL,
  `eighteenth` varchar(50) DEFAULT NULL,
  `nineteenth` varchar(50) DEFAULT NULL,
  `twentieth` varchar(50) DEFAULT NULL,
  `twentyfirst` varchar(50) DEFAULT NULL,
  `twentysecond` varchar(50) DEFAULT NULL,
  `twentythird` varchar(50) DEFAULT NULL,
  `twentyfourth` varchar(50) DEFAULT NULL,
  `commfirst` varchar(255) DEFAULT NULL,
  `commsecond` varchar(255) DEFAULT NULL,
  `commthird` varchar(255) DEFAULT NULL,
  `commfourth` varchar(255) DEFAULT NULL,
  `commfifth` varchar(255) DEFAULT NULL,
  `commsixth` varchar(255) DEFAULT NULL,
  `commseventh` varchar(255) DEFAULT NULL,
  `commeighth` varchar(255) DEFAULT NULL,
  `commninth` varchar(255) DEFAULT NULL,
  `commtenth` varchar(255) DEFAULT NULL,
  `commeleventh` varchar(255) DEFAULT NULL,
  `commtwelfth` varchar(255) DEFAULT NULL,
  `commthirteenth` varchar(255) DEFAULT NULL,
  `commfourteenth` varchar(255) DEFAULT NULL,
  `commfifteenth` varchar(255) DEFAULT NULL,
  `commsixteenth` varchar(255) DEFAULT NULL,
  `commseventeenth` varchar(255) DEFAULT NULL,
  `commeighteenth` varchar(255) DEFAULT NULL,
  `commnineteenth` varchar(255) DEFAULT NULL,
  `commtwentieth` varchar(255) DEFAULT NULL,
  `commtwentyfirst` varchar(255) DEFAULT NULL,
  `commtwentysecond` varchar(255) DEFAULT NULL,
  `commtwentythird` varchar(255) DEFAULT NULL,
  `commtwentyfourth` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `arqi_checklists`
--

INSERT INTO `arqi_checklists` (`id`, `project`, `floor`, `place`, `timme`, `user`, `first`, `second`, `third`, `fourth`, `fifth`, `sixth`, `seventh`, `eighth`, `ninth`, `tenth`, `eleventh`, `twelfth`, `thirteenth`, `fourteenth`, `fifteenth`, `sixteenth`, `seventeenth`, `eighteenth`, `nineteenth`, `twentieth`, `twentyfirst`, `twentysecond`, `twentythird`, `twentyfourth`, `commfirst`, `commsecond`, `commthird`, `commfourth`, `commfifth`, `commsixth`, `commseventh`, `commeighth`, `commninth`, `commtenth`, `commeleventh`, `commtwelfth`, `commthirteenth`, `commfourteenth`, `commfifteenth`, `commsixteenth`, `commseventeenth`, `commeighteenth`, `commnineteenth`, `commtwentieth`, `commtwentyfirst`, `commtwentysecond`, `commtwentythird`, `commtwentyfourth`, `comment`) VALUES
(23, 'ლისი 114', '7', '114', '10-02-22 15:38:00', 'დავით მუხიგულაშვილი', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დამაკმაყოფილებელია', 'დიახ', 'არ არის დაზიანებული', 'დამაკმაყოფილებელი', 'დამონტაჟებულია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'Cleaned', 'დიახ', 'არა', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'არ აყენია', '', ''),
(22, 'ლისი 113', '7', '113', '18-11-21 12:13:11', 'გიგო ჩოკორაია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დამაკმაყოფილებელია', 'დიახ', 'არ არის დაგებული', 'დამაკმაყოფილებელი', 'დამონტაჟებულია', 'არა', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'ნაგავი გატანილია', 'დიახ', 'არა', '', '', '', '', '', '', '', '', '', '', 'არარის დასრულებული', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'ლისი 126', '7', '126', '18-11-21 12:13:40', 'გიგო ჩოკორაია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დამაკმაყოფილებელია', 'დიახ', 'არ არის დაზიანებული', 'არა დამაკმაყოფილებელი', 'დამონტაჟებულია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დასუფთავებულია', 'დიახ', 'დიახ', '', '', '', '', '', '', '', '', '', '', '', 'აივანზე ფასადი აჭრელებულია', '', '', '', '', '', '', 'სველ წერტილში 50-იანი მილი უკუღმა აყენია.', '', '', '', '', '', '', ''),
(25, 'ლისი 115', '7', '115', '18-11-21 12:14:13', 'გიგო ჩოკორაია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დამაკმაყოფილებელია', 'დიახ', 'არ არის დაზიანებული', 'დამაკმაყოფილებელი', 'დამონტაჟებულია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დასუფთავებულია', 'დიახ', 'დიახ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'სველ წერტილში 50-იანი მილი უკუღმა აყენია.', '', '', '', '', '', '', ''),
(19, 'ლისი 111', '7', '111', '18-11-21 12:14:27', 'გიგო ჩოკორაია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', '', 'დიახ', 'არ არის დაზიანებული', 'დამაკმაყოფილებელი', 'დამონტაჟებულია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დასუფთავებულია', '', 'დიახ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 'ლისი 116', '7', '116', '18-11-21 12:14:44', 'გიგო ჩოკორაია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დამაკმაყოფილებელია', 'დიახ', 'არ არის დაზიანებული', 'დამაკმაყოფილებელი', 'დამონტაჟებულია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'არაა ნაგავი გატანილი', 'დიახ', 'დიახ', '', '', '', '', '', '', '', '', '', '', '', '', 'დაზიანებულია', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 'ლისი 117', '7', '117', '18-11-21 12:16:48', 'გიგო ჩოკორაია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დამაკმაყოფილებელია', 'დიახ', 'არ არის დაზიანებული', 'დამაკმაყოფილებელი', 'დამონტაჟებულია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დასუფთავებულია', 'დიახ', 'არა', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'დასამონტაჟებელია', '', ''),
(28, 'ლისი 118', '7', '118', '18-11-21 12:17:14', 'გიგო ჩოკორაია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დამაკმაყოფილებელია', 'დიახ', 'არ არის დაზიანებული', 'დამაკმაყოფილებელი', 'დამონტაჟებულია', 'არა', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'ნაგავი გატანილია+დასუფთავებულია', 'დიახ', 'დიახ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 'ლისი 119', '7', '119', '18-11-21 12:14:56', 'გიგო ჩოკორაია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დამაკმაყოფილებელია', 'დიახ', 'არ არის დაზიანებული', 'დამაკმაყოფილებელი', 'დამონტაჟებულია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დასუფთავებულია', 'დიახ', 'დიახ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 'ლისი 120', '7', '120', '18-11-21 12:15:06', 'გიგო ჩოკორაია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დამაკმაყოფილებელია', 'დიახ', 'არ არის დაზიანებული', 'დამაკმაყოფილებელი', 'დამონტაჟებულია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დასუფთავებულია', 'დიახ', 'დიახ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 'ლისი 121', '7', '121', '18-11-21 12:15:27', 'გიგო ჩოკორაია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დამაკმაყოფილებელია', 'დიახ', 'არ არის დაზიანებული', 'არა დამაკმაყოფილებელი', 'დამონტაჟებულია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დასუფთავებულია', 'დიახ', 'არა', '', '', '', '', '', '', '', '', '', '', '', 'აჭრელებულია', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 'ლისი 122', '7', '122', '18-11-21 12:15:42', 'გიგო ჩოკორაია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დამაკმაყოფილებელია', 'დიახ', 'არ არის დაზიანებული', 'დამაკმაყოფილებელი', 'დამონტაჟებულია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'არა', 'დიახ', 'დიახ', 'დიახ', 'არაა ნაგავი გატანილი', 'დიახ', 'არა', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'საშრობი წერტილი არ არის ვანაში', '', '', '', 'აივანი დასასუფთავებელია', '', '', '', ''),
(33, 'ლისი 123', '7', '123', '18-11-21 12:15:53', 'გიგო ჩოკორაია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დამაკმაყოფილებელია', 'დიახ', 'არ არის დაზიანებული', 'დამაკმაყოფილებელი', 'დამონტაჟებულია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'არაა ნაგავი გატანილი', 'დიახ', 'არა', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'აივანი დასასუფთავებელია', '', '', '', ''),
(34, 'ლისი 125', '7', '125', '18-11-21 12:16:02', 'გიგო ჩოკორაია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დამაკმაყოფილებელია', 'დიახ', 'არ არის დაზიანებული', 'დამაკმაყოფილებელი', 'დამონტაჟებულია', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'დიახ', 'არაა ნაგავი გატანილი', 'დიახ', 'დიახ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ვანაში 50-იანი მილი არასწორად აყენია.', '', '', '', 'აივანი დასასუფთავებელია', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arqi_checklists`
--
ALTER TABLE `arqi_checklists`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arqi_checklists`
--
ALTER TABLE `arqi_checklists`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
