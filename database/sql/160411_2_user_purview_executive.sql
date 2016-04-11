SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user_purview_executive
-- ----------------------------
DROP TABLE IF EXISTS `user_purview_executive`;
CREATE TABLE `user_purview_executive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `route_name` varchar(255) DEFAULT NULL,
  `available` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_purview_executive
-- ----------------------------
INSERT INTO `user_purview_executive` VALUES ('1', '1', 'Index.index', '1');
INSERT INTO `user_purview_executive` VALUES ('2', '1', 'SubNav.blank', '1');
INSERT INTO `user_purview_executive` VALUES ('3', '1', 'SubNav.load_error', '1');
INSERT INTO `user_purview_executive` VALUES ('4', '1', 'SubNav.forbidden', '1');
INSERT INTO `user_purview_executive` VALUES ('5', '1', 'SubNav.loading', '1');
INSERT INTO `user_purview_executive` VALUES ('6', '1', 'SubNav.project', '1');
INSERT INTO `user_purview_executive` VALUES ('7', '1', 'Content.load_error', '1');
INSERT INTO `user_purview_executive` VALUES ('8', '1', 'Content.forbidden', '1');
