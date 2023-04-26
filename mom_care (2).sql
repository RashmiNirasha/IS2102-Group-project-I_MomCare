-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 26, 2023 at 08:00 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

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
-- Table structure for table `admin_help_requests`
--

DROP TABLE IF EXISTS `admin_help_requests`;
CREATE TABLE IF NOT EXISTS `admin_help_requests` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `submission_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `mom_id` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_help_requests`
--

INSERT INTO `admin_help_requests` (`id`, `name`, `email`, `message`, `submission_date`, `mom_id`) VALUES
(1, 'nimal', 'deepal12345@gmail.com', 'nimal', '2023-04-26 18:02:10', ''),
(2, 'advf', 'maduri@gmail.com', 'Ffafaf', '2023-04-26 18:10:11', 'M002');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_details`
--

DROP TABLE IF EXISTS `appointment_details`;
CREATE TABLE IF NOT EXISTS `appointment_details` (
  `app_id` int NOT NULL AUTO_INCREMENT,
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
-- Table structure for table `bmi_values`
--

DROP TABLE IF EXISTS `bmi_values`;
CREATE TABLE IF NOT EXISTS `bmi_values` (
  `id` int NOT NULL AUTO_INCREMENT,
  `height` float(10,2) DEFAULT NULL,
  `weight` float(10,2) DEFAULT NULL,
  `bmi` float(10,2) DEFAULT NULL,
  `date_calculated` datetime DEFAULT NULL,
  `age` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

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
  `mom_id` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`child_id`),
  KEY `phm` (`phm_id`),
  KEY `doc` (`doc_id`),
  KEY `guardian` (`guardian_id`),
  KEY `child_details_ibfk_5` (`mom_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_details`
--

INSERT INTO `child_details` (`child_id`, `child_name`, `child_gender`, `phm_id`, `doc_id`, `guardian_id`, `mom_email`, `mom_id`) VALUES
('C102', 'Dedunu', 'F', 'P102', 'D102', 'G102', 'nirasha999@gmail.com', 'M001'),
('C103', 'Sashini', 'F', 'P102', 'D103', 'G102', 'maduri@gmail.com', 'M002'),
('C104', 'Nimal', 'M', 'P104', 'D102', 'G102', 'nirasha999@gmail.com', 'M003');

-- --------------------------------------------------------

--
-- Table structure for table `child_identification_information`
--

DROP TABLE IF EXISTS `child_identification_information`;
CREATE TABLE IF NOT EXISTS `child_identification_information` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Child_id` varchar(10) NOT NULL,
  `child_name` varchar(50) NOT NULL,
  `child_birth_date` date NOT NULL,
  `registration_date` date NOT NULL,
  `mothers_name` varchar(50) NOT NULL,
  `mothers_address` text NOT NULL,
  `mothers_age` int NOT NULL,
  `fathers_name` varchar(50) NOT NULL,
  `fathers_age` int NOT NULL,
  `no_of_children_alive` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `child_newborn_care_form`
--

DROP TABLE IF EXISTS `child_newborn_care_form`;
CREATE TABLE IF NOT EXISTS `child_newborn_care_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Child_id` varchar(10) NOT NULL,
  `birth_place` varchar(255) DEFAULT NULL,
  `delivery_mode` varchar(255) DEFAULT NULL,
  `apgar_score` int DEFAULT NULL,
  `birth_weight` float DEFAULT NULL,
  `head_circumference` float DEFAULT NULL,
  `baby_length` float DEFAULT NULL,
  `discharge_weight` float DEFAULT NULL,
  `vitamin_k` varchar(255) DEFAULT NULL,
  `breastfeeding_start` varchar(255) DEFAULT NULL,
  `breastfeeding_establishment` varchar(255) DEFAULT NULL,
  `breastfeeding_relationship` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `child_newborn_health_chart`
--

