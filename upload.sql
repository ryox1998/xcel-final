-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2020 at 07:21 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `conut_no` int(11) NOT NULL,
  `apply_date` date NOT NULL,
  `stage` varchar(100) NOT NULL,
  `groupp` varchar(100) NOT NULL,
  `app_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(300) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `native_country` varchar(200) NOT NULL,
  `code` varchar(50) NOT NULL,
  `agree_accept` varchar(50) NOT NULL,
  `confirm_age` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `new_old` varchar(10) NOT NULL,
  `10_d` int(11) NOT NULL,
  `dw` varchar(100) NOT NULL,
  `date_of_first_course` varchar(100) NOT NULL,
  `first_center` varchar(300) NOT NULL,
  `last_center` varchar(300) NOT NULL,
  `date_of_last_course` varchar(100) NOT NULL,
  `residence_country` varchar(100) NOT NULL,
  `primary_language` varchar(100) NOT NULL,
  `sent_qe` varchar(300) NOT NULL,
  `reply_qe` varchar(300) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `other_technique` varchar(500) NOT NULL,
  `other_technique_2` varchar(500) NOT NULL,
  `pregnant` varchar(200) NOT NULL,
  `physical_health_problems` varchar(500) NOT NULL,
  `mental_health_problems` varchar(500) NOT NULL,
  `medication` varchar(300) NOT NULL,
  `intoxicant` varchar(500) NOT NULL,
  `other_info` varchar(500) NOT NULL,
  `follower` varchar(200) NOT NULL,
  `approve` varchar(10) NOT NULL,
  `manual` varchar(500) NOT NULL,
  `note` varchar(500) NOT NULL,
  `note_team` varchar(500) NOT NULL,
  `note_at` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `conut_no`, `apply_date`, `stage`, `groupp`, `app_id`, `email`, `name`, `gender`, `date_of_birth`, `native_country`, `code`, `agree_accept`, `confirm_age`, `age`, `new_old`, `10_d`, `dw`, `date_of_first_course`, `first_center`, `last_center`, `date_of_last_course`, `residence_country`, `primary_language`, `sent_qe`, `reply_qe`, `occupation`, `other_technique`, `other_technique_2`, `pregnant`, `physical_health_problems`, `mental_health_problems`, `medication`, `intoxicant`, `other_info`, `follower`, `approve`, `manual`, `note`, `note_team`, `note_at`) VALUES
(661, 1, '2019-06-27', '10. Got Reply Final Confirm Back', 'Yes', 'OSA--1561659738', 'Yes_Female', 'Anna_Tikhonova', 'tihoana@gm', '0000-00-00', '34', 'Yes', 'Russia', 0, 0, '', 0, '', '', '', '2019/07/13', '2019/07/13', 'Yes', 'Yes', '', '', '', '2019/11/27', '', '2019/11/27', 'If it possible, could I have the front seat near the window? It’s important for me, because otherwise I will get seasick :) Thanks!', '', '', '', '', '', '', '', '', '', ''),
(662, 2, '2019-06-27', '9. Sent Final Confirm', 'Yes', 'OSA--1561660209', 'No_Male', 'Aleksandr_Akhmedov', '7870141@gm', '0000-00-00', '31', 'No', 'Russia', 0, 0, '', 0, '', '', '', '2019/07/13', '2019/07/13', 'Yes', 'Yes', '', '', '', '2019/11/27', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(663, 3, '2019-06-27', 'Pending Review Code', '', 'OSA--1561671555', 'Yes_Female', 'ANASTASIIA_ZHITENSKAIA', 'a.zhitensk', '0000-00-00', '35', 'Yes', 'Russia', 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(664, 4, '2019-06-27', 'Sent Cancel', 'Yes', 'OSA--1561674471', 'Yes_Male', 'STANISLAV_ZHITENSKII', 'zhitenskii', '0000-00-00', '35', 'Yes', 'Russia', 0, 0, '', 0, '', '', '', '2019/07/14', '', 'Yes', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(665, 5, '2019-06-28', 'Pending Review Code', '', 'OSA--1561700311', 'Yes_Male', 'Andreas_Laufer', 'andreas.la', '0000-00-00', '52', 'Yes', 'Austria', 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(666, 6, '2019-06-28', 'Sent Cancel', 'Yes', 'OSA--1561712822', 'Yes_Female', 'Elizabeth_Singh', 'lisabethsi', '0000-00-00', '47', 'Yes', 'United Kingdom', 0, 0, '', 0, '', '', '', '2019/07/12', '', 'Yes', 'No', '', '', 'I would actually prefer to book a pick up and return to kanchanaburi.. I am planning to go to Chiant', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(667, 7, '2019-06-29', 'Completed', 'Completed', 'OSA--1561798830', 'No_Female', 'Ilona_Bercha', 'Bercha.ilo', '0000-00-00', '32', 'No', 'Italy', 0, 0, '', 0, '', '', '', '2019/07/12', '2019/07/12', 'Yes', 'Yes', '', '', '', '2019/11/27', '', '2019/11/27', '', '', '', '', '', '', '', '', '', '', ''),
(668, 8, '2019-06-29', '9. Sent Final Confirm', 'Yes', 'OSA--1561828338', 'Yes_Female', 'Iuliia_Shestopalova', 'jjuulliiaa', '0000-00-00', '41', 'Yes', 'Russia', 0, 0, '', 0, '', '', '', '2019/07/12', '2019/07/14', 'Yes', 'Yes', '', '', '', '2019/11/27', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(669, 9, '2019-06-29', '9. Sent Final Confirm', 'Yes', 'OSA--1561828373', 'Yes_Female', 'Olga_Monastyrskaya', 'ola_mail@b', '0000-00-00', '34', 'Yes', 'Russia', 0, 0, '', 0, '', '', '', '2019/07/12', '2019/07/12', 'No', 'No', '', '', '', '2019/11/27', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(670, 10, '2019-06-29', 'Sent Cancel', 'Yes', 'OSA--1561838885', 'No_Female', 'Seher_Kirimlioglu', 'seherkirim', '0000-00-00', '35', 'No', 'Turkey', 0, 0, '', 0, '', '', '', '2019/09/20', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(671, 11, '2019-06-30', '9. Sent Final Confirm', 'Yes', 'OSA--1561914498', 'Yes_Male', 'Nikolas_Thum', 'nikolas-th', '0000-00-00', '30', 'Yes', 'Germany', 0, 0, '', 0, '', '', '', '2019/07/14', '2019/07/16', 'Yes', 'Yes', '', '', '', '2019/11/27', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(672, 12, '2019-06-30', '9. Sent Final Confirm', 'Yes', 'OSA--1561926202', 'Yes_Male', 'Martin_Blair', 'martyblair', '0000-00-00', '53', 'Yes', 'United Kingdom', 0, 0, '', 0, '', '', '', '2019/07/13', '2019/07/13', 'Yes', 'Yes', '', '', '', '2019/11/27', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(673, 13, '2019-07-01', 'Sent Cancel', 'Yes', 'OSA--1561962542', 'No_Female', 'Silvia_Imhof', 'imhofsilvi', '0000-00-00', '60', 'No', 'Switzerland', 0, 0, '', 0, '', '', '', '2019/10/04', '', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(674, 14, '2019-07-01', 'Sent Cancel', '', 'OSA--1561967636', 'No_Male', 'SOVANRATHA_SOK', 'sok.sovanr', '0000-00-00', '24', 'No', 'Cambodia', 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(675, 15, '2019-07-02', '1. Sent LQE', '', 'OSA--1562062524', 'No_Female', 'YU BO_GAO', 'LILY7980LI', '0000-00-00', '48', 'No', 'China', 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(676, 16, '2019-07-05', '9. Sent Final Confirm', 'Yes', 'OSA--1562309504', 'No_Male', 'Santosh_Mishra', 'santoshmis', '0000-00-00', '24', 'No', 'India', 0, 0, '', 0, '', '', '', '2019/07/13', '2019/07/13', 'Yes', 'Yes', '', '', '', '2019/11/27', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(677, 17, '2019-07-07', 'Sent Cancel', 'Yes', 'OSA--1562527046', 'Yes_Female', 'Anastasiya_Zhitenskaya', 'zhitenskay', '0000-00-00', '35', 'Yes', 'Russia', 0, 0, '', 0, '', '', '', '2019/07/13', '', 'Yes', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(678, 18, '2019-07-08', '9. Sent Final Confirm', 'Yes', 'OSA--1562553563', 'No_Male', 'Saqib_Sheikh', 'saqib.m.sh', '0000-00-00', '35', 'No', 'Malaysia', 0, 0, '', 0, '', '', '', '2019/07/12', '2019/07/12', 'Yes', 'Yes', '', '', '', '2019/11/27', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(679, 19, '2019-07-08', '9. Sent Final Confirm', 'Yes', 'OSA--1562557757', 'Yes_Male', 'bruno_rinaldi', 'rinaldib@h', '0000-00-00', '48', 'Yes', 'China', 0, 0, '', 0, '', '', '', '2019/07/13', '2019/07/13', 'Yes', 'Yes', '', '', '', '2019/11/27', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(680, 20, '2019-07-09', '3. Waiting Approve', '', 'OSA--1562705663', 'No_Female', 'Iris_Epple', 'irisiepple', '0000-00-00', '26', 'No', 'Sweden', 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(681, 21, '2019-07-11', 'Completed', 'Completed', 'OSA--1562870991', 'Yes_Male', 'Mohamed_Abou Alam', 'mo_alam@ho', '0000-00-00', '41', 'Yes', 'Norway', 0, 0, '', 0, '', '', '', '2019/07/13', '2019/07/14', 'Yes', 'Yes', '', '', '', '2019/11/27', '', '2019/11/27', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=682;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
