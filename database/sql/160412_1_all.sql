SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for group
-- ----------------------------
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of group
-- ----------------------------
INSERT INTO `group` VALUES ('1', 'Administrators');

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
INSERT INTO `group_purview` VALUES ('1', '1', 'Index.index', '1');

-- ----------------------------
-- Table structure for models
-- ----------------------------
DROP TABLE IF EXISTS `models`;
CREATE TABLE `models` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `parent` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `start_at` datetime DEFAULT NULL,
  `end_at` datetime DEFAULT NULL,
  `model_time_can_be_exceed` int(1) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of models
-- ----------------------------
INSERT INTO `models` VALUES ('1', '1', '用户系统', null, null, '1', null, null, '1', null, null);
INSERT INTO `models` VALUES ('2', '1', '登录', null, '1', '1', null, null, '1', null, null);
INSERT INTO `models` VALUES ('3', '1', '注册', null, '1', '1', null, null, '1', null, null);

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

-- ----------------------------
-- Table structure for projects
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `development_name` varchar(255) DEFAULT NULL,
  `description` text,
  `status` int(1) DEFAULT NULL,
  `start_at` datetime DEFAULT NULL,
  `end_at` datetime DEFAULT NULL,
  `version` varchar(255) DEFAULT NULL,
  `project_time_can_be_exceed` int(1) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of projects
-- ----------------------------
INSERT INTO `projects` VALUES ('1', 'Vase', 'Vase', '一个项目/任务跟踪计划系统', '1', null, null, '0.1', '1', null, null);

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

-- ----------------------------
-- Records of purview_list
-- ----------------------------

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
INSERT INTO `settings` VALUES ('1', 'page.wallpaper_date', '20160412');
INSERT INTO `settings` VALUES ('2', 'page.wallpaper_url', 'http://s.cn.bing.net/az/hprichbg/rb/UgabRiver_ZH-CN9917952183_1920x1080.jpg');
INSERT INTO `settings` VALUES ('3', 'page.wallpaper_text', '纳米比亚乌加河的复合卫星图像 (© NASA)');

-- ----------------------------
-- Table structure for user_group
-- ----------------------------
DROP TABLE IF EXISTS `user_group`;
CREATE TABLE `user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_group
-- ----------------------------
INSERT INTO `user_group` VALUES ('1', '1', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_purview
-- ----------------------------
INSERT INTO `user_purview` VALUES ('1', '1', 'AA', '0');
INSERT INTO `user_purview` VALUES ('2', '2', 'BB', '1');
INSERT INTO `user_purview` VALUES ('3', '1', 'CC', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

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
INSERT INTO `user_purview_executive` VALUES ('9', '1', 'Project.info', '1');
INSERT INTO `user_purview_executive` VALUES ('10', '1', 'SubNav.model', '1');

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

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'fieava@gmail.com', '$2y$10$7S9AyCb0EaPVOzjbiQMjhOpOG1HIz8lfJyMWQI8oruEUU7Titbysm', null, null, null, '1', '2016-03-30 16:47:01', '2016-03-30 16:47:01');

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
