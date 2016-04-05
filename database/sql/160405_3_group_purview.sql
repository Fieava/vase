SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for group_purview
-- ----------------------------
DROP TABLE IF EXISTS `group_purview`;
CREATE TABLE `group_purview` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) DEFAULT NULL,
  `route_name` varchar(255) DEFAULT NULL,
  `available` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of group_purview
-- ----------------------------
INSERT INTO `group_purview` VALUES ('1', '1', 'Index.dashboard', '1');
