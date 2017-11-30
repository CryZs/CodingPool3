CREATE TABLE `user` (
    id          INT UNSIGNED    AUTO_INCREMENT  PRIMARY KEY,
    name        VARCHAR(30)     NOT NULL,
    email       VARCHAR(255)    NOT NULL,
    role        TINYINT         NOT NULL,
    created_at  DATETIME        NOT NULL,
    grades      TINYINT         NOT NULL,
    enabled     TINYINT
);
CREATE TABLE `post`(
    id              INT UNSIGNED    AUTO_INCREMENT  PRIMARY KEY,
    title           VARCHAR(150)    NOT NULL,
    body            TEXT            NOT NULL,
    created_at      DATETIME        NOT NULL,
    published_at    DATETIME        NOT NULL,
    cover           VARCHAR(255)    NOT NULL,
    author_id       INT UNSIGNED,
    CONSTRAINT fk_post_author FOREIGN KEY (`author_id`) REFERENCES `user`(`id`)
);
CREATE TABLE `comment`(
    id      INT UNSIGNED    AUTO_INCREMENT  PRIMARY KEY,
    body    TEXT            NOT NULL,
    rate    INT(2) UNSIGNED,
    user_id INT UNSIGNED,
    post_id INT UNSIGNED,
    CONSTRAINT fk_user_id FOREIGN KEY (`user_id`) REFERENCES `user`(`id`)
);
CREATE TABLE `co-author`(
    post_id     INT UNSIGNED,
    user_id     INT UNSIGNED,
    PRIMARY KEY (post_id,user_id),
    CONSTRAINT fk_post_coauthor FOREIGN KEY (`post_id`) REFERENCES `post`(`id`),
    CONSTRAINT fk_coauthor_post FOREIGN KEY (`user_id`) REFERENCES `user`(`id`)
);