-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 06, 2023 at 06:41 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mom_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ad_id` varchar(255) NOT NULL,
  `ad_password` varchar(255) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_password`) VALUES
('admin', 'admin123'),
('admin1', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_details`
--

DROP TABLE IF EXISTS `appointment_details`;
CREATE TABLE IF NOT EXISTS `appointment_details` (
  `app_id` int(10) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) NOT NULL,
  `doc_id` varchar(20) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` time NOT NULL,
  `app_place` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `mom_id` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`app_id`),
  KEY `doc_id` (`doc_id`),
  KEY `mom_id` (`mom_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_details`
--

INSERT INTO `appointment_details` (`app_id`, `topic`, `doc_id`, `doc_name`, `app_date`, `app_time`, `app_place`, `notes`, `mom_id`) VALUES
(1, 'Test #1', 'aa1', 'Ranjith', '2022-12-24', '13:55:18', 'Colombo', 'Testing 1', NULL),
(10, 'egehvef', 'aa2', 'Bimsara', '2022-12-29', '11:10:00', 'Colombo', 'Testing 3', NULL),
(11, 'test 2', 'aa2', 'Bimsara', '2022-12-29', '11:10:00', 'Colombo', 'Testing 3', NULL),
(12, 'test 25', 'aa1', 'Bimsara', '2022-12-17', '11:18:00', 'Galle', 'GGudqwg', NULL),
(18, 'Test #3', 'aa3', 'Kivi Amarakoon', '2022-12-23', '05:05:00', 'Colombo', 'Testing', NULL),
(19, 'Appointment 1', 'aa2', 'Bimsara', '2022-12-22', '17:00:00', 'Galle', 'Testing 1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `child_card`
--

DROP TABLE IF EXISTS `child_card`;
CREATE TABLE IF NOT EXISTS `child_card` (
  `Age` int(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `child_id` varchar(11) NOT NULL,
  PRIMARY KEY (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `child_details`
--

DROP TABLE IF EXISTS `child_details`;
CREATE TABLE IF NOT EXISTS `child_details` (
  `child_id` varchar(11) NOT NULL,
  `child_name` varchar(255) DEFAULT NULL,
  `child_gender` enum('F','M') NOT NULL,
  `phm_id` varchar(11) NOT NULL,
  `doc_id` varchar(11) DEFAULT NULL,
  `guardian_id` varchar(11) DEFAULT NULL,
  `mom_email` varchar(255) NOT NULL,
  PRIMARY KEY (`child_id`),
  KEY `phm` (`phm_id`),
  KEY `doc` (`doc_id`),
  KEY `guardian` (`guardian_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_details`
--

INSERT INTO `child_details` (`child_id`, `child_name`, `child_gender`, `phm_id`, `doc_id`, `guardian_id`, `mom_email`) VALUES
('C102', 'Dedunu', 'F', 'P102', 'D102', 'G102', 'nirasha999@gmail.com'),
('C103', 'Sashini', 'F', 'P102', 'D103', 'G102', 'nirasha999@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

DROP TABLE IF EXISTS `doctor_details`;
CREATE TABLE IF NOT EXISTS `doctor_details` (
  `doc_id` varchar(20) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_age` int(10) NOT NULL,
  `doc_address` varchar(255) NOT NULL,
  `doc_DOB` date NOT NULL,
  `doc_email` varchar(255) NOT NULL,
  `doc_password` varchar(255) NOT NULL,
  `doc_tele` int(10) NOT NULL,
  `doc_workplace` varchar(255) NOT NULL,
  `doc_type` enum('vog','ped','other') NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_details`
--

INSERT INTO `doctor_details` (`doc_id`, `doc_name`, `doc_age`, `doc_address`, `doc_DOB`, `doc_email`, `doc_password`, `doc_tele`, `doc_workplace`, `doc_type`) VALUES
('13', 'Rashmi', 45, 'kaluthara', '1965-02-09', 'rashmi123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 714436987, 'kalutara', 'ped'),
('aa1', 'Ranjith Rathnayake', 25, 'galle', '2022-12-21', 'ss@gmail.com', '', 1234567890, 'Teaching Hospital, Karapitiya', 'vog'),
('aa2', 'Parakrama Perera', 34, 'Colombo', '2022-12-29', 'aa2@gmail.com', '', 1234567890, 'General Hospital Colombo', 'vog'),
('aa3', 'Dishan Silva', 35, 'Matara', '2022-12-31', 'aa3@gmail.com', '', 1234567890, 'Kalubowila Hospital, Colombo', 'vog'),
('D102', 'deepal', 45, 'horana', '1965-02-09', 'deepal12345@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 714436987, 'Horana', 'vog'),
('D103', 'vimal', 45, 'Kalutara', '1965-02-08', 'vimal@gmail.com', '1234', 714536987, 'Kalutara', 'vog'),
('D104', 'Kamal', 45, 'Kalutara', '1965-02-08', 'kamal@gmail.com', '1234', 714536987, 'Kalutara', 'ped'),
('D105', 'Santha', 45, 'Kalutara', '1965-02-08', 'Santha@gmail.com', '1234', 714536987, 'Kalutara', 'vog');

-- --------------------------------------------------------

--
-- Table structure for table `guardian_details`
--

DROP TABLE IF EXISTS `guardian_details`;
CREATE TABLE IF NOT EXISTS `guardian_details` (
  `guardian_id` varchar(11) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `guardian_mobile` int(10) NOT NULL,
  `mom_id` varchar(11) NOT NULL,
  PRIMARY KEY (`guardian_id`),
  KEY `mom_id` (`mom_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardian_details`
--

INSERT INTO `guardian_details` (`guardian_id`, `guardian_name`, `guardian_mobile`, `mom_id`) VALUES
('G102', 'Deepal', 714436698, 'a001');

-- --------------------------------------------------------

--
-- Table structure for table `immunization referrals`
--

DROP TABLE IF EXISTS `immunization referrals`;
CREATE TABLE IF NOT EXISTS `immunization referrals` (
  `child_id` varchar(11) NOT NULL,
  `mother_id` varchar(11) NOT NULL,
  `referral_date` date NOT NULL,
  `referral_reason` varchar(255) NOT NULL,
  `referral_place` varchar(255) NOT NULL,
  `referral_notes` varchar(255) DEFAULT NULL,
  `doc_id` varchar(11) NOT NULL,
  `phm_id` varchar(11) NOT NULL,
  KEY `child_id` (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `immunization table`
--

DROP TABLE IF EXISTS `immunization table`;
CREATE TABLE IF NOT EXISTS `immunization table` (
  `child_id` varchar(11) NOT NULL,
  `age` int(10) NOT NULL,
  `type_of_vaccine` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `batch_no` varchar(20) NOT NULL,
  `adverse_effects` varchar(255) NOT NULL,
  `phm_id` varchar(11) DEFAULT NULL,
  `doc_id` varchar(11) DEFAULT NULL,
  KEY `child_id` (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mcard-general`
--

DROP TABLE IF EXISTS `mcard-general`;
CREATE TABLE IF NOT EXISTS `mcard-general` (
  `mother_id` varchar(11) NOT NULL,
  `phm_id` varchar(11) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `mom_bmi` int(10) NOT NULL,
  `mom_height` int(10) NOT NULL,
  `mom_name` varchar(255) NOT NULL,
  `mom_age` int(10) NOT NULL,
  `moh_area` varchar(255) NOT NULL,
  `phm_area` varchar(255) NOT NULL,
  `clinic_name` varchar(255) NOT NULL,
  `gn_division` varchar(255) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `VOG_name` varchar(255) NOT NULL,
  `anatal_risks` varchar(255) NOT NULL,
  `reg_number` varchar(11) NOT NULL,
  `family_reg` varchar(11) NOT NULL,
  `mother_reg` varchar(11) NOT NULL,
  `antenatal_risks` varchar(255) NOT NULL,
  `cb1` tinyint(1) NOT NULL,
  `cb2` tinyint(1) NOT NULL,
  `cb3` tinyint(1) NOT NULL,
  `cb4` tinyint(1) NOT NULL,
  `cb5` tinyint(1) NOT NULL,
  `cb6` tinyint(1) NOT NULL,
  `cb7` tinyint(1) NOT NULL,
  UNIQUE KEY `mother_id` (`mother_id`),
  UNIQUE KEY `phm_id` (`phm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mcard-medicalhistory`
--

DROP TABLE IF EXISTS `mcard-medicalhistory`;
CREATE TABLE IF NOT EXISTS `mcard-medicalhistory` (
  `diabetes` tinyint(1) NOT NULL,
  `hypertension` tinyint(1) NOT NULL,
  `cardiac_diseases` tinyint(1) NOT NULL,
  `renal_diseases` tinyint(1) NOT NULL,
  `hepatic_diseases` tinyint(1) NOT NULL,
  `psychiatric_illnesses` tinyint(1) NOT NULL,
  `epilepsy` tinyint(1) NOT NULL,
  `malignancies` tinyint(1) NOT NULL,
  `haematologies` tinyint(1) NOT NULL,
  `tuberculosis` tinyint(1) NOT NULL,
  `thyroid_diseases` tinyint(1) NOT NULL,
  `bronchial_diseases` tinyint(1) NOT NULL,
  `previous_DVT` tinyint(1) NOT NULL,
  `surgeries_other_than_LSCS` tinyint(1) NOT NULL,
  `other` tinyint(1) NOT NULL,
  `social_zscore` tinyint(1) NOT NULL,
  `mom_id` varchar(11) CHARACTER SET latin1 NOT NULL,
  `phm_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  KEY `mom_id` (`mom_id`),
  KEY `Foreign key` (`phm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mcard-pohistory`
--

DROP TABLE IF EXISTS `mcard-pohistory`;
CREATE TABLE IF NOT EXISTS `mcard-pohistory` (
  `mom_id` varchar(11) CHARACTER SET latin1 NOT NULL,
  `gravidity_G` int(11) NOT NULL,
  `gravidity_P` int(11) NOT NULL,
  `gravidity_C` int(11) NOT NULL,
  `youngest_child_age` int(11) NOT NULL,
  `LRMP` int(11) NOT NULL,
  `EED` int(11) NOT NULL,
  `US_corrected_EED` int(11) NOT NULL,
  `doctor_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  KEY `mom_id` (`mom_id`),
  KEY `doctor_id` (`doctor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mother_details`
--

DROP TABLE IF EXISTS `mother_details`;
CREATE TABLE IF NOT EXISTS `mother_details` (
  `mom_id` varchar(11) NOT NULL,
  `mom_fname` varchar(255) NOT NULL,
  `mom_mname` varchar(255) NOT NULL,
  `mom_lname` varchar(255) NOT NULL,
  `mom_landline` int(10) NOT NULL,
  `mom_mobile` int(10) NOT NULL,
  `mom_propic` varchar(255) NOT NULL,
  `mom_email` varchar(255) NOT NULL,
  `mom_password` varchar(255) NOT NULL,
  `mom_address` varchar(255) NOT NULL,
  `mom_DOB` date NOT NULL,
  `mom_age` int(10) NOT NULL,
  `mom_regdate` date NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `guardian_mobile` int(10) NOT NULL,
  `reg_user_id` int(11) NOT NULL,
  `mom_delivery_date` date DEFAULT NULL,
  PRIMARY KEY (`mom_id`),
  KEY `reg_user_id` (`reg_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mother_details`
--

INSERT INTO `mother_details` (`mom_id`, `mom_fname`, `mom_mname`, `mom_lname`, `mom_landline`, `mom_mobile`, `mom_propic`, `mom_email`, `mom_password`, `mom_address`, `mom_DOB`, `mom_age`, `mom_regdate`, `guardian_name`, `guardian_mobile`, `reg_user_id`, `mom_delivery_date`) VALUES
('a001', 'Bim', 'Sav', 'Wick', 912223571, 766423123, '', 'bb@gmail.com', '', 'galle', '2022-12-20', 22, '2022-12-17', 'sarath alwis', 761254245, 5, NULL),
('a002', 'Hansika', 'Prashani', 'Weerasinghe', 912223571, 766423123, '', 'aa@gmail.com', '', 'Piliyandala, Sri Lanka.', '2012-12-20', 22, '2022-12-19', 'Saman Wijerathne', 761254245, 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `noti_id` varchar(11) NOT NULL,
  `mom_id` varchar(11) DEFAULT NULL,
  `doc_id` varchar(11) DEFAULT NULL,
  `phm_id` varchar(11) DEFAULT NULL,
  `child_id` varchar(11) DEFAULT NULL,
  `ad_id` varchar(11) DEFAULT NULL,
  `noti_topic` varchar(255) NOT NULL,
  `noti_date` date NOT NULL,
  `noti_time` date NOT NULL,
  PRIMARY KEY (`noti_id`),
  KEY `mom_id` (`mom_id`),
  KEY `doc_id` (`doc_id`),
  KEY `phm_id` (`phm_id`),
  KEY `child_id` (`child_id`),
  KEY `ad_id` (`ad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

DROP TABLE IF EXISTS `password_reset`;
CREATE TABLE IF NOT EXISTS `password_reset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Foreign key` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`id`, `email`, `token`) VALUES
(1, 'nirasha999@gmail.com', '80d75f0227660bd003d5f03f7e11945487a101b62c5a516c138cb9b090e0c626216a60110ee1c0595c78df5af0a20bf679e2');

-- --------------------------------------------------------

--
-- Table structure for table `ped_notes`
--

DROP TABLE IF EXISTS `ped_notes`;
CREATE TABLE IF NOT EXISTS `ped_notes` (
  `ped_note_id` int(10) NOT NULL AUTO_INCREMENT,
  `doc_id` varchar(11) NOT NULL,
  `mom_id` varchar(11) NOT NULL,
  `note_topic` varchar(255) NOT NULL,
  `note_date` date NOT NULL,
  `note_description` varchar(255) NOT NULL,
  `note_records` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ped_note_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phm_details`
--

DROP TABLE IF EXISTS `phm_details`;
CREATE TABLE IF NOT EXISTS `phm_details` (
  `phm_id` varchar(20) NOT NULL,
  `phm_name` varchar(255) NOT NULL,
  `phm_DOB` date NOT NULL,
  `phm_address` varchar(255) NOT NULL,
  `phm_tele` int(10) NOT NULL,
  `phm_email` varchar(255) NOT NULL,
  `phm_password` varchar(255) NOT NULL,
  `phm_workplace` varchar(255) NOT NULL,
  PRIMARY KEY (`phm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phm_details`
--

INSERT INTO `phm_details` (`phm_id`, `phm_name`, `phm_DOB`, `phm_address`, `phm_tele`, `phm_email`, `phm_password`, `phm_workplace`) VALUES
('P102', 'Kamala', '1965-08-02', 'Hoarana', 714436987, 'kamala@gmail.com', '1234', 'Hoarana'),
('P103', 'Nimala', '1965-08-30', 'Horana', 714436987, 'Nimala@gmail.com', '1234', 'Horana'),
('P104', 'Vimala', '1965-07-02', 'Panadura', 714436987, 'Vimala@gmail.com', '1234', 'Panadura');

-- --------------------------------------------------------

--
-- Table structure for table `registered_user_details`
--

DROP TABLE IF EXISTS `registered_user_details`;
CREATE TABLE IF NOT EXISTS `registered_user_details` (
  `reg_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `tele_number` int(10) NOT NULL,
  `age` int(5) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `phm_id` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`reg_user_id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4383 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_user_details`
--

INSERT INTO `registered_user_details` (`reg_user_id`, `first_name`, `middle_name`, `last_name`, `address`, `DOB`, `tele_number`, `age`, `email`, `reg_date`, `phm_id`, `password`) VALUES
(5, 'Bim', 'Sav', 'Wick', 'no.12, beraliyadolawatta, hapu', '2000-12-01', 771950342, 22, 'bb@gmail.com', '2022-12-16 14:35:37', 'nii', '202cb962ac59075b964b07152d234b70'),
(6, 'gdg', 'ddd', 'ss', 'no.12, beraliyadolawatta, hapu', '2000-12-01', 763361822, 21, 'aa@gmail.com', '2022-12-18 05:46:31', 'qqwe', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'gdg', 'bii', 'ss', 'no.12, beraliyadolawatta, hapu', '2022-12-01', 763361822, 23, 'cc@gmail.com', '2022-12-18 18:17:54', 'nini', '81dc9bdb52d04dc20036dbd8313ed055'),
(2149, 'Rashmi', 'Nirasha', 'Gunawardana', 'horana', '1994-06-15', 714436987, 28, 'nirasha999@gmail.com', '2023-02-04 18:30:00', '125', '$2y$10$IitJYeVGzqMs1uFdEmH3seNs9nstlkceQIWxbZCGl2KhkbFAaaNju'),
(4382, 'Hiruni', 'nimesha', 'Amarakoon', 'Matara', '1987-02-27', 764523698, 35, 'kiviamarakoon@gmail.com', '2023-02-04 18:30:00', '125', '$2y$10$VzrRRGcwH9o7lqAculXvi.W9CQxFhyFBOi6U/sYqGWAMWOAeDxSAS');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

DROP TABLE IF EXISTS `user_tbl`;
CREATE TABLE IF NOT EXISTS `user_tbl` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(200) NOT NULL,
  `doc_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `user_role` enum('mother','vog','ped','admin','phm') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `email`, `password`, `created_at`, `name`, `doc_id`, `user_role`) VALUES
(12, 'deepal123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-02-03 08:01:27', 'Nirusha', '', 'mother'),
(14, 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-02-03 19:31:16', 'Admin', '', 'admin'),
(15, 'phm@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-02-03 19:31:42', 'Kamala', '', 'phm'),
(16, 'nirasha999@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-02-04 16:18:27', 'Rashmi', '', 'mother'),
(50, 'deepal12345@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-02-03 19:23:41', 'deepal', '12', 'vog'),
(51, 'rashmi123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-02-03 19:23:53', 'Rashmi', '13', 'ped');

-- --------------------------------------------------------

--
-- Table structure for table `vog_notes`
--

DROP TABLE IF EXISTS `vog_notes`;
CREATE TABLE IF NOT EXISTS `vog_notes` (
  `VOG_note_id` int(10) NOT NULL AUTO_INCREMENT,
  `doc_id` varchar(11) NOT NULL,
  `mom_id` varchar(11) NOT NULL,
  `note_topic` varchar(255) NOT NULL,
  `note_date` date NOT NULL,
  `note_description` varchar(255) NOT NULL,
  `note_records` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`VOG_note_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `child_details`
--
ALTER TABLE `child_details`
  ADD CONSTRAINT `child_details_ibfk_3` FOREIGN KEY (`phm_id`) REFERENCES `phm_details` (`phm_id`),
  ADD CONSTRAINT `child_details_ibfk_4` FOREIGN KEY (`guardian_id`) REFERENCES `guardian_details` (`guardian_id`);

--
-- Constraints for table `guardian_details`
--
ALTER TABLE `guardian_details`
  ADD CONSTRAINT `guardian_details_ibfk_1` FOREIGN KEY (`mom_id`) REFERENCES `mother_details` (`mom_id`);

--
-- Constraints for table `mcard-medicalhistory`
--
ALTER TABLE `mcard-medicalhistory`
  ADD CONSTRAINT `Foreign key` FOREIGN KEY (`phm_id`) REFERENCES `phm_details` (`phm_id`);

--
-- Constraints for table `mother_details`
--
ALTER TABLE `mother_details`
  ADD CONSTRAINT `mother_details_ibfk_1` FOREIGN KEY (`reg_user_id`) REFERENCES `registered_user_details` (`reg_user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`ad_id`) REFERENCES `admin` (`ad_id`),
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`child_id`) REFERENCES `child_details` (`child_id`),
  ADD CONSTRAINT `notifications_ibfk_3` FOREIGN KEY (`doc_id`) REFERENCES `doctor_details` (`doc_id`),
  ADD CONSTRAINT `notifications_ibfk_4` FOREIGN KEY (`mom_id`) REFERENCES `mother_details` (`mom_id`),
  ADD CONSTRAINT `notifications_ibfk_5` FOREIGN KEY (`phm_id`) REFERENCES `phm_details` (`phm_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
