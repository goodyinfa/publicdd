/*
 Navicat Premium Data Transfer

 Source Server         : nysql
 Source Server Type    : MySQL
 Source Server Version : 80012
 Source Host           : localhost:3306
 Source Schema         : layabox

 Target Server Type    : MySQL
 Target Server Version : 80012
 File Encoding         : 65001

 Date: 02/08/2019 15:10:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for lay_admin
-- ----------------------------
DROP TABLE IF EXISTS `lay_admin`;
CREATE TABLE `lay_admin`  (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lay_admin
-- ----------------------------
INSERT INTO `lay_admin` VALUES (1, 'admin', '49ba59abbe56e057');
INSERT INTO `lay_admin` VALUES (2, 'root', '49ba59abbe56e057');
INSERT INTO `lay_admin` VALUES (5, 'hello', 'e10adc3949ba59abbe56e057f20f883e');

-- ----------------------------
-- Table structure for lay_advantage
-- ----------------------------
DROP TABLE IF EXISTS `lay_advantage`;
CREATE TABLE `lay_advantage`  (
  `ad_id` int(5) NOT NULL AUTO_INCREMENT,
  `ad_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ad_con` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`ad_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lay_advantage
-- ----------------------------
INSERT INTO `lay_advantage` VALUES (1, './images/index-7.png', '快速上手，Flash程序员3小时掌握HTML5开发');
INSERT INTO `lay_advantage` VALUES (2, './images/index-8.png', '快速上手，Flash程序员3小时掌握HTML5开发');
INSERT INTO `lay_advantage` VALUES (3, './images/index-9.png', '快速上手，Flash程序员3小时掌握HTML5开发');
INSERT INTO `lay_advantage` VALUES (4, './images/index-10.png', '快速上手，Flash程序员3小时掌握HTML5开发');

-- ----------------------------
-- Table structure for lay_ban
-- ----------------------------
DROP TABLE IF EXISTS `lay_ban`;
CREATE TABLE `lay_ban`  (
  `ban_id` tinyint(25) NOT NULL AUTO_INCREMENT,
  `ban_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ban_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ban_show` tinyint(5) NOT NULL,
  PRIMARY KEY (`ban_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for lay_contact
-- ----------------------------
DROP TABLE IF EXISTS `lay_contact`;
CREATE TABLE `lay_contact`  (
  `contact_id` int(5) NOT NULL AUTO_INCREMENT,
  `contact_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `contact_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`contact_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lay_contact
-- ----------------------------
INSERT INTO `lay_contact` VALUES (1, '北京市海淀区 蓝靛厂南路25号牛顿办公区301室', './images/dot-01.png');

-- ----------------------------
-- Table structure for lay_edge
-- ----------------------------
DROP TABLE IF EXISTS `lay_edge`;
CREATE TABLE `lay_edge`  (
  `edge_id` int(5) NOT NULL AUTO_INCREMENT,
  `edge_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `edge_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `edge_content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`edge_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lay_edge
-- ----------------------------
INSERT INTO `lay_edge` VALUES (1, '快速Flash产品转换', './images/index-2.png', 'Flash页游\\手游仅需1个人7天即可\r\n                                转换为HTML5和APP游戏');
INSERT INTO `lay_edge` VALUES (2, '快速Flash产品转换', './images/index-3.png', 'Flash页游\\手游仅需1个人7天即可\r\n                                转换为HTML5和APP游戏');
INSERT INTO `lay_edge` VALUES (3, '快速Flash产品转换', './images/index-4.png', 'Flash页游\\手游仅需1个人7天即可\r\n                                转换为HTML5和APP游戏');
INSERT INTO `lay_edge` VALUES (4, '快速Flash产品转换', './images/index-5.png', 'Flash页游\\手游仅需1个人7天即可\r\n                                转换为HTML5和APP游戏');

-- ----------------------------
-- Table structure for lay_foot
-- ----------------------------
DROP TABLE IF EXISTS `lay_foot`;
CREATE TABLE `lay_foot`  (
  `foot_id` int(5) NOT NULL AUTO_INCREMENT,
  `foot_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`foot_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lay_foot
-- ----------------------------
INSERT INTO `lay_foot` VALUES (1, '公司简介');
INSERT INTO `lay_foot` VALUES (2, '联系方式');
INSERT INTO `lay_foot` VALUES (3, '人才招聘');

-- ----------------------------
-- Table structure for lay_function
-- ----------------------------
DROP TABLE IF EXISTS `lay_function`;
CREATE TABLE `lay_function`  (
  `func_id` int(5) NOT NULL AUTO_INCREMENT,
  `func_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `func_show` int(2) NULL DEFAULT NULL,
  `pro_id` int(11) NULL DEFAULT NULL,
  `func_class` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `func_content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`func_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lay_function
-- ----------------------------
INSERT INTO `lay_function` VALUES (2, '更小，更多，更强', 1, 5, 'chara', '不足20K的HTML5运行器，拥有超过5亿的移动 设备安装量，已嵌入到QQ浏览器、QQ空间、百 度浏览器、新浪微博、猎豹浏览器等20多家主流 平台。');
INSERT INTO `lay_function` VALUES (3, '小巧强大', 1, 1, NULL, '核心库100K左右，支持2D\\3D动画、UI、粒子、骨骼、物理等完整功 能，性能媲美APP。');
INSERT INTO `lay_function` VALUES (4, '应用范围广泛', 1, 1, NULL, '可广泛应用于小型游戏、大型游戏、广告、营销、H5应用、教育等领域');
INSERT INTO `lay_function` VALUES (5, '多语言开发', 1, 1, NULL, '支持AS3、TypeScript、JavaScript三种开发语言，适用程序员更广泛');
INSERT INTO `lay_function` VALUES (6, '一站式对接', 1, 6, NULL, '一次对接，全渠道发行，提供一站式对接、发行、运营服务');
INSERT INTO `lay_function` VALUES (7, '免费测试', 1, 6, 'test', '提供免费评测服务以及线上真实用户的产品测试和运营测试');
INSERT INTO `lay_function` VALUES (8, '专业服务', 1, 6, 'test', '提供最专业的用户数据、付费数据、产品数据等游戏运营数据统计系统');
INSERT INTO `lay_function` VALUES (9, '嵌入式商店', 1, 4, NULL, '仅20K的嵌入式HTML5应用商店，嵌入到APP中提供托管式HTML5商店 服务。');
INSERT INTO `lay_function` VALUES (10, '流量变现', 1, 4, NULL, '丰富优质的大型HTML5游戏产品，帮助APP进入流量变现新时代。');
INSERT INTO `lay_function` VALUES (11, '覆盖广', 1, 3, NULL, '超过5亿的移动设备安装量覆盖，为CP发行保驾护航');
INSERT INTO `lay_function` VALUES (12, '分成高', 1, 3, 'test', 'CP可享受80%发行收益的高分成政策。');

-- ----------------------------
-- Table structure for lay_game
-- ----------------------------
DROP TABLE IF EXISTS `lay_game`;
CREATE TABLE `lay_game`  (
  `game_id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `game_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `game_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `game_show` tinyint(2) NOT NULL,
  `game_thumb` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `gade_id` int(5) NOT NULL,
  `game_time` int(20) NOT NULL,
  `game_order` int(255) NULL DEFAULT NULL,
  PRIMARY KEY (`game_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lay_game
-- ----------------------------
INSERT INTO `lay_game` VALUES (2, './images/game(6).jpg', '利刃', 1, './images/index-28.png', 1, 174458, NULL);
INSERT INTO `lay_game` VALUES (5, './images/game(6).jpg', '利刃', 1, './images/index-28.png', 1, 0, NULL);
INSERT INTO `lay_game` VALUES (6, './images/game(1).jpg', '魏三国', 1, './images/index-28.png', 3, 0, NULL);
INSERT INTO `lay_game` VALUES (7, './images/game(2).jpg', '萌挂三国', 1, './images/index-28.png', 4, 0, NULL);
INSERT INTO `lay_game` VALUES (8, './images/game(3).jpg', '魔卡幻想', 1, './images/index-28.png', 5, 0, NULL);
INSERT INTO `lay_game` VALUES (9, './images/game(4).jpg', '我爱我家', 1, './images/index-28.png', 6, 0, NULL);
INSERT INTO `lay_game` VALUES (10, './images/game(5).jpg', '刀塔大菠萝', 1, './images/index-28.png', 7, 0, NULL);
INSERT INTO `lay_game` VALUES (11, './images/game(6).jpg', '猎刃2', 1, './images/index-28.png', 1, 0, NULL);
INSERT INTO `lay_game` VALUES (12, './images/game(7).jpg', '醉西游', 1, NULL, 8, 0, NULL);
INSERT INTO `lay_game` VALUES (13, './images/game(8).jpg', '米你猎人', 1, NULL, 9, 0, NULL);
INSERT INTO `lay_game` VALUES (14, './images/game(9).jpg', '英雄争霸', 1, NULL, 10, 0, NULL);
INSERT INTO `lay_game` VALUES (15, './images/game(10).jpg', '二战传奇', 1, NULL, 11, 0, NULL);
INSERT INTO `lay_game` VALUES (16, './images/game(11).jpg', '龙吟三国', 1, NULL, 12, 0, NULL);
INSERT INTO `lay_game` VALUES (17, './images/game(12).jpg', '夺塔三国', 1, NULL, 13, 0, NULL);
INSERT INTO `lay_game` VALUES (18, './images/game(13).jpg', '上吧主公', 1, NULL, 2, 0, NULL);
INSERT INTO `lay_game` VALUES (19, './images/game(13).jpg', '上吧主公', 1, NULL, 14, 0, NULL);
INSERT INTO `lay_game` VALUES (20, './images/game(13).jpg', '上吧主公', 1, NULL, 15, 0, NULL);
INSERT INTO `lay_game` VALUES (21, './images/game(18).jpg', '挂机三国', 1, NULL, 18, 0, NULL);
INSERT INTO `lay_game` VALUES (22, './images/game(20).jpg', '熊来啦', 1, NULL, 20, 0, NULL);
INSERT INTO `lay_game` VALUES (23, './images/game(21).jpg', '西游快跑', 1, NULL, 21, 0, NULL);
INSERT INTO `lay_game` VALUES (24, './images/game(16).jpg', '超能战队', 1, NULL, 16, 0, NULL);
INSERT INTO `lay_game` VALUES (25, './images/game(17).jpg', '快跑嘀嘀', 1, NULL, 17, 0, NULL);
INSERT INTO `lay_game` VALUES (26, './images/game(19).jpg', '三国仙侠', 1, NULL, 19, 0, NULL);
INSERT INTO `lay_game` VALUES (27, './images/game(22).jpg', '卡牌传奇', 1, NULL, 22, 0, NULL);
INSERT INTO `lay_game` VALUES (28, 'http://localhost/upload/2019-07-07/156243253344720.png', '战神', 1, '../thumb/2019-07-07/thumb_156243253344720.png', 0, 1562432533, NULL);
INSERT INTO `lay_game` VALUES (29, 'http://localhost/upload/2019-07-07/156243281327806.png', '战神', 1, '../thumb/2019-07-07/thumb_156243281327806.png', 0, 1562432813, NULL);
INSERT INTO `lay_game` VALUES (30, 'http://localhost/upload/2019-07-07/156243282393071.png', '战神', 1, '../thumb/2019-07-07/thumb_156243282393071.png', 0, 1562432823, NULL);
INSERT INTO `lay_game` VALUES (31, 'http://localhost/upload/2019-07-07/156243289377874.png', '战神', 1, '../thumb/2019-07-07/thumb_156243289377874.png', 0, 1562432893, NULL);
INSERT INTO `lay_game` VALUES (32, 'http://localhost/upload/2019-07-07/15624329543887.png', '战神', 1, '../thumb/2019-07-07/thumb_15624329543887.png', 0, 1562432954, NULL);
INSERT INTO `lay_game` VALUES (33, 'http://localhost/upload/2019-07-07/156243295968732.png', '战神', 1, '../thumb/2019-07-07/thumb_156243295968732.png', 0, 1562432959, NULL);
INSERT INTO `lay_game` VALUES (34, 'http://localhost/upload/2019-07-07/156243298078263.png', '战神', 1, '../thumb/2019-07-07/thumb_156243298078263.png', 0, 1562432980, NULL);

-- ----------------------------
-- Table structure for lay_gamedetail
-- ----------------------------
DROP TABLE IF EXISTS `lay_gamedetail`;
CREATE TABLE `lay_gamedetail`  (
  `gade_id` int(5) NOT NULL AUTO_INCREMENT,
  `gade_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gade_detail` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gade_img1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `gade_img2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `gade_img3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `gade_img4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `gade_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `gade_show` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gade_thumb` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`gade_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lay_gamedetail
-- ----------------------------
INSERT INTO `lay_gamedetail` VALUES (1, '猎刃2', '2015年Q版魔幻手游诚心之作，超魔幻ARPG之作！！！无可挑剔的简单操作，无与伦比的爽快打击感，无处不在的惊 喜！无穷无尽的回忆！全部技能100%还原，高清华丽特效，体验视觉盛宴；超写实画风，完美重现经典副本；让我们一 起来，挑战恶魔，乱斗魔兽！', './images/game-2.png', './images/game-2.png', './images/game-3.png', './images/game-4.png', './images/game_bg_02.png', '1', NULL);
INSERT INTO `lay_gamedetail` VALUES (2, '上吧主公', '《上吧主公》是一款以三国为背景Q版卡牌游戏，游戏与普通三国题材不同，它以萌萌哒猫咪为三国众名将构筑出别具一\r\n                        格的游戏世界观。画面Q萌，技能华丽炫酷，集养成 、 收集 、策略 、卡牌于一体。三国初始群雄争霸，奇妙的名将会帮\r\n                        你掌握胜算左右战况。', './images/game-5.png', './images/game-6.png', './images/game-7.png', './images/game-8.png', './images/game_bg_01.png', '1', NULL);
INSERT INTO `lay_gamedetail` VALUES (6, '战神', '<p></p><p>helloword<img src=\"http://img.baidu.com/hi/jx2/j_0034.gif\" _src=\"http://img.baidu.com/hi/jx2/j_0034.gif\"/></p><p></p>', '../thumb/2019-07-07/thumb_15624831658455.jpg', '../thumb/2019-07-07/thumb_156248316526499.jpg', '../thumb/2019-07-07/thumb_156248316530843.jpg', '../thumb/2019-07-07/thumb_156248316524603.jpg', 'http://www.layabox.com/upload/2019-07-07/156248391291456.jpg', '1', '../thumb/2019-07-07/thumb_156248391291456.jpg');

-- ----------------------------
-- Table structure for lay_job
-- ----------------------------
DROP TABLE IF EXISTS `lay_job`;
CREATE TABLE `lay_job`  (
  `job_id` int(5) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `job_desc_id` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `job_question_id` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `job_show` int(2) NOT NULL,
  PRIMARY KEY (`job_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lay_job
-- ----------------------------
INSERT INTO `lay_job` VALUES (1, 'as3引擎开发', '1', '1', 1);
INSERT INTO `lay_job` VALUES (2, 'PHP开发工程师', '2', '2', 1);
INSERT INTO `lay_job` VALUES (3, '游戏商务经理', '3', '3', 1);
INSERT INTO `lay_job` VALUES (4, '游戏运维工程师', '4', '4', 1);
INSERT INTO `lay_job` VALUES (5, 'android开发工程师', '5', '5', 1);

-- ----------------------------
-- Table structure for lay_jobcontent
-- ----------------------------
DROP TABLE IF EXISTS `lay_jobcontent`;
CREATE TABLE `lay_jobcontent`  (
  `jobcon_id` int(5) NOT NULL AUTO_INCREMENT,
  `jobcon_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `jobcon_request` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`jobcon_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for lay_jobdesc
-- ----------------------------
DROP TABLE IF EXISTS `lay_jobdesc`;
CREATE TABLE `lay_jobdesc`  (
  `job_desc_id` int(5) NOT NULL AUTO_INCREMENT,
  `job_desc1` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `job_desc2` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `job_desc3` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `job_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `job_desc4` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`job_desc_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lay_jobdesc
-- ----------------------------
INSERT INTO `lay_jobdesc` VALUES (1, '1. as3游戏引擎编写', '2. as3游戏底层或优化逻辑代码', '3. 游戏架构或性能优化。', NULL, NULL);
INSERT INTO `lay_jobdesc` VALUES (2, '1. 设计并实现大数据，高并发，可扩展性的海量用户级游戏平台；', '2. 负责平台核心功能模块的开发，调试和整合；', '3. 参与制定平台业务流程，交互式平台架构。', NULL, NULL);
INSERT INTO `lay_jobdesc` VALUES (3, '1. 负责开拓游戏合作客户，及落实商务政策；', '2. 寻找符合公司利益的战略合作伙伴，并参与商务谈判，促成合作业务的达成；', NULL, NULL, NULL);
INSERT INTO `lay_jobdesc` VALUES (4, '1. 网络游戏的环境部署、多版本发布、在线升级和相关维护工作；', '2. 监控服务器运行状态，第一时间处理服务器突发软硬件故障，对服务器安全管理的规划和执行；', '3. 服务器数据、文件的备份管理；', '4. 游戏服务器部署架构的研究和优化，游戏自动化部署、发布的研究工作。', NULL);
INSERT INTO `lay_jobdesc` VALUES (5, '1. 负责各种平台对接，浏览器对接。', NULL, NULL, NULL, NULL);
INSERT INTO `lay_jobdesc` VALUES (6, '222', '222', '222', '222', '222');

-- ----------------------------
-- Table structure for lay_jobquestion
-- ----------------------------
DROP TABLE IF EXISTS `lay_jobquestion`;
CREATE TABLE `lay_jobquestion`  (
  `job_question_id` int(5) NOT NULL AUTO_INCREMENT,
  `job_question1` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `job_question2` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `job_question3` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `job_question4` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `job_question5` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `job_question6` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`job_question_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lay_jobquestion
-- ----------------------------
INSERT INTO `lay_jobquestion` VALUES (1, '1. 熟练掌握ActionScript 3语言,熟悉ActionScript3程序技巧，以及常用内置类；', '2. 熟悉MVC框架的使用，理解面向对象编程思想，可以抽象一般的业务内容；', '3. 热爱游戏行业,热衷编程，工作认真负责,具有良好的沟通能力，以及团队合作能力，强烈的责任心、创业精神；', '4. 具有丰富的游戏开发经验；', '5. 能写底层或引擎等优先考虑。', NULL);
INSERT INTO `lay_jobquestion` VALUES (2, '1. 具有强烈的责任心，良好的沟通能力，有较强的独立工作能力和解决问题的能力；', '2. 三年以上PHP开发经验，熟练掌握PHP开发及性能优化经验；', '3. 熟悉大型网站或平台的构架和性能优化，熟悉各种WEB缓存技术，并有实际的项目经验；', '4. 熟悉Linux服务器环境优先考虑。', NULL, NULL);
INSERT INTO `lay_jobquestion` VALUES (3, '1. 熟悉互联网及游戏行业内合作运营的具体情况，具备大型网页游戏平台商务工作经验；', '2. 敏锐的市场洞察力，对游戏合作模式有较深了解；', '3. 优秀的人际交往、商务拓展和任务执行能力，并能承受工作压力；', '4. 工作认真细致，具备高度的责任心、团队协作意识和吃苦耐劳精神；', '5. 英语优秀者优先。', NULL);
INSERT INTO `lay_jobquestion` VALUES (4, '1. 大专及以上学历，计算机或相关专业，2年以上Linux服务器管理维护经验；', '2. 熟悉windows、Linux操作系统的安装、管理；会制作自动化安装光盘 ；', '3. 了解常见应用服务器LAMP安装、配置；了解主流数据库Mysql的安装、配置；', '4. 具有高度的责任心、抗压力，以及良好的沟通能力及团队合作精神，具有独立分析和处理故障的能力；', '5. 熟悉防火墙，路由、交换机的运行机制和配置，熟悉各种网络协议；具有游戏运维经验，熟悉网络游戏服务器部署架构者优先；', '6. 有自动化部署、发布；腾讯平台游戏接入、运维工作经验者优先。');
INSERT INTO `lay_jobquestion` VALUES (5, '1. 熟悉java；', '2. 熟悉android原生开发；', '3. 能够用android做一下简单的界面，熟悉webView的用法。', NULL, NULL, NULL);
INSERT INTO `lay_jobquestion` VALUES (6, '11', '11', '11', '11', '11', '12');

-- ----------------------------
-- Table structure for lay_nav
-- ----------------------------
DROP TABLE IF EXISTS `lay_nav`;
CREATE TABLE `lay_nav`  (
  `lay_id` int(11) NOT NULL AUTO_INCREMENT,
  `lay_name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lay_url` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lay_order` tinyint(5) NULL DEFAULT NULL,
  `lay_show` tinyint(2) NOT NULL,
  PRIMARY KEY (`lay_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lay_nav
-- ----------------------------
INSERT INTO `lay_nav` VALUES (1, '首页', 'index.php', 1, 1);
INSERT INTO `lay_nav` VALUES (2, 'Laya家族', 'family.php', 2, 1);
INSERT INTO `lay_nav` VALUES (3, '游戏', 'game.php', 3, 1);
INSERT INTO `lay_nav` VALUES (4, '新闻动态', 'news.php', 4, 1);
INSERT INTO `lay_nav` VALUES (5, '开发者中心', NULL, 5, 1);
INSERT INTO `lay_nav` VALUES (6, '开发者社区', NULL, 6, 1);
INSERT INTO `lay_nav` VALUES (7, '开放平台', NULL, 7, 1);
INSERT INTO `lay_nav` VALUES (8, '关于我们', 'aboutour.php', 8, 1);

-- ----------------------------
-- Table structure for lay_news
-- ----------------------------
DROP TABLE IF EXISTS `lay_news`;
CREATE TABLE `lay_news`  (
  `new_id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `new_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `new_content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `new_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `new_show` tinyint(2) NOT NULL,
  `new_tumb` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `new_time` date NOT NULL,
  PRIMARY KEY (`new_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lay_news
-- ----------------------------
INSERT INTO `lay_news` VALUES (1, '', 'Layabox计划在3月限量内测的LayaAir引擎，通过在低端机型上的性能实测以及即将上线的大型裸跑游戏，证明了\r\n                        HTML5裸跑性能已可媲美APP，性能问题将不再成为制约产业发展的瓶颈。', '技术突破：HTML5裸跑性能已可媲美APP', 1, NULL, '2016-02-25');
INSERT INTO `lay_news` VALUES (2, '', 'Layabox计划在3月限量内测的LayaAir引擎，通过在低端机型上的性能实测以及即将上线的大型裸跑游戏，证明了\r\n                        HTML5裸跑性能已可媲美APP，性能问题将不再成为制约产业发展的瓶颈。', '技术突破：HTML5裸跑性能已可媲美APP', 1, NULL, '2016-02-25');
INSERT INTO `lay_news` VALUES (3, '', 'Layabox计划在3月限量内测的LayaAir引擎，通过在低端机型上的性能实测以及即将上线的大型裸跑游戏，证明了\r\n                        HTML5裸跑性能已可媲美APP，性能问题将不再成为制约产业发展的瓶颈。', '技术突破：HTML5裸跑性能已可媲美APP', 1, NULL, '2016-02-25');
INSERT INTO `lay_news` VALUES (4, '', 'Layabox计划在3月限量内测的LayaAir引擎，通过在低端机型上的性能实测以及即将上线的大型裸跑游戏，证明了\r\n                        HTML5裸跑性能已可媲美APP，性能问题将不再成为制约产业发展的瓶颈。', '技术突破：HTML5裸跑性能已可媲美APP', 1, NULL, '2016-02-25');
INSERT INTO `lay_news` VALUES (5, '', 'Layabox计划在3月限量内测的LayaAir引擎，通过在低端机型上的性能实测以及即将上线的大型裸跑游戏，证明了\r\n                        HTML5裸跑性能已可媲美APP，性能问题将不再成为制约产业发展的瓶颈。', '技术突破：HTML5裸跑性能已可媲美APP', 1, NULL, '2016-02-25');

-- ----------------------------
-- Table structure for lay_partner
-- ----------------------------
DROP TABLE IF EXISTS `lay_partner`;
CREATE TABLE `lay_partner`  (
  `par_id` int(5) NOT NULL AUTO_INCREMENT,
  `par_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `par_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`par_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lay_partner
-- ----------------------------
INSERT INTO `lay_partner` VALUES (1, './images/http-1.png', 'https://qzone.qq.com/');
INSERT INTO `lay_partner` VALUES (2, './images/http-2.png', 'https://browser.qq.com/mac/');
INSERT INTO `lay_partner` VALUES (3, './images/http-3.png', 'www.baidu.com');
INSERT INTO `lay_partner` VALUES (4, './images/http-4.png', 'https://www.sina.com.cn/');
INSERT INTO `lay_partner` VALUES (5, './images/http-5.png', 'http://dict.youdao.com/w/eng/%E7%81%AB%E9%80%9F%E7%A7%BB%E5%8A%A8/');
INSERT INTO `lay_partner` VALUES (6, './images/http-6.png', 'https://www.liebao.cn/');
INSERT INTO `lay_partner` VALUES (7, './images/http-7.png', 'http://www.aiyx999.com/');
INSERT INTO `lay_partner` VALUES (8, './images/http-8.png', 'http://xiao.wo.com.cn/');
INSERT INTO `lay_partner` VALUES (9, './images/http-9.png', 'http://www.migu.cn/');
INSERT INTO `lay_partner` VALUES (10, './images/http-10.png', 'http://xiuxiu.web.meitu.com/');
INSERT INTO `lay_partner` VALUES (11, './images/http-11.png', 'http://wan.yy.com/');
INSERT INTO `lay_partner` VALUES (12, './images/http-12.png', 'http://www.kuwo.cn/');

-- ----------------------------
-- Table structure for lay_pro_detail
-- ----------------------------
DROP TABLE IF EXISTS `lay_pro_detail`;
CREATE TABLE `lay_pro_detail`  (
  `pro_det_id` int(5) NOT NULL AUTO_INCREMENT,
  `pro_det_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pro_det_content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pro_det_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pro_det_img1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `thumb_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pro_det_show` int(2) NULL DEFAULT NULL,
  `pro_id` int(5) NOT NULL,
  PRIMARY KEY (`pro_det_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lay_pro_detail
-- ----------------------------
INSERT INTO `lay_pro_detail` VALUES (1, '直接用Flash AS3语言开发HTML5的引擎', '支持Flash AS3语言及框架在Flash Builder、FlashDevelop中直接开发 HTML5产品；\r\n\r\n支持将Flash页游\\手游产品快速转换成为HTML5游戏，让Flash研发企业 进入HTML5市场低成本、无门槛；\r\n\r\n支持Starling等3D框架，是首个支持HTML5 3D游戏的技术方案。', './images/family1.png', NULL, NULL, NULL, 2);
INSERT INTO `lay_pro_detail` VALUES (2, '1', '', './images/family2.png', './images/family3.png', NULL, NULL, 5);
INSERT INTO `lay_pro_detail` VALUES (3, '新一代HTML5引擎，正在内测完善中，敬请期待', '', './images/family4.png', NULL, NULL, NULL, 1);
INSERT INTO `lay_pro_detail` VALUES (4, '面向Layabox开发者、流量渠道的一站式对接平台', '', './images/family5.png', NULL, NULL, NULL, 6);
INSERT INTO `lay_pro_detail` VALUES (5, '游戏内容丰富，可安装、可嵌入的HTML5应用商店', '', './images/family6.png', NULL, NULL, NULL, 4);
INSERT INTO `lay_pro_detail` VALUES (6, '分成高、覆盖广，提供最优秀的全渠道发行服务', '', './images/family7.png', NULL, NULL, NULL, 3);
INSERT INTO `lay_pro_detail` VALUES (8, '真好呀', '<p></p><p></p><p></p><p></p><p></p><p></p><p>不错哦</p><p></p><p></p><p></p><p></p><p></p><p></p>', 'http://www.layabox.com/upload/2019-07-31/156457630762312.jpg', 'http://www.layabox.com/upload/2019-07-31/156457522399734.jpeg', '../thumb/2019-07-31/thumb_156457630762312.jpg', 0, 1);

-- ----------------------------
-- Table structure for lay_product
-- ----------------------------
DROP TABLE IF EXISTS `lay_product`;
CREATE TABLE `lay_product`  (
  `pro_id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `pro_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pro_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pro_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pro_show` int(2) NOT NULL,
  `pro_thumb` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pro_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lay_product
-- ----------------------------
INSERT INTO `lay_product` VALUES (1, 'LayaAir', '核心库仅100K左右的新一代HTML5引擎，支\r\n                            持AS3\\TS\\JS语言开发，支持2D\\3D，非运行器模式下性能媲美APP。', './images/index-11.png', 1, NULL);
INSERT INTO `lay_product` VALUES (2, 'LayaFlash', '使用Flash AS3语言开发H5的引擎框架，可直\r\n                            接在FB或FD中开发、调试、编译H5，也可快速将Flash页游\\手游转换成H5游戏。', './images/index-13.png', 1, NULL);
INSERT INTO `lay_product` VALUES (3, 'LayaPublish', 'Layabox发行业务，通过在H5产业链中的技术\r\n                            桥梁优势，帮助CP获得流量支持。', './images/index-12.png', 1, NULL);
INSERT INTO `lay_product` VALUES (4, 'LayaStore', '嵌入式HTML5商城，APP只需嵌入20K的SDK即可以获得托管式HTML5商店服务，进入流量获利新时代', './images/index-14.png', 1, '');
INSERT INTO `lay_product` VALUES (5, 'LayaPlayer', 'HTML5高速运行器，性能卓越、支持大型\r\nHTML5游戏流畅运行，目前已植入QQ、百度\r\n等20多家主流平台，安装量超5亿', './images/index-15.png', 1, NULL);
INSERT INTO `lay_product` VALUES (6, 'LayaOpen', 'Layabox开放平台，整合了Laya提供的各项运\r\n营，管理服务的服务，提供给游戏提供商和互\r\n联网渠道的统一开放平台', './images/index-16.png', 1, NULL);

SET FOREIGN_KEY_CHECKS = 1;
