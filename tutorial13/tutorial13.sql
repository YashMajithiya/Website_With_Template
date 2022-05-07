-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 08:28 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u193768258_garaldham`
--

-- --------------------------------------------------------

--
-- Table structure for table `gd_events`
--

CREATE TABLE `gd_events` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `small_desc` text DEFAULT NULL,
  `detail_desc` text DEFAULT NULL,
  `galleryid` int(11) NOT NULL DEFAULT 0,
  `photo_url` varchar(255) DEFAULT NULL,
  `isdelete` int(1) NOT NULL DEFAULT 0,
  `updated_by` int(11) DEFAULT 0,
  `updated_on` varchar(30) DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT 0,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gd_events`
--

INSERT INTO `gd_events` (`id`, `title`, `small_desc`, `detail_desc`, `galleryid`, `photo_url`, `isdelete`, `updated_by`, `updated_on`, `created_by`, `created_on`) VALUES
(1, 'Event 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 0, 'albums/events_5501_causes4.jpg', 0, 0, '2019-12-11 15:05:21', 0, '2019-12-11 09:35:21'),
(2, 'Event 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 0, 'albums/events_4967_causes1.jpg', 0, 0, '2019-12-11 15:04:31', 0, '2019-12-11 09:34:31'),
(3, 'Patotsav 2019', 'Patotsav 2019', 'Patotsav 2019', 0, 'albums/events_1598_dsc4981copy.jpg', 0, 0, '2020-02-29 22:27:24', 0, '2020-03-01 05:27:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gd_events`
--
ALTER TABLE `gd_events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gd_events`
--
ALTER TABLE `gd_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
