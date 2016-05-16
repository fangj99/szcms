上海?浦东?南汇新城?宜浩家园
2015年12月3日11:41:14
完成 产品 新闻 单页  图片上传

待解决的问题 产品分类 无限极分类 
后台系统配置
数据导入 导出  备份
购物车  
支付
HTML5 前端

关键词  内链接  友情链接

CREATE TABLE `menu` (
`id` int( 11) NOT NULL AUTO_INCREMENT COMMENT 'id',
 `sort_id` int(11) NOT NULL COMMENT '排序' ,
 `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父级 id',
 `title` varchar(255) NOT NULL COMMENT '标题' ,
 `icon` varchar( 255) DEFAULT 'fa fa-circle-o' COMMENT '图标 ',
 `route` varchar(255) DEFAULT NULL COMMENT ' 路径',
 `url` varchar( 255) DEFAULT NULL COMMENT '外链' ,
 `target` enum('_self' ,'_blank') DEFAULT '_self',
 `ajax` enum( 'yes','no' ) DEFAULT 'no' COMMENT '弹出层 ',
 `show` enum( 'yes','no' ) DEFAULT 'no' COMMENT '后台显示 ',
 `remark` varchar(255) DEFAULT NULL COMMENT ' 描述',
 `create_at` int(11) NOT NULL COMMENT '创建时间',
 `update_at` int(11) NOT NULL COMMENT '修改时间',
 PRIMARY KEY ( `id`)
) ENGINE =InnoDB AUTO_INCREMENT= 7 DEFAULT CHARSET= utf8