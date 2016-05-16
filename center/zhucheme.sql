/*
Navicat MySQL Data Transfer

Source Server         : my-wamp
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : zhucheme

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-01-29 13:28:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '_Hlousgrdc4it5jBUehLwvQsdrl1PIh7', '$2y$13$V04iEzK/Vxk6DZgLuVgrtuql75znY4hHXujDGLPNAk5A4k45pCpwa', null, 'admin8@qq.com', '10', '1448017809', '1448017809');

-- ----------------------------
-- Table structure for `auth_assignment`
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('distributor', '2', null);
INSERT INTO `auth_assignment` VALUES ('shareholder', '3', null);

-- ----------------------------
-- Table structure for `auth_item`
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('admin', '1', '超级用户组', null, null, '1453993554', '1453993554');
INSERT INTO `auth_item` VALUES ('distributor', '1', '销售商   【查看权限】', null, null, '1453993974', '1453993974');
INSERT INTO `auth_item` VALUES ('priced', '2', '代理价格 查看权限', null, null, '1453993685', '1453994011');
INSERT INTO `auth_item` VALUES ('pricey', '2', '股东可以查看出厂价格', null, null, '1453994056', '1453994056');
INSERT INTO `auth_item` VALUES ('shareholder', '1', '股东 ：【查看权限】【添加和删除权限】', null, null, '1453993808', '1453993808');

-- ----------------------------
-- Table structure for `auth_item_child`
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('admin', 'distributor');
INSERT INTO `auth_item_child` VALUES ('distributor', 'priced');
INSERT INTO `auth_item_child` VALUES ('shareholder', 'priced');
INSERT INTO `auth_item_child` VALUES ('distributor', 'pricey');

-- ----------------------------
-- Table structure for `auth_rule`
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for `channel`
-- ----------------------------
DROP TABLE IF EXISTS `channel`;
CREATE TABLE `channel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `cid` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT '0',
  `keyword` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(1) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of channel
-- ----------------------------
INSERT INTO `channel` VALUES ('1', '0', '公司新闻', '1', '', '公司新闻  最新报道  实时更新', '公司新闻  公司动态', '1', '1448434537', '1448440923', 'news', '1');
INSERT INTO `channel` VALUES ('2', '0', '产品中心', '1', '', '公司产品', '洒水车  垃圾车', '1', '1449216989', '1449217093', 'pro', '1');
INSERT INTO `channel` VALUES ('3', '2', '水泵', '1', '1', '测试 ..、', '淡淡的', '1', '1449287177', '1449288704', 'pro', '2');
INSERT INTO `channel` VALUES ('4', '3', '温州水泵', '1', '', '温州水泵的好水泵', '温州水泵', '1', '1449290508', '1449290508', 'pro', '3');
INSERT INTO `channel` VALUES ('5', '3', '离心水泵', '1', '', '高效环保的离心水泵', '离心水泵', '1', '1449290574', '1452850568', 'pro', '4');
INSERT INTO `channel` VALUES ('6', '2', '测试', '1', '', '二二', '让人', '1', '1449371989', '1449371989', 'pro', '5');
INSERT INTO `channel` VALUES ('7', '2', '专用汽车', '1', '', '', '', '1', '1452998558', '1452998558', null, null);
INSERT INTO `channel` VALUES ('8', '2', '分销商品', '1', '', '分销商品', '分销商品', '1', '1454001218', '1454001218', null, null);

-- ----------------------------
-- Table structure for `configs`
-- ----------------------------
DROP TABLE IF EXISTS `configs`;
CREATE TABLE `configs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sitename` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `keywords` varchar(200) DEFAULT NULL,
  `address` varchar(230) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `beianhao` varchar(100) DEFAULT NULL,
  `tongji` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `n1` varchar(255) DEFAULT NULL,
  `n2` varchar(100) DEFAULT NULL,
  `n3` varchar(100) DEFAULT NULL,
  `n4` varchar(100) DEFAULT NULL,
  `n5` varchar(100) DEFAULT NULL,
  `n6` varchar(100) DEFAULT NULL,
  `n7` varchar(100) DEFAULT NULL,
  `n8` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of configs
-- ----------------------------
INSERT INTO `configs` VALUES ('1', '启明建站系统', '网站建设    网站优化', '启明建站 ', '', '13886861003', 'ncplum@qq.com', '鄂ICP备案14000272', '统计代码', '1450854978', '1453085250', 'http://b.zhucheme.cms/', 'http://img.zhucheme.cms/', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for `fenxiao`
-- ----------------------------
DROP TABLE IF EXISTS `fenxiao`;
CREATE TABLE `fenxiao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `channelid` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(1) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `levers` int(1) DEFAULT NULL,
  `price` int(8) DEFAULT NULL,
  `priced` int(8) DEFAULT NULL,
  `pricey` int(8) DEFAULT NULL COMMENT '原价',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fenxiao
-- ----------------------------
INSERT INTO `fenxiao` VALUES ('19', '/upload/image/20160129/1454008108613934.jpg', '小米移动电源', '<p style=\"text-align: center;\">vcvxcvbx高飞飞飞高飞飞飞高飞飞飞高飞飞飞高飞飞飞 &nbsp;<img src=\"http://img.zhucheme.com/upload/image/20160129/1454008108613934.jpg\" title=\"1454008108613934.jpg\" alt=\"福田时代2吨消防车(1).jpg\"/></p>', '2', '8', '小米移动电源', '小米移动电源', '1', '1454001495', '1454041677', '1', '100', '65', '50');
INSERT INTO `fenxiao` VALUES ('20', '', '小米电视', '1111111111111111111111111111', '1', '8', '​高飞飞飞', '​高飞飞飞', '1', '1454001744', '1454001744', null, '4999', '4500', '4300');
INSERT INTO `fenxiao` VALUES ('21', '/upload/image/20160129/1454003339137688.jpg', 'fsdfsdfsdfsd', '<p><img src=\"http://img.zhucheme.com/upload/image/20160129/1454003339137688.jpg\" title=\"1454003339137688.jpg\" alt=\"IMG0017A.jpg\"/>dfsfsdfsd</p>', '', '3', '', '', '1', '1454003359', '1454008927', null, '190', '160', '150');
INSERT INTO `fenxiao` VALUES ('24', '', 'fsdfsdfsdfs', '<p>fsdfsdfsdfs<img src=\"http://img.zhucheme.com/upload/image/20160129/1454003997692080.jpg\" title=\"1454003997692080.jpg\" alt=\"IMG0017A.jpg\"/></p>', '', '10', '', '1', '1', '1454004022', '1454004277', '1', null, null, null);
INSERT INTO `fenxiao` VALUES ('25', '', 'fdsfdsfdsfsd', '<p><img src=\"http://img.zhucheme.com/upload/image/20160129/1454005170114899.jpg\" title=\"1454005170114899.jpg\" alt=\"福田时代2吨消防车(3).jpg\"/>fdfsdfsdfds</p>', '1', '10', '小米移动电源', '小米移动电源', '1', '1454005195', '1454005195', '1', null, null, null);
INSERT INTO `fenxiao` VALUES ('26', '/upload/image/20160129/1454034340303976.jpg', '测试商品', '<p>测试上面的上传图片</p><p><img src=\"http://img.zhucheme.com/upload/image/20160129/1454034340303976.jpg\" title=\"1454034340303976.jpg\" alt=\"福田时代2吨消防车.jpg\"/></p>', '1', '10', '1111', '1111111', '1', '1454034387', '1454034736', '1', '111', '88', '66');
INSERT INTO `fenxiao` VALUES ('27', '/upload/20160129/1454036377837742.jpg', '随车启动运输车', '<p><img src=\"http://img.zhucheme.com/upload/image/20160129/1454036393104506.jpg\" title=\"1454036393104506.jpg\" alt=\"东风后双桥随车起重运输车（6.3T、8T、10T吊机）00.jpg\"/></p><p>好车 &nbsp;好好的车</p>', '2', '7', '嗯嗯', '呃呃呃', '1', '1454036444', '1454043651', '1', '180000', '175000', '170000');

-- ----------------------------
-- Table structure for `link`
-- ----------------------------
DROP TABLE IF EXISTS `link`;
CREATE TABLE `link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(1) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of link
-- ----------------------------
INSERT INTO `link` VALUES ('1', '启明网络', 'http://www.suizhouw.cn', '1', '0');

-- ----------------------------
-- Table structure for `lookup`
-- ----------------------------
DROP TABLE IF EXISTS `lookup`;
CREATE TABLE `lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lookup
-- ----------------------------
INSERT INTO `lookup` VALUES ('1', '已发布', '1', 'PostStatus', '1');
INSERT INTO `lookup` VALUES ('2', '草稿', '2', 'PostStatus', '2');
INSERT INTO `lookup` VALUES ('3', '已归档', '3', 'PostStatus', '3');
INSERT INTO `lookup` VALUES ('4', '通过审核', '1', 'CommentStatus', '1');
INSERT INTO `lookup` VALUES ('5', '待审核', '2', 'CommentStatus', '5');
INSERT INTO `lookup` VALUES ('6', '原创', '1', 'ComeFrom', '1');
INSERT INTO `lookup` VALUES ('7', '网络', '2', 'ComeFrom', '2');
INSERT INTO `lookup` VALUES ('8', '显示', '1', 'ClassShow', '1');
INSERT INTO `lookup` VALUES ('9', '隐藏', '2', 'ClassShow', '2');
INSERT INTO `lookup` VALUES ('10', '产品', '1', 'info', '1');
INSERT INTO `lookup` VALUES ('11', '新闻', '2', 'info', '2');
INSERT INTO `lookup` VALUES ('14', '普通', '1', 'lever', '1');
INSERT INTO `lookup` VALUES ('15', '置顶', '3', 'lever', '3');
INSERT INTO `lookup` VALUES ('16', '推荐', '2', 'lever', '2');

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `sort_id` int(11) NOT NULL COMMENT '排序',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父级 id',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `icon` varchar(255) DEFAULT 'fa fa-circle-o' COMMENT '图标 ',
  `route` varchar(255) DEFAULT NULL COMMENT ' 路径',
  `url` varchar(255) DEFAULT NULL COMMENT '外链',
  `target` enum('_self','_blank') DEFAULT '_self',
  `ajax` enum('yes','no') DEFAULT 'no' COMMENT '弹出层 ',
  `show` enum('yes','no') DEFAULT 'no' COMMENT '后台显示 ',
  `remark` varchar(255) DEFAULT NULL COMMENT ' 描述',
  `create_at` int(11) NOT NULL COMMENT '创建时间',
  `update_at` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1448014601');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1448014605');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `channelid` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT '0',
  `keyword` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(1) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `levers` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', 'YII 学习是我网络生涯的一个里程碑', '<p>YII 学习是我网络生涯的一个里程碑 我深深的理解有个自己控制的网站源码是有多么的重要，所以我选择了学习深入的学习PHP 在学习的过程中我了解到了</p><p><br/></p><h1 style=\"box-sizing: border-box; margin-top: 0px; font-family: 微软雅黑, &#39;Microsoft Yahei&#39;, &#39;Roboto Slab&#39;, ff-tisa-web-pro, Georgia, Arial, sans-serif; font-size: 28px; color: rgb(64, 64, 64); white-space: normal; background-color: rgb(252, 252, 252);\">Think php &nbsp;</h1><p><br/></p><h1 style=\"box-sizing: border-box; margin-top: 0px; font-family: 微软雅黑, &#39;Microsoft Yahei&#39;, &#39;Roboto Slab&#39;, ff-tisa-web-pro, Georgia, Arial, sans-serif; font-size: 28px; color: rgb(64, 64, 64); white-space: normal; background-color: rgb(252, 252, 252);\">CodeIgniter</h1><h1 style=\"white-space: normal; box-sizing: border-box; margin-top: 0px; font-family: 微软雅黑, &#39;Microsoft Yahei&#39;, &#39;Roboto Slab&#39;, ff-tisa-web-pro, Georgia, Arial, sans-serif; font-size: 28px; color: rgb(64, 64, 64); background-color: rgb(252, 252, 252);\">YII2 &nbsp;</h1><p>使我了解到了这些著名的框架，从而加快了我的编程步伐使得我更加快递的编辑我的应用，还没有半年的时间了我能够基本的理解他们的运作流程并且用他们编辑自己的应用，使我受益匪浅。感谢这些网络前辈们为我们创造了这么优秀和高效的框架。</p>', '1', '1', '学习 Think php  CodeIgniter   YII2 这些框架为我带来了应用开发的高效率', 'Think php  CodeIgniter   YII2', '1', '1448171136', '1453017185', '3');
INSERT INTO `news` VALUES ('2', '测试下看看 可否', '<p>师傅的说法都是<img src=\"http://img.zhucheme.cms/upload/image/20160116/1452907750826855.jpg\" title=\"1452907750826855.jpg\" alt=\"75bbcaab5dfa2a852e65ed648c846c.jpg\"/></p>', '1', '1', '地方都是', '', '1', '1452907889', '1452932022', '1');
INSERT INTO `news` VALUES ('3', '上下页面', '<p>上下页面</p>', '1', '1', '', '', '1', '1452930736', '1452932013', '1');

-- ----------------------------
-- Table structure for `page`
-- ----------------------------
DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `channelid` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(1) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of page
-- ----------------------------
INSERT INTO `page` VALUES ('1', '关于我们 ', '1', '<p>关于我们&nbsp;</p><p>公司地址：随州市</p><p>销售热线：0722-3806863</p><p>图文传真：0722-3806863</p><p><img width=\"530\" height=\"340\" src=\"http://api.map.baidu.com/staticimage?center=116.404,39.915&zoom=10&width=530&height=340&markers=116.404,39.915\"/></p>', '1', '1', '111', '111', '1', '1', '1449410673');
INSERT INTO `page` VALUES ('2', '联系我们', 'about', '<p>联系方式电话 ：手机</p>', '1', '1', '联系我们 ', '电话  手机', '1', '1', '1448464350');

-- ----------------------------
-- Table structure for `pro`
-- ----------------------------
DROP TABLE IF EXISTS `pro`;
CREATE TABLE `pro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `channelid` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(1) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `levers` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pro
-- ----------------------------
INSERT INTO `pro` VALUES ('10', '/upload/20160104/1451888008142220.jpg', '什么车车的 ', '<p>范德萨发<img src=\"http://img.zhucheme.cms/upload/image/20151204/1449216842806028.jpg\" title=\"1449216842806028.jpg\" alt=\"3.jpg\"/>圣诞反倒是发送dff到 &nbsp;<img src=\"http://img.zhucheme.cms/upload/image/20160104/1451887411819626.jpg\" title=\"1451887411819626.jpg\" alt=\"素材之家(sc.jb51.net)_201403190921.jpg\"/><img src=\"http://img.zhucheme.cms/upload/image/20160104/1451888021132839.jpg\" title=\"1451888021132839.jpg\" alt=\"23.jpg\"/></p>', '1', '3', '范德萨范德萨发送到 ', '的发的反倒是', '1', '1448899586', '1454002077', null);
INSERT INTO `pro` VALUES ('11', '/upload/20151206/1449373461118664.jpg', '百度推广的', '<p>1111111111111<br/><img src=\"http://img.company.cms/upload/image/20160104/1451888510135464.jpg\" title=\"1451888510135464.jpg\" alt=\"IMG0017A.jpg\"/></p>', '1', '4', '111', '1', '1', '1448956936', '1453017203', null);
INSERT INTO `pro` VALUES ('12', 'upload/image/20160128/1454004764459966.jpg', '44444', '<p>111<br/><img src=\"http://img.company.com/upload/image/20151203/1449108998934263.jpg\" title=\"1449108998934263.jpg\" alt=\"4.jpg\"/></p>', '1', '3', '111', '111', '2', '1448957487', '1454007187', null);
INSERT INTO `pro` VALUES ('13', '/upload/20151206/1449373611879655.jpg', '测试谢谢', '<p>111<br/></p>', '1', '4', '1', '1', '2', '1448959870', '1454002876', null);
INSERT INTO `pro` VALUES ('14', '/upload/20151206/1449373621104016.jpg', '222', '<p>&nbsp;<img width=\"530\" height=\"340\" src=\"http://api.map.baidu.com/staticimage?center=116.404,39.915&zoom=10&width=530&height=340&markers=116.404,39.915\"/></p>', '1', '5', '1', '1', '2', '1449069179', '1449373634', null);
INSERT INTO `pro` VALUES ('15', '/upload/20151206/1449373651580326.jpg', '百度编辑器让我折腾了一晚上啊', '<p><img src=\"http://img.zhucheme.cms/upload/image/20151203/1449113576240848.jpg\" title=\"1449113530813472.jpg\" alt=\"22.jpg\"/>百度编辑器让我折腾了一晚上啊</p>', '1', '2', '22', '2', '1', '1449113578', '1452939284', null);
INSERT INTO `pro` VALUES ('16', '/upload/20151203/1449113803775217.jpg', '是否完成 测试', '<p>22是否完成 测试<img src=\"http://img.company.com/upload/image/20151203/1449113800118122.jpg\" title=\"1449113800118122.jpg\" alt=\"1.jpg\"/></p>', '1', '3', '222', '2', '2', '1449113805', '1449373666', null);
INSERT INTO `pro` VALUES ('17', '/upload/20160104/1451888752124469.jpg', '学神IT教育', '<p><img src=\"http://img.company.cms/upload/image/20160104/1451888759281686.jpg\" title=\"1451888759281686.jpg\" alt=\"23.jpg\"/></p><p><img src=\"http://img.company.com/upload/image/20160104/1451888958125549.jpg\" title=\"1451888958125549.jpg\" alt=\"55652f78Nb706d3cf.jpg\"/></p><p>哦哦哦</p>', '1', '2', '', '', '1', '1451888932', '1451888975', null);
INSERT INTO `pro` VALUES ('18', '/upload/20160117/1452998514821691.jpg', '南骏牌NJP5160GSS45EM型洒水车', '<table class=\"dt_table\" width=\"1077\"><tbody><tr align=\"left\" valign=\"middle\" bgcolor=\"#F1F5FE\" style=\"height: 28px;\" class=\"firstRow\"><th colspan=\"5\" align=\"left\" style=\"border-top-color: rgb(221, 221, 221); padding-left: 5px;\">生产企业信息</th></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"height: 28px;\"><td width=\"16%\" style=\"padding-left: 5px;\">车辆名称：</td><td width=\"34%\" style=\"padding-left: 5px;\">洒水车</td><td width=\"16%\" style=\"padding-left: 5px;\">车辆类别：</td><td width=\"34%\" style=\"padding-left: 5px;\">专用作业车</td><td width=\"34%\" style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F7F7F7\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">公告批次：</td><td bgcolor=\"#F7F7F7\" style=\"padding-left: 5px;\">275</td><td style=\"padding-left: 5px;\">发布日期：</td><td style=\"padding-left: 5px;\">20150812</td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">整车型号：</td><td style=\"padding-left: 5px;\">NJP5160GSS45EM</td><td style=\"padding-left: 5px;\">产品号：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F7F7F7\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">底盘型号：</td><td style=\"padding-left: 5px;\">DFL1160BX4</td><td style=\"padding-left: 5px;\">产品商标：</td><td style=\"padding-left: 5px;\">南骏牌</td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">企业名称：</td><td colspan=\"4\" style=\"padding-left: 5px;\">四川南骏汽车集团有限公司</td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F1F5FE\" style=\"height: 28px;\"><td colspan=\"4\" style=\"padding-left: 5px; font-weight: bold;\">免检说明</td><td colspan=\"1\" style=\"padding-left: 5px; font-weight: bold;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">免检：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\">免检有效期止：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F1F5FE\" style=\"height: 28px;\"><td colspan=\"4\" style=\"padding-left: 5px; font-weight: bold;\">公告状态</td><td colspan=\"1\" style=\"padding-left: 5px; font-weight: bold;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">公告状态：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\">公告生效日期：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F1F5FE\" style=\"height: 28px;\"><td colspan=\"4\" style=\"padding-left: 5px; font-weight: bold;\">主要技术参数</td><td colspan=\"1\" style=\"padding-left: 5px; font-weight: bold;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F7F7F7\" style=\"height: 28px;\"><td bgcolor=\"#F7F7F7\" style=\"padding-left: 5px;\">外形尺寸(mm)：</td><td bgcolor=\"#F7F7F7\" style=\"padding-left: 5px;\">8060x2460x2870</td><td bgcolor=\"#F7F7F7\" style=\"padding-left: 5px;\">货厢尺寸(mm)：</td><td bgcolor=\"#F7F7F7\" style=\"padding-left: 5px;\">xx</td><td bgcolor=\"#F7F7F7\" style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">总质量(Kg)：</td><td style=\"padding-left: 5px;\">16000</td><td style=\"padding-left: 5px;\">整备质量(Kg)：</td><td style=\"padding-left: 5px;\">6860</td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F7F7F7\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">额定质量(Kg)：</td><td style=\"padding-left: 5px;\">8945</td><td style=\"padding-left: 5px;\">挂车质量(Kg)：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">载质量：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\">半挂鞍座：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F7F7F7\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">额定载客：</td><td style=\"padding-left: 5px;\">(人)</td><td style=\"padding-left: 5px;\">前排乘客：</td><td style=\"padding-left: 5px;\">3(人)</td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">接近角/离去角：</td><td style=\"padding-left: 5px;\">12/11</td><td style=\"padding-left: 5px;\">前悬/后悬：</td><td style=\"padding-left: 5px;\">1430/2130</td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F7F7F7\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">驾驶室：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\">防抱死系统：</td><td style=\"padding-left: 5px;\">有</td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">轴荷：</td><td style=\"padding-left: 5px;\">6000/10000</td><td style=\"padding-left: 5px;\">轴距：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F7F7F7\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">轴数：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\">最高车速：</td><td style=\"padding-left: 5px;\">90(km/h)</td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">油耗(L/100Km)：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\">弹簧片数：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F7F7F7\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">轮胎数：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\">轮胎规格：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">前轮距：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\">后轮距：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F7F7F7\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">制动前：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\">制动后：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">制操前：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\">制操后：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F7F7F7\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">转向形式：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\">起动方式：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\"><br/></td></tr><tr style=\"height: 28px;\"><td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"padding-left: 5px;\">Vin车辆识别代码：</td><td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"padding-left: 5px;\"><br/></td><td colspan=\"1\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F1F5FE\" style=\"height: 28px;\"><td colspan=\"4\" style=\"padding-left: 5px; font-weight: bold;\">车辆燃料参数</td><td colspan=\"1\" style=\"padding-left: 5px; font-weight: bold;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">燃料种类：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\">排放标准：</td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F7F7F7\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">底盘依据标准：</td><td colspan=\"3\" style=\"padding-left: 5px;\"><br/></td><td colspan=\"1\" style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F1F5FE\" style=\"height: 28px;\"><td colspan=\"4\" style=\"padding-left: 5px; font-weight: bold;\">发动机参数</td><td colspan=\"1\" style=\"padding-left: 5px; font-weight: bold;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">发动机型号</td><td style=\"padding-left: 5px;\">发动机生产企业</td><td style=\"padding-left: 5px;\">排量(ml)</td><td style=\"padding-left: 5px;\">功率(kw)</td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F7F7F7\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\"><br/></td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F1F5FE\" style=\"height: 28px;\"><td colspan=\"4\" style=\"padding-left: 5px; font-weight: bold;\">其它</td><td colspan=\"1\" style=\"padding-left: 5px; font-weight: bold;\"><br/></td></tr><tr style=\"height: 28px;\"><td colspan=\"4\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"padding-left: 5px;\">罐体有效容积9.3立方米,罐体外形尺寸（长度×长轴×短轴）:4700×2100×1250,介质:水,密度:1000kg/立方米,该车应装具有卫星定位功能的行驶记录仪,ABS控制器型号:3631010-C2000,生产厂家为:东风电子科技股份有限公司制动系统公司,侧、后防护装置材料:Q235,侧护栏与车辆用螺栓连接,后护栏为焊接,后护栏截面尺寸:200×40,离地高度:490mm，随底盘选装驾驶室</td><td colspan=\"1\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F1F5FE\" style=\"height: 28px;\"><td colspan=\"4\" style=\"padding-left: 5px; font-weight: bold;\">反光标识参数</td><td colspan=\"1\" style=\"padding-left: 5px; font-weight: bold;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">标识企业：</td><td style=\"padding-left: 5px;\">常州华威反光材料有限公司</td><td style=\"padding-left: 5px;\">标识商标：</td><td style=\"padding-left: 5px;\">艾普莱斯</td><td style=\"padding-left: 5px;\"><br/></td></tr><tr align=\"left\" valign=\"middle\" bgcolor=\"#F7F7F7\" style=\"height: 28px;\"><td style=\"padding-left: 5px;\">标识型号：</td><td colspan=\"3\" style=\"padding-left: 5px;\">HW1400</td><td colspan=\"1\" style=\"padding-left: 5px;\"><br/></td></tr></tbody></table><p><br/></p>', '1', '2', '', '', '1', '1452998574', '1452998574', null);

-- ----------------------------
-- Table structure for `seting`
-- ----------------------------
DROP TABLE IF EXISTS `seting`;
CREATE TABLE `seting` (
  `id` varchar(64) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seting
-- ----------------------------
INSERT INTO `seting` VALUES ('sys_allow_register', '0');
INSERT INTO `seting` VALUES ('sys_datetime_date_format', 'Y-m-d');
INSERT INTO `seting` VALUES ('sys_datetime_pretty_format', '1');
INSERT INTO `seting` VALUES ('sys_datetime_timezone', 'Etc/GMT-8');
INSERT INTO `seting` VALUES ('sys_datetime_time_format', '24');
INSERT INTO `seting` VALUES ('sys_date_format', '');
INSERT INTO `seting` VALUES ('sys_date_format_custom', '');
INSERT INTO `seting` VALUES ('sys_default_role', 'member_1');
INSERT INTO `seting` VALUES ('sys_icp', 'aa');
INSERT INTO `seting` VALUES ('sys_lang', 'zh-CN');
INSERT INTO `seting` VALUES ('sys_seo_description', 'lulucms description');
INSERT INTO `seting` VALUES ('sys_seo_head', '');
INSERT INTO `seting` VALUES ('sys_seo_keywords', 'lulucms,yiifans,yii2');
INSERT INTO `seting` VALUES ('sys_seo_title', 'LuLu CMS');
INSERT INTO `seting` VALUES ('sys_site_about', '<span>LuLuCMS是一款基于php5+mysql5开发的多功能开源的网站内容管理系统。</span><br />\r\n<span>使用高性能的PHP5web应用程序开发框架YII构建，具有操作简单、稳定、安全、高效、跨平台等特点。</span><br />\r\n<span>采用MVC设计模式，模板定制方便灵活，内置小挂工具，方便制作各类功能和效果。</span><br />\r\n<span>LuLuCMS可用于企业建站、个人博客、资讯门户、图片站等各类型站点</span>');
INSERT INTO `seting` VALUES ('sys_site_description', 'one powerful CMS');
INSERT INTO `seting` VALUES ('sys_site_email', 'admin@admin.com');
INSERT INTO `seting` VALUES ('sys_site_name', 'LuLu CMS');
INSERT INTO `seting` VALUES ('sys_site_theme', 'blank');
INSERT INTO `seting` VALUES ('sys_site_url', '');
INSERT INTO `seting` VALUES ('sys_stat', 'bb');
INSERT INTO `seting` VALUES ('sys_status', '1');
INSERT INTO `seting` VALUES ('sys_theme_admin', 'dandelion');
INSERT INTO `seting` VALUES ('sys_theme_home', 'my');
INSERT INTO `seting` VALUES ('sys_timezone', '');
INSERT INTO `seting` VALUES ('sys_time_format', '');
INSERT INTO `seting` VALUES ('sys_time_format_custom', '');
INSERT INTO `seting` VALUES ('sys_utc', '');
INSERT INTO `seting` VALUES ('test_data_theme', 'tttccc');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '_Hlousgrdc4it5jBUehLwvQsdrl1PIh7', '$2y$13$V04iEzK/Vxk6DZgLuVgrtuql75znY4hHXujDGLPNAk5A4k45pCpwa', null, 'admin8@qq.com', '10', '1448017809', '1448017809');
INSERT INTO `user` VALUES ('2', 'pear2007', 'zpbzvIUeaUSlqv_zNBeHTqlX78Nlf6SX', '$2y$13$HXxpwTyYkH./xGy1K/CpaOQqPQ5n6h87cziRJFQ7i4VZOrGS/piKi', null, 'pear2007@qq.com', '10', '1453896373', '1453896373');
INSERT INTO `user` VALUES ('3', 'pear', 'oQA3ooEPb8of9QRrHfU3uUiiSuWd9CxQ', '$2y$13$M7LZW8P2ZXDq6lvwAkGnyeIHzRtqHFexDVqhJ/IjYJz829IpUYbaW', null, 'ncplum@qq.com', '10', '1453995426', '1453995426');
