/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.16 : Database - db_persalinan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_persalinan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_persalinan`;

/*Table structure for table `tbl_bidan` */

DROP TABLE IF EXISTS `tbl_bidan`;

CREATE TABLE `tbl_bidan` (
  `id_bidan` varchar(10) NOT NULL,
  `nama_bidan` varchar(100) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `jam_buka` varchar(100) DEFAULT NULL,
  `daerah` varchar(100) DEFAULT NULL,
  `latlon` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_bidan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_bidan` */

insert  into `tbl_bidan`(`id_bidan`,`nama_bidan`,`telp`,`jam_buka`,`daerah`,`latlon`) values ('U826236I','Ona','097643345678','08.00 - 09.00','Bandar Lampung','-5.372972518129487, 105.26581348476168');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` varchar(10) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id`,`nama_user`,`jabatan`,`username`,`password`) values ('DE1962L','Jimi','ADMIN','jimi','NUu9VKmjjbxzMjOgh1gGWFFSn+OHd+O1sDC9SOwtKnFIlfuR6SVtSYFSoSPuKCJhPEZ4SOEEyytYnuAWE3hxSw=='),('GY6908J','MIMI','ADMIN','mimi','XqoIF461V81mpNsXhOa8vFHtBdsx0VV1mOA45b07Hpdu/TtpTqTRVN56qZZoxp0fbGbkof4I62+kr1ozuq3rkw==');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