DROP TABLE IF EXISTS `child_newborn_health_chart`;
CREATE TABLE IF NOT EXISTS `child_newborn_health_chart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Child_id` varchar(10) NOT NULL,
  `report_entry_date` date NOT NULL,
  `skin_color` varchar(255) NOT NULL,
  `eye_condition` varchar(255) NOT NULL,
  `pecan_nature` varchar(255) NOT NULL,
  `temperature` float NOT NULL,
  `exclusive_breastfeeding` text NOT NULL,
  `breastfeeding_establishment` tinyint(1) NOT NULL,
  `breastfeeding_relationship` varchar(255) NOT NULL,
  `stool_color` varchar(255) NOT NULL,
  `deficiency` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `child_special_care_reasons`
--

DROP TABLE IF EXISTS `child_special_care_reasons`;
CREATE TABLE IF NOT EXISTS `child_special_care_reasons` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Child_id` varchar(10) NOT NULL,
  `immature_births` tinyint(1) DEFAULT '0',
  `immature_births_text` text,
  `under_weight_births` tinyint(1) DEFAULT '0',
  `under_weight_births_text` text,
  `disorders` tinyint(1) DEFAULT '0',
  `disorders_text` text,
  `serious_issues_for_mother` tinyint(1) DEFAULT '0',
  `serious_issues_for_mother_text` text,
  `milk_powder_during_6_months` tinyint(1) DEFAULT '0',
  `milk_powder_during_6_months_text` text,
  `growth_impairment` tinyint(1) DEFAULT '0',
  `growth_impairment_text` text,
  `feeding_issues` tinyint(1) DEFAULT '0',
  `feeding_issues_text` text,
  `death_of_parent` tinyint(1) DEFAULT '0',
  `death_of_parent_text` text,
  `parent_migration` tinyint(1) DEFAULT '0',
  `parent_migration_text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

