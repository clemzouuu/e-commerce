CREATE DATABASE IF NOT EXISTS `asos_id_db`  
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;  

use asos_id_db;

CREATE TABLE `asos_id` (   
    `id`  INT auto_increment,
    `login` TEXT,   
    `password` TEXT,
    CONSTRAINT pk_asos PRIMARY KEY (`id`)  
    ) ENGINE=InnoDB ;

CREATE TABLE `panier` (   
    `id`  INT auto_increment,
    `article` TEXT,   
    `price` TINYINT,
    CONSTRAINT pk_asos PRIMARY KEY (`id`)  
    ) ENGINE=InnoDB ;