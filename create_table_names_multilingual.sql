use ics325fa1528;
CREATE TABLE `names` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'name_id',
  `name_en` varchar(45) CHARACTER SET utf8 DEFAULT NULL COMMENT 'name in english',
  `name_te` varchar(45) CHARACTER SET utf8 DEFAULT NULL COMMENT 'name in telugu',
  `name_hi` varchar(45) CHARACTER SET utf8 DEFAULT NULL COMMENT 'name in hindi',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
