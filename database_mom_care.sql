-- --------------------------------------------------------
-- Host:                         sql12.freesqldatabase.com
-- Server version:               5.5.62-0ubuntu0.14.04.1 - (Ubuntu)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sql12600925
CREATE DATABASE IF NOT EXISTS `sql12600925` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sql12600925`;

-- Dumping structure for table sql12600925.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `ad_id` varchar(255) NOT NULL,
  `ad_password` varchar(255) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.appointment_details
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.bmi_values
CREATE TABLE IF NOT EXISTS `bmi_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `height` float(10,2) DEFAULT NULL,
  `weight` float(10,2) DEFAULT NULL,
  `bmi` float(10,2) DEFAULT NULL,
  `date_calculated` datetime DEFAULT NULL,
  `age` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.child_card
CREATE TABLE IF NOT EXISTS `child_card` (
  `Age` int(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `child_id` varchar(11) NOT NULL,
  PRIMARY KEY (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.child_details
CREATE TABLE IF NOT EXISTS `child_details` (
  `child_id` varchar(11) NOT NULL,
  `child_name` varchar(255) DEFAULT NULL,
  `child_gender` enum('F','M') NOT NULL,
  `phm_id` varchar(11) NOT NULL,
  `doc_id` varchar(11) DEFAULT NULL,
  `guardian_id` varchar(11) DEFAULT NULL,
  `mom_email` varchar(255) NOT NULL,
  `mom_id` varchar(11) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  PRIMARY KEY (`child_id`),
  KEY `phm` (`phm_id`),
  KEY `doc` (`doc_id`),
  KEY `guardian` (`guardian_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.child_identification_information
CREATE TABLE IF NOT EXISTS `child_identification_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Child_id` varchar(10) NOT NULL,
  `child_name` varchar(50) NOT NULL,
  `child_birth_date` date NOT NULL,
  `registration_date` date NOT NULL,
  `mothers_name` varchar(50) NOT NULL,
  `mothers_address` text NOT NULL,
  `mothers_age` int(11) NOT NULL,
  `fathers_name` varchar(50) NOT NULL,
  `fathers_age` int(11) NOT NULL,
  `no_of_children_alive` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.child_newborn_care_form
CREATE TABLE IF NOT EXISTS `child_newborn_care_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Child_id` varchar(10) NOT NULL,
  `birth_place` varchar(255) DEFAULT NULL,
  `delivery_mode` varchar(255) DEFAULT NULL,
  `apgar_score` int(11) DEFAULT NULL,
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

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.child_newborn_health_chart
CREATE TABLE IF NOT EXISTS `child_newborn_health_chart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.child_special_care_reasons
CREATE TABLE IF NOT EXISTS `child_special_care_reasons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.doctor_details
CREATE TABLE IF NOT EXISTS `doctor_details` (
  `doc_id` varchar(255) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_age` int(10) NOT NULL,
  `doc_address` varchar(255) NOT NULL,
  `doc_DOB` date NOT NULL,
  `doc_email` varchar(255) NOT NULL,
  `doc_password` varchar(255) DEFAULT NULL,
  `doc_tele` int(10) NOT NULL,
  `doc_workplace` varchar(255) NOT NULL,
  `doc_type` enum('vog','ped','other') NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.doctor_notes
CREATE TABLE IF NOT EXISTS `doctor_notes` (
  `note_id` int(10) NOT NULL AUTO_INCREMENT,
  `child_id` varchar(11) DEFAULT NULL,
  `doc_id` varchar(11) NOT NULL,
  `mom_id` varchar(11) DEFAULT NULL,
  `note_topic` varchar(255) NOT NULL,
  `note_date` date NOT NULL,
  `note_description` varchar(255) NOT NULL,
  `note_records` varchar(255) DEFAULT NULL,
  `doc_role` enum('vog','ped') NOT NULL,
  PRIMARY KEY (`note_id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.guardian_details
CREATE TABLE IF NOT EXISTS `guardian_details` (
  `guardian_id` varchar(11) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `guardian_mobile` int(10) NOT NULL,
  `mom_id` varchar(11) NOT NULL,
  PRIMARY KEY (`guardian_id`),
  KEY `mom_id` (`mom_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.immunization referrals
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

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.immunization_table
CREATE TABLE IF NOT EXISTS `immunization_table` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
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

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.mcard-general
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

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.mcard-pohistory
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

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.mcard_fhistory
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

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.mcard_general
CREATE TABLE IF NOT EXISTS `mcard_general` (
  `mom_id` varchar(11) NOT NULL,
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
  `mom_occupation` varchar(255) NOT NULL,
  UNIQUE KEY `mother_id` (`mom_id`),
  UNIQUE KEY `phm_id` (`phm_id`),
  KEY `mom_id` (`mom_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.mcard_medicalhistory
CREATE TABLE IF NOT EXISTS `mcard_medicalhistory` (
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
  `mom_id` varchar(11) CHARACTER SET latin1 NOT NULL,
  `phm_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  KEY `mom_id` (`mom_id`),
  KEY `Foreign key` (`phm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.mcard_pohistory
CREATE TABLE IF NOT EXISTS `mcard_pohistory` (
  `mom_id` varchar(11) CHARACTER SET latin1 NOT NULL,
  `doctor_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `gravidity_G` varchar(20) NOT NULL,
  `gravidity_P` varchar(20) NOT NULL,
  `gravidity_C` varchar(20) NOT NULL,
  `youngest_child_age` int(11) NOT NULL,
  `LRMP` varchar(20) NOT NULL,
  `EED` varchar(20) NOT NULL,
  `us_eed` varchar(255) NOT NULL,
  `poa_at_dating` varchar(255) NOT NULL,
  `date_quickning` date NOT NULL,
  `poa_at_reg` varchar(255) NOT NULL,
  KEY `mom_id` (`mom_id`),
  KEY `doctor_id` (`doctor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.mcard_preghistory
CREATE TABLE IF NOT EXISTS `mcard_preghistory` (
  `mom_id` varchar(11) NOT NULL,
  `phm_id` varchar(20) NOT NULL,
  `pregnancy_type` varchar(255) NOT NULL,
  `antenatal` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `outcome` varchar(255) NOT NULL,
  `weight` int(10) NOT NULL,
  `postal_complications` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  KEY `mom_id` (`mom_id`),
  KEY `phm_id` (`phm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.mother_details
CREATE TABLE IF NOT EXISTS `mother_details` (
  `mom_id` varchar(11) NOT NULL,
  `mom_fname` varchar(255) NOT NULL,
  `mom_mname` varchar(255) NOT NULL,
  `mom_lname` varchar(255) NOT NULL,
  `mom_landline` varchar(10) DEFAULT NULL,
  `mom_mobile` varchar(10) DEFAULT NULL,
  `mom_propic` varchar(255) NOT NULL,
  `mom_email` varchar(255) NOT NULL,
  `mom_password` varchar(255) NOT NULL,
  `mom_address` varchar(255) NOT NULL,
  `mom_DOB` date NOT NULL,
  `mom_age` int(10) NOT NULL,
  `mom_regdate` date NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `guardian_mobile` varchar(10) NOT NULL,
  `reg_user_id` int(11) NOT NULL,
  `mom_delivery_date` date DEFAULT NULL,
  `child_id` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`mom_id`),
  KEY `reg_user_id` (`reg_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.notifications
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

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.password_reset
CREATE TABLE IF NOT EXISTS `password_reset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Foreign key` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.pdf_export
CREATE TABLE IF NOT EXISTS `pdf_export` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.phm_details
CREATE TABLE IF NOT EXISTS `phm_details` (
  `phm_id` varchar(255) NOT NULL,
  `phm_name` varchar(255) NOT NULL,
  `phm_DOB` date NOT NULL,
  `phm_address` varchar(255) NOT NULL,
  `phm_tele` int(10) NOT NULL,
  `phm_email` varchar(255) NOT NULL,
  `phm_password` varchar(255) DEFAULT NULL,
  `phm_workplace` varchar(255) NOT NULL,
  `phm_age` int(20) NOT NULL,
  PRIMARY KEY (`phm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.registered_user_details
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
  `phm_acceptance` enum('accepted','rejected','pending') NOT NULL DEFAULT 'pending',
  `admin_acceptence` enum('accepted','rejected','pending') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`reg_user_id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9804 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.testing
CREATE TABLE IF NOT EXISTS `testing` (
  `name_x` int(11) DEFAULT NULL,
  `bimbi` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.user_tbl
CREATE TABLE IF NOT EXISTS `user_tbl` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(200) NOT NULL,
  `doc_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `user_role` enum('mother','vog','ped','admin','phm') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table sql12600925.vaccinetypes
CREATE TABLE IF NOT EXISTS `vaccinetypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Vaccine` varchar(255) NOT NULL,
  `Creationdate` date NOT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
