-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 08:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jasline`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE `academics` (
  `id` int(11) NOT NULL,
  `Best_Student_Academics` varchar(100) NOT NULL,
  `Best_Honorable` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `messagee` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `id` int(11) NOT NULL,
  `Best_news_act` varchar(100) NOT NULL,
  `Artist_of_the_year` varchar(100) NOT NULL,
  `DJ_of_the_year` varchar(100) NOT NULL,
  `Entertainment_personality` varchar(100) NOT NULL,
  `Entertainment_brand_of_the_year` varchar(100) NOT NULL,
  `Music_producer_of_the_year` varchar(100) NOT NULL,
  `Best_dancer` varchar(100) NOT NULL,
  `Next_rated_act` varchar(100) NOT NULL,
  `Rap_artist_of_the_year` varchar(100) NOT NULL,
  `Most_promising_entertainment_personality` varchar(100) NOT NULL,
  `Best_use_of_social_media` varchar(100) NOT NULL,
  `Event_organizer_of_the_year` varchar(100) NOT NULL,
  `Online_comedy_platform` varchar(100) NOT NULL,
  `Comedian_of_the_year` varchar(200) NOT NULL,
  `PR_of_the_year` varchar(200) NOT NULL,
  `Social_media_influencer_of_the_year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `entreprenuer`
--

