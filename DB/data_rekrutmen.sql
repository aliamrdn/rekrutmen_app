/*
 Navicat Premium Data Transfer

 Source Server         : mysql_local
 Source Server Type    : MySQL
 Source Server Version : 100113
 Source Host           : localhost:3306
 Source Schema         : data_rekrutmen

 Target Server Type    : MySQL
 Target Server Version : 100113
 File Encoding         : 65001

 Date: 25/01/2022 19:12:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for pekerja
-- ----------------------------
DROP TABLE IF EXISTS `pekerja`;
CREATE TABLE `pekerja`  (
  `id_c_pekerja` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama_pekerja` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_ktp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_kelamin` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `agama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_kawin` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_rekrut` date NOT NULL,
  `tmpt_tgl_lahir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `negara` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pendidikan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gol_darah` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_telp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nm_ibu_kdg` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nm_saudara_kdg` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_kontak_drt` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_npwp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ukr_seragam` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ukr_sepatu` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tinggi_badan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `berat_badan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rute_jemputan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `titik_jemput` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nilai_test` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hasil_mcu` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hasil_pcr` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ojt_status` int NOT NULL,
  PRIMARY KEY (`id_c_pekerja`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pekerja
-- ----------------------------
INSERT INTO `pekerja` VALUES ('R051', 'juned', '23423423', 'P', 'jakarta', 'islam', 'kawin', '2022-01-11', 'jkt 12 desember 1980', 'indonesia', 'S1', 'O', '3234234', 'test', 'test', '3453453', '123123', 'EMAIL@email.com', 'S', '42', '160', '60', 'pgc', 'halte pgc', '80', 'baik', 'non reaktif', 1);
INSERT INTO `pekerja` VALUES ('R0512', 'juned', '23423423', 'P', 'jakarta', 'islam', 'kawin', '2022-01-11', 'jkt 12 desember 1980', 'indonesia', 'S1', 'O', '3234234', 'test', 'test', '3453453', '123123', 'EMAIL@email.com', 'S', '42', '160', '60', 'pgc', 'halte pgc', '80', 'baik', 'non reaktif', 1);
INSERT INTO `pekerja` VALUES ('R0581', 'juned', '23423423', 'P', 'jakarta', 'islam', 'kawin', '2022-01-11', 'jkt 12 desember 1980', 'indonesia', 'S1', 'O', '3234234', 'test', 'test', '3453453', '123123', 'EMAIL@email.com', 'S', '42', '160', '60', 'pgc', 'halte pgc', '80', 'baik', 'non reaktif', 0);
INSERT INTO `pekerja` VALUES ('R058187', 'juned', '23423423', 'P', 'jakarta', 'islam', 'kawin', '2022-01-11', 'jkt 12 desember 1980', 'indonesia', 'S1', 'O', '3234234', 'test', 'test', '3453453', '123123', 'EMAIL@email.com', 'S', '42', '160', '60', 'pgc', 'halte pgc', '80', 'baik', 'non reaktif', 0);

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tgl_data` date NOT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `qty_x2` int NOT NULL,
  `n_k` int NOT NULL,
  `k1` int NOT NULL,
  `k2` int NOT NULL,
  `jmlh` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 41 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES (32, '2022-01-01', 'P', 90, 20, 10, 15, 45);
INSERT INTO `transaksi` VALUES (33, '2022-02-01', 'L', 130, 50, 6, 9, 65);
INSERT INTO `transaksi` VALUES (34, '2022-03-01', 'L', 66, 8, 10, 15, 33);
INSERT INTO `transaksi` VALUES (35, '2022-01-01', 'L', 32, 5, 3, 8, 16);
INSERT INTO `transaksi` VALUES (36, '2022-01-01', 'P', 36, 6, 8, 4, 18);
INSERT INTO `transaksi` VALUES (37, '2023-01-01', 'P', 90, 20, 10, 15, 45);
INSERT INTO `transaksi` VALUES (38, '2024-01-01', 'P', 90, 20, 10, 15, 45);
INSERT INTO `transaksi` VALUES (39, '2022-01-20', 'L', 192, 50, 41, 5, 96);
INSERT INTO `transaksi` VALUES (40, '2022-01-20', 'P', 48, 8, 7, 9, 24);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fullname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` enum('user','admin') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'admin');

SET FOREIGN_KEY_CHECKS = 1;
