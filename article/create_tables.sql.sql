CREATE TABLE `article`(
    `id` INT NOT NULL,
    `title` TEXT NOT NULL,
    `author` TEXT NOT NULL,
    `date_creation` DATETIME NOT NULL DEFAULT now(),
    `date_modification` DATETIME NULL DEFAULT NULL
);

CREATE TABLE `content`(
    `id` INT NOT NULL,
    `content` TEXT NOT NULL,
    `type` TEXT NOT NULL,
    `position` INT NOT NULL,
    `article_id` INT NOT NULL,
    `date_creation` DATETIME NOT NULL DEFAULT now(),
    `date_modification` DATETIME NULL DEFAULT NULL
);

ALTER TABLE `article` ADD PRIMARY KEY (`id`);
ALTER TABLE `content` ADD PRIMARY KEY (`id`);

ALTER TABLE  `content` ADD CONSTRAINT `content_foreign_key` FOREIGN KEY (`article_id`) REFERENCES `article`(`id`);