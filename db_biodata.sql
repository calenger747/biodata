/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 100411
Source Host           : localhost:3306
Source Database       : db_biodata

Target Server Type    : MYSQL
Target Server Version : 100411
File Encoding         : 65001

Date: 2020-09-01 06:05:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for biodata
-- ----------------------------
DROP TABLE IF EXISTS `biodata`;
CREATE TABLE `biodata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `posisi_dilamar` varchar(255) DEFAULT NULL,
  `no_ktp` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `gol_darah` enum('A','B','O','AB') DEFAULT NULL,
  `status` enum('Menikah','Belum Menikah') DEFAULT NULL,
  `alamat_ktp` text DEFAULT NULL,
  `alamat_tinggal` text DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `kerabat` varchar(255) DEFAULT NULL,
  `no_telp_kerabat` varchar(255) DEFAULT '',
  `kesediaan` enum('Y','N') DEFAULT NULL,
  `penghasilan` float(255,0) DEFAULT NULL,
  `id_user` int(255) DEFAULT NULL,
  `skill` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of biodata
-- ----------------------------
INSERT INTO `biodata` VALUES ('1', 'Ari Ariyanto', 'Posisi 1', '214532', 'Bogor', '2000-04-04', 'L', 'Islam', 'A', 'Belum Menikah', 'depok', 'depok', '1234567', 'kerabat 1', '1234567', 'Y', '12345678', '3', 'Skill 1');

-- ----------------------------
-- Table structure for pekerjaan
-- ----------------------------
DROP TABLE IF EXISTS `pekerjaan`;
CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) DEFAULT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `posisi` varchar(255) DEFAULT NULL,
  `pendapatan` int(255) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pekerjaan
-- ----------------------------
INSERT INTO `pekerjaan` VALUES ('1', '3', 'PT 1', 'Posisi 1', '123456', '2020');

-- ----------------------------
-- Table structure for pelatihan
-- ----------------------------
DROP TABLE IF EXISTS `pelatihan`;
CREATE TABLE `pelatihan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) DEFAULT NULL,
  `nama_kursus` varchar(255) DEFAULT NULL,
  `sertifikat` enum('Ada','Tidak') DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pelatihan
-- ----------------------------
INSERT INTO `pelatihan` VALUES ('1', '3', 'Kursus1', 'Ada', '2020');

-- ----------------------------
-- Table structure for pendidikan
-- ----------------------------
DROP TABLE IF EXISTS `pendidikan`;
CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) DEFAULT NULL,
  `jenjang` varchar(255) DEFAULT NULL,
  `nama_institusi` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `tahun_lulus` year(4) DEFAULT NULL,
  `ipk` float(255,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pendidikan
-- ----------------------------
INSERT INTO `pendidikan` VALUES ('1', '3', 'SMK', 'SMK 1', 'RPL', '2000', '3');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` enum('Administrator','User') DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3', 'Administrator');
INSERT INTO `user` VALUES ('3', 'ari@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'User');
SET FOREIGN_KEY_CHECKS=1;
