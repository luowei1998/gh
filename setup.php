<?php
//医生表
mysql_query("CREATE TABLE `doctor`  (`uuid` char(13) comment '唯一标识符') ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='医生表'");
mysql_query("ALTER TABLE `doctor` ADD `doctor_name`  char(20) comment '医生姓名|text' ");
mysql_query("ALTER TABLE `doctor` ADD `clinic_room`  char(40) '科室|text' ");
mysql_query("ALTER TABLE `doctor` ADD `fee`  char(4) '挂号费|text' ");
mysql_query("ALTER TABLE `doctor` ADD `number`  char(4) '挂号上限|text' ");
mysql_query("ALTER TABLE `doctor` ADD `professional_title`  char(40) comment '职称|text' ");
mysql_query("ALTER TABLE `doctor` ADD `photo`  char(40) comment '相片|text' ");
mysql_query("ALTER TABLE `doctor` ADD `mon_am`  char(1) comment '周一上午|text' ");
mysql_query("ALTER TABLE `doctor` ADD `tue_am`  char(1) comment '周二上午|text' ");
mysql_query("ALTER TABLE `doctor` ADD `wed_am`  char(1) comment '周三上午|text' ");
mysql_query("ALTER TABLE `doctor` ADD `thu_am`  char(1) comment '周四上午|text' ");
mysql_query("ALTER TABLE `doctor` ADD `fri_am`  char(1) comment '周五上午|text' ");
mysql_query("ALTER TABLE `doctor` ADD `sat_am`  char(1) comment '周六上午|text' ");
mysql_query("ALTER TABLE `doctor` ADD `sun_am`  char(1) comment '周日上午|text' ");
mysql_query("ALTER TABLE `doctor` ADD `mon_pm`  char(1) comment '周一下午|text' ");
mysql_query("ALTER TABLE `doctor` ADD `tue_pm`  char(1) comment '周二下午|text' ");
mysql_query("ALTER TABLE `doctor` ADD `wed_pm`  char(1) comment '周三下午|text' ");
mysql_query("ALTER TABLE `doctor` ADD `thu_pm`  char(1) comment '周四下午|text' ");
mysql_query("ALTER TABLE `doctor` ADD `fri_pm`  char(1) comment '周五下午|text' ");
mysql_query("ALTER TABLE `doctor` ADD `sat_pm`  char(1) comment '周六下午|text' ");
mysql_query("ALTER TABLE `doctor` ADD `sun_pm`  char(1) comment '周日下午|text' ");
mysql_query("create index `name` on `doctor`(name) ");

//患者表
mysql_query("CREATE TABLE `patient`  (`uuid` char(13) comment '唯一标识符') ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='患者表'");
mysql_query("ALTER TABLE `patient` ADD `patient_name`  char(20) comment '患者姓名|text' ");
mysql_query("ALTER TABLE `patient` ADD `id`  char(18) comment '身份证|text' ");
mysql_query("ALTER TABLE `patient` ADD `gender`  char(1) comment '性别|text' ");

//挂号表
mysql_query("CREATE TABLE `registration`  (`uuid` char(13) comment '唯一标识符') ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='挂号表'");
mysql_query("ALTER TABLE `registration` ADD `date`  int comment '挂号日期|text' ");
mysql_query("ALTER TABLE `registration` ADD `doctor_uuid`  char(13) comment '医生id|text' ");
mysql_query("ALTER TABLE `registration` ADD `petient_uuid`  char(13) comment '患者id|text' ");
mysql_query("ALTER TABLE `registration` ADD `point_date`  char(13) comment '所挂日期|text' ");

