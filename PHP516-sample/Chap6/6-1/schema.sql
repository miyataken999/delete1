
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- publishers
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `publishers`;


CREATE TABLE `publishers`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(30)  NOT NULL,
	`address` VARCHAR(30),
	`tel` VARCHAR(30),
	`email` VARCHAR(60),
	`delete_time` DATETIME,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB CHARACTER SET 'utf8';

#-----------------------------------------------------------------------------
#-- books
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `books`;


CREATE TABLE `books`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(100)  NOT NULL,
	`subtitle` VARCHAR(100),
	`page_num` INTEGER,
	`author` VARCHAR(30),
	`price` INTEGER,
	`publish_date` DATE,
	`publisher_id` INTEGER,
	`cdrom_flag` INTEGER,
	`delete_time` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `books_FI_1` (`publisher_id`),
	CONSTRAINT `books_FK_1`
		FOREIGN KEY (`publisher_id`)
		REFERENCES `publishers` (`id`)
) ENGINE=InnoDB CHARACTER SET 'utf8';

#-----------------------------------------------------------------------------
#-- reviews
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `reviews`;


CREATE TABLE `reviews`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`book_id` INTEGER,
	`reviewer` VARCHAR(20),
	`review` TEXT,
	`review_time` DATETIME,
	`delete_time` DATETIME,
	PRIMARY KEY (`id`),
	KEY `reviews_idx01`(`reviewer`),
	INDEX `reviews_FI_1` (`book_id`),
	CONSTRAINT `reviews_FK_1`
		FOREIGN KEY (`book_id`)
		REFERENCES `books` (`id`)
) ENGINE=InnoDB CHARACTER SET 'utf8';

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
