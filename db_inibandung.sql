/*
SQLyog Ultimate v11.33 (32 bit)
MySQL - 10.1.13-MariaDB : Database - db_inibandung
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (11,'2014_10_12_000000_create_users_table',1),(12,'2014_10_12_100000_create_password_resets_table',1),(13,'2017_03_30_175319_create_table_event',1);

/*Table structure for table `t_event` */

DROP TABLE IF EXISTS `t_event`;

CREATE TABLE `t_event` (
  `id_event` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_login` int(12) DEFAULT NULL,
  `nama_event` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tgl` date NOT NULL,
  `lokasi` text COLLATE utf8_unicode_ci NOT NULL,
  `sponsor` text COLLATE utf8_unicode_ci NOT NULL,
  `media_patner` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kontak` text COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_event`),
  KEY `fk_login` (`id_login`),
  CONSTRAINT `fk_login` FOREIGN KEY (`id_login`) REFERENCES `t_login` (`id_login`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `t_event` */

insert  into `t_event`(`id_event`,`id_login`,`nama_event`,`tgl`,`lokasi`,`sponsor`,`media_patner`,`email`,`kontak`,`foto`) values (26,4,'Gondrong Berkhwalitas','2017-03-27','Subuga ITB','Djarum Foundation','Pikiran Rakyat, Infobdg','Gondrong@mail.id','WA : 0889276541\r\nBBM : B7FDD21\r\nLINE : sigondrong','event-1.jpg'),(27,4,'Anak Dari Surga','2017-03-31','Setracinta','Coca Cola','HITS Radio','poster@mail.id','WA : 0889776544\\\r\nBBM : BFFD443','event-02.jpg'),(28,1,'Sunday Kustik','2017-04-21','Supratman','Paramex, Jack Daniels','TV ONE, Galamedia','Kustik@mail.id','WA : 08899776655, BBM : CEDA554, LINE : kustikah','C:\\xampp\\tmp\\php176B.tmp'),(29,1,'Bebas Terbatas','2017-03-23','Gd. Indonesia','Panadol, djarum coklat','ardan Radio, TVRI','Bebas@mail.id','WA : 0876452244, BBM : AEDFF63, LINE : bebasin','event-04.jpg'),(30,1,'Festival Kembang Api','2017-12-31','Gedung Sate','Okky Jelly, Indofood','NET TV','gedungsate@mail.id','WA : 08667755443, BBM : BBFFEED, LINE : kembangapi','ByBT3eoCIAATOTB.jpg');

/*Table structure for table `t_login` */

DROP TABLE IF EXISTS `t_login`;

CREATE TABLE `t_login` (
  `id_login` int(10) NOT NULL AUTO_INCREMENT,
  `nama_usr` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_telp` int(12) DEFAULT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `t_login` */

insert  into `t_login`(`id_login`,`nama_usr`,`email`,`username`,`password`,`remember_token`,`created_at`,`updated_at`,`tempat_lahir`,`tgl_lahir`,`no_telp`) values (1,'Administrator','admin@mail.com','Admin','$2y$10$YaegVN0x3BLhPnFN.RAiAOf6HuvLi83uOxKxTXow6WlqprW2ron0.','kZlEqtaHKR7m4mQZlTY6LPeph8cH2mX9E2jrrlvyL4W0EtMgC9s701EiRflW','2017-03-30 08:19:18','2017-03-31 06:16:00','Bandung','2017-03-31',888),(2,'Users','User@mail.com','User','$2y$10$hLa3yekC.kWsAmklYaL7/OxvvGiSYqYQngyQIMf4Ea/dYJfurDq2y','yuzbJ7zRnMYpN5ioipOa0B3PKBF4gFQza4NU6LmOFG2cSPsj45f1xre3K6uB','2017-03-30 09:43:53','2017-03-31 03:49:42','Jakarta',NULL,NULL),(4,'Fikri Mujaddid S','fik@ri.id','Fikri','$2y$10$RZo.neJYWYexH5sFtmi7m.saiOMJuicpSp6huXjvcr5TgIuoIsNCm','ZcRgv6bOebE9ZG13squvvNXb65b3BdPHiXDxArkD4ymqzg2H1rKKdcLijlgc','2017-03-31 03:56:14','2017-03-31 06:17:20',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
