/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.17-MariaDB : Database - hozrot
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hozrot` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `hozrot`;

/*Table structure for table `articles` */

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `writer_name` varchar(255) DEFAULT NULL,
  `writer_detail` varchar(500) DEFAULT NULL,
  `content_link` varchar(255) DEFAULT NULL,
  `thumbnail_img` varchar(255) DEFAULT NULL,
  `category` enum('test1','test2') DEFAULT NULL,
  `subcategory` enum('test1_1','test1_2') DEFAULT NULL,
  `place` varchar(500) DEFAULT NULL,
  `summary` varchar(500) DEFAULT NULL,
  `attention` varchar(500) DEFAULT NULL,
  `others_comment` text DEFAULT NULL,
  `hozrot_speech` varchar(500) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`),
  KEY `category` (`category`),
  KEY `subcategory` (`subcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `articles` */

/*Table structure for table `audios` */

DROP TABLE IF EXISTS `audios`;

CREATE TABLE `audios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `youtube_link` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `thumpnail_img` varchar(255) DEFAULT NULL,
  `category` enum('test1','test2') DEFAULT NULL,
  `subcatefory` enum('test1_1','test1_2') DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `quranul_karim_ref` varchar(500) DEFAULT NULL,
  `hadis_sharif_ref` varchar(500) DEFAULT NULL,
  `sher_asars` varchar(500) DEFAULT NULL,
  `khutbah` varchar(500) DEFAULT NULL,
  `hazrots_comments` text DEFAULT NULL,
  `learning` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  KEY `id` (`id`),
  KEY `category` (`category`),
  KEY `subcategory` (`subcatefory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `audios` */

/*Table structure for table `books` */

DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `writer_name` varchar(255) DEFAULT NULL,
  `writer_detail` varchar(500) DEFAULT NULL,
  `content_link` varchar(255) DEFAULT NULL,
  `thumbnail_img` varchar(255) DEFAULT NULL,
  `category` enum('test1','test2') DEFAULT NULL,
  `subcategory` enum('test1_1','test1_2') DEFAULT NULL,
  `place` varchar(500) DEFAULT NULL,
  `summary` varchar(500) DEFAULT NULL,
  `attention` varchar(500) DEFAULT NULL,
  `others_comment` text DEFAULT NULL,
  `hozrot_speech` varchar(500) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`),
  KEY `category` (`category`),
  KEY `subcategory` (`subcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `books` */

/*Table structure for table `enents` */

DROP TABLE IF EXISTS `enents`;

CREATE TABLE `enents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `detail` varchar(500) DEFAULT NULL,
  `category` enum('test1','test2') DEFAULT NULL,
  `subcategory` enum('test1_1','test1_2') DEFAULT NULL,
  `e_start` datetime DEFAULT NULL,
  `e_end` datetime DEFAULT NULL,
  `place` varchar(500) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `helping_procedure` varchar(500) DEFAULT NULL,
  `invitation_speech` varchar(500) DEFAULT NULL,
  `hazrot_speech` varchar(500) DEFAULT NULL,
  `instruction` varchar(500) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `enents` */

/*Table structure for table `madrasas` */

DROP TABLE IF EXISTS `madrasas`;

CREATE TABLE `madrasas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varbinary(255) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `information` text DEFAULT NULL,
  `aim` varchar(500) DEFAULT NULL,
  `service` varchar(500) DEFAULT NULL,
  `philosophy` varchar(500) DEFAULT NULL,
  `acheivements` varchar(500) DEFAULT NULL,
  `academic_calender_url` varchar(250) DEFAULT NULL,
  `helping_procedure` varchar(500) DEFAULT NULL,
  `othes` varchar(500) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `madrasas` */

/*Table structure for table `notices` */

DROP TABLE IF EXISTS `notices`;

CREATE TABLE `notices` (
  `id` int(11) DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `period_start` datetime DEFAULT NULL,
  `period_end` datetime DEFAULT NULL,
  `importance` tinyint(1) DEFAULT NULL COMMENT '0 to 5',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `notices` */

/*Table structure for table `p_centifications` */

DROP TABLE IF EXISTS `p_centifications`;

CREATE TABLE `p_centifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_id` int(11) DEFAULT NULL,
  `c_name` varchar(255) DEFAULT NULL,
  `c_where` varchar(255) DEFAULT NULL,
  `c_acheivement` varchar(500) DEFAULT NULL,
  `certificate_url` varchar(255) DEFAULT NULL,
  `c_connecting_people` text DEFAULT NULL,
  `c_impact` text DEFAULT NULL,
  `c_starting_date` datetime DEFAULT NULL,
  `c_ending_date` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `p_centifications` */

/*Table structure for table `p_characteristic` */

DROP TABLE IF EXISTS `p_characteristic`;

CREATE TABLE `p_characteristic` (
  `id` int(11) DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `p_characteristic` */

/*Table structure for table `p_khalifas` */

DROP TABLE IF EXISTS `p_khalifas`;

CREATE TABLE `p_khalifas` (
  `id` int(11) DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` varchar(500) DEFAULT NULL,
  `sohobot_period_start` datetime DEFAULT NULL,
  `sohobot_period_end` datetime DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `p_khalifas` */

/*Table structure for table `p_shaekhs` */

DROP TABLE IF EXISTS `p_shaekhs`;

CREATE TABLE `p_shaekhs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` varchar(500) DEFAULT NULL,
  `story` varchar(500) DEFAULT NULL,
  `period_start` datetime DEFAULT NULL,
  `period_end` datetime DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `certificate_story` varchar(500) DEFAULT NULL,
  `certificate_url` varchar(255) DEFAULT NULL,
  `impact` varchar(500) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `p_shaekhs` */

/*Table structure for table `profile` */

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `family` varchar(500) DEFAULT NULL,
  `invitation_procedure` varchar(500) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `communication_procedure` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `profile` */

/*Table structure for table `videos` */

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `youtube_link` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `thumpnail_img` varchar(255) DEFAULT NULL,
  `category` enum('test1','test2') DEFAULT NULL,
  `subcatefory` enum('test1_1','test1_2') DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `quranul_karim_ref` varchar(500) DEFAULT NULL,
  `hadis_sharif_ref` varchar(500) DEFAULT NULL,
  `sher_asars` varchar(500) DEFAULT NULL,
  `khutbah` varchar(500) DEFAULT NULL,
  `hazrots_comments` text DEFAULT NULL,
  `learning` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  KEY `id` (`id`),
  KEY `category` (`category`),
  KEY `subcategory` (`subcatefory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `videos` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
