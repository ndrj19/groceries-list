CREATE DATABASE IF NOT EXISTS shopping_list;

USE shopping_list;

DROP TABLE IF EXISTS `shopping_list_items`;

CREATE TABLE `shopping_list_items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `done` boolean, 
  `archived` boolean,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

INSERT INTO `shopping_list_items` (`name`, `done`, `archived`) VALUES ('Rice', false, false);
INSERT INTO `shopping_list_items` (`name`, `done`, `archived`) VALUES ('Eggs', false, false);
INSERT INTO `shopping_list_items` (`name`, `done`, `archived`) VALUES ('Mushrooms', false, false);
INSERT INTO `shopping_list_items` (`name`, `done`, `archived`) VALUES ('Hummus', false, false);