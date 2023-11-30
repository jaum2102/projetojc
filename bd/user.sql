CREATE TABLE `users` (
  `u_id` int(4) NOT NULL AUTO_INCREMENT,
  `u_senha` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`u_id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;