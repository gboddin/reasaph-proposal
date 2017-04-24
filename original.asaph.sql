CREATE TABLE `post` (
		`id` int(11) NOT NULL auto_increment,
		`userId` int(11) NOT NULL,
		`hash` char(32) NOT NULL,
		`created` datetime NOT NULL,
		`source` varchar(255) NOT NULL,
		`thumb` varchar(255) NOT NULL,
		`image` varchar(255) NOT NULL,
		`title` text NOT NULL,
		PRIMARY KEY  (`id`)
	) ENGINE=MyISAM CHARSET=utf8;
	
	CREATE TABLE `user` (
		`id` int(11) NOT NULL auto_increment,
		`name` varchar(255) NOT NULL,
		`pass` char(32) NOT NULL,
		`loginId` char(32) NOT NULL,
		PRIMARY KEY  (`id`)
	) ENGINE=MyISAM CHARSET=utf8;