DROP TABLE IF EXISTS `doctor_details`;
CREATE TABLE IF NOT EXISTS `doctor_details` (
  `doc_id` varchar(20) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_age` int NOT NULL,
  `doc_address` varchar(255) NOT NULL,
  `doc_DOB` date NOT NULL,
  `doc_email` varchar(255) NOT NULL,
  `doc_password` varchar(255) NOT NULL,
  `doc_tele` int NOT NULL,
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
('D103', 'Kivi', 45, 'Matara', '1965-02-09', 'kivi123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 719320164, 'Matara', 'vog');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_notes`
--

DROP TABLE IF EXISTS `doctor_notes`;
CREATE TABLE IF NOT EXISTS `doctor_notes` (
  `note_id` int NOT NULL AUTO_INCREMENT,
  `child_id` varchar(11) NOT NULL,
  `doc_id` varchar(11) NOT NULL,
  `mom_id` varchar(11) NOT NULL,
  `note_topic` varchar(255) NOT NULL,
  `note_date` date NOT NULL,
  `note_description` varchar(255) NOT NULL,
  `note_records` varchar(255) DEFAULT NULL,
  `doc_role` enum('vog','ped') NOT NULL,
  PRIMARY KEY (`note_id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_notes`
--

INSERT INTO `doctor_notes` (`note_id`, `child_id`, `doc_id`, `mom_id`, `note_topic`, `note_date`, `note_description`, `note_records`, `doc_role`) VALUES
(2, 'C102', '13', 'a002', 'Lab', '2023-02-02', 'All testings are good.\r\nthere was one mishap on the second report.', '', 'vog'),
(3, 'C103', '13', 'a002', 'testing for tuberculosis', '2023-02-03', 'Reports were negative', '1.jpg', 'vog'),
(4, '', '13', 'a001', 'this is test 2', '2023-02-01', 'ALL okay', '', 'vog'),
(26, '', '', 'a003', 'Blood sugar', '0000-00-00', ' negative', 'test-63e3b0901e6f8.pdf', 'vog'),
(28, '', '', 'a001', 'x', '0000-00-00', ' x', 'test-63e416e7bf128.', 'vog'),
(29, '', '', 'a001', 'x', '0000-00-00', ' x', 'test-63e416f1b3608.', 'vog'),
(38, '', '', 'a001', 'sugar', '0000-00-00', ' no comment', 'test-63e54d0299268.pdf', 'vog'),
(63, 'C102', '13', '', 'blood report', '2023-02-14', 'no issues found', 'test-63e5dfabd0b07.', 'ped'),
(70, '', 'D102', 'a002', 'Blood sugar', '0000-00-00', 'negative', 'test-63f98e7f3502f.', 'vog'),
(71, '', 'D102', 'a004', 'Blood sugar', '0000-00-00', 'no issue', 'test-63f98f0a8d4f3.png', 'vog');

-- --------------------------------------------------------

--
-- Table structure for table `guardian_details`
--

DROP TABLE IF EXISTS `guardian_details`;
CREATE TABLE IF NOT EXISTS `guardian_details` (
  `guardian_id` varchar(11) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `guardian_mobile` int NOT NULL,
  `mom_id` varchar(11) NOT NULL,
  PRIMARY KEY (`guardian_id`),
  KEY `mom_id` (`mom_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardian_details`
--

INSERT INTO `guardian_details` (`guardian_id`, `guardian_name`, `guardian_mobile`, `mom_id`) VALUES
('G102', 'Deepal', 714436698, 'M001');

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
  `age` int NOT NULL,
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
-- Table structure for table `immunization_table`
--

DROP TABLE IF EXISTS `immunization_table`;
CREATE TABLE IF NOT EXISTS `immunization_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `child_id` varchar(11) NOT NULL,
  `age` varchar(50) NOT NULL,
  `type_of_vaccine` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `batch_no` varchar(20) NOT NULL,
  `adverse_effects` varchar(255) NOT NULL,
  `phm_id` varchar(11) DEFAULT NULL,
  `doc_id` varchar(11) DEFAULT NULL,
  `official_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mcard_fhistory`
--

DROP TABLE IF EXISTS `mcard_fhistory`;
CREATE TABLE IF NOT EXISTS `mcard_fhistory` (
  `mom_id` varchar(11) NOT NULL,
  `phm_id` varchar(20) NOT NULL,
  `diabetes` varchar(20) NOT NULL,
  `hypertension` varchar(20) NOT NULL,
  `h_diseases` varchar(20) NOT NULL,
  `m_pregnancies` varchar(20) NOT NULL,
  `others` varchar(255) NOT NULL,
  KEY `mom_id` (`mom_id`),
  KEY `phm_id` (`phm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcard_fhistory`
--

INSERT INTO `mcard_fhistory` (`mom_id`, `phm_id`, `diabetes`, `hypertension`, `h_diseases`, `m_pregnancies`, `others`) VALUES
('M003', 'P102', 'Negative', 'Positive', 'Negative', 'Positive', 'Nothing much for now.');

-- --------------------------------------------------------

--
-- Table structure for table `mcard_general`
--

DROP TABLE IF EXISTS `mcard_general`;
CREATE TABLE IF NOT EXISTS `mcard_general` (
  `mom_id` varchar(11) NOT NULL,
  `phm_id` varchar(11) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `mom_bmi` int NOT NULL,
  `mom_height` int NOT NULL,
  `allergies` varchar(255) NOT NULL,
  `mom_name` varchar(255) NOT NULL,
  `mom_age` int NOT NULL,
  `moh_area` varchar(255) NOT NULL,
  `phm_area` varchar(255) NOT NULL,
  `clinic_name` varchar(255) NOT NULL,
  `gn_division` varchar(255) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `VOG_name` varchar(255) NOT NULL,
  `anatal_risks` varchar(255) NOT NULL,
  `reg_number` varchar(11) NOT NULL,
  `reg_date` date NOT NULL,
  `family_reg` varchar(11) NOT NULL,
  `mother_reg` varchar(11) NOT NULL,
  `antenatal_risks` varchar(255) NOT NULL,
  `cb1` varchar(20) NOT NULL,
  `cb2` varchar(20) NOT NULL,
  `cb3` varchar(20) NOT NULL,
  `cb4` varchar(20) NOT NULL,
  `cb5` varchar(20) NOT NULL,
  `cb6` varchar(20) NOT NULL,
  `cb7` varchar(20) NOT NULL,
  `dad_age` int NOT NULL,
  `dad_edu` varchar(255) NOT NULL,
  `dad_occupation` varchar(255) NOT NULL,
  `mom_edu` varchar(255) NOT NULL,
  `mom_occupation` varchar(255) NOT NULL,
  UNIQUE KEY `mother_id` (`mom_id`),
  UNIQUE KEY `phm_id` (`phm_id`),
  KEY `mom_id` (`mom_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcard_general`
--

INSERT INTO `mcard_general` (`mom_id`, `phm_id`, `blood_group`, `mom_bmi`, `mom_height`, `allergies`, `mom_name`, `mom_age`, `moh_area`, `phm_area`, `clinic_name`, `gn_division`, `hospital_name`, `VOG_name`, `anatal_risks`, `reg_number`, `reg_date`, `family_reg`, `mother_reg`, `antenatal_risks`, `cb1`, `cb2`, `cb3`, `cb4`, `cb5`, `cb6`, `cb7`, `dad_age`, `dad_edu`, `dad_occupation`, `mom_edu`, `mom_occupation`) VALUES
('M003', 'P102', 'A+', 25, 162, 'None', 'Hansika Prashani Weerasinghe', 28, 'Colombo 15', 'Colombo 15', 'Colombo 15 main', 'Colombo 15', 'Colombo Central', 'Prakash Perera', 'Nothing', '456342', '2023-02-05', 'Roshan', 'Rasangi', 'None', 'Positive', 'Positive', 'Positive', 'Positive', 'Positive', 'Positive', 'Positive', 30, 'Degree', 'Teacher', 'Degree', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `mcard_medicalhistory`
--

DROP TABLE IF EXISTS `mcard_medicalhistory`;
CREATE TABLE IF NOT EXISTS `mcard_medicalhistory` (
  `diabetes` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `hypertension` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `cardiac_diseases` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `renal_diseases` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `hepatic_diseases` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `psychiatric_illnesses` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `epilepsy` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `malignancies` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `haematologies` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tuberculosis` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `thyroid_diseases` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `bronchial_diseases` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `previous_DVT` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `surgeries_other_than_LSCS` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `other` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `social_zscore` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `mom_id` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phm_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  KEY `mom_id` (`mom_id`),
  KEY `Foreign key` (`phm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mcard_medicalhistory`
--

INSERT INTO `mcard_medicalhistory` (`diabetes`, `hypertension`, `cardiac_diseases`, `renal_diseases`, `hepatic_diseases`, `psychiatric_illnesses`, `epilepsy`, `malignancies`, `haematologies`, `tuberculosis`, `thyroid_diseases`, `bronchial_diseases`, `previous_DVT`, `surgeries_other_than_LSCS`, `other`, `social_zscore`, `mom_id`, `phm_id`) VALUES
('Negative', 'Positive', 'Negative', 'Negative', 'Negative', 'Negative', 'Positive', 'Positive', 'Positive', 'Negative', 'Positive', 'Negative', 'Positive', 'Negative', 'Nothing', 'Negative', 'M003', 'P102');

-- --------------------------------------------------------

--
-- Table structure for table `mcard_pohistory`
--

DROP TABLE IF EXISTS `mcard_pohistory`;
CREATE TABLE IF NOT EXISTS `mcard_pohistory` (
  `mom_id` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `doctor_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gravidity_G` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `gravidity_P` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `gravidity_C` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `youngest_child_age` int NOT NULL,
  `LRMP` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `EED` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `us_eed` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `poa_at_dating` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date_quickning` date NOT NULL,
  `poa_at_reg` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  KEY `mom_id` (`mom_id`),
  KEY `doctor_id` (`doctor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mcard_pohistory`
--

INSERT INTO `mcard_pohistory` (`mom_id`, `doctor_id`, `gravidity_G`, `gravidity_P`, `gravidity_C`, `youngest_child_age`, `LRMP`, `EED`, `us_eed`, `poa_at_dating`, `date_quickning`, `poa_at_reg`) VALUES
('M003', 'D102', '2', '1', '1', 5, '6 weeks ago', '42 weeks', '42 Weeks', 'Done', '2023-02-15', 'Nothing');

-- --------------------------------------------------------

--
-- Table structure for table `mcard_preghistory`
--

DROP TABLE IF EXISTS `mcard_preghistory`;
CREATE TABLE IF NOT EXISTS `mcard_preghistory` (
  `mom_id` varchar(11) NOT NULL,
  `phm_id` varchar(20) NOT NULL,
  `pregnancy_type` varchar(255) NOT NULL,
  `antenatal` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `outcome` varchar(255) NOT NULL,
  `weight` int NOT NULL,
  `postal_complications` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `age` int NOT NULL,
  KEY `mom_id` (`mom_id`),
  KEY `phm_id` (`phm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcard_preghistory`
--

INSERT INTO `mcard_preghistory` (`mom_id`, `phm_id`, `pregnancy_type`, `antenatal`, `place`, `outcome`, `weight`, `postal_complications`, `sex`, `age`) VALUES
('M003', 'P102', 'Normal', 'Negative', 'Colombo General Hospital', 'Baby', 2, 'nothing', 'Male', 23),
('M003', 'P102', 'Normal', 'Positive', 'General Hospital Colombo', 'Success', 2, 'None', 'Female', 25);

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
  `mom_landline` int NOT NULL,
  `mom_mobile` int NOT NULL,
  `mom_propic` varchar(255) NOT NULL,
  `mom_email` varchar(255) NOT NULL,
  `mom_password` varchar(255) NOT NULL,
  `mom_address` varchar(255) NOT NULL,
  `mom_DOB` date NOT NULL,
  `mom_age` int NOT NULL,
  `mom_regdate` date NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `guardian_mobile` int NOT NULL,
  `reg_user_id` int NOT NULL,
  `mom_delivery_date` date DEFAULT NULL,
  PRIMARY KEY (`mom_id`),
  KEY `reg_user_id` (`reg_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mother_details`
--

INSERT INTO `mother_details` (`mom_id`, `mom_fname`, `mom_mname`, `mom_lname`, `mom_landline`, `mom_mobile`, `mom_propic`, `mom_email`, `mom_password`, `mom_address`, `mom_DOB`, `mom_age`, `mom_regdate`, `guardian_name`, `guardian_mobile`, `reg_user_id`, `mom_delivery_date`) VALUES
('M001', 'Virangi', 'Sav', 'Wick', 912223571, 766423123, '', 'bb@gmail.com', '', 'galle', '2022-12-20', 22, '2022-12-17', 'sarath alwis', 761254245, 5, NULL),
('M002', 'Maduri', 'Ranathunga', 'Jayasekara', 912223571, 766423123, '', 'maduri@gmail.com', '', 'Piliyandala, Sri Lanka.', '2012-12-20', 22, '2022-12-19', 'Saman Wijerathne', 719320164, 6, NULL),
('M003', 'Hansika', 'Prashani', 'Weerasinghe', 912223571, 766423123, '', 'aa@gmail.com', '', 'Piliyandala, Sri Lanka.', '2012-12-20', 22, '2022-12-19', 'Saman Wijerathne', 761254245, 6, NULL),
('M004', 'Nimasha', 'Sarala', 'Perera', 342264331, 773635441, '', 'nirashagunawardana@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '123 Main Street, Colombo', '1980-01-01', 42, '2023-04-25', 'John Doe', 771234567, 12345, '2022-04-25');

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
  `id` int NOT NULL AUTO_INCREMENT,
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
-- Table structure for table `pdf_export`
--

DROP TABLE IF EXISTS `pdf_export`;
CREATE TABLE IF NOT EXISTS `pdf_export` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
  `phm_tele` int NOT NULL,
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
  `reg_user_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `tele_number` int NOT NULL,
  `age` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `phm_id` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phm_acceptance` enum('accepted','rejected','pending') NOT NULL DEFAULT 'pending',
  `admin_acceptence` enum('accepted','rejected','pending') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`reg_user_id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4383 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_user_details`
--

INSERT INTO `registered_user_details` (`reg_user_id`, `first_name`, `middle_name`, `last_name`, `address`, `DOB`, `tele_number`, `age`, `email`, `reg_date`, `phm_id`, `password`, `phm_acceptance`, `admin_acceptence`) VALUES
(5, 'Bim', 'Sav', 'Wick', 'no.12, beraliyadolawatta, hapu', '2000-12-01', 771950342, 22, 'bb@gmail.com', '2022-12-16 14:35:37', 'nii', '202cb962ac59075b964b07152d234b70', 'pending', 'pending'),
(6, 'gdg', 'ddd', 'ss', 'no.12, beraliyadolawatta, hapu', '2000-12-01', 763361822, 21, 'aa@gmail.com', '2022-12-18 05:46:31', 'qqwe', '81dc9bdb52d04dc20036dbd8313ed055', 'pending', 'pending'),
(7, 'gdg', 'bii', 'ss', 'no.12, beraliyadolawatta, hapu', '2022-12-01', 763361822, 23, 'cc@gmail.com', '2022-12-18 18:17:54', 'nini', '81dc9bdb52d04dc20036dbd8313ed055', 'pending', 'pending'),
(2149, 'Rashmi', 'Nirasha', 'Gunawardana', 'horana', '1994-06-15', 714436987, 28, 'nirasha999@gmail.com', '2023-02-04 18:30:00', '125', '$2y$10$IitJYeVGzqMs1uFdEmH3seNs9nstlkceQIWxbZCGl2KhkbFAaaNju', 'pending', 'pending'),
(4382, 'Hiruni', 'nimesha', 'Amarakoon', 'Matara', '1987-02-27', 764523698, 35, 'kiviamarakoon@gmail.com', '2023-02-04 18:30:00', '125', '$2y$10$VzrRRGcwH9o7lqAculXvi.W9CQxFhyFBOi6U/sYqGWAMWOAeDxSAS', 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_marks`
--

DROP TABLE IF EXISTS `tbl_marks`;
CREATE TABLE IF NOT EXISTS `tbl_marks` (
  `student_id` int DEFAULT NULL,
  `student_name` varchar(50) DEFAULT NULL,
  `marks` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_marks`
--

INSERT INTO `tbl_marks` (`student_id`, `student_name`, `marks`) VALUES
(1, 'John', 80),
(2, 'Sarah', 75),
(3, 'Tom', 90),
(4, 'Kate', 85),
(5, 'Mike', 95),
(6, 'Linda', 70),
(7, 'David', 65),
(8, 'Emily', 100),
(9, 'Jacob', 80),
(10, 'Sophie', 95);

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

DROP TABLE IF EXISTS `testing`;
CREATE TABLE IF NOT EXISTS `testing` (
  `name_x` int DEFAULT NULL,
  `bimbi` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

DROP TABLE IF EXISTS `user_tbl`;
CREATE TABLE IF NOT EXISTS `user_tbl` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `doc_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user_role` enum('mother','vog','ped','admin','phm') COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `email`, `password`, `created_at`, `name`, `doc_id`, `user_role`) VALUES
(12, 'deepal123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-02-03 08:01:27', 'Nirusha', '', 'mother'),
(14, 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-02-03 19:31:16', 'Admin', '', 'admin'),
(15, 'phm@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-02-03 19:31:42', 'Kamala', '', 'phm'),
(16, 'nirasha999@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-02-04 16:18:27', 'Rashmi', '', 'mother'),
(50, 'deepal12345@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-02-03 19:23:41', 'deepal', '12', 'vog'),
(51, 'rashmi123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-02-03 19:23:53', 'Rashmi', '13', 'ped'),
(52, 'maduri@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-02-03 08:01:27', 'Maduri Ranathunga Jayasekara', '', 'mother');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinetypes`
--

DROP TABLE IF EXISTS `vaccinetypes`;
CREATE TABLE IF NOT EXISTS `vaccinetypes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Vaccine` varchar(255) NOT NULL,
  `Creationdate` date NOT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccinetypes`
--

INSERT INTO `vaccinetypes` (`id`, `Vaccine`, `Creationdate`, `UpdationDate`) VALUES
(21, 'BCG1', '2023-04-25', NULL),
(22, 'BCG2', '2023-04-25', NULL),
(23, 'DTaP1', '2023-04-25', NULL),
(24, 'DTaP2', '2023-04-25', NULL),
(25, 'DTaP3', '2023-04-25', NULL),
(26, 'HepB1', '2023-04-25', NULL),
(27, 'HepB2', '2023-04-25', NULL),
(28, 'Hib1', '2023-04-25', NULL),
(29, 'Hib2', '2023-04-25', NULL),
(30, 'Hib3', '2023-04-25', NULL),
(31, 'IPV1', '2023-04-25', NULL),
(32, 'IPV2', '2023-04-25', NULL),
(33, 'MMR1', '2023-04-25', NULL),
(34, 'MMR2', '2023-04-25', NULL),
(35, 'PCV1', '2023-04-25', NULL),
(36, 'PCV2', '2023-04-25', NULL),
(37, 'PCV3', '2023-04-25', NULL),
(38, 'Rotavirus1', '2023-04-25', NULL),
(39, 'Rotavirus2', '2023-04-25', NULL),
(40, 'Varicella1', '2023-04-25', NULL),
(41, 'Varicella2', '2023-04-25', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `child_details`
--
ALTER TABLE `child_details`
  ADD CONSTRAINT `child_details_ibfk_3` FOREIGN KEY (`phm_id`) REFERENCES `phm_details` (`phm_id`),
  ADD CONSTRAINT `child_details_ibfk_4` FOREIGN KEY (`guardian_id`) REFERENCES `guardian_details` (`guardian_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `child_details_ibfk_5` FOREIGN KEY (`mom_id`) REFERENCES `mother_details` (`mom_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guardian_details`
--
ALTER TABLE `guardian_details`
  ADD CONSTRAINT `guardian_details_ibfk_1` FOREIGN KEY (`mom_id`) REFERENCES `mother_details` (`mom_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mcard_fhistory`
--
ALTER TABLE `mcard_fhistory`
  ADD CONSTRAINT `sdgg` FOREIGN KEY (`mom_id`) REFERENCES `mother_details` (`mom_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mcard_general`
--
ALTER TABLE `mcard_general`
  ADD CONSTRAINT `mcard_general_ibfk_1` FOREIGN KEY (`mom_id`) REFERENCES `mother_details` (`mom_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phm-mg` FOREIGN KEY (`phm_id`) REFERENCES `phm_details` (`phm_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mcard_medicalhistory`
--
ALTER TABLE `mcard_medicalhistory`
  ADD CONSTRAINT `Foreign key` FOREIGN KEY (`phm_id`) REFERENCES `phm_details` (`phm_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mcard_medicalhistory_ibfk_1` FOREIGN KEY (`mom_id`) REFERENCES `mother_details` (`mom_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mcard_pohistory`
--
ALTER TABLE `mcard_pohistory`
  ADD CONSTRAINT `m-mph` FOREIGN KEY (`mom_id`) REFERENCES `mother_details` (`mom_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mcard_pohistory_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor_details` (`doc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mcard_preghistory`
--
ALTER TABLE `mcard_preghistory`
  ADD CONSTRAINT `mcard_preghistory_ibfk_1` FOREIGN KEY (`mom_id`) REFERENCES `mother_details` (`mom_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
