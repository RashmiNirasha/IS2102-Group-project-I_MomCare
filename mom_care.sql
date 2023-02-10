-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 01:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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

CREATE TABLE `admin` (
  `ad_id` varchar(255) NOT NULL,
  `ad_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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

CREATE TABLE `appointment_details` (
  `app_id` int(10) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `doc_id` varchar(20) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` time NOT NULL,
  `app_place` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `mom_id` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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

CREATE TABLE `child_card` (
  `Age` int(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `child_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `child_details`
--

CREATE TABLE `child_details` (
  `child_id` varchar(11) NOT NULL,
  `child_name` varchar(255) DEFAULT NULL,
  `child_gender` enum('F','M') NOT NULL,
  `phm_id` varchar(11) NOT NULL,
  `doc_id` varchar(11) DEFAULT NULL,
  `guardian_id` varchar(11) DEFAULT NULL,
  `mom_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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

CREATE TABLE `doctor_details` (
  `doc_id` varchar(255) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_age` int(10) NOT NULL,
  `doc_address` varchar(255) NOT NULL,
  `doc_DOB` date NOT NULL,
  `doc_email` varchar(255) NOT NULL,
  `doc_password` varchar(255) NOT NULL,
  `doc_tele` int(10) NOT NULL,
  `doc_workplace` varchar(255) NOT NULL,
  `doc_type` enum('vog','ped','other') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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

CREATE TABLE `guardian_details` (
  `guardian_id` varchar(11) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `guardian_mobile` int(10) NOT NULL,
  `mom_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `guardian_details`
--

INSERT INTO `guardian_details` (`guardian_id`, `guardian_name`, `guardian_mobile`, `mom_id`) VALUES
('G102', 'Deepal', 714436698, 'a001');

-- --------------------------------------------------------

--
-- Table structure for table `immunization referrals`
--

CREATE TABLE `immunization referrals` (
  `child_id` varchar(11) NOT NULL,
  `mother_id` varchar(11) NOT NULL,
  `referral_date` date NOT NULL,
  `referral_reason` varchar(255) NOT NULL,
  `referral_place` varchar(255) NOT NULL,
  `referral_notes` varchar(255) DEFAULT NULL,
  `doc_id` varchar(11) NOT NULL,
  `phm_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `immunization table`
--

CREATE TABLE `immunization table` (
  `child_id` varchar(11) NOT NULL,
  `age` int(10) NOT NULL,
  `type_of_vaccine` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `batch_no` varchar(20) NOT NULL,
  `adverse_effects` varchar(255) NOT NULL,
  `phm_id` varchar(11) DEFAULT NULL,
  `doc_id` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mcard-fhistory`
--

CREATE TABLE `mcard-fhistory` (
  `mom_id` varchar(11) NOT NULL,
  `phm_id` varchar(20) NOT NULL,
  `diabetes` varchar(20) NOT NULL,
  `hypertension` varchar(20) NOT NULL,
  `h_diseases` varchar(20) NOT NULL,
  `m_pregnancies` varchar(20) NOT NULL,
  `others` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mcard-general`
--

CREATE TABLE `mcard-general` (
  `mother_id` varchar(11) NOT NULL,
  `phm_id` varchar(11) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `mom_bmi` int(10) NOT NULL,
  `mom_height` int(10) NOT NULL,
  `allergies` varchar(255) NOT NULL,
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
  `dad_age` int(10) NOT NULL,
  `dad_edu` varchar(255) NOT NULL,
  `dad_occupation` varchar(255) NOT NULL,
  `mom_edu` varchar(255) NOT NULL,
  `mom_occupation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mcard-general`
--

INSERT INTO `mcard-general` (`mother_id`, `phm_id`, `blood_group`, `mom_bmi`, `mom_height`, `allergies`, `mom_name`, `mom_age`, `moh_area`, `phm_area`, `clinic_name`, `gn_division`, `hospital_name`, `VOG_name`, `anatal_risks`, `reg_number`, `reg_date`, `family_reg`, `mother_reg`, `antenatal_risks`, `cb1`, `cb2`, `cb3`, `cb4`, `cb5`, `cb6`, `cb7`, `dad_age`, `dad_edu`, `dad_occupation`, `mom_edu`, `mom_occupation`) VALUES
('a001', 'P102', 'A+', 23, 162, 'None', 'Hansika Prashani Weerasinghe', 27, 'Colombo 15', 'Colombo 15', 'Colombo 15 main', 'Colombo 15', 'Colombo Central', 'Prakash Perera', 'Nothing', '456342', '2023-02-05', 'Roshan', 'Rasangi', 'None', 'Positive', 'Positive', 'Positive', 'Positive', 'Positive', 'Positive', 'Positive', 30, 'Degree', 'Teacher', 'Degree', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `mcard-medicalhistory`
--

CREATE TABLE `mcard-medicalhistory` (
  `diabetes` varchar(20) NOT NULL,
  `hypertension` varchar(20) NOT NULL,
  `cardiac_diseases` varchar(20) NOT NULL,
  `renal_diseases` varchar(20) NOT NULL,
  `hepatic_diseases` varchar(20) NOT NULL,
  `psychiatric_illnesses` varchar(20) NOT NULL,
  `epilepsy` varchar(20) NOT NULL,
  `malignancies` varchar(20) NOT NULL,
  `haematologies` varchar(20) NOT NULL,
  `tuberculosis` varchar(20) NOT NULL,
  `thyroid_diseases` varchar(20) NOT NULL,
  `bronchial_diseases` varchar(20) NOT NULL,
  `previous_DVT` varchar(20) NOT NULL,
  `surgeries_other_than_LSCS` varchar(20) NOT NULL,
  `other` varchar(20) NOT NULL,
  `social_zscore` varchar(20) NOT NULL,
  `mom_id` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phm_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mcard-pohistory`
--

CREATE TABLE `mcard-pohistory` (
  `mom_id` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `doctor_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gravidity_G` varchar(20) NOT NULL,
  `gravidity_P` varchar(20) NOT NULL,
  `gravidity_C` varchar(20) NOT NULL,
  `youngest_child_age` int(11) NOT NULL,
  `LRMP` varchar(20) NOT NULL,
  `EED` varchar(20) NOT NULL,
  `us_eed` varchar(255) NOT NULL,
  `poa_at_dating` varchar(255) NOT NULL,
  `date_quickning` date NOT NULL,
  `poa_at_reg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mcard-preghistory`
--

CREATE TABLE `mcard-preghistory` (
  `mom_id` varchar(11) NOT NULL,
  `phm_id` varchar(20) NOT NULL,
  `pregnancy_type` varchar(255) NOT NULL,
  `antenatal` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `outcome` varchar(255) NOT NULL,
  `weight` int(10) NOT NULL,
  `postal_complications` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mother_details`
--

CREATE TABLE `mother_details` (
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
  `mom_delivery_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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

CREATE TABLE `notifications` (
  `noti_id` varchar(11) NOT NULL,
  `mom_id` varchar(11) DEFAULT NULL,
  `doc_id` varchar(11) DEFAULT NULL,
  `phm_id` varchar(11) DEFAULT NULL,
  `child_id` varchar(11) DEFAULT NULL,
  `ad_id` varchar(11) DEFAULT NULL,
  `noti_topic` varchar(255) NOT NULL,
  `noti_date` date NOT NULL,
  `noti_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`id`, `email`, `token`) VALUES
(1, 'nirasha999@gmail.com', '80d75f0227660bd003d5f03f7e11945487a101b62c5a516c138cb9b090e0c626216a60110ee1c0595c78df5af0a20bf679e2');

-- --------------------------------------------------------

--
-- Table structure for table `ped_notes`
--

CREATE TABLE `ped_notes` (
  `ped_note_id` int(10) NOT NULL,
  `doc_id` varchar(11) NOT NULL,
  `mom_id` varchar(11) NOT NULL,
  `note_topic` varchar(255) NOT NULL,
  `note_date` date NOT NULL,
  `note_description` varchar(255) NOT NULL,
  `note_records` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phm_details`
--

CREATE TABLE `phm_details` (
  `phm_id` varchar(255) NOT NULL,
  `phm_name` varchar(255) NOT NULL,
  `phm_DOB` date NOT NULL,
  `phm_age` int(20) NOT NULL,
  `phm_address` varchar(255) NOT NULL,
  `phm_tele` int(10) NOT NULL,
  `phm_email` varchar(255) NOT NULL,
  `phm_password` varchar(255) NOT NULL,
  `phm_workplace` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `phm_details`
--

INSERT INTO `phm_details` (`phm_id`, `phm_name`, `phm_DOB`, `phm_age`, `phm_address`, `phm_tele`, `phm_email`, `phm_password`, `phm_workplace`) VALUES
('P102', 'Kamala', '1965-08-02', 0, 'Hoarana', 714436987, 'kamala@gmail.com', '1234', 'Hoarana'),
('P103', 'Nimala', '1965-08-30', 0, 'Horana', 714436987, 'Nimala@gmail.com', '1234', 'Horana'),
('P104', 'Vimala', '1965-07-02', 0, 'Panadura', 714436987, 'Vimala@gmail.com', '1234', 'Panadura');

-- --------------------------------------------------------

--
-- Table structure for table `registered_user_details`
--

CREATE TABLE `registered_user_details` (
  `reg_user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `tele_number` int(10) NOT NULL,
  `age` int(5) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `phm_id` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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

CREATE TABLE `user_tbl` (
  `user_id` int(20) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(200) NOT NULL,
  `doc_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user_role` enum('mother','vog','ped','admin','phm') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE TABLE `vog_notes` (
  `VOG_note_id` int(10) NOT NULL,
  `doc_id` varchar(11) NOT NULL,
  `mom_id` varchar(11) NOT NULL,
  `note_topic` varchar(255) NOT NULL,
  `note_date` date NOT NULL,
  `note_description` varchar(255) NOT NULL,
  `note_records` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `appointment_details`
--
ALTER TABLE `appointment_details`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `mom_id` (`mom_id`);

--
-- Indexes for table `child_card`
--
ALTER TABLE `child_card`
  ADD PRIMARY KEY (`child_id`);

--
-- Indexes for table `child_details`
--
ALTER TABLE `child_details`
  ADD PRIMARY KEY (`child_id`),
  ADD KEY `phm` (`phm_id`),
  ADD KEY `doc` (`doc_id`),
  ADD KEY `guardian` (`guardian_id`);

--
-- Indexes for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `guardian_details`
--
ALTER TABLE `guardian_details`
  ADD PRIMARY KEY (`guardian_id`),
  ADD KEY `mom_id` (`mom_id`);

--
-- Indexes for table `immunization referrals`
--
ALTER TABLE `immunization referrals`
  ADD KEY `child_id` (`child_id`);

--
-- Indexes for table `immunization table`
--
ALTER TABLE `immunization table`
  ADD KEY `child_id` (`child_id`);

--
-- Indexes for table `mcard-fhistory`
--
ALTER TABLE `mcard-fhistory`
  ADD KEY `mom_id` (`mom_id`),
  ADD KEY `phm_id` (`phm_id`);

--
-- Indexes for table `mcard-general`
--
ALTER TABLE `mcard-general`
  ADD UNIQUE KEY `mother_id` (`mother_id`),
  ADD UNIQUE KEY `phm_id` (`phm_id`);

--
-- Indexes for table `mcard-medicalhistory`
--
ALTER TABLE `mcard-medicalhistory`
  ADD KEY `mom_id` (`mom_id`),
  ADD KEY `Foreign key` (`phm_id`);

--
-- Indexes for table `mcard-pohistory`
--
ALTER TABLE `mcard-pohistory`
  ADD KEY `mom_id` (`mom_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `mcard-preghistory`
--
ALTER TABLE `mcard-preghistory`
  ADD KEY `mom_id` (`mom_id`),
  ADD KEY `phm_id` (`phm_id`);

--
-- Indexes for table `mother_details`
--
ALTER TABLE `mother_details`
  ADD PRIMARY KEY (`mom_id`),
  ADD KEY `reg_user_id` (`reg_user_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`noti_id`),
  ADD KEY `mom_id` (`mom_id`),
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `phm_id` (`phm_id`),
  ADD KEY `child_id` (`child_id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Foreign key` (`email`);

--
-- Indexes for table `ped_notes`
--
ALTER TABLE `ped_notes`
  ADD PRIMARY KEY (`ped_note_id`);

--
-- Indexes for table `phm_details`
--
ALTER TABLE `phm_details`
  ADD PRIMARY KEY (`phm_id`);

--
-- Indexes for table `registered_user_details`
--
ALTER TABLE `registered_user_details`
  ADD PRIMARY KEY (`reg_user_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vog_notes`
--
ALTER TABLE `vog_notes`
  ADD PRIMARY KEY (`VOG_note_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_details`
--
ALTER TABLE `appointment_details`
  MODIFY `app_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ped_notes`
--
ALTER TABLE `ped_notes`
  MODIFY `ped_note_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registered_user_details`
--
ALTER TABLE `registered_user_details`
  MODIFY `reg_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4383;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `vog_notes`
--
ALTER TABLE `vog_notes`
  MODIFY `VOG_note_id` int(10) NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `mcard-general`
--
ALTER TABLE `mcard-general`
  ADD CONSTRAINT `mcard-general_ibfk_1` FOREIGN KEY (`mother_id`) REFERENCES `mother_details` (`mom_id`),
  ADD CONSTRAINT `phm-mg` FOREIGN KEY (`phm_id`) REFERENCES `phm_details` (`phm_id`);

--
-- Constraints for table `mcard-medicalhistory`
--
ALTER TABLE `mcard-medicalhistory`
  ADD CONSTRAINT `Foreign key` FOREIGN KEY (`phm_id`) REFERENCES `phm_details` (`phm_id`),
  ADD CONSTRAINT `mcard-medicalhistory_ibfk_1` FOREIGN KEY (`mom_id`) REFERENCES `mother_details` (`mom_id`);

--
-- Constraints for table `mcard-pohistory`
--
ALTER TABLE `mcard-pohistory`
  ADD CONSTRAINT `m-mph` FOREIGN KEY (`mom_id`) REFERENCES `mother_details` (`mom_id`),
  ADD CONSTRAINT `mcard-pohistory_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor_details` (`doc_id`);

--
-- Constraints for table `mcard-preghistory`
--
ALTER TABLE `mcard-preghistory`
  ADD CONSTRAINT `mcard-preghistory_ibfk_1` FOREIGN KEY (`mom_id`) REFERENCES `mother_details` (`mom_id`);

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
