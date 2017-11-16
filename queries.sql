CREATE DATABASE assigment3_eden;
USE assigment3_eden;
CREATE TABLE users 
( `user_id` int NOT NULL   PRIMARY KEY , #AUTO_INCREMENT
  `name` VARCHAR(20),
 `password` VARCHAR(20),
 `email` VARCHAR(30) 
  ) 
ENGINE = InnoDB;

CREATE TABLE tables 
( `table_id` int NOT NULL  AUTO_INCREMENT,
 `state` VARCHAR(10), 
 `user_id` int,
 PRIMARY KEY (`table_id`),
FOREIGN KEY (`user_id`) REFERENCES users(`user_id`) ) 
ENGINE = InnoDB;

#INSERT INTO `assigment3_eden`.`users` (`user_id`, `name`, `password`,`email`) VALUES (1, 'eden', '123','eden@jusce.com');

# dummy user 
INSERT INTO `assigment3_eden`.`users` (`user_id`, `name`, `password`,`email`) VALUES(20,'free', '123','free@free'); 
# Do not use the Dummy user

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);


INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);

INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);
INSERT INTO `assigment3_eden`.`tables` (`table_id`, `state`, `user_id`) VALUES (NULL, 'free', NULL), (NULL, 'free', NULL);


