CREATE TABLE `queryip` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `ip` varchar(20) NOT NULL COMMENT 'ip地址',
  `country` varchar(8) DEFAULT '' COMMENT '国家',
  `province` varchar(8) DEFAULT '' COMMENT '省份',
  `city` varchar(8) DEFAULT '' COMMENT '城市',
  `catName` varchar(255) DEFAULT '' COMMENT '运营商',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

CREATE TABLE `queryphone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pre_phone` int(11) NOT NULL COMMENT '电话号码（前七位）',
  `catName` varchar(20) DEFAULT '' COMMENT '运营商',
  `province` varchar(20) DEFAULT '' COMMENT '归属地',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

CREATE TABLE `querybaidu` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `key_word` varchar(255) DEFAULT '' COMMENT '关键字',
  `query_res` text COMMENT '百度查询提示的结果',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
