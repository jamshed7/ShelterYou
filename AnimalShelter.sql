-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 21, 2019 at 07:45 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ANIMAL_SHELTER`
--

-- --------------------------------------------------------

--
-- Table structure for table `ADMIN`
--

CREATE TABLE `ADMIN` (
  `Profile_ID` int(11) NOT NULL,
  `SSN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ADOPTION`
--

CREATE TABLE `ADOPTION` (
  `Adopter_ID` int(11) NOT NULL,
  `Adopted_animal_info` int(11) NOT NULL,
  `Adoption_date` datetime NOT NULL,
  `Adoption_fee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ANIMAL`
--

CREATE TABLE `ANIMAL` (
  `Animal_ID` int(11) NOT NULL,
  `Animal_type` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Size` varchar(10) NOT NULL,
  `Breed` varchar(50) NOT NULL,
  `Color` varchar(20) NOT NULL,
  `Posted_date` datetime NOT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `Is_available` tinyint(1) NOT NULL,
  `Num_of_likes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `DONATION`
--

CREATE TABLE `DONATION` (
  `Donator_ID` int(11) NOT NULL,
  `Donation_date` datetime NOT NULL,
  `Donation_amount` varchar(100) NOT NULL,
  `Donatee_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `GUEST`
--

CREATE TABLE `GUEST` (
  `Profile_ID` int(11) NOT NULL,
  `home_Type` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `HORSE`
--

CREATE TABLE `HORSE` (
  `Animal_ID` int(11) NOT NULL,
  `is_raceHorse` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `INQUIRY`
--

CREATE TABLE `INQUIRY` (
  `Sender_ID` int(11) NOT NULL,
  `Animal_Info` int(11) NOT NULL,
  `Inquiry_question` varchar(200) DEFAULT NULL,
  `Inquiry_answer` varchar(200) DEFAULT NULL,
  `Inquiry_date` datetime DEFAULT NULL,
  `Answered_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `LIKES`
--

CREATE TABLE `LIKES` (
  `Liked_Animal_ID` int(11) NOT NULL,
  `Number_of_Likes` int(11) DEFAULT NULL,
  `Liked_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `PROFILE`
--

CREATE TABLE `PROFILE` (
  `Profile_ID` int(11) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Profile_type` varchar(20) NOT NULL,
  `Mobile_Number` char(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(12) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Join_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `SNAKE`
--

CREATE TABLE `SNAKE` (
  `Animal_ID` int(11) NOT NULL,
  `is_Poisonous` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ADMIN`
--
ALTER TABLE `ADMIN`
  ADD UNIQUE KEY `Profile_ID` (`Profile_ID`),
  ADD UNIQUE KEY `SSN` (`SSN`);

--
-- Indexes for table `ADOPTION`
--
ALTER TABLE `ADOPTION`
  ADD PRIMARY KEY (`Adopter_ID`),
  ADD UNIQUE KEY `Adopter_ID` (`Adopter_ID`),
  ADD UNIQUE KEY `Adopted_animal_info` (`Adopted_animal_info`);

--
-- Indexes for table `ANIMAL`
--
ALTER TABLE `ANIMAL`
  ADD PRIMARY KEY (`Animal_ID`),
  ADD UNIQUE KEY `Animal_ID` (`Animal_ID`);

--
-- Indexes for table `DONATION`
--
ALTER TABLE `DONATION`
  ADD KEY `Donator_ID` (`Donator_ID`),
  ADD KEY `Donatee_ID` (`Donatee_ID`);

--
-- Indexes for table `GUEST`
--
ALTER TABLE `GUEST`
  ADD UNIQUE KEY `Profile_ID` (`Profile_ID`);

--
-- Indexes for table `HORSE`
--
ALTER TABLE `HORSE`
  ADD UNIQUE KEY `Animal_ID` (`Animal_ID`);

--
-- Indexes for table `INQUIRY`
--
ALTER TABLE `INQUIRY`
  ADD KEY `Sender_ID` (`Sender_ID`),
  ADD KEY `Animal_Info` (`Animal_Info`),
  ADD KEY `Answered_by` (`Answered_by`);

--
-- Indexes for table `LIKES`
--
ALTER TABLE `LIKES`
  ADD PRIMARY KEY (`Liked_Animal_ID`),
  ADD KEY `Liked_by` (`Liked_by`);

--
-- Indexes for table `PROFILE`
--
ALTER TABLE `PROFILE`
  ADD PRIMARY KEY (`Profile_ID`),
  ADD UNIQUE KEY `Profile_ID` (`Profile_ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `SNAKE`
--
ALTER TABLE `SNAKE`
  ADD UNIQUE KEY `Animal_ID` (`Animal_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ADMIN`
--
ALTER TABLE `ADMIN`
  MODIFY `Profile_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ANIMAL`
--
ALTER TABLE `ANIMAL`
  MODIFY `Animal_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `GUEST`
--
ALTER TABLE `GUEST`
  MODIFY `Profile_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `HORSE`
--
ALTER TABLE `HORSE`
  MODIFY `Animal_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PROFILE`
--
ALTER TABLE `PROFILE`
  MODIFY `Profile_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `SNAKE`
--
ALTER TABLE `SNAKE`
  MODIFY `Animal_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ADOPTION`
--
ALTER TABLE `ADOPTION`
  ADD CONSTRAINT `adoption_ibfk_1` FOREIGN KEY (`Adopter_ID`) REFERENCES `PROFILE` (`Profile_ID`),
  ADD CONSTRAINT `adoption_ibfk_2` FOREIGN KEY (`Adopted_animal_info`) REFERENCES `ANIMAL` (`Animal_ID`);

--
-- Constraints for table `DONATION`
--
ALTER TABLE `DONATION`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`Donator_ID`) REFERENCES `GUEST` (`Profile_ID`),
  ADD CONSTRAINT `donation_ibfk_2` FOREIGN KEY (`Donatee_ID`) REFERENCES `ANIMAL` (`Animal_ID`);

--
-- Constraints for table `INQUIRY`
--
ALTER TABLE `INQUIRY`
  ADD CONSTRAINT `inquiry_ibfk_1` FOREIGN KEY (`Sender_ID`) REFERENCES `GUEST` (`Profile_ID`),
  ADD CONSTRAINT `inquiry_ibfk_2` FOREIGN KEY (`Animal_Info`) REFERENCES `ANIMAL` (`Animal_ID`),
  ADD CONSTRAINT `inquiry_ibfk_3` FOREIGN KEY (`Answered_by`) REFERENCES `ADMIN` (`Profile_ID`);

--
-- Constraints for table `LIKES`
--
ALTER TABLE `LIKES`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`Liked_Animal_ID`) REFERENCES `ANIMAL` (`Animal_ID`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`Liked_by`) REFERENCES `GUEST` (`Profile_ID`);