SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for web_theme
-- ----------------------------
DROP TABLE IF EXISTS `web_theme`;
CREATE TABLE `web_theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `default` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web_theme
-- ----------------------------
INSERT INTO `web_theme` VALUES ('1', 'blue', '1');
