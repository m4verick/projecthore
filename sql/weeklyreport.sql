-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2016 at 10:22 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weeklyreport`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `gameid` int(11) NOT NULL,
  `game_title` text NOT NULL,
  `slot_type` int(11) NOT NULL,
  `upd_n` int(11) NOT NULL,
  `platform` int(11) NOT NULL,
  `local_producer` int(11) NOT NULL,
  `hq_prod` text NOT NULL,
  `local_deadline` date NOT NULL,
  `ios_deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`gameid`, `game_title`, `slot_type`, `upd_n`, `platform`, `local_producer`, `hq_prod`, `local_deadline`, `ios_deadline`) VALUES
(1, 'Country Friends', 1, 1, 2, 1, 'Guillaume Something', '2016-01-15', '2016-01-15'),
(13, 'Test 1', 2, 12, 2, 1, 'ola', '0000-00-00', '0000-00-00'),
(14, 'Test 1', 2, 12, 2, 1, 'ola', '0000-00-00', '0000-00-00'),
(15, 'Test 1', 2, 12, 2, 1, 'ola', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `needattention`
--

CREATE TABLE `needattention` (
  `attentionid` int(11) NOT NULL,
  `attention_text` text NOT NULL,
  `gameid` int(11) NOT NULL,
  `reportid` int(11) NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `producers`
--

CREATE TABLE `producers` (
  `prod_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `prg_alloc` int(11) NOT NULL,
  `qa_alloc` int(11) NOT NULL,
  `gd_alloc` int(11) NOT NULL,
  `gfx_alloc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producers`
--

INSERT INTO `producers` (`prod_id`, `name`, `password`, `prg_alloc`, `qa_alloc`, `gd_alloc`, `gfx_alloc`) VALUES
(1, 'Theresia Suwono', 'nana', 8, 15, 1, 1),
(2, 'Yoga Permana', '123445', 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `risks_solutions`
--

CREATE TABLE `risks_solutions` (
  `risk_id` int(11) NOT NULL,
  `reportid` int(11) NOT NULL,
  `gameid` int(11) NOT NULL,
  `risk` text NOT NULL,
  `likelyhood` int(11) NOT NULL,
  `impact` int(11) NOT NULL,
  `consequense` text NOT NULL,
  `solution` text NOT NULL,
  `eta` date NOT NULL,
  `situation` text NOT NULL,
  `status` int(11) NOT NULL,
  `attention` text NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `risks_solutions`
--

INSERT INTO `risks_solutions` (`risk_id`, `reportid`, `gameid`, `risk`, `likelyhood`, `impact`, `consequense`, `solution`, `eta`, `situation`, `status`, `attention`, `creation_date`) VALUES
(1, 0, 1, 'risks', 2, 2, 'There are some', 'i dont know', '0000-00-00', 'situations', 1, 'attention', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `situation`
--

CREATE TABLE `situation` (
  `situationid` int(11) NOT NULL,
  `reportid` int(11) NOT NULL,
  `gameid` int(11) NOT NULL,
  `situation` text NOT NULL,
  `status` int(11) NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`gameid`);

--
-- Indexes for table `needattention`
--
ALTER TABLE `needattention`
  ADD PRIMARY KEY (`attentionid`);

--
-- Indexes for table `producers`
--
ALTER TABLE `producers`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `risks_solutions`
--
ALTER TABLE `risks_solutions`
  ADD PRIMARY KEY (`risk_id`);

--
-- Indexes for table `situation`
--
ALTER TABLE `situation`
  ADD PRIMARY KEY (`situationid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `gameid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `needattention`
--
ALTER TABLE `needattention`
  MODIFY `attentionid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `producers`
--
ALTER TABLE `producers`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `risks_solutions`
--
ALTER TABLE `risks_solutions`
  MODIFY `risk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `situation`
--
ALTER TABLE `situation`
  MODIFY `situationid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
