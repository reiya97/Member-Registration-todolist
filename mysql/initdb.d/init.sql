CREATE TABLE test_db.users (
    id          INT       AUTO_INCREMENT      NOT NULL,
    username  VARCHAR(14)     NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO `users` VALUES (1, 'reiya')