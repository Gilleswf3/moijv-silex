ALTER TABLE `user` ADD `roles` VARCHAR(255) NOT NULL AFTER `email`, ADD `salt` VARCHAR(255) NOT NULL AFTER `roles`;