-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.45
-- รุ่นของ PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `db_code`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `admin`
-- 

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL auto_increment,
  `admin_name` text NOT NULL,
  `admin_password` text NOT NULL,
  PRIMARY KEY  (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- dump ตาราง `admin`
-- 

INSERT INTO `admin` VALUES (1, 'admin', 'admin');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `book`
-- 

CREATE TABLE `book` (
  `book_id` int(10) NOT NULL auto_increment,
  `book_name` text NOT NULL,
  `book_detail` text NOT NULL,
  `typebook_id` int(10) NOT NULL,
  PRIMARY KEY  (`book_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

-- 
-- dump ตาราง `book`
-- 

INSERT INTO `book` VALUES (1, '53487.pdf', 'ทดลองส่งไฟล์ลับ', 1);
INSERT INTO `book` VALUES (2, '29744.pdf', 'ประชุมด่วน\r\nเรื่อง กีฬาสี ประจำปี 2554', 6);
INSERT INTO `book` VALUES (3, '92684.pdf', 'ซ่อน Word', 6);
INSERT INTO `book` VALUES (4, '83756.pdf', 'admin ส่งหนังสือเวียน', 1);
INSERT INTO `book` VALUES (5, '33067.pdf', 'ส่ง ครั้งที่ 2\r\nทดสอบ', 16);
INSERT INTO `book` VALUES (6, '77154.pdf', 'xxxxxxxxx', 6);
INSERT INTO `book` VALUES (7, '61650.pdf', 'wwwwwww', 12);
INSERT INTO `book` VALUES (8, '14860.pdf', 'zzzzzzz', 2);
INSERT INTO `book` VALUES (9, '77175.pdf', 'ooooooo', 1);
INSERT INTO `book` VALUES (10, '66049.pdf', '1111', 14);
INSERT INTO `book` VALUES (11, '16665.pdf', '22222', 13);
INSERT INTO `book` VALUES (12, '08708.pdf', 'aaaa', 14);
INSERT INTO `book` VALUES (13, '60152.pdf', 'sss', 14);
INSERT INTO `book` VALUES (14, '65924.pdf', 'ss', 17);
INSERT INTO `book` VALUES (15, '96581.pdf', 'yyyyyy', 5);
INSERT INTO `book` VALUES (16, '50952.pdf', '22222', 2);
INSERT INTO `book` VALUES (17, '39390.pdf', 'xxxxx', 15);
INSERT INTO `book` VALUES (18, '21580.pdf', 'sdgsfdhfghxfjng', 6);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `position`
-- 

CREATE TABLE `position` (
  `position_id` int(10) NOT NULL auto_increment,
  `position_name` text NOT NULL,
  `position_detail` text NOT NULL,
  PRIMARY KEY  (`position_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

-- 
-- dump ตาราง `position`
-- 

INSERT INTO `position` VALUES (1, 'Dean', 'คณบดี');
INSERT INTO `position` VALUES (2, 'Stock', 'งานพัสดุ');
INSERT INTO `position` VALUES (3, 'Course', 'งานหลักสูตร');
INSERT INTO `position` VALUES (4, 'Academic', 'งานวิชาการ');
INSERT INTO `position` VALUES (5, 'Person', 'งานบริหารงานบุคคล');
INSERT INTO `position` VALUES (6, 'Welfare', 'สวัสดิการนักศึกษา');
INSERT INTO `position` VALUES (9, 'Planning', 'งานนโยบายและแผน');
INSERT INTO `position` VALUES (8, 'Finance', 'งานการเงินและบัญชี');
INSERT INTO `position` VALUES (7, 'Administration', 'งานธุรการและสารบรรณ');
INSERT INTO `position` VALUES (10, 'Jobs buildings', 'งานอาคารสถานที่');
INSERT INTO `position` VALUES (11, 'Public Relations', 'งานประชาสัมพันธ์');
INSERT INTO `position` VALUES (12, 'Quality Assurance', 'งานประกันคุณภาพ');
INSERT INTO `position` VALUES (13, 'Control within', 'งานควบคุมภายใน');
INSERT INTO `position` VALUES (14, 'Teaching Jobs', 'งานการเรียนการสอน');
INSERT INTO `position` VALUES (15, 'Information ', 'งานสารสนเทศนักศึกษา');
INSERT INTO `position` VALUES (16, 'Student Affairs', 'งานกิจการนักศึกษา');
INSERT INTO `position` VALUES (17, 'Research', 'งานวิจัย');
INSERT INTO `position` VALUES (18, 'Foreign Sub', 'งานวิเทศสัมพันธ์');
INSERT INTO `position` VALUES (19, 'Laboratory', 'งานห้องปฏิบัติการ');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `send`
-- 

CREATE TABLE `send` (
  `send_id` int(10) NOT NULL auto_increment,
  `user_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `subject` text NOT NULL,
  `send_key` text,
  `send_date` text NOT NULL,
  `send_time` text NOT NULL,
  PRIMARY KEY  (`send_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

-- 
-- dump ตาราง `send`
-- 

INSERT INTO `send` VALUES (1, 1, 1, 'ทดลองส่งไฟล์ลับ', 'lawan_ict@hotmail.com', ' 15 May 2010 ', ' 0:36:01');
INSERT INTO `send` VALUES (2, 9, 2, 'ประชุมด่วน', 'fee_hot@hotmail.com', ' 15 May 2010 ', ' 0:38:36');
INSERT INTO `send` VALUES (3, 9, 3, 'ซ่อน Word', 'fee_hot@hotmail.com', ' 15 May 2010 ', ' 0:45:11');
INSERT INTO `send` VALUES (4, 1, 4, 'admin ส่งหนังสือเวียน', 'lawan_ict@hotmail.com', ' 15 May 2010 ', ' 1:14:02');
INSERT INTO `send` VALUES (5, 1, 5, 'ส่ง ครั้งที่ 2', 'lawan_ict@hotmail.com', ' 15 May 2010 ', ' 1:16:01');
INSERT INTO `send` VALUES (6, 9, 6, 'xxxxxxx', 'fee_hot@hotmail.com', ' 17 May 2010 ', ' 22:01:16');
INSERT INTO `send` VALUES (7, 1, 7, 'wwwwww', 'lawan_ict@hotmail.com', ' 18 May 2010 ', ' 0:00:27');
INSERT INTO `send` VALUES (8, 1, 8, 'zzzzzzz', 'lawan_ict@hotmail.com', ' 18 September 2010 ', ' 0:01:05');
INSERT INTO `send` VALUES (9, 2, 9, 'oooooo', 'adek_jubjub@hotmail.com', ' 18 May 2010 ', ' 0:15:32');
INSERT INTO `send` VALUES (10, 3, 10, '111', 'nurma_20@hotmail.com', ' 18 May 2010 ', ' 0:19:55');
INSERT INTO `send` VALUES (11, 3, 11, '222', 'nurma_20@hotmail.com', ' 18 May 2010 ', ' 0:21:09');
INSERT INTO `send` VALUES (12, 1, 12, 'aaaa', 'lawan_ict@hotmail.com', ' 18 May 2010 ', ' 0:22:38');
INSERT INTO `send` VALUES (13, 1, 13, 'sss', 'lawan_ict@hotmail.com', ' 18 May 2010 ', ' 0:23:21');
INSERT INTO `send` VALUES (14, 1, 14, 'sss', 'lawan_ict@hotmail.com', ' 18 May 2010 ', ' 0:23:48');
INSERT INTO `send` VALUES (15, 1, 15, 'yyyyy', 'lawan_ict@hotmail.com', ' 18 May 2010 ', ' 0:26:07');
INSERT INTO `send` VALUES (16, 1, 16, '222', 'lawan_ict@hotmail.com', ' 18 May 2010 ', ' 2:41:32');
INSERT INTO `send` VALUES (17, 1, 17, 'xxxxx', 'lawan_ict@hotmail.com', ' 07 October 2015 ', ' 17:31:48');
INSERT INTO `send` VALUES (18, 1, 18, 'dgdfhghf', 'lawan_ict@hotmail.com', ' 23 November 2015 ', ' 11:24:35');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `send_detail`
-- 

CREATE TABLE `send_detail` (
  `send_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `vision` text NOT NULL,
  `open` text NOT NULL,
  `approve` text NOT NULL,
  PRIMARY KEY  (`send_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `send_detail`
-- 

INSERT INTO `send_detail` VALUES (1, 9, '1', '1', '2');
INSERT INTO `send_detail` VALUES (1, 2, '1', '0', '1');
INSERT INTO `send_detail` VALUES (2, 1, '1', '1', '1');
INSERT INTO `send_detail` VALUES (2, 2, '1', '1', '1');
INSERT INTO `send_detail` VALUES (2, 6, '2', '0', '1');
INSERT INTO `send_detail` VALUES (3, 1, '1', '1', '1');
INSERT INTO `send_detail` VALUES (3, 8, '1', '0', '1');
INSERT INTO `send_detail` VALUES (4, 2, '1', '1', '1');
INSERT INTO `send_detail` VALUES (4, 9, '1', '0', '1');
INSERT INTO `send_detail` VALUES (5, 9, '1', '0', '1');
INSERT INTO `send_detail` VALUES (5, 5, '1', '0', '1');
INSERT INTO `send_detail` VALUES (6, 4, '1', '0', '1');
INSERT INTO `send_detail` VALUES (6, 5, '1', '0', '1');
INSERT INTO `send_detail` VALUES (6, 11, '1', '0', '1');
INSERT INTO `send_detail` VALUES (7, 6, '1', '0', '1');
INSERT INTO `send_detail` VALUES (7, 10, '1', '0', '1');
INSERT INTO `send_detail` VALUES (8, 3, '1', '0', '1');
INSERT INTO `send_detail` VALUES (8, 7, '1', '0', '1');
INSERT INTO `send_detail` VALUES (9, 1, '0', '1', '2');
INSERT INTO `send_detail` VALUES (9, 6, '0', '1', '2');
INSERT INTO `send_detail` VALUES (10, 2, '0', '0', '0');
INSERT INTO `send_detail` VALUES (11, 2, '0', '0', '0');
INSERT INTO `send_detail` VALUES (12, 3, '0', '0', '0');
INSERT INTO `send_detail` VALUES (13, 2, '0', '0', '1');
INSERT INTO `send_detail` VALUES (13, 1, '0', '1', '1');
INSERT INTO `send_detail` VALUES (14, 2, '0', '0', '0');
INSERT INTO `send_detail` VALUES (14, 4, '0', '0', '0');
INSERT INTO `send_detail` VALUES (15, 4, '1', '0', '1');
INSERT INTO `send_detail` VALUES (16, 2, '1', '1', '0');
INSERT INTO `send_detail` VALUES (16, 6, '2', '0', '0');
INSERT INTO `send_detail` VALUES (17, 2, '1', '1', '2');
INSERT INTO `send_detail` VALUES (18, 1, '0', '0', '0');
INSERT INTO `send_detail` VALUES (18, 2, '0', '0', '0');
INSERT INTO `send_detail` VALUES (18, 3, '0', '0', '0');
INSERT INTO `send_detail` VALUES (18, 0, '0', '0', '0');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `typebook`
-- 

CREATE TABLE `typebook` (
  `typebook_id` int(10) NOT NULL auto_increment,
  `typebook_name` text NOT NULL,
  `typebook_detail` text NOT NULL,
  PRIMARY KEY  (`typebook_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- 
-- dump ตาราง `typebook`
-- 

INSERT INTO `typebook` VALUES (1, 'Dean', 'คณบดี');
INSERT INTO `typebook` VALUES (2, 'Stock', 'งานพัสดุ');
INSERT INTO `typebook` VALUES (3, 'Course', 'งานหลักสูตร');
INSERT INTO `typebook` VALUES (4, 'Academic', 'งานวิชาการ');
INSERT INTO `typebook` VALUES (5, 'Person', 'งานบริหารงานบุคคล');
INSERT INTO `typebook` VALUES (6, 'Welfare', 'สวัสดิการนักศึกษา');
INSERT INTO `typebook` VALUES (7, 'Administration', 'งานธุรการและสารบรรณ');
INSERT INTO `typebook` VALUES (8, 'Planning ', 'งานนโยบายและแผน ');
INSERT INTO `typebook` VALUES (9, 'Finance', 'งานการเงินและบัญชี');
INSERT INTO `typebook` VALUES (10, 'Jobs buildings', 'งานอาคารสถานที่');
INSERT INTO `typebook` VALUES (11, 'Public Relations', 'งานประชาสัมพันธ์');
INSERT INTO `typebook` VALUES (12, 'Quality Assurance', 'งานประกันคุณภาพ');
INSERT INTO `typebook` VALUES (13, 'Control within', 'งานควบคุมภายใน');
INSERT INTO `typebook` VALUES (14, 'Teaching Jobs', 'งานการเรียนการสอน');
INSERT INTO `typebook` VALUES (15, 'Information', 'งานสารสนเทศนักศึกษา');
INSERT INTO `typebook` VALUES (16, 'Student Affairs', 'งานกิจการนักศึกษา');
INSERT INTO `typebook` VALUES (17, 'Research', 'งานวิจัย');
INSERT INTO `typebook` VALUES (18, 'Foreign Sub', 'งานวิเทศสัมพันธ์');
INSERT INTO `typebook` VALUES (19, 'Laboratory', 'งานห้องปฏิบัติการ');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `user`
-- 

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL auto_increment,
  `user_name` text NOT NULL,
  `user_password` text NOT NULL,
  `user_fname` text NOT NULL,
  `user_surname` text NOT NULL,
  `user_address` text NOT NULL,
  `id_card` text NOT NULL,
  `user_sex` text NOT NULL,
  `user_email` text NOT NULL,
  `user_tell` text NOT NULL,
  `user_pic` text NOT NULL,
  `user_key` text NOT NULL,
  `position_id` int(10) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- 
-- dump ตาราง `user`
-- 

INSERT INTO `user` VALUES (1, 'test1', 'test1', 'peter', 'pan', '26/1 ม.1\r\nต.ขอนแก่น อ.ขอนแก่น\r\nจ.ขอนแก่น 40000', '1940200058967', 'ชาย', 'lawan_ict@hotmail.com', '0847509971', '1234.png', '1', 1);
INSERT INTO `user` VALUES (2, 'test2', 'test2', 'kokokung', 'pooler', '26/1 ม.1\r\nต.ขอนแก่น อ.ขอนแก่น\r\nจ.ขอนแก่น 40000', '4523553555555', 'ชาย', 'adek_jubjub@hotmail.com', '0828227349', '12345.png', '2', 1);
INSERT INTO `user` VALUES (3, 'test3', 'test3', 'sso', 'jang', '26/1 ม.1\r\nต.ขอนแก่น อ.ขอนแก่น\r\nจ.ขอนแก่น 40000', '1969900034567', 'หญิง', 'nurma_20@hotmail.com', '0894829787', '123456.png', '3', 2);
