SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for project_team
-- ----------------------------
DROP TABLE IF EXISTS `project_team`;
CREATE TABLE `project_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of project_team
-- ----------------------------
INSERT INTO `project_team` VALUES ('1', '1', '1');
