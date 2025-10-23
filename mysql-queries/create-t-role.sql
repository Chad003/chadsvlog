CREATE TABLE IF NOT EXISTS `t_role` (
    `ID` int NOT NULL AUTO_INCREMENT,
    `NAME` varchar(50) NOT NULL,
    `FLAG` int NOT NULL DEFAULT '1' COMMENT '1=Enabled, 0=Disabled',
    `PARENT` int DEFAULT NULL COMMENT 'Points to the t_role.ID parent record.',
    `CREATED_BY` varchar(50) NOT NULL COMMENT 'Must match with a t_user.USERNAME record.',
    `CREATED_DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`ID`)
) COMMENT = 'User account role information.';
