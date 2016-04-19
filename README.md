# Basic-eCommerce

It is basically a walk-in Ecommerce Website which provides home delivery service in selected areas.The customer has to register themselves with the Website after which they can View Products, Buy Products, etc.
The customers can then select the products they need to buy using the “Buy” button wherein those products will be sent to the Website’s database after which the store will prepare for their delivery.
The customers then need to walk-in to the store where their products will be ready for delivery. If the region falls under selected area then a free delivery service may be provided.
This is a very basic ecommerce website developed as a small project by me.....hope it may help you











Database for my eCommerce website:

Create db "yourwish";

Tables for eCommerce processing and user management are
<-------------------------------------------------------------------->


CREATE TABLE IF NOT EXISTS `desktop_shop` (
`id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `name` varchar(600) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `message` (
`message_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;




CREATE TABLE IF NOT EXISTS `orders` (
`id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `confirmation` varchar(30) NOT NULL,
  `total` varchar(100) NOT NULL,
  `design` varchar(300) NOT NULL,
  `note` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;




CREATE TABLE IF NOT EXISTS `paymentm` (
`id` int(11) NOT NULL,
  `dmethodid` varchar(30) NOT NULL,
  `methodname` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;





CREATE TABLE IF NOT EXISTS `reg_users` (
`Memberid` int(10) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Mob` varchar(141) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Activation` varchar(200) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `reservation` (
`reservation_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL,
  `payable` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `confirmation` varchar(20) NOT NULL,
  `delivery` varchar(300) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `delivery_type` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `position` varchar(45) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;













<--------------------------------------------------------------------->
