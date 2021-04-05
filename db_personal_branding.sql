/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - db_personal_branding
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_personal_branding` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_personal_branding`;

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` char(10) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `tahun_mulai_pdd` varchar(255) DEFAULT NULL,
  `tahun_selesai_pdd` varchar(255) DEFAULT NULL,
  `organisasi` varchar(255) DEFAULT NULL,
  `jabatan_org` varchar(255) DEFAULT NULL,
  `tahun_mulai_org` varbinary(255) DEFAULT NULL,
  `tahun_selesai_org` varchar(255) DEFAULT NULL,
  `pengalaman` varchar(255) DEFAULT NULL,
  `jabatan_pgl` varchar(255) DEFAULT NULL,
  `tahun_mulai_pgl` varchar(255) DEFAULT NULL,
  `tahun_selesai_pgl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id_user`,`foto`,`nama`,`jenis_kelamin`,`tempat_lahir`,`tanggal_lahir`,`alamat`,`no_telp`,`pendidikan`,`tahun_mulai_pdd`,`tahun_selesai_pdd`,`organisasi`,`jabatan_org`,`tahun_mulai_org`,`tahun_selesai_org`,`pengalaman`,`jabatan_pgl`,`tahun_mulai_pgl`,`tahun_selesai_pgl`) values 
(1,'9cfc76c8672ad39eb35b2076026e313e.jpg','Andi','laki laki','padang','1991-01-01','padang 123','088888888','SD 1|SMP 2|SMP 4|S1','1901|1904|1905|1907','1903|1904|1906|1910','organisasi 1|organisasi 2','ketua|anggota','1901|1905','1904|1906','pengalaman di 1|pengl 2','karyawan|anggota','1903|1910','1904|1913'),
(2,NULL,'Sed enim quae velit','Laki Laki','Neque sint non nulla','1987-07-22','Mollit nostrud aliqu','08433',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(3,'','Similique laborum vo','Laki Laki','Ipsam quis inventore','2003-08-01','Impedit excepteur a','897987',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
