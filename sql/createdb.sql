CREATE DATABASE IF NOT EXISTS shopping_list;

USE shopping_list;

DROP TABLE IF EXISTS `shopping_list_items`;

CREATE TABLE `shopping_list_items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

INSERT INTO `shopping_list_items` (`name`) VALUES ('Rice');
INSERT INTO `shopping_list_items` (`name`) VALUES ('Eggs');
INSERT INTO `shopping_list_items` (`name`) VALUES ('Mushrooms');
INSERT INTO `shopping_list_items` (`name`) VALUES ('Hummus');