SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for purview_list
-- ----------------------------
DROP TABLE IF EXISTS `purview_list`;
CREATE TABLE `purview_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `route_name` varchar(255) DEFAULT NULL,
  `set` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
