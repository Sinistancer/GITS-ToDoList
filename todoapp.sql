/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1 - MANTIS
Source Server Version : 50621
Source Host           : 127.0.0.1:3306
Source Database       : todoapp

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2018-04-12 14:29:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2018_04_06_144032_create_todos_table', '1');

-- ----------------------------
-- Table structure for todos
-- ----------------------------
DROP TABLE IF EXISTS `todos`;
CREATE TABLE `todos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `priority` tinyint(3) unsigned NOT NULL,
  `location` varchar(273) COLLATE utf8_unicode_ci NOT NULL,
  `time_start` time NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of todos
-- ----------------------------
INSERT INTO `todos` VALUES ('1', 'Mohammad Iqbal', '5', 'bandung', '09:00:00', 'iqbal', '123456');
INSERT INTO `todos` VALUES ('2', 'Andri AWet', '4', 'bandung', '10:00:00', 'iqbal', '123456');
INSERT INTO `todos` VALUES ('4', 'Indra Pirmana', '99', 'bandung', '10:00:00', 'iqbal', '123456');
