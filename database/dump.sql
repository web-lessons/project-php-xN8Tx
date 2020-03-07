CREATE DATABASE `shop`;

USE `shop`;

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `name`, `slug`, `img`, `description`, `price`) VALUES
(1, 'товар 1' 'products1' '/img.product1.jpg', 'good', 2500),
(2, 'товар 2' 'products2' '/img.product1.jpg', 'good', 2500),
(3, 'товар 3' 'products3' '/img.product1.jpg', 'good', 2500),
(4, 'товар 4' 'products4' '/img.product1.jpg', 'good', 2500),
(5, 'товар 5' 'products5' '/img.product1.jpg', 'good', 2500),
(6, 'товар 6' 'products6' '/img.product1.jpg', 'good', 2500),
(7, 'товар 7' 'products7' '/img.product1.jpg', 'good', 2500),
(8, 'товар 8' 'products8' '/img.product1.jpg', 'good', 2500);