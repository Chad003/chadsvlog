CREATE TABLE IF NOT EXISTS `t_user` (
    `ID` int unsigned NOT NULL AUTO_INCREMENT,
    `ROLE_ID` int NOT NULL COMMENT 'Must match wiht a t_role.ID record.',
    `USERNAME` varchar(30) NOT NULL,
    `PASSWORD` varchar(64) NOT NULL COMMENT 'Password hash for comparison.',
    `STATUS` int NOT NULL DEFAULT '1' COMMENT '1=Enabled, 2=Disabled',
    `PHONE` varchar(64) DEFAULT NULL,
    `EMAIL` varchar(64) DEFAULT NULL,
    `CREATED_BY` varchar(50) NOT NULL COMMENT 'Must match with a t_user.USERNAME having its CREATED_DATE > this.CREATED_DATE.',
    `CREATED_DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `LAST_LOGIN_TIME` datetime DEFAULT NULL,
    `LAST_LOGIN_IP` varchar(20) DEFAULT NULL,
    `LAST_UPDATED_BY` varchar(50) DEFAULT NULL,
    `LAST_UPDATED_DATE` datetime DEFAULT NULL,
    PRIMARY KEY (`ID`)
) COMMENT = 'Back office user accounts information';