-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 03:36 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoholics`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints_table`
--

CREATE TABLE `complaints_table` (
  `NAME` varchar(50) NOT NULL,
  `SUBJECT` varchar(100) NOT NULL,
  `CATEGORY` varchar(20) NOT NULL,
  `COMPLAINT` varchar(2000) NOT NULL,
  `DISTRICT` varchar(50) NOT NULL,
  `CITY` varchar(50) NOT NULL,
  `PHONE` varchar(15) NOT NULL,
  `COMPLAINED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints_table`
--

INSERT INTO `complaints_table` (`NAME`, `SUBJECT`, `CATEGORY`, `COMPLAINT`, `DISTRICT`, `CITY`, `PHONE`, `COMPLAINED_AT`) VALUES
('Karthick', 'UnWired Turnouts in my Area', 'electricity', '\r\nRespected Sir,\r\n\r\nI wish to draw your attention to the fact that unwired turnouts have been lying exposed since some months in our colony Vivek Nagar near the post office play ground. Some workers from your department visited the playground to carry out repairs and left the place littered with wires. Many residents have expressed great fear that any day their children playing in the ground may tread on these wires and get electrocuted.\r\n\r\nKindly take immediate action.We are waiting for your kind consideration.\r\n', 'Kanchipuram', 'Anakaputhur', '7448632621', '2018-09-11 21:40:52'),
('Karthick', 'Irregular Bus Service in my district.', 'transport', 'Sir,\r\nI want to draw your kind attention of the irregular bus service with this district. The passengers face hardships since the buses are never punctually.The drivers and conductors are generally so careless that they never stop the bus even though  there isÂ accommodationÂ inside.Â Week ago, a young girl getting work done in a school received injuries while alighting as the conductor in his haste whistled and also the driver in his eagerness moved the bus.\r\n\r\nI, therefore request you to check out the matter. More buses should be placed on road. The useless ones need to be written off. It isnâ€™t a use plying buses within the crowded streets, which break down in the manner and create traffic jams.\r\nI am sure that you will take will take early making the bus service more great for the public.\r\n', 'Kanchipuram', 'Anakaputhur', '7448632621', '2018-09-11 21:42:12'),
('Raguraman', 'Regarding Frequent breakdowns of electricity.', 'electricity', 'Sir,\r\nMay possibly I draw your kind attention about the frequent breakdowns of electricity in this locality and the wonderful inconvenience it causes to the residents! Ours is not really a new locality.It got electricity connections many years back. It appears, even so, that the engineer in -charge from the sub-station has not correctly checked the installations and in-spite from the new wires and energy appliances used, there are failures regarding electricity several times in a day. Sometimes, the current is turned off for several hours in a very stretch.Students suffer greatly and cannot maintain study.\r\nI request you, therefore, to see that the power plant and other section at the place is thoroughly checked so that there is no chance of the failure of power supply in future.Kindly take immediate action.We are waiting for your kind consideration.\r\n', 'kanchipuram', 'kanchipuram', '9787649325', '2018-09-11 21:47:24'),
('Raguraman', 'Rudeness of transport employee', 'transport', 'Sir,\r\n\r\nI wish to draw your attention to the fact that Route No 500A Bus driver and Conductor behaving rudely to passengers and Not responding Properly to anyone in the bus.\r\nThey are treating Even kids and Senior Citizens.  \r\n\r\nKindly take immediate action.We are waiting for your kind consideration.\r\n\r\n', 'kanchipuram', 'kanchipuram', '9787649325', '2018-09-11 21:48:12'),
('Rakesh', 'Missing of Two-Wheeler', 'safety', 'sir,\r\nI parked my Two-Wheeler in front of my home and also I locked my bike.When I came out after some time, I was shocked to see my bike gone. It had been stolen. I searched for it and enquired the people in my locality. It was of no use.\r\nLast week also our area had a same incident like this.To Stop this,I request You to take Necessary action. \r\n\r\nMy bike was Yamaha cbr100 Its number was TN31 A 2345.It was a red â€“ coloured biKE.\r\n\r\nMay I request you to help me to recover it?\r\n', 'cuddalore', 'chidambaram', '9003754385', '2018-09-11 21:49:57'),
('Rakesh', 'Local bar running near school.', 'safety', 'Sir,\r\n\r\nI wish to draw your attention to the fact that in our locality near school a local bar is working daily.It Annoys the Peoples Who Passesby ,Surrounding people are always scared about drunkers.Some of the Students are getting diverted too.Please Seal the Bar With necessary action.\r\n\r\nKindly take immediate action.We are waiting for your kind consideration.\r\n\r\n', 'cuddalore', 'chidambaram', '9003754385', '2018-09-11 21:50:45'),
('Rakesh', 'Misfunctioning of Govt School.', 'public', 'Sir,\r\n\r\nI wish to file a complaint that government school in our area is not functioning properly.Students from our area are facing Many Issues In Schools.Basic Requirements is Also Missing Here.Since,this is a government-aided School,I request you to take immediate action.\r\n', 'cuddalore', 'chidambaram', '9003754385', '2018-09-11 21:51:41'),
('Rajadurai', 'Regarding Govt Hospital Environment.', 'medical', ' Sir,\r\n\r\nI wish to file a complaint that government hospital in our area is not functioning properly.Environmental  quality is very poor in hospital.Environment and Surroundings is main thing for being hygeinic in hospital.More Out patient wards and beds should be added.Many Patients Facing this issues.Since,this is a government-Hospital and many people are depending on this hospital,I request you to take immediate action.', 'cuddalore', 'cuddalore', '9566469333', '2018-09-11 21:53:02'),
('Rajadurai', 'Irregular Water Suppy', 'others', 'Sir,\r\n\r\nI want to draw your kind attention of the irregular water service with this area. The people who lives here  face hardships since the water tanker suppliers  are  failed to supply   water in our locality.we are Getting Water Service from  water tanker suppliers because of no underground water in our area,and we have only 2 pipes for 100 families.\r\n\r\n\r\nI, therefore request you to check out the matter. More pipes should be fitted on our locality. The water tanker suppliers should be punctual in their duty.  \r\nI am sure that you will take will take early making the Water service more great for the public.\r\n', 'cuddalore', 'cuddalore', '9566469333', '2018-09-11 21:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `NAME` text NOT NULL,
  `CITY` text NOT NULL,
  `DISTRICT` text NOT NULL,
  `PHONE` varchar(15) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `AADHAR_ID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`NAME`, `CITY`, `DISTRICT`, `PHONE`, `EMAIL`, `AADHAR_ID`) VALUES
('Karthick', 'Anakaputhur', 'Kanchipuram', '7448632621', 'karthikn2099@gmail.com', 12345678),
('Rajadurai', 'cuddalore', 'cuddalore', '9566469333', 'ckrajadurai7@gmail.com', 56781234),
('Rakesh', 'chidambaram', 'cuddalore', '9003754385', 'rakeshelamaran98@gmail.com', 43218765),
('Raguraman', 'kanchipuram', 'kanchipuram', '9787649325', 'ragu741721@gmail.com', 87654321);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
