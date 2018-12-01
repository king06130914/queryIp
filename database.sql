CREATE TABLE `queryip` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '����id',
  `ip` varchar(20) NOT NULL COMMENT 'ip��ַ',
  `country` varchar(8) DEFAULT '' COMMENT '����',
  `province` varchar(8) DEFAULT '' COMMENT 'ʡ��',
  `city` varchar(8) DEFAULT '' COMMENT '����',
  `catName` varchar(255) DEFAULT '' COMMENT '��Ӫ��',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

CREATE TABLE `queryphone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pre_phone` int(11) NOT NULL COMMENT '�绰���루ǰ��λ��',
  `catName` varchar(20) DEFAULT '' COMMENT '��Ӫ��',
  `province` varchar(20) DEFAULT '' COMMENT '������',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

CREATE TABLE `querybaidu` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '����id',
  `key_word` varchar(255) DEFAULT '' COMMENT '�ؼ���',
  `query_res` text COMMENT '�ٶȲ�ѯ��ʾ�Ľ��',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
