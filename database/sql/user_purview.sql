SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user_purview
-- ----------------------------
DROP TABLE IF EXISTS `user_purview`;
CREATE TABLE `user_purview` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `route_name` varchar(255) DEFAULT NULL,
  `available` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
