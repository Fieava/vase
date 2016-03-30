/*
Navicat MySQL Data Transfer

Source Server         : 3.84
Source Server Version : 50628
Source Host           : 10.110.3.84:3306
Source Database       : vase

Target Server Type    : MYSQL
Target Server Version : 50628
File Encoding         : 65001

Date: 2016-03-30 16:49:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `display_name` varchar(45) DEFAULT NULL,
  `real_name` varchar(45) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `can_login` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
