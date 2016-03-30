SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `value` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES ('1', 'page.wallpaper_date', '20160329');
INSERT INTO `settings` VALUES ('2', 'page.wallpaper_url', 'http://s.cn.bing.net/az/hprichbg/rb/WestBow_ZH-CN11767628474_1920x1080.jpg');
INSERT INTO `settings` VALUES ('3', 'page.wallpaper_text', '苏格兰，爱丁堡，西弓街 (© Rory McDonald/Getty Images)');