CREATE TABLE `entreprenuer` (
  `id` int(11) NOT NULL,
  `Clothier_of_the_year` varchar(100) NOT NULL,
  `Most_Enterprising_Student` varchar(100) NOT NULL,
  `CEO_of_the_Year` varchar(100) NOT NULL,
  `Make_up_artist_of_the_year` varchar(100) NOT NULL,
  `Student_Brand_of_the_year` varchar(100) NOT NULL,
  `Graphics_Designer_of_the_year` varchar(100) NOT NULL,
  `Most_Creative_student` varchar(100) NOT NULL,
  `Photographer_of_the_year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fresh_students`
--

CREATE TABLE `fresh_students` (
  `id` int(11) NOT NULL,
  `Rookie_of_the_year_M` varchar(100) NOT NULL,
  `Rookie_of_the_year_F` varchar(100) NOT NULL,
  `Best_new_student_M` varchar(100) NOT NULL,
  `Best_new_student_F` varchar(100) NOT NULL,
  `Next_rated_artist` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `id` int(11) NOT NULL,
  `Most_popular_M` varchar(100) NOT NULL,
  `Most_popular_F` varchar(100) NOT NULL,
  `Sport_man_of_the_year` varchar(100) NOT NULL,
  `Most_fashionable_M` varchar(100) NOT NULL,
  `Most_fashionable_F` varchar(100) NOT NULL,
  `Mr_personality` varchar(100) NOT NULL,
  `miss_personality` varchar(100) NOT NULL,
  `Perfect_gentleman` varchar(100) NOT NULL,
  `Most_reserved_M` varchar(100) NOT NULL,
  `Most_reserved_F` varchar(100) NOT NULL,
  `Best_dressed_M` varchar(100) NOT NULL,
  `Best_dressed_F` varchar(100) NOT NULL,
  `Miss_petit` varchar(100) NOT NULL,
  `Big_bold_and_beautiful` varchar(100) NOT NULL,
  `Miss_ebony` varchar(100) NOT NULL,
  `Most_beautiful` varchar(100) NOT NULL,
  `Most_handsome` varchar(100) NOT NULL,
  `Most_expensive` varchar(100) NOT NULL,
  `Money_bag` varchar(100) NOT NULL,
  `Man_of_the_year` varchar(100) NOT NULL,
  `Unsung_hero` varchar(100) NOT NULL,
  `Best_clique` varchar(100) NOT NULL,
  `Political_icon` varchar(100) NOT NULL,
  `Brand_influencer` varchar(100) NOT NULL,
  `Most_influential_student_M` varchar(100) NOT NULL,
  `Most_influential_student_F` varchar(100) NOT NULL,
  `Most_sophisticated_student_M` varchar(100) NOT NULL,
  `Most_sophisticated_student_F` varchar(100) NOT NULL,
  `Best_automobile` varchar(100) NOT NULL,
  `Model_of_the_year` varchar(100) NOT NULL,
  `Miss_photogenic` varchar(100) NOT NULL,
  `Most_sought_after_M` varchar(100) NOT NULL,
  `Most_sought_after_F` varchar(100) NOT NULL,
  `Golden_boy` varchar(100) NOT NULL,
  `YAGI` varchar(100) NOT NULL,
  `Revelation` varchar(100) NOT NULL,
  `Hour_glass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nominees`
--

CREATE TABLE `nominees` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `sub_category` varchar(200) NOT NULL,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nominees`
--

INSERT INTO `nominees` (`id`, `name`, `category`, `sub_category`, `votes`) VALUES
(1, 'Nill', 'General', 'Most Popular M', 0),
(2, 'Nill', 'General', 'Most Popular F', 0),
(3, 'Nill', 'General', 'Sport Man', 0),
(4, 'Nill', 'General', 'Most Fashionable F', 0),
(5, 'Nill', 'General', 'Most Fashionable M', 0),
(6, 'Nill', 'General', 'Mr Personality', 0),
(7, 'Nill', 'General', 'Miss Personality', 0),
(8, 'Nill', 'General', 'Perfect gentleman', 0),
(9, 'Nill', 'General', 'Most reserved M', 0),
(10, 'Nill', 'General', 'Most reserved F', 0),
(11, 'Nill', 'General', 'Best dressed M', 0),
(12, 'Nill', 'General', 'Best dressed F', 0),
(13, 'Nill', 'General', 'Miss petit', 0),
(14, 'Nill', 'General', 'Big bold and beautiful', 0),
(15, 'Nill', 'General', 'Miss ebony', 0),
(16, 'Nill', 'General', 'Most beautiful', 0),
(17, 'Nill', 'General', 'Most handsome', 0),
(18, 'Nill', 'General', 'Most expensive', 0),
(19, 'Nill', 'General', 'Money bag', 0),
(20, 'Nill', 'General', 'Man of the year', 0),
(21, 'Nill', 'General', 'Unsung hero', 0),
(22, 'Nill', 'General', 'Best clique', 0),
(23, 'Nill', 'General', 'Political icon', 0),
(24, 'Nill', 'General', 'Brand influencer', 0),
(25, 'Nill', 'General', 'Most influential M', 0),
(26, 'Nill', 'General', 'Most influential F', 0),
(27, 'Nill', 'General', 'Most sophisticated M', 0),
(28, 'Nill', 'General', 'Most sophisticated F', 0),
(29, 'Nill', 'General', 'Best automobile', 0),
(30, 'Nill', 'General', 'Model of the year', 0),
(31, 'Nill', 'General', 'Miss photogenic', 0),
(32, 'Nill', 'General', 'Most sought after M', 0),
(33, 'Nill', 'General', 'Most sought after F', 0),
(34, 'Nill', 'General', 'YAGI', 0),
(35, 'Nill', 'General', 'Revelation', 0),
(36, 'Nill', 'General', 'Hour Glass', 0),
(38, 'Nill', 'General', 'Golden boy', 0),
(39, 'Nill', 'Fresh Student', 'Rookie Female', 0),
(40, 'Nill', 'Fresh Student', 'Rookie Male', 0),
(41, 'Nill', 'Fresh Student', 'Best New Student F', 0),
(42, 'Nill', 'Fresh Student', 'Best New Student M', 0),
(43, 'Nill', 'Fresh Student', 'Next Rated Artist', 0),
(44, 'Nill', 'Entertainment', 'Best News Act', 0),
(45, 'Nill', 'Entertainment', 'Artist of the Year', 0),
(46, 'Nill', 'Entertainment', 'DJ of the Year', 0),
(47, 'Nill', 'Entertainment', 'Entertainment Personality', 0),
(48, 'Nill', 'Entertainment', 'Entertainment Brand', 0),
(49, 'Nill', 'Entertainment', 'Music Producer', 0),
(50, 'Nill', 'Entertainment', 'Best Dancer', 0),
(51, 'Nill', 'Entertainment', 'Next Rated Act', 0),
(52, 'Nill', 'Entertainment', 'Rap Artist of the Year', 0),
(53, 'Nill', 'Entertainment', 'Most Promising Entertainment Personality', 0),
(54, 'Nill', 'Entertainment', 'Best Use of Social Media', 0),
(55, 'Nill', 'Entertainment', 'Event Organizer of the Year', 0),
(56, 'Nill', 'Entertainment', 'Online Comedy Platform', 0),
(57, 'Nill', 'Entertainment', 'Comedian of the Year', 0),
(58, 'Nill', 'Entertainment', 'PR of the Year', 0),
(59, 'Nill', 'Entertainment', 'Social Media Influencer of the Year', 0),
(60, 'Nill', 'Special Recognition', 'Hall of Fame', 0),
(61, 'Nill', 'Entreprenuer', 'Clothier', 0),
(62, 'Nill', 'Entreprenuer', 'Most Enterprising Student', 0),
(64, 'Nill', 'Entreprenuer', 'CEO of the Year', 0),
(65, 'Nill', 'Entreprenuer', 'Make Up Artist', 0),
(66, 'Nill', 'Entreprenuer', 'Student Brand', 0),
(67, 'Nill', 'Entreprenuer', 'Graphics Designer', 0),
(68, 'Nill', 'Entreprenuer', 'Most Creative Student', 0),
(69, 'Nill', 'Entreprenuer', 'Photographer', 0),
(70, 'Nill', 'Academics', 'Best Student', 0),
(71, 'Nill', 'Academics', 'Best Honorable', 0);

-- --------------------------------------------------------

--
-- Table structure for table `special_recognition`
--

CREATE TABLE `special_recognition` (
  `id` int(11) NOT NULL,
  `Hall_of_fame` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `special_recognition`
--

INSERT INTO `special_recognition` (`id`, `Hall_of_fame`) VALUES
(1, 'Bimbo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academics`
--
ALTER TABLE `academics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entreprenuer`
--
ALTER TABLE `entreprenuer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fresh_students`
--
ALTER TABLE `fresh_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nominees`
--
ALTER TABLE `nominees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_recognition`
--
ALTER TABLE `special_recognition`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academics`
--
ALTER TABLE `academics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entreprenuer`
--
ALTER TABLE `entreprenuer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fresh_students`
--
ALTER TABLE `fresh_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nominees`
--
ALTER TABLE `nominees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `special_recognition`
--
ALTER TABLE `special_recognition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
