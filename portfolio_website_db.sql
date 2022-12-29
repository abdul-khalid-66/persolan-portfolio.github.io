-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 07:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_website_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_section_2`
--

CREATE TABLE `about_section_2` (
  `name` varchar(100) NOT NULL,
  `abo_h_skill` varchar(255) NOT NULL,
  `about_h_disc` varchar(255) NOT NULL,
  `brithday` date NOT NULL,
  `age` varchar(100) NOT NULL,
  `website` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `phon` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `freecance` enum('awailable','notawailable') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_section_2`
--

INSERT INTO `about_section_2` (`name`, `abo_h_skill`, `about_h_disc`, `brithday`, `age`, `website`, `email`, `degree`, `phon`, `address`, `freecance`) VALUES
('Abdul khalid', 'FullStack Developer', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores, nam! Neque fugiat voluptate dolores sapiente ullam placeat. Iusto quia aliquam velit reiciendis dicta error pariatur, voluptatem eaque vitae voluptates repudiandae?', '1996-06-13', '25+', 'khalidmsd.000webhostapp.com', 'abdulkhalidmasood@gmail.com', 'Computer Science', '03443457961', 'Asadabad colony site area kotri', 'notawailable');

-- --------------------------------------------------------

--
-- Table structure for table `home_section_1`
--

CREATE TABLE `home_section_1` (
  `name` varchar(255) NOT NULL,
  `skill_1` varchar(255) NOT NULL,
  `skill_2` varchar(255) NOT NULL,
  `h_disc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_section_1`
--

INSERT INTO `home_section_1` (`name`, `skill_1`, `skill_2`, `h_disc`) VALUES
('Abdul Khalid', 'Full Stack Developer', '', 'I\'m a web Developer with extensive experience for over 10 years. my expertise is to create and website desing ,development, grapic design, and many more...');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
