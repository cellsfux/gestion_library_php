

create database `app_deborah`;
use `app_deborah`;


CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY  NOT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `id_ecole` varchar(50) DEFAULT NULL,
  `genre` varchar(10) DEFAULT NULL,
  `date_naisse` varchar(30) DEFAULT NULL,
  `profilpic` varchar(255) DEFAULT NULL,
  `phone` varchar(140) DEFAULT null,
  `statuonline` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(150) NOT NULL,
  `roles` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `Categorie` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY  NOT NULL,
  `title` varchar(255) NOT null,
 `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

create TABLE `book`(
  `id` int AUTO_INCREMENT PRIMARY KEY not null,
  `title` varchar(255),
  `slug` varchar(255),
  `langue` varchar(100),
  `id_categorie` varchar(100),
  `autheur` varchar(255),
  `ville_fab` varchar(150),
  `annee_fab` varchar(100),
  `cover_image` varchar(255),
  `file_pah` varchar(255),
  `description` text,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create TABLE `lecture`(
  `id` int AUTO_INCREMENT PRIMARY KEY not null,
  `id_user` int,
  `id_book` int,
  `date_lecture` varchar(255),
 `created_at` datetime NOT NULL DEFAULT current_timestamp(),
 `update_at` datetime NOT NULL DEFAULT current_timestamp()
)ENGINE=InnoDB DEFAULT CHARSET=utf8;




