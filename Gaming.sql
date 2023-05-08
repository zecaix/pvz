/* Create Database and Table */
create database crud_db;

use crud_db;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `gamename` varchar(100),
  `gametype` varchar(100),
  `rating` varchar(15),
  PRIMARY KEY  (`id`)
);