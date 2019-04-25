CREATE TABLE `Users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `Users` (`userid`, `name`) VALUES
(1, 'Destiny'),
(2, 'Alan'),
(3, 'Paula'),
(4, 'Joan'),
(5, 'John'),
(6, 'Gina'),
(7, 'Liz');

